<?php
$nike = [
    "name" => "SuperX",
    "price" => 200,
    "weight" => 400,
    "discount" => 10,
    "picture" => 'https://i.pinimg.com/originals/64/2d/a0/642da085c57b27d693dd1c8df6f0b58a.jpg'
];

$puma = [
    "name" => "AmazingX",
    "price" => 200,
    "weight" => 400,
    "discount" => 10,
    "picture" => puma.jpg,
];

$veja = [
    "name" => "GreatX",
    "price" => 200,
    "weight" => 400,
    "discount" => 10,
    "picture" => veja.jpg,
];

?>

<htm>
    <head>
        <title>
            Catalogue
        </title>
    </head>
    <body>
    <h1>
        Sneakears
    </h1>


    <h2> Nike <?php echo $nike ['name'] ?> </h2>

           <br>
            <br>
            <img src='<?php echo $nike ['picture']?>' width = "400">
    <br>
            Prix: <?php echo $nike ['price']?> euro
    <br>
            Reduction: <?php echo $nike ['discount'] ?>


    






    </body>
</htm>
