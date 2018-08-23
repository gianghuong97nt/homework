<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style type="text/css">
       .table {
            position: relative;

        }

        .pos1 {
            position: absolute;
            left: 10px;

        }
        .pos2 {
            position: absolute;
            left: 230px;

        }
        .pos3 {
            position: absolute;
            left: 520px;

        }
    </style>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<?php
$product = array();
$product[] = array('product_id'=> '1', 'product_name'=> 'book', 'product_price' => '12000');
$product[] = array('product_id'=> '2', 'product_name'=> 'pen', 'product_price' => '7000');
$product[] = array('product_id'=> '3', 'product_name'=> 'pencil', 'product_price' => '8000');
$product[] = array('product_id'=> '4', 'product_name'=> 'ruler', 'product_price' => '10000');
$product[] = array('product_id'=> '5', 'product_name'=> 'distionary', 'product_price' => '200000');
$product[] = array('product_id'=> '6', 'product_name'=> 'marker', 'product_price' => '20000');
$product[] = array('product_id'=> '7', 'product_name'=> 'calculator', 'product_price' => '175000');
$product[] = array('product_id'=> '8', 'product_name'=> 'watercolor', 'product_price' => '50000');
$product[] = array('product_id'=> '9', 'product_name'=> 'crayon', 'product_price' => '40000');
$product[] = array('product_id'=> '10', 'product_name'=> 'scissors', 'product_price' => '40000');


?>
<table class="table">
    <thead>
    <tr>
        <th ><div class="pos1">Product_id</div></th>
        <th ><div class="pos2">Product_name</div></th>
        <th ><div class="pos3">Product_price</div></th>

    </tr>
    </thead>
</table>
<?php
for ($i = 0; $i<10; $i++){
    ?>
    <table class="table">
        <tr>
            <td ><div class="pos1"><?php echo $product[$i]['product_id']; ?></div></td>
            <td ><div class="pos2"><?php echo $product[$i]['product_name']; ?></div></td>
            <td ><div class="pos3"><?php echo $product[$i]['product_price']; ?></div></td>
        </tr>

    </table>
    <?php
}

?>

</body>
</html>