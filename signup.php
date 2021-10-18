<?php

$link=mysql_connect("localhost",'root","","booknest");
  //check connect
if($link===false){
die("error: could not connect .".mysql_connect_error());
}
if($_post[sumbit])
{
$regname=$_post["name"];
$regemail=$_post["email"];
$regpassword=$_post["psw"];

$sql="INSERT INTO 'signup'('name','email','password')VALUES('$regname','$regemail','$regpassword')";

if(musql_query($link,$sql)){
   echo"records added successfully.";
   
else
  echo"error:could not able execute $sql.".mysali_error($link);
  }
  }
  
  ?>
</html>