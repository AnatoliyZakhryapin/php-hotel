
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <?php include 'hotel_list.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
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

