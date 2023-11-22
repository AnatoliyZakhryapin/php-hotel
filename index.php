
<?php include 'hotel_list.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/08d5002177.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Hotel</title>
</head>
<body> 
    <main>
        <section class="hotels py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome Hotel</th>
                                    <th scope="col">Descrizione</th>
                                    <th scope="col">Parcheggio</th>
                                    <th scope="col">Voto</th>
                                    <th scope="col">Distanza dal centro km</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php foreach ($hotels as $hotel ) {
                                    $counter += 1?>
                                    <tr>
                                        <th scope="row"><?php echo $counter ?></th>
                                        <td><?php echo $hotel['name'] ?></td>
                                        <td><?php echo $hotel['description'] ?></td>
                                        <td><?php isParking ($hotel['parking']) ?></td>
                                        <td><?php echo $hotel['vote'] ?></td>
                                        <td><?php echo $hotel['distance_to_center'] . " Km" ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

