<?php

$conex = mysqli_connect("localhost","root","123456789","usuarios");

if(isset($_POST["registro"])){
    if(strlen($_POST["gmail"]) > 1 && strlen($_POST["mensaje"]) >1){
        $gmail = trim($_POST["gmail"]);
        $mensaje = trim($_POST["mensaje"]);
        $consulta = "INSERT INTO mensajes(gmail, mensaje) VALUES ('$gmail','$mensaje')";
        $respuesta = mysqli_query($conex,$consulta);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="warcraft icon" href="img/escudo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Warcraft 3</title>
</head>
<style>
    body{
        background-image: url(img/back.jpg);
        cursor: url(img/espada-png.png), auto;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid ">
          <a class="navbar-brand" href="#"><img  width="100px" src="img/escudo.png" alt=""></a>
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link fs-4 text-warning" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-4 text-warning" href="#informacion">Información</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-4 text-warning" href="#comandos">Comandos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-4 text-warning" href="#contacto">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container text-center text-dark mt-5 border border-dark rounded">
        <h1 id="informacion" class="mt-5">informacion</h1>
        <div class="row">
            <div class="col">
                Warcraft III para pasará a la historia como uno de los mejores  juegos de estretegia en tiempo real para PC de todos los tiempos ya que multitud de juegos del género todavía se inspiran en su legado. <br> <br> Aún en 2023 fecha de lanzamiento de este foro Warcraft sigue creciendo aun más como uno de los mejores juegos de estrategía, de manera que actualmente cuenta con una comunidad muy activa que se encarga de sacar nuevos mods de texturas, campañas, personajes, etc.  </p><br>
    
                <p class="texto-parte2">Warcraft 3 es de lejos uno de los grandes juegos de estrategia en tiempo real disponibles en PC, siendo así que su popularidad es tal que incluso a día de hoy se sigue jugando por parte de un sector de la comunidad. Y es que ya sea por su especial modo de juego, sus mecánicas o demás, el título, que además ha supuesto un legado y una inspiración para muchos otros del género, cuenta con siversos elementos que lo hacen bastante especial, entre los cuales hay que incluir los trucos y comandos que permiten al jugador hacer ciertas trampas. 

                 Y es que, a fin de cuentas, Warcraft 3 cuenta con herramientas suficientes para facilitar ciertos objetivos durante la partida a través de los mencionados trucos y comandos, para lo cual hemos preparado este contenido para que podáis acceder al mismo, destacando desde las claves necesarias hasta el método para abrir la consola en la cual se introducen las mismas: 
                 
                 Para que los trucos funcionen, durante la partida, pulsa la tecla enter e introduce cualquiera de las siguientes claves. <br> <br>
                 <b>¿Como activar los comandos de Warcraft3?</b><br><br>
                 Para empezar, hay que aclarar que activar los trucos y comandos de consola de Warcraft 3 es bastante simple, ya que sólo tendréis que pulsar la tecla Enter para abrir la consola en la cual podéis añadir todos los trucos que añadimos a continuación. Dicho lo cual, estos son: </p>
            </div>
        </div>
    </div>
    <div class="container mt-5 border border-dark rounded text-dark">
        <h1 id="comandos" class="text-center">Comandos</h1>
        <div class="row">
            <div class="col-12">
                <ul>
                    <li>allyourbasearebelongtous : Victoria instantánea </li>
                    <li>greedisgood : Obtén 500 unidades de madera y oro</li>
                    <li>iseedeadpeople : Completa el mapa</li>
                    <li>somebodysetusupthebomb : Derrota instantánea</li>
                    <li>thereisnospoon : Maná infinito</li>
                    <li>whosyourdaddy : Invencibilidad y muerte de un golpe</li>
                    <li>motherland X Y*	: Cambia de nivel </li>
                    <li>strengthandhonor : Sigues jugando incluso después de perder</li>
                    <li>greedisgood X** : Obtén oro y madera</li>
                    <li>keysersoze X** : Obtén oro</li>
                    <li>leafittome X** : Obtén madera</li>
                    <li>iocainepowder : Muerte rápida</li>
                    <li>pointbreak : Elimina los límites de comida y población</li>
                    <li>whoisjohngalt : Investigación rápida</li>
                    <li>sharpandshiny : Obtén todas las actualizaciones</li>
                    <li>synergy : Desbloquea el árbol tecnológico</li>
                    <li>riseandshine : Cambia la hora a la mañana</li>
                    <li>lightsout : Cambia la hora a la noche </li>
                    <li>daylightsavings X* : Cambia la hora del juego</li>
                    <li>itvexesme : Desactiva los requisitos de victoria</li>
                    <li>thedudeabides : Desactiva la recarga de hechizos</li>
                    <li>warpten : Construcciones rápidas</li>
                    <li id="agregar"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                   </ul>
            </div>
            <div class="col-12">
                <p class="text-white"> <b>Queres colaborar con la implementación de nuevos comandos, envianos el comando que quisieras que agreguemos.</b> </p><br>
            </div>
        </div>
    </div>
    <div class="container text-center text-white mt-5 border rounded">
        <form method="post">
        <h1 id="contacto">Formulario</h1>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" name="gmail" id="exampleFormControlInput1" placeholder="@gmail.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1"  class="form-label">Ejemplo de textarea</label>
            <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" placeholder="Mensaje..." rows="3"></textarea>
          </div>
          <div class="col-12 mb-2">
            <input class="btn btn-primary" name="registro" type="submit" value="Enviar mensaje">
          </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>