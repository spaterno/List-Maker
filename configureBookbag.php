<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="Cache-control" content="no-cache">
<meta http-equiv="Expires" content="-1">
<meta http-equiv="pragma" content="no-cache">

<title>Configure Bookbag output </title>

<link rel="stylesheet" type="text/css" href="../css/noble.css" />

<script type="text/javascript">


function setPreviousBookbag()
{
   var name = "<?php echo $_GET['name'] ?>";
   var desc = "<?php echo $_GET['desc'] ?>";
  
   document.getElementById('bookbag_name').value = name;
   document.getElementById('bookbag_description').value = desc;
}

function submitBookbag()
{
   var name = document.getElementById('bookbag_name').value;
   var description = document.getElementById('bookbag_description').value;
   
   window.opener.HandleBookbagResult(name, description);
   window.opener = self;
   window.close();
   return false;
}

function cancelBookbag()
{
   window.close();
   return false;
}

</script>
</head>


<body onload="setPreviousBookbag()">

<div id="content">

<h1 class="stat_cats">Configure Bookbag Output </h1>

<form id="stats" >
<div id="bookbag_form">
     <p class="weeding">
        
        Bookbag Name: &nbsp;&nbsp;<input type="text" name="bookbag_name" id="bookbag_name" class="stats" size ="40" required>
        <span class="note">(Title in Bookbag)</span><br />
        
        Description:  <span class="note"> (Description of the list to display in the Bookbag)</span> 
        <br /> <span class="bookbag"><textarea rows="2" cols="30" id="bookbag_description" class="stats"></textarea></span>
 </p>

<div id="done">
	<input type="button" value="Cancel" class="stats" onClick="return cancelBookbag()"/>
	<input type="button" value="Done" class="stats" onClick="return submitBookbag()"/>
</div>

</div> <!-- endstat form -->
</form>

</div><!--end content-->

</body>
</html>