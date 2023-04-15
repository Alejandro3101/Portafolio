<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alejandro Valderrama | Desarrollador </title>

    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="https://unpkg.com/primeflex@^3/primeflex.css">
    <link rel="stylesheet" href="https://unpkg.com/primeflex/themes/saga-blue.css">
    <script src="https://kit.fontawesome.com/b3f17f1dac.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>


    <!--Header-->

    <header class="flex w-full fixed top-0 z-1">
        <nav class="flex justify-content-between w-full navbar">
            <span class="logo cursor-pointer" onclick="scrollToSection('home')">
                <img src="Img/logoIII.png" alt="Logo" width="100" height="50">
            </span>
            <input type="checkbox" aria-label="Agregar checkbox"
                class="checkbox xl:hidden">
            <div class="hamburger__lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <div class="header__info flex align-items-center gap-3">
                <ul class="flex flex-column xl:flex-row list-none">
                    <li onclick="scrollToSection('about')">Sobre mí</li>
                    <li onclick="scrollToSection('services')">Conocimientos</li>
                    <li onclick="scrollToSection('portfolio')">Portafolio</li>
                    <li onclick="scrollToSection('contact')">Contacto</li>
                </ul>
                
            </div>
        </nav>
    </header>

<!--PAGINA INICIO -->
<div class="container">
    <section id="home"
        class="home__page flex align-items-center justify-content-center xl\:justify-content-between grid grid-nogutter gap-4">
        <div class="left__content col-12 xl:col-6">
            <div class="message__bubble triangle mb-4 md:mb-2">
        
            </div>
            <h1 class="text-3xl sm:text-5xl md:text-7xl">Alejandro Valderrama</h1>
            <p class="text-gray-500">
                Profesional en desarrollo web
            </p>
            <div class="home__buttons flex align-items-center gap-2 mt-6">
                <a href="./assets/CURRICULUM.pdf" aria-label="Descargar Hoja de vida"
                    class="cursor-pointer border-round-lg no-underline" download>Descargar CV</a>
                <button onclick="scrollToSection('portfolio')" aria-label="Visualizar mi trabajo"
                    class="cursor-pointer border-round-lg">Mi trabajo</button>
            </div>
        </div>
        <div class="right_content col-9 sm:col-6 xl:col-5">
            <img src="Img/img2.png" alt="Foto perfil" width="30" height="30">
        </div>
    </section>
    <!--ABOUT ME-->
    <section id="about" class="about__me w-full min-h-screen flex align-items-center">
        <div class="aboutMe__content min-h-full flex flex-column md:flex-row pt-8 md:pt-0">
            <div class="aboutMe__info col-12 md:col-6 md:pr-6 pt-0">
                <h1 class="text-3xl md:text-5xl">Sobre mí</h1>
                <p class="text-gray-500">Soy desarrollador de software apacionado por mi trabajo.
                    Mi interés se centra en el desarrollo de aplicaciones web y móvil,
                     Elaborando productos de calidad con diseños simples y elegantes. </p>
                        <br>

                     <p class="text-gray-500">Los proyectos que he realizado fortalecen mis habilidades 
                        como desarrollador, lo que me motiva aprender cada día mas y estar en busca
                    de nuevos desafios. </p>
                <div class="knowledge flex flex-column gap-3 mt-5">
                    <p>PHP 80%</p>
                    <div class="progress__bar progress_php">
                        <span></span>
                    </div>
                    <p>HTML 100%</p>
                    <div class="progress__bar progress_html">
                        <span></span>
                    </div>
                    <p>C# .NET 80%</p>
                    <div class="progress__bar progress_C">
                        <span></span>
                    </div>
                    <p>Sql 95%</p>
                    <div class="progress__bar progress_Sql">
                        <span></span>
                    </div>
                    <p>Kotlin 70%</p>
                    <div class="progress__bar progress_Kotlin">
                        <span></span>
                    
                    </div>
                        </div>

                <div class="hireMe__button pt-4">
                    <a href="mailTo:avalder5@gmail.com" aria-label="Enviar mensaje al correo"
                        class="cursor-pointer no-underline border-round-lg">Contratame</a>
                </div>

            </div>
            <div class="image col p-0 mt-6 md:mt-0">
                <img src="Img/Alejandro_1.jpg" alt="Foto relacionado a acerca de mí" width="100" height="100">
            </div>
        </div>
    </section>
</div>

