<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-16 13:24:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ MODPATH/orm/classes/Model/Auth/User.php [ 59 ] in file:line
2016-08-16 13:24:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-16 13:25:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ MODPATH/orm/classes/Model/Auth/User.php [ 59 ] in file:line
2016-08-16 13:25:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-16 13:35:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: Gallery_List ~ MODPATH/admin/views/admin/dashboard/index.php [ 37 ] in /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/dashboard/index.php:37
2016-08-16 13:35:11 --- DEBUG: #0 /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/dashboard/index.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 37, Array)
#1 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/admin.php(23): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/tz_gallery/modules/admin/classes/Template/ViewAdmin.php(46): Kohana_Controller_Template->after()
#9 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller.php(87): Template_ViewAdmin->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#12 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/tz_gallery/index.php(113): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/dashboard/index.php:37
2016-08-16 13:35:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: Gallery ~ MODPATH/admin/views/admin/dashboard/index.php [ 37 ] in /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/dashboard/index.php:37
2016-08-16 13:35:24 --- DEBUG: #0 /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/dashboard/index.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 37, Array)
#1 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/admin.php(23): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/tz_gallery/modules/admin/classes/Template/ViewAdmin.php(46): Kohana_Controller_Template->after()
#9 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller.php(87): Template_ViewAdmin->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#12 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/tz_gallery/index.php(113): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/dashboard/index.php:37
2016-08-16 13:35:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: Gallery ~ MODPATH/admin/views/admin/dashboard/index.php [ 37 ] in /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/dashboard/index.php:37
2016-08-16 13:35:30 --- DEBUG: #0 /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/dashboard/index.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 37, Array)
#1 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/admin.php(23): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/tz_gallery/modules/admin/classes/Template/ViewAdmin.php(46): Kohana_Controller_Template->after()
#9 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller.php(87): Template_ViewAdmin->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#12 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/tz_gallery/index.php(113): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/dashboard/index.php:37
2016-08-16 13:35:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: Gallery ~ MODPATH/admin/views/admin/dashboard/index.php [ 37 ] in /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/dashboard/index.php:37
2016-08-16 13:35:31 --- DEBUG: #0 /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/dashboard/index.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 37, Array)
#1 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/admin.php(23): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(61): include('/Applications/M...')
#6 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#7 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Applications/MAMP/htdocs/tz_gallery/modules/admin/classes/Template/ViewAdmin.php(46): Kohana_Controller_Template->after()
#9 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller.php(87): Template_ViewAdmin->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#12 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/tz_gallery/index.php(113): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/dashboard/index.php:37
2016-08-16 13:36:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The clidk property does not exist in the Model_Gallery class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Applications/MAMP/htdocs/tz_gallery/modules/orm/classes/Kohana/ORM.php:603
2016-08-16 13:36:37 --- DEBUG: #0 /Applications/MAMP/htdocs/tz_gallery/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('clidk')
#1 /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/dashboard/index.php(44): Kohana_ORM->__get('clidk')
#2 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/admin.php(23): Kohana_View->__toString()
#6 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(61): include('/Applications/M...')
#7 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#8 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /Applications/MAMP/htdocs/tz_gallery/modules/admin/classes/Template/ViewAdmin.php(46): Kohana_Controller_Template->after()
#10 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller.php(87): Template_ViewAdmin->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#13 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /Applications/MAMP/htdocs/tz_gallery/index.php(113): Kohana_Request->execute()
#16 {main} in /Applications/MAMP/htdocs/tz_gallery/modules/orm/classes/Kohana/ORM.php:603
2016-08-16 13:39:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Controller/Lending.php [ 11 ] in file:line
2016-08-16 13:39:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-16 13:44:32 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ASK LIMIT 1' at line 1 [ SELECT `gallery`.`id` AS `id`, `gallery`.`name` AS `name`, `gallery`.`url` AS `url`, `gallery`.`img` AS `img`, `gallery`.`view` AS `view`, `gallery`.`unique` AS `unique`, `gallery`.`click` AS `click` FROM `gallery` AS `gallery` ORDER BY `view` ASK LIMIT 1 ] ~ MODPATH/database/classes/Database/MySQLi.php [ 176 ] in /Applications/MAMP/htdocs/tz_gallery/modules/database/classes/Kohana/Database/Query.php:251
2016-08-16 13:44:32 --- DEBUG: #0 /Applications/MAMP/htdocs/tz_gallery/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `gallery...', false, Array)
#1 /Applications/MAMP/htdocs/tz_gallery/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /Applications/MAMP/htdocs/tz_gallery/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /Applications/MAMP/htdocs/tz_gallery/application/classes/Controller/Lending.php(14): Kohana_ORM->find()
#4 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller.php(84): Controller_Lending->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lending))
#7 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/tz_gallery/index.php(113): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/tz_gallery/modules/database/classes/Kohana/Database/Query.php:251
2016-08-16 14:28:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Template/JsonPublic.php [ 12 ] in file:line
2016-08-16 14:28:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-16 14:28:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/Template/JsonPublic.php [ 12 ] in file:line
2016-08-16 14:28:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-16 14:29:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Ajax_Banner::$user ~ MODPATH/admin/classes/Controller/Ajax/Banner.php [ 7 ] in /Applications/MAMP/htdocs/tz_gallery/modules/admin/classes/Controller/Ajax/Banner.php:7
2016-08-16 14:29:45 --- DEBUG: #0 /Applications/MAMP/htdocs/tz_gallery/modules/admin/classes/Controller/Ajax/Banner.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/Applications/M...', 7, Array)
#1 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller.php(84): Controller_Ajax_Banner->action_click()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Banner))
#4 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/tz_gallery/index.php(113): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/tz_gallery/modules/admin/classes/Controller/Ajax/Banner.php:7
2016-08-16 14:53:42 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH/classes/Controller/Lending.php [ 21 ] in file:line
2016-08-16 14:53:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-16 14:53:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/Controller/Lending.php [ 21 ] in /Applications/MAMP/htdocs/tz_gallery/application/classes/Controller/Lending.php:21
2016-08-16 14:53:51 --- DEBUG: #0 /Applications/MAMP/htdocs/tz_gallery/application/classes/Controller/Lending.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 21, Array)
#1 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller.php(84): Controller_Lending->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lending))
#4 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/tz_gallery/index.php(113): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/tz_gallery/application/classes/Controller/Lending.php:21
2016-08-16 14:53:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/Controller/Lending.php [ 21 ] in /Applications/MAMP/htdocs/tz_gallery/application/classes/Controller/Lending.php:21
2016-08-16 14:53:52 --- DEBUG: #0 /Applications/MAMP/htdocs/tz_gallery/application/classes/Controller/Lending.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', '/Applications/M...', 21, Array)
#1 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller.php(84): Controller_Lending->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Lending))
#4 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/tz_gallery/index.php(113): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/tz_gallery/application/classes/Controller/Lending.php:21
2016-08-16 15:02:09 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(media/admin/app/bootstrap.json): failed to open stream: No such file or directory ~ MODPATH/admin/classes/Template/ViewAdmin.php [ 24 ] in file:line
2016-08-16 15:02:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Applications/M...', 24, Array)
#1 /Applications/MAMP/htdocs/tz_gallery/modules/admin/classes/Template/ViewAdmin.php(24): file_get_contents('media/admin/app...')
#2 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller.php(87): Template_ViewAdmin->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Applications/MAMP/htdocs/tz_gallery/index.php(113): Kohana_Request->execute()
#8 {main} in file:line
2016-08-16 15:02:35 --- EMERGENCY: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/Kohana/View.php [ 344 ] in /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php:228
2016-08-16 15:02:35 --- DEBUG: #0 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(228): Kohana_View->render()
#1 /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/admin.php(23): Kohana_View->__toString()
#2 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Applications/MAMP/htdocs/tz_gallery/modules/admin/classes/Template/ViewAdmin.php(23): Kohana_Controller_Template->after()
#6 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller.php(87): Template_ViewAdmin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/MAMP/htdocs/tz_gallery/index.php(113): Kohana_Request->execute()
#12 {main} in /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php:228
2016-08-16 15:02:39 --- EMERGENCY: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/Kohana/View.php [ 344 ] in /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php:228
2016-08-16 15:02:39 --- DEBUG: #0 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(228): Kohana_View->render()
#1 /Applications/MAMP/htdocs/tz_gallery/modules/admin/views/admin/admin.php(23): Kohana_View->__toString()
#2 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(61): include('/Applications/M...')
#3 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#4 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /Applications/MAMP/htdocs/tz_gallery/modules/admin/classes/Template/ViewAdmin.php(23): Kohana_Controller_Template->after()
#6 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Controller.php(87): Template_ViewAdmin->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#9 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/MAMP/htdocs/tz_gallery/index.php(113): Kohana_Request->execute()
#12 {main} in /Applications/MAMP/htdocs/tz_gallery/system/classes/Kohana/View.php:228