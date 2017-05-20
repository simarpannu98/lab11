<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GOLF</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<main class="container">
    <h1>THE GENTLEMEN'S GAME</h1>

    <form method="post" action="submitinfo.php">
        <fieldset class="form-group">
            <label for="course" class="col-sm-1">favorite golf course:</label>
            <input name="course" id="course" required placeholder="Name of the golf course"/>
        </fieldset>

        <fieldset class="form-group">
            <label for="club" class="col-sm-1">Favorite golf club:</label>
            <input name="club" id="club" placeholder="favorite club to use"/>
        </fieldset>

        <fieldset class="form-group">
            <label for="player" class="col-sm-1">Favorite Golfer</label>
            <input name="player" id="player" required placeholder="Favorite player"/>
        </fieldset>
        <button class="btn btn-success col-sm-offset-2">SAVE</button>
    </form>
</main>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>