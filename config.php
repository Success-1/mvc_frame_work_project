<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    
    /*  database config*/ 
    define('DBNAME', 'ecormmerce');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVERE', '');

    // define('ROOT', 'http://localhost/mvc_crash/');
}else{

     /*  database config when the sit is live we edit it*/ 
     define('DBNAME', 'ecormmerce');
     define('DBHOST', 'localhost');
     define('DBUSER', 'root');
     define('DBPASS', '');
     define('DBDRIVERE', '');
    define('ROOT', 'https://www. yourwebsite.com');
}
