<?php 
// pengulangan pada array
// for /foreeach
$angka = [3,2,15,20,11,77,89];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>larihan 2</title>
</head>
<body>
    


    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;

        }
.clear {clear: both;}

    </style>
</body>
<?php for($i = 0; $i < 7; $i++ ) {?>
    <div class="kotak"><?php echo $angka [$i] ?></div>
    <?php }?>
<div class="clear"></div>

<?php foreach($angka as $a) {?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>
<?php foreach( $angka as $a) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach ?>





</html>