<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-09 05:34:45 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5001 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-09 05:34:45 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5002 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-09 01:04:00 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 01:17:35 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 01:17:54 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 01:21:19 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 01:23:27 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 01:30:45 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 01:30:50 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 01:35:28 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 08:41:15 --> Could not find the language line "form_validation_is_unique"
ERROR - 2023-03-09 01:45:53 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 02:03:55 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 09:04:45 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5001 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-09 09:04:46 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5001 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-09 02:18:28 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 02:30:16 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 02:32:33 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 02:42:02 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 03:00:13 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 04:00:53 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 04:01:00 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 04:01:41 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 05:03:26 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 12:20:29 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-09 12:20:29 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-09 12:39:17 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-09 12:39:18 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-09 05:39:22 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 05:39:30 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 05:46:43 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 12:50:45 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-09 12:50:45 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-09 12:50:45 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-09 12:50:46 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-09 12:50:46 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-09 12:50:46 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-09 12:50:46 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-09 12:50:46 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-09 05:50:49 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 05:51:04 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 05:54:07 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 06:13:40 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 06:16:18 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 06:16:34 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 06:17:44 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 06:19:09 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 06:19:25 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 13:19:38 --> 404 Page Not Found: 
ERROR - 2023-03-09 06:19:41 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 06:19:44 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 06:19:57 --> 404 Page Not Found: Marker-iconpng/index
ERROR - 2023-03-09 06:19:57 --> 404 Page Not Found: Marker-shadowpng/index
ERROR - 2023-03-09 06:19:57 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 06:20:25 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 06:20:35 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 06:21:08 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 06:25:43 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 06:28:01 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 07:00:44 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 07:43:22 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 07:44:08 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 15:05:11 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5000 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-09 15:05:11 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5001 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-09 08:56:13 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 08:58:33 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 10:02:07 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 10:05:17 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 10:07:10 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 10:25:18 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 11:02:17 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 11:02:32 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 11:02:54 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 11:36:12 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 12:25:12 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-09 14:07:18 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:18 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:18 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:18 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:18 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:19 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:19 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:19 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:19 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:19 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:19 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:19 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:19 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:19 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:19 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:19 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:19 --> Unable to connect to the database
ERROR - 2023-03-09 14:07:19 --> Unable to connect to the database
ERROR - 2023-03-09 22:35:13 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5001 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-09 22:35:14 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5000 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-09 19:40:15 --> 404 Page Not Found: Marker-icon-2xpng/index
