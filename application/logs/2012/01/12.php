<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-12 09:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/validator.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-12 09:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/validator.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-12 09:15:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/validator.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-12 09:15:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/validator.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-12 09:15:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/validator.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-12 09:15:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/validator.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-12 09:25:39 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/searchhandler.php [ 51 ]
2012-01-12 09:25:39 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/searchhandler.php [ 51 ]
--
#0 /Users/Therese/Sites/weather/application/classes/model/searchhandler.php(51): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/Therese/...', 51, Array)
#1 /Users/Therese/Sites/weather/application/classes/controller/search.php(35): Model_Searchhandler->create_location_object_from_query(Object(Response))
#2 /Users/Therese/Sites/weather/application/classes/controller/search.php(18): Controller_Search->search_query()
#3 [internal function]: Controller_Search->action_index()
#4 /Users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#5 /Users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-12 09:26:27 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/searchhandler.php [ 51 ]
2012-01-12 09:26:27 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/searchhandler.php [ 51 ]
--
#0 /Users/Therese/Sites/weather/application/classes/model/searchhandler.php(51): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/Therese/...', 51, Array)
#1 /Users/Therese/Sites/weather/application/classes/controller/search.php(35): Model_Searchhandler->create_location_object_from_query(Object(Response))
#2 /Users/Therese/Sites/weather/application/classes/controller/search.php(18): Controller_Search->search_query()
#3 [internal function]: Controller_Search->action_index()
#4 /Users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#5 /Users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-12 13:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forecast/sweden/kalmar/hultsfred/20120105/3/json ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-12 13:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forecast/sweden/kalmar/hultsfred/20120105/3/json ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-12 13:29:52 --- ERROR: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/forecast/detailedtable.php [ 3 ]
2012-01-12 13:29:52 --- STRACE: ErrorException [ 1 ]: Call to a member function getFromTime() on a non-object ~ APPPATH/views/forecast/detailedtable.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-12 13:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forecast/sweden/kalmar/hultsfred/20120113/3 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-01-12 13:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: forecast/sweden/kalmar/hultsfred/20120113/3 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#1 {main}
2012-01-12 13:45:49 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/forecast.php [ 69 ]
2012-01-12 13:45:49 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/forecast.php [ 69 ]
--
#0 /Users/Therese/Sites/weather/application/classes/controller/forecast.php(69): Kohana_Core::error_handler(2048, 'Creating defaul...', '/Users/Therese/...', 69, Array)
#1 [internal function]: Controller_Forecast->action_index()
#2 /Users/Therese/Sites/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#3 /Users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-12 13:58:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Forecast::createJson() ~ APPPATH/classes/controller/forecast.php [ 45 ]
2012-01-12 13:58:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Forecast::createJson() ~ APPPATH/classes/controller/forecast.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-12 14:33:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/search.php [ 50 ]
2012-01-12 14:33:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/search.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-12 14:33:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Location::getLatitude() ~ APPPATH/classes/controller/search.php [ 150 ]
2012-01-12 14:33:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Location::getLatitude() ~ APPPATH/classes/controller/search.php [ 150 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-12 14:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL json/search was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-01-12 14:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL json/search was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Therese/Sites/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Therese/Sites/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Therese/Sites/weather/index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-12 15:08:32 --- ERROR: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
2012-01-12 15:08:32 --- STRACE: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
--
#0 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/modules/cache/classes/kohana/cache/sqlite.php(110): Kohana_Core::error_handler('O:8:"Response":...')
#1 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/search.php(115): Kohana_Cache_Sqlite->get('uppsala_0', false)
#2 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/search.php(33): Controller_Search->cache(Object(Location), NULL)
#3 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/search.php(18): Controller_Search->search_query()
#4 [internal function]: Controller_Search->action_index()
#5 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#6 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-12 15:08:48 --- ERROR: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
2012-01-12 15:08:48 --- STRACE: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
--
#0 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/modules/cache/classes/kohana/cache/sqlite.php(110): Kohana_Core::error_handler('O:8:"Response":...')
#1 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/search.php(115): Kohana_Cache_Sqlite->get('partille_0', false)
#2 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/search.php(33): Controller_Search->cache(Object(Location), NULL)
#3 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/search.php(18): Controller_Search->search_query()
#4 [internal function]: Controller_Search->action_index()
#5 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#6 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-12 15:08:58 --- ERROR: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
2012-01-12 15:08:58 --- STRACE: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
--
#0 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/modules/cache/classes/kohana/cache/sqlite.php(110): Kohana_Core::error_handler('O:8:"Response":...')
#1 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/search.php(115): Kohana_Cache_Sqlite->get('partille_0', false)
#2 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/search.php(33): Controller_Search->cache(Object(Location), NULL)
#3 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/search.php(18): Controller_Search->search_query()
#4 [internal function]: Controller_Search->action_index()
#5 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#6 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-12 15:10:33 --- ERROR: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
2012-01-12 15:10:33 --- STRACE: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
--
#0 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/modules/cache/classes/kohana/cache/sqlite.php(110): Kohana_Core::error_handler('O:8:"Response":...')
#1 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/search.php(115): Kohana_Cache_Sqlite->get('partille_0', false)
#2 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/search.php(33): Controller_Search->cache(Object(Location), NULL)
#3 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/search.php(18): Controller_Search->search_query()
#4 [internal function]: Controller_Search->action_index()
#5 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#6 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-12 15:14:04 --- ERROR: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
2012-01-12 15:14:04 --- STRACE: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
--
#0 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/modules/cache/classes/kohana/cache/sqlite.php(110): Kohana_Core::error_handler('O:8:"Response":...')
#1 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/forecast.php(161): Kohana_Cache_Sqlite->get('United Kingdom/...', false)
#2 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/forecast.php(27): Controller_Forecast->get_xml('United Kingdom', 'England', 'London')
#3 [internal function]: Controller_Forecast->action_index()
#4 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#5 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-12 15:17:36 --- ERROR: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
2012-01-12 15:17:36 --- STRACE: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
--
#0 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/modules/cache/classes/kohana/cache/sqlite.php(110): Kohana_Core::error_handler('O:8:"Response":...')
#1 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/forecast.php(161): Kohana_Cache_Sqlite->get('United Kingdom/...', false)
#2 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/forecast.php(27): Controller_Forecast->get_xml('United Kingdom', 'England', 'City of London')
#3 [internal function]: Controller_Forecast->action_index()
#4 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#5 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-12 15:17:54 --- ERROR: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
2012-01-12 15:17:54 --- STRACE: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
--
#0 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/modules/cache/classes/kohana/cache/sqlite.php(110): Kohana_Core::error_handler('O:8:"Response":...')
#1 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/forecast.php(161): Kohana_Cache_Sqlite->get('South Africa/Mp...', false)
#2 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/forecast.php(27): Controller_Forecast->get_xml('South Africa', 'Mpumalanga', 'London')
#3 [internal function]: Controller_Forecast->action_index()
#4 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#5 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-12 15:17:59 --- ERROR: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
2012-01-12 15:17:59 --- STRACE: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
--
#0 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/modules/cache/classes/kohana/cache/sqlite.php(110): Kohana_Core::error_handler('O:8:"Response":...')
#1 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/forecast.php(161): Kohana_Cache_Sqlite->get('South Africa/Ea...', false)
#2 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/forecast.php(27): Controller_Forecast->get_xml('South Africa', 'Eastern Cape', 'East London')
#3 [internal function]: Controller_Forecast->action_index()
#4 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#5 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-12 15:18:03 --- ERROR: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
2012-01-12 15:18:03 --- STRACE: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
--
#0 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/modules/cache/classes/kohana/cache/sqlite.php(110): Kohana_Core::error_handler('O:8:"Response":...')
#1 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/forecast.php(161): Kohana_Cache_Sqlite->get('Canada/Ontario/...', false)
#2 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/forecast.php(27): Controller_Forecast->get_xml('Canada', 'Ontario', 'London')
#3 [internal function]: Controller_Forecast->action_index()
#4 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#5 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-12 15:18:05 --- ERROR: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
2012-01-12 15:18:05 --- STRACE: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
--
#0 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/modules/cache/classes/kohana/cache/sqlite.php(110): Kohana_Core::error_handler('O:8:"Response":...')
#1 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/forecast.php(161): Kohana_Cache_Sqlite->get('United Kingdom/...', false)
#2 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/forecast.php(27): Controller_Forecast->get_xml('United Kingdom', 'England', 'London')
#3 [internal function]: Controller_Forecast->action_index()
#4 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#5 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-12 15:18:47 --- ERROR: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
2012-01-12 15:18:47 --- STRACE: ErrorException [ 2 ]: Class HTTP_Header has no unserializer ~ MODPATH/cache/classes/kohana/cache/sqlite.php [ 110 ]
--
#0 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/modules/cache/classes/kohana/cache/sqlite.php(110): Kohana_Core::error_handler('O:8:"Response":...')
#1 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/forecast.php(161): Kohana_Cache_Sqlite->get('United Kingdom/...', false)
#2 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/application/classes/controller/forecast.php(27): Controller_Forecast->get_xml('United Kingdom', 'England', 'London')
#3 [internal function]: Controller_Forecast->action_index()
#4 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Forecast))
#5 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /storage/content/11/110711/wp.theresetherese.se/public_html/weather/index.php(109): Kohana_Request->execute()
#8 {main}