<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B'DATE</title>
</head>
<body>
    <form>
    <label for="birthday">Birthday</label>
    <input type="date" name="bdate">
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<?php
    $bd = array(
        array("Sagar",date("d-m-y",strtotime("20-07-2000"))),
        array("Harsh",date("d-m-y",strtotime("20-07-2001"))),
        array("Ankit",date("d-m-y",strtotime("30-08-1996"))),
        array("Jaxay",date("d-m-y",strtotime("27-04-2000"))),
        array("Bhavik",date("d-m-y",strtotime("07-09-2000"))),
    );
?>