
      var boton = document.getElementById('tema');

      boton.onclick=function() {
        document.body.style.backgroundImage="url('img/fondo2.jpg')";
        document.getElementById("color").style.background="#E3E1E1";
        document.getElementById("text").style.color="black";
        document.getElementById("text1").style.color="black";
        document.getElementById("text2").style.color="black";
        document.getElementById("text3").style.color="black";
      };

      var boton = document.getElementById('tema2');

      boton.onclick=function() {
        document.body.style.backgroundImage="url('img/fondo.jpg')";
        document.getElementById("color").style.background="#343a40";
        document.getElementById("text").style.color="rgba(255,255,255,.5)";
        document.getElementById("text1").style.color="rgba(255,255,255,.5)";
        document.getElementById("text2").style.color="rgba(255,255,255,.5)";
        document.getElementById("text3").style.color="rgba(255,255,255,.5)";

      };
