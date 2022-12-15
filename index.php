<!DOCTYPE html >
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <title>Premier p^rogramme PHP!</title>
     </head>
        <body>
            <?php
            echo '<strong> Hello World ! </strong> <br>';
            $a = rand(0,100);
            $b = rand(0,100);
            echo "a = $a <br>  b = $b <br>";

            if(!isset($c)){
                echo 'cette variable nexiste pas bébou tu me gnogni' ;
                
            }
            echo "<br>"; 
            $c = 13;
            $Sum = $a + $b + $c;



            if ($Sum %2===0){
                echo "l'addition de $a + $b + $c donne $Sum qui est paire";  
            }
            else{
                echo " l'addition est impaire";
            }
            
            // ecriture concaténer &au max
            
            
           

            echo "<br>";

            $identite = array(
            'nom' => 'hamon',
            'prenom' => 'Hugo',
            'age' => 19,
            'estEtudiant' => true
            );
           
            echo('<pre>');
            var_dump($identite);
            var_dump($a);
            echo('</pre>');

            function test() {

            echo gettype ($identite), '(', count ($identite),')', ' {';
             }
            
            ?>
        </body>
   
</html>