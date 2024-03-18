<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP-Hotel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5 d-flex justify-center flex-column text-center bg-dark my-5">
        <h2 class="fw-bold py-3">Hotel</h2>

        <?php
        // Definizione di un array associativo contenente informazioni sugli hotel
        $hotels = [
            [
                'name' => 'Hotel Belvedere',
                'description' => 'Hotel Belvedere Description',
                'parking' => true,
                'vote' => 4,
                'distance_to_center' => 10.4
            ],
            [
                'name' => 'Hotel Futuro',
                'description' => 'Hotel Futuro Description',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 2
            ],
            [
                'name' => 'Hotel Rivamare',
                'description' => 'Hotel Rivamare Description',
                'parking' => false,
                'vote' => 1,
                'distance_to_center' => 1
            ],
            [
                'name' => 'Hotel Bellavista',
                'description' => 'Hotel Bellavista Description',
                'parking' => false,
                'vote' => 5,
                'distance_to_center' => 5.5
            ],
            [
                'name' => 'Hotel Milano',
                'description' => 'Hotel Milano Description',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 50
            ],
        ];
        ?>

        <!-- Creazione della tabella con Bootstrap -->
        <table class="table table-striped">
            <!-- Intestazione della tabella -->
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance to center(km)</th>
                </tr>
            </thead>
            <tbody >
                <!-- ciclo foreach per ciclare sugli hotel presenti -->
                <?php foreach ($hotels as $hotel) : ?>
                    <tr>
                        <!-- Stampare i dettagli di ogni hotel in una riga della tabella -->
                        <td class="fw-bold  name">
                            <a href="#"><?php echo $hotel['name']; ?></a>
                        </td>                        
                        <td><?php echo $hotel['description']; ?></td>
                        <!-- Se l'hotel ha un parcheggio, mostra "Yes", altrimenti "None" -->
                        <td><?php echo $hotel['parking'] ? 'Yes' : 'None'; ?></td>
                        <td><?php echo $hotel['vote']; ?></td>
                        <td><?php echo $hotel['distance_to_center']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>





   <style>
    .name a{
        cursor:pointer;
        color:orange;
        text-decoration: inherit;

        
    }

    .name a:hover{
        text-decoration:underline black;



    }
   </style>