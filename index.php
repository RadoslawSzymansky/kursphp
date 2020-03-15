<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- 1. echo to funckja wbudowana -->
<?php echo 'Hello 1'; ?>
<br>
<?php echo ('Hello 2'); #komenatzr  #  a tu : /* wiele lini */?>
<br>
<?= "Hello 3"; // komentarz php?>


<!-- ------ ZMIENNE ---------  -->
<br>
<?php 
    $radek = "radekString";

    echo $radek;
?>
<br>
<?php const STALA = "Stała const";
    define('STALA2', 'Stala define');
    echo STALA . " " . STALA2;
?>

<br>

<?php 
$isTrue = true;
$inte = 1;
$floated = 1.2;
var_dump($isTrue);
var_dump($inte);
var_dump($floated);
$user = null;
?>



</body>
</html>