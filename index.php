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
    </style>


</head>
<body>

    <table>
            <tbody>
                <?php

                        for($i = 1; $i <= 100; $i++)
                        {
                            if($i % 10 == 1)
                            {
                                echo"<tr>";

                            }   

                            echo "<td>" ,$i, "</td>";


                            if($i % 10 == 0)
                            {
                                echo"</tr>";

                            }  
                        }    
                ?>

            </tbody>
    </table>

</body>
</html>