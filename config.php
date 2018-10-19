
<?php $domain ="theme"; ?>
<?php $app_name ="theme"; ?>
<?php function my_baseURL(){
     if (isset($_SERVER['HTTP_HOST'])) {
         $http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
         $hostname = $_SERVER['HTTP_HOST'];
         $dir =  str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

         $tmplt = "%s://%s%s";
         $end = $dir;
         $base_url = sprintf( $tmplt, $http, $hostname, $end );
     }
     else $base_url = 'http://localhost/Dropbox/theme';

     return $base_url;
 }

 $base_url = my_baseURL(); ?>
