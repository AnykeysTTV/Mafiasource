<?PHP

// Database credentials
define('DBNAME', "ms");
define('DBUSR', "root");
define('DBPWD', "ms2016");

// Master crypto keys
define('MASTERIV', stripslashes('Ф�v���x�\05*��'));
define('MASTERKEY', stripslashes('?\0�C�@�.� ���'));

// Developper IP's get access in-game when game is set offline
define('DEV_IPS', json_encode(
    array("2001:db8:acad:1::10", "127.0.0.1")
));
