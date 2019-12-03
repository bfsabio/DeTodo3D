<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <title>Faqs</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="../css/faq.css">
      <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <body>
    <?php
      $a=3;
      include '../include/navbar.php';
    ?>

    <div class="container">

    <details>
    <summary>¿Cual es el compromiso del proyecto?</summary>
         <p>Proyectamos crear una comunidad de colaboración mutua destinada a todo tipo de asistencias y manufacturas necesarias, en la impresión 3D. Debido a la ascendencia a fabricar y crear resoluciones de las mismas, la comunidad  necesitaba de un sitio completo de comercialización,  transacción & el  impulso de servicios orientado a suplir las necesidades que el sector demanda.</p>
    </details>
    <details>
    <summary>¿Como  registrarse?</summary>
         <p>Haga click en el botón registrarse que esta en la barra  de navegación & inicio, complete los  campos  con sus datos  y  cklikea enviar.</p>
    </details>
    <details>
    <summary>¿Que se puede publicar en el sitio?</summary>
         <p>Se pueden publicar tanto servicios, como materia prima y productos terminados realizados por los diseñadores.</p>
    </details>
    <details>
    <summary>¿Tiene algun costo publicar en el sitio?</summary>
         <p>No, el servicio de publicación es totalmente gratuito, solo se cobra lo que cada usuario pida por vender u ofrecer sus servicios.</p>
    </details>
    <details>
    <summary>¿El sitio es responsable de las transacciones u operaciones realizadas mediante el sitio?</summary>
         <p>  No, el sitio fue creado para ser una plataforma de intercambio de recursos, cumpliendo la función de mediador, no asumiendo ninguna responsabilidad.</p>
    </details>
    <details>
    <summary>¿Para que no se recomienda la impresión 3D?</summary>
         <p>No se usa para imprimir piezas que infrinjan la ley,( Armas) ver tema de uso réplica armas hay una ley & No es recomendable para producción en masa.</p>
    </details>
    <details>
    <summary>¿Cuáles son nuestras recomendaciones de seguridad?</summary>
         <p>Confirmá con el vendedor las condiciones de prestación del servicio.  Revisá que el servicio presupuestado incluye todo lo que necesitás y que el precio es final.  Mirá las opiniones que otros compradores dejaron en la publicación. Hacé todos los acuerdos dentro de la mensajería de pagina.  No hagas envíos de dinero o uses servicios de pago anónimos ni recibas cupones de pago del vendedor.  No confíes en el vendedor si te presiona para que envíes un pago.</p>
    </details>
    <details>
    <summary>¿Porqué imprimir un objeto en 3D?</summary>
         <p>El bajo costo por pieza de la impresión 3D - en comparación a otras tecnologías- permite incorporar esta instancia al proceso de diseño, permitiendo realizar comprobaciones y correcciones haciendo que el proceso sea más eficiente (y aportando al control de la ansiedad de tener el producto ya para ver como queda).</p>
    </details>
    <details>
    <summary>¿Que  puedo hacer, si soy titular de un derecho y quiero denunciar una publicación?</summary>
         <p>Si sos titular o apoderado de un derecho de propiedad intelectual y querés comenzar a protegerlo en nuestro sitio, podés adherirte a nuestro Programa de Protección de Propiedad Intelectual y pedir que removamos las publicaciones que estén cometiendo infracciones a tus derechos dentro de nuestro sitio web.</p>
    </details>
    <details>
    <summary>¿que  pasa  si, recibí una denuncia en mi publicación?</summary>
         <p>Si alguna de tus publicaciones recibe una denuncia de un miembro de nuestro Programa de Protección de Propiedad Intelectual, tenés que responderla para demostrarle que no viola sus derechos.</p>
    </details>
    <details>
      <summary>¿consultas?</summary>
    <form action="envia.php" method="post" class="form-consulta">
<div>
<label>Nombre y apellido: <span>*</span>
  <input type="text" name="nombre" placeholder="Nombre y apellido" class="campo-form" required>
</label>
</div>
<div>
<label>Email: <span>*</span>
  <input type="email" name="email" placeholder="Email" class="campo-form" required>
</label>
</div>
<div>
<label>Consulta:
  <textarea name="consulta" class="campo-form"></textarea>
</label>
</div>
<input type="submit" value="Enviar" class="btn-form">

</details>
</form>
</div>
</body>
</html>
