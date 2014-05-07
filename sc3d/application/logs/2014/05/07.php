<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-07 03:25:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function action_login() ~ APPPATH\classes\Controller\Auth.php [ 8 ] in file:line
2014-05-07 03:25:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-07 03:25:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function action_login() ~ APPPATH\classes\Controller\Auth.php [ 8 ] in file:line
2014-05-07 03:25:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-07 03:37:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Carrera.php [ 42 ] in file:line
2014-05-07 03:37:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-07 03:38:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::textcarrera() ~ APPPATH\views\carrera\editar.php [ 23 ] in file:line
2014-05-07 03:38:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-07 03:40:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: carrera ~ APPPATH\views\carrera\editar.php [ 4 ] in C:\wamp\www\SC3D\sc3d\application\views\carrera\editar.php:4
2014-05-07 03:40:01 --- DEBUG: #0 C:\wamp\www\SC3D\sc3d\application\views\carrera\editar.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\SC3...', 4, Array)
#1 C:\wamp\www\SC3D\sc3d\system\classes\Kohana\View.php(61): include('C:\wamp\www\SC3...')
#2 C:\wamp\www\SC3D\sc3d\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\SC3...', Array)
#3 C:\wamp\www\SC3D\sc3d\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\SC3D\sc3d\application\views\base.php(22): Kohana_View->__toString()
#5 C:\wamp\www\SC3D\sc3d\system\classes\Kohana\View.php(61): include('C:\wamp\www\SC3...')
#6 C:\wamp\www\SC3D\sc3d\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\SC3...', Array)
#7 C:\wamp\www\SC3D\sc3d\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\SC3D\sc3d\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\SC3D\sc3d\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carrera))
#11 C:\wamp\www\SC3D\sc3d\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\SC3D\sc3d\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\SC3D\sc3d\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\SC3D\sc3d\application\views\carrera\editar.php:4