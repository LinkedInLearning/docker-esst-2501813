<?php

$url = 'https://linkedin.com';

echo shell_exec("qrencode -o qrcode.png $url 2>&1");

printf('<img src="qrcode.png?r=%s" alt="QR Code" />', rand( 0, 999 ) );