<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-12 00:04:58 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-12 00:04:58 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 00:35:14 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 00:35:15 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 01:05:07 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 01:05:07 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 01:34:38 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 01:34:39 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 02:04:43 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 02:04:44 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 02:34:36 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 02:34:36 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 03:04:50 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 03:04:51 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 03:34:30 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 03:34:30 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 04:05:06 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 04:05:06 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 04:34:35 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 04:34:36 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 05:04:50 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 05:04:50 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 05:34:28 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 05:34:28 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 06:04:42 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 06:04:42 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 06:34:24 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 06:34:24 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 07:04:48 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 07:04:48 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 07:34:55 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 07:34:56 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 07:44:22 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 08:00:55 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 08:04:43 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 08:04:44 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 08:34:40 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 08:34:40 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 09:04:52 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 09:04:52 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, sh (truncated...)
 in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
Stack trace:
#0 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Middleware.php(69): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(204): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(153): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/TaskQueue.php(48): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(248): GuzzleHttp\Promise\TaskQueue->run(true)
#5 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(224): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(269): GuzzleHttp\Promise\Promise->waitIfPending()
#7 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(226): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/promises/src/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#9 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Client.php(187): GuzzleHttp\Promise\Promise->wait()
#10 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#11 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(245): GuzzleHttp\Client->post('https://pantau....', Array)
#12 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(141): httpPost('https://pantau....', Array)
#13 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(74): Track_model->kirim_data()
#14 /home/u1555649/public_html/kekeran-badung.desa.id/donjo-app/core/MY_Log.php(206) : eval()'d code(1) : eval()'d code(109): Track_model->track_desa('first')
#15 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/codeigniter/framework/system/core/CodeIgniter.php(533): First->index()
#16 /home/u1555649/public_html/kekeran-badung.desa.id/index.php(283): require_once('/home/u1555649/...')
#17 {main}
ERROR - 2023-04-12 13:31:23 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5000 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/guzzlehttp/guzzle/src/Handler/CurlFactory.php:210
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
ERROR - 2023-04-12 12:15:30 --> 404 Page Not Found: Desa/upload
ERROR - 2023-04-12 18:12:26 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-04-12 21:12:37 --> 404 Page Not Found: Adstxt/index
