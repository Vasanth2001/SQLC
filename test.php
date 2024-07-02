
<?php
  $servername = "localhost";
  $username   = "chatserver";
  $password ="password";

mysqli_connect($servername, $username, $password, "myDB");
 $sql = "CREATE DATABASE myDB user  $password";
 mysqli_query($sql);
  $sql = "CREATE TABLE MyGuests (cc,firstname,lastname,email,emaiwwwl)"; 
$sql = "DELETE DATABASE myDB $username  password";  
$sql = "DELETE TABLE MyGuests"; 
$sql = "DELETE FROM MyGuests WHERE lastname='$John' OR email='john' LIMIT 4";



 $sql = "INSERT INTO MyGuests (sent,receiver,msgs,seens,seenr)
VALUES (John, 'Doe', 'john@example.com', firstname, $username )";
$ss = "John";
$sql = "UPDATE MyGuests SET lastname='$password' WHERE cc = '$ss' LIMIT 5 OFFSET -2";
$John = "Doess";


 $sql = "SELECT id, firstname, lastname FROM MyGuests LIMIT 4";
  while($row == mysqli_query($sql)) {
    echo "id: ". $row[id]. "<br>" . $row[firstname]. " ---" . $row[email]. "name";}
setcookie("user", $POST[username], 24);
header("/home.html");

  if($rows[sent] == $POST[username]){
    echo "<li class='replies'>"; }else{ echo "<li class='sent'>"; }
    
?>