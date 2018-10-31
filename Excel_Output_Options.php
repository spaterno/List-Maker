<?php

require_once '/var/www/shared/PHPExcel/Classes/PHPExcel.php';

class Excel_Output_Options
{
   public $acq_cost;
   public $active_date;
   public $alert_message;
   public $age_protection;
   public $amazon_direct;
   public $amazon_search;
   public $author;
   public $barcode;
   public $bib_id;
   public $call_number;
   public $call_number_class;
   public $call_number_prefix;
   public $call_number_suffix;
   public $call_sort_key;
   public $catalog_link;
      public $title_link;
   public $circ_modifier;
   public $circs_between;
      public $circ_start;
      public $circ_end;
   public $circ_lib; //branch
   public $copy_id;
   public $copy_location;
   public $copy_status;
   public $cover_image;
   public $create_date;
   public $deposit;
   public $due_date;
   public $fine_level;
   public $fingerprint;
   public $floating;
   public $goodreads;
   public $holds;
   public $in_house_use;
   public $isbn;
   public $last_checkin;
   public $last_checkout;
   public $last_fy_circ;
   public $lifetime_circ;
   public $loan_duration;
   public $marc_field;
   public $novelist;
   public $oclc_number;
   public $only_holder;
   public $other_library_count;
   public $owning_lib;
   public $part;
   public $price;
   public $pub_year;
   public $public_note;
   public $publisher;
   public $reference;
   public $staff_note;
   public $stat_cat;
   public $status_change;
   public $summary; //description
   public $title;
   public $ytd_circs;
   
   //File Format
   public $csv_format;
   public $excel_format;
     
   //sort order;
   public $author_sort;
   public $active_date_sort;
   public $call_number_sort;
   public $circ_between_sort;
   public $lifetime_circ_sort;
   public $ytd_circ_sort;
   public $title_sort;
     
   //Options
   public $include_summary;
   public $single_sheet;
   public $bib_sheet;
   public $use_bib_sheet_limit;
   public $bib_sheet_limit;
   
   public $output_filename;
     
   function __construct() 
   {
      $this->acq_cost = false;
      $this->active_date = false;
      $this->alert_message = false;
      $this->age_protection = false;
      $this->amazon_direct = false;
      $this->amazon_search = false;
      $this->author = false;
      $this->barcode = false;
      $this->bib_id = false;
      $this->call_number = false;
      $this->call_number_class = false;
      $this->call_number_prefix = false;
      $this->call_number_suffix = false;
      $this->call_sort_key = false;
      $this->catalog_link = false;
      $this->title_link = false;
      $this->circ_modifier = false;
      $this->circs_between = false;
      $this->circ_start = false;
      $this->circ_end = false;
      $this->circ_lib = false;
      $this->copy_id = false;
      $this->copy_location = false;
      $this->copy_status = false;
      $this->cover_image = false;
      $this->create_date = false;
      $this->deposit = false;
      $this->due_date = false;
      $this->fine_level = false;
      $this->floating = false;
      $this->goodreads = false;
      $this->holds = false;
      $this->in_house_use = false;
      $this->isbn = false;
      $this->last_checkin = false;
      $this->last_checkout = false;
      $this->last_fy_circ = false;
      $this->lifetime_circ = false;
      $this->marc_field = false;
      $this->novelist = false;
      $this->oclc_number = false;
      $this->only_holder = false;
      $this->other_library_count = false;
      $this->owning_lib = false;
      $this->part = false;
      $this->price = false;
      $this->pub_year = false;
      $this->public_note = false;
      $this->publisher = false;
      $this->reference = false;
      $this->staff_note = false;
      $this->stat_cat = false;
      $this->status_change = false;
      $this->summary = false;
      $this->title = false;
      $this->ytd_circs = false;
      
      $this->csv_format = false;
      $this->excel_format = false;
      
      $this->include_summary = false;
      $this->single_sheet = false;
      $this->bib_sheet = false;
      $this->use_bib_sheet_limit = false;
      $this->bib_sheet_limit = 0;
      
      $this->author_sort = false;
      $this->active_date_sort = false;
      $this->call_number_sort = false;
      $this->circ_between_sort = false;
      $this->lifetime_circ_sort = false;
      $this->ytd_circ_sort = false;
      $this->title_sort = false;
   }
   
   function SetAcqCost()
   {
      $this->acq_cost = true;
   }
   
   function GetAcqCost()
   {
      return $this->acq_cost;
   }
   
   function SetActiveDate()
   {
      $this->active_date = true;
   }
   
   function GetActiveDate()
   {
      return $this->active_date;
   }
   
   function SetAlertMessage()
   {
      $this->alert_message = true;
   }
   
   function GetAlertMessage()
   {
      return $this->alert_message;
   }
      
   function SetAgeProtection()
   {
      $this->age_protection = true;
   }
   
   function GetAgeProtection()
   {
      return $this->age_protection;
   }
   
   function SetAmazonDirect()
   {
      $this->amazon_direct = true;
   }
   
   function GetAmazonDirect()
   {
      return $this->amazon_direct;
   }
   
   function SetAmazonSearch()
   {
      $this->amazon_search = true;
   }
   
   function GetAmazonSearch()
   {
      return $this->amazon_search;
   }
   
   function SetAuthor()
   {
      $this->author = true;
   }
   
   function GetAuthor()
   {
      return $this->author;
   }   
   
   function SetBarcode()
   {
      $this->barcode = true;
   }
   
   function GetBarcode()
   {
      return $this->barcode;
   }
   
   function SetBibId()
   {
      $this->bib_id = true;
   }
   
   function GetBibId()
   {
      return $this->bib_id;
   }
   
   function SetCallNumber()
   {
      $this->call_number = true;
   }
   
   function GetCallNumber()
   {
      return $this->call_number;
   }
   
   function SetCallClass()
   {
      $this->call_number_class = true;
   }
   
   function GetCallClass()
   {
      return $this->call_number_class;
   }
   
   function SetCallPrefix()
   {
      $this->call_number_prefix = true;
   }
   
   function GetCallPrefix()
   {
      return $this->call_number_prefix;
   }
   
   function SetCallSuffix()
   {
      $this->call_number_suffix = true;
   }
   
   function GetCallSuffix()
   {
      return $this->call_number_suffix;
   }
   
   function SetCatalogLink()
   {
      $this->catalog_link = true;
   }
   
   function GetCatalogLink()
   {
      return $this->catalog_link;
   }
  
   function SetTitleCatalogLink()
   {
      $this->title_link = true;
   }
   
   function GetTitleCatalogLink()
   {
      return $this->title_link;
   }
   
    function SetCircModifier()
   {
      $this->circ_modifier = true;
   }
   
   function GetCircModifier()
   {
      return $this->circ_modifier;
   }
   
   function SetCircLib()
   {
      $this->circ_lib = true;
   }
   
   function ToggleShowCircLibl($val)
   {
      $this->circ_lib = $val;
   }
   
   function GetCircLib()
   {
      return $this->circ_lib;
   }
   
   function SetCircsBetween($start, $end)
   {
      $this->circs_between = true;
      $this->circ_start = $start;
      $this->circ_end = $end;
   }
   
   function GetCircsBetween()
   {
      return $this->circs_between;
   }
   
   function GetCircsBetweenStart()
   {
      return $this->circ_start;
   }
   
   function GetCircsBetweenEnd()
   {
      return $this->circ_end;
   }
   
   function SetCopyId()
   {
      $this->copy_id = true;
   }
   
   function GetCopyId()
   {
      return $this->copy_id;
   }
   
   function SetCopyLocation()
   {
      $this->copy_location = true;
   }
   
   function GetCopyLocation()
   {
      return $this->copy_location;
   }
   
   function SetCopyStatus()
   {
      $this->copy_status = true;
   }
   
   function GetCopyStatus()
   {
      return $this->copy_status;
   }
   
   function SetCoverImage()
   {
      $this->cover_image = true;
   }
   
   function GetCoverImage()
   {
      return $this->cover_image;
   }
   
   function GetCreateDate()
   {
      return $this->create_date;
   }
   
   function SetCreateDate()
   {
      $this->create_date = true;
   }
   
   function SetDeposit()
   {
      $this->deposit = true;
   }
   
   function GetDeposit()
   {
      return $this->deposit;
   }
   
   function SetDueDate()
   {
      $this->due_date = true;
   }
   
   function GetDueDate()
   {
      return $this->due_date;
   }
   
   function SetFineLevel()
   {
      $this->fine_level = true;
   }
   
   function GetFineLevel()
   {
      return $this->fine_level;
   }
   
   function SetFingerprint()
   {
      $this->fingerprint = true;
   }
   
   function GetFingerprint()
   {
      return $this->fingerprint;
   }
   
   function SetFloating()
   {
      $this->floating = true;
   }
   
   function GetFloating()
   {
      return $this->floating;
   }
   
   function SetGoodreads()
   {
      $this->goodreads = true;
   }
   
   function GetGoodreads()
   {
      return $this->goodreads;
   }
   
   function SetHolds()
   {
      $this->holds = true;
   }
   
   function GetHolds()
   {
      return $this->holds;
   }
   
   function SetInHouseUse()
   {
      $this->in_house_use = true;
   }
   
   function GetInHouseUse()
   {
      return $this->in_house_use;
   }
   
   function SetISBN()
   {
      $this->isbn = true;
   }
   
   function GetISBN()
   {
      return $this->isbn;
   }
   
   function SetLastCheckin()
   {
      $this->last_checkin = true;
   }
   
   function GetLastCheckin()
   {
      return $this->last_checkin;
   }
   
   function GetLastCheckout()
   {
      return $this->last_checkout;
   }
   
   function SetLastCheckout()
   {
      $this->last_checkout = true;
   }
   
   function SetLastFYCirc()
   {
      $this->last_fy_circ = true;
   }
   
   function GetLastFYCirc()
   {
      return $this->last_fy_circ;
   }
   
   function SetCallSortKey()
   {
      $this->call_sort_key = true;
   }
   
   function GetCallSortKey()
   {
      return $this->call_sort_key;
   }
   
   function SetLifetimeCirc()
   {
      $this->lifetime_circ = true;
   }
   
   function GetLifetimeCirc()
   {
      return $this->lifetime_circ;
   }
   
   function SetLoanDuration()
   {
      $this->loan_duration = true;
   }
   
   function GetLoanDuration()
   {
      return $this->loan_duration;
   }
   
   function SetNovelist()
   {
      $this->novelist = true;
   }
   
   function GetNovelist()
   {
      return $this->novelist;
   }
   
   function SetPublicNote()
   {
      $this->public_note = true;
   }
   
   function GetPublicNote()
   {
      return $this->public_note;
   }
   
   function SetStaffNote()
   {
      $this->staff_note = true;
   }
   
   function GetStaffNote()
   {
      return $this->staff_note;
   }
   
   function SetOCLCNumber()
   {
      $this->oclc_number = true;
   }
   
   function GetOCLCNumber()
   {
      return $this->oclc_number;
   }
   
   function SetOnlyHolder()
   {
      $this->only_holder = true;
   }
   
   function GetOnlyHolder()
   {
      return $this->only_holder;
   }
   
   function SetOtherLibraryCount()
   {
      $this->other_library_count = true;
   }
   
   function GetOtherLibraryCount()
   {
      return $this->other_library_count;
   }
   
   function SetOwningLib()
   {
      $this->owning_lib = true;
   }
   
   function GetOwningLib()
   {
      return $this->owning_lib;
   }
   
   function SetPart()
   {
      $this->part = true;
   }
   
   function GetPart()
   {
      return $this->part;
   }
   
   function SetPrice()
   {
      $this->price = true;
   }
    
   function GetPrice()
   {
      return $this->price;
   }
   
   function SetPubYear()
   {
      $this->pub_year = true;
   }
   
   function GetPubYear()
   {
      return $this->pub_year;
   }
   
   function SetPublisher()
   {
      $this->publisher = true;
   }
   
   function GetPublisher()
   {
      return $this->publisher;
   }
   
   function SetReference()
   {
      $this->reference = true;
   }
   
   function GetReference()
   {
      return $this->reference;
   }
   
   function SetStatCat()
   {
      $this->stat_cat = true;
   }
   
   function GetStatCat()
   {
      return $this->stat_cat;
   }
   
   function SetStatChange()
   {
      $this->status_change = true;
   }
   
   function GetStatChange()
   {
      return $this->status_change;
   }
   
   function SetSummary()
   {
      $this->summary = true;
   }
   
   function GetSummary()
   {
      return $this->summary;
   }
   
   function SetTitle()
   {
      $this->title = true;
   }
   
   function GetTitle()
   {
      return $this->title;
   }
   
   function SetYTDCircs()
   {
      $this->ytd_circs = true;
   }
   
   function GetYTDCircs()
   {
      return $this->ytd_circs;
   }
   
   function SetCSVFormat()
   {
      $this->csv_format = true;
   }
   
   function GetCSVFormat()
   {
      return $this->csv_format;
   }
   
   function SetExcelFormat()
   {
      $this->excel_format = true;
   }
   
   function GetExcelFormat()
   {
      return $this->excel_format;
   }
   
   function SetBibSheet()
   {
      $this->bib_sheet= true;
   }
   
   function GetBibSheet()
   {
      return $this->bib_sheet;
   }
   
   function SetBibSheetLimit($val)
   {
      $this->use_bib_sheet_limit = true;
      $this->bib_sheet_limit= $val;
      
      echo "use limit of ". $this->bib_sheet_limit;
   }
   
   function GetBibSheetLimit()
   {
      if ($this->use_bib_sheet_limit) return $this->bib_sheet_limit;
      else return false;
   }
   
   function SetSingleSheet()
   {
      $this->single_sheet = true;
   }
   
   function GetSingleSheet()
   {
      return $this->single_sheet;
   }
   
   function SetSummarySheet()
   {
      $this->include_summary= true;
   }
   
   function GetSummarySheet()
   {
      return $this->include_summary;
   }
   
   function SetAuthorSort()
   {
      $this->author_sort = true;
   }
   
   function GetAuthorSort()
   {
      return $this->author_sort;
   }
   
   function SetActiveDateSort()
   {
      $this->active_date_sort = true;
   }
   
   function GetActiveDateSort()
   {
      return $this->active_date_sort;
   }
   
   function SetCallNumSort()
   {
      $this->call_number_sort = true;
   }
   
   function GetCallNumSort()
   {
      return $this->call_number_sort;
   }
   
   function SetCircBetweenSort()
   {
      $this->circ_between_sort = true;
   }
   
   function GetCircBetweenSort()
   {
      return $this->circ_between_sort;
   }
   
   function SetLifetimeCircSort()
   {
      $this->lifetime_circ_sort = true;
   }
   
   function GetLifetimeCircSort()
   {
      return $this->lifetime_circ_sort;
   }
   
   function SetTitleSort()
   {
      $this->title_sort = true;
   }
   
   function GetTitleSort()
   {
      return $this->title_sort;
   }
   
   function SetYTDCircSort()
   {
      $this->ytd_circ_sort = true;
   }
   
   function GetYTDCircSort()
   {
      return $this->ytd_circ_sort;
   }
   
