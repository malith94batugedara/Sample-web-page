<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die ('Could not connect :' .mysql_error());
	
}
mysql_select_db("db",$con);
$sql="INSERT INTO details(Name,EMAIL,MESSAGE)
VALUES
('$_POST[Name]','$_POST[EMAIL]','$_POST[MESSAGE]')";
if(!mysql_query($sql,$con)){
	die ('error :'.mysql_error());

}
echo "1 record added";
mysql_close($con);





?>