<?php
require 'vendor/autoload.php';

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
	new \Wsdl2PhpGenerator\Config( array(
		'inputFile'       => 'http://api.usendit.pt/v1/remoteusendit.asmx?wsdl',
		'outputDir'       => './src/',
		'namespaceName'   => 'uSendit\API',
		'soapClientClass' => '\BeSimple\SoapClient\SoapClient',
	) )
);