   function SortList($bib_list)
   {
      $arg = "single";
      
      if ($this->GetAuthorSort()) $bib_list->SortyByAuthor($arg);
      else if ($this->GetActiveDateSort()) $bib_list->SortByActiveDate($arg);
      else if ($this->GetCircBetweenSort()) $bib_list->SortByCircBetween($arg);
      else if ($this->GetCallNumSort()) $bib_list->SortByCallNum($arg);
      else if ($this->GetLifetimeCircSort()) $bib_list->SortByLifetimeCircs($arg);
      else if ($this->GetTitleSort()) $bib_list->SortByTitle($arg);
      else if ($this->GetYTDCircSort()) $bib_list->SortByYTDCircs($arg);
      
      if ($this->GetBibSheet())
      {
         $arg = "multiple";

         if ($this->GetAuthorSort()) $bib_list->SortyByAuthor($arg);
         else if ($this->GetActiveDateSort()) $bib_list->SortByActiveDate($arg);
         else if ($this->GetCircBetweenSort()) $bib_list->SortByCircBetween($arg);
         else if ($this->GetCallNumSort()) $bib_list->SortByCallNum($arg);
         else if ($this->GetLifetimeCircSort()) $bib_list->SortByLifetimeCircs($arg);
         else if ($this->GetTitleSort()) $bib_list->SortByTitle($arg);
         else if ($this->GetYTDCircSort()) $bib_list->SortByYTDCircs($arg);
      }
      
   }
   
   function WriteCSV($bib_list, $relative_file_name, $show_deleted)
   {
      
      //Write one sheet for each branch
      $this->output_filename = array();
               
      foreach ($bib_list->one_bib_one_copy_recs as $curr_lib)
      {
         $branch = $curr_lib->GetShortname();
         $max_stat = $curr_lib->GetMaxStatCat();
         $bibs = $curr_lib->bib_copy_list;
      
			$file_data = "";
			
			$write_filename = "/var/www/tools/reports/".$relative_file_name."_".$branch.".csv";
      
         $this->output_filename[] = "https://tools.noblenet.org/reports/".$relative_file_name."_".$branch.".csv";
      
         echo "Writing List Report  -- ".$write_filename."\n";
		
			// write header
			if ( $this->GetCopyLocation() )
			{
				$file_data .="\"Copy Location\",";
			}
			
			if ( $this->GetCallPrefix() )
			{
				$file_data .="\"Prefix\",";
			}
		
			if ( $this->GetCallNumber() )
			{
				$file_data .="\"Call Number\",";
			}
		 
			if ( $this->GetCallSuffix() )
			{
				$file_data .="\"Suffix\",";
			}
	
			if ( $this->GetPart() )
			{
				$file_data .="\"Part\",";
			}

			if ( $this->GetTitle() )
			{
				$file_data .="\"Title\",";
			}

			if ( $this->GetAuthor() )
			{
				$file_data .="\"Author\",";
			}
		
			if ( $this->GetBarcode() )
			{
				$file_data .="\"Barcode\",";
			}
		
			if ( $this->GetBibId() )
			{
				$file_data .="\"Bib Id\",";
			}
			
			if ( $this->GetLastCheckout() )
			{
				$file_data .="\"Last Checkout\",";
			}
		
			if ( $this->GetLastCheckin() )
			{
				$file_data .="\"Last Checkin\",";
			}
		
			if ( $this->GetLifetimeCirc() )
			{
				$file_data .="\"Lifetime Circs\",";
			}
		
			if ( $this->GetOnlyHolder() )
			{
				$file_data .="\"Only Holder\",";
			}
			
			if ( $this->GetOtherLibraryCount() )
			{
				$file_data .="\"Other Library Copy Count\",";
			}
		
			if ( $this->GetPubYear() )
			{
				$file_data .="\"Pub Year\",";
			}
		
			if ( $this->GetAcqCost() )
			{
				$file_data .="\"Acq Cost\",";	
			}
		
			if ( $this->GetActiveDate() )
			{
				$file_data .="\"Active Date\",";
			}
		
			if ( $this->GetAgeProtection() )
			{
				$file_data .="\"Age Protection\",";
				$file_data .="\"Age Protect Expire\",";
			}
		
			if ( $this->GetAlertMessage() )
			{
				$file_data .="\"Alert Message\",";
			}
		
			if ( $this->GetAmazonDirect() )
			{
				$file_data .="\"Amazon Direct\",";
			}
		
			if ( $this->GetAmazonSearch() )
			{
				$file_data .="\"Amazon Search\",";
			}
		
			if ( $this->GetCallClass() )
			{
				$file_data .="\"Call Class\",";
			}
		
			if ( $this->GetCallSortKey() )
			{
				$file_data .="\"Call Sort Key\",";
			}
		
			if ( $this->GetCatalogLink() )
			{
				$file_data .="\"Catalog Link\",";
			}
			
			if ( $this->GetCircModifier() )
			{
				$file_data .="\"Circ Modifier\",";
			}
		
			if ( $this->GetCircLib() )
			{
				$file_data .="\"Circ Lib\",";
			}
		
			if ( $this->GetCircsBetween() )
			{
				$file_data .="\"Circs ".$this->circ_start." to ".$this->circ_end."\",";
			}
		
			if ( $this->GetCopyId() )
			{
				$file_data .="\"Copy ID\",";
			}
		
			if ( $this->GetCopyStatus() )
			{
				$file_data .="\"Copy Status\",";
			}
		
			if ( $this->GetStatChange() )
			{
				$file_data .="\"Last Status Change\",";
			}
			
			if ( $this->GetCoverImage() )
			{
				$file_data .="\"Cover Image\",";
			}
			
			if ( $this->GetCreateDate() )
			{
				$file_data .="\"Create Date\",";
			}
		
			if ($show_deleted)
			{
				$file_data .="\"Deleted\",";
				$file_data .="\"Date Deleted\",";
			}
		
			if ( $this->GetDeposit() )
			{
				$file_data .="\"Deposit\",";
			}
		
			if ( $this->GetDueDate() )
			{
				$file_data .="\"Due Date\",";
			}
		
			if ( $this->GetFineLevel() )
			{
				$file_data .="\"Fine Level\",";
			}
			
			if ( $this->GetFingerprint() )
			{
				$file_data .="\"Fingerprint\",";
			}
		
			if ( $this->GetFloating() )
			{
				$file_data .="\"Floating\",";
			}
			
			if ( $this->GetGoodreads() )
			{
				$file_data .="\"Goodreads Link\",";
			}
			
			if ( $this->GetHolds() )
			{
				$file_data .="\"Holds - My Lib\",";
				$file_data .="\"Holds - Other Libs\",";
			}
		
			if ( $this->GetInHouseUse() )
			{
			  $file_data .="\"In House Count\",";
			  $file_data .="\"Last In House Use\",";
			}
		
			if ( $this->GetISBN() )
			{
				$file_data .="\"ISBN\",";
			}
		
			if ( $this->GetLastFYCirc() )
			{
				$file_data .="\"Last FY Circ\",";
			}
		
			if ( $this->GetLoanDuration() )
			{
				$file_data .="\"Loan Duration\",";
			}
			
			if ( $this->GetNovelist() )
			{
				$file_data .="\"Novelist Link\",";
			}
	  
			if ( $this->GetOCLCNumber() )
			{
				$file_data .="\"OCLC Number\",";
			}
		
			if ( $this->GetOwningLib() )
			{
				$file_data .="\"Owning Lib\",";
			}
		
			if ( $this->GetPrice() )
			{
				$file_data .="\"Price\",";
			}
			
			if ( $this->GetPublicNote() )
			{
				$file_data .="\"Public Note\",";
			}
		
			if ( $this->GetPublisher() )
			{
				$file_data .="\"Publisher\",";
			}
		
			if ( $this->GetReference() )
			{
				$file_data .="\"Reference\",";
			}
			
			if ( $this->GetStaffNote() )
			{
				$file_data .="\"Staff Note\",";
			}
		
			if ( $this->GetSummary() )
			{
				$file_data .="\"Summary\",";
			}
		
			if ( $this->GetYTDCircs() )
			{
				$file_data .="\"YTD CIrcs\",";
			}
		
			if ( $this->GetStatCat() )
			{
				for ($i = 0; $i < $max_stat; $i++)
				{
					$file_data .="\"Stat Cat\",";
				}
			}
		
			//remove last comma and add a new line
			$file_data = rtrim($file_data,',');
			$file_data .="\n";
			
         if( count($bibs) > 0 )
         {
            foreach($bibs as $curr_bib)
            {
               $curr_copy =  $curr_bib->GetCopyRec();
               
               if ( $this->GetCopyLocation() )
					{
                  $file_data .="\"".$curr_copy->GetCopyLocation()."\",";
					}
               
               if ( $this->GetCallPrefix() )
               {
                  $file_data .="\"".$curr_copy->GetPrefix()."\",";
               }
			
					if ( $this->GetCallNumber() )
					{
                  $file_data .="\"".$curr_copy->GetCallNumber()."\",";
					}
			 
					if ( $this->GetCallSuffix() )
					{
                  $file_data .="\"".$curr_copy->GetSuffix()."\",";
					}
		
					if ( $this->GetPart() )
					{
                  $file_data .="\"".$curr_copy->GetPart()."\",";
					}
	
					if ( $this->GetTitle() )
					{
                  $file_data .="\"".str_replace('"', '""', $curr_bib->GetTitle())."\",";
					}
	
					if ( $this->GetAuthor() )
					{
                  $file_data .="\"".$curr_bib->GetAuthor()."\",";
					}
			
					if ( $this->GetBarcode() )
					{
                  $file_data .="\"".$curr_copy->GetBarcode()."\",";
					}
			
					if ( $this->GetBibId() )
					{
                  $file_data .="\"".$curr_bib->GetBibId()."\",";
					}
					
					if ( $this->GetLastCheckout() )
					{
                  $file_data .="\"".$curr_copy->GetLastCheckout()."\",";
					}
			
					if ( $this->GetLastCheckin() )
					{
                  $file_data .="\"".$curr_copy->GetLastCheckin()."\",";
					}
			
					if ( $this->GetLifetimeCirc() )
					{
                  $file_data .="\"".$curr_copy->GetLifetimeCircs()."\",";
					}
			
					if ( $this->GetOnlyHolder() )
					{	
                  $file_data .="\"".$curr_copy->GetOnlyHolder()."\",";
					}
					
					if ( $this->GetOtherLibraryCount() )
					{	
                  $file_data .="\"".$curr_copy->GetOtherLibraryCount()."\",";
					}
			
					if ( $this->GetPubYear() )
					{
                  $file_data .="\"".$curr_bib->GetPubYearForDisplay()."\",";
					}
			
					if ( $this->GetAcqCost() )
					{
                  $file_data .="\"".$curr_copy->GetAcqCost()."\",";
					}
			
					if ( $this->GetActiveDate() )
					{
                  $file_data .="\"".$curr_copy->GetActiveDate()."\",";
					}
			
					if ( $this->GetAgeProtection() )
					{
                  $file_data .="\"".$curr_copy->GetAgeProtect()."\",";
                  $file_data .="\"".$curr_copy->GetAgeProtectExpire()."\",";
					}
			
					if ( $this->GetAlertMessage() )
					{
                  $file_data .="\"".$curr_copy->GetAlertMessage()."\",";
					}
			
					if ( $this->GetAmazonDirect() )
					{
					   $file_data .="\"".$curr_bib->GetAmazonDirect()."\",";
			      }
			
					if ( $this->GetAmazonSearch() )
					{
					   $file_data .="\"".$curr_bib->GetAmazonSearch()."\",";
					}
			
					if ( $this->GetCallClass() )
					{
                  $file_data .="\"".$curr_copy->GetCallClass()."\",";
					}
					
					if ( $this->GetCallSortKey() )
					{
                  $file_data .="\"".$curr_copy->GetCallSortKey()."\",";
					}
			
					if ( $this->GetCatalogLink() )
					{
						$file_data .="\"".$curr_bib->GetCatalogLink()."\","; 
					}
			
					if ( $this->GetCircModifier() )
					{
                  $file_data .="\"".$curr_copy->GetCircMod()."\",";
					}
			
					if ( $this->GetCircLib() )
					{
                  $file_data .="\"".$curr_copy->GetCircLibShortname()."\",";
					}
			
					if ( $this->GetCircsBetween() )
					{
                  $file_data .="\"".$curr_copy->GetCircsBetween()."\",";
					}
			
					if ( $this->GetCopyId() )
					{
                  $file_data .="\"".$curr_copy->GetCopyId()."\",";
					}
			
					if ( $this->GetCopyStatus() )
					{
                  $file_data .="\"".$curr_copy->GetStatus()."\",";
					}
					
					if ( $this->GetStatChange() )
               {
                  $file_data .="\"".$curr_copy->GetStatusChange()."\",";
					}
					
					if ( $this->GetCoverImage() )
					{
                  $file_data .="\"".$curr_bib->GetCoverImage()."\",";
					}
					
					if ( $this->GetCreateDate() )
					{
                  $file_data .="\"".$curr_copy->GetCreateDate()."\",";
					}
					
					if ( $show_deleted )
					{
						if ($curr_copy->GetIsDeleted())
						{
						   $file_data .="\""."TRUE"."\",";  
                     $file_data .="\"".$curr_copy->GetDeletedDate()."\",";   
						}
						else
						{
                     $file_data .="\"\",";
                     $file_data .="\"\","; 
                  }
					}
			
					if ( $this->GetDeposit() )
					{
                  $file_data .="\"".$curr_copy->GetDeposit()."\",";
					}
			
					if ( $this->GetDueDate() )
					{
                  $file_data .="\"".$curr_copy->GetDueDate()."\",";
					}
			
					if ( $this->GetFineLevel() )
					{
                  $file_data .="\"".$curr_copy->GetFineLevel()."\",";
					}
					
					if ( $this->GetFingerprint() )
					{
                  $file_data .="\"".$curr_copy->GetFingerprint()."\",";
					}
			
					if ( $this->GetFloating() )
					{
                  $file_data .="\"".$curr_copy->GetFloating()."\",";
					}
					
					if ( $this->GetGoodreads() )
			      {
                  $file_data .="\"".$curr_bib->GetGoodreadsLink()."\",";
					}
					
					if ( $this->GetHolds() )
			      {
			         $my_holds = $curr_bib->GetMyHolds()+$curr_copy->GetMyHolds();
			         $other_holds = $curr_bib->GetOtherHolds()+$curr_copy->GetOtherHolds();

                  $file_data .="\"".$my_holds."\",";
                  $file_data .="\"".$other_holds."\",";
					}
			
					if ( $this->GetInHouseUse() )
					{
					   $file_data .="\"".$curr_copy->GetInHouseUse()."\",";
					   $file_data .="\"".$curr_copy->GetLastInHouseUse()."\",";
					}
			
					if ( $this->GetISBN() )
					{
                  $file_data .="\"".$curr_bib->GetISBN(",  ")."\",";
					}
			
					if ( $this->GetLastFYCirc() )
					{
                  $file_data .="\"".$curr_copy->GetLastFYCirc()."\",";
					}
			
					if ( $this->GetLoanDuration() )
					{
                  $file_data .="\"".$curr_copy->GetLoanDuration()."\",";
					}
					
					if ( $this->GetNovelist() )
					{
                  $file_data .="\"".$curr_bib->GetNovelistLink()."\",";
					}
		  
					if ( $this->GetOCLCNumber() )
					{
                  $file_data .="\"".$curr_bib->GetOCLCNumber()."\",";
					}
			
					if ( $this->GetOwningLib() )
					{
                  $file_data .="\"".$curr_copy->GetOwningLibShortname()."\",";
					}
			
					if ( $this->GetPrice() )
					{
                  $file_data .="\"".$curr_copy->GetPrice()."\",";
					}
					
					if ( $this->GetPublicNote() )
					{
                  $file_data .="\"".$curr_copy->GetPublicNote(',')."\",";
					}
			
					if ( $this->GetPublisher() )
					{
                  $file_data .="\"".$curr_bib->GetPublisher()."\",";
					}
			
					if ( $this->GetReference() )
					{
                  $file_data .="\"".$curr_copy->GetReference()."\",";
					}
					
					if ( $this->GetStaffNote() )
					{
                  $file_data .="\"".$curr_copy->GetStaffNote(',')."\",";
					}
			
					if ( $this->GetSummary() )
					{
                  $file_data .="\"".str_replace('"', '""', $curr_bib->GetSummary())."\",";
					}
			
					if ( $this->GetYTDCircs() )
					{
                  $file_data .="\"".$curr_copy->GetYTDCirc()."\",";
					}
			
					if ( $this->GetStatCat() )
					{
					   $stats = $curr_copy->GetStatCatArray();
						foreach ($stats as $stat_cat)
						{
                     $file_data .="\"".$stat_cat."\",";   
						}
					}
					
					$file_data = rtrim($file_data,',');
			      $file_data .="\n";
            }
         }
         
         //write out the sheet
         file_put_contents($write_filename, $file_data);
         //add to list of sheets
      
      } //end for each library
      
      if ($bib_list->HasOnlineRecs())
      {
			$file_data = "";
			
			$write_filename = "/var/www/tools/reports/".$relative_file_name."_online.csv";
      
         $this->output_filename[] = "https://tools.noblenet.org/reports/".$relative_file_name."_online.csv";
      
         echo "Writing Online List Report  -- ".$write_filename."\n";
         
         if ( $this->GetTitle() )
			{
				$file_data .="\"Title\",";
			}

			if ( $this->GetAuthor() )
			{
				$file_data .="\"Author\",";
			}
			
			if ( $this->GetBibId() )
			{
				$file_data .="\"Bib Id\",";
			}
			
			if ( $this->GetPubYear() )
			{
				$file_data .="\"Pub Year\",";
			}
			
			if ( $this->GetAmazonDirect() )
			{
				$file_data .="\"Amazon Direct\",";
			}
		
			if ( $this->GetAmazonSearch() )
			{
				$file_data .="\"Amazon Search\",";
			}
			
			if ( $this->GetCatalogLink() )
			{
				$file_data .="\"Catalog Link\",";
			}
			
			if ( $this->GetCoverImage() )
			{
				$file_data .="\"Cover Image\",";
			}
			
			if ( $this->GetGoodreads() )
			{
				$file_data .="\"Goodreads Link\",";
			}
			
			if ( $this->GetISBN() )
			{
				$file_data .="\"ISBN\",";
			}
			
			if ( $this->GetNovelist() )
			{
				$file_data .="\"Novelist Link\",";
			}
	  
			if ( $this->GetOCLCNumber() )
			{
				$file_data .="\"OCLC Number\",";
			}
			
			if ( $this->GetPublisher() )
			{
				$file_data .="\"Publisher\",";
			}
			
			if ( $this->GetSummary() )
			{
				$file_data .="\"Summary\",";
			}
			
			//remove last comma and add a new line
			$file_data = rtrim($file_data,',');
			$file_data .="\n";
			
			foreach($bib_list->online_recs as $curr_bib)
			{
			   if ( $this->GetTitle() )
				{
					$file_data .="\"".str_replace('"', '""', $curr_bib->GetTitle())."\",";
				}

				if ( $this->GetAuthor() )
				{
					$file_data .="\"".$curr_bib->GetAuthor()."\",";
				}
				
				if ( $this->GetBibId() )
				{
					$file_data .="\"".$curr_bib->GetBibId()."\",";
				}
				
				if ( $this->GetPubYear() )
				{
					$file_data .="\"".$curr_bib->GetPubYearForDisplay()."\",";
				}
					
				if ( $this->GetAmazonDirect() )
				{
					$file_data .="\"".$curr_bib->GetAmazonDirect()."\",";
				}
		
				if ( $this->GetAmazonSearch() )
				{
					$file_data .="\"".$curr_bib->GetAmazonSearch()."\",";
				}
				
				if ( $this->GetCatalogLink() )
				{
					$file_data .="\"".$curr_bib->GetCatalogLink()."\","; 
				}
				
				if ( $this->GetCoverImage() )
				{
					$file_data .="\"".$curr_bib->GetCoverImage()."\",";
				}
				
				if ( $this->GetGoodreads() )
				{
					$file_data .="\"".$curr_bib->GetGoodreadsLink()."\",";
				}
				
				if ( $this->GetISBN() )
				{
					$file_data .="\"".$curr_bib->GetISBN(",  ")."\",";
				}	
				
				if ( $this->GetNovelist() )
				{
					$file_data .="\"".$curr_bib->GetNovelistLink()."\",";
				}
				
				if ( $this->GetOCLCNumber() )
				{
					$file_data .="\"".$curr_bib->GetOCLCNumber()."\",";
				}
				
				if ( $this->GetPublisher() )
				{
					$file_data .="\"".$curr_bib->GetPublisher()."\",";
				}
				
				if ( $this->GetSummary() )
				{
					$file_data .="\"".str_replace('"', '""', $curr_bib->GetSummary())."\",";
				}
				
				$file_data = rtrim($file_data,',');
			   $file_data .="\n";
				
			}//end foreach online rec
			
			file_put_contents($write_filename, $file_data);
		
      }//end if online
      
   }
   
