#!/usr/bin/php
<?php
require  'kavenegar/KavenegarApi.php';
use Kavenegar\KavenegarApi;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

const MyAPIKey = "YourAPIKey";
const TemplateName = "TemplateName";

try {
	$api = new KavenegarApi(MyAPIKey);
	$receptor = str_replace(" ", "_", $argv[1]);
	$token = str_replace(" ", "_", $argv[2]);
	$token2 = str_replace(" ", "_", $argv[3]);
	$token3 = str_replace(" ", "_", $argv[4]);
	$template = TemplateName;
	$result = $api->VerifyLookup($receptor, $token, $token2, $token3, $template);
	// You can also use "Send" or "SendArray" instead of "VerifyLookup", according to the documentation.
	if ($result) {
		var_dump($result);
	}
} catch (ApiException $e) {
	echo $e->errorMessage();
} catch (HttpException $e) {
	echo $e->errorMessage();
}
