<?php

if(isset($_GET["statCat"]) )
{
   include "/usr/local/noble/db_config/db_info.php";

   $db = pg_connect("host=$dbro_host port=5432 dbname=$dbro_database user=$dbro_user password=$dbro_password");
   if (!$db) 
   {
      die("Error in connection: " . pg_last_error());
   } 
   
   $stat_cat = $_GET["statCat"];

   $sql = "SELECT DISTINCT asset.stat_cat_entry.id, asset.stat_cat_entry.value
           FROM asset.stat_cat_entry
           WHERE asset.stat_cat_entry.stat_cat = $stat_cat
           ORDER BY asset.stat_cat_entry.value";
           
   $result = pg_query($db, $sql);  
   
   while($row = pg_fetch_row($result))
   {
      if( strlen($row[1]) > 0)
      { 
         echo "var checkbox = \"<input type='checkbox' name='SC_entries' value='".$row[0]."' />\";";
         echo "checkbox_div.innerHTML+=checkbox +\"".$row[1]."\"+ \"<br/>\";";
      }
   }
}

?>