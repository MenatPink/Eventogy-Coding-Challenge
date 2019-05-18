<?php include 'EventogyMethods.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/app.css"/>
    <title>Eventogy</title>
</head>
<body>
<header>
    <h1 class = "text-center">Eventogy Coding Challenge</h1>
</header>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class = "text-center">Time Stamp</h2>
            <form action = "" method="POST">
                <div class = "form-group">
                    <label for="timeStampInput">TimeStamp:</label>
                    <input name="timestamp" type="number" class="form-control" id="timeStampInput" placeholder="Enter TimeStamp">
                </div>
                <div>
                    <div class="form-group">
                        <label for="offsetInput">Offset:</label>
                        <input name="offset" type="number" class="form-control" id="offsetInput" placeholder="Enter Offset">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <p>
                <?php
//INPUT HANDLING
if (isset($_POST['timestamp']) & !empty($_POST['timestamp'])) {
    if (isset($_POST['offset'])) {
        $offset = (is_numeric($_POST['offset']) ? (int) $_POST['offset'] : $_POST['offset']);
        echo ($eventogyMethod->timeStampIsReadable($_POST['timestamp'], $offset));
    } else {
        echo ($eventogyMethod->timeStampIsReadable($_POST['timestamp'], 0));
    }
} else {
    echo "Please Enter Valid Time Stamp";
}
?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class = "text-center">E-mail Checker</h2>
            <form action="" method="POST">
            <div class="form-group">
                <label for="emailCheckerInput">E-mail:</label>
                <input name = "email" type="text" class="form-control" id="emailCheckerInput" placeholder="Enter E-mail Address Here">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <p>
                <?php
if (isset($_POST['email']) & !empty($_POST['email'])) {
    echo ($eventogyMethod->emailCheck($_POST['email']));
} else {
    echo "Please Enter an Email Address";
}
?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Coin Flip</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="coinFlipInput">Number of Coin Flips</label>
                    <input name = "coinFlipNumber" type="number" class = "form-control" id = "coinFlipInput" placeholder = "Enter Number Of Coin Flips">
                </div>
                    <button type = "submit" class = "btn btn-primary">Submit</button>
            </form>
            <p>
                <?php
if (isset($_POST['coinFlipNumber']) & !empty($_POST['coinFlipNumber'])) {
    $int = (is_numeric($_POST['coinFlipNumber']) ? (int) $_POST['coinFlipNumber'] : $_POST['coinFlipNumber']);
    echo ($eventogyMethod->coinFlip($int));
} else {
    echo "Please enter a Number of Coin Flips.";
}
?>
            </p>
        </div>
    </div>
</div>


<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src = "../js/app.js"></script>
</body>
</html>
<!--  <h2> </h2>
        //     <h2><?php // echo ($eventogyMethod->emailCheck("james@fish.co.uk")); ?></h2>
 -->