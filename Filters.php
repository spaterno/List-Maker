<?php

class Filters
{
    public $db;
    public $use_relative_dates;
    
    public $use_shelf_sitting;
    public $shelf_sitting_date;
    
    public $filter_by_pub_date;
    public $published_before;
    public $published_after;
    public $pub_date_type;
    
    public $filter_by_bib_file;
    public $filter_by_barcode_file;
    public $filter_by_isbn_file;
    public $input_filename;
    public $file_bibs; //array of bibd from file
    public $file_barcodes; //array of barcodes from file
    public $file_isbns; //array of isbns from file
    
    public $filter_by_added_date;
    public $added_date_before;
    public $added_date_after;
    public $added_date_type;
    
    //circ counts/dates
    public $filter_by_circ_date;
    public $circ_date_before;
    public $circ_date_after;
    public $circ_date_type;
    public $filter_by_circ_count;
    public $circ_count;
    public $circ_compare;
    
    public $filter_by_stat_cat;
    public $use_stat_cat_sql;
    public $stat_cats; 
    //public $stat_cat_entry; //array of stat cat entries
    //public $use_all_stat_entry;
    
    //Call number
    public $filter_by_call_num;
    public $call_class;
    
    public $use_call_contains;
    public $call_contains;
    
    public $use_call_range;
    public $call_range; //array of start/stop pairs
    
    public $filter_by_call_num_prefix;
    public $call_num_prefix; //array of prefixes
    
    public $filter_by_call_num_suffix;
    public $call_num_suffix; //array of suffixes
    
    public $filter_by_collection_topic;
    public $collection_topic_names;
    
    public $filter_by_bisac;
    public $bisac_category;
    
    public $filter_by_circ_mod;
    public $circ_mod; //array of circ mod
     
    public $filter_by_status;
    public $status;//array of statuses
    
    public $filter_by_status_change;
    public $last_status_before;
    public $last_status_after;
    public $last_status_type;
    
    public $filter_by_only_holder;
    public $only_holder_option; //true or false
    
    public $active_items;
    public $deleted_items;
    public $filter_by_deleted_date;
    public $deleted_date_type;
    public $deleted_date_after;
    public $deleted_date_before;
    
    public $physical_items;
    public $electronic_items;
    
    public $use_all_copy_locations;
    public $copy_locations; //array of copy locations
    public $use_copy_location_group;
    public $copy_location_group_id;
    
    public $library_id;
    public $library_shortname;
    public $system_name;
    public $domain;
    public $scope;
    public $search_links;
    
    public $scheduled; //indicates if this report is scheduled 
    public $collection; //indicates if this is a colelction report
    
    function __construct() 
    {
       $this->use_relative_dates = false;
       
       $this->use_shelf_sitting = false; 
       $this->shelf_sitting_date = "";
       
       $this->filter_by_pub_date = false;
       $this->published_before = "";
       
       $this->filter_by_bib_file = false;
       $this->filter_by_barcode_file = false;
       $this->filter_by_isbn_file = false;
       $this->input_filename = "";
       $this->file_bibs = array();
       $this->file_barcodes = array();
       $this->file_isbns = array();
       
       $this->filter_by_added_date = false; 
       $this->added_date_after = "";
       $this->added_date_before= "";
       $this->added_date_type = "";
       
       $this->filter_by_circ_date = false; 
       $this->circ_date_after = "";
       $this->circ_date_before= "";
       $this->circ_date_type = "";
       
       $this->filter_by_circ_count = false; 
       $this->circ_count = -1;
       $this->circ_compare = "";
       
       $this->filter_by_stat_cat = false;
       $this->use_stat_cat_sql = false;
       $this->stat_cats = array(); 
       //$this->stat_cat_entry = array();
       //$this->use_all_stat_entry = false;
       
       $this->filter_by_call_num = false;
       $this->call_class =-1;
    
       $this->use_call_contains = false;
       $this->call_contains = "";
    
       $this->use_call_range = false;
       $this->call_range = array(); 
       
       $this->filter_by_collection_topic = false;
       $this->collection_topic_names = array();
       
       $this->filter_by_circ_mod = false;
       $this->circ_mod = array();
    
       $this->filter_by_call_num_prefix = false;
       $this->call_num_prefix = array() ;
    
       $this->filter_by_call_num_suffix = false;
       $this->call_num_suffix = array();
       
       $this->filter_by_bisac = false;
       $this->bisac_category = array();
    
       $this->filter_by_status = false;
       $this->status = array();
       
       $this->filter_by_status_changed = false;
       $this->last_status_type = "";
       $this->last_status_after = "";
       $this->last_status_before = "";
       
       $this->filter_by_only_holder = false;
       
       $this->use_all_copy_locations = false;
       $this->copy_locations = array();
       $this->use_copy_location_group = false;
       $this->copy_location_group_id = -1;
       
       $this->deleted_items = false;
       $this->active_items = true;
       $this->filter_by_deleted_date = false;
       $this->deleted_date_type = "";
       $this->deleted_date_after = "";
       $this->deleted_date_before = "";
    
       $this->physical_items = true;
       $this->electronic_items = false;
    
       $this->library_id = -1;
       $this->library_name = "";
       $this->system_name = "";
       $this->domain = "evergreen";
       $this->scope = 1;
       
       $this->search_links = false;
       
       $this->scheduled = false;
       $this->collection = false;
    }
   
    function __destruct()
    {
       unset($this->call_range);
       unset($this->call_num_prefix);
       unset($this->call_num_suffix);
       unset($this->collection_topic_names);
       unset($this->bisac_category);
       unset($this->circ_mod);
       unset($this->copy_locations);
       unset($this->file_bibs);
       unset($this->stat_cat_entry);
       unset($this->status);
       unset($this->file_bibs);
       unset($this->file_barcodes);
       unset($this->file_isbns);
    }
    
    function SetDB($db)
    {
       $this->db = $db;
    }
    
    function SetRelativeDates()
    {
       $this->use_relative_dates = true;
    }
    
    function SetShelfSitter($date)
    {
       $this->use_shelf_sitting = true;
       $this->shelf_sitting_date = $date;
       $this->SetFilterByDeleted('active_only');
    }
    
    function SetShelfSitterRelative($timeframe)
    {
       $this->use_shelf_sitting = true;
       $this->SetFilterByDeleted('active_only');
       $timeframe = str_replace("_", " ", $timeframe);
       
       if ($this->use_relative_dates) 
       {
          $this->shelf_sitting_date = $timeframe;
       }
       else
       {
          $today = date("y-m-d");
          $this->shelf_sitting_date = date("Y-m-d", strtotime($today."-".$timeframe)); //start 
       }
    }
    
    function GetUseShelfSitter()
    {
       return $this->use_shelf_sitting;
    }
    
    function GetShelfSitter()
    {
       if ($this->use_shelf_sitting)
       {
          if ($this->use_relative_dates) return $this->shelf_sitting_date;
          else return  date("m/d/Y", strtotime($this->shelf_sitting_date));
       }
       else 
       {
          return false;
       }
    }
    
    function ExcludeRecByCheckinDate($checkin, $active_date)
    {
       if($this->use_shelf_sitting)
       {
          if (date('Y-m-d', strtotime($active_date)) > date('Y-m-d', strtotime($this->shelf_sitting_date)) )
          {
             //this item didn't exist so exclude
             //echo "InExcludeByCheckin: excluded by active date ".date('Y-m-d', strtotime($active_date)).">".strtotime($this->shelf_sitting_date)."\n";
             return true;
          }
          
          if ($checkin == "Before 2000")
          {
             return false;
          }
       
          if ( date('Y-m-d', strtotime($checkin)) > date('Y-m-d',strtotime($this->shelf_sitting_date)) ) 
          {
             //echo "InExcludeByCheckin: excluded by checkin date ".date('Y-m-d', strtotime($checkin))."<". date('Y-m-d',strtotime($this->shelf_sitting_date))."\n";
             return true;
          }
          else return false;
       }
       else
       {
          return false;
       }
    }
    
    function SetFilterByPubDate($type, $after, $before, $relative=false)
    {
       $this->filter_by_pub_date = true;
       $this->pub_date_type = $type;
       
       if ($relative)
       {
          $today = date("Y-m-d");
                       
          if($before)
          {
             $timeframe = str_replace("_", " ", $after);
             $after = date("Y", strtotime($today."-".$timeframe)); 
          }
          
          if ($after)       
          {
             $timeframe = str_replace("_", " ", $after);
             $after = date("Y", strtotime($today."-".$timeframe));  
          }
       }

       if ($before) $this->published_before = $before;
       if ($after) $this->published_after = $after; 
       
    }
    
    function GetFilterByPubDate()
    {
       return  $this->filter_by_pub_date;
    }
    
    function GetPubDateType()
    {
       return $this->pub_date_type;
    }
    
    function GetPubDateBefore()
    {
       return  $this->published_before;
    }
    
     function GetPubDateAfter()
    {
       return  $this->published_after;
    }
    
    function GetFilterByPubDateText()
    {
       $out = "";
       
       if ($this->pub_date_type == "before") $out = "Before = ".$this->published_before;
       else if ($this->pub_date_type == "after") $out = "After = ".$this->published_after;
       else if ($this->pub_date_type == "between") $out = "Between = ".$this->published_after."-".$this->published_before;
       return $out;
    }
    