   function WriteSingleCSV($bib_list, $relative_file_name, $show_deleted)
   {

      $file_data = "";
			
		$write_filename = "/var/www/tools/reports/".$relative_file_name.".csv";
      
      $this->output_filename = "https://tools.noblenet.org/reports/".$relative_file_name.".csv";
      
      echo "Writing List Report  -- ".$write_filename."\n";
      
		// write header
		if ( $this->GetCopyLocation() )
		{
			$file_data .="\"Copy Location\",";
		}
		
		if ( $this->GetCallPrefix() )
		{
			$file_data .="\"Prefix\",";
		}
	
		if ( $this->GetCallNumber() )
		{
			$file_data .="\"Call Number\",";
		}
	 
		if ( $this->GetCallSuffix() )
		{
			$file_data .="\"Suffix\",";
		}

		if ( $this->GetPart() )
		{
			$file_data .="\"Part\",";
		}

		if ( $this->GetTitle() )
		{
			$file_data .="\"Title\",";
		}

		if ( $this->GetAuthor() )
		{
			$file_data .="\"Author\",";
		}
	
		if ( $this->GetBarcode() )
		{
			$file_data .="\"Barcode\",";
		}
	
		if ( $this->GetBibId() )
		{
			$file_data .="\"Bib Id\",";
		}
		
		if ( $this->GetLastCheckout() )
		{
			$file_data .="\"Last Checkout\",";
		}
	
		if ( $this->GetLastCheckin() )
		{
			$file_data .="\"Last Checkin\",";
		}
	
		if ( $this->GetLifetimeCirc() )
		{
			$file_data .="\"Lifetime Circs\",";
		}
	
		if ( $this->GetOnlyHolder() )
		{
			$file_data .="\"Only Holder\",";
		}
		
		if ( $this->GetOtherLibraryCount() )
		{
			$file_data .="\"Other Library Copy Count\",";
		}
	
		if ( $this->GetPubYear() )
		{
			$file_data .="\"Pub Year\",";
		}
	
		if ( $this->GetAcqCost() )
		{
			$file_data .="\"Acq Cost\",";	
		}
	
		if ( $this->GetActiveDate() )
		{
			$file_data .="\"Active Date\",";
		}
	
		if ( $this->GetAgeProtection() )
		{
			$file_data .="\"Age Protection\",";
			$file_data .="\"Age Protect Expire\",";
		}
	
		if ( $this->GetAlertMessage() )
		{
			$file_data .="\"Alert Message\",";
		}
	
		if ( $this->GetAmazonDirect() )
		{
			$file_data .="\"Amazon Direct\",";
		}
	
		if ( $this->GetAmazonSearch() )
		{
			$file_data .="\"Amazon Search\",";
		}
	
		if ( $this->GetCallClass() )
		{
			$file_data .="\"Call Class\",";
		}
	
		if ( $this->GetCallSortKey() )
		{
			$file_data .="\"Call Sort Key\",";
		}
	
		if ( $this->GetCatalogLink() )
		{
			$file_data .="\"Catalog Link\",";
		}
		
		if ( $this->GetCircModifier() )
		{
			$file_data .="\"Circ Modifier\",";
		}
	
		if ( $this->GetCircLib() )
		{
			$file_data .="\"Circ Lib\",";
		}
	
		if ( $this->GetCircsBetween() )
		{
			$file_data .="\"Circs ".$this->circ_start." to ".$this->circ_end."\",";
		}
	
		if ( $this->GetCopyId() )
		{
			$file_data .="\"Copy ID\",";
		}
	
		if ( $this->GetCopyStatus() )
		{
			$file_data .="\"Copy Status\",";
		}
	
		if ( $this->GetStatChange() )
		{
			$file_data .="\"Last Status Change\",";
		}
		
		if ( $this->GetCoverImage() )
		{
			$file_data .="\"Cover Image\",";
		}
		
		if ( $this->GetCreateDate() )
		{
			$file_data .="\"Create Date\",";
		}
	
		if ($show_deleted)
		{
			$file_data .="\"Deleted\",";
			$file_data .="\"Date Deleted\",";
		}
	
		if ( $this->GetDeposit() )
		{
			$file_data .="\"Deposit\",";
		}
	
		if ( $this->GetDueDate() )
		{
			$file_data .="\"Due Date\",";
		}
	
		if ( $this->GetFingerprint() )
		{
			$file_data .="\"Fingerprint\",";
		}
	
		if ( $this->GetFloating() )
		{
			$file_data .="\"Floating\",";
		}
		
		if ( $this->GetGoodreads() )
		{
			$file_data .="\"Goodreads Link\",";
		}
		
		if ( $this->GetHolds() )
		{
			$file_data .="\"Holds - Circ Lib\",";
		   $file_data .="\"Holds - Other Libs\",";
		}
	
		if ( $this->GetInHouseUse() )
		{
		  $file_data .="\"In House Count\",";
		  $file_data .="\"Last In House Use\",";
		}
	
		if ( $this->GetISBN() )
		{
			$file_data .="\"ISBN\",";
		}
	
		if ( $this->GetLastFYCirc() )
		{
			$file_data .="\"Last FY Circ\",";
		}
	
		if ( $this->GetLoanDuration() )
		{
			$file_data .="\"Loan Duration\",";
		}
		
		if ( $this->GetNovelist() )
		{
			$file_data .="\"Novelist Link\",";
		}
  
		if ( $this->GetOCLCNumber() )
		{
			$file_data .="\"OCLC Number\",";
		}
	
		if ( $this->GetOwningLib() )
		{
			$file_data .="\"Owning Lib\",";
		}
	
		if ( $this->GetPrice() )
		{
			$file_data .="\"Price\",";
		}
		
		if ( $this->GetPublicNote() )
		{
			$file_data .="\"Public Note\",";
		}
	
		if ( $this->GetPublisher() )
		{
			$file_data .="\"Publisher\",";
		}
	
		if ( $this->GetReference() )
		{
			$file_data .="\"Reference\",";
		}
		
		if ( $this->GetStaffNote() )
		{
			$file_data .="\"Staff Note\",";
		}
	
		if ( $this->GetSummary() )
		{
			$file_data .="\"Summary\",";
		}
	
		if ( $this->GetYTDCircs() )
		{
			$file_data .="\"YTD CIrcs\",";
		}
	
		if ( $this->GetStatCat() )
		{
			for ($i = 0; $i < $bib_list->GetMaxStatCat(); $i++)
			{
				$file_data .="\"Stat Cat\",";
			}
		}
	
		//remove last comma and add a new line
		$file_data = rtrim($file_data,',');
		$file_data .="\n";
		
               
      foreach ($bib_list->one_bib_one_copy_recs as $curr_lib)
      {

         $bibs = $curr_lib->bib_copy_list;
			
         if( count($bibs) > 0 )
         {
            foreach($bibs as $curr_bib)
            {
               $curr_copy =  $curr_bib->GetCopyRec();
               
               if ( $this->GetCopyLocation() )
					{
                  $file_data .="\"".$curr_copy->GetCopyLocation()."\",";
					}
               
               if ( $this->GetCallPrefix() )
               {
                  $file_data .="\"".$curr_copy->GetPrefix()."\",";
               }
			
					if ( $this->GetCallNumber() )
					{
                  $file_data .="\"".$curr_copy->GetCallNumber()."\",";
					}
			 
					if ( $this->GetCallSuffix() )
					{
                  $file_data .="\"".$curr_copy->GetSuffix()."\",";
					}
		
					if ( $this->GetPart() )
					{
                  $file_data .="\"".$curr_copy->GetPart()."\",";
					}
	
					if ( $this->GetTitle() )
					{
                  $file_data .="\"".str_replace('"', '""', $curr_bib->GetTitle())."\",";
					}
	
					if ( $this->GetAuthor() )
					{
                  $file_data .="\"".$curr_bib->GetAuthor()."\",";
					}
			
					if ( $this->GetBarcode() )
					{
                  $file_data .="\"".$curr_copy->GetBarcode()."\",";
					}
			
					if ( $this->GetBibId() )
					{
                  $file_data .="\"".$curr_bib->GetBibId()."\",";
					}
					
					if ( $this->GetLastCheckout() )
					{
                  $file_data .="\"".$curr_copy->GetLastCheckout()."\",";
					}
			
					if ( $this->GetLastCheckin() )
					{
                  $file_data .="\"".$curr_copy->GetLastCheckin()."\",";
					}
			
					if ( $this->GetLifetimeCirc() )
					{
                  $file_data .="\"".$curr_copy->GetLifetimeCircs()."\",";
					}
			
					if ( $this->GetOnlyHolder() )
					{	
                  $file_data .="\"".$curr_copy->GetOnlyHolder()."\",";
					}
					
					if ( $this->GetOtherLibraryCount() )
					{	
                  $file_data .="\"".$curr_copy->GetOtherLibraryCount()."\",";
					}
			
					if ( $this->GetPubYear() )
					{
                  $file_data .="\"".$curr_bib->GetPubYearForDisplay()."\",";
					}
			
					if ( $this->GetAcqCost() )
					{
                  $file_data .="\"".$curr_copy->GetAcqCost()."\",";
					}
			
					if ( $this->GetActiveDate() )
					{
                  $file_data .="\"".$curr_copy->GetActiveDate()."\",";
					}
			
					if ( $this->GetAgeProtection() )
					{
                  $file_data .="\"".$curr_copy->GetAgeProtect()."\",";
                  $file_data .="\"".$curr_copy->GetAgeProtectExpire()."\",";
					}
			
					if ( $this->GetAlertMessage() )
					{
                  $file_data .="\"".$curr_copy->GetAlertMessage()."\",";
					}
			
					if ( $this->GetAmazonDirect() )
					{
					   $file_data .="\"".$curr_bib->GetAmazonDirect()."\",";
			      }
			
					if ( $this->GetAmazonSearch() )
					{
					   $file_data .="\"".$curr_bib->GetAmazonSearch()."\",";
					}
			
					if ( $this->GetCallClass() )
					{
                  $file_data .="\"".$curr_copy->GetCallClass()."\",";
					}
					
					if ( $this->GetCallSortKey() )
					{
                  $file_data .="\"".$curr_copy->GetCallSortKey()."\",";
					}
			
					if ( $this->GetCatalogLink() )
					{
						$file_data .="\"".$curr_bib->GetCatalogLink()."\","; 
					}
					
					if ( $this->GetCircModifier() )
					{
                  $file_data .="\"".$curr_copy->GetCircMod()."\",";
					}
			
					if ( $this->GetCircLib() )
					{
                  $file_data .="\"".$curr_copy->GetCircLibShortname()."\",";
					}
			
					if ( $this->GetCircsBetween() )
					{
                  $file_data .="\"".$curr_copy->GetCircsBetween()."\",";
					}
			
					if ( $this->GetCopyId() )
					{
                  $file_data .="\"".$curr_copy->GetCopyId()."\",";
					}
			
					if ( $this->GetCopyStatus() )
					{
                  $file_data .="\"".$curr_copy->GetStatus()."\",";
					}
					
					if ( $this->GetStatChange() )
               {
                  $file_data .="\"".$curr_copy->GetStatusChange()."\",";
					}
					
					if ( $this->GetCoverImage() )
					{
                  $file_data .="\"".$curr_bib->GetCoverImage()."\",";
					}
					
					if ( $this->GetCreateDate() )
					{
                  $file_data .="\"".$curr_copy->GetCreateDate()."\",";
					}
					
					if ( $show_deleted )
					{
						if ($curr_copy->GetIsDeleted())
						{
						   $file_data .="\""."TRUE"."\",";  
                     $file_data .="\"".$curr_copy->GetDeletedDate()."\",";   
						}
						else
						{
                     $file_data .="\"\",";
                     $file_data .="\"\","; 
                  }
					}
			
					if ( $this->GetDeposit() )
					{
                  $file_data .="\"".$curr_copy->GetDeposit()."\",";
					}
			
					if ( $this->GetDueDate() )
					{
                  $file_data .="\"".$curr_copy->GetDueDate()."\",";
					}
			
					if ( $this->GetFineLevel() )
					{
                  $file_data .="\"".$curr_copy->GetFineLevel()."\",";
					}
					
					if ( $this->GetFingerprint() )
					{
                  $file_data .="\"".$curr_copy->GetFingerprint()."\",";
					}
			
					if ( $this->GetFloating() )
					{
                  $file_data .="\"".$curr_copy->GetFloating()."\",";
					}
					
					if ( $this->GetGoodreads() )
			      {
                  $file_data .="\"".$curr_bib->GetGoodreadsLink()."\",";
					}
					
					if ( $this->GetHolds() )
			      {
			          $my_holds = $curr_bib->GetMyHolds()+$curr_copy->GetMyHolds();
			          $other_holds = $curr_bib->GetOtherHolds()+$curr_copy->GetOtherHolds();
			          
                   $file_data .="\"".$my_holds."\",";
                   $file_data .="\"".$other_holds."\",";
					}
			
					if ( $this->GetInHouseUse() )
					{
					   $file_data .="\"".$curr_copy->GetInHouseUse()."\",";
					   $file_data .="\"".$curr_copy->GetLastInHouseUse()."\",";
					}
			
					if ( $this->GetISBN() )
					{
                  $file_data .="\"".$curr_bib->GetISBN(",  ")."\",";
					}
			
					if ( $this->GetLastFYCirc() )
					{
                  $file_data .="\"".$curr_copy->GetLastFYCirc()."\",";
					}
			
					if ( $this->GetLoanDuration() )
					{
                  $file_data .="\"".$curr_copy->GetLoanDuration()."\",";
					}
					
					if ( $this->GetNovelist() )
					{
                  $file_data .="\"".$curr_bib->GetNovelistLink()."\",";
					}
		  
					if ( $this->GetOCLCNumber() )
					{
                  $file_data .="\"".$curr_bib->GetOCLCNumber()."\",";
					}
			
					if ( $this->GetOwningLib() )
					{
                  $file_data .="\"".$curr_copy->GetOwningLibShortname()."\",";
					}
			
					if ( $this->GetPrice() )
					{
                  $file_data .="\"".$curr_copy->GetPrice()."\",";
					}
					
					if ( $this->GetPublicNote() )
					{
                  $file_data .="\"".$curr_copy->GetPublicNote(',')."\",";
					}
			
					if ( $this->GetPublisher() )
					{
                  $file_data .="\"".$curr_bib->GetPublisher()."\",";
					}
			
					if ( $this->GetReference() )
					{
                  $file_data .="\"".$curr_copy->GetReference()."\",";
					}
					
					if ( $this->GetStaffNote() )
					{
                  $file_data .="\"".$curr_copy->GetStaffNote(',')."\",";
					}
			
					if ( $this->GetSummary() )
					{
                  $file_data .="\"".str_replace('"', '""', $curr_bib->GetSummary())."\",";
					}
			
					if ( $this->GetYTDCircs() )
					{
                  $file_data .="\"".$curr_copy->GetYTDCirc()."\",";
					}
			
					if ( $this->GetStatCat() )
					{
					   $stats = $curr_copy->GetStatCatArray();
						foreach ($stats as $stat_cat)
						{
                     $file_data .="\"".$stat_cat."\",";   
						}
					}
					
					$file_data = rtrim($file_data,',');
			      $file_data .="\n";
            }
         }
         
         
         //add to list of sheets
      
      } //end for each library
      
      //write out the sheet
      file_put_contents($write_filename, $file_data);
      
      
      if ($bib_list->HasOnlineRecs())
      {
			$file_data = "";
			
			$write_filename = "/var/www/tools/reports/".$relative_file_name."_online.csv";
      
         $this->output_filename[] = "https://tools.noblenet.org/reports/".$relative_file_name."_online.csv";
      
         echo "Writing Online List Report  -- ".$write_filename."\n";
         
         if ( $this->GetTitle() )
			{
				$file_data .="\"Title\",";
			}

			if ( $this->GetAuthor() )
			{
				$file_data .="\"Author\",";
			}
			
			if ( $this->GetBibId() )
			{
				$file_data .="\"Bib Id\",";
			}
			
			if ( $this->GetPubYear() )
			{
				$file_data .="\"Pub Year\",";
			}
			
			if ( $this->GetAmazonDirect() )
			{
				$file_data .="\"Amazon Direct\",";
			}
		
			if ( $this->GetAmazonSearch() )
			{
				$file_data .="\"Amazon Search\",";
			}
			
			if ( $this->GetCatalogLink() )
			{
				$file_data .="\"Catalog Link\",";
			}
			
			if ( $this->GetCoverImage() )
			{
				$file_data .="\"Cover Image\",";
			}
			
			if ( $this->GetGoodreads() )
			{
				$file_data .="\"Goodreads Link\",";
			}
			
			if ( $this->GetISBN() )
			{
				$file_data .="\"ISBN\",";
			}
			
			if ( $this->GetNovelist() )
			{
				$file_data .="\"Novelist Link\",";
			}
	  
			if ( $this->GetOCLCNumber() )
			{
				$file_data .="\"OCLC Number\",";
			}
			
			if ( $this->GetPublisher() )
			{
				$file_data .="\"Publisher\",";
			}
			
			if ( $this->GetSummary() )
			{
				$file_data .="\"Summary\",";
			}
			
			//remove last comma and add a new line
			$file_data = rtrim($file_data,',');
			$file_data .="\n";
			
			foreach($bib_list->online_recs as $curr_bib)
			{
			   if ( $this->GetTitle() )
				{
					$file_data .="\"".str_replace('"', '""', $curr_bib->GetTitle())."\",";
				}

				if ( $this->GetAuthor() )
				{
					$file_data .="\"".$curr_bib->GetAuthor()."\",";
				}
				
				if ( $this->GetBibId() )
				{
					$file_data .="\"".$curr_bib->GetBibId()."\",";
				}
				
				if ( $this->GetPubYear() )
				{
					$file_data .="\"".$curr_bib->GetPubYearForDisplay()."\",";
				}
					
				if ( $this->GetAmazonDirect() )
				{
					$file_data .="\"".$curr_bib->GetAmazonDirect()."\",";
				}
		
				if ( $this->GetAmazonSearch() )
				{
					$file_data .="\"".$curr_bib->GetAmazonSearch()."\",";
				}
				
				if ( $this->GetCatalogLink() )
				{
					$file_data .="\"".$curr_bib->GetCatalogLink()."\","; 
				}
				
				if ( $this->GetCoverImage() )
				{
					$file_data .="\"".$curr_bib->GetCoverImage()."\",";
				}
				
				if ( $this->GetGoodreads() )
				{
					$file_data .="\"".$curr_bib->GetGoodreadsLink()."\",";
				}
				
				if ( $this->GetISBN() )
				{
					$file_data .="\"".$curr_bib->GetISBN(",  ")."\",";
				}	
				
				if ( $this->GetNovelist() )
				{
					$file_data .="\"".$curr_bib->GetNovelistLink()."\",";
				}
				
				if ( $this->GetOCLCNumber() )
				{
					$file_data .="\"".$curr_bib->GetOCLCNumber()."\",";
				}
				
				if ( $this->GetPublisher() )
				{
					$file_data .="\"".$curr_bib->GetPublisher()."\",";
				}
				
				if ( $this->GetSummary() )
				{
					$file_data .="\"".str_replace('"', '""', $curr_bib->GetSummary())."\",";
				}
				
				$file_data = rtrim($file_data,',');
			   $file_data .="\n";
				
			}//end foreach online rec
		
      }//end has online
      
      file_put_contents($write_filename, $file_data);
      
   }
   
