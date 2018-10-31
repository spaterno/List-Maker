<?php 

class CopyRec
{
   public $db; 

   public $acq_cost;
   public $active_date;
   public $age_protection_expire;
   public $age_protection_val;
   public $alert_message;
   public $barcode;
   public $copy_id;
   public $call_num;
   public $call_num_id;
   public $call_num_class;
   public $call_num_prefix;
   public $call_num_suffix;
   public $call_sort_key;
   public $circ_modifier;
   public $circs_between;
   public $circ_lib; 
   public $circ_lib_name;
   public $circ_lib_shortname;
   public $copy_location;
   public $create_date;
   public $deleted_item;
   public $deleted_date;
   public $deposit;
   public $due_date;
   public $fine_level;
   public $floating;
   public $holds_other_lib;
   public $holds_my_lib;
   public $in_house_use;
   public $last_in_house_use;
   public $last_checkin;
   public $last_checkout;
   public $last_fy_circ;
   public $lifetime_circs;
   public $loan_duration;
   public $only_holder;
   public $other_library_copy_count;
   public $owning_lib;
   public $owning_lib_shortname;
   public $part;
   public $part_id;
   public $price;
   public $public_note;
   public $reference;
   public $staff_note;
   public $stat_cats;
   public $status;
   public $status_changed_date;
   public $system_id;
   public $system_shortname;
   public $ytd_circ;
   
   function __construct() 
   {
       $this->public_note = array();
       $this->staff_note = array();
       $this->stat_cats = array();
       
       $this->deleted_item = false;
       $this->deposit = false;
       $this->floating = false;
       $this->reference = false;
       
       $this->holds = 0;
       
       $this->circs_between = -1; //give default
   }
   
   function __destruct()
   {
      unset($this->public_note);
      unset($this->staff_note);
      unset($this->stat_cats);
   }
   
   function SetDB($val)
   {
      $this->db = $val;
   }
   
   function SetAcqCost($val)
   {
      $this->acq_cost = $val;
   }
   
   function GetAcqCost()
   {
      return $this->acq_cost;
   }
   
   function SetActiveDate($active, $create)
   {
      if ($active) $active = date('m/d/Y', strtotime($active));
      else $active ="--";
      
      $create = date('m/d/Y', strtotime($create));
      $this->create_date = $create;
      
      if (strtotime($create) <= strtotime('06-01-2012') )
      {
         if (strtotime($create) < strtotime('01-01-2000') )
         {
            $this->active_date = "Before 2000";
            $this->create_date = "Before 2000";
         }
         else
         {
            if ($active) $this->active_date = $create;
         }
      }
      else
      {
         $this->active_date = $active;
      }
      
      $this->CalculateAgeProtectExpire();
   }
   
   function GetActiveDate()
   {
      return $this->active_date;
   }
   
   function GetCreateDate()
   {
      return $this->create_date;
   }
   
   function SetAgeProtect($val)
   {
      switch($val)
      {
         case 1: 
            $this->age_protection_val= "1 month";
            break;
         case 2: 
            $this->age_protection_val= "3 months";
            break;
         case 101: 
            $this->age_protection_val= "14 days";
            break;
      }
      $this->CalculateAgeProtectExpire();
   }
   
   function GetAgeProtect()
   {
      return $this->age_protection_val;
   }
   
   function CalculateAgeProtectExpire()
   {
      if (isset($this->active_date) && $this->active_date !="--" &&  isset($this->age_protection_val))
      {
         $this->age_protection_expire = date('m/d/Y', strtotime($this->active_date."+".$this->age_protection_val));
      }
   }

   function GetAgeProtectExpire()
   {
      return $this->age_protection_expire;
   }
   
   function SetAlertMessage($val)
   {
      $this->alert_message = $val;
   }

   function GetAlertMessage()
   {
      return $this->alert_message;
   }
   
   function SetBarcode($val)
   {
      $this->barcode = $val;
   }
   
   function GetBarcode()
   {
      return $this->barcode;
   }
   
   function SetCopyId($val)
   {
      $this->copy_id = $val;
   }
   
   function GetCopyId()
   {
      return $this->copy_id;
   }
   
   function SetCallNumber($val)
   {
      $this->call_num = $val;
   }
   
   function GetCallNumber()
   {
      return $this->call_num;
   }
   