    function ExcludeRecByPubDate($pub_date)
    {
       if($this->filter_by_pub_date)
       {
          if ($this->pub_date_type == "before")
          {
             if($pub_date > 0 && $pub_date < $this->published_before) return false;
             else return true;
          }
          else if ($this->pub_date_type == "after")
          {
             if($pub_date > 0 && $pub_date > $this->published_after) return false;
             else return true;
          }
          else if ($this->pub_date_type == "between")
          {
             if($pub_date > 0 && $pub_date <= $this->published_before && $pub_date >= $this->published_after) return false;
             else return true;
          }
          
       }
       else
       {
          return false;
       }
    }
    
    function SetFilterByBarcodeFile($type, $filename)
    {
       $this->filter_by_barcode_file = true;
       $this->input_filename = $filename;
       
       $filename_with_path = "/home/opensrf/list_upload/".$filename;
       $file = fopen($filename_with_path, 'r');
       
       if (!$file) return;
       
       if ($type == "csv")
       { 
          $barcode_idx = -1;
       
          while ( ($data = fgetcsv($file) ) !== FALSE ) 
          {
             if ($barcode_idx == -1)
             {
                for( $i=0; $i < count($data); $i++ )
                {
                   if (strcasecmp($data[$i],"barcode") == 0 )
                   {
                      $barcode_idx = $i;
                      continue;
                   }
                }
             }
             else
             {
                $this->file_barcodes[] = $data[$barcode_idx]; 
             }
          }
       }
       else if ($type == "text")
       {
          while (($line = fgets($file, 4096)) !== false)
          {
             $this->file_barcodes[] = trim($line);
          }
       }
               
    }
    
    function GetFilterByBarcodeFile()
    {
       if ($this->filter_by_barcode_file)
       {
          return  $this->input_filename;
       }
       else 
       {
          return false;
       }
    }
   
    function SetFilterByBibFile($type, $filename)
    {
       $this->filter_by_bib_file = true;
       $this->input_filename = $filename;
       
       $filename_with_path = "/home/opensrf/list_upload/".$filename;
       $file = fopen($filename_with_path, 'r');
       
       if (!$file) return;
       
       $bib_idx = -1;
       
       if ($type == "csv")
       {
			 while ( ($data = fgetcsv($file) ) !== FALSE ) 
			 {
				 if ($bib_idx == -1)
				 {
					 for( $i=0; $i < count($data); $i++ )
					 {
						 if ($data[$i] == "Document ID" || $data[$i] == "Record ID")
						 {
							 $bib_idx = $i;
							 continue;
						 }
					 }
				 }
				 else
				 {
					 $this->file_bibs[] = $data[$bib_idx]; 
				 }
			 }
       }
       else if ($type == "text")
       {
          while (($line = fgets($file, 4096)) !== false)
          {
             $this->file_bibs[] = trim($line);
          }
   
       }         
    }
    
    function GetFilterByBibFile()
    {
       if ($this->filter_by_bib_file)
       {
          return  $this->input_filename;
       }
       else 
       {
          return false;
       }
    }
    
    function SetFilterByISBNFile($type, $filename)
    {
       $this->filter_by_isbn_file = true;
       $this->input_filename = $filename;
       
       $filename_with_path = "/home/opensrf/list_upload/".$filename;
       $file = fopen($filename_with_path, 'r');
       
       if (!$file) return;
       
       $isbn_idx = -1;
       
       //for each isbn remove everythign after the space
       //remove any dashes
       //get the other version of it 10 or 13
       //add all to the isbn list
       
       if ($type == "csv")
       {
			 while ( ($data = fgetcsv($file) ) !== FALSE ) 
			 {
				 if ($isbn_idx == -1)
				 {
					 for( $i=0; $i < count($data); $i++ )
					 {
						 if ($data[$i] == "ISBN")
						 {
							 $isbn_idx = $i;
							 continue;
						 }
					 }
				 }
				 else
				 {
				    $test_isbn = trim(str_replace("-", "", $data[$isbn_idx]));
             
					 if(strlen($test_isbn) == 10)
					 {
						 $isbn10 = trim($test_isbn);
					 
						 //find isbn 13
						 $isbn13 = isbn10to13($isbn10);
					 }
					 else if (strlen($test_isbn) == 13)
					 {
						 $isbn13 = trim($test_isbn);
					 
						 //find isbn 10
						 $isbn10 = isbn13to10($isbn13);
					 }
					 else 
					 {
						 continue;
					 }
				 
					 $this->file_isbns[] = $isbn10;
					 $this->file_isbns[] = $isbn13;
				 }
			 }
       }
       else if ($type == "text")
       {
          while (($line = fgets($file, 4096)) !== false)
          {
             $line = str_replace("-", "", trim($line));
             $parts = explode(" ", $line);
             
             $test_isbn = trim($parts[0]);
                  
             if(strlen($test_isbn) == 10)
             {
                $isbn10 = $test_isbn;
                
                //find isbn 13
                $isbn13 = isbn10to13($isbn10);
             }
             else if (strlen($test_isbn) == 13)
             {
                $isbn13 = $test_isbn;
                
                //find isbn 10
                $isbn10 = isbn13to10($isbn13);
             }
             else 
             {
                continue;
             }
             
             $this->file_isbns[] = $isbn10;
             $this->file_isbns[] = $isbn13;
             
          }
       }  

       //after getting all the ISBNs find the bib numbers assocaited with them in metabib.real_full_record 020 $a     
         
       $isbn_string = "";
       $first = true;
       
       foreach($this->file_isbns as $curr_isbn)
       {
          if ($first)
          {
             $isbn_string .="value ilike '".$curr_isbn."%' ";
             $first = false;
          }
          else
          {
             $isbn_string .=" OR value ilike '".$curr_isbn."%' ";
          }
       }
       
		 $sql = "SELECT DISTINCT (record)
               FROM metabib.real_full_rec
               WHERE tag='020'
               AND subfield = 'a'
               AND ($isbn_string)";
               
       $result = pg_query($this->db,$sql);
          
       while($row = pg_fetch_row($result))
       {
          $this->file_bibs[]=$row[0];
       }
    }
    
    function GetFilterByISBNFile()
    {
       if ($this->filter_by_isbn_file)
       {
          return  $this->input_filename;
       }
       else 
       {
          return false;
       }
    }
    
    function SetFilterByAddedType($type)
    {
       $this->added_date_type = $type;
    }
    
      
    function GetFilterByAddedType()
    {
       return $this->added_date_type;
    }
    
    function SetFilterByAdded($after, $before)
    {
       $this->filter_by_added_date = true;
       
       if ($after) 
       {
          $this->added_date_after = $after; //start 
       }
       else
       {
          $this->added_date_after =date("Y-m-d", strtotime("01/01/2000"));
       }
       
       if ($before)
       {
          $this->added_date_before = $before; //end
       }
       else
       {
          $this->added_date_before =date("Y-m-d");
       }
    }
    
    function SetFilterByAddedRelative($start, $end)
    {
       $this->filter_by_added_date = true;
       
       $today = date("y-m-d");
              
       //figure out the start and end dates
       if($start)
       {
          $start = str_replace("_", " ", $start);
          
          if ($this->use_relative_dates) $this->added_date_after = $start;
          else $this->added_date_after = date("Y-m-d", strtotime($today."-".$start)); //start 
       }
       else
       {
          $this->added_date_after =date("Y-m-d", strtotime("01/01/2000"));
       }
       
       if ($end)
       {
          $end = str_replace("_", " ", $end);
          if ($this->use_relative_dates) $this->added_date_before = $end;
          else $this->added_date_before = date("Y-m-d", strtotime($today."-".$end)); //start 
       }
       else
       {
           $this->added_date_before =date("Y-m-d");
       }
    }
    
    function GetFilterByAdded()
    {
       return $this->filter_by_added_date;
    }
    
    function GetAddedAfter()
    {
       if ($this->use_relative_dates) return $this->added_date_after;
       else return  date("m/d/Y", strtotime($this->added_date_after));
    }
    
    function GetAddedBefore()
    {
       if ($this->use_relative_dates) return $this->added_date_before;
       else return  date("m/d/Y", strtotime($this->added_date_before));
    }
    
    function ExcludeRecByAddedDate($active_date)
    {
       if($this->filter_by_added_date)
       {
          if ($active_date == "Before 2000")
          {
             return true;
          }
       
          $after = date('Y-m-d', strtotime($this->added_date_after));
          $before = date('Y-m-d', strtotime($this->added_date_before));
          $date = date('Y-m-d', strtotime($active_date));
       
          if ( $date >= $after && $date <= $before) return false;
          else return true;
       }
       else
       {
          return false; 
       }
        
    }
    
    function SetCircCount($compare, $val)
    {
       $this->filter_by_circ_count = true;
       $this->circ_count = $val;
       $this->circ_compare = $compare;
    }
    
    function GetFilterByCircCount()
    {
       return $this->filter_by_circ_count;
    }
    
    function GetCircCountVal()
    {
       return $this->circ_count;
    }
    
    function GetCircCountCompare()
    {
        return $this->circ_compare;
    }
    
    function ExcludeRecByCircCount($count)
    {
       if($this->filter_by_circ_count)
       {
         if ($this->circ_compare == "less")
         {
            if ($count < $this->circ_count) return false;
            else return true; 
         }
         else if ($this->circ_compare == "more")
         {
            if ($count > $this->circ_count) return false;
            else return true; 
         }
       }
       else
       {
          return false; 
       }
    }
   
    function SetFilterByCircDateType($type)
    {
       $this->circ_date_type = $type;
    }
    
