<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    
    <body>
        <?php
            include_once 'z1_People.php';
            include_once 'z2_Stud.php';
            include_once 'z3_Dir.php';

            $nome1 = "Loris";     
            $cognome1 = "Penserini";
            $eta1 = "50";
            $interessi1 = "DRONI";

            $nome2 = "Luca";     
            $cognome2 = "Tinti";
            $eta2 = "30";
            $interessi2 = "Dweb";    

            $nome3 = "Stefano";     
            $cognome3 = "Ciavaglia";
            $eta3 = "32";
            $interessi3 = "psicologia";    

            $People1 = new People ($nome1,$cognome1,$eta1,$interessi1);
            $Stud1 = new Stud ($nome2,$cognome2,$eta2,$interessi2);
            $Stud1->setIndStudio("INFORMATICA");
            $Dir1 = new Dir($nome3, $cognome3, $eta3, $interessi3);
            $Dir1->setIndStudio("Liceo NOLFI di FANO");

            echo "Saluto della People1:<br>".$People1->getPagBenvenuto();
            echo "<br><br>Saluto dello Stud1:<br>".$Stud1->getPagBenvenutoStud();
            echo "<br><br>Saluto del Dirigente1: <br>".$Dir1->getPagBenvenutoDir();

        ?>
    </body>
</html>