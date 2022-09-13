<?php
    $studenti = [ 
                    [
                        "nome"=>"Marta"
                        "cognome" => "Parato"
                        "voti" => [4,6,5,7.9]
                    ],
                    [
                        "nome"=>"Bianca"
                        "cognome" => "Rossi"
                        "voti" => [4,6,5,7.9]
                    ],
                    [
                        "nome"=>"Gulia"
                        "cognome" => "Rosa"
                        "voti" => [4,6,5,7.9]
                    ],
                ];

    for ($i=0; $i<count($studenti); $i++) {
        
        $studente =$studenti[$i];

        $media= array_sum($studente)

        echo $studete["nome"]. ' ' . $studente["cognome"]. '-'. $media.