   function SetCallNumberId($val)
   {
      $this->call_num_id = $val;
   }
   
   function GetCallNumberId()
   {
      return $this->call_num_id;
   }
   
   function SetCallClass($val)
   {
      $class = '';
      switch($val)
      {
         case 1:
           $class = "Generic";
           break;
         case 2:
           $class = "Dewey";
           break;
         case 3:
           $class = "LC";
           break;
         case 4:
           $class = "BISAC";
           break;
      }
      
      $this->call_num_class = $class;
   }
   
   function GetCallClass()
   {
      return $this->call_num_class;
   }
   
   function SetPrefix($val)
   {
      $sql = "SELECT label
              FROM asset.call_number_prefix
              WHERE id = $val";
          
      $result = pg_query($this->db, $sql);
      $row = pg_fetch_row($result);
      $this->call_num_prefix = $row[0];
   }
   
   function GetPrefix()
   {
      return $this->call_num_prefix;
   }
   
   function SetSuffix($val)
   {
      $sql = "SELECT label
              FROM asset.call_number_suffix
              WHERE id = $val";
          
      $result = pg_query($this->db, $sql);
      $row = pg_fetch_row($result);
      $this->call_num_suffix = $row[0];
   }
   
   function GetSuffix()
   {
      return $this->call_num_suffix;
   }
   
   function SetCallSortKey($val)
   {
      $this->call_sort_key = $val;
   }
   
   function GetCallSortKey()
   {
      return $this->call_sort_key;
   }
   
   function SetLastCheckout()
   {
       //checkin/due date
       $checkout_sql = "SELECT MAX(xact_start)
                       FROM action.all_circulation
                       WHERE target_copy= '$this->copy_id' ";
          
       $checkout_result = pg_query($this->db, $checkout_sql);
       $checkout_row = pg_fetch_row($checkout_result);
          
       $checkout =$checkout_row[0];
       $this->last_checkout = date('m/d/Y', strtotime($checkout) ) ;
       
       if (strtotime($this->last_checkout) < strtotime('01-01-1990') )
       {
          $checkin_sql = "SELECT loutdate
                          FROM extend_reporter.legacy_iii_data
                          WHERE copy = $this->copy_id";
          $checkout_result = pg_query($this->db, $checkout_sql);
          $checkout_row = pg_fetch_row($checkout_result);
          $checkout =$checkout_row[0];
          $this->last_checkout = date('m/d/Y', strtotime($checkout) ) ;
       }
       
       if (strtotime($this->last_checkout) < strtotime('01-01-1990') )
       {
          if (isset($this->lifetime_circs) && $this->lifetime_circs == 0)  
          {
             $this->last_checkout = "--";
          }
          else if (strtotime($this->active_date) > strtotime('12-31-2000') )
          {
              $this->last_checkout = "--";
          }
          else if (isset($this->last_checkin) && strtotime($this->last_checkin) > strtotime('12-31-2000') )
          {
            $this->last_checkout = "--";
          }
          else
          {
             $this->last_checkout = "Before 2000";
          }
      }
   }
   
   function GetLastCheckout()
   {
      return $this->last_checkout;
   }

   function SetCircMod($val)
   {
      $this->circ_modifier = $val;
   }
   
   function GetCircMod()
   {
      return $this->circ_modifier;
   }
   
   function SetCircsBetween($start, $end)
   {
      $start_date = date('Y-m-d', strtotime($start));
      $end_date = date('Y-m-d', strtotime($end));
      //Circs count
      $config_circs_sql = "SELECT COUNT(*)
                           FROM action.all_circulation
                           WHERE target_copy= '$this->copy_id '
                           AND DATE(xact_start) BETWEEN '$start_date' AND '$end_date'";
                             
      $config_circs_result = pg_query($this->db, $config_circs_sql);
      $config_circs_row = pg_fetch_row($config_circs_result);
      $this->circs_between = $config_circs_row[0];
   }
   
   function GetCircsBetween()
   {
      return $this->circs_between;
   }
   
