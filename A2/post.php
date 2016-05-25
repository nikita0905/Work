<?php  
$json=$_GET ['json'];
$obj = json_decode($json);

$con = mysql_connect('localhost','root','user12345') or die('Cannot connect to the DB');
mysql_select_db('testdb',$con);
mysql_query("CALL insertUserData('"+$obj->{'name'}+"', '"+$obj->{'addr'}+"','"+$obj->{'phone'}+"')");
mysql_close($con);
$posts = array($json);
  $posts = array(1);
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts)); 
  ?>


