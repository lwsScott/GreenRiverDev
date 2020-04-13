<?php
/*
* Lewis Scott, Vadim Balan
* https://lscott.greenriverdev.com/328/pairPrograms/cupkake/index.php
* takes a cupcake order and submits it
* to confirm.php
* 4/10/20
*/
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Cupcake</title>
</head>
<body>
    <form class="container" id="mainForm" action="confirm.php" method="post">
        <fieldset class="form-group">
            <legend>Cupcake Fundraiser</legend>
            <div class="form-group">
                <label for="firstName">Your Name:</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Please input your name.">
            </div>
        </fieldset>

        <fieldset class="form-group container">
            <legend>Cupcake Flavors</legend>

            <?php
                require ('validation-functions.php');
                foreach ($flavors as $flavor => $displayText)
                {
                    echo "<input class='form-check-input' type='checkbox' name='flavors[]' value='$flavor'>$displayText";
                    echo "<br>";
                }
                ?>
        </fieldset>

        <button id="submit" type="submit" class="btn-primary">Order</button>
    </form>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>