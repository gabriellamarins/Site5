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
    "picture" => 'https://images-na.ssl-images-amazon.com/images/I/819tIj8wVmL._AC_UX395_.jpg',
];

$veja = [
    "name" => "GreatX",
    "price" => 200,
    "weight" => 400,
    "discount" => 10,
    "picture" => 'https://m.media-amazon.com/images/I/61v5ACBpE-L._AC_SX395._SX._UX._SY._UY_.jpg',
];

?>

<html lang="english">
    <head>
        <title>
            Catalogue
        </title>
    </head>
    <body>
    <h1 style>
        Sneakears
    </h1>


    <table style="width:100%">
        <tr>
            <th>Nike <?php echo $nike ['name'] ?> </th>
            <th>Puma <?php echo $puma ['name'] ?> </th>
            <th>Veja <?php echo $veja ['name'] ?> </th>
        </tr>
<tr>
    <td> <img src='<?php echo $nike ['picture']?>' width = "400"></td>
    <td> <img src='<?php echo $puma ['picture']?>' width = "400"></td>
    <td> <img src='<?php echo $veja ['picture']?>' width = "400"></td>
</tr>
<tr>
    <td> Prix: <?php echo $nike ['price']?> € </td>
    <td> Prix: <?php echo $puma ['price']?> € </td>
    <td> Prix: <?php echo $veja ['price']?> € </td>
</tr>
        <tr>
            <td> Reduction: <?php echo $nike ['discount'] ?> %</td> <!--como botar o % fora do php e adiciona-lo sem precisar fazer uma concatenaçao-->
            <td> Reduction: <?php echo $puma ['discount'] ?> %</td>
            <td> Reduction: <?php echo $veja ['discount'] ?> % </td>
        </tr>
    </table>


    </body>
</html>
