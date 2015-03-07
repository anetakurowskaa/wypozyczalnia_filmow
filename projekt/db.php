<?php
  /*Po³¹czenie z baz¹ danych*/
  $dbhost = '10.254.94.2'; 	
  $dblogin = 's176350';
  $dbpass = 'YLa2PFzu';
  $dbselect = 's176350';
  mysql_connect($dbhost,$dblogin,$dbpass);
  mysql_select_db($dbselect) or die("B³¹d przy wyborze bazy danych");
  mysql_query("SET CHARACTER SET UTF8");
?>