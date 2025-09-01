<?php

if ($_SERVER['HTTP_HOST'] != 'localhost'){
    define('BASE_URL', 'https://akcniceny.nibe.cz');
}
else{
    define('BASE_URL', 'http://localhost/nibe-2025-08');
}

define('AUTHOR', 'Družstevní závody Dražice - strojírna s.r.o.');
define('TITLE', 'Akční ceny | NIBE');

define('TAG_MANAGER', 'GTM-KL6N8ZTF');

define('KEYWORDS', '');
define('DESCRIPTION', '');
define('OG_TITLE', '');
define('OG_URL', '');
define('OG_DESCRIPTION', '');
define('OG_IMAGE', '');

define('LINK_MAINPAGE', 'https://www.nibe.eu/cz/cs/');
define('LINK_KONTAKT', 'https://www.nibe.eu/cz/cs/o-nibe/kontakt');

// vyhodnoceni sablony a include

$loader = "page.php";


include $loader;    

?>
