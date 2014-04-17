<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Users\Controller\Users' => 'Users\Controller\UsersController',
        ),
    ),
 'router' => array(
        'routes' => array(
			'users' => array(
				'type'    => 'Literal',
				'options' => array(
					'route'    => '/users',
					'defaults' => array(
						'__NAMESPACE__' => 'Users\Controller',
						'controller'    => 'Users',
						'action'        => 'index',
					),
				),
				'may_terminate' => true,
				'child_routes' => array(
					'default' => array(
						'type'    => 'Segment',
						'options' => array(
							'route'    => '/[:controller[/:action[/:id]]]',
							'constraints' => array(
								'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
								'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
								'id'     	 => '[0-9a-zA-Z_-]*',
							),
							'defaults' => array(
							),
						),
					),
					'paginator' => array(
						'type'    => 'Segment',
						'options' => array(
							'route'    => '/:controller/[page/:page]',
							'constraints' => array(
								'page' => '[0-9]*',
							),
							'defaults' => array(
								'__NAMESPACE__' => 'Users\Controller',
								'controller'    => 'Users',
								'action'        => 'index',
							),
						),
					),
				
				),
			),			
		),
	),
    'view_manager' => array(
        'template_path_stack' => array(
            'users' => __DIR__ . '/../view',
        ),
    ),
    
 
   );