    function SetFilterByCircDate($after, $before)
    {
       $this->filter_by_circ_date = true;
       
       if (!$this->filter_by_circ_count)
       {
         //if date and no circ count use 1 
          $this->filter_by_circ_count = true;
          $this->circ_count = 0;
          $this->circ_compare = "more";
       }
       
       if ($after) 
       {
          $this->circ_date_after = $after; //start 
       }
       else
       {
          $this->circ_date_after =date("Y-m-d", strtotime("01/01/2000"));
       }
       
       if ($before)
       {
          $this->circ_date_before = $before; //end
       }
       else
       {
          $this->circ_date_before =date("Y-m-d");
       }
    }
    
    function SetFilterByCircDateRelative($start, $end)
    {
       $this->filter_by_circ_date = true;
       
       if (!$this->filter_by_circ_count)
       {
         //if date and no circ count use 1 
          $this->filter_by_circ_count = true;
          $this->circ_count = 0;
          $this->circ_compare = "more";
       }
       
       $today = date("y-m-d");
              
       //figure out the start and end dates
       if($start)
       {
          $start = str_replace("_", " ", $start);
          
          if ($this->use_relative_dates) $this->circ_date_after = $start;
          else $this->circ_date_after = date("Y-m-d", strtotime($today."-".$start)); //start 
       }
       else
       {
          $this->circ_date_after =date("Y-m-d", strtotime("01/01/2000"));
       }
       
       if ($end)
       {
          $end = str_replace("_", " ", $end);
          if ($this->use_relative_dates) $this->circ_date_before = $end;
          else $this->circ_date_before = date("Y-m-d", strtotime($today."-".$end)); //start 
       }
       else
       {
           $this->circ_date_before =date("Y-m-d");
       }
    }
    
    function GetFilterByCircDate()
    {
       return $this->filter_by_circ_date;
    }
    
    function GetFilterByCircType()
    {
       return $this->circ_date_type;
    }
    
    function GetCircAfter()
    {
       if ($this->use_relative_dates) return $this->circ_date_after;
       else return  date("m/d/Y", strtotime($this->circ_date_after));
    }
    
    function GetCircBefore()
    {
       if ($this->use_relative_dates) return $this->circ_date_before;
       else return  date("m/d/Y", strtotime($this->circ_date_before));
    }
    
    function SetScheduled()
    {
       $this->scheduled = true;
    }

    function GetScheduled()
    {
       return $this->scheduled;
    }
    
    function ExcludeRecByStatCats($copy_id)
    {
      if ($this->filter_by_stat_cat)
      {
			$stat_sql = "SELECT asset.stat_cat_entry_copy_map.stat_cat, asset.stat_cat_entry_copy_map.stat_cat_entry
							 FROM asset.stat_cat_entry_copy_map
							 WHERE asset.stat_cat_entry_copy_map.owning_copy= $copy_id 
							 ORDER BY asset.stat_cat_entry_copy_map.stat_cat";
			 
			 $stat_result = pg_query($this->db, $stat_sql);

			 $item_stat_cats = array();
			 
			 while( $stat_row = pg_fetch_row($stat_result)) 
			 {
				//make a list of the pairs to compare to what's stored
				$stat_cat = $stat_row[0];
				$stat_entry = $stat_row[1];
				$item_stat_cats[$stat_cat] = $stat_entry;	
			 }
			  
			 $missing_match = false;
			 foreach($this->stat_cats as $curr)
			 {
			    $curr_stat  = $curr['stat_cat'];
             $entry_array = $curr['entry'];
             
             if (array_key_exists($curr_stat, $item_stat_cats))
             {
                $entry_val = $item_stat_cats[$curr_stat];
                if ($entry_array[0] == "ALL" || in_array($entry_val, $entry_array)) 
                {
                   continue;
                }
                else
                {
                   $missing_match = true;
                   break;
                }
             }
             else
             {
                $missing_match = true;
                break;
             }
			 }
			 
			 if ($missing_match) return true; //exclude record
			 else return false;
			 
       }
       else
       {
          return false;
       }
    }
    
    function SetFilterByStatCat($stat_cat, $entry,  $preview_mode = false)
    {
       $this->filter_by_stat_cat = true;
       $entries =  explode(',', $entry);
       $this->stat_cats[] = array('stat_cat' => $stat_cat, 'entry' => $entries);
      
       if ($this->library_shortname == "NOBLE" || $preview_mode ) $this->use_stat_cat_sql = true;
    }
   
    function GetFilterByStatCats()
    {
       return $this->filter_by_stat_cat;
    }
    
    function GetStatCats($seperator)
    {
      if ($this->filter_by_stat_cat)
      {
         $stat_cat_text ="";
         foreach($this->stat_cats as $curr)
         {
            $curr_stat  = $curr['stat_cat'];
            $entry_array = $curr['entry'];
            
				//need to return the words not the ids
				 $sql = "SELECT name
							FROM asset.stat_cat
							WHERE id = $curr_stat";
		
				 $result = pg_query($this->db,$sql);
			 
				 $row = pg_fetch_row($result);
				 $stat_cat = $row[0];
				 
				 
				 if ($entry_array[0] == "ALL" )
				 {
					 $stat_cat_text .= $stat_cat."/ALL".$seperator;
				 }
				 else
				 {
					 //need to return the words not the ids
					 $stat_entry_string = "(".implode(",",$entry_array).")";
					 $sql = "SELECT value
							FROM asset.stat_cat_entry
							WHERE id IN $stat_entry_string";
			  
					 $result = pg_query($this->db,$sql);

					 while($row = pg_fetch_row($result))
					 {
						 $stat_cat_text .= $stat_cat."/".$row[0].$seperator;
					 }
				 }
          
          }
          return $stat_cat_text;
       }
       else
       {
         return false;
       }
    }
    
    function GetCallClass()
    {
       if ($this->filter_by_call_num)
       {
          //need to return the words not the ids
          $sql = "SELECT name
                  FROM asset.call_number_class
                  WHERE id = $this->call_class";
         
          $result = pg_query($this->db,$sql);
          
          $row = pg_fetch_row($result);
          
          return $row[0];
       }
       else
       {
          return false;
       }
    }
    
    function SetFilterByCallContains($class, $text)
    {
       $this->filter_by_call_num = true;
       $this->use_call_contains = true;
       $this->call_class = $class;
       $this->call_contains = str_replace("_", "",$text);
    }
     
    function GetCallContains()
    {
       if ($this->use_call_contains)
       {
          return $this->call_contains;
       }
       else
       {
          return false;
       }
    }
    
    function SetFilterByCallRange($class, $call_start, $call_end)
    {
       $this->filter_by_call_num = true;
       $this->use_call_range = true;
       $this->call_class = $class;
       
       $this->call_range[] = array('start' => $call_start, 
                                   'end'   => $call_end);
       
    }
   
    function GetCallRange()
    {
       if ($this->use_call_range)
       {
          $pairs = "";  
          foreach ($this->call_range as $curr_range)
          {
             $pairs .= "(".$curr_range['start']."-". $curr_range['end'].") ";
          }
          
          return $pairs;
       }
       else
       {
          return false;
       }
    }
    
    function SetFilterByCollectionTopics($class, $topics)
    {
       $this->filter_by_collection_topic = true;
       $this->filter_by_call_num = true;
       $this->use_call_range = true;
       
       if ($class > -1) $this->call_class = $class;
       
       include "/usr/local/noble/db_config/db_info.php";
         
       $coll_man_db = pg_connect("host=$coll_man_host port=5432 dbname=$coll_man_db user=$syrup_user password=$syrup_password");
       if (!$coll_man_db) 
       {
          die("Error in connection to collection DB: " . pg_last_error());
       }
       
       $topic_ids = "(".$topics.")";
       
       $conspectus_sql = "SELECT id, name, code
                          FROM collection_management.coll_man_conspectus
                          WHERE id IN $topic_ids";
                          
       $cons_result = pg_query($coll_man_db, $conspectus_sql);
      
       while($row = pg_fetch_row($cons_result))
       {
          $conspectus_id = $row[0];
          $report_name = $row[1];
          $report_code = trim($row[2]);
          
          $this->collection_topic_names[] = $report_name;
          
          //get the call number range
         
          if ( $this->call_class == 3 || $this->library_shortname == "NOBLE")
          {
              //get LC ranges
              $call_sql = "SELECT lc.start, lc.end
                           FROM collection_management.coll_man_lc_range lc
                           WHERE lc.conspectus_id = $conspectus_id";
               
              $result = pg_query($coll_man_db, $call_sql);
         
				  while ($row = pg_fetch_row($result) )
				  {   
					  $start =  $row[0];
				  	  $end = $row[1];
					  $this->call_range[] = array('start' => $start,
						   								'end'  => $end, 
														   'class' => "LC");
				  }
          }//end lc
          
          if ( $this->call_class == 2 || $this->library_shortname == "NOBLE")
          {
             //get dewey ranges
              $call_sql = "SELECT ddc.start, ddc.end
                           FROM collection_management.coll_man_dewey_range ddc
                           WHERE ddc.conspectus_id = $conspectus_id";
                        
              $result = pg_query($coll_man_db, $call_sql);
         
				  while ($row = pg_fetch_row($result) )
				  {   
					  $start =  $row[0];
				  	  $end = $row[1];
					  $this->call_range[] = array('start' => $start,
						   								'end'  => $end, 
														   'class' => "DEWEY");
				  }
           }//end dewey
         
       }//end while    
    }
    
    function GetFilterByCollection($seperator)
    {
       if ($this->filter_by_collection_topic)
       {
          return implode($seperator, $this->collection_topic_names);
       }
       else
       {
         return false;
       }
    }
    
