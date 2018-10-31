<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="Cache-control" content="no-cache">
<meta http-equiv="Expires" content="-1">
<meta http-equiv="pragma" content="no-cache">

<title>Configure Spreadsheet output </title>

<link rel="stylesheet" type="text/css" href="../css/noble.css" />
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="form_functions.js"></script>

<script src="../../shared/sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../shared/sweetalert2/dist/sweetalert2.css">

<script type="text/javascript">

var use_circ_between_filter = false;

function SetCallNumDisplay()
{ 
   document.getElementById('call_number').checked = true;
}

function SetActiveDate()
{
   document.getElementById('active_date').checked=true;
}

function SetLifetimeCircs()
{
   document.getElementById('lifetime_circ').checked=true;
}

function SetYTDCircs()
{
   document.getElementById('ytd_circ').checked=true;
}

function SetCirculationLibrary()
{
   document.getElementById('circ_lib').checked=true;
}

function setPreviousSpreadsheet()
{
   var order = "<?php echo $_GET['order'] ?>";
   var display = "<?php echo $_GET['display'] ?>";
   var format = "<?php echo $_GET['format'] ?>";
   var options = "<?php echo $_GET['options'] ?>";
     
   if (order.includes('Title')) document.getElementById('title_order').checked = true;
   else if (order.includes('Author')) document.getElementById('author_order').checked = true;
   else if (order.includes('Call')) document.getElementById('call_num_order').checked = true;
   else if (order.includes('Active')) document.getElementById('active_order').checked = true;
   else if (order.includes('Lifetime')) document.getElementById('lifetime_circ_order').checked = true;
   else if (order.includes('Selected')) document.getElementById('circ_between_order').checked = true;
   else if (order.includes('YTD')) document.getElementById('ytd_circ_order').checked = true;
   
   if (format.includes('Excel')) document.getElementById('excel_file').checked = true;
   else if (format.includes('CSV')) document.getElementById('csv_file').checked = true;
  
   if (options.includes('SummarySheet')) 
   {
      document.getElementById('summary_sheet').checked = true;
   }
   if (options.includes('SingleSheet')) 
   {
      document.getElementById('single_sheet').checked = true;
   }
   if (options.includes('BibSheet')) 
   {
      document.getElementById('bib_sheet').checked = true;
   }
   
   //pull apart the display string and figure out what needs to be checked
   if (display.includes('Author')) document.getElementById('author').checked = true;
   if (display.includes('Barcode')) document.getElementById('barcode').checked = true;
   if (display.includes('BibId')) document.getElementById('bib_id').checked = true;
   if (display.includes('CallNumber')) document.getElementById('call_number').checked = true;
   if (display.includes('CopyLocation')) document.getElementById('copy_loc').checked = true;
   if (display.includes('LastCheckin')) document.getElementById('last_checkin').checked = true;
   if (display.includes('LifetimeCirc')) document.getElementById('lifetime_circ').checked = true;
   if (display.includes('OnlyHolder')) document.getElementById('only_holder').checked = true;
   if (display.includes('Part')) document.getElementById('part').checked = true;
   if (display.includes('Prefix')) document.getElementById('prefix').checked = true;
   if (display.includes('PubDate')) document.getElementById('pub_date').checked = true;
   if (display.includes('Suffix')) document.getElementById('suffix').checked = true;
   if (display.includes('Title')) document.getElementById('title').checked = true;
   
   if (display.includes('Active')) document.getElementById('active_date').checked = true;
   if (display.includes('AgeProtection')) document.getElementById('age_protection').checked = true;
   if (display.includes('AlertMessage')) document.getElementById('alert_message').checked = true;
   if (display.includes('AmazonDirect')) document.getElementById('amazon_direct').checked = true;
   if (display.includes('AmazonSearch')) document.getElementById('amazon_search').checked = true;  
   if (display.includes('AcquisitionCost')) document.getElementById('aquisition_cost').checked = true;  
   if (display.includes('CallNumberClass')) document.getElementById('call_class').checked = true; 
   if (display.includes('CallNumSortKey')) document.getElementById('sortkey').checked = true;
   if (display.includes('CatalogLink')) document.getElementById('catalog_link').checked = true;
   if (display.includes('TitleLink')) 
   {
      document.getElementById('catalog_link').checked = true; 
      document.getElementById('link_type').value = "title";
      
   }
   if (display.includes('CircModifier')) document.getElementById('circ_modifier').checked = true;
   if (display.includes('CirculationLibrary')) document.getElementById('circ_lib').checked = true;
   if (display.includes('CircsinSelectedDates') )
   {
      document.getElementById('circs_between').disabled = true;
      document.getElementById('circ_start').disabled = true;
      document.getElementById('circ_end').disabled = true;
      
      document.getElementById('circ_between_span').style.display = "inline";
      use_circ_between_filter = true;
   }
   else
   {
      document.getElementById('circs_between').disabled = false;
      document.getElementById('circ_start').disabled = false;
      document.getElementById('circ_end').disabled = false;
      
      document.getElementById('circ_between_span').style.display = "none";
      use_circ_between_filter = false;
   }
   
   if (display.includes('CircsBetween')) 
   {
      document.getElementById('circs_between').checked = true;
        
      //GET THE NEXT TWO PARAMETERS
      var pos = display.indexOf("CircsBetween");
      pos +=12;
      var start = display.substring(pos, pos+10);
      var end_pos = pos+11;
      var end = display.substring(end_pos, end_pos+10);
      
      document.getElementById('circ_start').value = start;
      document.getElementById('circ_end').value = end;  
   }
   if (display.includes('CopyId')) document.getElementById('copy_id').checked = true;
   if (display.includes('CopyStatus')) document.getElementById('copy_status').checked = true;
   if (display.includes('CoverImage')) document.getElementById('cover_image').checked = true;
   if (display.includes('CreateDate')) document.getElementById('create_date').checked = true;
   if (display.includes('Deposit')) document.getElementById('deposit').checked = true;
   if (display.includes('DueDate')) document.getElementById('due_date').checked = true;
   if (display.includes('FineLevel')) document.getElementById('fine_level').checked = true;
   if (display.includes('Floating')) document.getElementById('floating').checked = true;
   if (display.includes('Goodreads')) document.getElementById('goodreads').checked = true;
   if (display.includes('HoldCount')) document.getElementById('holds').checked = true;
   if (display.includes('InHouse')) document.getElementById('in_house').checked = true;
   if (display.includes('ISBN')) document.getElementById('isbn').checked = true;
   if (display.includes('LastCheckout')) document.getElementById('checkout').checked = true;
   if (display.includes('LastFyCircs')) document.getElementById('last_fy_circ').checked = true;
   if (display.includes('LoanDuration')) document.getElementById('loan_duration').checked = true;
   if (display.includes('OCLCNumber')) document.getElementById('oclc_number').checked = true;
   if (display.includes('OtherLibraryCount')) document.getElementById('other_lib_count').checked = true;
   if (display.includes('OwningLibrary')) document.getElementById('owning_lib').checked = true;
   if (display.includes('Price')) document.getElementById('price').checked = true;
   if (display.includes('PublicNote')) document.getElementById('public_note').checked = true;
   if (display.includes('Publisher')) document.getElementById('publisher').checked = true;
   if (display.includes('Reference')) document.getElementById('reference').checked = true;
   if (display.includes('StaffNote')) document.getElementById('staff_note').checked = true;
   if (display.includes('StatCat')) document.getElementById('stat_cat').checked = true;
   if (display.includes('StatusChange')) document.getElementById('status_change').checked = true;
   if (display.includes('Summary')) document.getElementById('summary').checked = true;
   if (display.includes('YTDCirc')) document.getElementById('ytd_circ').checked = true;
}

