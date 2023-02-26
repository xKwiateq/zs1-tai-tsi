<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
    <h2>Strona w jezyku PHP</h2>

    <?php
        $name = "N/A";
        $surname = "N/A";


        if (isset($_GET['name'])) {
            $name = $_GET['name'];
        } else {
            $name = "N/A";
        }

        if (isset($_GET['surname'])) {
            $surname = $_GET['surname'];
        } else {
            $surname = "N/A";
        }
        
    ?>


    <form action="index.php" method="get" >
        Imie: <input type="text" name="name"><br>
        Nazwisko: <input type="text" name="surname"><br>
        <input type="submit">
    </form>
</body>
</html>