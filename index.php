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
Generare alcune istanze di ogni classe, hai fini di test e per meglio comprendere i concetti -->

        <h1>
        
        
            <?php
                //entità
                class Magazzino{
                    public name;
                    public location;
                    public prodotti; //array

                    public function __construct($name, $location) {

                        $this -> name = $name;
                        $this -> location = $location;

                    }

                }

                $magazzino = new Magazzino("Mag-1", "New York");
                var_dump($magazzino);



            ?>



        </h1>
     

</body>
</html>


