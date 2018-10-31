<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="Cache-control" content="no-cache">
<meta http-equiv="Expires" content="-1">
<meta http-equiv="pragma" content="no-cache">

<title>Configure Statistical Categories </title>

<link rel="stylesheet" type="text/css" href="../css/noble.css" />

<script type="text/javascript" src="../../shared/ajax/ajax.js"></script>
<script type="text/javascript">

var stat_ajax = new sack();

function getStatCatList()
{   
   var LibName = "<?php echo $_GET['lib'] ?>";
   var Branch = "<?php echo $_GET['branch'] ?>";
   
   var preset_stat = "<?php echo $_GET['stat'] ?>";
   
   if(preset_stat != '-1')
   { 
      var entry = "<?php echo $_GET['entry'] ?>";
      
      if(entry.search("ALL") > -1)
      {
         document.getElementById('all').disabled = false; 
         document.getElementById('all').checked = true; 
         document.getElementById('all_label').style.opacity=  1.0;
      }
      else
      {
         document.getElementById('all').disabled = true; 
         document.getElementById('all_label').style.opacity=  0.6;
      }
      
      stat_ajax.requestFile = "setPrevStatCats.php?lib="+LibName+"&branch="+Branch+"&stat="+preset_stat+"&entry="+entry;	// Specifying which file to get
      stat_ajax.onCompletion = setPreviousStatCats;	// Specify function that will be executed after file has been found
      stat_ajax.runAJAX();		// Execute AJAX function
     
   }
   else
   {
      document.getElementById('all').disabled = true; 
      document.getElementById('all_label').style.opacity=  0.6;
      stat_ajax.requestFile = "getStatCats.php?lib="+LibName+"&branch="+Branch;	// Specifying which file to get
      stat_ajax.onCompletion = createStatCats;	// Specify function that will be executed after file has been found
      stat_ajax.runAJAX();		// Execute AJAX function
   } 
}

function createStatCats()
{
	var obj = document.getElementById('stat_cat');
	eval(stat_ajax.response);	// Executing the response from Ajax as Javascript code
}

function setPreviousStatCats()
{
	var stat_obj = document.getElementById('stat_cat');
	var checkbox_div = document.getElementById('checkboxes');
	eval(stat_ajax.response);	// Executing the response from Ajax as Javascript code
}

function getStatCatEntries(statCat)
{     
   document.getElementById('checkboxes').innerHTML = "";
   
   if (statCat > -1)
   {
      document.getElementById('all').disabled = false; 
      document.getElementById('all_label').style.opacity=  1.0;
   }
   else
   {
      document.getElementById('all').disabled = true; 
      document.getElementById('all_label').style.opacity=  0.6;
   }
   
   if(statCat > 0)
   {
      stat_ajax.requestFile = "getStatCatEntryList.php?statCat="+statCat;	// Specifying which file to get
      stat_ajax.onCompletion = createStatCatEntries;	// Specify function that will be executed after file has been found
      stat_ajax.runAJAX();		// Execute AJAX function
   }
}

function createStatCatEntries()
{
	var checkbox_div = document.getElementById('checkboxes');
	eval(stat_ajax.response);	// Executing the response from Ajax as Javascript code
}

function selectAll(all) 
{
   var checkbox_array = document.getElementsByName('SC_entries');
   for(var i=0; i<checkbox_array.length; i++)
   {
      checkbox_array[i].checked = all.checked;
   }
}

function submitStatCat()
{
   //Stat cat id (stat_cat-entry ids) ALL for all
   var result = (document.getElementById('stat_cat').value).toString();
   
   if (result == '-1')
   {
      alert("Please select a Stat Cat or Select Cancel");
      return;
   }
   
   if (document.getElementById('all').checked == true)
   {
      result +=" (ALL)";
   }
   else
   {
      var checkbox_array = document.getElementsByName('SC_entries');
      result +=" (";
      for(var i=0; i<checkbox_array.length; i++)
      {
         if(checkbox_array[i].checked == true)
         {
            result += (checkbox_array[i].value).toString()+",";
         }
      }
      //remove the last comma
      result= result.slice(0, -1);
      result +=")";
   }
   
   window.opener.HandleStatCatResult(result);
   window.opener = self;
   window.close();
   return false;
}

function cancelStatCat()
{
   window.opener.HandleStatCatResult('0');
   window.close();
   return false;
}

</script>
</head>


<body onload="getStatCatList()">

<div id="content">

<h1 class="stat_cats">Configure Statistical Categories </h1>

<form id="stats" >

<div id="stat_cat_form">
<label id="select_label"> Stat Cat: </label>
<select id="stat_cat" name="stat_cat"  onchange="getStatCatEntries(this.value)" class="stats">
</select>
      <input type="checkbox" id="all" name="all" onClick="selectAll(this)"/> 
      <label id="all_label"> Select All</label>
<br /><br />
<div id="checkboxes">
</div><!--end checkboxes -->


<div id="done">
	<input type="button" value="Cancel" class="stats" onClick="return cancelStatCat()"/>
	<input type="button" value="Done" class="stats" onClick="return submitStatCat()"/>
</div>

</div> <!-- endstat cat form -->
</form>

</div><!--end content-->

</body>
</html>