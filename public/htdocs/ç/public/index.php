<!--<?php

session_start();

$validUser = $_SESSION["login"] === true;

if(isset($_POST["login"])) {
  $validUser = $_POST["email"] == "email@gmail.com" && $_POST["pass"] == "password";
  if(!$validUser) $errorMsg = "Invalid username or password.";
  else $_SESSION["login"] = true;
}
if($validUser) {
   header("Location: /index.php"); die();
}

?>-->

<!DOCTYPE html>
<html>
<head>
<title>1786</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="css/basic.css" />
<link rel="stylesheet" type="text/css" href="css/swipe-gallery.css" />


</head>

<body>

<!-- Login form -->
  <form class="login" action="" method="post">
    
    <div id="form-login" style="display: none;"">
   <div class="form-group-date">
     <label for="email"></label>
     <input type="email" class="form-control" id="email" placeholder="Email" name="email">
   </div>

   <div class="form-group-date">
     <label for="password"></label>
     <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass">
   </div>
    <button type="submit" name ="login" value ='1' id="login" class="btnLogin">Entrar</button>
    </div>
  </form>
<!-- -->

  <div id="container">
    <button onclick="showLoginWindow()" id="btnAdmin" class="btnAdmin">Administrador</button>
    <a href="index.html" id="btnLogout" class="btnLogout">Cerrar sesión</a>
    <header id="header">
      <h1>Casa rural de una espiga</h1>
      <!--<a href="index.html" class="btn">Inicio</a>-->
      <a href="casa.html" class="btn">Casa</a>
      <a href="" class="btn">Como llegar</a>
      <a href="" class="btn">Reserva</a>
      <a href="casa-fotos.html" class="btnExtra">Fotos casa</a>
      <a href="#middle" class="btnExtra">Historia</a>
    <!--  <a href="admin.html" class="btnAdmin">Administrador</a>-->
    </header>

  <hr id="hr">

<div id= "slider">
<section class="slider-img">
<ul class="slider">
    <li>
        <input type="radio" id="slide1" name="slide" checked>
        <label for="slide1"></label>
        <img src="fotos/IMG_9712.JPG" alt="Panel 1">
    </li>
    <li>
        <input type="radio" id="slide2" name="slide">
        <label for="slide2"></label>
        <img src="fotos/IMG_7970.jpg" alt="Panel 2">
    </li>
    <li>
        <input type="radio" id="slide3" name="slide">
        <label for="slide3"></label>
        <img src="fotos/IMG_9716.JPG" alt="Panel 3">
    </li>
    <li>
        <input type="radio" id="slide4" name="slide">
        <label for="slide4"></label>
        <img src="fotos/IMG_9111.jpg" alt="Panel 4">
    </li>
</ul>  
    
<nav class="navigation-module">
  <ul id="banner-navigation" class="navigation-module__list"></ul>
</nav>
</section>
</div>

</div>

   

<div id="middle">
<!-- middle section -->


<hr class="toprule">

 
<div class="letter">
  <h3 class="title">Un poco de historia</h3>

  <p id="part1">
    <span class="drop">A</span>
    unque hay referencias de la presencia de algunas edificaciones, como tainas y cabañas de leñadores, la
conformación de un enclave urbano en Campillo de Ranas no tiene lugar hasta el censo repoblador que el
segundo Marqués de Villena otorga en 1464 sobre propiedades de su mujer doña Juana de Luna y Pimentel
señora de la comarca.
Entre el Duero y el Tajo, la forma más extendida de repoblar los territorios ganados en reconquista fue la
creación de las Comunidades de Villa y Tierra, villas fortificadas capaces de recibir refugiados y resistir
asedios que defendía una comarca fronteriza divida en varios “sexmos” o unidades territoriales. Cada
sexmo incluía su vez varios pueblos.
El señor de la villa recibía del rey, generalmente tras su reconquista, el dominio de la tierra. Para facilitar la repoblación de zonas de frontera inestables ofrecía a los colonos condiciones atractivas para su
asentamiento. Establecía un contrato similar a un censo enfitéutico: el cedía los derechos de usufructo de
los terrenos a cambio de una renta anual. Pero no era un simple alquiler porque, en la práctica, los derechos
eran de uso vitalicio e incluso se podían heredar o vender. Sólo el impago de la renta conseguía revertir los
derechos en el señor de la villa.
 Además de sus tierras, los colonos podían aprovechar mancomunadamente ciertos montes, bosques,
dehesas y arroyos. Los sexmos estaban obligados a contribuir con algunos hombres a la “vela” o guardia
del señor.
Campillo de Ranas perteneció a la Comunidad de Villa y Tierra de Ayllón. Formó parte del llamado Sexmo
de la Transierra, junto a los pueblos de Villacadima, Cantalojas, Majalrrayo y Almiruete; siendo, por lo que se
deduce de las rentas que pagaban los municipios, el más poblado de todos ellos.
</p>


<p id="part2" style="display: none;">
<span class="drop">A</span>

pesar de la orografía, la dureza del clima y la escasez de suelo cultivable, los intactos recursos naturales
que aportaba la sierra, permitieron la consolidación de una población creciente en Campillo a lo largo del
siglo XVI. Por el contrario las grandes epidemias del siglo XVII y la bancarrota nacional con subida general
de impuestos, contribuyeron a una despoblación generalizada de gran parte de la vieja Castilla rural. Sólo a
principios del siglo XVIII empezaron los cambios favorables que acabaron suponiendo el crecimiento de la
estancada población de España.
 La ilustración y el despotismo ilustrado hicieron recuperar el pulso a España, siendo el vigoroso aumento
de la población una prueba de ello. Y en este contexto se construyó la casa original 1786 y otras
colindantes, en un momento de bonanza, también para Campillo de Ranas.
 Pero los recursos de Campillo eran limitados. A finales del siglo XIX la población excede la capacidad real
de subsistencia de la zona. El aumento de necesidades sobreexplota el entorno y degrada irreversiblemente
la fuente de recursos.
Se fuerza la tala de bosques, en gran medida para el carboneo. desciende entonces la capacidad de
almacenamiento de agua del suelo, potenciando el estiaje de los arroyos. En suelos rocosos la tala expone
también a la escasa capa de suelo fértil a la erosión. La ausencia de hojas procedentes de los bosques y la
sobrexplotación ganadera contribuyeron al empobrecimiento vegetal, a la vez que el aumento de la
población y la subsiguiente división de la propiedad llevó al microminifundio. En estos momentos las
condiciones de vida son muy duras y cuando en los años 60 del siglo XX aumenta la demanda de mano de
obra en las fábricas, los pueblos de la comarca se despueblan rápidamente buscando sus habitantes una
vida menos dura en las ciudades.
 Esta despoblación tuvo un único efecto positivo, se mantuvieron gran parte de las edificaciones
tradicionales, sin ser sustituidas por otras construidas con materiales modernos.
 A la postre, la preservación de estos pueblos con sus casas de pizarra, ha dado una nueva oportunidad de
subsistencia a la comarca, que actualmente tiene en el turismo su mayor fuente de recursos, permitiendo la
existencia de una población estable y un creciente desarrollo turístico. 
</p>

<!-- 
<div class="frame">
<img src="fotos/IMG_9713.JPG"> </img>
</div> -->

<br>
<a id="previous" onclick= "previous()" class="previous round">&#8249;</a>
<a id ="next" onclick="next()" class="next round">&#8250;</a>

<p id="count">1/2</p>

</div>
</div>
</div>


</body>
<script src="login.js"></script>
</html>
