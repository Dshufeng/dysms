<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Flc\Dysms\Client;
use Flc\Dysms\Request\QuerySms;

$config = [
    'accessKeyId'    => 'LTAIbVA2LRQ1tULr',
    'accessKeySecret' => 'ocS48RUuyBPpQHsfoWokCuz8ZQbGxl',
];

$client  = new Client($config);
$sendSms = new QuerySms;
$sendSms->setCurrentPage();
$sendSms->setPageSize();

$sendSms->setPhoneNumber(17600224538);
// $sendSms->setTemplateParam(['username' => 'demo', 'time' => date('Y-m-d')]);
$sendSms->setSendDate('20190321');
$sendSms->setBizId('433205053139388685^0');

print_r($client->execute($sendSms));