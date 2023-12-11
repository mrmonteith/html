<?php
	session_start();	
	$_SESSION['message'] = '';

	require_once "includes/config.php";
//	require_once "includes/classes/facilities.class.php";
//	require_once "includes/classes/states.class.php";
	
	$title = "Home";
	$sub_title = $title;
	$admin_page = false;
	$reset = false;
//	require_once "includes/header.php";
 ?>

<body>
<?php
  require_once "includes/header.php";
?>

  <!--
  <div id="menu" class="w3-container w3-sidebar w3-light-grey w3-bar" style="width:15%">
    <ul>
      <li><a href="http://www.free-css.com/">CSS Templates</a></li>
      <li><a href="http://www.free-css.com/">CSS Layouts</a></li>
      <li><a href="http://www.free-css.com/">CSS Books</a></li>
      <li><a rel="nofollow" target="_blank" href="http://www.duckduckgo.com/" title="Duck Duck Go Search">Duck Duck Go Search</a></li>
    </ul>
  </div>
-->
  <!-- Sidebar -->
  <!--
  <div class="w3-container w3-cell w3-sidebar w3-light-grey w3-bar" style="width:15%">
    <h3 class="w3-bar-item" style="background-color:Tomato;">Menu</h3>
    <a href="http://www.free-css.com/" class="w3-bar-item w3-button w3-round-large">Custom Corner Round</a>
    <a href="http://www.free-css.com/free-css-layouts.php" class="w3-bar-item w3-button w3-round-large">HP Pallet Labels</a>
    <a href="#" class="w3-bar-item w3-button w3-round-large">Documentation</a>
  </div>
-->
  <!-- Page Content -->
  <!--
  <div class="w3-container w3-cell w3-grey w3-center" >
   <h1>My Page</h1>

    More </p>
   </p>
    More text </p>
    AAAAAABBBBBBBBCCCCCCCDDDDDDDEEEEEEEFFFFFFFGGGGGGGHHHHHHIIIIIIIJJJJJJJKKKKKKKLLLLLLLAAAAAABBBBBBBBCCCCCCCDDDDDDDEEEEEEEFFFFFFFGGGGGGGHHHHHHIIIIIIIJJJJJJJKKKKKKKLLLLLLLAAAAAABBBBBBBBCCCCCCCDDDDDDDEEEEEEEFFFFFFFGGGGGGGHHHHHHIIIIIIIJJJJJJJKKKKKKKLLLLLLL
  </p>
    More  </p>
  </p>
  </div>
-->
  <div class="w3-container w3-orange w3-cell" style="width:10%">
    <h3 class="w3-bar-item w3-bar" style="background-color:orange;">Menu</h3>
    <a href="http://www.free-css.com/" class="w3-bar-item w3-button w3-round-large" target="_blank">Custom Corner Round</a></p>
    <a href="http://www.free-css.com/free-css-layouts.php" class="w3-bar-item w3-button w3-round-large" target="_blank">HP Pallet Labels</a></p>
    <a href="#" class="w3-bar-item w3-button w3-round-large" target="_blank">Documentation</a>
 </div>
 
  <div class="w3-container w3-green w3-cell" style="width:90%">
    <p>Hello W3.CSS Layout.</p>
    <p>Hello W3.CSS Layout.</p>
    <p>Hello W3.CSS Layout.</p>
    <p>Hello W3.CSS Layout.</p>   
     <h1>My Page</h1>
 
     More </p>
    </p>
     More text </p>
     AAAAAABBBBBBBBCCCCCCCDDDDDDDEEEEEEEFFFFFFFGGGGGGGGGGGGGGGGG
   </p>
     More  </p>
   </p>
  </div>

</div>
</body>
</html>

<?php
	require_once "includes/footer.php";
?>
