<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-11 00:04:49 --> Query error: Duplicate entry '2023-04-11' for key 'PRIMARY' - Invalid query: INSERT INTO `sys_traffic` (`Tanggal`, `ipAddress`, `Jumlah`) VALUES ('2023-04-11', '{\"ip_address\":[\"109.106.253.221\"]}', 1)
ERROR - 2023-04-11 00:05:25 --> 404 Page Not Found: Desa/upload
ERROR - 2023-04-11 07:50:28 --> Severity: error --> Exception: Argument 1 passed to Illuminate\Database\Query\Builder::cleanBindings() must be of the type array, null given, called in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/illuminate/database/Query/Builder.php on line 997 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/illuminate/database/Query/Builder.php 3369
ERROR - 2023-04-11 07:51:01 --> Severity: error --> Exception: Argument 1 passed to Illuminate\Database\Query\Builder::cleanBindings() must be of the type array, null given, called in /home/u1555649/public_html/kekeran-badung.desa.id/vendor/illuminate/database/Query/Builder.php on line 997 /home/u1555649/public_html/kekeran-badung.desa.id/vendor/illuminate/database/Query/Builder.php 3369
ERROR - 2023-04-11 01:03:32 --> 404 Page Not Found: Desa/upload
ERROR - 2023-04-11 01:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-11 04:21:00 --> 404 Page Not Found: Desa/upload
ERROR - 2023-04-11 04:27:47 --> 404 Page Not Found: Desa/upload
ERROR - 2023-04-11 05:26:43 --> 404 Page Not Found: Desa/upload
ERROR - 2023-04-11 13:17:02 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-04-11 13:17:02 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-04-11 13:17:02 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-04-11 13:17:02 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-04-11 06:26:53 --> 404 Page Not Found: Desa/upload
ERROR - 2023-04-11 15:28:17 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-04-11 15:28:17 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-04-11 15:28:17 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-04-11 15:28:17 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-04-11 15:38:40 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-04-11 15:38:40 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-04-11 15:38:40 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-04-11 15:38:40 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-04-11 15:38:40 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-04-11 15:38:41 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2023-04-11 13:00:32 --> 404 Page Not Found: Desa/upload
ERROR - 2023-04-11 21:34:40 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2023-04-11 21:34:40 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2023-04-11 22:00:59 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2023-04-11 22:01:01 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2023-04-11 22:04:46 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2023-04-11 22:04:47 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2023-04-11 22:34:38 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2023-04-11 22:34:39 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2023-04-11 23:04:54 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2023-04-11 23:04:55 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2023-04-11 23:34:32 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2023-04-11 23:34:33 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw` resulted in a `404 Not Found` response:
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
ERROR - 2023-04-11 18:42:17 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-04-11 21:12:27 --> 404 Page Not Found: Adstxt/index
