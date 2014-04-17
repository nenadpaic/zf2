<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
   'db' => array(
      'driver'         => 'Pdo',
      'dsn'            => 'mysql:dbname=zf2cloud;host=zf2cloud-db.my.phpcloud.com',
       'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ),
        'username' => 'zf2cloud',
        'password' => 'poiu123321',
   ),
   'service_manager' => array(
      'factories' => array(
         'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
      ),
   ),
    'doctrine' => array(
        'connection' => array(
            // default connection name
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => 'localhost',
                    'port'     => '3306', // default 3306 find and change in H:\xampp\mysql\bin\my.ini
                    'user'     => 'nemesis',
                    'password' => 'poiu123321',
                    'dbname'   => 'zend',
					'charset' => 'utf8', // extra
					'driverOptions' => array(
							1002=>'SET NAMES utf8'
					)
                )
            )
        )
    ),
    'static_salt' => '005fhgr3451ssjkabtyWxC',
    'email_nas'   => 'nenadpaic@sbb.rs',
    'site_name'   => 'popusti',
);
