<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/vendor/cloudmersive/cloudmersive_validate_api_client/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');



$apiInstance = new Swagger\Client\Api\EmailApi(
    
    
    new GuzzleHttp\Client(),
    $config
);
$email = "support@cloudmersive.com"; // string | Email address to validate, e.g. \"support@cloudmersive.com\".    The input is a string so be sure to enclose it in double-quotes.

try {
    $result = $apiInstance->emailFullValidation($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailFullValidation: ', $e->getMessage(), PHP_EOL;
}
?>