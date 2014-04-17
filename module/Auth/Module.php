<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Auth;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Auth\Acl\Acl;

class Module implements AutoloaderProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
      
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
		    // if we're in a namespace deeper than one level we need to fix the \ in the path
                    __NAMESPACE__ => __DIR__ . '/src/' . str_replace('\\', '/' , __NAMESPACE__),
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

  public function onBootstrap(\Zend\EventManager\EventInterface $e) // use it to attach event listeners
	{
		$application = $e->getApplication();
		$em = $application->getEventManager();
		$em->attach('route', array($this, 'onRoute'), -100);
	}
	
	// WORKING the main engine for ACL
	public function onRoute(\Zend\EventManager\EventInterface $e) // Event manager of the app
	{
		$application = $e->getApplication();
		$routeMatch = $e->getRouteMatch();
		$sm = $application->getServiceManager();
		$auth = new \Zend\Authentication\AuthenticationService();
		$config = $sm->get('Config');
		$acl = new Acl($config);
		// everyone is guest untill it gets logged in
		$role = Acl::DEFAULT_ROLE; // The default role is guest $acl
		if ($auth->hasIdentity()) {
			$usr = $auth->getIdentity();
			$usrl_id = $usr->role; // Use a view to get the name of the role
			// TODO we don't need that if the names of the roles are comming from the DB
			switch ($usrl_id) {
				case 1 :
					$role = Acl::DEFAULT_ROLE; // guest
					break;
				case 'user' :
					$role = 'user';
					break;
                                case 'admin' :
					$role = 'admin';
					break;
				default :
					$role = Acl::DEFAULT_ROLE; // guest
					break;
			}
		}
		$controller = $routeMatch->getParam('controller');
		$action = $routeMatch->getParam('action');

		if (!$acl->hasResource($controller)) {
			throw new \Exception('Resource ' . $controller . ' not defined');
		}
		
		if (!$acl->isAllowed($role, $controller, $action)) {
			$url = $e->getRouter()->assemble(array(), array('name' => 'home'));
			$response = $e->getResponse();

			$response->getHeaders()->addHeaderLine('Location', $url);
			// The HTTP response status code 302 Found is a common way of performing a redirection.
			// http://en.wikipedia.org/wiki/HTTP_302
			$response->setStatusCode(302);
			$response->sendHeaders();
			exit;
		}
	}
}
