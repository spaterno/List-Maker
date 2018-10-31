<?php

  require_once('/var/www/shared/PHPMailer/class.phpmailer.php');

  //get the vars
  $args ="";
  $message_body = "";
    
  //assemble the string then call the reporter
  $library  = $_POST['lib'];
  $message_body .="libray is ".$library."\n";
  $args .="lib ".$library." ";
  
  if(isset($_POST['loc']))
  {
     $copy_loc = $_POST['loc'];
     $message_body .="loc is ".$copy_loc."\n";
     $args .="copy_loc ".$copy_loc." ";
  }
  else if(isset($_POST['loc_grp']))
  {
     $loc_grp = $_POST['loc_grp'];
     $message_body .="loc grp is ".$loc_grp."\n";
     $args .="copy_loc_grp ".$loc_grp." ";
  }
  
  $type = $_POST['report_type'];
  
  $testing = false;
  $working = false;
  
  if ($type == "weeding")
  {
     $message_body .="report type is weeding\n";
     $args .="weeding ";
     
     if (isset($_POST['checkin_date']))
     {
        $check_in = $_POST['checkin_date'];
        $check_in = date('Y-m-d', strtotime("$check_in")); 
        //reformat date to DB time
        $message_body .="shelf is ".$check_in."\n";
        $args .="shelf ".$check_in." ";
     }
     else if (isset($_POST['checkin_date_relative']))
     {
        $check_in = $_POST['checkin_date_relative'];
        //reformat date to DB time
        $message_body .="relative shelf is ".$check_in."\n";
        $args .="shelf_relative ".$check_in." ";
     }


  }
  else if ($type == "inventory")
  {
     $message_body .="report type is inventory\n";
     

     if (isset($_POST['status']))
     {
        $status = $_POST['status'];
        $message_body .="status is ".$status."\n";
        $args .="status ".$status." ";
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
				  $args .="stat_change between ".$stat_start." ".$stat_end." ";
			  }
			  else
			  {
				 $message_body .="status change is ".$time_type." ".$stat_start."\n";
				 $args .="stat_change ".$time_type." ".$stat_start." ";
			  }
		  }
		  else if ($_POST['stat_date_type'] == "relative")
		  {
			  $stat_start = $_POST['stat_start'];
		  
			  if ($time_type == "between") 	
			  {	
				  $stat_end = $_POST['stat_end'];
	
				  $message_body .="relative status change date is between ".$stat_start." to ".$stat_end."\n";
				  $args .="stat_change_relative between ".$stat_start." ".$stat_end." ";
			  }
			  else
			  {
					$message_body .="relative status change is ".$time_type." ".$stat_start."\n";
					$args .="stat_change_relative ".$time_type." ".$stat_start." ";
			  }
		  }
		  
     }
     
     
     $deleted  = $_POST['deleted'];
     $message_body .="Deleted is ".$deleted."\n";
     $args .="".$deleted." ";
     
     if(isset($_POST['deleted_date_type']))
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
			
				  $message_body .="delete date  is between ".$del_start." to ".$del_end."\n";
				  $args .="delete_date  between ".$del_start." ".$del_end." ";
			  }
			  else
			  {
				 $message_body .="deleted date is ".$time_type." ".$del_start."\n";
				 $args .="delete_date ".$time_type." ".$del_start." ";
			  }
		  }
		  else if ($_POST['deleted_date_type'] == "relative")
		  {
			  $del_start = $_POST['deleted_start'];
		  
			  if ($time_type == "between") 	
			  {	
				  $del_end = $_POST['deleted_end'];
	
				  $message_body .="relative deleted date is between ".$del_start." to ".$del_end."\n";
				  $args .="delete_date_relative between ".$del_start." ".$del_end." ";
			  }
			  else
			  {
					$message_body .="relative deleted date is ".$time_type." ".$del_start."\n";
					$args .="delete_date_relative ".$time_type." ".$del_start." ";
			  }
		  }
		  
     }
  }
  
  if (isset($_POST['pub_before']))
  {
     $pub_date = $_POST['pub_before'];
     $message_body .="pubdate before is ".$pub_date."\n";
     $args .="pub_before ".$pub_date." ";
  }
  
  if (isset($_POST['pub_after']))
  {
     $pub_date = $_POST['pub_after'];
     $message_body .="pubdate after is ".$pub_date."\n";
     $args .="pub_after ".$pub_date." ";
  }
  
  if (isset($_POST['pub_between_start']) && isset($_POST['pub_between_end']))
  {
     $pub_date_start = $_POST['pub_between_start'];
     $pub_date_end= $_POST['pub_between_end'];
     $message_body .="pubdate between is ".$pub_date_start." and ".$pub_date_end."\n";
     $args .="pub_between ".$pub_date_start." ".$pub_date_end." ";
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
		     $args .="added between ".$active_start." ".$active_end." ";
		  }
		  else
		  {
		    $message_body .="added date is ".$time_type." ".$active_start."\n";
		    $args .="added ".$time_type." ".$active_start." ";
		  }
	  }
	  else if ($_POST['active_type'] == "relative")
	  {
		  $active_start = $_POST['active_start'];
		  
		  if ($time_type == "between") 	
        {	
   		  $active_end = $_POST['active_end'];
	
		     $message_body .="relative added date is between ".$active_start." to ".$active_end."\n";
		     $args .="added_relative between ".$active_start." ".$active_end." ";
		  }
		  else
		  {
		      $message_body .="added date is ".$time_type." ".$active_start."\n";
		      $args .="added_relative ".$time_type." ".$active_start." ";
		  }
	  }
  }
  
  if (isset($_POST['circ_mod'])) 
  {
     $circ_mod = $_POST['circ_mod'];
     $message_body .="circ_mod is ".$circ_mod."\n";
     $args .="circ_mod ".$circ_mod." ";
  }
  
  if (isset($_POST['prefix'])) 
  {
     $prefix = $_POST['prefix'];
     $message_body .="prefix is ".$prefix."\n";
     $args .="prefix ".$prefix." ";
  }
  
  if (isset($_POST['suffix'])) 
  {
     $suffix = $_POST['suffix'];
     $message_body .="suffix is ".$suffix."\n";
     $args .="suffix ".$suffix." ";
  }
  
  if (isset($_POST['coll_man'])) 
  {
     $call_class = $_POST['call_class'];
     $coll_man = $_POST['coll_man'];
     $message_body .="class is ".$call_class."\n";
     $message_body .="coll_man is ".$coll_man."\n";
     $args .="coll_topic ".$call_class." ".$coll_man." ";
  }
  else if (isset($_POST['start_call']) && isset($_POST['end_call']))
  { 
     $call_class = $_POST['call_class'];
     $start_call = str_replace(" ", "",$_POST['start_call']);
     $end_call = str_replace(" ","",$_POST['end_call']);
     $message_body .="class is ".$call_class."\n";
     $message_body .="start call is ".$start_call."\n";
     $message_body .="end call is ".$end_call."\n";
     $args .="call_range ".$call_class." ".$start_call." ".$end_call." ";
  }
  else if (isset($_POST['contains_call']) )
  {
     $call_class = str_replace(" ", "",$_POST['call_class']);
     $contain_call = str_replace(" ", "",$_POST['contains_call']);
     $message_body .="class is ".$call_class."\n";
     $message_body .="contain call is ".$contain_call."\n";
     $args .="call_contain ".$call_class." ".$contain_call." ";
  }
  else if (isset($_POST['bisac']) )
  {
     $call_class = str_replace(" ", "",$_POST['call_class']);
     $bisac = str_replace(" ", "",$_POST['bisac']);
     $message_body .="class is ".$call_class."\n";
     $message_body .="bisac is ".$bisac."\n";
     $args .="bisac ".$call_class." ".$bisac." ";
  }

  
  if (isset($_POST['filename'])) 
  {
     
     $filename = $_POST['filename'];
     $data_type = $_POST['data_type'];
     $file_type = $_POST['file_type'];
     
     //$message_body .=$data_type." is ".$filename."\n";
     
     $replace_chars = array("\\", "/", "%", ":", "'", "*", "?", ":", ";", "<", ">", "|", " ", "#", "$");
     $filename= str_replace($replace_chars, "_",$filename );
     
     if ($data_type == "bib") $command = "bib_file";
     else if ($data_type == "barcode") $command = "barcode_file";
     else if ($data_type == "isbn") $command = "isbn_file";
     
     $message_body .=$command." is ".$file_type." ".$filename."\n";
     $args .= $command." ".$file_type." ".$filename." ";
     
     if ($data_type == "bib") 
     {
        $electronic  = $_POST['electronic'];
        $message_body .="Electronic is ".$electronic."\n";
        $args .="".$electronic." ";
     }
  }
  
  if (isset($_POST['circ_count'])) 
  {
     $circ_count = $_POST['circ_count'];
     $compare = $_POST['circ_count_compare'];
     $compare_date = $_POST['circ_compare_date'];
     
     $message_body .="Circ Count ".$compare." than ".$circ_count." in ".$compare_date."\n";
     
     $args .="circ_count ".$compare." ".$circ_count." ";
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
		     $args .="circ_date between ".$circ_start." ".$circ_end." ";
		  }
		  else
		  {
		    $message_body .="circ date is ".$time_type." ".$circ_start."\n";
		    $args .="circ_date ".$time_type." ".$circ_start." ";
		  }
	  }
	  else if ($_POST['circ_date_type'] == "relative")
	  {
		  $circ_start = $_POST['circ_start'];
		  
		  if ($time_type == "between") 	
        {	
   		  $circ_end = $_POST['circ_end'];
	
		     $message_body .="relative circ date is between ".$circ_start." to ".$circ_end."\n";
		     $args .="circ_date_relative between ".$circ_start." ".$circ_end." ";
		  }
		  else
		  {
		      $message_body .="relative circ date is ".$time_type." ".$circ_start."\n";
		      $args .="circ_date_relative ".$time_type." ".$circ_start." ";
		  }
	  }
  }
  
  if (isset($_POST['stat_cat'])  && $_POST['stat_cat'] != -1)
  {
     $stat_cat =trim($_POST['stat_cat']);
     $stat_cat_entry =str_replace("(", "",trim($_POST['stat_cat_entry']));
     $stat_cat_entry =str_replace(")", "",$stat_cat_entry);
     $message_body .="stat_cat is ".$stat_cat."\n";
     $message_body .="stat_cat_entry is ".$stat_cat_entry."\n";
     
     $args .="stat_cat ".$stat_cat." ".$stat_cat_entry." ";
  }
  
  $address = $_POST['email'];
  $address = str_replace(" ", ",",$address);
  $addresses = explode(",", $address);
  foreach ($addresses as $curr)
  {
     $curr = trim($curr);
     if (strlen($curr) > 0)
     {
        $message_body .="email is ".$curr."\n";
        $args .="email ".$curr." ";
     }
  }
  
  if (isset($_POST['out_file']))
  {
     $out_file = $_POST['out_file'];
     $replace_chars = array("\\", "/", "%", ":", "'", "*", "?", ":", ";", "<", ">", "|", " ", "#", "$");
     $out_file= str_replace($replace_chars, "_",$out_file );
     $message_body .="out_file is ".$out_file."\n";
     $args .="out_file ".$out_file." ";
  }
  
  if(isset($_POST['report_name']))
  {
     $report_name = str_replace("'","''",$_POST['report_name']);
     
     $message_body .= "report name =".$report_name."\n\n";
     
     $args .="report_name \"".$report_name."\" ";
  }
  
  if (isset($_POST['only_holder']))
  {
     $only_opt = $_POST['only_holder'];
     $message_body .="Filter By Only Holder=". $only_opt ."\n";
     $args .= "only_holder ".$only_opt." ";
  }
  
  if (isset($_POST['scope']))
  {
     $message_body .="Scope Links\n";
     $args .="scope ";
  }
  
  if (isset($_POST['domain']))
  {
     $domain = $_POST['domain'];
     $message_body .="Use ".$domain ." Domain \n";
     $args .="domain ".$domain." ";
  }
  
  if (isset($_POST['search_links']))
  {
     $message_body .="Search Links\n";
     $args .="search_links ";
  }
  
  if (isset($_POST['spreadsheet'])) 
  {
     $args.="spreadsheet ";
     //look at order
     $order = $_POST['sheet_order'];
     $args .=$order." ";
     
     //look at format
     $format = $_POST['sheet_format'];
     $args .= $format." ";
     
     if (isset($_POST['sheet_options'])) $args .= $_POST['sheet_options'];
     
     if (isset($_POST['sheet_display'])) 
     {
        $display = str_replace("*", " ", $_POST['sheet_display'] );
        $args .= $display." ";
     }
     
     if (isset($_POST['circ_between_start']) && isset($_POST['circ_between_end']) ) 
     {
        $start = $_POST['circ_between_start']; 
        $end = $_POST['circ_between_end']; 
        
        $between_start = date('Y-m-d', strtotime("$start")); 
        $between_end = date('Y-m-d', strtotime("$end")); 
        
        $message_body .="circ_between is ".$between_start." to ".$between_end."\n";
        $args .="circ_between ".$between_start." ".$between_end." ";
        
     }
     
  }
  
  if (isset($_POST['html'])) 
  {
     $args.="html ";
     //look at order
     $order = $_POST['html_order'];
     $args .=$order." ";
     
     //look at format
     $layout = $_POST['html_layout'];
     $args .= $layout." ";
     if ($layout == "grid") $args .= $_POST['html_grid_width']." ";
     
     if (isset($_POST['html_group'])) $args .= "group_copy ".$_POST['html_group']." ";
     if (isset($_POST['html_word_press'])) $args .= "word_press ";
     
     if (isset($_POST['html_display'])) 
     {
        $display = str_replace("*", " ", $_POST['html_display'] );
        $args .= $display." ";
     }
     
     if(isset($_POST['image_size']))
     {
        $args .= "image_size ".$_POST['image_size']." ";
     }
     
  }
  
  if (isset($_POST['rss'])) 
  {
     $args.="rss ";
     
     //look at format
     $args .= "rss_desc \"".$_POST['rss_desc']."\" ";
     $args .= "rss_list \"".$_POST['rss_list']."\" ";
     
  }

	$today = date('m_d_Y');
	$log_file_name = "/var/www/tools/reports/list_log_".$today.".txt";
	$log_file_string = date('m-d-Y G:i:s');
	
	if ($working)$log_file_string .= "------TEST----- /usr/bin/php -f /var/www/tools/list_maker_working/create_list.php ".$args."\n\n";
	else if ($testing) $log_file_string .= "------TEST----- /usr/bin/php -f /var/www/tools/list_maker_test/create_list.php ".$args."\n\n";
	else $log_file_string .= "------ /usr/bin/php -f /var/www/tools/list_maker/create_list.php ".$args."\n\n"; 
 
	$message_body .="log file name = ".$log_file_name."\n";

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
	
	if ($working) $message_body .= "\n /usr/bin/php -f /var/www/tools/list_maker_working/create_list.php ".$args;
	else if ($testing) $message_body .= "\n /usr/bin/php -f /var/www/tools/list_maker_test/create_list.php ".$args;
	else $message_body .= "\n /usr/bin/php -f /var/www/tools/list_maker/create_list.php ".$args;

	$email = new PHPMailer();
	$email->From      = 'paterno@noblenet.org';
	$email->FromName  = 'List Report Generator';
	$email->Subject   = '*******New List*******';
	$email->Body      = $message_body;

	$email->AddAddress( 'paterno@noblenet.org');

	$email->Send(); 

   if ($working) $cmd = "/usr/bin/php -f /var/www/tools/list_maker_working/create_list.php ".$args;
	else if ($testing) $cmd = "/usr/bin/php -f /var/www/tools/list_maker_test/create_list.php ".$args;
	else $cmd = "/usr/bin/php -f /var/www/tools/list_maker/create_list.php  ".$args;
	
	if (!$working) exec($cmd . " > /dev/null &");   
    
?>
