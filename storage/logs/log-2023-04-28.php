<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-28 01:37:44 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-28 15:34:35 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timeout after 4001 ms (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(63): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(331): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(168): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#15 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#16 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#17 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#18 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#19 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#20 {main}
ERROR - 2023-04-28 15:34:35 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timeout after 4001 ms (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(63): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(331): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(168): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#15 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#16 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#17 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#18 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#19 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#20 {main}
ERROR - 2023-04-28 15:38:56 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timeout after 4001 ms (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(63): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(331): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(168): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#15 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#16 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#17 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#18 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#19 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#20 {main}
ERROR - 2023-04-28 15:39:04 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timeout after 4001 ms (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(63): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(331): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(168): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#15 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#16 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#17 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#18 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#19 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#20 {main}
ERROR - 2023-04-28 15:39:12 --> 404 Page Not Found: 
ERROR - 2023-04-28 15:39:14 --> 404 Page Not Found: 
ERROR - 2023-04-28 15:43:39 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timeout after 4001 ms (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(63): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(331): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(168): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#15 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#16 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#17 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#18 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index('10')
#19 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#20 {main}
ERROR - 2023-04-28 15:43:40 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timeout after 4001 ms (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(63): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(331): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(168): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#15 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#16 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#17 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#18 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index('8')
#19 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#20 {main}
ERROR - 2023-04-28 15:43:41 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timeout after 4000 ms (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php(158): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php(110): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(63): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(331): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(168): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#15 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#16 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#17 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#18 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index('9')
#19 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#20 {main}
ERROR - 2023-04-28 08:45:42 --> 404 Page Not Found: Desa/upload
ERROR - 2023-04-28 14:45:03 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-04-28 18:45:21 --> 404 Page Not Found: Adstxt/index