   function SetCircLib($id)
   {
      $this->circ_lib = $id;
      
      $sql = "SELECT shortname, name, parent_ou
             FROM actor.org_unit
             WHERE id = $id";
          
      $result = pg_query($this->db, $sql);
      $row = pg_fetch_row($result);
      $this->circ_lib_shortname = $row[0];
      $this->circ_lib_name = $row[1];
      
      $this->system_id = $row[2];
       
       
      $sql = "SELECT shortname
              FROM actor.org_unit
              WHERE id = $this->system_id";
          
      $result = pg_query($this->db, $sql);
      $row = pg_fetch_row($result);
      $this->system_shortname = $row[0];
      
   }
   
   function GetCircLibId()
   {
      return $this->circ_lib;
   }
    
   function GetCircLibShortname()
   {
      return $this->circ_lib_shortname;
   }
   
   function GetCircLibName()
   {
      return $this->circ_lib_name;
   }
   
   function GetSystemId()
   {
      return  $this->system_id;
   }
   
   function GetSystemShortname()
   {
      return  $this->system_shortname;
   }

   function SetCopyLocation($val)
   {
      $this->copy_location = $val;
   }
   
   function GetCopyLocation()
   {
      return $this->copy_location;
   }
   
   function SetDeleted($deleted, $date)
   {
      if ($deleted == "f")
      {
         $this->deleted_item = false;
         return;
      }
      $this->deleted_item = true;
      if ($this->deleted_item)$this->deleted_date = date('m/d/Y', strtotime($date));
   }
   
   function GetIsDeleted()
   {
       if ($this->deleted_item)return true;
       else return false;
   }
   
   function GetDeletedDate()
   {
      return $this->deleted_date;
   }
   
   function SetDeposit($val)
   {
      if ($val == "t")
      {
         $this->deposit = true;
      }
      else
      {
         $this->deposit = "";
      }
   }
   
   function GetDeposit()
   {
      return $this->deposit;
   }
      
   function SetDueDate()
   {
       if (  $this->status == "Checked out" || $this->status == "Lost" 
          || $this->status == "Long Overdue" || $this->status == "Claimed returned")
       {
          $due_sql = "SELECT  MAX(due_date)
                      FROM action.all_circulation
                      WHERE target_copy= '$this->copy_id' ";
          
          $due_result = pg_query($this->db, $due_sql);
          $due_row = pg_fetch_row($due_result);
         
          $this->due_date =date('m/d/Y', strtotime($due_row[0]));
       }
       else
       {
          $this->due_date = "";
       }
          
   }
   
   function GetDueDate()
   {
      return $this->due_date;
   }
   
   function SetFineLevel($val)
   {
      switch($val)
      {
         case 1:
            $this->fine_level = "low";
            break;
         case 2:
            $this->fine_level = "normal";
            break;
         case 3:
            $this->fine_level = "high";
            break;
      }
   }
   
   function GetFineLevel()
   {
      return $this->fine_level;
   }
   
   function SetFloating($val)
   {
      if ($val == "t")
      {
         $this->floating = true;
      }
      else
      {
         $this->floating = "";
      }
   }
   
   function GetFloating()
   {
      return $this->floating;
   }
   