function submitSpreadsheet()
{
   var order = "";
   var format= "";
   var display ="";
   var options = "";
   
   if (document.getElementById('title_order').checked) order = 'Title';
   else if (document.getElementById('author_order').checked) order = 'Author';
   else if (document.getElementById('call_num_order').checked) order = 'Call Number';
   else if (document.getElementById('active_order').checked) order = 'Active Date';
   else if (document.getElementById('lifetime_circ_order').checked) order = 'Lifetime Circs';
   else if (document.getElementById('circ_between_order').checked) order = 'Circs in Selected Dates';
   else if (document.getElementById('ytd_circ_order').checked) order = 'YTD Circs';
   
   if (document.getElementById('excel_file').checked) format = 'Excel';
   else if (document.getElementById('csv_file').checked) format = 'CSV'; 
   
   if (document.getElementById('summary_sheet').checked) options += 'summarysheet*';
   if (document.getElementById('single_sheet').checked) options += 'singlesheet*';
   if (document.getElementById('bib_sheet').checked) options += 'bibsheet*';
  
   //make a display string to send back. Use * to separate
   if (document.getElementById('author').checked) display += "author*";
   if (document.getElementById('barcode').checked) display += "barcode*";
   if (document.getElementById('bib_id').checked) display += "bibid*";
   if (document.getElementById('call_number').checked) display += "callnum*";
   if (document.getElementById('copy_loc').checked) display += "copyloc*";
   if (document.getElementById('last_checkin').checked) display += "lastcheckin*";
   if (document.getElementById('lifetime_circ').checked) display += "lifetimecirc*";
   if (document.getElementById('only_holder').checked) display += "onlyholder*";
   if (document.getElementById('part').checked) display += "part*";
   if (document.getElementById('prefix').checked) display += "prefix*";
   if (document.getElementById('pub_date').checked) display += "pubdate*";
   if (document.getElementById('suffix').checked) display += "suffix*";
   if (document.getElementById('title').checked) display += "title*";
   
   if (document.getElementById('active_date').checked) display += "active*";
   if (document.getElementById('age_protection').checked) display += "ageprotection*";
   if (document.getElementById('amazon_direct').checked) display += "adirect*";
   if (document.getElementById('amazon_search').checked) display += "asearch*";
   if (document.getElementById('alert_message').checked) display += "alert*";
   if (document.getElementById('aquisition_cost').checked) display += "cost*";
   if (document.getElementById('call_class').checked) display += "class*";
   if (document.getElementById('sortkey').checked) display += "sortkey*";
   if (document.getElementById('checkout').checked) display += "checkout*";
   if (document.getElementById('catalog_link').checked) 
   {
      var link = document.getElementById("link_type");
      var link_type = link.options[link.selectedIndex].value;
      
      if (link_type == "title")  display += "titlelink*";
      else if  (link_type == "column") display += "catlink*";
   }
   
   if (use_circ_between_filter)
   {
      display += "circselected*";
   }
   else if (document.getElementById('circs_between').checked) 
   {
      var start = document.getElementById('circ_start').value;
      
      var end = document.getElementById('circ_end').value;
      
      if (start.length > 1 && isValidDate(start) && end.length > 1 && isValidDate(end))
      {
         display += "circbetween*"+start+"*"+end+"*";
      }
      else
      {
         
         swal('Error', "Please format circ between date as MM/DD/YYYY or use datepicker. Dates cannot be before 2000 and cannot be in the future.", 'error');
         return false;
      }
      
   }
   if (document.getElementById('circ_lib').checked) display += "circlib*";
   if (document.getElementById('circ_modifier').checked) display += "circmod*";
   if (document.getElementById('copy_id').checked) display += "copyid*";
   if (document.getElementById('copy_status').checked) display += "copystatus*";
   if (document.getElementById('cover_image').checked) display += "coverimage*";
   if (document.getElementById('create_date').checked) display += "createdate*";
   if (document.getElementById('due_date').checked) display += "duedate*";
   if (document.getElementById('fine_level').checked) display += "finelevel*";
   if (document.getElementById('floating').checked) display += "floating*";
   if (document.getElementById('goodreads').checked) display += "goodreads*";
   if (document.getElementById('holds').checked) display +="holds*";
   if (document.getElementById('in_house').checked) display += "inhouse*";
   if (document.getElementById('isbn').checked) display += "isbn*";
   if (document.getElementById('last_fy_circ').checked) display += "lastfy*";
   if (document.getElementById('loan_duration').checked) display += "loanduration*";
   if (document.getElementById('oclc_number').checked) display += "oclc*";
   if (document.getElementById('other_lib_count').checked) display += "otherlibcount*";
   if (document.getElementById('owning_lib').checked) display += "owninglib*";
   if (document.getElementById('price').checked) display += "price*";
   if (document.getElementById('public_note').checked) display += "publicnote*";
   if (document.getElementById('publisher').checked) display += "publisher*";
   if (document.getElementById('reference').checked) display += "reference*";
   if (document.getElementById('staff_note').checked) display += "staffnote*";
   if (document.getElementById('stat_cat').checked) display += "statcat*";
   if (document.getElementById('status_change').checked) display += "statchange*";
   if (document.getElementById('summary').checked) display += "summary*";
   if (document.getElementById('ytd_circ').checked) display += "ytdcirc";
   
   window.opener.HandleSpreadsheetResult(order, display, format, options);
   window.opener = self;
   window.close();
   return false;
}