    function SetFilterByBisac($class, $category)
    {
       $this->filter_by_bisac = true;
       $this->filter_by_call_num = true;
       $this->call_class = $class;
       
       $category = "(".str_replace("-",",",$category).")";
       
       //echo "Bisac is ".$category."\n";
       
       //get the words for the category from the DB
       $sql = "SELECT category, level
               FROM noble.bisac_category
               WHERE id IN $category
               ORDER BY level";
         
       $result = pg_query($this->db,$sql);
          
       while($row = pg_fetch_row($result))
       {
          $this->bisac_category[] = $row[0];
       }
       
    }
    
    function GetFilterByBisac($seperator)
    {
       if ($this->filter_by_bisac)
       {
          return implode($seperator, $this->bisac_category);
       }
       else
       {
          return false;
       }
    }
        
    function SetFilterByCallPrefix($input) //list of ids
    {
       $this->filter_by_call_num_prefix = true;
       $prefixes = explode(",", $input);
       $this->call_num_prefix = array_merge($this->call_num_prefix, $prefixes);
    }
    
    function GetFilterByCallPrefix($seperator)
    {
       if ($this->filter_by_call_num_prefix)
       {
          //need to return the words not the ids
          $prefix_string = "(".implode(",",$this->call_num_prefix).")";
          $sql = "SELECT label
                  FROM asset.call_number_prefix
                  WHERE id IN $prefix_string";
         
          $result = pg_query($this->db,$sql);
          
          $prefix_list = "";
          while($row = pg_fetch_row($result))
          {
             $prefix_list .= $row[0].$seperator;
          }
          
          return $prefix_list;
       }
       else
       {
          return false;
       }
    }
    
    function SetFilterByCallSuffix($input) //list of ids
    {
       $this->filter_by_call_num_suffix = true;
       $suffixes = explode(",", $input);
       $this->call_num_suffix = array_merge($this->call_num_suffix, $suffixes);
    }
    
    function GetFilterByCallSuffix($seperator)
    {
       if ($this->filter_by_call_num_suffix)
       {
          //need to return the words not the ids
          $suffix_string = "(".implode(",",$this->call_num_suffix).")";
          $sql = "SELECT label
                  FROM asset.call_number_suffix
                  WHERE id IN $suffix_string";
         
          $result = pg_query($this->db,$sql);
          
          $suffix_list = "";
          while($row = pg_fetch_row($result))
          {
             $suffix_list .= $row[0].$seperator;
          }
          
          return $suffix_list;
       }
       else
       {
          return false;
       }
    }
    
    function SetFilterByCircMod($input) //list of ids
    {
       $this->filter_by_circ_mod = true;
       $circ_mods = explode(",",$input);
       $this->circ_mod = array_merge($this->circ_mod, $circ_mods);
    }
    
        
    function GetFilterByCircMod($seperator)
    {
       if ($this->filter_by_circ_mod)
       {
          return implode($seperator, $this->circ_mod);
       }
       else
       {
          return false;
       }
    }
    
    function SetFilterByStatus($input) //list of codes
    {
       $this->filter_by_status = true;
       
       $statuses = explode(",", $input);
       $this->status = array_merge($this->status, $statuses);
    }
    
    function GetFilterByStatus($seperator)
    {
       if ($this->filter_by_status)
       {
          //need to return the words not the ids
          $status_string = "(".implode(",",$this->status).")";
          $sql = "SELECT name
                  FROM config.copy_status
                  WHERE id IN $status_string";
         
          $result = pg_query($this->db,$sql);
          
          $status_list = "";
          while($row = pg_fetch_row($result))
          {
             $status_list .= $row[0].$seperator;
          }
          
          return $status_list;
       }
       else
       {
          return false;
       }
    }
    
     
    function SetFilterByLastStatusType($type)
    {
       $this->last_status_type = $type;
    }
    
    function GetFilterByLastStatusType()
    {
       return $this->last_status_type;
    }
    
    function SetFilterByStatusChanged($after, $before)
    {
       $this->filter_by_status_change = true;
       
       if ($after) 
       {
          $this->last_status_after = $after; //start 
       }
       else
       {
          $this->last_status_after =date("Y-m-d", strtotime("05/25/2012"));
       }
       
       if ($before)
       {
          $this->last_status_before = $before; //end
       }
       else
       {
          $this->last_status_before =date("Y-m-d");
       }
    }
    
      
    function SetFilterByStatusChangedRelative($start, $end)
    {
       $this->filter_by_status_change = true;
       
        $today = date("y-m-d");
              
       //figure out the start and end dates
       if($start)
       {
          $start = str_replace("_", " ", $start);
          if ($this->use_relative_dates) $this->last_status_after = $start;
          else $this->last_status_after = date("Y-m-d", strtotime($today."-".$start)); //start 
       }
       else
       {
           $this->last_status_after =date("Y-m-d", strtotime("05/25/2012"));
       }
       
       if ($end)
       {
          $end = str_replace("_", " ", $end);
          if ($this->use_relative_dates) $this->last_status_before = $end;
          else $this->last_status_before = date("Y-m-d", strtotime($today."-".$end)); //start 
       }
       else
       {
           $this->last_status_before =date("Y-m-d");
       }
    }
    
  
    function GetFilterByStatusChanged()
    {
       return $this->filter_by_status_change;
    }
    
    function GetStatusChangeAfter()
    {
       if ($this->use_relative_dates) return $this->last_status_after;
       else return  date("m/d/Y", strtotime($this->last_status_after));
    }
    
    function GetStatusChangeBefore()
    {
       if ($this->use_relative_dates) return $this->last_status_before;
       else return  date("m/d/Y", strtotime($this->last_status_before));
    }
    
    function SetFilterByDeleted($type)
    {
       if ($type == "active_only")
       {
          $this->deleted_items = false;
          $this->active_items = true;
       }
       else if ($type == "deleted_only")
       {
          $this->deleted_items = true;
          $this->active_items = false;
       }
       else if ($type == "active_deleted")
       {
          $this->deleted_items = true;
          $this->active_items = true;
       }
    }
    
    function SetFilterByDeletedDateType($type)
    {
       $this->deleted_date_type = $type;
    }
    
    function GetFilterByDeletedDateType()
    {
       return $this->deleted_date_type;
    }
    
    function SetFilterByDeletedDate($after, $before)
    {
       $this->filter_by_deleted_date = true;
       
       if ($after) 
       {
          $this->deleted_date_after = $after; //start 
       }
       else
       {
          $this->deleted_date_after =date("Y-m-d", strtotime("05/25/2012"));
       }
       
       if ($before)
       {
          $this->deleted_date_before = $before; //end
       }
       else
       {
          $this->deleted_date_before =date("Y-m-d");
       }
    }
    
      
    function SetFilterByDeletedDateRelative($start, $end)
    {
        $this->filter_by_deleted_date = true;
       
       $today = date("y-m-d");
              
       //figure out the start and end dates
       if($start)
       {
          $start = str_replace("_", " ", $start);
          if ($this->use_relative_dates) $this->deleted_date_after = $start;
          else $this->deleted_date_after = date("Y-m-d", strtotime($today."-".$start)); //start 
       }
       else
       {
           $this->deleted_date_after =date("Y-m-d", strtotime("05/25/2012"));
       }
       
       if ($end)
       {
          $end = str_replace("_", " ", $end);
          if ($this->use_relative_dates) $this->deleted_date_before = $end;
          else $this->deleted_date_before = date("Y-m-d", strtotime($today."-".$end)); //start 
       }
       else
       {
           $this->deleted_date_before =date("Y-m-d");
       }
    }

    function GetFilterByDeletedDate()
    {
       return $this->filter_by_deleted_date;
    }
    
    function GetFilterByDeletedDateAfter()
    {
       if ($this->use_relative_dates) return $this->deleted_date_after;
       else return  date("m/d/Y", strtotime($this->deleted_date_after));
    }
    
    function GetFilterByDeletedDateBefore()
    {
       if ($this->use_relative_dates) return $this->deleted_date_before;
       else return  date("m/d/Y", strtotime($this->deleted_date_before));
    }
    
    function GetFilterByDeleted()
    {
       if ($this->active_items && !$this->deleted_items)
       {
          return "Active Only";
       }
       else if (!$this->active_items && $this->deleted_items)
       {
          return "Deleted Only";
       }
       else if($this->active_items && $this->deleted_items)
       {
          return "ALL";
       }
    }
    
    function GetShowDeleted()
    {
        if ($this->deleted_items)return true;
        else return false;
    }
    
    function SetFilterByElectronic($type)
    {
       if ($type == "physical_only")
       {
          $this->electronic_items = false;
          $this->physical_items = true;
       }
       else if ($type == "electronic_only")
       {
          $this->electronic_items = true;
          $this->physical_items = false;
       }
       else if ($type == "physical_electronic")
       {
          $this->electronic_items = true;
          $this->physical_items = true;
       }
    }
    
    function GetFilterByElectronic()
    {
       if ($this->physical_items && !$this->electronic_items)
       {
          return "Physical Only";
       }
       else if (!$this->physical_items && $this->electronic_items)
       {
          return "Electronic Only";
       }
       else if($this->physical_items && $this->electronic_items)
       {
          return "ALL";
       }
    }
    
    function SetCopyLocations($input_loc)
    {
       if ($input_loc == "all") 
       {
          $this->use_all_copy_locations = true;
       }
       else
       {
           //make this an array first
           $locations = explode(",", $input_loc);
           $this->copy_locations = array_merge($this->copy_locations, $locations);
       }
    }
    
