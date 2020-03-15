<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $age1 = 1;
        $age2 = 3;
        $AgeSum = $age1 + $age2;
        ?>
        <p><?php echo $AgeSum; ?></p>
        <p><?php echo $AgeSum - $age1; ?></p>
        <p><?php echo "mnozenie" . $AgeSum * $age2; ?></p>
        <p><?php echo "dzielenie" . $AgeSum / $age2; ?></p>
        <p><?php echo "modulo" . $AgeSum % $age2; ?></p>
        <p><?php echo "potegaowanie" . $AgeSum ** $age2; ?></p>
        <p><?php echo "przypisanie do ageSum age 2 i 1 " . $AgeSum = $age2 = $age1; ?></p>
        <p><?php echo "Age sum to teraz " . $AgeSum; ?></p>
        <p><?php echo "Dodanie i zapisanie odrazu do zmienieebh " . $AgeSum += 20; ?></p>
        <p><?php echo "Age sum o teraz " . $AgeSum; ?></p>
        <p><?php echo "Inkrementacja i dekrementacja age1= " . $age1. " " . $age1++ . " " . $age1-- . " " . $age1; ?></p>
        <br>
        <p>Porownania</p>
        <p>czy 4 jest rowne 4 echo wzwoci 1 bo true :<b> <?php echo 4 == 4; ?> </b></p>
        <p>czy 4 jest rowne 4 ale ze zmiana na string i ==== zwroci nic? :<b> <?php echo 4 === "4"; ?> </b></p>
        <?php var_dump(4 == 4); ?>
        <?php var_dump(4 == "4"); ?>
        <?php var_dump(4 === "4"); ?>

        <p>Inne: czy jest inne</p>
        <?php var_dump(3 != 3) ?>
        <?php var_dump(3 != 4) ?>
        <?php var_dump(3 <> 4) ?>
        <?php var_dump(3 !== "3") ?>

        <p>Ktoras  strona wieksza: 3/4 , 3/3 , 4/4</p>
        <?php var_dump(3 <=> 4) ?>
        <?php var_dump(3 <=> 3) ?>
        <?php var_dump(3 <=> 2) ?>
        <?php echo `path` ?>
        <?php 
        $version = 7.1;
        echo 'PHP $version!'; // result: PHP $version!
        echo "PHP $version!"; // result: PHP 7.1!
        echo "</br>";
        $version = 7.1;
        echo "PHP $version!"; // result: PHP 7.1!

        // lepiej dawac w {} bo czytelniesjze
        ?>
        <?php
    ?>

</body>
</html>