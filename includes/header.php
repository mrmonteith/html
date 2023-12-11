<?php
# headers.php - header for all the scripts
# Modified - 11-06-2023 - Mike Monteith - for updated OS, DB drivers, etc

//require_once 'classes/analytics.class.php';

/*
$user = new user();

if(isset($_SESSION['user_id']))
{
	$user->load_by_primary($_SESSION['user_id']);		
}
*/
//$analytics = new analytics();
//$analytics->put_value("ip",		$_SERVER["REMOTE_ADDR"]);
//$analytics->put_value("uri",	$_SERVER["REQUEST_URI"]);
//$analytics->save();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<link rel="stylesheet" href="./css/w3.css"> 
<link rel="stylesheet" href="./css/menu.css"> 
<link rel="shortcut icon" type="image/favicon" href="<?php echo HOST_NAME; ?>favicon.ico" />		
		<link type="text/css" media="screen" rel="stylesheet" href="<?php echo HOST_NAME; ?>styles/reset.css"/>
		<link type="text/css" media="screen" rel="stylesheet" href="<?php echo HOST_NAME; ?>styles/styles.css"/>
		<link type="text/css" media="screen" rel="stylesheet" href="<?php echo HOST_NAME; ?>styles/smoothness/jquery-ui-1.8.17.custom.css"/>		<script type="text/javascript" src="<?php echo HOST_NAME; ?>js/jquery-3.7.1.min.js"></script>
		<script type="text/javascript" src="<?php echo HOST_NAME; ?>js/jquery-ui-1.8.17.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo HOST_NAME; ?>js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="<?php echo HOST_NAME; ?>js/additional-methods.min.js"></script>

		<!-- User By Check/UnCheck items -->
		<script type="text/javascript" src="<?php echo HOST_NAME; ?>js/scripts.js"></script> 
<style>

  a:link, a:visited, a:active { border: none; color: #cd1532; }

  html,body{
    width: 100%;
    height: 100%;
    margin: 0; /* Space from this element (entire page) and others*/
    padding: 0; /*space from content and border*/
    border: solid #e94b4d;
    border-width: thin;
    display:block;
    box-sizing: border-box;
}
</style>

<body>
	<div id="container" class="w3-container" style="width:100%">
		<div id="header" class="w3-container w3-center" style="width:100%">
			<div id="header_inner_container w3-cell" style="width:50%">
						<a id="logo" href="<?php echo HOST_NAME; ?>"><img alt="logo" width="300" height="100" src="<?php echo HOST_NAME; ?>images/programming.jpg" /></a>
						<h1 id="title" style="color: red; width: 1000px; "><?php  echo TITLE; ?></h1>
						<h2 id="subtitle" style="color: red; width: 1000px; ">My Site - <?php echo $sub_title; ?></h2>
				</table>
			</div>  <!-- end header_inner_container -->
		</div>
	</div>
</body>
