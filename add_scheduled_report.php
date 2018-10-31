<?php

  require_once('../../shared/PHPMailer/class.phpmailer.php');
  include "/usr/local/noble/db_config/db_info.php";

  //get the vars
  $filter_args ="";
  $output_args="";
  $email_args ="";
  $name_args = "";
  $message_body = "";
  $report_name="";
  $addresses=array();
  
  $working = false;
  $testing = false;
  
  $update =false;
    
  //assemble the string then call the reporter
  $library  = $_POST['lib'];
  $message_body .="libray is ".$library."\n";
  $filter_args .="lib ".$library." ";
  
  if (isset($_POST['db_id']))
  {
    $input_db_id = $_POST['db_id'];
    $message_body .="db_id is ".$input_db_id."\n";
    $update = true;
  }
  
 if(isset($_POST['loc']))
  {
     $copy_loc = $_POST['loc'];
     $message_body .="loc is ".$copy_loc."\n";
     $filter_args .="copy_loc ".$copy_loc." ";
  }
  else if(isset($_POST['loc_grp']))
  {
     $loc_grp = $_POST['loc_grp'];
     $message_body .="loc grp is ".$loc_grp."\n";
     $filter_args .="copy_loc_grp ".$loc_grp." ";
  }
  
  $type = $_POST['report_type'];
  
  if ($type == "weeding")
  {
     $message_body .="report type is weeding\n";
     $filter_args .="weeding ";
     
     $checkin_date_type = $_POST['checkin_date_type'];
     $message_body .="check in type ".$checkin_date_type."\n";
     
     if (isset($_POST['checkin_date']) )
     {
        $check_in = $_POST['checkin_date'];
        $check_in = date('Y-m-d', strtotime("$check_in")); 
        //reformat date to DB time
        $message_body .="shelf is ".$check_in."\n";
        $filter_args .="shelf ".$check_in." ";
     }
     else if (isset($_POST['checkin_date_relative']) )
     {
        $check_in = $_POST['checkin_date_relative'];
        //reformat date to DB time
        $message_body .="relative shelf is ".$check_in."\n";
        $filter_args .="shelf_relative ".$check_in." ";
     }


  }
  else if ($type == "inventory")
  {
     $message_body .="report type is inventory\n";
     

     if (isset($_POST['status']))
     {
        $status = $_POST['status'];
        $message_body .="status is ".$status."\n";
        $filter_args .="status ".$status." ";
     }
     
	  if(isset($_POST['stat_date_type']))
	  {   
		  $time_type = $_POST['stat_time_type'];
	  
		  if ($_POST['stat_date_type'] == "absolute")
		  {
			  $start = $_POST['stat_start'];
			  $stat_start = date('Y-m-d', strtotime("$start")); 
		  
			  if ($time_type == "between") 	
			  {	 
				  $end = $_POST['stat_end'];
				  $stat_end = date('Y-m-d', strtotime("$end")); 
			
				  $message_body .="status change date is between ".$stat_start." to ".$stat_end."\n";
				  $filter_args .="stat_change between ".$stat_start." ".$stat_end." ";
			  }
			  else
			  {
				 $message_body .="status change is ".$time_type." ".$stat_start."\n";
				 $filter_args .="stat_change ".$time_type." ".$stat_start." ";
			  }
		  }
		  else if ($_POST['stat_date_type'] == "relative")
		  {
			  $stat_start = $_POST['stat_start'];
		  
			  if ($time_type == "between") 	
			  {	
				  $stat_end = $_POST['stat_end'];
	
				  $message_body .="relative status change date is between ".$stat_start." to ".$stat_end."\n";
				  $filter_args .="stat_change_relative between ".$stat_start." ".$stat_end." ";
			  }
			  else
			  {
					$message_body .="relative status change is ".$time_type." ".$stat_start."\n";
					$filter_args .="stat_change_relative ".$time_type." ".$stat_start." ";
			  }
		  }
		  
     }
     
     $deleted  = $_POST['deleted'];
     $message_body .="Deleted is ".$deleted."\n";
     $filter_args .="".$deleted." ";
     
     if (isset($_POST['deleted_date_type']))
     {
        $time_type = $_POST['deleted_time_type'];
	  
		  if ($_POST['deleted_date_type'] == "absolute")
		  {
			  $start = $_POST['deleted_start'];
			  $del_start = date('Y-m-d', strtotime("$start")); 
		  
			  if ($time_type == "between") 	
			  {	 
				  $end = $_POST['deleted_end'];
				  $del_end = date('Y-m-d', strtotime("$end")); 
			
				  $message_body .="deleted date is between ".$del_start." to ".$del_end."\n";
				  $filter_args .="delete_date between ".$del_start." ".$del_end." ";
			  }
			  else
			  {
				 $message_body .="deleted date is ".$time_type." ".$del_start."\n";
				 $filter_args .="delete_date ".$time_type." ".$del_start." ";
			  }
		  }
		  else if ($_POST['deleted_date_type'] == "relative")
		  {
			  $del_start = $_POST['deleted_start'];
		  
			  if ($time_type == "between") 	
			  {	
				  $del_end = $_POST['deleted_end'];
	
				  $message_body .="relative delete  date is between ".$del_start." to ".$del_end."\n";
				  $filter_args .="delete_date_relative between ".$del_start." ".$del_end." ";
			  }
			  else
			  {
					$message_body .="relative delete date is ".$time_type." ".$del_start."\n";
					$filter_args .="delete_date_relative ".$time_type." ".$del_start." ";
			  }
		  }
     }
     
  }
  
  if (isset($_POST['pub_before']))
  {
     $pub_date = $_POST['pub_before'];
     $message_body .="pubdate before is ".$pub_date."\n";
     $filter_args .="pub_before ".$pub_date." ";
  }
  
  if (isset($_POST['pub_after']))
  {
     $pub_date = $_POST['pub_after'];
     $message_body .="pubdate after is ".$pub_date."\n";
     $filter_args .="pub_after ".$pub_date." ";
  }
  
  if (isset($_POST['pub_between_start']) && isset($_POST['pub_between_end']))
  {
     $pub_date_start = $_POST['pub_between_start'];
     $pub_date_end= $_POST['pub_between_end'];
     $message_body .="pubdate between is ".$pub_date_start." and ".$pub_date_end."\n";
     $filter_args .="pub_between ".$pub_date_start." ".$pub_date_end." ";
  }
  
  if(isset($_POST['active_type']))
  {   
     $time_type = $_POST['active_time_type'];
     
	  if ($_POST['active_type'] == "absolute")
	  {
		  $start = $_POST['active_start'];
		  $active_start = date('Y-m-d', strtotime("$start")); 
        
        if ($time_type == "between") 	
        {	 
		     $end = $_POST['active_end'];
           $active_end = date('Y-m-d', strtotime("$end")); 
			
		     $message_body .="added date is between ".$active_start." to ".$active_end."\n";
		     $filter_args .="added between ".$active_start." ".$active_end." ";
		  }
		  else
		  {
		    $message_body .="added date is ".$time_type." ".$active_start."\n";
		    $filter_args .="added ".$time_type." ".$active_start." ";
		  }
	  }
	  else if ($_POST['active_type'] == "relative")
	  {
		  $active_start = $_POST['active_start'];
		  
		  if ($time_type == "between") 	
        {	
   		  $active_end = $_POST['active_end'];
	
		     $message_body .="relative added date is between ".$active_start." to ".$active_end."\n";
		     $filter_args .="added_relative between ".$active_start." ".$active_end." ";
		  }
		  else
		  {
		      $message_body .="added date is ".$time_type." ".$active_start."\n";
		      $filter_args .="added_relative ".$time_type." ".$active_start." ";
		  }
	  }
  }
 
  
  if (isset($_POST['circ_mod'])) 
  {
     $circ_mod = $_POST['circ_mod'];
     $message_body .="circ_mod is ".$circ_mod."\n";
     $filter_args .="circ_mod ".$circ_mod." ";
  }
  
  if (isset($_POST['prefix'])) 
  {
     $prefix = $_POST['prefix'];
     $message_body .="prefix is ".$prefix."\n";
     $filter_args .="prefix ".$prefix." ";
  }
  
  if (isset($_POST['suffix'])) 
  {
     $suffix = $_POST['suffix'];
     $message_body .="suffix is ".$suffix."\n";
     $filter_args .="suffix ".$suffix." ";
  }
  
  if (isset($_POST['coll_man'])) 
  {
     $call_class = $_POST['call_class'];
     $coll_man = $_POST['coll_man'];
     $message_body .="class is ".$call_class."\n";
     $message_body .="coll_man is ".$coll_man."\n";
     $filter_args .="coll_topic ".$call_class." ".$coll_man." ";
  }
  else if (isset($_POST['start_call']) && isset($_POST['end_call']))
  { 
     $call_class = $_POST['call_class'];
     $start_call = str_replace(" ", "",$_POST['start_call']);
     $end_call = str_replace(" ","",$_POST['end_call']);
     $message_body .="class is ".$call_class."\n";
     $message_body .="start call is ".$start_call."\n";
     $message_body .="end call is ".$end_call."\n";
     $filter_args .="call_range ".$call_class." ".$start_call." ".$end_call." ";
  }
  else if (isset($_POST['contains_call']) )
  {
     $call_class = str_replace(" ", "",$_POST['call_class']);
     $contain_call = str_replace(" ", "",$_POST['contains_call']);
     $message_body .="class is ".$call_class."\n";
     $message_body .="contain call is ".$contain_call."\n";
     $filter_args .="call_contain ".$call_class." ".$contain_call." ";
  }
  else if (isset($_POST['bisac']) )
  {
     $call_class = str_replace(" ", "",$_POST['call_class']);
     $bisac = str_replace(" ", "",$_POST['bisac']);
     $message_body .="class is ".$call_class."\n";
     $message_body .="bisac is ".$bisac."\n";
     $filter_args .="bisac ".$call_class." ".$bisac." ";
  }
  
  
  if (isset($_POST['stat_cat'])  && $_POST['stat_cat'] != -1)
  {
     $stat_cat =trim($_POST['stat_cat']);
     $stat_cat_entry =str_replace("(", "",trim($_POST['stat_cat_entry']));
     $stat_cat_entry =str_replace(")", "",$stat_cat_entry);
     $message_body .="stat_cat is ".$stat_cat."\n";
     $message_body .="stat_cat_entry is ".$stat_cat_entry."\n";
     
     $filter_args .="stat_cat ".$stat_cat." ".$stat_cat_entry." ";
  }
  
  if (isset($_POST['only_holder']))
  {
     $only_opt = $_POST['only_holder'];
     $message_body .="Filter By Only Holder=". $only_opt ."\n";
     $filter_args .= "only_holder ".$only_opt." ";
  }
  
  if (isset($_POST['circ_count'])) 
  {
     $circ_count = $_POST['circ_count'];
     $compare = $_POST['circ_count_compare'];
     $compare_date = $_POST['circ_compare_date'];
     
     $message_body .="Circ Count ".$compare." than ".$circ_count." in ".$compare_date."\n";
     
     $filter_args .="circ_count ".$compare." ".$circ_count." ";
  }
  
  if(isset($_POST['circ_date_type']))
  {   
     $time_type = $_POST['circ_time_type'];
     
	  if ($_POST['circ_date_type'] == "absolute")
	  {
		  $start = $_POST['circ_start'];
		  $circ_start = date('Y-m-d', strtotime("$start")); 
        
        if ($time_type == "between") 	
        {	 
		     $end = $_POST['circ_end'];
           $circ_end = date('Y-m-d', strtotime("$end")); 
			
		     $message_body .="circ date is between ".$circ_start." to ".$circ_end."\n";
		     $filter_args .="circ_date between ".$circ_start." ".$circ_end." ";
		  }
		  else
		  {
		    $message_body .="circ date is ".$time_type." ".$circ_start."\n";
		    $filter_args .="circ_date ".$time_type." ".$circ_start." ";
		  }
	  }
	  else if ($_POST['circ_date_type'] == "relative")
	  {
		  $circ_start = $_POST['circ_start'];
		  
		  if ($time_type == "between") 	
        {	
   		  $circ_end = $_POST['circ_end'];
	
		     $message_body .="relative circ date is between ".$circ_start." to ".$circ_end."\n";
		     $filter_args .="circ_date_relative between ".$circ_start." ".$circ_end." ";
		  }
		  else
		  {
		      $message_body .="relative circ date is ".$time_type." ".$circ_start."\n";
		      $filter_args .="circ_date_relative ".$time_type." ".$circ_start." ";
		  }
	  }
  }
  
  //Start of output type data
  $email_args ="";
  $email_list = $_POST['email'];
  $email_list = str_replace(" ", "",$email_list);
  $addresses = explode(",", $email_list);
  foreach ($addresses as $curr)
  {  
     $message_body .="email is ".$curr."\n";
     $email_args .="email ".$curr." ";
  }
  
  if (isset($_POST['out_file']))
  {
     $out_file = $_POST['out_file'];
     $replace_chars = array("\\", "/", "%", ":", "'", "*", "?", ":", ";", "<", ">", "|", " ", "#", "$");
     $out_file= str_replace($replace_chars, "_",$out_file );
     $message_body .="out_file is ".$out_file."\n";
     $output_args .="out_file ".$out_file." ";
  }
  
  if (isset($_POST['scope']))
  {
     $message_body .="Scope Links\n";
     $filter_args .="scope ";
  }
  
   if (isset($_POST['use_domain']))
   {
      $domain = $_POST['domain'];
	   $message_body .="Subdomain =".$domain."\n";
	   $filter_args .="domain ".$domain." ";
   }
  
  if (isset($_POST['search_links']))
  {
     $message_body .="Search Links\n";
     $filter_args .="search_links ";
  }
  
  
  if (isset($_POST['spreadsheet'])) 
  {
     $output_args.="spreadsheet ";
     //look at order
     $order = $_POST['sheet_order'];
     $output_args .=$order." ";
     
     //look at format
     $format = $_POST['sheet_format'];
     $output_args .= $format." ";
     
     if (isset($_POST['sheet_options'])) 
     {
        $output_args .= $_POST['sheet_options'];
     }
     
     if (isset($_POST['sheet_display'])) 
     {
        $display = str_replace("*", " ", $_POST['sheet_display'] );
        $output_args .= $display." ";
     }
     
     if (isset($_POST['circ_between_start']) && isset($_POST['circ_between_end']) ) 
     {
        $start = $_POST['circ_between_start']; 
        $end = $_POST['circ_between_end']; 
        
        $between_start = date('Y-m-d', strtotime("$start")); 
        $between_end = date('Y-m-d', strtotime("$end")); 
        
        $message_body .="circ_between is ".$between_start." to ".$between_end."\n";
        $output_args .="circ_between ".$between_start." ".$between_end." ";
        
     }
     
  }
  
  if (isset($_POST['html'])) 
  {
     $output_args.="html ";
     //look at order
     $order = $_POST['html_order'];
     $output_args .=$order." ";
     
     //look at format
     $layout = $_POST['html_layout'];
     $output_args .= $layout." ";
     if ($layout == "grid") $output_args .= $_POST['html_grid_width']." ";
     
     if (isset($_POST['html_group'])) $output_args .= "group_copy ".$_POST['html_group']." ";
     if (isset($_POST['html_word_press'])) $output_args .= "word_press ";
     
     if (isset($_POST['html_display'])) 
     {
        $display = str_replace("*", " ", $_POST['html_display'] );
        $output_args .= $display." ";
     }
     
     if(isset($_POST['image_size']))
     {
        $output_args .= "image_size ".$_POST['image_size']." ";
     }
     
  }
  
  if(isset($_POST['rss']))
  {
     $output_args .="rss ";
     
      //look at format
     $output_args .= "rss_desc \"".$_POST['rss_desc']."\" ";
     $output_args .= "rss_list \"".$_POST['rss_list']."\" ";
     
  }
  
  if(isset($_POST['report_name']))
  {
     $report_name = str_replace("'","''",$_POST['report_name']);
          
     $message_body .= "REPORT NAME=".$report_name."\n\n";
     
     $name_args ="report_name \"".$report_name."\" ";
  }
  
  //if run now - add to log
  if(isset($_POST['run_now']))
  {
      $schedule_args .="RUN NOW";
      
		$args = $filter_args.$email_args.$name_args.$output_args;

		$today = date('m_d_Y');
		$log_file_name = "/var/www/tools/reports/list_log_".$today.".txt";
		$log_file_string = date('m-d-Y G:i:s');
		if ($working) $log_file_string .= "------TEST----- /usr/bin/php -f /var/www/tools/list_maker_working/create_list.php ".$args."\n\n";
		else if ($testing) $log_file_string .= "------TEST----- /usr/bin/php -f /var/www/tools/list_maker_test/create_list.php ".$args."\n\n";
		else $log_file_string .= "------ /usr/bin/php -f /var/www/tools/list_maker/create_list.php ".$args."\n\n"; 
 

		if (file_exists($log_file_name))
		{
			$file = fopen($log_file_name, 'a');
			fwrite($file, $log_file_string);
			fclose($file);
		}
		else
		{
		  file_put_contents($log_file_name, $log_file_string);
		}

		if ($working) $cmd = "/usr/bin/php -f /var/www/tools/list_maker_working/create_list.php ".$args;
		else if ($testing) $cmd = "/usr/bin/php -f /var/www/tools/list_maker_test/create_list.php ".$args;
		else $cmd = "/usr/bin/php -f /var/www/tools/list_maker/create_list.php  ".$args;
		exec($cmd . " > /dev/null &");   
	}
	
	
  $message_body .= "FILTERS=".$filter_args."\n\n";
  $message_body .= "OUTPUT=".$output_args."\n\n";
  
  //Add this info to the database
  $eg_db = pg_connect("host=$eg_host port=5432 dbname=$eg_database user=$eg_user password=$eg_password");
  if (!$eg_db) 
  {
     die("Error in connection to circulation DB: " . pg_last_error());
  }
  
  if ($update)
  {
     $sql = "UPDATE noble.scheduled_list
             SET library = '$library' , 
                 email = '$email_list' ,
                 filters = '$filter_args' ,
                 output = '$output_args' ,
                 name = '$report_name' 
              WHERE id = $input_db_id
              RETURNING id";
  }
  else
  {
     $sql = "INSERT INTO noble.scheduled_list (library, email, filters, output, name) 
             VALUES ('$library', '$email_list' ,'$filter_args', '$output_args', '$report_name')
             RETURNING id";
  }
  
  $message_body .= "SQL =".$sql."\n\n";
  $result = pg_query($eg_db,$sql);
  
  $row = pg_fetch_row($result);
  
  $db_id = $row[0];
  $message_body .= "DB ID =".$db_id."\n\n";
  
   //Get all the scheduled data 
  if (isset($_POST["run_configure"]))
  {
     $timeframe = str_replace("_", " ", $_POST['run_configure']);
     $start_date = date('Y-m-d', strtotime($_POST['run_configure_start']));
     $scheduled_args = "CONFIGURE- Every".$timeframe."\n";
     $scheduled_args .= "Starting ".$start_date;
     
     $schedule_sql="UPDATE noble.scheduled_list 
                    SET schedule_type = 'relative',
                        interval = '$timeframe',
                        start_date = '$start_date'
                    WHERE id = $db_id";
  }
  else if (isset($_POST["run_daily"]))
  {
     $schedule_sql="UPDATE noble.scheduled_list 
                    SET schedule_type = 'daily'
                    WHERE id = $db_id";
  }
  else if (isset($_POST["run_weekly"]))
  {
     $day_string = str_replace("*", ",", $_POST['run_weekly']);
     $scheduled_args = "WEEKLY- ".$day_string;
     $schedule_sql="UPDATE noble.scheduled_list 
                    SET schedule_type = 'weekly',
                        weekly = '$day_string'
                    WHERE id = $db_id";
  }
  else //run monthly
  {
     $schedule_sql="UPDATE noble.scheduled_list 
                    SET schedule_type = 'monthly'";
     
     if (isset($_POST["run_specific_days"]))
     {
        $days =  str_replace(" ", "",$_POST['run_specific_days']);
        
        $run_days = "";
        $days = explode(",", $days);
        foreach($days as $day)
        {
           $run_days .= str_pad($day, 2, "0", STR_PAD_LEFT).",";
        }
        
        $scheduled_args = "MONTHLY ON - ".$run_days."\n";
        $schedule_sql.=", specific_days = '$run_days'";
     }  
     
     
     if (isset($_POST["preset_first_last"])  && isset($_POST["preset_month_day"]) )
     {
        $days_of_month = $_POST['preset_first_last']." ".$_POST["preset_month_day"];
        $scheduled_args .= "MONTHLY ON - ".$days_of_month."\n";
        
        $schedule_sql.=", relative_days_of_month = '$days_of_month'";
     }
     
      $schedule_sql.=" WHERE id = $db_id";
  }
  
  $result = pg_query($eg_db, $schedule_sql);
  
  $message_body .= "SCHEDULED=".$scheduled_args."\n\n";
  
  $message_body .= "SCHEDULE SQL =".$schedule_sql."\n\n";
  
  //email Suzanne

  $email = new PHPMailer();
  $email->From      = 'paterno@noblenet.org';
  $email->FromName  = 'List Report Generator';
  $email->Subject   = '*******New SCHEDULED List*******';
  $email->Body      = $message_body;

  $email->AddAddress( 'paterno@noblenet.org');
  $email->Send(); 
  
    
?>