function cancelSpreadsheet()
{
   window.opener.HandleSpreadsheetResult();
   window.close();
   return false;
}

function selectAll(all, name) 
{
   var checkbox_array = document.getElementsByName(name);
   for(var i=0; i<checkbox_array.length; i++)
   {
      checkbox_array[i].checked = all.checked;
   }
}

$(function() 
{
    
   $( "#circ_start" ).datepicker(
    {
      changeMonth: true,
      changeYear: true,
      yearRange: "2012:",
      minDate: new Date(2012, 5, 1)
    });
    
    $( "#circ_end" ).datepicker(
    {
      changeMonth: true,
      changeYear: true,
      yearRange: "2012:",
      minDate: new Date(2012, 5, 1)
    });
    
});

</script>
</head>


<body onload="setPreviousSpreadsheet()">

<div id="content">

<h1 class="stat_cats">Configure Spreadsheet Output </h1>

<form id="stats" >
<div id="preview_form">

<div class="done">
	<input type="button" value="Cancel" class="stats" onClick="return cancelSpreadsheet()"/>
	<input type="button" value="Done" class="stats" onClick="return submitSpreadsheet()"/>
</div>

<h3 class="weeding"> Sort Order: </h3>
<p class="weeding">
      <input type="radio" name="order" value="title" id="title_order">Title <br/>
      <input type="radio" name="order" value="author" id="author_order">Author<br/>
      <input type="radio" name="order" value="call" id="call_num_order" onclick="SetCallNumDisplay()" checked>Call Number <br/>
      <input type="radio" name="order" value="added" id="active_order" onclick="SetActiveDate()" disabled>Active Date<br/>
      <input type="radio" name="order" value="lifetime" id="lifetime_circ_order" onclick="SetLifetimeCircs()">Lifetime Circulations<br/>
      <span id ="circ_between_span"><input type="radio" name="order" value="circ_between" id="circ_between_order">Circulations in Selected Dates<br/></span>
      <input type="radio" name="order" value="ytd" id="ytd_circ_order" onclick="SetYTDCircs()">YTD Circulations (Fiscal Year)
