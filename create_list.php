<?php 

  require_once('/var/www/shared/PHPMailer/class.phpmailer.php'); 
  include "/usr/local/noble/db_config/db_info.php";
  include "list_functions.php";
  include "CopyRec.php";
  include "CopyList.php";
  include "LibCopyList.php";
  include "BibRec.php";
  include "BibList.php";
  include "Filters.php";
  include "Output_Options.php";
  
  $filters = new Filters();
  $output = new Output_Options();
  
  //Run Filters->SQL to get records
  $eg_db = pg_connect("host=$dbro_host port=5432 dbname=$dbro_database user=$dbro_user password=$dbro_password");
  if (!$eg_db) 
  {
     die("Error in connection to circulation DB: " . pg_last_error());
  }
  
  $filters->SetDB($eg_db);
  
  //Create Filters from command line
  $filters->CreateFilters($argv);
  
  $domain =$filters->GetDomain();
  $scope = $filters->GetScope();
  
  //Create Filters from command line
  $output->CreateOutputOptions($argv);
  
  if ($filters->GetFilterByCircDate())
  {
     //make sure circs between is set in the output
     $output->SetCircsBetween($filters->GetCircAfter(), $filters->GetCircBefore());
  }

  $update_report_link = MakeUpdateReportLink($argv);

  //Create a new bib list
  $bib_list = new BibList();
  
  $bib_list->SetDB($eg_db);
  
  $bib_list->SetLibrary($filters->GetLibrary());
  
  $bib_list->SetGroupCopies($output->GetGroupCopies());
  
  $bib_list->SetOneBibOneCopy($output->GetUngroupCopies());
  
  if ($filters->GetFilterByCircDate())$bib_list->SetCircBetween();
  
  $result = pg_query($eg_db,$filters->CreateSQL());
  
  $count = 1;
            
  while($row = pg_fetch_row($result))
  {  
      if (!$filters->LookForPhysicalCopies())
      {
         break;
      }
     //Loop through results
     /*            0         reporter.materialized_simple_record.title //not used but needed for sorting 
                   1          asset.call_number.record,
                   2          asset.copy.cost,
                   3          asset.copy.active_date,
                   4          asset.copy.create_date,
                   5          asset.copy.age_protect, 
                   6          asset.copy.alert_message, 
                   7          asset.copy.barcode,
                   8          asset.copy.id, 
                   9          asset.call_number.label, 
                  10          asset.call_number.label_class,
                  11          asset.call_number.prefix, 
                  12          asset.call_number.suffix, 
                  13          asset.call_number.label_sortkey,
                  14          asset.copy.circ_modifier,
                  15          asset.copy.circ_lib,
                  16          asset.copy.location,
                  17          asset.copy.deleted,
                  18          asset.copy.edit_date,
                  19          asset.copy.deposit, 
                  20          asset.copy.fine_level, 
                  21          asset.copy.floating,
                  22          asset.copy.loan_duration, 
                  23          asset.call_number.owning_lib
                  24          asset.copy.price,
                  25          asset.copy.ref,
                  26          asset.copy.status,
                  27          asset.copy.status_changed_time,
                  28          reporter.materialized_simple_record.author,
                  29          reporter.materialized_simple_record.isbn, 
                  30          reporter.materialized_simple_record.issn, 
                  31          reporter.materialized_simple_record.publisher
                  32          asset.call_number.id  
     */
     
     
     //echo "/****************** COPY #".$count."********************/\n";
     
     $count++;
     
     $bib_id = $row[1];

     $curr_copy = new CopyRec();
     $curr_copy->SetDB($eg_db);
        
     $curr_copy->SetAcqCost($row[2]);
     $curr_copy->SetActiveDate($row[3], $row[4]);
     $curr_copy->SetAgeProtect($row[5]);
     $curr_copy->SetAlertMessage($row[6]);
     $curr_copy->SetBarcode($row[7]);
     $curr_copy->SetCopyId($row[8]);
     $curr_copy->SetCallNumber($row[9]);
     $curr_copy->SetCallClass($row[10]);
     $curr_copy->SetPrefix($row[11]);
     $curr_copy->SetSuffix($row[12]);
     $curr_copy->SetCallSortKey($row[13]);
     $curr_copy->SetCircMod($row[14]);
     $curr_copy->SetCircLib($row[15]);
     $curr_copy->SetCopyLocation($row[16]);
     $curr_copy->SetDeleted($row[17], $row[18]);
     $curr_copy->SetDeposit($row[19]);
     $curr_copy->SetFineLevel($row[20]);
     $curr_copy->SetFloating($row[21]);
     $curr_copy->SetLoanDuration($row[22]);
     $curr_copy->SetOwningLib($row[23]);
     $curr_copy->SetPrice($row[24]);
     $curr_copy->SetReference($row[25]);
     $curr_copy->SetStatus($row[26]);
     $curr_copy->SetStatusChange($row[27]);
     $curr_copy->SetCallNumberId($row[32]);
     
     $curr_copy->SetLifetimeCircs();//always get this data
     
     //Calculated from individual queiries - only do if care if need in output?
     if($output->GetDueDate()) $curr_copy->SetDueDate();
     if($output->GetInHouseUse()) $curr_copy->SetInHouseUse();
     if($output->GetLastCheckin() || $filters->GetUseShelfSitter()) $curr_copy->SetLastCheckin();
     if($output->GetLastCheckout()) $curr_copy->SetLastCheckout(); //do after checkin if that's chosen
     if($output->GetLastFYCirc()) $curr_copy->SetLastFyCirc();
     if($output->GetOnlyHolder() || $filters->GetOnlyHolder() || $output->GetOtherLibraryCount()) $curr_copy->SetOnlyHolder($bib_id);
     if($output->GetPart()) $curr_copy->SetPart();
     if($output->GetPublicNote()) $curr_copy->SetPublicNote();
     if($output->GetStaffNote()) $curr_copy->SetStaffNote();
     if($output->GetStatCats()) $curr_copy->SetStatCats();
     if($output->GetYTDCircs()) $curr_copy->SetYTDCirc();
     
     
     if ($filters->GetFilterByCircDate())
     {
        $curr_copy->SetCircsBetween($filters->GetCircAfter(), $filters->GetCircBefore());
     }
     else if($output->GetCircsBetween())
     {
        $curr_copy->SetCircsBetween($output->GetCircsBetweenStart(), $output->GetCircsBetweenEnd());
     }

     $curr_bib = new BibRec();
        
     $curr_bib->SetBibId($bib_id, $domain, $scope);
     $curr_bib->SetDB($eg_db);
        
     $curr_bib->SetISBN($row[29], $row[30]);
     $curr_bib->SetPublisher($row[31]);
     $curr_bib->SetAuthor(); //always get this
     $curr_bib->SetPubYear(); //always get this
     $curr_bib->SetTitle(); //always get this
     $curr_bib->SetGoodreadsLink();
     if($output->GetFingerprint())$curr_bib->SetFingerprint();
     //$curr_bib->SetNovelistLink();
     //$curr_bib->SetGoogleLink();
     
     if ($filters->GetSearchLinks()) $curr_bib->SetSearchLink($domain, $scope);
       
     //Calculated from individual queiries - only do if care if need in output?   
     if($output->GetOCLCNumber()) $curr_bib->SetOCLCNumber();
     if($output->GetSummary()) $curr_bib->SetSummary();  
     if($output->GetHolds()) 
     {
        $curr_bib->SetHolds($curr_copy->GetCircLibId());
        $curr_copy->SetHolds();
     }
        
     //execute filters that can't be done in the filter SQL
     if ($filters->ExcludeRecByAddedDate($curr_copy->GetActiveDate()) )
     {
        continue;
     }
     
     if ( $filters->ExcludeRecByPubDate($curr_bib->GetPubYear()) )
     {
        continue;
     }
     
     if ( $filters->ExcludeRecByStatCats($curr_copy->GetCopyId()))
     {
        continue;
     }
     
     if ( $filters->ExcludeRecByCheckinDate($curr_copy->GetLastCheckin(), $curr_copy->GetActiveDate()) )
     {
        continue; 
     }
     
     if ($filters->GetFilterByCircCount())
     {
        //if dates not set then use lifetime circ caount
        if ($filters->GetFilterByCircDate())
        {
           if ($filters->ExcludeRecByCircCount($curr_copy->GetCircsBetween())) continue;
        }
        else 
        {
           if ($filters->ExcludeRecByCircCount($curr_copy->GetLifetimeCircs())) continue;
        }
     }
     
     if ( $filters->ExcludeRecByOnlyHolder($curr_copy->GetOnlyHolder()) )
     {
        continue;
     }
     
     //send the bib and copy to Bib list to add where it needs to go in the stored lists
     $bib_list->AddItem($curr_bib, $curr_copy);
  }
  
  //NOw get any Online Records
  if ($filters->LookForOnlineRecords())
  {
     $result = pg_query($eg_db,$filters->CreateOnlineSQL());
       
     while($row = pg_fetch_row($result))
     {   
        /*  0 = reporter.materialized_simple_record.title,  
				1 = reporter.materialized_simple_record.author,
				2 = reporter.materialized_simple_record.isbn, 
				3 = reporter.materialized_simple_record.issn, 
				4 = reporter.materialized_simple_record.publisher, 
				5 = asset.call_number.record 
				6 = asset.uri.href
				7 = asset.uri.label             
				8 = actor.org_unit.shortname   */
				
		
	     $bib_id = $row[5];
	     $curr_bib = new BibRec();
        
        $curr_bib->SetOnline();
        $curr_bib->SetBibId($bib_id, $domain, $scope);
        $curr_bib->SetDB($eg_db);
        
        $curr_bib->SetAuthor();
        $curr_bib->SetISBN($row[2], $row[3]);
        $curr_bib->SetPublisher($row[4]);
        $curr_bib->SetOnlineSubU($row[6]);
        $curr_bib->SetOnlineSubY($row[7]);
        $curr_bib->SetOnlineSub9($row[8]);
        $curr_bib->SetPubYear(); //always get this
        $curr_bib->SetTitle(); //always get this 
        $curr_bib->SetAuthor(); //always get this
        $curr_bib->SetGoodreadsLink();
        //$curr_bib->SetNovelistLink();
        //$curr_bib->SetGoogleLink();
        
        if ($filters->GetSearchLinks()) $curr_bib->SetSearchLink($domain, $scope);
       
        //Calculated from individual queiries - only do if care if need in output?   
        if($output->GetOCLCNumber()) $curr_bib->SetOCLCNumber();
        if($output->GetSummary()) $curr_bib->SetSummary();  
        
        if ( $filters->ExcludeRecByPubDate($curr_bib->GetPubYear()) )
        {
           continue;
        }
        else
        {
           //send the bib and copy to Bib list to add where it needs to go in the stored lists
           $bib_list->AddOnlineItem($curr_bib);
        }
     }//end while
  }//end online
  
 // var_dump($bib_list->one_bib_one_copy_recs);
  
  //check size of bib list. If too big return.
  $count = $bib_list->GetNumCopies();
  $bib_count = $bib_list->GetNumBibs();
  $online_bib_count = $bib_list->GetNumOnlineBibs();
  $online_link_count = $bib_list->GetNumOnlineLinks();
  
  echo "Num Copies = ".$count."\n";
  
  if($output->GetCollection())
  {
     $output->WriteCollectionOutputFiles($bib_list, $filters->GetLibrary(), $filters->GetSystemName(), $filters->GetFilterByCollection(""), $count);
  }
  else
  {
	  if ($count > 50000 || $online_bib_count > 50000)
	  {
		  $output->SendLargeReportEmail($count, $bib_count, $online_bib_count, $online_link_count, $filters->GetTypeForEmail(), $filters->GetTextForEmail(), $filters->GetScheduled(), $update_report_link);
	  }
	  else if ($count == 0 && $online_bib_count == 0)
	  {
			$output->SendEmptyReportEmail($filters->GetTypeForEmail(), $filters->GetTextForEmail(), $filters->GetScheduled(), $update_report_link);
	  }
	  else
	  {
		  echo "Writing out Files\n";
		  //Write out files
		  $output->WriteOutputFiles($bib_list, $filters->GetLibrary(), $filters->GetShowDeleted());
	
		  //Write email
		  $output->SendCompletedEmail($count, $bib_count, $online_bib_count, $online_link_count, $filters->GetTypeForEmail(), $filters->GetTextForEmail(), $filters->GetScheduled(), $update_report_link);
	  } 
  }

  
  ?>