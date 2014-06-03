<?php
  if (isset($_POST['odeslat'])) {  // načtení dat z formuláře
  
    //uložení hodnot z formuláře
    $jmeno = $_POST['jmeno'];
    $datum_narozeni = $_POST['datum_narozeni'];
    
    }


    // rozdělění jména na jméno a příjmení
    $upravene_jmeno = explode(" ", $jmeno); // proměnou jmeno rozdělíme, jestliže se v této proměnné objeví mezera
    echo $upravene_jmeno[0]; 
    echo "<br>";
    echo $upravene_jmeno[1]; 
     
       
    // vytvoření polí 
    $hodnota[1] = array ('Jan', 'Novák', 1963);
    $hodnota[2] = array ('Jan', 'Svoboda', 1990);
    $hodnota[3] = array ($upravene_jmeno[0], $upravene_jmeno[1], $datum_narozeni);


    //nastavení času
    date_default_timezone_set('UTC');
    
    // výpočet věku
    $vek = date('Y') - $datum_narozeni;
    
    // výpis do tabulky
    echo('<table border="1">');
    foreach ($hodnota as $x) // zajistí, že počet řádků bude roven počtu polí
    {
            echo('<tr><td>');
	          echo('</td><td>' . htmlspecialchars($x['upravene_jmeno[0]']));
            echo('</td><td>' . htmlspecialchars($x['upravene_jmeno[1]']));
            echo('</td><td>' . htmlspecialchars($x['vek']));
            echo('</td></tr>');
    }
    echo('</table>');
