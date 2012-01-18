<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-04 07:49:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: time ~ APPPATH/classes/model/forecasthandler.php [ 43 ]
2012-01-04 07:49:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: time ~ APPPATH/classes/model/forecasthandler.php [ 43 ]
--
#0 /users/Therese/Sites/weather/application/classes/model/forecasthandler.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 43, Array)
#1 /users/Therese/Sites/weather/application/classes/controller/index.php(19): Model_Forecasthandler->get_default_forecast_objects(Object(Response))
#2 [internal function]: Controller_Index->action_index()
#3 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#4 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-04 07:58:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: fromTime ~ APPPATH/classes/model/forecasthandler.php [ 55 ]
2012-01-04 07:58:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: fromTime ~ APPPATH/classes/model/forecasthandler.php [ 55 ]
--
#0 /users/Therese/Sites/weather/application/classes/model/forecasthandler.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 55, Array)
#1 /users/Therese/Sites/weather/application/classes/controller/index.php(19): Model_Forecasthandler->get_default_forecast_objects(Object(Response))
#2 [internal function]: Controller_Index->action_index()
#3 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#4 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-04 07:58:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: f ~ APPPATH/classes/model/forecasthandler.php [ 56 ]
2012-01-04 07:58:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: f ~ APPPATH/classes/model/forecasthandler.php [ 56 ]
--
#0 /users/Therese/Sites/weather/application/classes/model/forecasthandler.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 56, Array)
#1 /users/Therese/Sites/weather/application/classes/controller/index.php(19): Model_Forecasthandler->get_default_forecast_objects(Object(Response))
#2 [internal function]: Controller_Index->action_index()
#3 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#4 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-04 08:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:10:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:10:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:22:16 --- ERROR: ErrorException [ 1 ]: Cannot access private property Forecast_Default::$fromTime ~ APPPATH/views/defaulttable.php [ 8 ]
2012-01-04 08:22:16 --- STRACE: ErrorException [ 1 ]: Cannot access private property Forecast_Default::$fromTime ~ APPPATH/views/defaulttable.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 08:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:22:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:22:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:22:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:22:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:22:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:22:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:24:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:24:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:24:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:24:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:24:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:24:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: views/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:34:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:34:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/010.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/010.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/012.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/012.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/012.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/012.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/010.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/010.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.41.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.41.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.41.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.41.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.41.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.41.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: 10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.41.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.41.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.41.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.41.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.41.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.41.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/02n.34.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.41.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.41.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/mf/03n.37.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/1.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/2.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/3.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/4.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/9.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/10n.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/10n.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/09d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/12d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/09d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/12d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/03.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/10n.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/10n.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/02.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/09d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/09d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/12d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/12d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/01.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/10n.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/10n.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/09d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/09d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/12d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/12d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/04d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/04d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/10n.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/10n.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/09d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/09d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/04d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/04d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/12d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/icons/12d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 08:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 08:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 09:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 09:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 09:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 09:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 09:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 09:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:47:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: period ~ APPPATH/views/defaulttable.php [ 21 ]
2012-01-04 12:47:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: period ~ APPPATH/views/defaulttable.php [ 21 ]
--
#0 /users/Therese/Sites/weather/application/views/defaulttable.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 21, Array)
#1 /users/Therese/Sites/weather/system/classes/kohana/view.php(61): include('/users/Therese/...')
#2 /users/Therese/Sites/weather/system/classes/kohana/view.php(343): Kohana_View::capture('/users/Therese/...', Array)
#3 /users/Therese/Sites/weather/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /users/Therese/Sites/weather/application/views/template.php(10): Kohana_View->__toString()
#5 /users/Therese/Sites/weather/system/classes/kohana/view.php(61): include('/users/Therese/...')
#6 /users/Therese/Sites/weather/system/classes/kohana/view.php(343): Kohana_View::capture('/users/Therese/...', Array)
#7 /users/Therese/Sites/weather/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /users/Therese/Sites/weather/application/classes/controller/index.php(78): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Index->after()
#10 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#11 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-04 12:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:53:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:53:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:53:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:53:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:53:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:53:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 12:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 12:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:03:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-04 13:03:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 13:09:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:09:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:09:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:09:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:09:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:09:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/print.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-04 13:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 13:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecats was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-04 13:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecats was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 13:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecast/kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-04 13:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecast/kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 13:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdfg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-04 13:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdfg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 13:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecast/kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-04 13:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecast/kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 13:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecast/kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-04 13:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecast/kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 13:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecast/kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-04 13:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecast/kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 13:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecast/kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-04 13:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecast/kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 13:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:31:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:31:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:31:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:31:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:50:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$city ~ APPPATH/classes/controller/fivedayforecast.php [ 22 ]
2012-01-04 13:50:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$city ~ APPPATH/classes/controller/fivedayforecast.php [ 22 ]
--
#0 /users/Therese/Sites/weather/application/classes/controller/fivedayforecast.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', '/users/Therese/...', 22, Array)
#1 [internal function]: Controller_Fivedayforecast->action_index()
#2 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Fivedayforecast))
#3 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-04 13:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 13:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 13:59:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/fivedayforecast.php [ 11 ]
2012-01-04 13:59:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/fivedayforecast.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:06:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
2012-01-04 14:06:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
--
#0 /users/Therese/Sites/weather/application/views/defaulttable.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 4, Array)
#1 /users/Therese/Sites/weather/system/classes/kohana/view.php(61): include('/users/Therese/...')
#2 /users/Therese/Sites/weather/system/classes/kohana/view.php(343): Kohana_View::capture('/users/Therese/...', Array)
#3 /users/Therese/Sites/weather/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /users/Therese/Sites/weather/application/classes/controller/fivedayforecast.php(29): Kohana_View->__toString()
#5 [internal function]: Controller_Fivedayforecast->action_index()
#6 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Fivedayforecast))
#7 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-04 14:06:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
2012-01-04 14:06:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
--
#0 /users/Therese/Sites/weather/application/views/defaulttable.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 4, Array)
#1 /users/Therese/Sites/weather/system/classes/kohana/view.php(61): include('/users/Therese/...')
#2 /users/Therese/Sites/weather/system/classes/kohana/view.php(343): Kohana_View::capture('/users/Therese/...', Array)
#3 /users/Therese/Sites/weather/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /users/Therese/Sites/weather/application/classes/controller/fivedayforecast.php(29): Kohana_View->__toString()
#5 [internal function]: Controller_Fivedayforecast->action_index()
#6 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Fivedayforecast))
#7 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-04 14:06:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
2012-01-04 14:06:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
--
#0 /users/Therese/Sites/weather/application/views/defaulttable.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 4, Array)
#1 /users/Therese/Sites/weather/system/classes/kohana/view.php(61): include('/users/Therese/...')
#2 /users/Therese/Sites/weather/system/classes/kohana/view.php(343): Kohana_View::capture('/users/Therese/...', Array)
#3 /users/Therese/Sites/weather/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /users/Therese/Sites/weather/application/classes/controller/fivedayforecast.php(29): Kohana_View->__toString()
#5 [internal function]: Controller_Fivedayforecast->action_index()
#6 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Fivedayforecast))
#7 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-04 14:06:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
2012-01-04 14:06:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
--
#0 /users/Therese/Sites/weather/application/views/defaulttable.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 4, Array)
#1 /users/Therese/Sites/weather/system/classes/kohana/view.php(61): include('/users/Therese/...')
#2 /users/Therese/Sites/weather/system/classes/kohana/view.php(343): Kohana_View::capture('/users/Therese/...', Array)
#3 /users/Therese/Sites/weather/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /users/Therese/Sites/weather/application/classes/controller/fivedayforecast.php(29): Kohana_View->__toString()
#5 [internal function]: Controller_Fivedayforecast->action_index()
#6 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Fivedayforecast))
#7 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-04 14:06:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
2012-01-04 14:06:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
--
#0 /users/Therese/Sites/weather/application/views/defaulttable.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 4, Array)
#1 /users/Therese/Sites/weather/system/classes/kohana/view.php(61): include('/users/Therese/...')
#2 /users/Therese/Sites/weather/system/classes/kohana/view.php(343): Kohana_View::capture('/users/Therese/...', Array)
#3 /users/Therese/Sites/weather/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /users/Therese/Sites/weather/application/classes/controller/fivedayforecast.php(29): Kohana_View->__toString()
#5 [internal function]: Controller_Fivedayforecast->action_index()
#6 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Fivedayforecast))
#7 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-04 14:06:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
2012-01-04 14:06:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
--
#0 /users/Therese/Sites/weather/application/views/defaulttable.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 4, Array)
#1 /users/Therese/Sites/weather/system/classes/kohana/view.php(61): include('/users/Therese/...')
#2 /users/Therese/Sites/weather/system/classes/kohana/view.php(343): Kohana_View::capture('/users/Therese/...', Array)
#3 /users/Therese/Sites/weather/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /users/Therese/Sites/weather/application/classes/controller/fivedayforecast.php(29): Kohana_View->__toString()
#5 [internal function]: Controller_Fivedayforecast->action_index()
#6 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Fivedayforecast))
#7 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-04 14:06:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
2012-01-04 14:06:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
--
#0 /users/Therese/Sites/weather/application/views/defaulttable.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 4, Array)
#1 /users/Therese/Sites/weather/system/classes/kohana/view.php(61): include('/users/Therese/...')
#2 /users/Therese/Sites/weather/system/classes/kohana/view.php(343): Kohana_View::capture('/users/Therese/...', Array)
#3 /users/Therese/Sites/weather/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /users/Therese/Sites/weather/application/classes/controller/fivedayforecast.php(29): Kohana_View->__toString()
#5 [internal function]: Controller_Fivedayforecast->action_index()
#6 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Fivedayforecast))
#7 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-04 14:06:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
2012-01-04 14:06:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
--
#0 /users/Therese/Sites/weather/application/views/defaulttable.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 4, Array)
#1 /users/Therese/Sites/weather/system/classes/kohana/view.php(61): include('/users/Therese/...')
#2 /users/Therese/Sites/weather/system/classes/kohana/view.php(343): Kohana_View::capture('/users/Therese/...', Array)
#3 /users/Therese/Sites/weather/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /users/Therese/Sites/weather/application/classes/controller/fivedayforecast.php(29): Kohana_View->__toString()
#5 [internal function]: Controller_Fivedayforecast->action_index()
#6 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Fivedayforecast))
#7 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-04 14:06:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
2012-01-04 14:06:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
--
#0 /users/Therese/Sites/weather/application/views/defaulttable.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 4, Array)
#1 /users/Therese/Sites/weather/system/classes/kohana/view.php(61): include('/users/Therese/...')
#2 /users/Therese/Sites/weather/system/classes/kohana/view.php(343): Kohana_View::capture('/users/Therese/...', Array)
#3 /users/Therese/Sites/weather/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /users/Therese/Sites/weather/application/classes/controller/fivedayforecast.php(29): Kohana_View->__toString()
#5 [internal function]: Controller_Fivedayforecast->action_index()
#6 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Fivedayforecast))
#7 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-04 14:06:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
2012-01-04 14:06:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: forecasts ~ APPPATH/views/defaulttable.php [ 4 ]
--
#0 /users/Therese/Sites/weather/application/views/defaulttable.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 4, Array)
#1 /users/Therese/Sites/weather/system/classes/kohana/view.php(61): include('/users/Therese/...')
#2 /users/Therese/Sites/weather/system/classes/kohana/view.php(343): Kohana_View::capture('/users/Therese/...', Array)
#3 /users/Therese/Sites/weather/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /users/Therese/Sites/weather/application/classes/controller/fivedayforecast.php(29): Kohana_View->__toString()
#5 [internal function]: Controller_Fivedayforecast->action_index()
#6 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Fivedayforecast))
#7 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#10 {main}
2012-01-04 14:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:07:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:07:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/10.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/12.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/04.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/03d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/02d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/09.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/media/icons/01d.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:21:10 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 28 ~ SYSPATH/classes/kohana/route.php [ 392 ]
2012-01-04 14:21:10 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 28 ~ SYSPATH/classes/kohana/route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', '/users/Therese/...', 392, Array)
#1 /users/Therese/Sites/weather/system/classes/kohana/route.php(392): preg_match('#^fivedayforeca...', 'fivedayforecast...', NULL)
#2 /users/Therese/Sites/weather/system/classes/kohana/request.php(567): Kohana_Route->matches('fivedayforecast...')
#3 /users/Therese/Sites/weather/system/classes/kohana/request.php(785): Kohana_Request::process_uri('fivedayforecast...', Array)
#4 /users/Therese/Sites/weather/system/classes/kohana/request.php(198): Kohana_Request->__construct('/fivedayforecas...', NULL)
#5 /Users/Therese/Sites/weather/index.php(108): Kohana_Request::factory()
#6 {main}
2012-01-04 14:21:17 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 28 ~ SYSPATH/classes/kohana/route.php [ 392 ]
2012-01-04 14:21:17 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 28 ~ SYSPATH/classes/kohana/route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', '/users/Therese/...', 392, Array)
#1 /users/Therese/Sites/weather/system/classes/kohana/route.php(392): preg_match('#^fivedayforeca...', 'fivedayforecast...', NULL)
#2 /users/Therese/Sites/weather/system/classes/kohana/request.php(567): Kohana_Route->matches('fivedayforecast...')
#3 /users/Therese/Sites/weather/system/classes/kohana/request.php(785): Kohana_Request::process_uri('fivedayforecast...', Array)
#4 /users/Therese/Sites/weather/system/classes/kohana/request.php(198): Kohana_Request->__construct('/fivedayforecas...', NULL)
#5 /Users/Therese/Sites/weather/index.php(108): Kohana_Request::factory()
#6 {main}
2012-01-04 14:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecast/sweden/kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-04 14:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecast/sweden/kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 14:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecast/kalmar/kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-04 14:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fivedayforecast/kalmar/kalmar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-04 14:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/sweden/kalmar/kalmar/hje ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/sweden/kalmar/kalmar/hje ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/sweden/kalmar/kalmar ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fivedayforecast/sweden/kalmar/kalmar ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:32:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forecast/sweden/kalmar/kalmar/kjhkh ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 14:32:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forecast/sweden/kalmar/kalmar/kjhkh ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 14:55:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Forecasthandler::get_detailed_forecast_objects() ~ APPPATH/classes/controller/forecast.php [ 29 ]
2012-01-04 14:55:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Forecasthandler::get_detailed_forecast_objects() ~ APPPATH/classes/controller/forecast.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:55:57 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_Forecasthandler::get_detailed_forecast_object(), called in /users/Therese/Sites/weather/application/classes/controller/forecast.php on line 29 and defined ~ APPPATH/classes/model/forecasthandler.php [ 70 ]
2012-01-04 14:55:57 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_Forecasthandler::get_detailed_forecast_object(), called in /users/Therese/Sites/weather/application/classes/controller/forecast.php on line 29 and defined ~ APPPATH/classes/model/forecasthandler.php [ 70 ]
--
#0 /users/Therese/Sites/weather/application/classes/model/forecasthandler.php(70): Kohana_Core::error_handler(2, 'Missing argumen...', '/users/Therese/...', 70, Array)
#1 /users/Therese/Sites/weather/application/classes/controller/forecast.php(29): Model_Forecasthandler->get_detailed_forecast_object(Object(Response))
#2 [internal function]: Controller_Forecast->action_index()
#3 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#4 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-04 14:56:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/detailedtable.php [ 42 ]
2012-01-04 14:56:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/detailedtable.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:56:29 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 14:56:29 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:57:12 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 14:57:12 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:57:43 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 14:57:43 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:58:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH/classes/model/forecasthandler.php [ 80 ]
2012-01-04 14:58:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH/classes/model/forecasthandler.php [ 80 ]
--
#0 /users/Therese/Sites/weather/application/classes/model/forecasthandler.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 80, Array)
#1 /users/Therese/Sites/weather/application/classes/controller/forecast.php(29): Model_Forecasthandler->get_detailed_forecast_object(Object(Response), '20120105', '2')
#2 [internal function]: Controller_Forecast->action_index()
#3 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#4 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-04 14:58:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH/classes/model/forecasthandler.php [ 80 ]
2012-01-04 14:58:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH/classes/model/forecasthandler.php [ 80 ]
--
#0 /users/Therese/Sites/weather/application/classes/model/forecasthandler.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', '/users/Therese/...', 80, Array)
#1 /users/Therese/Sites/weather/application/classes/controller/forecast.php(29): Model_Forecasthandler->get_detailed_forecast_object(Object(Response), '20120105', '2')
#2 [internal function]: Controller_Forecast->action_index()
#3 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#4 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-04 14:58:25 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 14:58:25 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:58:51 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 14:58:51 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:58:52 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 14:58:52 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:58:52 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 14:58:52 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:58:52 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 14:58:52 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:58:52 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 14:58:52 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:58:52 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 14:58:52 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:58:52 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 14:58:52 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:58:52 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 14:58:52 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:59:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/model/forecasthandler.php [ 84 ]
2012-01-04 14:59:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/model/forecasthandler.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:59:31 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 14:59:31 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 14:59:47 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 14:59:47 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 15:00:30 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 15:00:30 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 15:00:31 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 15:00:31 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 15:00:32 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 15:00:32 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 15:01:12 --- ERROR: ErrorException [ 2 ]: date() expects parameter 2 to be long, object given ~ APPPATH/classes/model/forecasthandler.php [ 83 ]
2012-01-04 15:01:12 --- STRACE: ErrorException [ 2 ]: date() expects parameter 2 to be long, object given ~ APPPATH/classes/model/forecasthandler.php [ 83 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/users/Therese/...', 83, Array)
#1 /users/Therese/Sites/weather/application/classes/model/forecasthandler.php(83): date('Ymd', Object(SimpleXMLElement))
#2 /users/Therese/Sites/weather/application/classes/controller/forecast.php(29): Model_Forecasthandler->get_detailed_forecast_object(Object(Response), '20120105', '2')
#3 [internal function]: Controller_Forecast->action_index()
#4 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#5 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-04 15:01:40 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 15:01:40 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 15:10:10 --- ERROR: ErrorException [ 2 ]: date() expects parameter 2 to be long, object given ~ APPPATH/classes/model/forecasthandler.php [ 86 ]
2012-01-04 15:10:10 --- STRACE: ErrorException [ 2 ]: date() expects parameter 2 to be long, object given ~ APPPATH/classes/model/forecasthandler.php [ 86 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/users/Therese/...', 86, Array)
#1 /users/Therese/Sites/weather/application/classes/model/forecasthandler.php(86): date('Ymd', Object(SimpleXMLElement))
#2 /users/Therese/Sites/weather/application/classes/controller/forecast.php(29): Model_Forecasthandler->get_detailed_forecast_object(Object(Response), '20120106', '3')
#3 [internal function]: Controller_Forecast->action_index()
#4 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#5 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-04 15:10:24 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/model/forecasthandler.php [ 86 ]
2012-01-04 15:10:24 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/model/forecasthandler.php [ 86 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/users/Therese/...', 86, Array)
#1 /users/Therese/Sites/weather/application/classes/model/forecasthandler.php(86): date('Ymd', '2012-01-03T18:0...')
#2 /users/Therese/Sites/weather/application/classes/controller/forecast.php(29): Model_Forecasthandler->get_detailed_forecast_object(Object(Response), '20120106', '3')
#3 [internal function]: Controller_Forecast->action_index()
#4 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#5 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-04 15:13:13 --- ERROR: ErrorException [ 2 ]: date() expects parameter 2 to be long, object given ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 15:13:13 --- STRACE: ErrorException [ 2 ]: date() expects parameter 2 to be long, object given ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/users/Therese/...', 6, Array)
#1 /users/Therese/Sites/weather/application/views/detailedtable.php(6): date('l', Object(SimpleXMLElement))
#2 /users/Therese/Sites/weather/system/classes/kohana/view.php(61): include('/users/Therese/...')
#3 /users/Therese/Sites/weather/system/classes/kohana/view.php(343): Kohana_View::capture('/users/Therese/...', Array)
#4 /users/Therese/Sites/weather/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /users/Therese/Sites/weather/system/classes/kohana/response.php(160): Kohana_View->__toString()
#6 /users/Therese/Sites/weather/application/classes/controller/forecast.php(57): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Forecast->action_index()
#8 /users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#9 /users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#12 {main}
2012-01-04 15:19:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forecast/sweden/kalmar/kalmar/20120106 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-04 15:19:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forecast/sweden/kalmar/kalmar/20120106 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-04 15:22:58 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 15:22:58 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-04 15:23:17 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
2012-01-04 15:23:17 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/detailedtable.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}