    function GetCopyLocations($seperator)
    {
       if ($this->use_all_copy_locations)
       {
          return "All Locations";
       }
       else
       {
          //need to return the words not the ids
          $loc_string = "(".implode(",",$this->copy_locations).")";
          $sql = "SELECT name
                  FROM asset.copy_location
                  WHERE id IN $loc_string";
         
          $result = pg_query($this->db,$sql);
          
          $loc_list = "";
          while($row = pg_fetch_row($result))
          {
             $loc_list .= $row[0].$seperator;
          }
          
          return $loc_list;
       }
    }
    
    function SetCopyLocationGroup($input_loc_grp)
    {
       $this->use_copy_location_group = true;
       $this->copy_location_group_id = $input_loc_grp;
       
       //need to return the words not the ids
       $sql = "SELECT location
               FROM asset.copy_location_group_map
               WHERE lgroup = $this->copy_location_group_id";
         
       $result = pg_query($this->db,$sql);
       
       $locations = array(); 
       while($row = pg_fetch_row($result))
       {
          $locations[] = $row[0];
       }
       
       $this->copy_locations = array_merge($this->copy_locations, $locations);
       
    }
    
    function SetCollection()
    {
       $this->collection = true;
    }

    function GetCollection()
    {
       return $this->collection;
    }

    function GetFilterByCopyLocationGroup()
    {
       return $this->use_copy_location_group;
    }
    
    function GetCopyLocationGroupName()
    {
       if ($this->use_copy_location_group)
       {
          //need to return the words not the ids
          $sql = "SELECT name
                  FROM asset.copy_location_group
                  WHERE id = $this->copy_location_group_id";
         
          $result = pg_query($this->db,$sql);
          
          $row = pg_fetch_row($result);
          
          return $row[0];
       }
       else
       {
          return false;
       }
    }
    

    function SetLibrary($lib)
    {
       $sql = "SELECT id, ou_type, parent_ou
               FROM actor.org_unit
               WHERE shortname = '$lib'";
         
       $result = pg_query($this->db,$sql);
       $row = pg_fetch_row($result);
       
       $this->library_id = $row[0];
       
       $org_unit_type = $row[1];
       $parent = $row[2];
       
       $this->library_shortname = $lib;
       
       $this->SetDomain($this->library_shortname);
       
       if ($org_unit_type <= 2) //consortia or system
       {
          $this->system_name = $lib;
       }
       else
       {
          $this->SetSystemName($parent);
       } 
       
    }
    
    function GetLibrary()
    {
       return  $this->library_shortname;
    }
    
    function SetOnlyHolder($val)
    {
       $this->filter_by_only_holder = true;
       if ($val == "true")$this->only_holder_option = true;
       else if ($val == "false")$this->only_holder_option = false;
    }
    
    function GetOnlyHolder()
    {
       return $this->filter_by_only_holder;
    }
    
    function ExcludeRecByOnlyHolder($only_holder)
    {
       if($this->filter_by_only_holder)
       {
          
          if($this->only_holder_option)
          {
             if ($only_holder == "TRUE") return false;
             else return true;
          }
          else if (!$this->only_holder_option) 
          {
             if ($only_holder == "") return false;
             else return true;
          }
        
       }
       else
       {
          return false;
       }
    }
    
    function SetDomain($domain)
    {
       $this->domain = FindDomain($domain);
    }
    
    function GetDomain()
    {  
       return $this->domain;
    }
    
    function SetSearchLinks()
    {
       $this->search_links = true;
    }
    
    function GetSearchLinks()
    {
      return $this->search_links;
    }
    
    function SetScope()
    {
       $this->scope = FindScope($this->library_shortname);
    }
    
    function GetScope()
    {
      return $this->scope;
    }
    
    function SetSystemName($parent_ou)
    {
       $sql = "SELECT shortname
               FROM actor.org_unit
               WHERE id = $parent_ou";
         
       $result = pg_query($this->db,$sql);
       $row = pg_fetch_row($result);
       
       $this->system_name = $row[0];
    }
    
    function GetSystemName()
    {
      return $this->system_name;
    }
    
    function CreateFiltersFromString($filter_string)
    {
       $temp = explode(" ", $filter_string);
       $this->CreateFilters($temp);
    }
    
