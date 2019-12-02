<?php
$remitente = $_POST['email'];
$destinatario = 'bsfsabio@hotmail.com'; // en esta línea va el mail del destinatario.
$asunto = 'Consulta'; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{

    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n";
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
	$cuerpo .= "Consulta: " . $_POST["consulta"] . "\r\n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo.
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    // $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellido']."\" <".$remitente.">\n";

    // mail($destinatario, $asunto, $cuerpo, $headers);

    include 'confirma.html'; //se debe crear un html que confirma el envío
}
?>
