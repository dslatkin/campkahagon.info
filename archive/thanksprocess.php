<?php
  $name = $_REQUEST['name'] ;
  $message = $_REQUEST['message'] ;

  mail( "zzbogie@hotmail.com", "Feedback Form Results",
   "FROM: ".$name." MESSAGE: ".$message, "From: $name" );
  header( "Location: http://www.campkahagon.info/thanks.php" );
?>