</p>

<hr />
   
  <h3 class="weeding"> Display Options: </h3>
   
   <div id="display">  
   <table id="display_table">
   <tbody>
   <tr>
     <td>
     
     <table id="display_defaults">
      <thead>
         <th> Defaults
             <input type="checkbox" id="all" name="all" onClick="selectAll(this, 'defaults')" checked/> 
              <label id="all_label" style="font-weight:normal;"> Select All</label> 
         </th>
      </thead>

      <tbody>
      
        <tr>
        <td>
         <input type="checkbox" id="author" name="defaults"  /> 
         <label id="author_label"> Author</label><br />
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="barcode" name="defaults" onchange="setBranchCheckbox(this.checked)"/>
          <label id="barcode_label"> Barcode </label>
        </td>
      </tr>
      
      <tr>
        <td>        
          <input type="checkbox" id="bib_id" name="defaults"/>
         <label id="bib_id_label"> Bib Id </label> <img src='https://syrup.noblenet.org/shared/images/question-mark-small.png' class="help" onclick="JavaScript:swal('Bib Id','Also known as Database Id, Document Id or Record Id.', 'info');"/>
        </td>
      </tr>
      
     <tr>
        <td>
         <input type="checkbox" id="call_number" name="defaults"/>
         <label id="call_number_label"> Call Number </label> 
      </tr>
      
       <tr>
        <td>
           <input type="checkbox" id="copy_loc" name="defaults" /> 
           <label id="copy_loc_label"> Copy Location</label>
        </td>
      </tr>
      
        <tr>
        <td>
          <input type="checkbox" id="last_checkin" name="defaults" /> 
          <label id="last_checkin_label"> Last Checkin </label>
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="lifetime_circ" name="defaults" /> 
          <label id="lifetime_label"> Lifetime Circs </label>
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="only_holder" name="defaults" /> 
          <label id="only_holder_label"> Only Holder </label>
        </td>
      </tr>
      
      <tr>
        <td>
         <input type="checkbox" id="part" name="defaults"  /> 
         <label id="part_label"> Part</label><br />
       </td>
      </tr>
      
       <tr>
        <td>
         <input type="checkbox" id="prefix" name="defaults"/>
         <label id="call_number_label"> Prefix</label>
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="pub_date" name="defaults" /> 
          <label id="pub_date_label"> Publication Date</label>
        </td>
      </tr>
      
        <tr>
        <td>
         <input type="checkbox" id="suffix" name="defaults"/>
         <label id="call_number_label"> Suffix</label>
        </td>
      </tr>
      
      
      <tr>
        <td>
           <input type="checkbox" id="title" name="defaults"  /> 
           <label id="title_label"> Title</label>
         </td>
      </tr>
      
      </tbody>
      </table>
      </td>

     <td>
      
      <table id="display_options">
      <thead>
         <th> Optional 
                <input type="checkbox" id="all" name="all" onClick="selectAll(this, 'options')"/> 
                <label id="all_label" style="font-weight:normal;"> Select All</label> 
         </th>
      </thead>
      <tbody>
   
      <tr> <td class="output_section"> Bibliographic Data </td></tr> 
         
      <tr>
        <td>
          <input type="checkbox" id="cover_image" name="options" />
          <label id="cover_label"> Cover Image </label><img src='https://syrup.noblenet.org/shared/images/question-mark-small.png' class="help" onclick="JavaScript:swal('Cover Image','Link to the Cover Image displayed in catalog.', 'info');"/>
        </td>
      </tr>
      
       <tr>
        <td>
          <input type="checkbox" id="isbn" name="options" /> 
          <label id="isbn_label"> ISBN </label>
        </td>
      </tr>
   
       <tr>
        <td>
          <input type="checkbox" id="oclc_number" name="options" /> 
          <label id="oclc_label"> OCLC Number </label>
        </td>
      </tr>
      
       
      <tr>
        <td>
          <input type="checkbox" id="publisher" name="options" /> 
          <label id="publisher_label"> Publisher</label>
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="summary" name="options" />
          <label id="summary_label"> Summary </label>
        </td>
      </tr>
      
     <tr> <td class="output_section"> Dates </td></tr>  

      <tr>
        <td>
          <input type="checkbox" name="options" id="active_date"/>
          <label id="active_date_label"> Active Date </label><br />
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="create_date" name="options" />
          <label id="create_label"> Create Date </label>
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="status_change" name="options" />
          <label id="status_change_label"> Status Change Date </label>
        </td>
      </tr>
      
       <tr>
        <td>
          <input type="checkbox" id="checkout" name="options" /> 
          <label id="checkout_label"> Last Checkout </label>
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="due_date" name="options" />
          <label id="due_date_label"> Due Date </label>
        </td>
      </tr>
      
     <tr> <td class="output_section"> Counts </td></tr>  
     
     <tr>
        <td>
          <input type="checkbox" id="last_fy_circ" name="options" /> 
          <label id="last_fy_circ_label"> Last FY Circ </label>
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="ytd_circ" name="options" />
          <label id="ytd_label"> YTD Circ (FY) </label>
        </td>
      </tr>
      
       <tr>
        <td>
          <input type="checkbox" id="circs_between" name="options"/> 
          <label id="circs_between_label"> Circs Between</label>
          <input type="text" name="circ_start" maxlength="10" size="10" id="circ_start">  and 
          <input type="text" name="circ_end" maxlength="10" size="10" id="circ_end">  </label>
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="holds" name="options" /> 
          <label id="holds_label"> Hold Count </label><img src='https://syrup.noblenet.org/shared/images/question-mark-small.png' class="help" onclick="JavaScript:swal('Hold Count','Writes two columns of holds info. One for Holds for pickup at this library and onne for NOBLE-wide hold count. Include Bib, Copy, Volume, and Part Holds. Suspended Holds included.', 'info');"/>
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="in_house" name="options" /> 
          <label id="in_house_label"> In House Usage </label>
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="other_lib_count" name="options" /> 
          <label id="other_lib_label"> Other Library Count</label><img src='https://syrup.noblenet.org/shared/images/question-mark-small.png' class="help" onclick="JavaScript:swal('Other Library Count','Count of copies attached to this bib for all other libraries. This will include items that are not visible in the OPAC.', 'info');"/>
        </td>
      </tr>
      
      <tr> <td class="output_section"> Call Number Info </td></tr>  
      
      <tr>
        <td>
          <input type="checkbox" id="call_class" name="options" /> 
          <label id="call_class_label"> Call Number Class</label>
        </td>
      </tr>
      
       <tr>
        <td>
          <input type="checkbox" id="sortkey" name="options" /> 
          <label id="sortkey_label"> Call Num Sort Key </label>
        </td>
      </tr>
      
      <tr> <td class="output_section"> Item Attributes </td></tr>  
      
       <tr>
        <td>
           <input type="checkbox" id="copy_id" name="options" /> 
           <label id="copy_id_label"> Copy Id</label>
        </td>
      </tr>
      
       <tr>
        <td>
          <input type="checkbox" id="copy_status" name="options" />
          <label id="status_label"> Copy Status </label>
        </td>
      </tr>
      
       <tr>
        <td>
          <input type="checkbox" id="circ_lib" name="options" /> 
          <label id="circ_lib_label"> Circulation Library </label>
        </td>
      </tr>
      
       <tr>
        <td>
          <input type="checkbox" id="owning_lib" name="options" /> 
          <label id="owning_lib_label"> Owning Library </label>
        </td>
      </tr>
       
      <tr>
        <td>
          <input type="checkbox" name="options" id="age_protection"/>
          <label id="age_protect_label"> Age Protection </label><br />
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="floating" name="options" />
          <label id="floating_label"> Floating Collection </label>
        </td>
      </tr>
      
     <tr>
        <td>
          <input type="checkbox" id="loan_duration" name="options" /> 
          <label id="loan_duration_label"> Loan Duration </label>
        </td>
      </tr>
      
       <tr>
        <td>
          <input type="checkbox" id="fine_level" name="options" />
          <label id="fine_level_label"> Fine Level </label>
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="circ_modifier" name="options" /> 
          <label id="circ_modifier_label"> Circ Modifier</label>
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" name="options" id="alert_message"/>
          <label id="alert_messaeg_label"> Alert Message </label><br />
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="price" name="options" /> 
          <label id="price_label"> Price</label>
        </td>
      </tr>
      
       <tr>
        <td>
          <input type="checkbox" name="options" id="aquisition_cost"/>
          <label id="cost_label"> Acquisition Cost </label><br />
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="reference" name="options" /> 
          <label id="reference_label"> Reference </label>
        </td>
      </tr>
      
      <tr>
        <td>
          <input type="checkbox" id="stat_cat" name="options"/>
          <label id="stat_cat_label"> Statistical Category </label>
        </td>
      </tr>
      
      <tr> <td class="output_section"> Notes </td></tr>  
      
      <tr>
        <td>
          <input type="checkbox" id="public_note" name="options" /> 
          <label id="public_note_label"> Public Note </label>
        </td>
      </tr>
      
       <tr>
        <td>
          <input type="checkbox" id="staff_note" name="options" /> 
          <label id="staff_note_label"> Staff Note </label>
        </td>
      </tr>
          
     
      <tr> <td class="output_section"> Links </td></tr> 
      
       <tr>
        <td>
          <input type="checkbox" id="catalog_link" name="options" /> 
          <label id="catalog_link_label"> Catalog Link</label>
          <select id="link_type" class="stats">
           <option value="column"> Column </option>
           <option value="title"> Title</option>
         </select>
         <img src='https://syrup.noblenet.org/shared/images/question-mark-small.png' class="help" onclick="JavaScript:swal('Title Link','Link will be in its own column or the title will be hyperlinked.', 'info');"/>
        </td>
      </tr>

       <tr>
        <td>
          <input type="checkbox" id="goodreads" name="options" />
          <label id="goodreads_label"> Goodreads Link </label><img src='https://syrup.noblenet.org/shared/images/question-mark-small.png' class="help" onclick="JavaScript:swal('Goodreads Link','Link to a Goodreads search for title.', 'info');" />
        </td>
      </tr>
      
      <tr>
        <td>
         <input type="checkbox" id="amazon_direct" name="options"/>
         <label id="amazon_direct_label"> Amazon Direct Link </label>  <img src='https://syrup.noblenet.org/shared/images/question-mark-small.png' class="help" onclick="JavaScript:swal('Amazon Direct Link','Link to an Amazon ISBN search.', 'info');"/>
       </td>
      </tr>
      
      <tr>
        <td>
         <input type="checkbox" id="amazon_search" name="options"/>
         <label id="amazon_search"> Amazon Search Link </label> <img src='https://syrup.noblenet.org/shared/images/question-mark-small.png' class="help" onclick="JavaScript:swal('Amazon Search Link','Link to an Amazon title search.', 'info');"/>
        </td>
      </tr>
      
       
      </tbody>
      </table>
      
     </td>
     </tr>
     </tbody>
     </table>
     
   </div>