   function WriteExcel($bib_list, $file_name, $show_deleted, $lib_name, $absolute_file_name = false)
   {
      //determine if this is a system and requires multiple sheets
     
      if ($absolute_file_name)
      {
         $write_filename = $file_name.".xlsx";
      }
      else
      {     
         $write_filename = "/var/www/tools/reports/".$file_name.".xlsx";
      
         $this->output_filename = "https://tools.noblenet.org/reports/".$file_name.".xlsx";
      }
      
      echo "Writing List Report  -- ".$write_filename."\n";
   

      // create new PHPExcel object
      $objPHPExcel = new PHPExcel;
   
      //set the fields to display as stings so barcode looks right 
      $objPHPExcel->getDefaultStyle()->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
   
      // set default font
      $objPHPExcel->getDefaultStyle()->getFont()->setName('Calibri');

      // set default font size
      $objPHPExcel->getDefaultStyle()->getFont()->setSize(10);
   
      // create the writer
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel2007");

      $sheet_id = 0; 
      
      if ($this->include_summary)
      {
         $sheet_id++;
         
         $objSheet = $objPHPExcel->getActiveSheet();
         
         $this->WriteSummarySheet($objSheet, $bib_list);
      }
      
      foreach ($bib_list->one_bib_one_copy_recs as $curr_lib)
      {
         $branch = $curr_lib->GetShortname();
         $max_stat = $curr_lib->GetMaxStatCat();
         $bibs = $curr_lib->bib_copy_list;
         
         if ($bib_list->GetLibrary() == "NOBLE")
         {
            //find out if you need to write out the circulation library on this sheet since system items are grouped together on one sheet
            $this->ToggleShowCircLibl($curr_lib->GetHasBranches());
         }
         
         if ($sheet_id > 0)
         {
            $objPHPExcel->createSheet(NULL, $sheet_id);
            $objPHPExcel->setActiveSheetIndex($sheet_id);
         }
         $sheet_id++;
      
         $objSheet = $objPHPExcel->getActiveSheet();
         
         $title = $branch." Items";
         // rename the sheet
         $objSheet->setTitle($title);
         
         $next_col =  'A';
         
         // write header
         if ( $this->GetCopyLocation() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Copy Location');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetCallPrefix() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Prefix');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetCallNumber() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Call Number');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
          
         if ( $this->GetCallSuffix() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Suffix');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
      
         if ( $this->GetPart() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Part');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
   
         if ( $this->GetTitle() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Title');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
   
         if ( $this->GetAuthor() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Author');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetBarcode() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Barcode');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetBibId() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Bib Id');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetLastCheckout() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Last Checkout');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetLastCheckin() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Last Checkin');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetLifetimeCirc() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Lifetime Circs');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetOnlyHolder() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Only Holder');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetOtherLibraryCount() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Other Library Copy Count');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetPubYear() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Pub Year');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetAcqCost() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Acq Cost');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetActiveDate() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Active Date');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetAgeProtection() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Age Protection');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
            $objSheet->getCell($next_col.'1')->setValue('Age Protect Expire');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetAlertMessage() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Alert Message');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetAmazonDirect() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Amazon Direct');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetAmazonSearch() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Amazon Search');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetCallClass() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Call Class');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetCallSortKey() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Call Sort Key');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetCatalogLink() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Catalog Link');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetCircModifier() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Circ Modifier');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetCircLib() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Circ Lib');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetCircsBetween() )
         {
            $start =  date("m/d/Y", strtotime($this->circ_start));
            $end = date("m/d/Y", strtotime($this->circ_end));
            $objSheet->getCell($next_col.'1')->setValue('Circs '.$start." to ".$end);
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetCopyId() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Copy ID');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetCopyStatus() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Copy Status');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetStatChange() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Last Status Change');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetCoverImage() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Cover Image');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetCreateDate() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Create Date');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ($show_deleted)
         {
            $objSheet->getCell($next_col.'1')->setValue('Deleted');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
            
            $objSheet->getCell($next_col.'1')->setValue('Date Deleted');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetDeposit() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Deposit');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetDueDate() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Due Date');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetFineLevel() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Fine Level');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetFingerprint() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Fingerprint');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetFloating() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Floating');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetGoodreads() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Goodreads Link');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetHolds() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Holds - My Lib');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
            
            $objSheet->getCell($next_col.'1')->setValue('Holds - Other Libs');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetInHouseUse() )
         {
           $objSheet->getCell($next_col.'1')->setValue('In House Count');
           $objSheet->getColumnDimension($next_col)->setAutoSize(true);
           $next_col++;
           $objSheet->getCell($next_col.'1')->setValue('Last In House Use');
           $objSheet->getColumnDimension($next_col)->setAutoSize(true);
           $next_col++;
         }
         
         if ( $this->GetISBN() )
         {
            $objSheet->getCell($next_col.'1')->setValue('ISBN');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetLastFYCirc() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Last FY Circ');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetLoanDuration() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Loan Duration');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetNovelist() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Novelist Link');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetOCLCNumber() )
         {
            $objSheet->getCell($next_col.'1')->setValue('OCLC Number');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetOwningLib() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Owning Lib');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetPrice() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Price');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetPublicNote() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Public Note');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
        
         if ( $this->GetPublisher() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Publisher');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetReference() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Reference');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetStaffNote() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Staff Note');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetSummary() )
         {
            $objSheet->getCell($next_col.'1')->setValue('Summary');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetYTDCircs() )
         {
            $objSheet->getCell($next_col.'1')->setValue('YTD CIrcs');
            $objSheet->getColumnDimension($next_col)->setAutoSize(true);
            $next_col++;
         }
         
         if ( $this->GetStatCat() )
         {
            for ($i = 0; $i < $max_stat; $i++)
            {
               $objSheet->getCell($next_col.'1')->setValue('Stat Cat');
               $objSheet->getColumnDimension($next_col)->setAutoSize(true);
               $next_col++;
            }
         }
         
         $last_col = $next_col;
         $last_col--;
         
         //echo "last_col = ".$last_col."\n";
         
         $objSheet->getStyle('A1:'.$last_col.'1')->getFont()->setBold(true)->setSize(12);
         
         //now write out all the data from the list of bibs
         
         if( count($bibs) > 0 )
         {
            $row = 2;
            
            foreach($bibs as $curr_bib)
            {
               $col = 'A';
               $curr_copy =  $curr_bib->GetCopyRec();
               
               if ( $this->GetCopyLocation() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCopyLocation());
                  $col++;
					}
               
               if ( $this->GetCallPrefix() )
               {
                  $cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetPrefix());
                  $col++;
               }
			
					if ( $this->GetCallNumber() )
					{
   					$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCallNumber());
                  $col++;
					}
			 
					if ( $this->GetCallSuffix() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetSuffix());
                  $col++;
					}
		
					if ( $this->GetPart() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetPart());
                  $col++;
					}
	
					if ( $this->GetTitle() )
					{
					   $cell_num= sprintf("%s%d", $col, $row);
					   if($this->GetTitleCatalogLink())
					   {
					      $objSheet->setCellValue($cell_num,  $curr_bib->GetTitle());
                     $objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
                     $objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
         
                     $objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetCatalogLink());
                     $objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." in Catalog");
					   }
					   else
					   {
					      $objSheet->setCellValue($cell_num, $curr_bib->GetTitle());
					   }
						
                  $col++;
					}
	
					if ( $this->GetAuthor() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_bib->GetAuthor());
                  $col++;
					}
			
					if ( $this->GetBarcode() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValueExplicit($cell_num, $curr_copy->GetBarcode(), PHPExcel_Cell_DataType::TYPE_STRING);
                  $cellval = $objSheet->getCell($cell_num)->getValue();
                  $col++;
					}
			
					if ( $this->GetBibId() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_bib->GetBibId());
                  $col++;
					}
					
					if ( $this->GetLastCheckout() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetLastCheckout());
                  $col++;
					}
			
					if ( $this->GetLastCheckin() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetLastCheckin());
                  $col++;
					}
			
					if ( $this->GetLifetimeCirc() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetLifetimeCircs());
                  $col++;
					}
			
					if ( $this->GetOnlyHolder() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetOnlyHolder());
                  $col++;
					}
					
					if ( $this->GetOtherLibraryCount() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetOtherLibraryCount());
                  $col++;
					}
			
					if ( $this->GetPubYear() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_bib->GetPubYearForDisplay());
                  $col++;
					}
			
					if ( $this->GetAcqCost() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetAcqCost());
                  $col++;
					}
			
					if ( $this->GetActiveDate() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetActiveDate());
                  $col++;
					}
			
					if ( $this->GetAgeProtection() )
					{
					   //Val
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetAgeProtect());
                  $col++;
                  
                  //Expire
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetAgeProtectExpire());
                  $col++;
					}
			
					if ( $this->GetAlertMessage() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetAlertMessage());
                  $col++;
					}
			
					if ( $this->GetAmazonDirect() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
						
						if ($curr_bib->GetAmazonDirect())
						{
                  
                     $objSheet->setCellValue($cell_num, "Amazon Link");
                     $objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
                     $objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
         
                     $objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetAmazonDirect());
                     $objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." on Amazon");
                  }
                  $col++;
					}
			
					if ( $this->GetAmazonSearch() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, "Amazon Search");
                  $objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
                  $objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
         
                  $objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetAmazonSearch());
                  $objSheet->getCell($cell_num)->getHyperlink()->setTooltip("Search ".$curr_bib->GetTitleForTooltip()." on Amazon");
                  $col++;
					}
			
					if ( $this->GetCallClass() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCallClass());
                  $col++;
					}
					
					if ( $this->GetCallSortKey() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCallSortKey());
                  $col++;
					}
			
					if ( $this->GetCatalogLink() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  
                  $objSheet->setCellValue($cell_num, "View in Catalog");
                  $objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
                  $objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
         
                  $objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetCatalogLink());
                  $objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." in Catalog");
            
                  $col++;
					}
					
					if ( $this->GetCircModifier() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCircMod());
                  $col++;
					}
			
					if ( $this->GetCircLib() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCircLibShortname());
                  $col++;
					}
			
					if ( $this->GetCircsBetween() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCircsBetween());
                  $col++;
					}
			
					if ( $this->GetCopyId() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCopyId());
                  $col++;
					}
			
			
					if ( $this->GetCopyStatus() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetStatus());
                  $col++;
					}
					
					if ( $this->GetStatChange() )
               {
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetStatusChange());
                  $col++;
					}
					
					if ( $this->GetCoverImage() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  
                  $objSheet->setCellValue($cell_num, "View Cover Image");
                  $objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
                  $objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
         
                  $objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetCoverImage());
                  $objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." Cover Image");
            
                  $col++;
					}
					
					if ( $this->GetCreateDate() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCreateDate());
                  $col++;
					}
					
					if ( $show_deleted )
					{
						$cell_num= sprintf("%s%d", $col, $row);
						
						if ($curr_copy->GetIsDeleted())
						{
						   $cell_num= sprintf("%s%d", $col, $row);
						   $objSheet->setCellValue($cell_num, "TRUE");
                     $col++;
                     $cell_num= sprintf("%s%d", $col, $row);
                     $objSheet->setCellValue($cell_num, $curr_copy->GetDeletedDate());
                     $col++;
						}
						else
						{
						   $cell_num= sprintf("%s%d", $col, $row);
                     $objSheet->setCellValue($cell_num, "");
                     $col++;
                     $cell_num= sprintf("%s%d", $col, $row);
                     $objSheet->setCellValue($cell_num, "");
                     $col++;
                     
                  }
					}
			
					if ( $this->GetDeposit() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetDeposit());
                  $col++;
					}
			
					if ( $this->GetDueDate() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetDueDate());
                  $col++;
					}
			
					if ( $this->GetFineLevel() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetFineLevel());
                  $col++;
					}
					
					if ( $this->GetFingerprint() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_bib->GetFingerprint());
                  $col++;
					}
			
					if ( $this->GetFloating() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetFloating());
                  $col++;
					}
					
					if ( $this->GetGoodreads() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
						if ($this->GetGoodreads() )
						{
                  
                     $objSheet->setCellValue($cell_num, "View on Goodreads");
                     $objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
                     $objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
         
                     $objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetGoodreadsLink());
                     $objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." on Goodreads");
                  }
                  $col++;
					}
					
					if ( $this->GetHolds() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
						$total_holds = $curr_bib->GetMyHolds()+$curr_copy->GetMyHolds();
                  $objSheet->setCellValue($cell_num, $total_holds);
                  $col++;
                  
                  $cell_num= sprintf("%s%d", $col, $row);
						$total_holds = $curr_bib->GetOtherHolds()+$curr_copy->GetOtherHolds();
                  $objSheet->setCellValue($cell_num, $total_holds);
                  $col++;
					}
			
					if ( $this->GetInHouseUse() )
					{
					   //count
					   $cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetInHouseUse());
                  $col++;
					  
					   //Last use
					   $cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetLastInHouseUse());
                  $col++;
					}
			
					if ( $this->GetISBN() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValueExplicit($cell_num,  $curr_bib->GetISBN(",  "), PHPExcel_Cell_DataType::TYPE_STRING);
                  $col++;
					}
			
					if ( $this->GetLastFYCirc() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetLastFYCirc());
                  $col++;
					}
			
					if ( $this->GetLoanDuration() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetLoanDuration());
                  $col++;
					}
					
					if ( $this->GetNovelist() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  if ( $this->GetNovelist() )
                  {
                     $objSheet->setCellValue($cell_num, "View on Novelist");
                     $objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
                     $objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
         
                     $objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetNovelistLink());
                     $objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." on Novelist");
                  }
                  $col++;
					}
		  
					if ( $this->GetOCLCNumber() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_bib->GetOCLCNumber());
                  $col++;
					}
			
					if ( $this->GetOwningLib() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetOwningLibShortname());
                  $col++;
					}
			
					if ( $this->GetPrice() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetPrice());
                  $col++;
					}
					
					if ( $this->GetPublicNote() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetPublicNote(','));
                  $col++;
					}
			
					if ( $this->GetPublisher() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_bib->GetPublisher());
                  $col++;
					}
			
					if ( $this->GetReference() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetReference());
                  $col++;
					}
					
					if ( $this->GetStaffNote() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetStaffNote(','));
                  $col++;
					}
			
					if ( $this->GetSummary() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_bib->GetSummary());
                  //$objPHPExcel->getActiveSheet()->getStyle($cell_num)->getAlignment()->setWrapText(true);
                  $col++;
					}
			
					if ( $this->GetYTDCircs() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetYTDCirc());
                  $col++;
					}
					
			
					if ( $this->GetStatCat() )
					{
					   $stats = $curr_copy->GetStatCatArray();
						foreach ($stats as $stat_cat)
						{
							$cell_num= sprintf("%s%d", $col, $row);
                     $objSheet->setCellValue($cell_num, $stat_cat);
                     $col++;
						}
					}
					
					$row++;
            }
         }
      
         
         // create some borders
         // first, create the whole grid around the table
         $objSheet->getStyle()->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
   
         // create a medium border on the header line
         $objSheet->getStyle('A1:'.$last_col.'1')->getBorders()-> getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_MEDIUM);
      
      } //end for each library
      
      //if there are online records, write to seperate sheet
      if ($bib_list->HasOnlineRecs())
      {
         //Make a new sheet 
         if ($sheet_id > 0)
         {
            $objPHPExcel->createSheet(NULL, $sheet_id);
            $objPHPExcel->setActiveSheetIndex($sheet_id);
         }
         $sheet_id++;
         
         $objSheet = $objPHPExcel->getActiveSheet();
         
         $this->WriteOnlineRecs($objSheet, $bib_list, $lib_name);
         
      }//end if online rec 
      
      if ($this->bib_sheet)
      {
         if ($sheet_id > 0)
         {
            $objPHPExcel->createSheet(NULL, $sheet_id);
            $objPHPExcel->setActiveSheetIndex($sheet_id);
         }
         $sheet_id++;
         
         $objSheet = $objPHPExcel->getActiveSheet();
         
         $this->WriteBibSheet($objSheet, $bib_list);
      }
      
      //set back tot he first sheet 
      $objPHPExcel->setActiveSheetIndex(0);
      
      // write the file
      $objWriter->save($write_filename);
      
      
   }//end Write Spreadsheet
   
   function WriteSingleExcel($bib_list, $file_name, $show_deleted, $lib_name, $absolute_file_name = false)
   {
      //determine if this is a system and requires multiple sheets
      
      echo "Writing Single sheet\n";
      
      if ($absolute_file_name)
      {
         $write_filename = $file_name.".xlsx";
      }
      else
      {     
         $write_filename = "/var/www/tools/reports/".$file_name.".xlsx";
      
         $this->output_filename = "https://tools.noblenet.org/reports/".$file_name.".xlsx";
      }
      
      echo "Writing List Report  -- ".$write_filename."\n";
   

      // create new PHPExcel object
      $objPHPExcel = new PHPExcel;
   
      //set the fields to display as stings so barcode looks right 
      $objPHPExcel->getDefaultStyle()->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
   
      // set default font
      $objPHPExcel->getDefaultStyle()->getFont()->setName('Calibri');

      // set default font size
      $objPHPExcel->getDefaultStyle()->getFont()->setSize(10);
   
      // create the writer
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel2007");

      $sheet_id = 0; 
      
      if ($this->include_summary)
      {
         $sheet_id++;
         
         $objSheet = $objPHPExcel->getActiveSheet();
         
         $this->WriteSummarySheet($objSheet, $bib_list);
      }
      
      if ($sheet_id > 0)
      {
         $objPHPExcel->createSheet(NULL, $sheet_id);
         $objPHPExcel->setActiveSheetIndex($sheet_id);
      }
      $sheet_id++;
      
      $objSheet = $objPHPExcel->getActiveSheet();
         
      $title = $lib_name." Items";
      // rename the sheet
      $objSheet->setTitle($title);
      
      $next_col =  'A';
      
      // write header
		if ( $this->GetCopyLocation() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Copy Location');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCallPrefix() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Prefix');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCallNumber() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Call Number');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		 
		if ( $this->GetCallSuffix() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Suffix');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
	
		if ( $this->GetPart() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Part');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}

		if ( $this->GetTitle() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Title');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}

		if ( $this->GetAuthor() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Author');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetBarcode() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Barcode');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetBibId() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Bib Id');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetLastCheckout() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Last Checkout');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetLastCheckin() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Last Checkin');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetLifetimeCirc() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Lifetime Circs');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetOnlyHolder() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Only Holder');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetOtherLibraryCount() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Other Library Copy Count');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetPubYear() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Pub Year');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetAcqCost() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Acq Cost');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetActiveDate() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Active Date');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetAgeProtection() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Age Protection');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
			$objSheet->getCell($next_col.'1')->setValue('Age Protect Expire');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetAlertMessage() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Alert Message');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetAmazonDirect() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Amazon Direct');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetAmazonSearch() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Amazon Search');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCallClass() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Call Class');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCallSortKey() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Call Sort Key');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCatalogLink() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Catalog Link');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCircModifier() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Circ Modifier');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCircLib() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Circ Lib');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCircsBetween() )
		{
		   $start =  date("m/d/Y", strtotime($this->circ_start));
         $end = date("m/d/Y", strtotime($this->circ_end));
         $objSheet->getCell($next_col.'1')->setValue('Circs '.$start." to ".$end);
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCopyId() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Copy ID');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCopyStatus() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Copy Status');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetStatChange() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Last Status Change');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCoverImage() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Cover Image');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		
		if ( $this->GetCreateDate() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Create Date');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ($show_deleted)
		{
			$objSheet->getCell($next_col.'1')->setValue('Deleted');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
			
			$objSheet->getCell($next_col.'1')->setValue('Date Deleted');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetDeposit() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Deposit');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetDueDate() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Due Date');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetFineLevel() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Fine Level');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetFingerprint() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Fingerprint');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetFloating() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Floating');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetGoodreads() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Goodreads Link');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetHolds() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Hold - Circ Lib');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
			
			$objSheet->getCell($next_col.'1')->setValue('Hold - Other Lib');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetInHouseUse() )
		{
		  $objSheet->getCell($next_col.'1')->setValue('In House Count');
		  $objSheet->getColumnDimension($next_col)->setAutoSize(true);
		  $next_col++;
		  $objSheet->getCell($next_col.'1')->setValue('Last In House Use');
		  $objSheet->getColumnDimension($next_col)->setAutoSize(true);
		  $next_col++;
		}
		
		if ( $this->GetISBN() )
		{
			$objSheet->getCell($next_col.'1')->setValue('ISBN');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetLastFYCirc() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Last FY Circ');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetLoanDuration() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Loan Duration');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetNovelist() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Novelist Link');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetOCLCNumber() )
		{
			$objSheet->getCell($next_col.'1')->setValue('OCLC Number');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetOwningLib() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Owning Lib');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetPrice() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Price');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetPublicNote() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Public Note');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
	  
		if ( $this->GetPublisher() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Publisher');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetReference() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Reference');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetStaffNote() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Staff Note');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetSummary() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Summary');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetYTDCircs() )
		{
			$objSheet->getCell($next_col.'1')->setValue('YTD CIrcs');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetStatCat() )
		{
			for ($i = 0; $i < $bib_list->GetMaxStatCat(); $i++)
			{
				$objSheet->getCell($next_col.'1')->setValue('Stat Cat');
				$objSheet->getColumnDimension($next_col)->setAutoSize(true);
				$next_col++;
			}
		}
		
		$last_col = $next_col--;
		// create a medium border on the header line
      $objSheet->getStyle('A1:'.$last_col.'1')->getBorders()-> getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_MEDIUM);
		
		echo "last_col = ".$last_col."\n";
		
		$objSheet->getStyle('A1:'.$last_col.'1')->getFont()->setBold(true)->setSize(12);
		
		$row = 2;
      
      foreach ($bib_list->one_bib_one_copy_recs as $curr_lib)
      {
         //now write out all the data from the list of bibs
         $bibs = $curr_lib->bib_copy_list;
         
         if( count($bibs) > 0 )
         {
            foreach($bibs as $curr_bib)
            {
               $col = 'A';
               $curr_copy =  $curr_bib->GetCopyRec();
               
               if ( $this->GetCopyLocation() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCopyLocation());
                  $col++;
					}
               
               if ( $this->GetCallPrefix() )
               {
                  $cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetPrefix());
                  $col++;
               }
			
					if ( $this->GetCallNumber() )
					{
   					$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCallNumber());
                  $col++;
					}
			 
					if ( $this->GetCallSuffix() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetSuffix());
                  $col++;
					}
		
					if ( $this->GetPart() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetPart());
                  $col++;
					}
	
					if ( $this->GetTitle() )
					{
					   $cell_num= sprintf("%s%d", $col, $row);
					   if($this->GetTitleCatalogLink())
					   {
					      $objSheet->setCellValue($cell_num,  $curr_bib->GetTitle());
                     $objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
                     $objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
         
                     $objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetCatalogLink());
                     $objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." in Catalog");
					   }
					   else
					   {
					      $objSheet->setCellValue($cell_num, $curr_bib->GetTitle());
					   }
						
                  $col++;
					}
	
					if ( $this->GetAuthor() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_bib->GetAuthor());
                  $col++;
					}
			
					if ( $this->GetBarcode() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValueExplicit($cell_num, $curr_copy->GetBarcode(), PHPExcel_Cell_DataType::TYPE_STRING);
                  $cellval = $objSheet->getCell($cell_num)->getValue();
                  $col++;
					}
			
					if ( $this->GetBibId() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_bib->GetBibId());
                  $col++;
					}
					
					if ( $this->GetLastCheckout() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GeLastCheckout());
                  $col++;
					}
			
					if ( $this->GetLastCheckin() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetLastCheckin());
                  $col++;
					}
			
					if ( $this->GetLifetimeCirc() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetLifetimeCircs());
                  $col++;
					}
			
					if ( $this->GetOnlyHolder() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetOnlyHolder());
                  $col++;
					}
					
					if ( $this->GetOtherLibraryCount() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetOtherLibraryCount());
                  $col++;
					}
			
					if ( $this->GetPubYear() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_bib->GetPubYearForDisplay());
                  $col++;
					}
			
					if ( $this->GetAcqCost() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetAcqCost());
                  $col++;
					}
			
					if ( $this->GetActiveDate() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetActiveDate());
                  $col++;
					}
			
					if ( $this->GetAgeProtection() )
					{
					   //Val
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetAgeProtect());
                  $col++;
                  
                  //Expire
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetAgeProtectExpire());
                  $col++;
					}
			
					if ( $this->GetAlertMessage() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetAlertMessage());
                  $col++;
					}
			
					if ( $this->GetAmazonDirect() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
						
						if ($curr_bib->GetAmazonDirect())
						{
                  
                     $objSheet->setCellValue($cell_num, "Amazon Link");
                     $objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
                     $objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
         
                     $objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetAmazonDirect());
                     $objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." on Amazon");
                  }
                  $col++;
					}
			
					if ( $this->GetAmazonSearch() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, "Amazon Search");
                  $objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
                  $objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
         
                  $objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetAmazonSearch());
                  $objSheet->getCell($cell_num)->getHyperlink()->setTooltip("Search ".$curr_bib->GetTitleForTooltip()." on Amazon");
                  $col++;
					}
			
					if ( $this->GetCallClass() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCallClass());
                  $col++;
					}
					
					if ( $this->GetCallSortKey() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCallSortKey());
                  $col++;
					}
			
					if ( $this->GetCatalogLink() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  
                  $objSheet->setCellValue($cell_num, "View in Catalog");
                  $objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
                  $objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
         
                  $objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetCatalogLink());
                  $objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." in Catalog");
            
                  $col++;
					}
					
			
					if ( $this->GetCircModifier() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCircMod());
                  $col++;
					}
			
					if ( $this->GetCircLib() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCircLibShortname());
                  $col++;
					}
			
					if ( $this->GetCircsBetween() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCircsBetween());
                  $col++;
					}
			
					if ( $this->GetCopyId() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCopyId());
                  $col++;
					}
			
			
					if ( $this->GetCopyStatus() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetStatus());
                  $col++;
					}
					
					if ( $this->GetStatChange() )
               {
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetStatusChange());
                  $col++;
					}
					
					if ( $this->GetCoverImage() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  
                  $objSheet->setCellValue($cell_num, "View Cover Image");
                  $objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
                  $objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
         
                  $objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetCoverImage());
                  $objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." Cover Image");
            
                  $col++;
					}
					
					if ( $this->GetCreateDate() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetCreateDate());
                  $col++;
					}
					
					if ( $show_deleted )
					{
						$cell_num= sprintf("%s%d", $col, $row);
						
						if ($curr_copy->GetIsDeleted())
						{
						   $cell_num= sprintf("%s%d", $col, $row);
						   $objSheet->setCellValue($cell_num, "TRUE");
                     $col++;
                     $cell_num= sprintf("%s%d", $col, $row);
                     $objSheet->setCellValue($cell_num, $curr_copy->GetDeletedDate());
                     $col++;
						}
						else
						{
						   $cell_num= sprintf("%s%d", $col, $row);
                     $objSheet->setCellValue($cell_num, "");
                     $col++;
                     $cell_num= sprintf("%s%d", $col, $row);
                     $objSheet->setCellValue($cell_num, "");
                     $col++;
                     
                  }
					}
			
					if ( $this->GetDeposit() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetDeposit());
                  $col++;
					}
			
					if ( $this->GetDueDate() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetDueDate());
                  $col++;
					}
			
					if ( $this->GetFineLevel() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetFineLevel());
                  $col++;
					}
					
					if ( $this->GetFingerprint() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_bib->GetFingerprint());
                  $col++;
					}
			
					if ( $this->GetFloating() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetFloating());
                  $col++;
					}
					
					if ( $this->GetGoodreads() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
						if ($this->GetGoodreads() )
						{
                  
                     $objSheet->setCellValue($cell_num, "View on Goodreads");
                     $objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
                     $objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
         
                     $objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetGoodreadsLink());
                     $objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." on Goodreads");
                  }
                  $col++;
					}
					
					if ( $this->GetHolds() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
						$total_holds = $curr_bib->GetMyHolds()+$curr_copy->GetMyHolds();
                  $objSheet->setCellValue($cell_num, $total_holds);
                  $col++;
                  
                  $cell_num= sprintf("%s%d", $col, $row);
						$total_holds = $curr_bib->GetOtherHolds()+$curr_copy->GetOtherHolds();
                  $objSheet->setCellValue($cell_num, $total_holds);
                  $col++;
					}
			
					if ( $this->GetInHouseUse() )
					{
					   //count
					   $cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetInHouseUse());
                  $col++;
					  
					   //Last use
					   $cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetLastInHouseUse());
                  $col++;
					}
			
					if ( $this->GetISBN() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValueExplicit($cell_num,  $curr_bib->GetISBN(",  "), PHPExcel_Cell_DataType::TYPE_STRING);
                  $col++;
					}
			
					if ( $this->GetLastFYCirc() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetLastFYCirc());
                  $col++;
					}
			
					if ( $this->GetLoanDuration() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetLoanDuration());
                  $col++;
					}
					
					if ( $this->GetNovelist() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  if ( $this->GetNovelist() )
                  {
                     $objSheet->setCellValue($cell_num, "View on Novelist");
                     $objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
                     $objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
         
                     $objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetNovelistLink());
                     $objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." on Novelist");
                  }
                  $col++;
					}
		  
					if ( $this->GetOCLCNumber() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_bib->GetOCLCNumber());
                  $col++;
					}
			
					if ( $this->GetOwningLib() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetOwningLibShortname());
                  $col++;
					}
			
					if ( $this->GetPrice() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetPrice());
                  $col++;
					}
					
					if ( $this->GetPublicNote() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetPublicNote(','));
                  $col++;
					}
			
					if ( $this->GetPublisher() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_bib->GetPublisher());
                  $col++;
					}
			
					if ( $this->GetReference() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetReference());
                  $col++;
					}
					
					if ( $this->GetStaffNote() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetStaffNote(','));
                  $col++;
					}
			
					if ( $this->GetSummary() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_bib->GetSummary());
                  //$objPHPExcel->getActiveSheet()->getStyle($cell_num)->getAlignment()->setWrapText(true);
                  $col++;
					}
			
					if ( $this->GetYTDCircs() )
					{
						$cell_num= sprintf("%s%d", $col, $row);
                  $objSheet->setCellValue($cell_num, $curr_copy->GetYTDCirc());
                  $col++;
					}
					
			
					if ( $this->GetStatCat() )
					{
					   $stats = $curr_copy->GetStatCatArray();
						foreach ($stats as $stat_cat)
						{
							$cell_num= sprintf("%s%d", $col, $row);
                     $objSheet->setCellValue($cell_num, $stat_cat);
                     $col++;
						}
					}
					
					$row++;
            }
         }
      
         
         // create some borders
         // first, create the whole grid around the table
         $objSheet->getStyle()->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
   
      
      } //end for each library
      
       //if there are online records, write to seperate sheet
      if ($bib_list->HasOnlineRecs())
      {
         //Make a new sheet 
         if ($sheet_id > 0)
         {
            $objPHPExcel->createSheet(NULL, $sheet_id);
            $objPHPExcel->setActiveSheetIndex($sheet_id);
         }
         $sheet_id++;
         
         $objSheet = $objPHPExcel->getActiveSheet();
         
         $this->WriteOnlineRecs($objSheet, $bib_list);
         
      }//end if online rec 
      
      if ($this->bib_sheet)
      {
         if ($sheet_id > 0)
         {
            $objPHPExcel->createSheet(NULL, $sheet_id);
            $objPHPExcel->setActiveSheetIndex($sheet_id);
         }
         $sheet_id++;
         
         $objSheet = $objPHPExcel->getActiveSheet();
         
         $this->WriteBibSheet($objSheet, $bib_list);
      }
      
      //set back tot he first sheet 
      $objPHPExcel->setActiveSheetIndex(0);
      
      // write the file
      $objWriter->save($write_filename);
      
      
   }//end Write Spreadsheet
   
   function GetEmailText($include_link)
   {
       $message = "SPREADSHEET OUTPUT\n";
       
       if ($this->GetAuthorSort())$message .="Sorted By = Author \n";
       else if ($this->GetActiveDateSort())$message .="Sorted By = Active Date \n";
       else if ($this->GetCallNumSort())$message .="Sorted By = Call Number \n";
       else if ($this->GetLifetimeCircSort())$message .="Sorted By = Lifetime Circs \n";
       else if ($this->GetTitleSort())$message .="Sorted By = Title \n";
       else if ($this->GetCircBetweenSort())$message .="Sorted By = Circs In Selected Dates \n";
       else if ($this->GetYTDCircSort())$message .="Sorted By = YTD Circs \n";
       
       if ($this->GetCSVFormat())$message .="Format = CSV\n";
       else if ($this->GetExcelFormat())$message .="Format = Excel\n";
       
       if ($this->GetSummarySheet())$message .="Summary Included\n";
       if ($this->GetSingleSheet())$message .="Single Sheet\n";
       if ($this->GetBibSheet())$message .="Bib Sheet\n";
       
       $message .="Display Options \n";
       if ( $this->GetCallPrefix() )         $message .=" -- Call Number Prefix\n";
       if ( $this->GetCallNumber() )         $message .=" -- Call Number\n";
       if ( $this->GetCallSuffix() )         $message .=" -- Call Number Suffix\n";
       if ( $this->GetPart() )               $message .=" -- Part\n";
       if ( $this->GetTitle() )              $message .=" -- Title\n";
       if ( $this->GetAuthor() )             $message .=" -- Author\n";
       if ( $this->GetBarcode() )            $message .=" -- Barcode\n";
       if ( $this->GetBibId() )              $message .=" -- Bib Id\n";
       if ( $this->GetLastCheckin() )        $message .=" -- Last Checkin\n";
       if ( $this->GetLifetimeCirc() )       $message .=" -- Lifetime Circs\n";
       if ( $this->GetOnlyHolder() )         $message .=" -- Only Holder\n";
       if ( $this->GetPubYear() )            $message .=" -- Pub Year\n";
       if ( $this->GetAcqCost() )            $message .=" -- Acquisitions Cost\n";
       if ( $this->GetActiveDate() )         $message .=" -- Active Date\n";
       if ( $this->GetAgeProtection() )      $message .=" -- Age Protection\n";
       if ( $this->GetAlertMessage() )       $message .=" -- Alert Message\n";
       if ( $this->GetAmazonDirect() )       $message .=" -- Amazon Direct\n";
       if ( $this->GetAmazonSearch() )       $message .=" -- Amazon Search\n";
       if ( $this->GetCallClass() )          $message .=" -- Call Number Class\n";
       if ( $this->GetCallSortKey() )        $message .=" -- Call Number Sort Key\n";
       if ( $this->GetCatalogLink() )        $message .=" -- Catalog Link\n";
       if ( $this->GetTitleCatalogLink() )   $message .=" -- Title Catalog Link\n";
       if ( $this->GetLastCheckout() )       $message .=" -- Last Checkout\n";
       if ( $this->GetCircModifier() )       $message .=" -- Circ Modifier\n";
       if ( $this->GetCircLib() )            $message .=" -- Circ Library\n";
       if ( $this->GetCircsBetween() )       $message .=" -- Circs Between\n";
       if ( $this->GetCopyId() )             $message .=" -- Copy Id\n";
       if ( $this->GetCopyLocation() )       $message .=" -- Copy Location\n";
       if ( $this->GetCopyStatus() )         $message .=" -- Copy Status\n";
       if ( $this->GetStatChange() )         $message .=" -- Last Status Change\n";
       if ( $this->GetCreateDate() )         $message .=" -- Create Date\n";
       if ( $this->GetDeposit() )            $message .=" -- Deposit\n";
       if ( $this->GetDueDate() )            $message .=" -- Due Date\n";
       if ( $this->GetFineLevel() )          $message .=" -- Fine Level\n";
       if ( $this->GetFingerprint() )        $message .=" -- Fingerprint\n";
       if ( $this->GetFloating() )           $message .=" -- Floating\n";
       if ( $this->GetInHouseUse() )         $message .=" -- In House Use\n";
       if ( $this->GetHolds())               $message .=" -- Hold Count\n";
       if ( $this->GetISBN() )               $message .=" -- ISBN\n";
       if ( $this->GetLastFYCirc() )         $message .=" -- Last FY Circ\n";
       if ( $this->GetLoanDuration() )       $message .=" -- Loan Duration\n";
       if ( $this->GetOCLCNumber() )         $message .=" -- OCLC Number\n";
       if ( $this->GetOtherLibraryCount() )  $message .=" -- Other Library Copy Count\n";
       if ( $this->GetOwningLib() )          $message .=" -- Owning Library\n";
       if ( $this->GetPrice() )              $message .=" -- Price\n";
       if ( $this->GetPublicNote() )         $message .=" -- Public Note\n";
       if ( $this->GetPublisher() )          $message .=" -- Publisher\n";
       if ( $this->GetReference() )          $message .=" -- Reference\n";
       if ( $this->GetStaffNote() )          $message .=" -- Staff Note\n";
       if ( $this->GetStatCat() )            $message .=" -- Stat Cats\n";
       if ( $this->GetSummary() )            $message .=" -- Summary\n";
       if ( $this->GetYTDCircs() )           $message .=" -- YTD Circs\n";
       
       if ($include_link)
       {
          if (is_array($this->output_filename))
          {
             foreach($this->output_filename as $file)
             {
                 $message .= "Download CSV ".$file."\n";
             }
          }
          else 
          {
             $message .= "Download Spreadsheet ".$this->output_filename."\n";
          }
       }
       
       return $message; 
      
   }
   
   function GetHTMLText()
   {
       $html_out ="<div class=\"output_block\">";
       $html_out .= "<h3>Spreadsheet</h3>";
       
       $html_out .= "<div class=\"out_params\">";
       
       if ($this->GetAuthorSort())$html_out .="Sorted By: Author <br />";
       else if ($this->GetActiveDateSort())$html_out .="Sorted By: Active Date <br />";
       else if ($this->GetCallNumSort())$html_out .="Sorted By: Call Number <br />";
       else if ($this->GetLifetimeCircSort())$html_out .="Sorted By: Lifetime Circs <br />";
       else if ($this->GetTitleSort())$html_out .="Sorted By: Title <br />";
       else if ($this->GetYTDCircSort())$html_out .="Sorted By: YTD Circs <br />";
       
       if ($this->GetCSVFormat())$html_out .="Format: CSV<br />";
       else if ($this->GetExcelFormat())$html_out .="Format: Excel<br />";
       
       if ($this->GetSummarySheet())$html_out .="Summary Included<br />";
       if ($this->GetSingleSheet())$html_out .="Single Sheet<br />";;
       if ($this->GetBibSheet())$html_out .="Bib Sheet<br />";
       
       $html_out .="</div>";
       
       $html_out .= "<div class=\"display_params\">";
       $html_out .= "<span class=\"display_text\">Display Options:</span>";
       
       $html_out .= "<ul>";
       if ( $this->GetCallPrefix() )         $html_out .="<li>Call Number Prefix</li>";
       if ( $this->GetCallNumber() )         $html_out .="<li>Call Number</li>";
       if ( $this->GetCallSuffix() )         $html_out .="<li>Call Number Suffix</li>";
       if ( $this->GetPart() )               $html_out .="<li>Part</li>";
       if ( $this->GetTitle() )              $html_out .="<li>Title</li>";
       if ( $this->GetAuthor() )             $html_out .="<li>Author</li>";
       if ( $this->GetBarcode() )            $html_out .="<li>Barcode</li>";
       if ( $this->GetBibId() )              $html_out .="<li>Bib Id</li>";
       if ( $this->GetLastCheckin() )        $html_out .="<li>Last Checkin</li>";
       if ( $this->GetLifetimeCirc() )       $html_out .="<li>Lifetime Circs</li>";
       if ( $this->GetOnlyHolder() )         $html_out .="<li>Only Holder</li>";
       if ( $this->GetPubYear() )            $html_out .="<li>Pub Year</li>";
       if ( $this->GetAcqCost() )            $html_out .="<li>Acquisitions Cost</li>";
       if ( $this->GetActiveDate() )         $html_out .="<li>Active Date</li>";
       if ( $this->GetAgeProtection() )      $html_out .="<li>Age Protection</li>";
       if ( $this->GetAlertMessage() )       $html_out .="<li>Alert Message</li>";
       if ( $this->GetAmazonDirect() )       $html_out .="<li>Amazon Direct</li>";
       if ( $this->GetAmazonSearch() )       $html_out .="<li>Amazon Search</li>";
       if ( $this->GetCallClass() )          $html_out .="<li>Call Number Class</li>";
       if ( $this->GetCallSortKey() )        $html_out .="<li>Call Number Sort Key</li>";
       if ( $this->GetCatalogLink() )        $html_out .="<li>Catalog Link</li>";
       if ( $this->GetTitleCatalogLink() )   $html_out .="<li>Title Catalog Link</li>";
       if ( $this->GetCircModifier() )       $html_out .="<li>Circ Modifier</li>";
       if ( $this->GetCircLib() )            $html_out .="<li>Circ Library</li>";
       if ( $this->GetCircsBetween() )       $html_out .="<li>Circs Between</li>";
       if ( $this->GetCopyId() )             $html_out .="<li>Copy Id</li>";
       if ( $this->GetCopyLocation() )       $html_out .="<li>Copy Location</li>";
       if ( $this->GetCopyStatus() )         $html_out .="<li>Copy Status</li>";
       if ( $this->GetStatChange() )         $html_out .="<li>Last Status Change</li>";
       if ( $this->GetDeposit() )            $html_out .="<li>Deposit</li>";
       if ( $this->GetDueDate() )            $html_out .="<li>Due Date</li>";
       if ( $this->GetFineLevel() )          $html_out .="<li>Fine Level</li>";
       if ( $this->GetFingerprint() )        $html_out .="<li>Fingerprint</li>";
       if ( $this->GetFloating() )           $html_out .="<li>Floating</li>";
       if ( $this->GetInHouseUse() )         $html_out .="<li>In House Use</li>";
       if ( $this->GetHolds())               $html_out .="<li>Hold Count</li>";
       if ( $this->GetISBN() )               $html_out .="<li>ISBN</li>";
       if ( $this->GetLastFYCirc() )         $html_out .="<li>Last FY Circ</li>";
       if ( $this->GetLoanDuration() )       $html_out .="<li>Loan Duration</li>";
       if ( $this->GetOCLCNumber() )         $html_out .="<li>OCLC Number</li>";
       if ( $this->GetOtherLibraryCount() )  $html_out .="<li>Other Library Copy Count</li>";
       if ( $this->GetOwningLib() )          $html_out .="<li>Owning Library</li>";
       if ( $this->GetPrice() )              $html_out .="<li>Price</li>";
       if ( $this->GetPublicNote() )         $html_out .="<li>Public Note</li>";
       if ( $this->GetPublisher() )          $html_out .="<li>Publisher</li>";
       if ( $this->GetReference() )          $html_out .="<li>Reference</li>";
       if ( $this->GetStaffNote() )          $html_out .="<li>Staff Note</li>";
       if ( $this->GetStatCat() )            $html_out .="<li>Stat Cats</li>";
       if ( $this->GetSummary() )            $html_out .="<li>Summary</li>";
       if ( $this->GetYTDCircs() )           $html_out .="<li>YTD Circs</li>";
       
       $html_out .= "</ul>";
       $html_out .="</div></div>";
       return $html_out; 
      
   }
   
   function WriteBibSheet($objSheet, $bib_list) 
   {
      $objSheet->setTitle("Bibs");
      
      $next_col =  'A';
		
		//create all the headers
		if ( $this->GetTitle() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Title');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}

		if ( $this->GetAuthor() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Author');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetBibId() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Bib Id');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetPubYear() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Pub Year');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetAmazonDirect() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Amazon Direct');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetAmazonSearch() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Amazon Search');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCatalogLink() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Catalog Link');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCoverImage() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Cover Image');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetGoodreads() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Goodreads Link');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetHolds() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Hold - My System');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
			
			$objSheet->getCell($next_col.'1')->setValue('Hold - Other Lib');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetISBN() )
		{
			$objSheet->getCell($next_col.'1')->setValue('ISBN');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetNovelist() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Novelist Link');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetOCLCNumber() )
		{
			$objSheet->getCell($next_col.'1')->setValue('OCLC Number');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetOtherLibraryCount() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Other Library Count');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetPublisher() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Publisher');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetSummary() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Summary');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		$objSheet->getCell($next_col.'1')->setValue('Num. Copies');
		$objSheet->getColumnDimension($next_col)->setAutoSize(true);
		$next_col++;
			
		$objSheet->getCell($next_col.'1')->setValue('Total Circs');
		$objSheet->getColumnDimension($next_col)->setAutoSize(true);
		$next_col++;
		
		$objSheet->getCell($next_col.'1')->setValue('Circs Per Item');
		$objSheet->getColumnDimension($next_col)->setAutoSize(true);
		$next_col++;
		
		if ( $this->GetCircsBetween() )
		{
		   $start =  date("m/d/Y", strtotime($this->circ_start));
         $end = date("m/d/Y", strtotime($this->circ_end));
         $objSheet->getCell($next_col.'1')->setValue('Circs '.$start." to ".$end);
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
			
         $objSheet->getCell($next_col.'1')->setValue('Circs per item '.$start." to ".$end);
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		
		$last_col = $next_col;
		$last_col--;
		
		echo "Bib Sheet last_col = ".$last_col."\n";
		
		$objSheet->getStyle('A1:'.$last_col.'1')->getFont()->setBold(true)->setSize(12);
		
		$row = 2;
		
		$count = 0;
		
		foreach($bib_list->multiple_copy_recs as $curr_bib)
		{
		   $col = 'A';
		   
		   if($this->use_bib_sheet_limit && $count > $this->bib_sheet_limit) break;
			
			if ( $this->GetTitle() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				if($this->GetTitleCatalogLink())
				{
					$objSheet->setCellValue($cell_num,  $curr_bib->GetTitle());
					$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
					$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
					$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetCatalogLink());
					$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." in Catalog");
				}
				else
				{
					$objSheet->setCellValue($cell_num, $curr_bib->GetTitle());
				}
				
				$col++;
			}
			
			if ( $this->GetAuthor() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetAuthor());
				$col++;
			}
			
			if ( $this->GetBibId() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetBibId());
				$col++;
			}
			
			if ( $this->GetPubYear() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetPubYearForDisplay());
				$col++;
			}
			
			if ( $this->GetAmazonDirect() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				
				if ($curr_bib->GetAmazonDirect())
				{
				
					$objSheet->setCellValue($cell_num, "Amazon Link");
					$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
					$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
					$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetAmazonDirect());
					$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." on Amazon");
				}
				$col++;
			}
	
			if ( $this->GetAmazonSearch() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, "Amazon Search");
				$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
				$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
				$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetAmazonSearch());
				$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("Search ".$curr_bib->GetTitleForTooltip()." on Amazon");
				$col++;
			}
			
			if ( $this->GetCatalogLink() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				
				$objSheet->setCellValue($cell_num, "View in Catalog");
				$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
				$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
				$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetCatalogLink());
				$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." in Catalog");
		
				$col++;
			}
			
			if ( $this->GetCoverImage() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				
				$objSheet->setCellValue($cell_num, "View Cover Image");
				$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
				$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
				$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetCoverImage());
				$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." Cover Image");
		
				$col++;
			}
			
			if ( $this->GetGoodreads() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				if ($this->GetGoodreads() )
				{
				
					$objSheet->setCellValue($cell_num, "View on Goodreads");
					$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
					$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
					$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetGoodreadsLink());
					$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." on Goodreads");
				}
				$col++;
			}
			
			if ( $this->GetHolds() )
         {
            $cell_num= sprintf("%s%d", $col, $row);
            $objSheet->setCellValue($cell_num,  $curr_bib->GetMyHolds());
            $col++;
            
            $cell_num= sprintf("%s%d", $col, $row);
            $objSheet->setCellValue($cell_num, $curr_bib->GetOtherHolds());
            $col++;
         }
			
			
			if ( $this->GetISBN() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValueExplicit($cell_num,  $curr_bib->GetISBN(",  "), PHPExcel_Cell_DataType::TYPE_STRING);
				$col++;
			}
			
			if ( $this->GetNovelist() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				if ( $this->GetNovelist() )
				{
					$objSheet->setCellValue($cell_num, "View on Novelist");
					$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
					$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
					$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetNovelistLink());
					$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." on Novelist");
				}
				$col++;
			}
  
			if ( $this->GetOCLCNumber() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetOCLCNumber());
				$col++;
			}
			
			if ( $this->GetOtherLibraryCount() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetOtherLibraryCount());
				$col++;
			}
			
			if ( $this->GetPublisher() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetPublisher());
				$col++;
			}
			
			if ( $this->GetSummary() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetSummary());
				//$objPHPExcel->getActiveSheet()->getStyle($cell_num)->getAlignment()->setWrapText(true);
				$col++;
			}
			
			
			$cell_num= sprintf("%s%d", $col, $row);
			$objSheet->setCellValue($cell_num, $curr_bib->GetCopyCount());
			$col++;
			
	
			$cell_num= sprintf("%s%d", $col, $row);
			$objSheet->setCellValue($cell_num, $curr_bib->GetTotalCircs());
			$col++;
			
			$cell_num= sprintf("%s%d", $col, $row);
			$objSheet->setCellValue($cell_num, $curr_bib->GetCircsPerCopy());
			$col++;
		
		   if ( $this->GetCircsBetween() )
		   {
			 	$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetCircsBetween());
				$col++;
				
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetCircsBetweenPerCopy());
				$col++;
	   	}
			
			$row++;
			
			$count++;
		}//end for each bib 
		
		// create some borders
      // first, create the whole grid around the table
      $objSheet->getStyle()->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
   
      // create a medium border on the header line
      $objSheet->getStyle('A1:'.$last_col.'1')->getBorders()-> getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_MEDIUM);
      
   }

	function WriteSummarySheet($objSheet, $bib_list) 
	{
		//Counts of Total Copies, Bibs, and Circulations, 
		//Median, Mean, Mode, Min, and Max date will also be included for Circ Counts and Publication Date. 
		//Turnover also included.

	
		//write out all the stuff on the summart sheet
		$objSheet->setTitle("Summary");
	
		//$objSheet->getColumnDimension('A')->setAutoSize(true);
		$objSheet->getColumnDimension('B')->setAutoSize(true);
		//$objSheet->getColumnDimension('C')->setAutoSize(true);
	
		$objSheet->getColumnDimension('G')->setAutoSize(true);
		$objSheet->getColumnDimension('H')->setAutoSize(true);
		//DOnt size E it's just numbers
		//$objSheet->getColumnDimension('E')->setAutoSize(true);
	
		//COUNTS
		$objSheet->getStyle('A1')->getFont()->setBold(true)->setSize(12);
		$objSheet->getCell('A1')->setValue($bib_list->GetLibrary().' -- PHYSICAL');
		
		// create a medium border on the header line
      $objSheet->getStyle('A1:E1')->getBorders()-> getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_MEDIUM);
	
		$objSheet->getStyle('A2')->getFont()->setBold(true)->setSize(12);
		$objSheet->getCell('A2')->setValue('Counts');
	
		//Count of Bibs
		$objSheet->getCell('A3')->setValue('Bib Count');
		$objSheet->getCell('B3')->setValue($bib_list->GetNumBibs());
  
		//Count of Copies
		$objSheet->getCell('A4')->setValue('Copy Count');
		$objSheet->getCell('B4')->setValue($bib_list->GetNumCopies());

		//Count of Circs
		$objSheet->getCell('A5')->setValue('Circ Count');
		$objSheet->getCell('B5')->setValue($bib_list->GetNumCircs());
	
		//Pub Year
		$objSheet->getStyle('A7')->getFont()->setBold(true)->setSize(12);
		$objSheet->getCell('A7')->setValue('Pub Year');
	
		//Median
		$objSheet->getCell('A8')->setValue('Median');
		$objSheet->getCell('B8')->setValue($bib_list->GetMedianPubYear());

		//Mean
		$objSheet->getCell('A9')->setValue('Mean');
		$objSheet->getCell('B9')->setValue($bib_list->GetMeanPubYear());

		//Mode
		$objSheet->getCell('A10')->setValue('Mode');
		$objSheet->getCell('B10')->setValue($bib_list->GetModePubYear());
	
		//Max
		$objSheet->getCell('A11')->setValue('Max');
		$objSheet->getCell('B11')->setValue($bib_list->GetMaxPubYear());
	
		//Min
		$objSheet->getCell('A12')->setValue('Min');
		$objSheet->getCell('B12')->setValue($bib_list->GetMinPubYear());
	
		//Excluded
		$objSheet->getCell('A13')->setValue('Excluded');
		$objSheet->getCell('B13')->setValue($bib_list->GetExcludedPubYears());
	
		//Circs
		$objSheet->getStyle('D7')->getFont()->setBold(true)->setSize(12);
		$objSheet->getCell('D7')->setValue('Circs');
	
		//Median
		$objSheet->getCell('D8')->setValue('Median');
		$objSheet->getCell('E8')->setValue($bib_list->GetMedianCircCount());
  
		//Mean
		$objSheet->getCell('D9')->setValue('Mean');
		$objSheet->getCell('E9')->setValue($bib_list->GetMeanCircCount());

		//Mode
		$objSheet->getCell('D10')->setValue('Mode');
		$objSheet->getCell('E10')->setValue($bib_list->GetModeCircCount());
	
		//Max
		$objSheet->getCell('D11')->setValue('Max');
		$objSheet->getCell('E11')->setValue($bib_list->GetMaxCircCount());
	
		//Min
		$objSheet->getCell('D12')->setValue('Min');
		$objSheet->getCell('E12')->setValue($bib_list->GetMinCircCount());
	
		//explanations
		$objSheet->getStyle('G7')->getFont()->setBold(true)->setSize(12);
		$objSheet->getCell('G7')->setValue('Definitions');
	
		$objSheet->getCell('G8')->setValue('Median');
		$objSheet->getCell('H8')->setValue('Middle number in the sequence.');
	
		$objSheet->getCell('G9')->setValue('Mean');
		$objSheet->getCell('H9')->setValue('Average of all the values.');
	 
		$objSheet->getCell('G10')->setValue('Mode');
		$objSheet->getCell('H10')->setValue('Number that appears most often.');
	
		$objSheet->getCell('G11')->setValue('Max');
		$objSheet->getCell('H11')->setValue('Highest Value.');
	
		$objSheet->getCell('G12')->setValue('Min');
		$objSheet->getCell('H12')->setValue('Lowest Value.');
	
		$objSheet->getCell('G13')->setValue('Excluded');
		$objSheet->getCell('H13')->setValue('Non-numeric or no publication date.');
	
		//Turnover
		$objSheet->getStyle('A15')->getFont()->setBold(true)->setSize(12);
		$objSheet->getCell('A15')->setValue('Turnover');
		$objSheet->getCell('B15')->setValue($bib_list->GetTurnoverRate());
	
		if($this->GetCircsBetween())
		{
		   $start =  date("m/d/Y", strtotime($this->GetCircsBetweenStart()));
         $end = date("m/d/Y", strtotime($this->GetCircsBetweenEnd()));
         $objSheet->getStyle('D3')->getFont()->setBold(true)->setSize(12);
		   $objSheet->getCell('D3')->setValue("Circs ".$start." to ".$end);
		   $objSheet->getCell('E3')->setValue($bib_list->GetNumCircsBetween());
		   
		   $objSheet->getColumnDimension('D')->setAutoSize(true);
		}
		
		$next_row = 18;
		

		if ($bib_list->HasOnlineRecs())
		{
			$objSheet->getStyle('A18')->getFont()->setBold(true)->setSize(12);
			$objSheet->getCell('A18')->setValue($bib_list->GetLibrary().' -- ELECTRONIC');
			
			// create a medium border on the header line
         $objSheet->getStyle('A18:E18')->getBorders()-> getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_MEDIUM);
	
			$objSheet->getStyle('A19')->getFont()->setBold(true)->setSize(12);
			$objSheet->getCell('A19')->setValue('Counts');
	
			//Count of Bibs
			$objSheet->getCell('A20')->setValue('Bib Count');
			$objSheet->getCell('B20')->setValue($bib_list->GetNumOnlineBibs());
		
			//Count of Bibs
			$objSheet->getCell('A21')->setValue('Link Count');
			$objSheet->getCell('B21')->setValue($bib_list->GetNumOnlineLinks());
		
			//Pub Year
			$objSheet->getStyle('A23')->getFont()->setBold(true)->setSize(12);
			$objSheet->getCell('A23')->setValue('Pub Year');
	
			//Median
			$objSheet->getCell('A24')->setValue('Median');
			$objSheet->getCell('B24')->setValue($bib_list->GetOnlineMedianPubYear());

			//Mean
			$objSheet->getCell('A25')->setValue('Mean');
			$objSheet->getCell('B25')->setValue($bib_list->GetOnlineMeanPubYear());

			//Mode
			$objSheet->getCell('A26')->setValue('Mode');
			$objSheet->getCell('B26')->setValue($bib_list->GetOnlineModePubYear());
	
			//Max
			$objSheet->getCell('A27')->setValue('Max');
			$objSheet->getCell('B27')->setValue($bib_list->GetOnlineMaxPubYear());
	
			//Min
			$objSheet->getCell('A28')->setValue('Min');
			$objSheet->getCell('B28')->setValue($bib_list->GetOnlineMinPubYear());
	
			//Excluded
			$objSheet->getCell('A29')->setValue('Excluded');
			$objSheet->getCell('B29')->setValue($bib_list->GetOnlineExcludedPubYears());
			
			$next_row = 32;
		}
		
		
		if($bib_list->GetNumBranches() > 1)
		{
		   foreach ($bib_list->one_bib_one_copy_recs as $curr_lib)
		   {
		      
		      //get all the Summary information for the all inindividual branches and write out 
		      //COUNTS
				$objSheet->getStyle('A'.$next_row)->getFont()->setBold(true)->setSize(12);
				$objSheet->getCell('A'.$next_row)->setValue($curr_lib->GetShortname().' -- PHYSICAL');
				// create a medium border on the header line
            $objSheet->getStyle('A'.$next_row.':E'.$next_row)->getBorders()-> getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_MEDIUM);
				
				$next_row++;
	
				$objSheet->getStyle('A'.$next_row)->getFont()->setBold(true)->setSize(12);
				$objSheet->getCell('A'.$next_row)->setValue('Counts');
				$next_row++;
	
				//Count of Bibs
				$objSheet->getCell('A'.$next_row)->setValue('Bib Count');
				$objSheet->getCell('B'.$next_row)->setValue($curr_lib->GetNumBibs());
				
				if($this->GetCircsBetween())
				{
					$start =  date("m/d/Y", strtotime($this->GetCircsBetweenStart()));
					$end = date("m/d/Y", strtotime($this->GetCircsBetweenEnd()));
					$objSheet->getStyle('D'.$next_row)->getFont()->setBold(true)->setSize(12);
					$objSheet->getCell('D'.$next_row)->setValue("Circs ".$start." to ".$end);
					$objSheet->getCell('E'.$next_row)->setValue($curr_lib->GetNumCircsBetween());
			
					$objSheet->getColumnDimension('D')->setAutoSize(true);
				}
				
				$next_row++;
  
				//Count of Copies
				$objSheet->getCell('A'.$next_row)->setValue('Copy Count');
				$objSheet->getCell('B'.$next_row)->setValue($curr_lib->GetNumCopies());
				$next_row++;

				//Count of Circs
				$objSheet->getCell('A'.$next_row)->setValue('Circ Count');
				$objSheet->getCell('B'.$next_row)->setValue($curr_lib->GetNumCircs());
				$next_row+=2;
	
				//Pub Year
				$objSheet->getStyle('A'.$next_row)->getFont()->setBold(true)->setSize(12);
				$objSheet->getCell('A'.$next_row)->setValue('Pub Year');
				//Circs
				$objSheet->getStyle('D'.$next_row)->getFont()->setBold(true)->setSize(12);
				$objSheet->getCell('D'.$next_row)->setValue('Circs');
				$next_row++;
				
	
				//Median
				$objSheet->getCell('A'.$next_row)->setValue('Median');
				$objSheet->getCell('B'.$next_row)->setValue($curr_lib->GetMedianPubYear());
				//Median
				$objSheet->getCell('D'.$next_row)->setValue('Median');
				$objSheet->getCell('E'.$next_row)->setValue($bib_list->GetMedianCircCount());
				$next_row++;

				//Mean
				$objSheet->getCell('A'.$next_row)->setValue('Mean');
				$objSheet->getCell('B'.$next_row)->setValue($curr_lib->GetMeanPubYear());
				//Mean
				$objSheet->getCell('D'.$next_row)->setValue('Mean');
				$objSheet->getCell('E'.$next_row)->setValue($curr_lib->GetMeanCircCount());
				$next_row++;


				//Mode
				$objSheet->getCell('A'.$next_row)->setValue('Mode');
				$objSheet->getCell('B'.$next_row)->setValue($curr_lib->GetModePubYear());
				//Mode
				$objSheet->getCell('D'.$next_row)->setValue('Mode');
				$objSheet->getCell('E'.$next_row)->setValue($curr_lib->GetModeCircCount());
				$next_row++;
	
				//Max
				$objSheet->getCell('A'.$next_row)->setValue('Max');
				$objSheet->getCell('B'.$next_row)->setValue($curr_lib->GetMaxPubYear());
				//Max
				$objSheet->getCell('D'.$next_row)->setValue('Max');
				$objSheet->getCell('E'.$next_row)->setValue($curr_lib->GetMaxCircCount());
				$next_row++;
				
	
				//Min
				$objSheet->getCell('A'.$next_row)->setValue('Min');
				$objSheet->getCell('B'.$next_row)->setValue($curr_lib->GetMinPubYear());
				//Min
				$objSheet->getCell('D'.$next_row)->setValue('Min');
				$objSheet->getCell('E'.$next_row)->setValue($curr_lib->GetMinCircCount());
				$next_row++;
	
				//Excluded
				$objSheet->getCell('A'.$next_row)->setValue('Excluded');
				$objSheet->getCell('B'.$next_row)->setValue($curr_lib->GetExcludedPubYears());
				$next_row +=2;
	
				//Turnover
				$objSheet->getStyle('A'.$next_row)->getFont()->setBold(true)->setSize(12);
				$objSheet->getCell('A'.$next_row)->setValue('Turnover');
				$objSheet->getCell('B'.$next_row)->setValue($curr_lib->GetTurnoverRate());
				
				$next_row +=3;
	
		   }
		}
		   
	}
	
	function WriteOnlineRecs($objSheet, $bib_list, $lib_name)
	{
	   $title = "Online Items";
      // rename the sheet
      $objSheet->setTitle($title);
         
		$next_col =  'A';
		
		//create all the headers
		if ( $this->GetTitle() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Title');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}

		if ( $this->GetAuthor() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Author');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetBibId() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Bib Id');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetPubYear() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Pub Year');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetAmazonDirect() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Amazon Direct');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetAmazonSearch() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Amazon Search');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCatalogLink() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Catalog Link');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetCoverImage() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Cover Image');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetGoodreads() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Goodreads Link');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetISBN() )
		{
			$objSheet->getCell($next_col.'1')->setValue('ISBN');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetNovelist() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Novelist Link');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetOCLCNumber() )
		{
			$objSheet->getCell($next_col.'1')->setValue('OCLC Number');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetPublisher() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Publisher');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		if ( $this->GetSummary() )
		{
			$objSheet->getCell($next_col.'1')->setValue('Summary');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
			$next_col++;
		}
		
		$objSheet->getCell($next_col.'1')->setValue('Link Text');
		$objSheet->getColumnDimension($next_col)->setAutoSize(true);
		$next_col++;
			
		$objSheet->getCell($next_col.'1')->setValue('Resource Link');
		$objSheet->getColumnDimension($next_col)->setAutoSize(true);
		$next_col++;
		
		if ($lib_name == "NOBLE")
		{
			$objSheet->getCell($next_col.'1')->setValue('Owning Library');
			$objSheet->getColumnDimension($next_col)->setAutoSize(true);
		}
		
		$last_col = $next_col;
		$last_col--;
		
		echo "Online last_col = ".$last_col."\n";
		
		$objSheet->getStyle('A1:'.$last_col.'1')->getFont()->setBold(true)->setSize(12);
		
		//write out all the data
		$row = 2;
		
		foreach($bib_list->online_recs as $curr_bib)
		{
			$col = 'A';
			
			if ( $this->GetTitle() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				if($this->GetTitleCatalogLink())
				{
					$objSheet->setCellValue($cell_num,  $curr_bib->GetTitle());
					$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
					$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
					$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetCatalogLink());
					$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." in Catalog");
				}
				else
				{
					$objSheet->setCellValue($cell_num, $curr_bib->GetTitle());
				}
				
				$col++;
			}
			
			if ( $this->GetAuthor() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetAuthor());
				$col++;
			}
			
			if ( $this->GetBibId() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetBibId());
				$col++;
			}
			
			if ( $this->GetPubYear() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetPubYearForDisplay());
				$col++;
			}
			
			if ( $this->GetAmazonDirect() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				
				if ($curr_bib->GetAmazonDirect())
				{
				
					$objSheet->setCellValue($cell_num, "Amazon Link");
					$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
					$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
					$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetAmazonDirect());
					$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." on Amazon");
				}
				$col++;
			}
	
			if ( $this->GetAmazonSearch() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, "Amazon Search");
				$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
				$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
				$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetAmazonSearch());
				$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("Search ".$curr_bib->GetTitleForTooltip()." on Amazon");
				$col++;
			}
			
			if ( $this->GetCatalogLink() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				
				$objSheet->setCellValue($cell_num, "View in Catalog");
				$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
				$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
				$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetCatalogLink());
				$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." in Catalog");
		
				$col++;
			}
			
			if ( $this->GetCoverImage() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				
				$objSheet->setCellValue($cell_num, "View Cover Image");
				$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
				$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
				$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetCoverImage());
				$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." Cover Image");
		
				$col++;
			}
			
			if ( $this->GetGoodreads() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				if ($this->GetGoodreads() )
				{
				
					$objSheet->setCellValue($cell_num, "View on Goodreads");
					$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
					$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
					$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetGoodreadsLink());
					$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." on Goodreads");
				}
				$col++;
			}
			
			if ( $this->GetISBN() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValueExplicit($cell_num,  $curr_bib->GetISBN(",  "), PHPExcel_Cell_DataType::TYPE_STRING);
				$col++;
			}
			
			if ( $this->GetNovelist() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				if ( $this->GetNovelist() )
				{
					$objSheet->setCellValue($cell_num, "View on Novelist");
					$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
					$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
					$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetNovelistLink());
					$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip()." on Novelist");
				}
				$col++;
			}
  
			if ( $this->GetOCLCNumber() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetOCLCNumber());
				$col++;
			}
			
			if ( $this->GetPublisher() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetPublisher());
				$col++;
			}
			
			if ( $this->GetSummary() )
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetSummary());
				//$objPHPExcel->getActiveSheet()->getStyle($cell_num)->getAlignment()->setWrapText(true);
				$col++;
			}
			
			$cell_num= sprintf("%s%d", $col, $row);
			$objSheet->setCellValue($cell_num, $curr_bib->GetOnlineSubY());
			$col++;
			
			$cell_num= sprintf("%s%d", $col, $row);
			$objSheet->setCellValue($cell_num,  $curr_bib->GetOnlineSubU());
			$objSheet->getStyle($cell_num)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
			$objSheet->getStyle($cell_num)->getFont()->setUnderline(true);
	
			$objSheet->getCell($cell_num)->getHyperlink()->setUrl($curr_bib->GetOnlineSubU());
			$objSheet->getCell($cell_num)->getHyperlink()->setTooltip("View ".$curr_bib->GetTitleForTooltip());
			$col++;
			
			if ($lib_name == "NOBLE")
			{
				$cell_num= sprintf("%s%d", $col, $row);
				$objSheet->setCellValue($cell_num, $curr_bib->GetOnlineSub9());
				$col++;
			}
			
			$row++;
			
		}//end for each online bib
		
		 // create some borders
		// first, create the whole grid around the table
		$objSheet->getStyle()->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

		// create a medium border on the header line
		$objSheet->getStyle('A1:'.$last_col.'1')->getBorders()-> getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_MEDIUM);
		
	}
	
}  
  
?>