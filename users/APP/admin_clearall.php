<?php  include "admin_p.php";?>


<?php 

							
							
	  
	

?>







 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Status Modifcation for Agent</title>
<style type='text/css'>
<!--
.style7 {color: #0000FF}
.style10 {font-size: 10px; color: #000000; }
.style12 {font-size: 12px; }
.style13 {font-size: 12px; color: #000000; }
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style14 {font-size: 10px}
.style15 {
	font-size: 15px;
	color: #330000;
}
-->
</style>
</head>

<body>
<p align='left'></p>
	<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <label></label>
    <div align="center">
      <label></label>
      <table width="200" border="1" cellspacing="0" cellpadding="0">
        <tr>
          <th scope="row"><table width="476" height="282" border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#999999">
              <th height="19" colspan="4" bgcolor="#CCCCCC" scope="row">Clearance Centre <span style="font-style: italic; color: #00F;">Clear All</span></th>
            </tr>
            <tr>
              <th colspan="4" scope="row"><hr></th>
            </tr>
            <tr>
              <th height="19" colspan="4" scope="row">&nbsp;</th>
            </tr>
            <tr>
              <th width="114" scope="row"><div align="left" class="style12">
                  <div align="center"></div>
              </div></th>
              <td width="138" class="style10"><div align="center" class="style13">
                  <div align="left" class="style15">
                    <div align="left">Agent  Name: </div>
                  </div>
              </div></td>
              <td width="107" class="style15"><?PHP  if (isset($_GET['fname']))
				
				echo  strtoupper($_GET['fname']).strtoupper ($_GET['lname']);
				
				
				?>
              <div align="center"></div></td>
              <td width="117" class="style15">&nbsp;</td>
            </tr>
            <tr>
              <th height="19" scope="row">&nbsp;</th>
              <td colspan="3" class="style13">&nbsp;</td>
            </tr>
            <tr>
              <th scope="row"><div align="left" class="style12">
                  <div align="center"></div>
              </div></th>
              <td ><div align="left" > <span >
                  <div align="left">Email: </div>
              </div></td>
              <td class="style10"><div align="left"><span class="style15">
                <?PHP  if (isset($_GET['ag_email']))
				
				echo  ($_GET['ag_email']);
				
				
				?>
              </span></div></td>
              <td class="style10">&nbsp;</td>
            </tr>
            <tr>
              <th height="19" scope="row">&nbsp;</th>
              <td colspan="3" class="style13">&nbsp;</td>
            </tr>
            <tr>
              <th height="37" colspan="4" scope="row"><label>
                <input name="Confirm" type="submit" id="Confirm" value="Confirm">
              </label></th>
            </tr>
          </table></th>
        </tr>
      </table>
      </label>
      <?PHP

 if (isset($_POST['Confirm'])) { 
 
$ag_email= $_GET['ag_email'];
 
 
 
 

$link = include "conn.php";
 include "conn.php";  
	


 mysql_query("UPDATE agent_cust_transaction SET clear = 'cl' WHERE agent_email = '$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");

echo" <script type='text/javascript'>
 
 {
 window.alert('Your Agent has now been cleared')
window.location='admin_page.php';
 }
</script> ";	
	  }
?>
    </div>
	</form>
<div align="center"></div>
<p>&nbsp; </p>
</body>


</html>



