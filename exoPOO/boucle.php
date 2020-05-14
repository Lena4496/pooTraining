<?php 
            //!! BOUCLE WHILE & FOR !!//
    $numbers_of_lines = 1;
    
    while ($numbers_of_lines <= 3){

        echo 'Ceci est la ligne n°'. $numbers_of_lines . ' j\'ai besoin de faire un backslash pour remplacer un apostrophe et de mettre un br pour espacer <br/>';
        $numbers_of_lines++; // incrémentation pour boucle infinie 
    }

    for ($numbers_of_lines= 1; $numbers_of_lines <= 4; $numbers_of_lines++){
        echo '<br/> Maintenant avec boucle for c\'est la ligne n°' . $numbers_of_lines . '<br/>';
    }  // initialisation/declaration valeur variable ; condition ; incrementation
                //!! ARRAY NUM !//

    // array num pour plusieurs element du même type
   
    $prenom = 'Tagada';
        echo '<br/>Hello ' . $prenom . '<br/>'; // creation d'une variable avec nom:$prenom et valeur: tagada
    echo '<hr>';
    $prenoms = array ( 'Josette' => 'Josy', 'Maurice', 'Ambroise','Nicotine','Glorio','Cactuz');
        print_r($prenoms); // affiche array avec index avec <pre> + beau
        echo "<br/>Hey ma belle {$prenoms['Josette']}!"; // accède à un tableau dans double guillemets
                //!! ARRAY ASSOC !//
   // array assoc pour element de different type
    $coordonnees = array(

        'prenom' => 'Françis', // la fleche veut dire associé à 
        'nom' => 'Chaussure',
        'adresse' => 'Chaussée de Bxl 12',
        'ville' => 'Bidonville' 
    );
        echo '<hr>';
        print_r($coordonnees);
        echo '<hr>';
        echo $coordonnees['adresse']; // affiche adresse ou nom de $coordonnes 
        echo '<hr>';
        echo $coordonnees['nom'];
        echo '<hr>';

        //!! Boucle FOR !!/

        for ($numero = 0; $numero < 5; $numero++){

            echo $prenoms[$numero] . '<br/>'; // echo chaque prenom jusque 5x demarre a 0
        }
        
        echo '<hr>';

        //!!  Boucle for Each !!//

        foreach ($coordonnees as $element) {
            echo $element .'<br/>';
        } // pour chaque element de coordonnes echo l'element. pour echo les clé fait as $element ou clé/keys=> $element .

        echo '<hr/>'; 

        foreach($coordonnees as $cle => $element)
            {
                echo '(' . $cle . ') est ' . $element . '<br />';
            }

        //!! Afficher un array rapidement !!//

        echo '<pre>';
        print_r($coordonnees);
        echo '<pre>';

        //!! Recherche ds Array verif si clé existe array_key_exists, valeur est ds l'array et recup + boucle !!//
        
        $fruits = array ('Pomme', 'Cerise', 'Abricot', 'Mandarine', 'Noix', 'Fraise','Pêche');


                if (in_array('Cerise', $fruits)) {

                    echo 'La clé "Cerise" se trouve dans les fruits <hr/>';
                }
                else{
                    echo 'La clé "Cerise" n\'as pas été trouvé dans les fruits <hr/>';
                } 
        
                if (in_array('Pêche', $fruits)){
        
                    echo 'La clé "Pêche" se trouve dans les fruits <hr/>';
                }
                else{
                    echo 'La clé "Pêche"  n\'as pas été trouvé dans les fruits <hr/>';
                }
        
                if (in_array('Abricot', $fruits)){
        
                    echo 'La valeur "Abricot" se trouve dans les fruits <hr/>';
                }
        
                if (in_array('Myrtille', $fruits)){
        
                    echo 'La valeur "Myrtille" se trouve dans les fruits <hr/>';
                }else{
                    echo ' Pas de mytille ici ! <hr/>';
                }

                $position = array_search('Fraise', $fruits);
                echo '"Fraise" se trouve en position ' . $position . '<br />';
                echo '<hr/>';
                $position = array_search('Noix', $fruits);
                echo '"Noix" se trouve en position ' . $position;
                        


    



        

    




?>