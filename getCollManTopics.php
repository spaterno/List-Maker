<?php

include "/usr/local/noble/db_config/db_info.php";
   
$db = pg_connect("host=$coll_man_host port=5432 dbname=$coll_man_db user=$syrup_user password=$syrup_password");
if (!$db) 
{
   die("Error in connection: " . pg_last_error());
} 

$topics = explode(",",$_GET['topic']);

$sql = "SELECT id, name 
        FROM collection_management.coll_man_conspectus
        WHERE type = 1
        ORDER BY name";
  
$result = pg_query($db, $sql); 
             
while($row = pg_fetch_row($result))
{
   if( strlen($row[1]) > 0)
   {
      if (in_array($row[0], $topics))
      {
         echo "obj.options[obj.options.length] = new Option(\"".$row[1]."\",\"".$row[0]."\");\n";
         echo "obj.options[obj.options.length-1].selected = true;\n";
      }
      else
      {
         echo "obj.options[obj.options.length] = new Option(\"".$row[1]."\",\"".$row[0]."\");\n";
      }
   }
}

?>
