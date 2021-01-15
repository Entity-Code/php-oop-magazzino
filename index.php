<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-magazzino</title>
    <style>        
        body {  
            background-color: black;
            color: white;   
            position: absolute;
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
        }
    </style>
</head>
<body>
<!-- Definire la classe Magazzino e la classe Prodotto nel seguente modo:
Magazzino: definire gli attributi per nome, location e prodotti contenuti (array); definire inoltre costruttore con solo nome e location obbligatori
Prodotto: definire gli attributi per nome, peso e prezzo
Generare alcune istanze di ogni classe, ai fini di test e per meglio comprendere i concetti -->

        <h1>
        
        
            <?php
                //ENTITA' MAGAZZINO
                class Magazzino {
                    public $name;
                    public $location;
                    public $prodotti; //array

                    public function __construct($name, $location, $prodotti = "non disponibili") {

                        $this -> name = $name;
                        $this -> location = $location;
                        $this -> prodotti = $prodotti;

                    }

                }

                //istanza con name e location obbligatori
                $magazzino1 = new Magazzino("Mag-1", "New York");

                $magazzino2 = new Magazzino("Mag-2", "Berlino", 
                            [
                                "palloni", 
                                "tovaglioli", 
                                "birre", 
                                "patatine", 
                                "cipolle", 
                                "pomodori"
                            ]
                        );
                
                $magazzino3 = new Magazzino("Mag-3", "Napoli", 
                            [
                                "Fuochi d'artificio-1",
                                "Fuochi d'artificio-2",
                                "Fuochi d'artificio-3",
                                "Fuochi d'artificio-4",
                            ]
                        );

                //output
                echo "<h2>MAGAZZINI</h2>";
                var_dump($magazzino1);
                echo "<br>";
                var_dump($magazzino2);
                echo "<br>";
                var_dump($magazzino3);
                echo "<br>";
                        
                

                //ENTITA' PRODOTTO
                class Prodotto {
                    public $name;
                    public $peso;
                    public $prezzo;
                    public $sconto = 0;

                    public function __construct($name, $peso, $prezzo) {
                        $this -> name = $name;
                        $this -> peso = $peso;
                        $this -> prezzo = $prezzo;
                    }

                }

                

                //istanza
                $prodotto1 = new Prodotto("pallone", 200, 12.5);
                $prodotto2 = new Prodotto("Computer", 2,735.99);


                //output
                echo "<h2>PRODOTTI</h2>";

                var_dump($prodotto1);
                echo "<br>";
                var_dump($prodotto2);
                echo "<br>";
                


            ?>



        </h1>
     

</body>
</html>


