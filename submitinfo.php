<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SAVING DATA</title>

</head>
<body>
<?php
$course=$_POST['course'];
$club=$_POST['club'];
$golfer=$_POST['player'];

echo 'course: '.$course.'<br />';
echo 'club: '.$club.'<br />';
echo 'player: '.$golfer.'<br />';

//STPE-1 connect to the database
$conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200359541','gc200359541','wl3tDZWsQf');

//STPE-2 create the SQL command to insert a record
$sql="INSERT INTO golf(course,club,golfer) VALUES
    (:course,:club,:golfer)";
//stpe-3 prepare the sql command an dbin d the arguments to prevent sql injecton
$cmd = $conn->prepare($sql);
$cmd->bindParam(':course',$course,PDO::PARAM_STR,50);
$cmd->bindParam(':club',$club,PDO::PARAM_STR,50);
$cmd->bindParam(':golfer',$golfer,PDO::PARAM_STR,50);
//step-4 execute the command
$cmd->execute();
//stpe-5 disconnet from the db
$conn = null;
// step-6 redirect the new page
header('location:infotable.php');
?>
</body>
</html>