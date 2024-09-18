
<?php
// print_r(PDO::getAvailableDrivers());
$host = "localhost";
$user = "root";
$password ="";
$dbname = "killl";
//data source name
$db = "mysql:host=$host;dbname=$dbname";
//PDO file shhh!s
$connection = new PDO($db,$user,$password);
$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

// $stmt = $connection->query("SELECT * FROM studenttable");
// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//     echo $row["first_name"].", ".$row["last_name"]."<br>";
// }
// $stmt = $connection->query("SELECT * FROM studenttable");
// while($row = $stmt->fetch()){
//     echo $row->first_name.", ".$row->last_name." ".$row->email."<br>";
// }

$gender ="Female";
//positional paramiters
// $sql = "SELECT * FROM studenttable WHERE
// gender = ?";
// $stmt =$connection->prepare($sql);
// $stmt->execute([$gender]);
// $users = $stmt->fetchAll();
// foreach($users as $user){
//     echo $user->first_name."------".$user->last_name."----".$user->gender."<br>";
// }

//name parameters
// $sql = "SELECT * FROM studenttable WHERE
// gender = :gender";
// $stmt =$connection->prepare($sql);
// $stmt->execute(['gender'=>$gender]);
// $users = $stmt->fetchAll();
// foreach($users as $user){
//     echo $user->first_name."------".$user->last_name."----".$user->gender."<br>";
// }

//getting info

$id = 50;
$sql = "SELECT * FROM studenttable WHERE
id = :id";
$stmt =$connection->prepare($sql);
$stmt->execute(['id'=>$id]);
$users = $stmt->fetchAll();
foreach($users as $user){
    echo $user->first_name."------".$user->last_name."<br>";
}
?>
