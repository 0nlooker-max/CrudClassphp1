<?php
$host = "localhost";
$user = "root";
$password ="";
$dbname = "killl";
//data source name
$db = "mysql:host=$host;dbname=$dbname";
//PDO file shhh!s
$connection = new PDO($db,$user,$password);
$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$id = 4;
$first_name = "saghfdasf";
$last_name = "rasafasfasdfgven";
$age = 150;
$gender ="masfadsfale";

// $sql = "INSERT INTO user(`first_name`,`last_name`,`age`,`gender`)VALUES(?,?,?,?)";
// $stmt =$connection->prepare($sql);
// $stmt->execute([$first_name,$last_name,$age,$gender]);

// $stmt = $connection->query("SELECT * FROM user");
// while($row = $stmt->fetch()){
//     echo $row['id']." ".$row['first_name']." ".$row['last_name']."<br>";
// }

//DELETE
// $sql = "DELETE FROM user WHERE id = ?";
// $stmt = $connection->prepare($sql);
// $stmt->execute([$id]);

// $stmt = $connection->query("SELECT * FROM user");
// while($row = $stmt->fetch()){
//     echo $row['id']."".$row['first_name']."".$row['last_name']."<br>";
// }

//UPDATE\

$sql = "UPDATE user SET first_name = :first_name,last_name = :last_name,age = :age,gender = :gender WHERE id = :id";
$stmt = $connection->prepare($sql);
$stmt->execute(['first_name' => $first_name,'last_name'=>$last_name,'age'=>$age,'gender'=>$gender,'id'=>$id]);

$stmt = $connection->query("SELECT * FROM user");
while($row = $stmt->fetch()){
    echo $row['id']." ".$row['first_name']." ".$row['last_name']."<br>";
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process_signup.php" method="POST" class="form" id="form1">
        <input type="text" name ="age" placeholder ="Age">
        <input type="text"name ="age" placeholder ="Age">
        <input type="number" name ="age" placeholder ="Age">
        <input type="text" name ="gender" placeholder = "Gender">
</form>
</body>
</html> -->