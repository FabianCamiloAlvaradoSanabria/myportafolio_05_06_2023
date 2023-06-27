<?php
    $datos = json_decode(file_get_contents("data/data.json"));
?>
<!DOCTYPE html>
<html lang="sp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio personal</title>
    <link rel="shortcut icon" href="images/icon.png" type="image/png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
        integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <!--Principal-->
    <section id="main">
        <!--Navigación-->
        <nav>
            <!--Logo-->
            <a href="#" class="logo">Ing. Fabian Alvarado</a>
            <!--Menú-->
            <div class="toggle"></div>
            <ul class="menu">
                <li class="active"><a href="#main"><?php echo $datos->Enlaces[0]->Enlace1;?></a></li>
                <li><a href="#about"><?php echo $datos->Enlaces[0]->Enlace2;?></a></li>
                <li><a href="#services"><?php echo $datos->Enlaces[0]->Enlace3;?></a></li>
                <li><a href="#portfolio"><?php echo $datos->Enlaces[0]->Enlace4;?></a></li>
                <li><a href="#contact-form"><?php echo $datos->Enlaces[0]->Enlace5;?></a></li>
            </ul>
            <!--Lenguaje-->
            <a href="#" class="lang">Es</a>
        </nav>
        <!--Nombre-->
        <div class="name">
            <!--Hola-->
            <p>Hola</p>
            <!--Nombres-->
            <h1><?php echo $datos->Datos->inf_personal[1]->Carrera[0];?> <font color="#63d9ff"> <?php echo $datos->Datos->inf_personal[1]->Carrera[1];?></font> <?php echo $datos->Datos->inf_personal[1]->Carrera[2];?></h1>
            <p class="details">Soy un estudiente que se encuentra en proceso de aprendizaje de nuevos lenguajes de
                programación tales como PHP JS y CSS</p>
            <!--Cv boton-->
            <a href="#" class="cv-btn">Mi Hoja de vida</a>
            <!--Flecha hacia abajo-->
        <div class="black-line">
            </div>
            <!--Social-->
            <div class="redess">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>

        </div>


    </section>

    <!--sobre----------------------->
    <section id="about">
        <!--text---------------------->
        <div class="about-text">
            <h1>Sobre mí</h1>
            <h2><?php echo $datos->Datos->inf_personal[0]->Carrera; ?></h2>
            <p><?php echo $datos->Datos->inf_personal[0]->Descripcion; ?></p>
            <button>Ver mas detalles</button>
        </div>
        <!--acerca-model----------------->
        <div class="about-model">
            <img src="images/about-model.png" alt="model" />
        </div>


    </section>
    <!--servicios-------------------->
    <section id="services">
        <!--heading-------------->
        <div class="s-heading">
            <h1>Servicios</h1>
            <p>Estos son algunos de los servicios que brindo.</p>
        </div>
        <!--servicios-box-container--------->
        <div class="b-container">
            <!--box-1---------------->
            <div class="s-box">
                <!--img------------->
                <div class="s-b-img">
                    <!--type----------->
                    <div class="s-type">Unreal Enguie</div>
                    <!--name------->
                    <img src="images/s1.png">
                </div>
                <!--text----------------->
                <div class="s-b-text">
                    <a href="#">Se ofrece el servicio de modelado 3D y cinematicas como tambien el diseño de escenarios
                        para cualquier tipo de ambiente.</a>
                </div>
            </div>
            <!--box-2---------------->
            <div class="s-box">
                <!--img------------->
                <div class="s-b-img">
                    <!--type----------->
                    <div class="s-type">Web Desing</div>
                    <!--name------->
                    <img src="images/s3.jpg">
                </div>
                <!--text----------------->
                <div class="s-b-text">
                    <a href="#">Se ofrece diferentes diseños para paginas Web con Html, Css, JavaScript, ademas de ser
                        paginas responsive.</a>
                </div>
            </div>
            <!--box-3---------------->
            <div class="s-box">
                <!--img------------->
                <div class="s-b-img">
                    <!--type----------->
                    <div class="s-type">Blender</div>
                    <!--name------->
                    <img src="images/s2.png">
                </div>
                <!--text----------------->
                <div class="s-b-text">

                    <a href="#">Ofrezco el servicio de crear modelados 3D y Animación con Blender, ademas de la creación
                        de Assents para motores de video juegos</a>
                </div>
            </div>
        </div>
    </section>
    <!--portfolio------------------->
    <section id="portfolio">
        <!--heading----------->
        <h1 class="p-headind">Portafolio</h1>
        <!--portfolio-container------------>
        <div class="p-container">
            <!--portfolio-box-1-------->
            <div class="p-box">
                <!--text--------->
                <div class="overlay-text">
                    <h1>3D Person</h1>
                    <p>Unreal Enguie</p>
                </div>
                <!--bg-img------------->
                <img src="images/w1.jpg">

            </div>
            <!--portfolio-box-2-------->
            <div class="p-box">
                <!--text--------->
                <div class="overlay-text">
                    <h1>Stage Desing</h1>
                    <p>Unity</p>
                </div>
                <!--bg-img------------->
                <img src="images/w2.jpg">
            </div>
            <!--portfolio-box-3-------->
            <div class="p-box">
                <!--text--------->
                <div class="overlay-text">
                    <h1>Level Desing</h1>
                    <p>Unreal Enguie</p>
                </div>
                <!--bg-img------------->
                <img src="images/w3.jpg">
            </div>
            <!--portfolio-box-4-------->
            <div class="p-box">
                <!--text--------->
                <div class="overlay-text">
                    <h1>Fronted</h1>
                    <p>Web Desing</p>
                </div>
                <!--bg-img------------->
                <img src="images/w4.jpg">
            </div>
            <!--portfolio-box-5-------->
            <div class="p-box">
                <!--text--------->
                <div class="overlay-text">
                    <h1>Fronted</h1>
                    <p>Web Desing</p>
                </div>
                <!--bg-img------------->
                <img src="images/w5.jpg">
            </div>
            <!--portfolio-box-6-------->
            <div class="p-box">
                <!--text--------->
                <div class="overlay-text">
                    <h1>Fronted</h1>
                    <p>Web Desing</p>
                </div>
                <!--bg-img------------->
                <img src="images/w6.jpg">
            </div>

        </div>
    </section>
    <!--Contact-btn------------------>
    <section id="contact-btn">
        <!--heading-------------->
        <h1 class="c-b-heading"> Tiene algún proyecto en mente?</h1>
        <!--btn-------->
        <button>Contactame</button>
    </section>
    <!--contact-form------------------->
    <section id="contact-form">
        <form>
            <!--left--------------------------------------->
            <div class="contact-left">
                <h1 class="c-l-heading">
                    <font style="border-bottom: 3px solid #63D9FF;">Escribeme</font>
                </h1>
                <!--name-------->
                <div class="f-name">
                    <font>Nombre</font>
                    <input type="text" placeholder="Nombre Completo" />
                </div>
                <!--email-------->
                <div class="f-email">
                    <font>Email</font>
                    <input type="email" placeholder="Example@gmail.com" />
                </div>
            </div>
            <!--right------------------------------------------->
            <div class="contact-right">
                <!--message-------->
                <div class="message">
                    <font>Mensage</font>
                    <textarea name="message" rows="5" cols="20" placeholder="Escribe algo..."></textarea>
                </div>
                <!--submit-btn------------>
                <button>submit</button>
            </div>

        </form>


    </section>
    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
    <script type="text/javascript">

        /*Responsive Navigation*/
        $(document).ready(function () {
            $('.toggle').click(function () {
                $('.toggle').toggleClass('active')

                $('nav ul').toggleClass('active-menu')


            })
        });

    </script>
</body>

</html>