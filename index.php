<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PhP-Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .name a {
      cursor: pointer;
      color: orange;
      text-decoration: inherit;
    }

    .name a:hover {
      text-decoration: underline lime ;
      
    }
  </style>
</head>
<body class="bg-black">
  <div class="container py-5 d-flex justify-center flex-column text-center bg-dark my-5 rounded">
    <h2 class="fw-bold py-3 text-white">Hotel</h2>

    <form action="" method="GET" class="mb-3">
      <div class="row align-items-center justify-content-center ">
        <div class="col-auto">
          <select class="form-select" id="parkingFilter" name="parkingFilter">
            <option value="">All</option>
            <option value="1">With Parking</option>
            <option value="0">Without Parking</option>
          </select>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-outline-warning text-uppercase fw-bold text-white">Search</button>
        </div>
      </div>
    </form>

    <?php
    
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

    // Inizializzazione degli hotel filtrati
    $filteredHotels = $hotels;

    // Filtraggio degli hotel in base alla richiesta GET
    if (isset($_GET['parkingFilter'])) {  // Controlla se il parametro "parkingFilter" esiste nella query GET
        $parkingFilter = $_GET['parkingFilter']; // Assegna il valore del parametro a una variabile
    
        if ($parkingFilter === '1') { // Controlla se il valore del filtro è "1" (con parcheggio)
            $filteredHotels = []; // Inizializza un nuovo array per gli hotel filtrati
    
            // Cicla attraverso ogni hotel
            foreach ($hotels as $hotel) {
                // Controlla se l'hotel ha parcheggio
                if ($hotel['parking']) {
                    // Se sì, aggiungi l'hotel agli hotel filtrati
                    $filteredHotels[] = $hotel;
                }
            }
        } elseif ($parkingFilter === '0') { // Controlla se il valore del filtro è "0" (senza parcheggio)
            $filteredHotels = []; // Inizializza un nuovo array per gli hotel filtrati
    
            // Cicla attraverso ogni hotel
            foreach ($hotels as $hotel) {
                // Controlla se l'hotel non ha parcheggio
                if (!$hotel['parking']) {
                    // Se sì, aggiungi l'hotel agli hotel filtrati
                    $filteredHotels[] = $hotel;
                }
            }
        }
    }
    ?>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Parking</th>
          <th>Vote</th>
          <th>Distance to center(km)</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($filteredHotels as $hotel) : ?>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>