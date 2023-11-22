
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <?php include 'hotel_list.php'; ?>
    <title>PHP Hotel</title>
</head>
<body> 
    <ul class="hotels-list">
        <?php foreach ($hotels as $hotel ) {
            ?><li>
                <h2><?php echo $hotel['name'] ?></h2>
                <ul class="hotel-descriptions>">
                    <?php foreach ($hotel as $key => $value) {
                        ?>
                            <li> 
                                <span><?php echo $key . " :"?></span>
                                <span><?php echo $value ?></span>
                            </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
    </ul>
</body>
</html>

