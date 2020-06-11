
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Help The World</title>
    <link rel="shortcut icon" href="img/p1.png" type="image/x-icon">
    <link rel="stylesheet" href="css/helpworldz.css">
     
</head>

<body>
    <header>
        <nav class="navegacion">
            <ul class="menu">
                <li><a href="helpworldz.html">Inicio</a></li>
                <li><a href="#">Producto</a>
                    <ul class="submenu">
                        <li><a href="mexico.html">Mexico</a></li>
                        <li><a href="colonbia.html">Colonbia</a></li>
                        <li><a href="argentina.html">Argentina</a></li>
                        <li><a href="asia.html">Asia</a></li>
                    </ul>
                </li>
                <li><a href="#">Donaciones</a>
                    <ul class="submenu">
                        <li><a href="payeer.html">Payeer</a></li>
                        <li><a href="paypal.html">Paypal</a></li>
                    </ul>
                </li>
                <li><a href="contacto.html">Contactanos</a>
            </ul>
        </nav>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <section class="main">
    <div class="pagina">
        <h2>Hola bienvenidos a mi tienda</h2>
    <div class="contenido">
        <p>Venta de dulces de varios paises</p>
<article>
    <br><br>
    <p>Dulces mexicanos</p>
    <br>
    <img src="img/mexico/Mexicanos.jpg">
    <p>Dulces Mexicanos, distiguidos por sus colores llamativos y su delisioso sabor, en esta selecion encotraras de los caramelos mas dulces y exquisitos de nuestra gran selecion y no solo eso tambien dulces ricos y picositos, algo que nos distingue en mexico que nos gusta mucho el picante, las empresas de dulces no se quedan atras con el picante</p>
</article>
<article>
    <br><br>
    <p>Dulces colonbianos</p>
    <br>
    <img src="img/colonbia/Colonbianos.jpg">
    <p>Dulces Mexicanos, distiguidos por sus colores llamativos y su delisioso sabor, en esta selecion encotraras de los caramelos mas dulces y exquisitos de nuestra gran selecion y no solo eso tambien dulces ricos y picositos, algo que nos distingue en mexico que nos gusta mucho el picante, las empresas de dulces no se quedan atras con el picante</p>
</article>
<article>
    <br><br>
    <p>Dulces Argentinos</p>
    <br>
    <img src="img/argentina/argentinos.jpg">
    <p>Dulces Mexicanos, distiguidos por sus colores llamativos y su delisioso sabor, en esta selecion encotraras de los caramelos mas dulces y exquisitos de nuestra gran selecion y no solo eso tambien dulces ricos y picositos, algo que nos distingue en mexico que nos gusta mucho el picante, las empresas de dulces no se quedan atras con el picante</p>
</article>
<article>
    <br><br>
    <p>Dulces Asiaticos</p>
    <br>
    <img src="img/china/asiaticos.jpg">
    <p>Dulces Mexicanos, distiguidos por sus colores llamativos y su delisioso sabor, en esta selecion encotraras de los caramelos mas dulces y exquisitos de nuestra gran selecion y no solo eso tambien dulces ricos y picositos, algo que nos distingue en mexico que nos gusta mucho el picante, las empresas de dulces no se quedan atras con el picante</p>
</article>
</section>

<aside>
        <br><br><br><br>
        <p><a class="anuncio">Donaciones por payeer<a></p>
        <br><br>
        <a href="payeer.html"><img src="img/payeer/payeer.jpg"></a>
        <br><br>
        <a class="anuncio">Donaciones por paypal<a>
        <br><br>
        <a href="paypal.html"><img src="img/paypal/paypal.jpg" width="150"></a>
        <br><br>
        <a class="anuncio">Reflexiona<a>
        <br><br>
        <embed src="videos/Triste Aquarela [360p].mp4" width="250">
        <br><br>
        </embed>
    </aside>

    <footer>
    <div class="pie">
     <p>Copyright ©2020 Paulo.Inc</p>
     <p class="icono"><img src="img/f.png">   <img src="img/y.png">   <img src="img/t.png">   <img src="img/c.png">   <img src="img/w.png">   <img src="img/h.png"></p>
    </div>
    </footer>
</body>
</html>

<?php 
if (isset($_POST['pw'])) 
	{   $password = $_POST['password'];   
if ($pw == "holamundo") {
	      header ("Location: helpworldz.html");   
} elseif ($pw == "error" )
{      header ("Location: newpage2.html");   
} else 
{      header ("Location: sorry.html");   } } 
 
?>