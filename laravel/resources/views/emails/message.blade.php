<?php
//get the first name
$email = Input::get('email');
$asunto = Input::get ('subject');
$mensaje = Input::get('body');

?> 

<h1>TE CONTACTARON EN LA PAGINA </h1>
 
<p>
CORREO: <?php echo ($email); ?> <br>
ASUNTO: <?php echo($asunto);?> <br>
MENSAJE: <?php echo($mensaje);?><br>
</p>