<?php  

if(isset($_GET['id']) && intval($_GET['id'])) {
  $format = 'json';
  $user_id = intval($_GET['id']); 
  $link = mysql_connect('localhost','root','user12345') or die('Cannot connect to the DB');
  mysql_select_db('testdb',$link) or die('Cannot select the DB');
  $query = "CALL TUserDetails("+$user_id+")";
  $result = mysql_query($query,$link) or die('Errant query:  '.$query);
  $posts = array();
  if(mysql_num_rows($result)) {
    while($post = mysql_fetch_assoc($result)) {
      $posts[] = array('post'=>$post);
    }
  }
   header('Content-type: application/json');
   echo json_encode(array('posts'=>$posts));
  }
  /* disconnect from the db */
  @mysql_close($link);
}
?>
