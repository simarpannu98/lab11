<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Here Is The Data</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<h1>Here Is The Data</h1>
<a href="getinfo.php">a</a>
<?php
// step-1 connect the database
$conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200359541','gc200359541','wl3tDZWsQf');
//stpe-2 create a sql command
$sql ='SELECT * FROM golf';
//stpe-3 process th SQL command
$cmd =$conn->prepare($sql);
// step-4 execute
$cmd->execute();
$golf = $cmd->fetchAll();
// stpe-5 disconnect
$conn = null;

// create a table and display them on the screen
echo '<table class="table table-striped table-hover"><tr><th>Favorite golf course</th>
                     <th>Favorite Golf club</th>
                     <th>Favorite golfer</th>
                     </tr>';
foreach($golf as $golfa)
{
    echo '<tr><td>'.$golfa['course'].'</td>
                 <td>'.$golfa['club'].'</td>
                 <td>'.$golfa['golfer'].'</td></tr>';

}
echo '</table>';

?>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>