   function SetHolds()
   {
      $this->holds_my_lib = 0;
      
      //check copy holds
      $copy_sql = "SELECT count(*)
                    FROM action.hold_request
                    WHERE target= $this->copy_id
                    AND (hold_type = 'C' OR hold_type = 'F')
                    AND fulfillment_time IS NULL 
                    AND cancel_time IS NULL 
                    AND (expire_time > now() OR expire_time IS NULL) 
                    AND pickup_lib = $this->circ_lib";
          
      $copy_result = pg_query($this->db, $copy_sql);  
      $copy_row = pg_fetch_row($copy_result);
      
      $this->holds_my_lib += $copy_row[0];
      
      //check volume holds
      $vol_sql = "SELECT count(*)
                    FROM action.hold_request
                    WHERE target= $this->call_num_id
                    AND hold_type = 'V'
                    AND fulfillment_time IS NULL 
                    AND cancel_time IS NULL 
                    AND (expire_time > now() OR expire_time IS NULL) 
                    AND pickup_lib = $this->circ_lib";
          
      $vol_result = pg_query($this->db, $vol_sql);  
      $vol_row = pg_fetch_row($vol_result);
      
      $this->holds_my_lib += $vol_row[0];

      if (isset($this->part_id))
      {
         $part_sql = "SELECT count(*)
                       FROM action.hold_request
                       WHERE target= $this->part_id
                       AND hold_type = 'P'
                       AND fulfillment_time IS NULL 
                       AND cancel_time IS NULL 
                       AND (expire_time > now() OR expire_time IS NULL)
                       AND pickup_lib = $this->circ_lib";
          
         $part_result = pg_query($this->db, $part_sql);  
         $part_row = pg_fetch_row($part_result);
         
         $this->holds_my_lib += $part_row[0];
      }
      
      $this->holds_other_lib = 0;
      
      //check copy holds
      $copy_sql = "SELECT count(*)
                    FROM action.hold_request
                    WHERE target= $this->copy_id
                    AND (hold_type = 'C' OR hold_type = 'F')
                    AND fulfillment_time IS NULL 
                    AND cancel_time IS NULL 
                    AND (expire_time > now() OR expire_time IS NULL) 
                    AND pickup_lib != $this->circ_lib";
          
      $copy_result = pg_query($this->db, $copy_sql);  
      $copy_row = pg_fetch_row($copy_result);
      
      $this->holds_other_lib += $copy_row[0];
      
      //check volume holds
      $vol_sql = "SELECT count(*)
                    FROM action.hold_request
                    WHERE target= $this->call_num_id
                    AND hold_type = 'V'
                    AND fulfillment_time IS NULL 
                    AND cancel_time IS NULL 
                    AND (expire_time > now() OR expire_time IS NULL) 
                    AND pickup_lib != $this->circ_lib";
          
      $vol_result = pg_query($this->db, $vol_sql);  
      $vol_row = pg_fetch_row($vol_result);
      
      $this->holds_other_lib += $vol_row[0];

      if (isset($this->part_id))
      {
         $part_sql = "SELECT count(*)
                       FROM action.hold_request
                       WHERE target= $this->part_id
                       AND hold_type = 'P'
                       AND fulfillment_time IS NULL 
                       AND cancel_time IS NULL 
                       AND (expire_time > now() OR expire_time IS NULL)
                       AND pickup_lib != $this->circ_lib";
          
         $part_result = pg_query($this->db, $part_sql);  
         $part_row = pg_fetch_row($part_result);
         
         $this->holds_other_lib += $part_row[0];
      }
      
      
   }
   
   function GetMyHolds()
   {
      return $this->holds_my_lib;
   }
   
   function GetOtherHolds()
   {
      return $this->holds_other_lib;
   }

   function SetInHouseUse()
   {
      $in_house_sql = "SELECT  COUNT(*), MAX(use_time)
                       FROM action.in_house_use
                       WHERE item= '$this->copy_id' ";
          
      $in_house_result = pg_query($this->db, $in_house_sql);
      $in_house_row = pg_fetch_row($in_house_result);
      $this->in_house_use = $in_house_row[0];
         
       if ($in_house_row[1])
       {
          $this->last_in_house_use = date('m/d/Y', strtotime($in_house_row[1]) );
       }
       else
       {
           $this->last_in_house_use = "NOT USED";
       }
   }
   
   function GetInHouseUse()
   {
      return $this->in_house_use;
   }
   
   function GetLastInHouseUse()
   {
      return $this->last_in_house_use;
   }
   
   function SetLastCheckin()
   { 
       //checkin/due date
       $checkin_sql = "SELECT MAX(checkin_time)
                       FROM action.all_circulation
                       WHERE target_copy= '$this->copy_id' ";
          
       $checkin_result = pg_query($this->db, $checkin_sql);
       $checkin_row = pg_fetch_row($checkin_result);
          
       $checkin =$checkin_row[0];
       $this->last_checkin = date('m/d/Y', strtotime($checkin) ) ;
       
       if (strtotime($this->last_checkin) < strtotime('01-01-1990') )
       {
          $checkin_sql = "SELECT lchkin
                          FROM extend_reporter.legacy_iii_data
                          WHERE copy = $this->copy_id";
          $checkin_result = pg_query($this->db, $checkin_sql);
          $checkin_row = pg_fetch_row($checkin_result);
          $checkin =$checkin_row[0];
          $this->last_checkin = date('m/d/Y', strtotime($checkin) ) ;
       }

      $this->UpdateLastCheckin();
   }
   
