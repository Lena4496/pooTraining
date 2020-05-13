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
    $prenom = 'Tagada';
        echo '<br/>Hello ' . $prenom . '<br/>'; // creation d'une variable avec nom:$prenom et valeur: tagada
    
    $prenoms = array ( 'Josette' => 'Josy', 'Maurice', 'Ambroise','Nicotine','Glorio','Cactuz');
        print_r($prenoms); // affiche array avec index
        echo "<br/>Hey ma belle {$prenoms['Josette']}!"; // accède à un tableau dans double guillemets
                //!! ARRAY ASSOC !//
    
    $coordonnees = array(

        'prenom' => 'Françis', // la fleche veut dire associé à 
        'nom' => 'Chaussure',
        'adresse' => 'Chaussée de Bxl 12',
        'ville' => 'Bidonville' 
    );

        print_r($coordonnees);
        echo $coordonnees['adresse'];




?>