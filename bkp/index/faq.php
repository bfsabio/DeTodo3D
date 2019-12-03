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
    <header>
      <?php
            $a=1;
        include '../include/navbar.php';

        ?>
    </header>

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
        <summary>¿Puedo hacer una pieza a partir de fotografías?</summary>
             <p>No, no se puede hacer una pieza a partir de fotografías. La forma de hacer una pieza sería contratando el servicio de modelado 3d para que realicen tu pieza. En este caso, un diseñador 3D modelará tu pieza de cero, basándose en las fotografías y medidas indicadas. Este es un servicio complementario a la impresión 3D y tiene un costo adicional dependiendo del servicio del diseñador. Para realizarlo se deben tomar las medidas pertinentes de la fotografía, para tener una pieza lo más cercana a la original, ya que de otra forma no se puede garantizar la exactitud del modelo de réplica.</p>
        </details>
        <details>
        <summary>¿En dónde puedo encontrar objetos 3d ya modelados?</summary>
             <p>Nuestros favoritos son www.thingiverse.com (gratuito), www.youmagine.com (gratuito), www.turbosquid.com (de paga), www.grabcad.com (gratuito y de paga), www.123dapp.com (gratuito y de paga), y www.cubify.com (gratuito y de paga).</p>
        </details>
        <details>
        <summary>¿Qué tipos de tecnología existen y para qué sirve cada una?</summary>
             <p>SLA- Estereolitografía:Esta tecnología utiliza resinas líquidas fotopoliméricas que se solidifican cuando son expuestas a la luz emitida por un láser ultravioleta. De esta forma se van creando capas superpuestas de resina sólida que van creando el objeto.</p>

             <p> SLS – Sinterizado Láser Selectivo:Consiste en depositar una capa de polvo, de unas décimas de milímetro, en una cuba que se ha calentado a una temperatura ligeramente inferior al punto de fusión del polvo. Seguidamente un láser CO2 sinteriza el polvo en los puntos seleccionados (causando que las partículas se fusionen y solidifiquen).</p>

             <p>FDM – Modelado por deposición fundida:Utiliza una técnica aditiva, depositando el material en capas, para conformar la pieza. Un filamento plástico o metálico que inicialmente se almacena en rollos, es introducido en una boquilla. La boquilla se encuentra por encima de la temperatura de fusión del material y puede desplazarse en tres ejes controlada electrónicamente. La pieza es construida con finos hilos del material que solidifican inmediatamente después de salir de la boquilla.</p>

             <p>PolyJET:Funciona de un modo similar a la impresión de inyección de tinta, pero en lugar de inyectar gotas en papel, inyectan en una bandeja capas de fotopolímero líquido que se pueden endurecer.</p>
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
    <label><span>*</span>
			<input type="text" name="nombre" placeholder="Nombre y apellido" class="campo-form" required>
		</label>
</div>
<div>
		<label><span>*</span>
			<input type="email" name="email" placeholder="Email" class="campo-form" required>
		</label>
</div>
<div>
		<label>
			<textarea name="consulta" placeholder="consultas" class="campo-form"></textarea>
		</label>
</div>
		<input type="submit" value="Enviar" class="btn-form">

  </details>
	</form>
  </div>
  </body>
</html>
