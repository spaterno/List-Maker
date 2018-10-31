<?php

if(isset($_GET["lib"]) && isset($_GET["stat"]) && isset($_GET["entry"]))
{
   include "/usr/local/noble/db_config/db_info.php";
   
   $db = pg_connect("host=$dbro_host port=5432 dbname=$dbro_database user=$dbro_user password=$dbro_password");
   if (!$db) 
   {
      die("Error in connection: " . pg_last_error());
   } 
   
   $library = $_GET["lib"];
   $stat_cat = $_GET["stat"];
   $stat_cat_entries = $_GET["entry"];
   $branch = $_GET["branch"];
   
   if(strpos($stat_cat_entries, "ALL") == true )
   {
      $check_all = true;
   }
   else
   {
      $check_all = false;
   }
   
   
   if ($library == "NOBLE")
   {
       $sql = "SELECT asset.stat_cat.id, asset.stat_cat.name
               FROM asset.stat_cat
               JOIN actor.org_unit ON actor.org_unit.id=asset.stat_cat.owner
               WHERE actor.org_unit.shortname = 'NOBLE'
               ORDER BY asset.stat_cat.name";
   }
   else if ($branch == 'none') 
   {

      $sql = "SELECT asset.stat_cat.id, asset.stat_cat.name
              FROM asset.stat_cat
              JOIN actor.org_unit ON actor.org_unit.id=asset.stat_cat.owner
              WHERE actor.org_unit.shortname = 'NOBLE' 
              OR actor.org_unit.shortname IN (SELECT child.shortname
                                     FROM actor.org_unit child
                                     JOIN actor.org_unit parent on child.parent_ou = parent.id
                                     WHERE parent.shortname='$library' OR child.shortname='$library')
              ORDER BY asset.stat_cat.name";
   }
   else
   {
       $sql = "SELECT asset.stat_cat.id, asset.stat_cat.name
               FROM asset.stat_cat
               JOIN actor.org_unit ON actor.org_unit.id=asset.stat_cat.owner
               WHERE actor.org_unit.shortname = '$library' OR actor.org_unit.shortname = 'NOBLE'
               OR actor.org_unit.shortname = '$branch'
               ORDER BY asset.stat_cat.name";
   }
   $result = pg_query($db, $sql); 
   
   echo "stat_obj.options[stat_obj.options.length] = new Option('Select','-1');\n";       
             
   while($row = pg_fetch_row($result))
   {
      if( strlen($row[1]) > 0)
      {
         if($row[0]==$stat_cat)
         {
            echo "stat_obj.options[stat_obj.options.length] = new Option(\"".$row[1]."\",\"".$row[0]."\");\n";
            echo "stat_obj.options[stat_obj.options.length-1].selected = true;\n";
         }
         else
         {
            echo "stat_obj.options[stat_obj.options.length] = new Option(\"".$row[1]."\",\"".$row[0]."\");\n";
         }
      }
   }
   
    $sql = "SELECT DISTINCT asset.stat_cat_entry.id, asset.stat_cat_entry.value
           FROM asset.stat_cat_entry
           WHERE asset.stat_cat_entry.stat_cat = $stat_cat
           ORDER BY asset.stat_cat_entry.value";
           
   $result = pg_query($db, $sql); 
   
   if($check_all)
   {
      while($row = pg_fetch_row($result))
      {
         if( strlen($row[1]) > 0)
         { 
            echo "var checkbox = \"<input type='checkbox' name='SC_entries' value='".$row[0]."'checked/>\";";
            echo "checkbox_div.innerHTML+=checkbox +\"".$row[1]."\"+ \"<br/>\";";
         }
      }
   }
   else
   {
      $no_parens = substr($stat_cat_entries, 1, -1);
      $entries = explode(",",$no_parens);
      
      while($row = pg_fetch_row($result))
      {
         if( strlen($row[1]) > 0)
         { 
            if(in_array($row[0],$entries))
            {
               echo "var checkbox = \"<input type='checkbox' name='SC_entries' value='".$row[0]."' checked='true' />\";";
            }
            else
            {
               echo "var checkbox = \"<input type='checkbox' name='SC_entries' value='".$row[0]."' />\";";
            }
            echo "checkbox_div.innerHTML+=checkbox +\"".$row[1]."\"+ \"<br/>\";";
         }
      }
   }
}

?>