   function UpdateLastCheckin()
   {
      //should do math here to get the right value
      if (isset($this->last_checkin) && strtotime($this->last_checkin) < strtotime('01-01-1990') )
      {
          if (isset($this->lifetime_circs) && $this->lifetime_circs == 0)  
          {
             $this->last_checkin = "--";
          }
          else if (isset($this->status) && 
                   ($this->status == "Checked out" || $this->status  == "Lost" ||  $this->status  == "Long Overdue" ||
                    $this->status  == "In transit" || $this->status  == "Lost and Paid" || $this->status  == "Claimed returned" ) )
          {
             //if checked out, claimed returns, long overdue, lost or lost and paid
             $this->last_checkin = "N/A";
          }
          else
          {
             $this->last_checkin = "Before 2000";
          }
      }   
   }
   
   function GetLastCheckin()
   {
      return $this->last_checkin;
   }
   
   function SetLastFYCirc()
   {
      $today = date("Y-m-d");
      $fy = CalculateFiscalYear();
   
      $fy_start = GetFiscalStart($fy);
      $fy_end = GetFiscalEnd($fy);
     
      $ly_start = date("Y-m-d", strtotime("$fy_start -1 year"));
      $ly_end = date("Y-m-d", strtotime("$fy_end -1 year"));
       
      //Last Year Circs
      $ly_sql = "SELECT COUNT(*)
                 FROM action.all_circulation
                 WHERE target_copy= '$this->copy_id '
                 AND DATE(xact_start) BETWEEN '$ly_start' AND '$ly_end'";
          
      $ly_result = pg_query($this->db, $ly_sql);
      $ly_row = pg_fetch_row($ly_result);
      $this->last_fy_circ = $ly_row[0];
   }
   
   function GetLastFYCirc()
   {
      return $this->last_fy_circ;
   }
   
   function SetLifetimeCircs()
   {
      $total_sql ="SELECT circ_count
                   FROM extend_reporter.full_circ_count
                   WHERE id = $this->copy_id ";
          
      $total_result = pg_query($this->db, $total_sql);
      $total_row = pg_fetch_row($total_result);
      $this->lifetime_circs = $total_row[0];
      
      $this->UpdateLastCheckin(); //may change the text
   }
   
   function GetLifetimeCircs()
   {
      return $this->lifetime_circs;
   }
   
   function SetLoanDuration($val)
   {
      switch($val)
      {
         case 1:
            $this->loan_duration = "short";
            break;
         case 2:
            $this->loan_duration = "normal";
            break;
         case 3:
            $this->loan_duration = "long";
            break;
      }
   }
   
   function GetLoanDuration()
   {
      return $this->loan_duration;
   }
   
   function SetPublicNote()
   {
      //get copy notes
      $note_sql = "SELECT value
                   FROM asset.copy_note
                   WHERE owning_copy = $this->copy_id
                   AND pub = true";
        
      $note_result = pg_query($this->db, $note_sql);
          
      $note = "";
      while ($note_row = pg_fetch_row($note_result))
      {
          $this->public_note[]  = $note_row[0];
      }
       
   }
   
   function GetPublicNote($seperator)
   {
      return implode($seperator, $this->public_note);
   }
   
   function SetStaffNote()
   {
      //get copy notes
      $note_sql = "SELECT value
                   FROM asset.copy_note
                   WHERE owning_copy = $this->copy_id
                   AND pub = false";
        
      $note_result = pg_query($this->db, $note_sql);
          
      $note = "";
      while ($note_row = pg_fetch_row($note_result))
      {
          $this->staff_note[]  = $note_row[0];
      }
       
   }
   
   function GetStaffNote($seperator)
   {
      return implode($seperator, $this->staff_note);
   }
   
   function SetOnlyHolder($bib_id)
   {
       $only_sql = "SELECT count(*)
                    FROM asset.copy
                    INNER JOIN asset.call_number ON asset.call_number.id = asset.copy.call_number
                    WHERE asset.call_number.record = '$bib_id'
                    AND asset.copy.deleted = false
                    AND asset.copy.circ_lib != $this->circ_lib ";
            
       $only_result = pg_query($this->db, $only_sql);
       $only_row = pg_fetch_row($only_result);
          
       if ($only_row[0] > 0 )
       {
          $this->only_holder = "";
       }
       else 
       {
          $this->only_holder = "TRUE";
       }
       
       $this->other_library_copy_count = $only_row[0];
   }
   
