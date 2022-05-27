<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="action.php" method="post">
    <button id="zap">ZAPOSLENICI</button>
    <label for="">Ime zaposlenika</label>
    <input type="text" name="ime">
    <br><br>
    <label for="">Prezime zaposlenika</label>
    <input type="text" name="prezime">
    <br><br>
    <label for="">Datum rođenja</label>
    <input type="date" name="datRod">
    <br><br>
    <label for="">Datum zapošljavanja</label>
    <input type="date" name="datWork">
    <br><br>
    <label for="">Datum zapošljavanja</label>
    <select name="spol" id="">
        <option value="M">Male</option>
        <option value="F">Female</option>
    </select>
    <br><br>
    <input type="submit" name="action_id" value="AddEmployee">
    <br><br>
    <input type="submit" name="action_php" value="EditEmployee">
    </form>

</body>
</html>