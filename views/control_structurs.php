<?php
/**
 * Se obtiene la funcion que nos permite aplicar la logíca
 */
$response = dateObtain();
$phrase = "power by - Iván Nicolás Acero García";
?>
<h1>
    <?php
    echo $response[0]." - utm</br>";
    ?>
</h1>

<p>
    <?php
    /**
     * usamos los vlores obtenidos de la fecha para crear informacón de valor para el usuario
     */
    echo "Quedan <b>".($response[1] - 12)." Mese(s)</b> para finalizar el año</br>".
    "Hoy es un día <b>".($response[2] % 2 ? "par" : "impar")."</b> Atento al pico y placa!!</br>".
    "El año <b>".(anoBisiesto($response[3])? "Es Bisiesto" : "No es Bisiesto")."</b> Quizas sea el otro año :)</br>".
    "Estamos por la <b>".($response[4] == "pm"? "tarde": "mañana")."</b></br>".
    " <b>".$phrase."</b> con una cantidad de <b>".strlen($phrase)." carácteres</b>";
    ?>
</p>