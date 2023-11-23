<?php

    // Array con i dati di Hotels
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

    // Controlla se e presente parking in hotel
    function isParking ($Boolean) {
        if($Boolean) {
            echo "Si";
        } else {
            echo "No";
        }
    };

    // Stampa icone star in base ai parametri in ingresso
    function getVoteStar ($vote, $total_vote_icon) {
        $vote_round = round($vote);
        for ($i = 0; $i < $vote_round; $i++) {
            echo '<i class="fa-solid fa-star"></i>';
        }
        if ($vote_round < $total_vote_icon) {
            $cicle =  $total_vote_icon - $vote_round;
            for ($x = 0; $x < $cicle; $x++) {
                echo '<i class="fa-regular fa-star"></i>';
            }
        }
    };

    // Callback funzione per array_filter()
    function test_odd($var) {
        return($var['parking'] === true);
    };
?>