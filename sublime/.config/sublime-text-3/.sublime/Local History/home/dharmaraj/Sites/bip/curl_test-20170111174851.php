<?php
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://parseapi.back4app.com/push");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{"where\": {"installationId\": \"1102c50f-8b02-4399-8767-3d01e0e33033\"\n        },"data\": {"alert\": \"Curl Testing Again\"\n        }\n      }");
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = "X-Parse-Application-Id: 83UvumCLXDMrfNYtxS78YKViHRsd8MZikaHkosAI";
$headers[] = "X-Parse-Master-Key: xhcrYQoTpLWLawP8C5VFgAwyDonwj2U43avkOGyf";
$headers[] = "X-Parse-Rest-Api-Key: i4ZfjpOHWQ6NHiWJqabyFQtRQ36T08Kako1NFYHO";
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
