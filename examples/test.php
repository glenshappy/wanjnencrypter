<?php
require_once "vendor/autoload.php";
use MyEncrypt\Encrypter;
$key = base64_decode(substr("base64:rfxZqp2CtOrTdvJPWMlAzUxe9mdFviPi5kvBufc2XpQ=",7));
$cipher = "AES-256-CBC";
$en = new Encrypter($key, $cipher);
$value = "aabbcc";
$rs = $en->encrypt($value);

echo "加密后：";
var_dump($rs);
echo "解密后：";
$rs1 = $en->decrypt($rs);

var_dump($rs1);


