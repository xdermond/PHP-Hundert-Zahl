<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            width: 10%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 40px;
            text-align: center;
        }
        .prim
        {
            /*background-image: url("https://media0.faz.net/ppmedia/w1240/aktuell/1021900142/1.8543712/16x9/rainer-winkler-alias.jpg");
            background-size: 170px;*/
            background-color: yellow;
        }
        .yellow-box
        {
            width: 20px;
            height: 20px;
            background-color: yellow;
        }
    </style>

    


</head>
<body>
    
    <?php
        function primzahl($zahl)
        {
            if ($zahl < 2) 
            {
                return false;
            }
            // Schleife von 2 bis zur Hälfte der Zahl
            // (Optimierung: bis zur Quadratwurzel der Zahl reicht)
            for ($i = 2; $i <= $zahl / 2; $i++) 
            {
            // Wenn die Zahl ohne Rest teilbar ist, ist sie keine Primzahl
                if ($zahl % $i == 0) 
                {
                     return false;
                }    
            }  
            
            return true;

        }
    ?>

    <table>
            <tbody>
                <?php
                        $primmzahlzähler = 0;

                        for($i = 1; $i <= 100; $i++)
                        {
                            if($i % 10 == 1)
                            {
                                echo"<tr>";

                            }   

                            if(primzahl($i) == true)
                            {
                                echo "<td class=\"prim\">", $i, "</td>";
                                $primmzahlzähler ++;
                            } 
                            else
                            {
                                echo "<td>", $i, "</td>";
                            }        
                            
                            if($i % 10 == 0)
                            {
                                echo"</tr>";

                            }  
                        }    
                ?>

            </tbody>
    </table>

    <br>
    <br>

     <div class = "yellow-box"></div>
     <br>
    
    <?php
        echo $primmzahlzähler, " Primzahlen";

    ?>                    

</body>
</html>