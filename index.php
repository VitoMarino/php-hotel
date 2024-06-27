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

    var_dump($_GET);

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

        <form class="text-center" action="./index.php" method="GET">
            <label for="">Seleziona per cercare Hotel con parcheggio</label>
            <input type="checkbox" name="filtra" id="filtra"> <br>

            <label for="">Seleziona stelle</label>
            <select name="select" id="select">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
            </select> <br>

            <button class="button" type="submit">Cerca</button>
        </form>

        <table class="table mt-5">
            <tbody>
                <tr>
                    <th scope="col"> Nome Hotel </th>
                        <?php foreach ($hotels as $key => $hotel) { ?>
                            <td scope="row"> <?php 
                            if(isset($_GET['filtra'])) {
                                // qui l'utente ha selezionato la checkbxo per gli hotel con parcheggio
                                // se l'hotel ha il parcheggio, allora lo stampo, altrimenti niente
                                if($hotel["parking"] === true){
                                    echo $hotel["name"];
                                    }
                                } else {
                                // l'utente non ha selezionato nulla e stampo tutti gli hotel
                                    echo $hotel["name"];
                                    } ?> </td>
                        <?php } ?>
                </tr>
                
                <tr>
                    <th scope="col">Descrizione</th>
                        <?php foreach ($hotels as $key => $hotel) { ?>
                            <td scope="row"> <?php echo $hotel["description"] ?> </td>
                        <?php } ?>
                </tr>
                
                <tr>
                    <th scope="col">Voto</th>
                        <?php foreach ($hotels as $key => $hotel) { ?>
                            <td scope="row"> 
                                <?php 
                                if(isset($_GET["select"])){
                                    if ($hotel["vote"] <= 5){
                                        echo $hotel["vote"];
                                    } else {
                                    echo $hotel["vote"];
                                    }
                                    } ?> </td>
                                <?php } ?>
                </tr>

                <tr>
                    <th scope="col">Distanza</th>
                        <?php foreach ($hotels as $key => $hotel) { ?>
                            <td scope="row"> <?php echo $hotel["distance_to_center"] ?> </td>
                        <?php } ?>
                </tr>
                
            </tbody>
</table>
        
    </main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>