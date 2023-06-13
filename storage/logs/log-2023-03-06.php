<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-06 07:02:50 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5000 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-06 00:02:55 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:03:07 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5000 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-06 08:25:22 --> 404 Page Not Found: 
ERROR - 2023-03-06 09:05:08 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5000 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-06 09:05:09 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5000 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-06 10:35:07 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timeout after 4001 ms (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-06 10:35:08 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Connection timeout after 4001 ms (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-06 03:50:24 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 03:59:13 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 11:36:04 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5000 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-06 11:36:05 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5000 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-06 11:41:55 --> 404 Page Not Found: 
ERROR - 2023-03-06 05:24:49 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:24:54 --> 404 Page Not Found: 
ERROR - 2023-03-06 05:24:58 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:25:00 --> 404 Page Not Found: 
ERROR - 2023-03-06 05:25:03 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 05:25:06 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 05:25:09 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 05:25:12 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:25:20 --> 404 Page Not Found: 
ERROR - 2023-03-06 05:25:23 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:25:35 --> 404 Page Not Found: 
ERROR - 2023-03-06 12:26:17 --> 404 Page Not Found: 
ERROR - 2023-03-06 12:26:25 --> 404 Page Not Found: 
ERROR - 2023-03-06 07:07:22 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:43:12 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:43:32 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:43:38 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:43:48 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 14:51:22 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-06 14:51:22 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-06 07:51:37 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:51:48 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:53:20 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:53:32 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:53:44 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:54:05 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:54:12 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:54:16 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:54:18 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:54:21 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 07:58:47 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:00:26 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:02:53 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:04:11 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:04:24 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 15:04:44 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5000 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-06 08:04:47 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:04:53 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:05:00 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:06:20 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:09:17 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:09:20 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:09:42 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:09:43 --> 404 Page Not Found: Absen/index
ERROR - 2023-03-06 08:09:52 --> 404 Page Not Found: Absensi/index
ERROR - 2023-03-06 08:11:03 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:12:19 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:13:34 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:14:24 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:14:26 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:14:57 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:15:21 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 15:16:16 --> 404 Page Not Found: 
ERROR - 2023-03-06 08:16:22 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:16:22 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:16:42 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:17:00 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:17:13 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:17:33 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:17:35 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:17:55 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:18:01 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:18:17 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:19:56 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:21:45 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:22:50 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:27:28 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:35:23 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:36:03 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:38:04 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:39:08 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:40:17 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:46:05 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:51:22 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:53:17 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:55:11 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:56:09 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 08:58:50 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 09:03:50 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 09:06:35 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 09:07:23 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 09:27:55 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 09:35:54 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 09:42:54 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 09:43:00 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 09:45:40 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 09:52:08 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 09:57:03 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 09:58:19 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:04:01 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:17:50 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:20:33 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:21:38 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:24:13 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:24:15 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:25:54 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:26:14 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:26:42 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:26:59 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:27:08 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:27:48 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:28:01 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:28:08 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:28:40 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:36:15 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:37:14 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:38:20 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:38:57 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:39:25 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:44:45 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:47:30 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:54:13 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:56:03 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:58:01 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:59:00 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 10:59:44 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 11:03:22 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 11:04:44 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 11:08:09 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 11:08:46 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 11:18:53 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 11:20:47 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 11:21:39 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 11:24:18 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 11:26:25 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 11:34:43 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 11:47:08 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 11:47:22 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 11:54:35 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:00:33 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:01:15 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:02:05 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:05:16 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:06:08 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:07:32 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:07:36 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:08:01 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:08:34 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:09:11 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:09:54 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:10:54 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:12:53 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:14:00 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:14:35 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:22:57 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:24:38 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:25:03 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 19:26:06 --> 404 Page Not Found: 
ERROR - 2023-03-06 12:26:50 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:27:55 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:32:22 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:32:42 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:36:44 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:37:09 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:37:22 --> 404 Page Not Found: Marker-shadowpng/index
ERROR - 2023-03-06 12:37:22 --> 404 Page Not Found: Marker-icon-2xpng/index
ERROR - 2023-03-06 12:37:23 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:37:34 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:39:18 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:47:44 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:48:48 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:48:57 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:49:16 --> 404 Page Not Found: Marker-icon-2xpng/index
ERROR - 2023-03-06 12:49:16 --> 404 Page Not Found: Marker-shadowpng/index
ERROR - 2023-03-06 12:49:16 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:49:39 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 19:51:13 --> Severity: error --> Exception: syntax error, unexpected 'endif' (T_ENDIF), expecting end of file /home/u1555649/public_html/kekeran-badung.desa.id/desa/themes/tema-silir/commons/footer.php 76
ERROR - 2023-03-06 19:51:31 --> Severity: error --> Exception: syntax error, unexpected 'endif' (T_ENDIF), expecting end of file /home/u1555649/public_html/kekeran-badung.desa.id/desa/themes/tema-silir/commons/footer.php 76
ERROR - 2023-03-06 12:52:08 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:52:28 --> 404 Page Not Found: Marker-icon-2xpng/index
ERROR - 2023-03-06 12:52:28 --> 404 Page Not Found: Marker-shadowpng/index
ERROR - 2023-03-06 12:52:29 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:53:17 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:55:15 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:56:02 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 12:57:13 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 13:02:37 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 13:02:41 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 13:02:48 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 13:03:39 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 13:04:54 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 13:13:16 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 13:24:44 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 13:29:51 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 13:30:03 --> 404 Page Not Found: Setting/assets
ERROR - 2023-03-06 13:37:34 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 13:59:23 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 14:06:32 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 14:12:07 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 14:19:51 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 14:32:18 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 14:32:39 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 14:37:00 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 14:38:26 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 14:38:50 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 14:40:51 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 14:42:10 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 14:42:42 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 14:43:15 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 15:31:19 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 22:33:50 --> 404 Page Not Found: 
ERROR - 2023-03-06 15:33:58 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 15:39:38 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 16:06:54 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 16:09:18 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 23:11:03 --> 404 Page Not Found: 
ERROR - 2023-03-06 16:11:06 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 16:11:21 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 16:18:24 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 16:18:24 --> 404 Page Not Found: Marker-icon-2xpng/index
ERROR - 2023-03-06 16:18:24 --> 404 Page Not Found: Marker-shadowpng/index
ERROR - 2023-03-06 16:19:18 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 16:19:29 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 16:19:42 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 17:09:24 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 17:27:14 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 19:54:02 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 19:59:09 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 20:19:41 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 21:07:01 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 21:12:06 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 21:32:45 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 21:34:20 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 21:34:25 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 22:43:58 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 23:03:40 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 23:26:58 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 23:39:26 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 23:40:35 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 23:43:47 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 23:45:10 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 23:48:29 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 23:54:32 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 23:55:25 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-06 23:55:25 --> 404 Page Not Found: Marker-icon-2xpng/index
ERROR - 2023-03-06 23:55:25 --> 404 Page Not Found: Marker-shadowpng/index
ERROR - 2023-03-06 23:55:30 --> 404 Page Not Found: Swjs/index
