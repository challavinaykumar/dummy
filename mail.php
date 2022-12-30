<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');

$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(
    new GuzzleHttp\Client(),
    $config
);
$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();
$sendSmtpEmail['subject'] = 'My {{params.subject}}';
$sendSmtpEmail['htmlContent'] = '<html><body><h1>This is a transactional email {{params.parameter}}</h1></body></html>';
$sendSmtpEmail['sender'] = array('name' => 'John Doe', 'email' => 'example@example.com');
$sendSmtpEmail['to'] = array(
    array('email' => 'example1@example1.com', 'name' => 'Jane Doe')
);
$sendSmtpEmail['cc'] = array(
    array('email' => 'example2@example2.com', 'name' => 'Janice Doe')
);
$sendSmtpEmail['bcc'] = array(
    array('email' => 'example@example.com', 'name' => 'John Doe')
);
$sendSmtpEmail['replyTo'] = array('email' => 'replyto@domain.com', 'name' => 'John Doe');
$sendSmtpEmail['headers'] = array('Some-Custom-Name' => 'unique-id-1234');
$sendSmtpEmail['params'] = array('parameter' => 'My param value', 'subject' => 'New Subject');

try {
    $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
}
?>