<?php
        if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
                $base = 3;
                $altura = 4;
                $area = null;
                        echo "<h2 align='center'>Resultado De La Hipotenusa Del Triangulo Rectangulo</h2>";
                        $area = $base * $altura;
                        echo "<br><h3 align='center'>Base: " . $base . "</h3>";
                        echo "<br><h3 align='center'>Altura: " . $altura . "</h3>";
                        echo "<br/><br/>";
                        echo "<br><h3 align='center'>Area del Rectangulo: " . $area . "</h3>";
                        echo "<br/><br/>";
                        echo "<a href='index.html'>Regresar</a>";
        }
?>