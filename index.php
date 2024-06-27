<?php
    
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>PHP HOTEL</title>
</head>
<body>
    <main>
        <h1 class= "text-center p-2">
            PHP HOTEL
        </h1>

        <?php
            
        ?>

        <form class="text-center" action="./index.php" method="GET">
            <input type="text" name="parcheggio" name="voto" id="inputText">
            <button class="button" type="submit">Cerca</button>
        </form>

        

        <table class="table mt-5">
            <tbody>
                <tr>
                    <th scope="col"> Nome Hotel </th>
                        <?php foreach ($hotels as $key => $name) { ?>
                            <td scope="row"> <?php echo $name["name"] ?> </td>
                        <?php } ?>
                </tr>
                
                <tr>
                    <th scope="col">Descrizione</th>
                        <?php foreach ($hotels as $key => $description) { ?>
                            <td scope="row"> <?php echo $description["description"] ?> </td>
                        <?php } ?>
                </tr>
                
                <tr>
                    <th scope="col">Voto</th>
                        <?php foreach ($hotels as $key => $vote) { ?>
                            <td scope="row"> <?php echo $vote["vote"] ?> </td>
                        <?php } ?>
                </tr>

                <tr>
                    <th scope="col">Distanza</th>
                        <?php foreach ($hotels as $key => $distance_to_center) { ?>
                            <td scope="row"> <?php echo $distance_to_center["distance_to_center"] ?> </td>
                        <?php } ?>
                </tr>
                
            </tbody>
</table>
        
    </main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>