<!--Conocimientos -->
<div class="container">
    <section id="services" class="services min-h-full w-full pb-7">
        <div class="services__title flex flex-column gap-3 text-center">
            <h1 class="text-3xl md:text-5xl">Conocimientos</h1>
            
        </div>
        <div class="services__card w-full grid grid-nogutter mt-7 gap-5">
            <div class="card flex align-items-center col-12 sm:col-6 lg:col-4 gap-3 p-2">
                <div class="service__logo flex align-items-center justify-content-center">
                    <i class="fa-brands fa-html5"></i>
                </div>
                <div class="service__name">
                    <p>HTML</p>
                </div>
            </div>
            <div class="card flex align-items-center col-12 sm:col lg:col-4 gap-3 p-2">
                <div class="service__logo flex align-items-center justify-content-center ">
                    <i class="fa-brands fa-php"></i>
                </div>
                <div class="service__name">
                    <p>PHP</p>
                </div>
            </div>
            <div class="card flex align-items-center col-12 sm:col-6 md:col-3 lg:col gap-3 p-2">
                <div class="service__logo flex align-items-center justify-content-center ">
                    <i class="fas fa-database"></i>
                </div>
                <div class="service__name">
                    <p>Sql</p>
                </div>
            </div>
            <div class="card flex align-items-center col-12 sm:col md:col lg:col-4 gap-3 p-2">
                <div class="service__logo flex align-items-center justify-content-center ">
                    <i class="fa-brands fa-react"></i>
                </div>
                <div class="service__name">
                    <p>React Js</p>
                </div>
            </div>
            <div class="card flex align-items-center col-12 sm:col-6 md:col-4 lg:col-4 gap-3 p-2">
                <div class="service__logo flex align-items-center justify-content-center ">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                </div>
                <div class="service__name">
                    <p>Desarrollo Móvil</p>
                </div>
            </div>
            <div class="card flex align-items-center col-12 sm:col md:col-4 lg:col gap-3 p-2">
                <div class="service__logo flex align-items-center justify-content-center ">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div class="service__name">
                    <p>Desarrollo web</p>
                </div>
            </div>
            <div class="card flex align-items-center col-12 sm:col-6 lg:col-4 gap-3 p-2">
                <div class="service__logo flex align-items-center justify-content-center">
                    <i class="fa-brands fa-python"></i>
                </div>
                <div class="service__name">
                    <p>Python</p>
                </div>
            </div>
            <div class="card flex align-items-center col-12 sm:col lg:col-4 gap-3 p-2">
                <div class="service__logo flex align-items-center justify-content-center ">
                    <i class="fa fa-android"></i>
                </div>
                <div class="service__name">
                    <p>Kotlin</p>
                </div>
            </div>
            <div class="card flex align-items-center col-12 sm:col-6 md:col-3 lg:col gap-3 p-2">
                <div class="service__logo flex align-items-center justify-content-center ">
                    <i class="fa fa-github"></i>
                </div>
                <div class="service__name">
                    <p>Github</p>
                </div>
            </div>
        </div>
    </section>

    <!--PORTFOLIO -->
    
    <section id="portfolio" class="portfolio min-h-full w-full pb-8 pt-8">
        <div class="portfolio__title flex flex-column gap-3 text-center">
            <h1 class="text-3xl md:text-5xl">Mi trabajo</h1>
            
        </div>
        <div class="portfolio__gallery">
            <div class="gallery__categories mb-5 mt-5">
                <ul class="flex list-none flex-wrap justify-content-center gap-3">
                    <li class="filter-item active" data-filter="all">Todos</li>
                    <li class="filter-item " data-filter="gym">Inmobiliaria web</li>
                    <li class="filter-item " data-filter="tours__Web">PHP</li>
                    <li class="filter-item " data-filter="world__Tours">Api rest</li>
                    <li class="filter-item " data-filter="e__commerce">C# - Aerolinea</li>
                </ul>
            </div>
            <div class="proyect__gallery flex justify-content-center align-items-center flex-wrap gap-3">
                <div class="project__card tours__Web">
                    <img src="Img/Notas.png" alt="Notas">
                    <div class="overlay"></div>
                    <div
                        class="project__info flex w-full flex-column justify-content-center align-items-center text-center">
                        <h2>Notas</h2>
                        <p>Sistema web para control y organizacion de Notas
                        </p>
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </div>
                </div>
                <div class="project__card e__commerce">
                    <img src="Img/Aerolinea.png" alt="Aerolinea">
                    <div class="overlay"></div>
                    <div
                        class="project__info flex w-full flex-column justify-content-center align-items-center text-center">
                        <h2>Aerolinea</h2>
                        <p>Sistema de control y ventas de tickets para aerolinea</p>
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </div>
                </div>
                <div class="project__card tours__Web">
                    <img src="Img/Pos.png" alt="">
                    <div class="overlay"></div>
                    <div
                        class="project__info flex w-full flex-column justify-content-center align-items-center text-center">
                        <h2>Sistema Pos</h2>
                        <p>Sistema Pos , ventas inventarios reportes y control                     </p>
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </div>
                </div>
                <div class="project__card gym">
                    <img src="Img/Sale_ya.png" alt="">
                    <div class="overlay"></div>
                    <div
                        class="project__info flex w-full flex-column justify-content-center align-items-center text-center">
                        <h2>Inmobiliaria</h2>
                        <p>Sofware diseñado para todas las personas o/u inmobiliarias que tienen un inmueble a a venta en venta o arriendo , con SaleYa podras subir ese inmueble para que otra persona que esta interesada en comprar te pueda contactar de una forma facil y segura
                        </p>
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </div>
                </div>
                <div class="project__card world__Tours">
                    <img src="Img/WebAPI.png" alt="">
                    <div class="overlay"></div>
                    <div
                        class="project__info flex w-full flex-column justify-content-center align-items-center text-center">
                        <h2>Web Api</h2>
                        <p>Web api , consumo api rest
                        </p>
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </div>
                </div>
                <div class="project__card tours__Web">
                    <img src="Img/drogueria.png" alt="">
                    <div class="overlay"></div>
                    <div
                        class="project__info flex w-full flex-column justify-content-center align-items-center text-center">
                        <h2>Drogueria Super</h2>
                        <p>Sistema Ecomerce droguertia super
                        </p>
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--FOOTER -->
    <footer id="contact" class="min-h-full w-full flex grid col-12 justify-content-center pb-8 pt-8 lg:text-center">
        <div class="social__media col-12 md:col-4 flex flex-column justify-content-between">
            <h3>Redes sociales</h3>
            <p>Auténtico e innovador</p>
            <p>Desarrollo lo que necesitas, con un enfoque en usabilidad y rendimiento</p>
            <div class="social__mediaIcons mt-5 flex lg:justify-content-center gap-3">
                <a href="https://www.facebook.com" target="_blank" aria-label="Ir a facebook">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" aria-label="Ir a instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" aria-label="Ir a linkedin">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
        </div>
        <div class="contact col-12 sm:col-6 sm:pt-0 md:pt-2 md:col-4 flex flex-column justify-content-between md:align-items-center">
            <h3>Contacto</h3>
            <div class="phone__number flex align-items-center gap-2">
                <i class="fa-solid fa-phone"></i>
                <p>+57 3219317000</p>
            </div>
            <div class="email flex align-items-center gap-2">
                <i class="fa-solid fa-envelope"></i>
                <p>alejandro.valderrama@email.com</p>
            </div>
            <a href=Contacto.php
                class="cursor-pointer text-center col-4 sm:col-6 xl:col-4 mt-3 no-underline border-round-lg">
                <span>
                    <i class="fa-solid fa-message"></i>
                </span>Escríbeme
            </a>
        </div>
        <div class="my__services col-12 sm:col-6 sm:p-0 md:col-4 md:pt-2 md:align-items-center flex flex-column justify-content-between">
            <h3>Mis Servicios</h3>
            <p>Desarrollo web</p>
            <p>Desarrollo móvil</p>
            <p>Diseñador UI /UX</p>
            
        </div>
    </footer>
</div>

</body>
<script>
const filterContainer = document.querySelector(".gallery__categories");
const galleryItems = document.querySelectorAll(".project__card");

filterContainer.addEventListener("click", (event) => {
    if (event.target.classList.contains("filter-item")) {
        filterContainer.querySelector(".active").classList.remove("active");
        event.target.classList.add("active")
        const filterValue = event.target.getAttribute("data-filter")
        galleryItems.forEach(item => {
            if (item.classList.contains(filterValue) || filterValue === "all") {
                item.classList.remove("hide")
                item.classList.add("show")
            } else {
                item.classList.remove("show")
                item.classList.add("hide")
            }
        })
    }
})

function scrollToSection(sectionId){
    document.getElementById(sectionId).scrollIntoView({behavior:"smooth"})
}
</script>

</html>