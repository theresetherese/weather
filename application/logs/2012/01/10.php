<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-10 15:37:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH/classes/controller/search.php [ 85 ]
2012-01-10 15:37:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH/classes/controller/search.php [ 85 ]
--
#0 /Users/Therese/Sites/weather/application/classes/controller/search.php(85): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Therese/...', 85, Array)
#1 /Users/Therese/Sites/weather/application/classes/controller/search.php(53): Controller_Search->cache(Object(Location))
#2 /Users/Therese/Sites/weather/application/classes/controller/search.php(14): Controller_Search->search_geo()
#3 [internal function]: Controller_Search->action_index()
#4 /Users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#5 /Users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-10 15:37:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH/classes/controller/search.php [ 85 ]
2012-01-10 15:37:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH/classes/controller/search.php [ 85 ]
--
#0 /Users/Therese/Sites/weather/application/classes/controller/search.php(85): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Therese/...', 85, Array)
#1 /Users/Therese/Sites/weather/application/classes/controller/search.php(53): Controller_Search->cache(Object(Location))
#2 /Users/Therese/Sites/weather/application/classes/controller/search.php(14): Controller_Search->search_geo()
#3 [internal function]: Controller_Search->action_index()
#4 /Users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#5 /Users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-10 15:41:18 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/searchhandler.php [ 36 ]
2012-01-10 15:41:18 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/searchhandler.php [ 36 ]
--
#0 /Users/Therese/Sites/weather/application/classes/model/searchhandler.php(36): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/Therese/...', 36, Array)
#1 /Users/Therese/Sites/weather/application/classes/controller/search.php(55): Model_Searchhandler->create_location_object_from_coords(Object(Response))
#2 /Users/Therese/Sites/weather/application/classes/controller/search.php(14): Controller_Search->search_geo()
#3 [internal function]: Controller_Search->action_index()
#4 /Users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#5 /Users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-10 15:42:11 --- ERROR: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
2012-01-10 15:42:11 --- STRACE: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 15:42:13 --- ERROR: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
2012-01-10 15:42:13 --- STRACE: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 15:42:13 --- ERROR: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
2012-01-10 15:42:13 --- STRACE: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 15:42:14 --- ERROR: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
2012-01-10 15:42:14 --- STRACE: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 15:42:14 --- ERROR: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
2012-01-10 15:42:14 --- STRACE: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 15:42:14 --- ERROR: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
2012-01-10 15:42:14 --- STRACE: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 15:42:15 --- ERROR: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
2012-01-10 15:42:15 --- STRACE: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 15:42:15 --- ERROR: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
2012-01-10 15:42:15 --- STRACE: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 15:42:15 --- ERROR: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
2012-01-10 15:42:15 --- STRACE: ErrorException [ 1 ]: Call to a member function getCity() on a non-object ~ APPPATH/classes/controller/search.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 16:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL search/ab/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-01-10 16:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL search/ab/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-10 16:22:37 --- ERROR: ErrorException [ 1 ]: Call to a member function xpath() on a non-object ~ APPPATH/classes/model/searchhandler.php [ 49 ]
2012-01-10 16:22:37 --- STRACE: ErrorException [ 1 ]: Call to a member function xpath() on a non-object ~ APPPATH/classes/model/searchhandler.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 16:22:45 --- ERROR: ErrorException [ 1 ]: Call to a member function xpath() on a non-object ~ APPPATH/classes/model/searchhandler.php [ 49 ]
2012-01-10 16:22:45 --- STRACE: ErrorException [ 1 ]: Call to a member function xpath() on a non-object ~ APPPATH/classes/model/searchhandler.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-10 16:24:48 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Controller_Search::cache(), called in /Users/Therese/Sites/weather/application/classes/controller/search.php on line 55 and defined ~ APPPATH/classes/controller/search.php [ 73 ]
2012-01-10 16:24:48 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Controller_Search::cache(), called in /Users/Therese/Sites/weather/application/classes/controller/search.php on line 55 and defined ~ APPPATH/classes/controller/search.php [ 73 ]
--
#0 /Users/Therese/Sites/weather/application/classes/controller/search.php(73): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Therese/...', 73, Array)
#1 /Users/Therese/Sites/weather/application/classes/controller/search.php(55): Controller_Search->cache(Object(Location))
#2 /Users/Therese/Sites/weather/application/classes/controller/search.php(14): Controller_Search->search_geo()
#3 [internal function]: Controller_Search->action_index()
#4 /Users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#5 /Users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-10 16:30:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/views/search/results.php [ 14 ]
2012-01-10 16:30:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/views/search/results.php [ 14 ]
--
#0 /Users/Therese/Sites/weather/application/views/search/results.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Therese/...', 14, Array)
#1 /Users/Therese/Sites/weather/system/classes/kohana/view.php(61): include('/Users/Therese/...')
#2 /Users/Therese/Sites/weather/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Therese/...', Array)
#3 /Users/Therese/Sites/weather/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Therese/Sites/weather/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Therese/Sites/weather/application/classes/controller/search.php(42): Kohana_Response->body(Object(View))
#6 /Users/Therese/Sites/weather/application/classes/controller/search.php(18): Controller_Search->search_query()
#7 [internal function]: Controller_Search->action_index()
#8 /Users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#9 /Users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#12 {main}
2012-01-10 16:36:42 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Controller_Search::cache(), called in /Users/Therese/Sites/weather/application/classes/controller/search.php on line 57 and defined ~ APPPATH/classes/controller/search.php [ 75 ]
2012-01-10 16:36:42 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Controller_Search::cache(), called in /Users/Therese/Sites/weather/application/classes/controller/search.php on line 57 and defined ~ APPPATH/classes/controller/search.php [ 75 ]
--
#0 /Users/Therese/Sites/weather/application/classes/controller/search.php(75): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Therese/...', 75, Array)
#1 /Users/Therese/Sites/weather/application/classes/controller/search.php(57): Controller_Search->cache(Object(Location))
#2 /Users/Therese/Sites/weather/application/classes/controller/search.php(14): Controller_Search->search_geo()
#3 [internal function]: Controller_Search->action_index()
#4 /Users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#5 /Users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-10 16:36:47 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Controller_Search::cache(), called in /Users/Therese/Sites/weather/application/classes/controller/search.php on line 57 and defined ~ APPPATH/classes/controller/search.php [ 75 ]
2012-01-10 16:36:47 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Controller_Search::cache(), called in /Users/Therese/Sites/weather/application/classes/controller/search.php on line 57 and defined ~ APPPATH/classes/controller/search.php [ 75 ]
--
#0 /Users/Therese/Sites/weather/application/classes/controller/search.php(75): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Therese/...', 75, Array)
#1 /Users/Therese/Sites/weather/application/classes/controller/search.php(57): Controller_Search->cache(Object(Location))
#2 /Users/Therese/Sites/weather/application/classes/controller/search.php(14): Controller_Search->search_geo()
#3 [internal function]: Controller_Search->action_index()
#4 /Users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#5 /Users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#8 {main}