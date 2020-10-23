<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coloured Boxes Displayed</title>

    <style>

        .red {
            background-color: red;
            width: 50px;
            height: 50px;
            margin: 10px;
        }

        .blue {
            background-color: blue;
            width: 50px;
            height: 50px;
            margin: 10px;
        }

        .green {
            background-color: green;
            width: 50px;
            height: 50px;
            margin: 10px;
        }

    </style>
</head>
<body>

<form action="boxes.php" method="get">
    Colour: <select value="option" name="colour">
        <option value="red" <?php if(isset($_GET["colour"]) && $_GET["colour"] == "red"){print "selected";} ?>>red</option>
        <option value="blue" <?php if(isset($_GET["colour"]) && $_GET["colour"] == "blue"){print "selected";} ?>>blue</option>
        <option value="green" <?php if(isset($_GET["colour"]) && $_GET["colour"] == "green"){print "selected";} ?>>green</option>
    </select>
    <br>
    number: <input type="number" name="NBR" value="<?php if(isset($_GET["NBR"])){print($_GET["NBR"]);} ?>">
    <br>
    <input type="submit" value="button">
</form>

<?php
if(isset($_GET["NBR"])){
if ($_GET["colour"] == "red") {
    for ($i = 0; $i < $_GET["NBR"]; $i++) {
        print ('<div class="red"></div>');
    }

}
?>

<?php
}
if(isset($_GET["NBR"])){
if($_GET["colour"] == "blue") {
    for ($i = 0; $i < $_GET["NBR"]; $i++) {
        print ('<div class="blue"></div>');
    }
}
?>

<?php
}
if(isset($_GET["NBR"])){
if($_GET["colour"] == "green"){
for ($i = 0; $i < $_GET["NBR"]; $i++) {
    print ('<div class="green"></div>');
}
?>

<?php

}
}
?>

</body>
</html>