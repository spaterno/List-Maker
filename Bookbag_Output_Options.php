<?php

class Bookbag_Output_Options
{
   //need for the RSS file
   public $list_name;
   public $db_list_name;
   public $description;

   public $bookbag_id;
   public $update_bag;

   public $db;

   function __construct()
   {
      $this->output_filename = "";
      $this->list_name = "";
      $this->db_list_name;
      $this->description = "";
      $this->bookbag_id = -1;
      $this->update_bag = false;
   }

   function SetDb($db)
   {
      $this->db = $db;
   }

   function SetBookbagName($name)
   {
      //add the date and some info to end of name to make it unique
      //what about when it's a scheduled list?
      $date = date('U');

      $this->db_list_name = $name." ***".$date;
      $this->list_name = $name;
   }

   function GetBookbagName()
   {
      return $this->list_name;
   }

   function SetBookbagDescription($val)
   {
      if ($val != "none") $this->description = $val;
   }

   function GetBookbagDescription()
   {
      return $this->description;
   }

   function SetBookbagId($id)
   {
      $this->update_bag = true;
      $this->bookbag_id = $id;
   }

   function GetBookbagId()
   {
      return $this->bookbag_id;
   }

   function WriteBookbag($bib_list, $system_id)
   {
      //make a new bookbag with name and description created by list maker
      //save the bookbag id

      if ($this->update_bag)
      {
         //do an update not a insert - name and description only
         $sql ="UPDATE container.biblio_record_entry_bucket
                SET name = '$this->db_list_name',
                    description = '$this->description'
                WHERE id = $this->bookbag_id
                RETURNING id";
      }
      else
      {

         $user = intval(GetListMakerUserId($system_id));

         $sql = "INSERT INTO container.biblio_record_entry_bucket (owner, name, btype, description, pub, owning_lib)
                 VALUES ($user, '$this->db_list_name' ,'bookbag', '$this->description', true, $system_id)
                 RETURNING id";
      }

      echo $sql."\n";

      $result = pg_query($this->db,$sql);

      if($result)
      {
         $row = pg_fetch_row($result);

         $this->SetBookbagId($row[0]);

         echo "Bag id =".$this->GetBookbagId()."\n";

         if($this->update_bag)
         {
            //remove all the entries in the bag
            $remove_sql = "DELETE FROM container.biblio_record_entry_bucket_item
                           WHERE bucket = $this->bookbag_id";

            $remove_result = pg_query($this->db,$remove_sql);
         }

         foreach ($bib_list->multiple_copy_recs as $curr_bib)
         {
            //Put all the bib ids into the bookbag

            $bib_id = $curr_bib->GetBibId();

            $item_sql = "INSERT INTO container.biblio_record_entry_bucket_item (bucket, target_biblio_record_entry)
                         VALUES($this->bookbag_id, $bib_id)";
            $item_result = pg_query($this->db,$item_sql);

         }
         
         if ($bib_list->HasOnlineRecs())
         {
            foreach ($bib_list->online_recs  as $curr_bib)
            {
               //Put all the bib ids into the bookbag

               $bib_id = $curr_bib->GetBibId();

               $item_sql = "INSERT INTO container.biblio_record_entry_bucket_item (bucket, target_biblio_record_entry)
                            VALUES($this->bookbag_id, $bib_id)";
               $item_result = pg_query($this->db,$item_sql);
            }
         }
      }
   }

   function GetEmailText($include_link, $domain)
   {
       $message = "Bookbag OUTPUT\n";

       $message .="Options \n";

       $message .="List Name: ".$this->GetBookbagName()."\n";
       $message .="Description: ".$this->GetBookbagDescription()."\n\n";

       if ($include_link)
       {
          $message .= "Bookbag Id ".$this->GetBookbagId()."\n";

          $message .= "Web Client Link = https://evergreen.noblenet.org/eg/staff/cat/bucket/record/view/".$this->GetBookbagId()."\n";
          $message .= "OPAC Link = https://".$domain.".noblenet.org/eg/opac/bookbag?bookbag=".$this->GetBookbagId()."\n";
          $message .= "Title Sort OPAC Link = https://".$domain.".noblenet.org/eg/opac/bookbag?bookbag=".$this->GetBookbagId()."&sort=titlesort\n";
          $message .= "Author Sort OPAC Link = https://".$domain.".noblenet.org/eg/opac/bookbag?bookbag=".$this->GetBookbagId()."&sort=authorsort\n";
          $message .= "Pub Date Sort OPAC Link = https://".$domain.".noblenet.org/eg/opac/bookbag?bookbag=".$this->GetBookbagId()."&sort=pubdate.descending\n";
       }

       return $message;
   }

   function GetHTMLText()
   {
       $bag_out ="<div class=\"output_block\">";
       $bag_out .= "<h3>Bookbag</h3>";

       $bag_out .= "<div class=\"bookbag_params\">";

       $bag_out .="List Name: ".$this->GetBookbagName()."<br />";
       $bag_out .="Description: ".$this->GetBookbagDescription()."<br/>";

       $bag_out .="</div></div>";
       return $bag_out;
   }
   
   function GetReportLinkText()
   {
      $report_link = "bookbag*";
      $report_link .= "bag_id*".$this->GetBookbagId()."*";
      $report_link .= "bag_name*".urlencode(str_replace("\"","",$this->GetBookbagName()))."*";
      $report_link .= "bag_desc*".urlencode(str_replace("\"","",$this->GetBookbagDescription()))."*";
      
      return $report_link;
   }

}


?>