<?PHP

// Database credentials
define('DBNAME', "ms");
define('DBUSR', "root");
define('DBPWD', "");

// Master crypto keys
define('MASTERIV', stripslashes('Ф�v���x�\05*��'));
define('MASTERKEY', stripslashes('?\0�C�@�.� ���'));

// Developper IP's get access in-game when game is set offline
define('DEV_IPS', json_encode(
    array("2001:db8:acad:1::10", "127.0.0.1")
));

// PayPal Config
define('PP_SANDBOX', false);
$client = PP_SANDBOX === true ?
    "SANDBOX_CLIENT_ID" :
    "CLIENT_ID";
$secret = PP_SANDBOX === true ?
    "SANDBOX_SECRET" :
    "SECRET";
$buttonID = PP_SANDBOX === true ? "SANDBOX_BUTTON_ID" : "ZCSR723ZGUEKA";
$env = PP_SANDBOX === true ? "sandbox" : "production";
define('PP_CLIENT', $client);
define('PP_SECRET', $secret);
define('PP_ENV', $env);
define('PP_BTN_ID', $buttonID);
$client = $secret = $env = $buttonID = null;
