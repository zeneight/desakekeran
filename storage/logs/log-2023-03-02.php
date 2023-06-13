<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-02 05:04:59 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5001 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-02 05:04:59 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5001 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-02 01:19:55 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 01:22:19 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 01:38:11 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 01:39:35 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 02:30:56 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 03:03:12 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 03:09:06 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 12:05:48 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5002 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-03-02 05:41:49 --> 404 Page Not Found: Marker-iconpng/index
ERROR - 2023-03-02 05:41:49 --> 404 Page Not Found: Marker-shadowpng/index
ERROR - 2023-03-02 05:41:49 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 12:50:38 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-02 12:50:40 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-03-02 05:53:56 --> 404 Page Not Found: Marker-iconpng/index
ERROR - 2023-03-02 05:53:57 --> 404 Page Not Found: Marker-shadowpng/index
ERROR - 2023-03-02 05:53:57 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 05:54:11 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 05:56:28 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 05:57:17 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 05:58:24 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 06:18:22 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 13:19:22 --> 404 Page Not Found: 
ERROR - 2023-03-02 06:19:25 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 13:19:33 --> 404 Page Not Found: 
ERROR - 2023-03-02 06:19:36 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 13:19:38 --> 404 Page Not Found: 
ERROR - 2023-03-02 06:19:41 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 06:19:46 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 06:19:50 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 06:19:54 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 06:20:06 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 06:20:19 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 06:20:38 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 06:23:34 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:06:20 --> 404 Page Not Found: Pma/index.php
ERROR - 2023-03-02 07:06:21 --> 404 Page Not Found: Phpmyadmin/index.php
ERROR - 2023-03-02 07:06:22 --> 404 Page Not Found: PhpMyAdmin/index.php
ERROR - 2023-03-02 07:06:23 --> 404 Page Not Found: Php/thinkphp
ERROR - 2023-03-02 07:06:24 --> 404 Page Not Found: Index_ssophp/index
ERROR - 2023-03-02 07:07:27 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:08:30 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:08:50 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:08:58 --> 404 Page Not Found: Pma/index.php
ERROR - 2023-03-02 07:08:59 --> 404 Page Not Found: Phpmyadmin/index.php
ERROR - 2023-03-02 07:08:59 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:09:00 --> 404 Page Not Found: PhpMyAdmin/index.php
ERROR - 2023-03-02 07:09:02 --> 404 Page Not Found: Php/thinkphp
ERROR - 2023-03-02 07:09:03 --> 404 Page Not Found: Index_ssophp/index
ERROR - 2023-03-02 07:09:07 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:09:10 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:09:37 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:10:47 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:10:51 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:10:59 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 14:11:03 --> 404 Page Not Found: 
ERROR - 2023-03-02 07:11:07 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:11:13 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:11:28 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:11:49 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:12:02 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 14:12:09 --> 404 Page Not Found: 
ERROR - 2023-03-02 07:12:12 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:12:53 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:13:53 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:14:12 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:18:49 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:19:22 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:19:27 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 14:19:35 --> 404 Page Not Found: 
ERROR - 2023-03-02 07:19:39 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 07:22:37 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 14:23:22 --> 404 Page Not Found: 
ERROR - 2023-03-02 07:37:13 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 14:37:40 --> 404 Page Not Found: 
ERROR - 2023-03-02 07:37:44 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 14:38:01 --> 404 Page Not Found: 
ERROR - 2023-03-02 07:38:04 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 14:38:08 --> 404 Page Not Found: 
ERROR - 2023-03-02 07:38:13 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 09:31:08 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 10:51:01 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 11:20:15 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 11:39:19 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 11:54:50 --> 404 Page Not Found: Setting/assets
ERROR - 2023-03-02 11:57:30 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 15:58:06 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 16:00:32 --> 404 Page Not Found: Swjs/index
ERROR - 2023-03-02 22:12:29 --> 404 Page Not Found: Swjs/index