<hr />
<h3 class="weeding"> File Format: </h3> 
   <p class="weeding">
      <input type="radio" name="file_format" value="excel" id="excel_file" checked>
         <label id="excel_label">Excel&nbsp;</label>
             <img src='https://syrup.noblenet.org/shared/images/question-mark-small.png' class="help" onclick="JavaScript:swal('Excel','Produces a properly formatted Excel file with special formatting for number and date fields.', 'info');" /><br />
     
     <input type="radio" name="file_format" value="csv" id="csv_file">
     <label id="csv_label">CSV&nbsp;</label>
              <img src='https://syrup.noblenet.org/shared/images/question-mark-small.png' class="help" onclick="JavaScript:swal('CSV','Can be imported into any spreadsheet program. Does not include any special formatting of fields.', 'info');" /><br />
     
  </p>
  
  <h3 class="weeding"> Options: </h3> 
  <p class="weeding">
     
      <input type="checkbox" id="summary_sheet" name="summary_sheet" /> 
      <label for="summary"> Include Summary Sheet </label>
         <img src='https://syrup.noblenet.org/shared/images/question-mark-small.png' class="help" onclick="JavaScript:swal('Summary Sheet','Counts of Total Copies, Bibs, and Circulations, will be included on a seperate sheet. Median, Mean, Mode, Min, and Max date will also be included for Circ Counts and Publication Date. Turnover also included.','info');"/><br />  
      
      <input type="checkbox" id="single_sheet" name="single_sheet" onchange="JavaScript:SetCirculationLibrary(this.checked)" /> 
      <label for="single"> Use Single Sheet </label>
         <img src='https://syrup.noblenet.org/shared/images/question-mark-small.png' class="help" onclick="JavaScript:swal('Single Sheet','Write out items for all branches on a single sheet.','info');" /><br />    
      
      <input type="checkbox" id="bib_sheet" name="bib_sheet" /> 
      <label for="bib_sheet"> Include Bib Sheet </label>
         <img src='https://syrup.noblenet.org/shared/images/question-mark-small.png' class="help" onclick="JavaScript:swal('Bib Sheet','Create a sheet with copies grouped together into a single bib row.','info');"/><br /> 
 </p>
    
    <div id="debug"></div>

<div class="done">
	<input type="button" value="Cancel" class="stats" onClick="return cancelSpreadsheet()"/>
	<input type="button" value="Done" class="stats" onClick="return submitSpreadsheet()"/>
</div>

</div> <!-- endstat form -->
</form>

</div><!--end content-->

</body>
</html>