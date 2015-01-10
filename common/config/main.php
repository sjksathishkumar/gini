<?php
if($_SERVER['HTTP_HOST'] == "localhost" || $_SERVER['HTTP_HOST'] == "10.0.0.163")
{
	$arrConfig['dbHost'] = 'localhost';
	$arrConfig['dbName'] = 'travelogini';
	$arrConfig['dbUser'] = 'root';
	$arrConfig['dbPass'] = 'root';
	$siteUrl = "http://localhost/travelogini/";
	$rootURL = "http://localhost/travelogini";
}

else if($_SERVER['HTTP_HOST'] == "i.vinove.com" && substr(trim($_SERVER['PHP_SELF'],'/'),0,strpos(trim($_SERVER['PHP_SELF'],'/'),'/')) == 'mvno')
{
	$arrConfig['dbHost'] = 'localhost';	
	$arrConfig['dbName'] = 'mvno';
	$arrConfig['dbUser'] = 'sandbox';
	$arrConfig['dbPass'] = 'vinove';
	//$siteUrl = "http://i.vinove.com/mvno/";
	//$rootURL = "http://i.vinove.com/mvno";
      
}
else{
        $arrConfig['dbHost'] = 'localhost';	
	$arrConfig['dbName'] = 'mvno';
	$arrConfig['dbUser'] = 'root';
	$arrConfig['dbPass'] = 'vinove';
	$siteUrl = "http://i.vinove.com/mvno/";
	$rootURL = "http://i.vinove.com";
}
############### End DB configure here ######################

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => 'false'
        ],
        
       'mail' => [
      'class' => 'yii\swiftmailer\Mailer',
       'viewPath' => '@app/mail',
           
      'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'localhost',
        'username' => '',
        'password' => '',
        'port' => '25',
      
      ],
    ],
    ],
];