    function CreateFilters($cmd_line)
    {
       
       for ($i=0; $i < count($cmd_line); $i++)
       {
          $arg = $cmd_line[$i];

          if ($arg == "lib")
          {
             $this->SetLibrary($cmd_line[++$i]);
          }
          else if ($arg == "copy_loc")
          {
             $this->SetCopyLocations($cmd_line[++$i]);
          }
          else if ($arg == "copy_loc_grp")
          {
             $this->SetCopyLocationGroup($cmd_line[++$i]);
          }
          else if ($arg == "shelf")
          {
              $this->SetShelfSitter($cmd_line[++$i]);
          }
          else if ($arg == "shelf_relative")
          {
              $this->SetShelfSitterRelative($cmd_line[++$i]);
          }
          else if ($arg =="pub_before")
          {
             $this->SetFilterByPubDate("before",null, $cmd_line[++$i]);
          }
          else if ($arg =="pub_after")
          {
             $this->SetFilterByPubDate("after", $cmd_line[++$i], null);
          }
          else if ($arg =="pub_after_relative")
          {
             $this->SetFilterByPubDate("after", $cmd_line[++$i], null, true);
          }
          else if ($arg =="pub_between")
          {
             $this->SetFilterByPubDate("between", $cmd_line[++$i], $cmd_line[++$i] );
          }
          else if ($arg =="active_only" || $arg =="deleted_only" || $arg =="active_deleted" )
          {
             $this->SetFilterByDeleted($arg);
          }
          else if ($arg =="physical_only" || $arg =="electronic_only" || $arg =="physical_electronic" )
          {
             $this->SetFilterByElectronic($arg);
          }
          else if ($arg =="delete_date")
          {
             $delete_type = $cmd_line[++$i];
             $this->SetFilterByDeletedDateType($delete_type);
            
             if ($delete_type == "before") $this->SetFilterByDeletedDate(null, $cmd_line[++$i]);
             else if ($delete_type == "after") $this->SetFilterByDeletedDate($cmd_line[++$i], null);
             else if ($delete_type == "between") $this->SetFilterByDeletedDate($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="delete_date_relative")
          {
             $delete_type = $cmd_line[++$i];
             $this->SetFilterByDeletedDateType($delete_type);
            
             if ($delete_type == "before") $this->SetFilterByDeletedDateRelative(null, $cmd_line[++$i]);
             else if ($delete_type == "after") $this->SetFilterByDeletedDateRelative($cmd_line[++$i], null);
             else if ($delete_type == "between") $this->SetFilterByDeletedDateRelative($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="status")
          {
             $this->SetFilterByStatus($cmd_line[++$i]);
          }
          else if ($arg =="stat_change")
          {
             $stat_type = $cmd_line[++$i];
             $this->SetFilterByLastStatusType($stat_type);
            
             if ($stat_type == "before") $this->SetFilterByStatusChanged(null, $cmd_line[++$i]);
             else if ($stat_type == "after") $this->SetFilterByStatusChanged($cmd_line[++$i], null);
             else if ($stat_type == "between") $this->SetFilterByStatusChanged($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="stat_change_relative")
          {
             $stat_type = $cmd_line[++$i];
             $this->SetFilterByLastStatusType($stat_type);
            
             if ($stat_type == "before") $this->SetFilterByStatusChangedRelative(null, $cmd_line[++$i]);
             else if ($stat_type == "after") $this->SetFilterByStatusChangedRelative($cmd_line[++$i], null);
             else if ($stat_type == "between") $this->SetFilterByStatusChangedRelative($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="bib_file")
          {
             $this->SetFilterByBibFile($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="barcode_file")
          {
             $this->SetFilterByBarcodeFile($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="isbn_file")
          {
             $this->SetFilterByISBNFile($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="added")
          {
             $added_type = $cmd_line[++$i];
             $this->SetFilterByAddedType($added_type);
             
             if ($added_type == "before") $this->SetFilterByAdded(null, $cmd_line[++$i]);
             else if ($added_type == "after") $this->SetFilterByAdded($cmd_line[++$i], null);
             else if ($added_type == "between") $this->SetFilterByAdded($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="added_relative")
          {
             $added_type = $cmd_line[++$i];
             $this->SetFilterByAddedType($added_type);
            
             if ($added_type == "before") $this->SetFilterByAddedRelative(null, $cmd_line[++$i]);
             else if ($added_type == "after") $this->SetFilterByAddedRelative($cmd_line[++$i], null);
             else if ($added_type == "between") $this->SetFilterByAddedRelative($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="stat_cat")
          {
             $this->SetFilterByStatCat($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="call_contain")
          {
             $this->SetFilterByCallContains($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="call_range")
          {
             $this->SetFilterByCallRange($cmd_line[++$i], $cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="coll_topic")
          {
             if($this->library_shortname == "NOBLE")$this->SetFilterByCollectionTopics(-1, $cmd_line[++$i]);
             else $this->SetFilterByCollectionTopics($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg == "circ_count")
          {
             $this->SetCircCount($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="circ_date")
          {
             $circ_type = $cmd_line[++$i];
             $this->SetFilterByCircDateType($circ_type);
             
             if ($circ_type == "before") $this->SetFilterByCircDate(null, $cmd_line[++$i]);
             else if ($circ_type == "after") $this->SetFilterByCircDate($cmd_line[++$i], null);
             else if ($circ_type == "between") $this->SetFilterByCircDate($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg == "circ_date_relative")
          {
             $circ_type = $cmd_line[++$i];
             $this->SetFilterByCircDateType($circ_type);
            
             if ($circ_type == "before") $this->SetFilterByCircDateRelative(null, $cmd_line[++$i]);
             else if ($circ_type == "after") $this->SetFilterByCircDateRelative($cmd_line[++$i], null);
             else if ($circ_type == "between") $this->SetFilterByCircDateRelative($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="bisac")
          {
             $this->SetFilterByBisac($cmd_line[++$i], $cmd_line[++$i]);
          }
          else if ($arg =="circ_mod")
          {
             $this->SetFilterByCircMod($cmd_line[++$i]);
          }
          else if ($arg =="prefix")
          {
             $this->SetFilterByCallPrefix($cmd_line[++$i]);
          }
          else if ($arg =="suffix")
          {
              $this->SetFilterByCallSuffix($cmd_line[++$i]);
          }
          else if ($arg =="only_holder")
          {
             $this->SetOnlyHolder($cmd_line[++$i]);
          }
          else if ($arg =="scope")
          {
             $this->SetScope();
          }
          else if ($arg == "domain")
          {
             $this->SetDomain($cmd_line[++$i]);
          }
          else if ($arg =="search_links")
          {
             $this->SetSearchLinks();
          }
          else if ($arg =="scheduled")
          {
             $this->SetScheduled();
          }
          else if ($arg == "collection")
          {
             $this->SetCollection();
          }
          else if ($arg == "popular")
          {
             //$this->SetCircDatesForPopular();
          }
          else if ($arg == "html" || $arg == "spreadsheet" || $arg == "rss")
          {
             //gone through all the filters ignore all output
             return;
          }
       }
    }
     
    function CreateSQL()
    {
       //all copy vals, then all bib vals    
       $sql="SELECT DISTINCT reporter.materialized_simple_record.title, 
                             asset.call_number.record,
                             asset.copy.cost,
                             asset.copy.active_date,
                             asset.copy.create_date,
                             asset.copy.age_protect, 
                             asset.copy.alert_message, 
                             asset.copy.barcode,
                             asset.copy.id, 
                             asset.call_number.label, 
                             asset.call_number.label_class,
                             asset.call_number.prefix, 
                             asset.call_number.suffix, 
                             asset.call_number.label_sortkey,
                             asset.copy.circ_modifier,
                             asset.copy.circ_lib,
                             asset.copy_location.name,
                             asset.copy.deleted,
                             asset.copy.edit_date,
                             asset.copy.deposit, 
                             asset.copy.fine_level, 
                             asset.copy.floating,
                             asset.copy.loan_duration, 
                             asset.call_number.owning_lib, 
                             asset.copy.price,
                             asset.copy.ref,
                             asset.copy.status,
                             asset.copy.status_changed_time,
                             reporter.materialized_simple_record.author,
                             reporter.materialized_simple_record.isbn, 
                             reporter.materialized_simple_record.issn, 
                             reporter.materialized_simple_record.publisher, 
                             asset.call_number.id              
                             FROM asset.copy 
                             JOIN asset.call_number ON asset.copy.call_number = asset.call_number.id
                             JOIN reporter.materialized_simple_record ON reporter.materialized_simple_record.id = asset.call_number.record 
                             JOIN asset.copy_location ON asset.copy.location = asset.copy_location.id ";
                             
	    if ($this->use_stat_cat_sql)
		 {
			 $sql .=   "JOIN asset.stat_cat_entry_copy_map ON asset.stat_cat_entry_copy_map.owning_copy = asset.copy.id
							JOIN asset.stat_cat_entry ON asset.stat_cat_entry.id = asset.stat_cat_entry_copy_map.stat_cat_entry
							JOIN asset.stat_cat ON asset.stat_cat_entry_copy_map.stat_cat = asset.stat_cat.id ";
		 }
	    
	    if ($this->library_shortname == "NOBLE")
	    {
	       $sql .= "WHERE asset.copy.circ_lib NOT IN (36,37,38) "; //NOBLE OFFICE And COMCAT
	       
		    if ($this->filter_by_pub_date)
		    {
		       if ($this->pub_date_type == "before")
             {
                $sql .= "AND reporter.materialized_simple_record.pubdate < '$this->published_before' ";
             }
             else if ($this->pub_date_type == "after")
             {
                $sql .= "AND reporter.materialized_simple_record.pubdate > '$this->published_after' ";
             }
             else if ($this->pub_date_type == "between")
             {
                $sql .= "AND reporter.materialized_simple_record.pubdate <= '$this->published_before' "; 
                $sql .= "AND reporter.materialized_simple_record.pubdate >= '$this->published_after' ";
             }
         }
		 }
		 else 
		 {
		    $sql .="WHERE asset.copy.circ_lib IN (SELECT id FROM actor.org_unit where id = $this->library_id OR parent_ou = $this->library_id) ";
		 }
		 
		 if (!$this->use_all_copy_locations) 
		 {
			 $location_string = "(".implode(",",$this->copy_locations).")";
			 $sql .="AND asset.copy.location IN $location_string ";
		 }
		 if ($this->active_items && !$this->deleted_items)
		 {
				$sql .= "AND asset.copy.deleted = false ";
		 }
		 else if (!$this->active_items && $this->deleted_items)
		 {
			  $sql .= "AND asset.copy.deleted = true ";
	  
			  //add the filter by deleted date
			  if ($this->filter_by_deleted_date)
			  {
				  $after = date('Y-m-d', strtotime($this->deleted_date_after));
				  $before = date('Y-m-d', strtotime($this->deleted_date_before));
				  $sql .= "AND DATE(asset.copy.edit_date) BETWEEN '$after' AND '$before' ";
			  }
		 }
		 
		 if ($this->filter_by_status_change)
		 {
			 $after = date('Y-m-d', strtotime($this->last_status_after));
			 $before = date('Y-m-d', strtotime($this->last_status_before));
			 $sql .= "AND DATE(asset.copy.status_changed_time) BETWEEN '$after' AND '$before' ";
		 }
	 
		 if ($this->use_shelf_sitting)
		 {
			  $sql .= "AND asset.copy.status = 0 ";
		 }
		 else if ($this->filter_by_status)
		 {
			 $status_string = "(".implode(",",$this->status).")";
			 $sql .= "AND asset.copy.status IN $status_string ";
		 }
									  
		 if ($this->filter_by_circ_mod) 
		 { 
			 $circ_mod_string = "('".implode("','",$this->circ_mod)."')";
			 $sql .= "AND asset.copy.circ_modifier IN $circ_mod_string ";
		 }
	 
		 if ($this->filter_by_call_num_prefix)
		 { 
			 $prefix_string = "(".implode(",",$this->call_num_prefix).")";
			 $sql .= "AND asset.call_number.prefix IN $prefix_string ";
		 }
	 
		 if ($this->filter_by_call_num_suffix) 
		 {
			 $suffix_string = "(".implode(",",$this->call_num_suffix).")";
			 $sql .= "AND asset.call_number.suffix IN $suffix_string ";
		 }
	 
		 if ($this->filter_by_bib_file || $this->filter_by_isbn_file) 
		 {
			 $bib_string = "(".implode(",",$this->file_bibs).")";
			 $sql .= "AND asset.call_number.record IN $bib_string ";
		 }
	 
		 if ($this->filter_by_barcode_file) 
		 {
			 $barcode_string = "('".implode("','",$this->file_barcodes)."')";
			 $sql .= "AND asset.copy.barcode IN $barcode_string ";
		 }
	 
		 if ($this->filter_by_added_date)
		 {
			 //if the dates are after the EG migration 5/1/12, then add to the SQL
			 $after = date('Y-m-d', strtotime($this->added_date_after));
			 $before = date('Y-m-d', strtotime($this->added_date_before));
			 $migration = date('Y-m-d', strtotime("5/25/2012"));
		 
			 if ($migration < $after && $migration < $before) 
			 {
				 $sql .="AND DATE(asset.copy.active_date) BETWEEN '$after' AND '$before' ";
			 }
		 }
	 
		 if ($this->library_shortname == "NOBLE" && $this->filter_by_collection_topic)
		 {
		       $call_sql = "";
		       $sql .=" AND ( (asset.call_number.label_class = 3 ";
		        
		       //Loop through all the LC Ones and make SQL 
				 foreach ($this->call_range as $range) 
				 {
					 if ($range['class'] == "LC" )//LC
					 {
						  $cmd = " perl /var/www/shared/perl/normalize_call.pl \"".$range['start']."\"";
						  $start= exec($cmd);
			
						  $cmd = " perl /var/www/shared/perl/normalize_call.pl \"".$range['end']."\"";
						  $end = exec($cmd);
						  
						  $call_sql .= "( asset.call_number.label_sortkey >= '$start'
										   AND asset.call_number.label_sortkey < '$end' ) OR ";
					 }
				 }
				 
				 //remove the last OR
				 $call_sql = rtrim($call_sql, "OR ");
	
				 $call_sql .= ")";
			 
				 $sql .=" AND ( ".$call_sql. ") ";
				
				 $call_sql = "";
		       $sql .=" OR (asset.call_number.label_class = 2 ";
		        
		       reset($this->call_range);
		       //Loop through all the LC Ones and make SQL 
				 foreach ($this->call_range as $range) 
				 {
					 if ($range['class'] == "DEWEY" )//Dewey
					 {
						  $start = $range['start'];
						  $end = $range['end'];
						  
						  $call_sql .= "( asset.call_number.label_sortkey >= '$start'
										   AND asset.call_number.label_sortkey < '$end' ) OR ";
					 }
				 }
				 
				 //remove the last OR
				 $call_sql = rtrim($call_sql, "OR ");
	
				 $call_sql .= ")";
			 
				 $sql .=" AND ( ".$call_sql. ")) ";
				 
		 }
		 else if ($this->filter_by_call_num)
		 {
			 if ($this->use_call_range)   
			 {
				 $call_sql = "";
				 foreach ($this->call_range as $range) 
				 {
					 if ($this->call_class == 3 )//LC
					 {
						  $cmd = " perl /var/www/tools/common/normalize_call.pl \"".$range['start']."\"";
						  $start= exec($cmd);
			
						  $cmd = " perl /var/www/tools/common/normalize_call.pl \"".$range['end']."\"";
						  $end = exec($cmd);
					 }
					 else
					 {
						 $start = $range['start'];
						 $end = $range['end'];
					 }
				 
					 $call_sql .= "( asset.call_number.label_sortkey >= '$start'
										 AND asset.call_number.label_sortkey < '$end' )";
		
					 //this isn't the last element
					 if(end($this->call_range) != $range)
					 {
						 $call_sql .=" OR ";
					 }
				 }
	
				 $call_sql .= ")";
			 
				 $sql .=" AND asset.call_number.label_class = $this->call_class 
							 AND ( ".$call_sql. " ";
				
			 }
			 else if ($this->use_call_contains)   
			 {
				 $sql .="AND asset.call_number.label_class = $this->call_class 
							AND asset.call_number.label_sortkey ILIKE '%$this->call_contains%' ";
			 }
			 else if ($this->filter_by_bisac)
			 {
				 $bisac = implode(" ", $this->bisac_category);
				 $sql .="AND asset.call_number.label_class = $this->call_class 
							AND asset.call_number.label_sortkey ILIKE '$bisac%' ";
			 }
		 }
		 
	    if ($this->use_stat_cat_sql)
		 {
		    $stat_cat  = $this->stat_cats[0]['stat_cat'];
          $entry_array = $this->stat_cats[0]['entry'];
		    

			 $sql.="AND asset.stat_cat_entry_copy_map.stat_cat = $stat_cat ";
			 if ($entry_array[0] != "ALL"  ) 
			 {
			    $entry_string = "(".implode(",",$entry_array).")";
				 $sql.="AND asset.stat_cat_entry_copy_map.stat_cat_entry IN $entry_string ";
			 }
		 }
		 
		 if($this->GetCollection())
		 {
		    $sql .="ORDER BY asset.call_number.label_sortkey, reporter.materialized_simple_record.author, reporter.materialized_simple_record.title";
		 }
		 else
		 {
		    $sql .="ORDER BY asset.copy_location.name, asset.call_number.label_sortkey, reporter.materialized_simple_record.author, reporter.materialized_simple_record.title";
		 }
		 //$sql .= " LIMIT 2000 ";  
	 
		 //echo $sql."\n\n";

		 return $sql;
    
    }
    
    function LookForPhysicalCopies()
    {
       return $this->physical_items;
    }
    
    function LookForOnlineRecords()
    {
       if ($this->electronic_items)
       {
          if ($this->GetFilterByBibFile() ) return true;
          else return false;
       }
       else
       {
          return false;
       }
    }
    
    function CreateOnlineSQL()
    {
		 $sql="SELECT DISTINCT  reporter.materialized_simple_record.title,  
										reporter.materialized_simple_record.author,
										reporter.materialized_simple_record.isbn, 
										reporter.materialized_simple_record.issn, 
										reporter.materialized_simple_record.publisher, 
										asset.call_number.record, 
										asset.uri.href,
										asset.uri.label, 
										actor.org_unit.shortname            
										FROM asset.call_number
										JOIN reporter.materialized_simple_record ON reporter.materialized_simple_record.id = asset.call_number.record 
										JOIN asset.uri_call_number_map ON asset.call_number.id = asset.uri_call_number_map.call_number
                              JOIN asset.uri ON asset.uri_call_number_map.uri = asset.uri.id
                              JOIN actor.org_unit ON asset.call_number.owning_lib = actor.org_unit.id
										WHERE asset.call_number.deleted = false
										AND  asset.call_number.label ILIKE '%URI%' "; 
	    
	    if ($this->library_shortname != "NOBLE")
	    {
	       $sql .= "AND (asset.call_number.owning_lib  IN (SELECT id FROM actor.org_unit where id = $this->library_id OR parent_ou = $this->library_id) 
	                OR asset.call_number.owning_lib = 1) ";
	    } 
	    
		 if ($this->filter_by_bib_file) 
		 {
			 $bib_string = "(".implode(",",$this->file_bibs).")";
			 $sql .= "AND asset.call_number.record IN $bib_string ";
		 }
		
		 $sql .="ORDER BY reporter.materialized_simple_record.title, reporter.materialized_simple_record.author";
		 //$sql .= " LIMIT 1000 ";  
	 
		 //echo $sql."\n\n";
		 return $sql;
    }
    
    
    function GetTypeForEmail()
    {
        if($this->GetShelfSitter()) return "Shelf Sitter";
        else return "Inventory/Booklist";
    }
    
    function GetTextForEmail()
    {
       $message = "FILTERS\n";
       
       $message .="Library = ".$this->GetLibrary()."\n";
       if ($this->GetFilterByCopyLocationGroup())
       {
          $message .="Copy Location Group = ".$this->GetCopyLocationGroupName()."\n";
       }
       else
       {
          $message .="Copy Location = ".$this->GetCopyLocations(' , ')."\n";
       }
       
       if ( $this->GetShelfSitter() ) $message .="Sitting on Shelf since = ".$this->GetShelfSitter()."\n";
       if ( $this->GetFilterByPubDate() ) $message .="Published ".$this->GetFilterByPubDateText()."\n";//will return the right string 
       if ( $this->GetFilterByBibFile() ) $message .="Input Bib File = ".$this->GetFilterByBibFile()."\n";
       if ( $this->GetFilterByBarcodeFile() ) $message .="Input Barcode File = ".$this->GetFilterByBarcodeFile()."\n";
       if ( $this->GetFilterByISBNFile() ) $message .="Input ISBN File = ".$this->GetFilterByISBNFile()."\n";
       if ( $this->GetFilterByAdded() ) 
       {
          if ($this->GetFilterByAddedType() == "after") $message .="Added After = ".$this->GetAddedAfter()."\n";
          else if ($this->GetFilterByAddedType() == "before") $message .="Added Before = ".$this->GetAddedBefore()."\n";
          else if ($this->GetFilterByAddedType() == "between") $message .="Added Between = ".$this->GetAddedAfter()." and ".$this->GetAddedBefore()."\n";
          
       }
       if ( $this->GetStatCats('') ) $message .="Stat Cats = ".$this->GetStatCats(' , ')."\n";
       if ( $this->GetCallClass() ) $message .="Call Number Class = ".$this->GetCallClass()."\n";
       if ( $this->GetCallContains() ) $message .="Call Number Contains = ".$this->GetCallContains()."\n";
       if ( $this->GetCallRange() ) $message .="Call Number Range = ".$this->GetCallRange()."\n";
       if ( $this->GetFilterByBisac('') ) $message .="Bisac Call Number = ".$this->GetFilterByBisac('/')."\n";
       if ( $this->GetFilterByCollection('') ) $message .="Collection Topics = ".$this->GetFilterByCollection(' , ')."\n";
       if ( $this->GetFilterByCallPrefix('') ) $message .="Call Number Prefix = ".$this->GetFilterByCallPrefix(' , ')."\n";
       if ( $this->GetFilterByCallSuffix('') ) $message .="Call Number Suffix = ".$this->GetFilterByCallSuffix(' , ')."\n";
       if ( $this->GetFilterByCircMod('') ) $message .="Circ Modifier = ".$this->GetFilterByCircMod(' , ')."\n";
       if ( $this->GetFilterByStatus('') ) $message .="Status = ".$this->GetFilterByStatus(' , ')."\n";
       
       if ( $this->GetFilterByStatusChanged() ) 
       {
          if ($this->GetFilterByLastStatusType() == "after") $message .="Last Status Change After = ".$this->GetStatusChangeAfter()."\n";
          else if ($this->GetFilterByLastStatusType() == "before") $message .="Last Status Change Before = ".$this->GetStatusChangeBefore()."\n";
          else if ($this->GetFilterByLastStatusType() == "between") $message .="Last Status Change Between = ".$this->GetStatusChangeAfter()." and ".$this->GetStatusChangeBefore()."\n";
          
       }
       
       if ($this->GetFilterByCircCount())
       {
          if ($this->GetCircCountCompare() == "less") $message .="Less than ".$this->GetCircCountVal()." Circs\n";
          else if ($this->GetCircCountCompare() == "more") $message .="More than ".$this->GetCircCountVal()." Circs\n";
       }
       
       if ( $this->GetFilterByCircDate() ) 
       {
          if ($this->GetFilterByCircType() == "after") $message .="Circulated After = ".$this->GetCircAfter()."\n";
          else if ($this->GetFilterByCircType() == "before") $message .="Circulated Before = ".$this->GetCircBefore()."\n";
          else if ($this->GetFilterByCircType() == "between") $message .="Circulated Between = ".$this->GetCircAfter()." and ".$this->GetCircBefore()."\n";
          
       }
       
       $message .="Deleted? = ".$this->GetFilterByDeleted()."\n";
       if ( $this->GetFilterByDeletedDate() ) 
       {
          if ($this->GetFilterByDeletedDateType() == "after") $message .="Deleted After = ".$this->GetFilterByDeletedDateAfter()."\n";
          else if ($this->GetFilterByDeletedDateType() == "before") $message .="Deleted Before = ".$this->GetFilterByDeletedDateBefore()."\n";
          else if ($this->GetFilterByDeletedDateType() == "between") $message .="Deleted Between = ".$this->GetFilterByDeletedDateAfter()." and ".$this->GetFilterByDeletedDateBefore()."\n";
          
       }
                    
       if ($this->GetFilterByBibFile()) 
       {
          $message .="Electronic? = ".$this->GetFilterByElectronic()."\n";
       }
       
       if($this->GetOnlyHolder())
       {
          if($this->only_holder_option)
          {
             $message .="Filter By Only Holder\n";
          }
          else if (!$this->only_holder_option) 
          {
             $message .="Filter By NOT Only Holder\n";
          }
        
       }
       
       if ($this->GetScope() > 1)  $message .="Scoped Links\n";
       if ($this->GetDomain() != "evergreen" )  $message .="SubDomain =".$this->GetDomain()."\n";
       if ($this->GetSearchLinks())  $message .="Search Links\n";
       
       return $message;
       
    }
    
    function GetTextForPreview()
    {
       $message = "FILTERS<br/>";
       
       $message .="Library = ".$this->GetLibrary()."<br/>";
       
       if ($this->GetFilterByCopyLocationGroup())
       {
          $message .="Copy Location Group = ".$this->GetCopyLocationGroupName()."<br/>";
       }
       else
       {
          $message .="Copy Location = ".$this->GetCopyLocations(', ')."<br/>";
       }
       
       if ( $this->GetShelfSitter() ) $message .="Sitting on Shelf since = ".$this->GetShelfSitter()."<br/>";
       if ( $this->GetFilterByPubDate() ) $message .="Published Before = ".$this->GetFilterByPubDate()."<br/>";
       if ( $this->GetFilterByBibFile() ) $message .="Input Bib File = ".$this->GetFilterByBibFile()."<br/>";
       if ( $this->GetFilterByBarcodeFile() ) $message .="Input Barcode File = ".$this->GetFilterByBarcodeFile()."<br/>";
       if ( $this->GetFilterByISBNFile() ) $message .="Input ISBN File = ".$this->GetFilterByISBNFile()."<br />";
       if ( $this->GetFilterByAdded() ) $message .="Added Between = ".$this->GetAddedAfter()." and ".$this->GetAddedBefore()."<br/>";
       if ( $this->GetStatCats('') ) $message .="Stat Cats = ".$this->GetStatCats(' , ')."<br/>";
       if ( $this->GetCallClass() ) $message .="Call Number Class = ".$this->GetCallClass()."<br/>";
       if ( $this->GetCallContains() ) $message .="Call Number Contains = ".$this->GetCallContains()."<br/>";
       if ( $this->GetCallRange() ) $message .="Call Number Range = ".$this->GetCallRange()."<br/>";
       if ( $this->GetFilterByBisac('') ) $message .="Bisac Call Number = ".$this->GetFilterByBisac('/')."\n";
       if ( $this->GetFilterByCollection('') ) $message .="Collection Topics = ".$this->GetFilterByCollection(' , ')."<br/>";
       if ( $this->GetFilterByCallPrefix('') ) $message .="Call Number Prefix = ".$this->GetFilterByCallPrefix(' , ')."<br/>";
       if ( $this->GetFilterByCallSuffix('') ) $message .="Call Number Suffix = ".$this->GetFilterByCallSuffix(' , ')."<br/>";
       if ( $this->GetFilterByCircMod('') ) $message .="Circ Modifier = ".$this->GetFilterByCircMod(' , ')."<br/>";
       if ( $this->GetFilterByStatus('') ) $message .="Status = ".$this->GetFilterByStatus(' , ')."<br/>";
       if ( $this->GetFilterByStatusChanged() ) $message .="Last Status Change Before = ".$this->GetFilterByStatusChanged()."<br/>";
      
       $message .="Deleted? = ".$this->GetFilterByDeleted()."<br/>";;
       $message .="Electronic? = ".$this->GetFilterByElectronic()."<br/>";
       
       if ($this->GetScope() > 1)  $message .="Scoped Links<br/>";
       if ($this->GetDomain() != "evergreen")  $message .="SubDomain =".$this->GetDomain()."<br/>";
       if ($this->GetSearchLinks())  $message .="Search Links<br/>";
       
       return $message;
       
    }
    
    function GetHTMLText()
    {
       $html = "<h3>Filters</h3>";
       
       if ($this->GetFilterByCopyLocationGroup())
       {
          $html .="Copy Location Group = ".$this->GetCopyLocationGroupName()."<br/>";
       }
       else
       {
          $html .="Copy Location = ".$this->GetCopyLocations(', ')."<br/>";
       }
       
       if ( $this->GetShelfSitter() ) $html .="Sitting on Shelf since: ".$this->GetShelfSitter()."<br />";
       if ( $this->GetFilterByPubDate() ) $html .="Published: ".$this->GetFilterByPubDateText()."<br />";//will return the right string 
       if ( $this->GetFilterByBibFile() ) $html .="Input Bib File:".$this->GetFilterByBibFile()."<br />";
       if ( $this->GetFilterByBarcodeFile() ) $html .="Input Barcode File: ".$this->GetFilterByBarcodeFile()."<br />";
       if ( $this->GetFilterByISBNFile() ) $html .="Input ISBN File = ".$this->GetFilterByISBNFile()."<br />";
       if ( $this->GetFilterByAdded() ) 
       {
          if ($this->GetFilterByAddedType() == "after") $html .="Added After: ".$this->GetAddedAfter()."<br />";
          else if ($this->GetFilterByAddedType() == "before") $html .="Added Before: ".$this->GetAddedBefore()."<br />";
          else if ($this->GetFilterByAddedType() == "between") $html .="Added Between: ".$this->GetAddedAfter()." and ".$this->GetAddedBefore()."<br />";
          
       }
       if ( $this->GetStatCats('') ) $html .="Stat Cats: ".$this->GetStatCats(' , ')."<br />";
       if ( $this->GetCallClass() ) $html .="Call Number Class: ".$this->GetCallClass()."<br />";
       if ( $this->GetCallContains() ) $html .="Call Number Contains: ".$this->GetCallContains()."<br />";
       if ( $this->GetCallRange() ) $html .="Call Number Range: ".$this->GetCallRange()."<br />";
       if ( $this->GetFilterByBisac('') ) $html .="Bisac Call Number: ".$this->GetFilterByBisac('/')."<br />";
       if ( $this->GetFilterByCollection('') ) $html .="Collection Topics: ".$this->GetFilterByCollection(' , ')."<br />";
       if ( $this->GetFilterByCallPrefix('') ) $html .="Call Number Prefix: ".$this->GetFilterByCallPrefix(' , ')."<br />";
       if ( $this->GetFilterByCallSuffix('') ) $html .="Call Number Suffix: ".$this->GetFilterByCallSuffix(' , ')."<br />";
       if ( $this->GetFilterByCircMod('') ) $html .="Circ Modifier: ".$this->GetFilterByCircMod(' , ')."<br />";
       if ( $this->GetFilterByStatus('') ) $html .="Status: ".$this->GetFilterByStatus(' , ')."<br />";
       
       if ( $this->GetFilterByStatusChanged() ) 
       {
          if ($this->GetFilterByLastStatusType() == "after") $html .="Last Status Change After: ".$this->GetStatusChangeAfter()."<br />";
          else if ($this->GetFilterByLastStatusType() == "before") $html .="Last Status Change Before: ".$this->GetStatusChangeBefore()."<br />";
          else if ($this->GetFilterByLastStatusType() == "between") $html .="Last Status Change Between: ".$this->GetStatusChangeAfter()." and ".$this->GetStatusChangeBefore()."<br />";
          
       }
       
       if ($this->GetFilterByCircCount())
       {
          if ($this->GetCircCountCompare() == "less") $html .="Less than ".$this->GetCircCountVal()." Circs<br />";
          else if ($this->GetCircCountCompare() == "more") $html .="More than ".$this->GetCircCountVal()." Circs<br />";
       }
       
       if ( $this->GetFilterByCircDate() ) 
       {
          if ($this->GetFilterByCircType() == "after") $html .="Circulated After = ".$this->GetCircAfter()."<br />";
          else if ($this->GetFilterByCircType() == "before") $html .="Circulated Before = ".$this->GetCircBefore()."<br />";
          else if ($this->GetFilterByCircType() == "between") $html .="Circulated Between = ".$this->GetCircAfter()." and ".$this->GetCircBefore()."<br />";
          
       }
       
       $html .="Deleted?: ".$this->GetFilterByDeleted()."<br />";
       if ( $this->GetFilterByDeletedDate() ) 
       {
          if ($this->GetFilterByDeletedDateType() == "after") $html .="Deleted After: ".$this->GetFilterByDeletedDateAfter()."<br />";
          else if ($this->GetFilterByDeletedDateType() == "before") $html .="Deleted Before: ".$this->GetFilterByDeletedDateBefore()."<br />";
          else if ($this->GetFilterByDeletedDateType() == "between") $html .="Deleted Between: ".$this->GetFilterByDeletedDateAfter()." and ".$this->GetFilterByDeletedDateBefore()."<br />";
          
       }
       $html .="Electronic? = ".$this->GetFilterByElectronic()."<br />";
       
       if ($this->GetScope() > 1)  $html .="Scoped Links<br />";
       if ($this->GetDomain() != "evergreen")  $message .="SubDomain =".$this->GetDomain()."<br />";
       if ($this->GetSearchLinks())  $message .="Search Links<br />";
       
       return $html;
       
    }
    
}

?>