   function GetOnlyHolder()
   {
      return $this->only_holder;
   }
   
   function GetOtherLibraryCount()
   {
      return $this->other_library_copy_count;
   }
   
   function SetOwningLib($id)
   {
      $this->owning_lib= $id;
      $sql = "SELECT shortname
             FROM actor.org_unit
             WHERE id = $id";
          
      $result = pg_query($this->db, $sql);
      $row = pg_fetch_row($result);
      $this->owning_lib_shortname = $row[0];
   }
   
   function GetOwningLibId()
   {
      return $this->owning_lib;
   }
   
   function GetOwningLibShortname()
   {
      return $this->owning_lib_shortname;
   }
   
   function SetPart()
   {
      $part_sql = "SELECT biblio.monograph_part.label,  biblio.monograph_part.id
                   FROM asset.copy_part_map
                   JOIN biblio.monograph_part ON asset.copy_part_map.part = biblio.monograph_part.id
                   WHERE asset.copy_part_map.target_copy= '$this->copy_id' ";
          
      $part_result = pg_query($this->db, $part_sql);
      $part_row = pg_fetch_row($part_result);

      if ($part_row[0])
      {
         $this->part = $part_row[0];
         $this->part_id = $part_row[1];
      }
      else 
      {
         $this->part = NULL;
         $this->part_id = NULL;
      }

   }
   
   function GetPart()
   {
      return $this->part;
   }
   
   function SetPrice($val)
   {
      $this->price = $val;
   }
   
   function GetPrice()
   {
      return $this->price;
   }
   
   function SetReference($val)
   {
      if ($val == "t")
      {
         $this->reference = true;
      }
      else
      {
         $this->reference = "";
      }
   }
   
   function GetReference()
   {
      return $this->reference;
   }
   
   function SetStatCats()
   {
      $stat_sql = "SELECT asset.stat_cat.name, asset.stat_cat_entry.value, asset.stat_cat.id
                   FROM asset.stat_cat_entry_copy_map
                   JOIN asset.stat_cat ON asset.stat_cat_entry_copy_map.stat_cat = asset.stat_cat.id
                   JOIN asset.stat_cat_entry ON asset.stat_cat_entry_copy_map.stat_cat_entry = asset.stat_cat_entry.id
                   WHERE asset.stat_cat_entry_copy_map.owning_copy= $this->copy_id 
                   ORDER BY asset.stat_cat.id";
          
      $stat_result = pg_query($this->db, $stat_sql);

      while( $stat_row = pg_fetch_row($stat_result))
      {
          $this->stat_cats[]= $stat_row[0]."/".$stat_row[1];
      }
   }
   
   function GetStatCats($seperator)
   {
      return implode($seperator, $this->stat_cats);
   }
   
   function GetStatCatArray()
   {
      return $this->stat_cats;
   }
   
   function GetNumStatCats()
   {
      return count($this->stat_cats);
   }
   
   function SetStatus($val)
   {
      $sql = "SELECT name
              FROM config.copy_status
              WHERE id = $val";
          
      $result = pg_query($this->db, $sql);
      $row = pg_fetch_row($result);
      $this->status = $row[0];
      
      $this->UpdateLastCheckin(); //may change the text
   }
   
   function GetStatus()
   {
      return $this->status;
   }
   
   function SetStatusChange($val)
   {
      $this->status_changed_date = date('m/d/Y', strtotime($val));
   }
   
   function GetStatusChange()
   {
      return $this->status_changed_date;
   }
   
   function SetYTDCirc()
   {
      $today = date("Y-m-d");
      $fy = CalculateFiscalYear();
   
      $fy_start = GetFiscalStart($fy);
      $fy_end = GetFiscalEnd($fy);
      
      $ytd_sql = "SELECT COUNT(*)
                  FROM action.all_circulation
                  WHERE target_copy= '$this->copy_id '
                  AND DATE(xact_start) BETWEEN '$fy_start' AND '$today'";
          
      $ytd_result = pg_query($this->db, $ytd_sql);
      $ytd_row = pg_fetch_row($ytd_result);
      $this->ytd_circ = $ytd_row[0];
   }
   
   function GetYTDCirc()
   {
      return $this->ytd_circ;
   }
}


  
?>