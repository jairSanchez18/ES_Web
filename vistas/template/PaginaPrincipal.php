<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina princial</title>
    <link rel="stylesheet" href="dev_frtv.css">
</head>
<body>
    <header>
        <a class="header-posicion" href="#">
            <img class="logoutp" src="imagesPP\logo_utp.jpg" alt="Logo utp">
            <h1>Asistencia UTP</h1>
        </a>

        <a class="header-posicion" href="#">
            <img class="icono-user" src="imagesPP\icon-user.png" alt="icono de usuario">
            <p class="nombre-prof">Nombre profesor</p>
        </a>
    </header>

    <div class="contenido contenedor">
        
        <!-- NAVEGACIÓN -->
        <nav class="navegacion contenedor">
            <div class="opcion">
                <a class="opc-menu" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="35" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="12" cy="7" r="4" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                      </svg>
                      <p>Perfil</p>
                </a>
            </div>
    
            <div class="opcion">
                <a class="opc-menu" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notes" width="35" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <rect x="5" y="3" width="14" height="18" rx="2" />
                        <line x1="9" y1="7" x2="15" y2="7" />
                        <line x1="9" y1="11" x2="15" y2="11" />
                        <line x1="9" y1="15" x2="13" y2="15" />
                    </svg>
                    <p>Lista de asistencia</p>
                </a>
            </div>
    
            <div class="opcion">
                <a class="opc-menu" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-time" width="35" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
                        <circle cx="18" cy="18" r="4" />
                        <path d="M15 3v4" />
                        <path d="M7 3v4" />
                        <path d="M3 11h16" />
                        <path d="M18 16.496v1.504l1 1" />
                    </svg>
                    <p>Horario de clases</p>
                </a>
            </div>
    
            <div class="opcion">
                <a class="opc-menu" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-list" width="35" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                        <rect x="9" y="3" width="6" height="4" rx="2" />
                        <line x1="9" y1="12" x2="9.01" y2="12" />
                        <line x1="13" y1="12" x2="15" y2="12" />
                        <line x1="9" y1="16" x2="9.01" y2="16" />
                        <line x1="13" y1="16" x2="15" y2="16" />
                    </svg>
                    <p>Listado de estudiantes</p>
                </a>
            </div>
    
            <div class="opcion">
                <a class="opc-menu" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-smart-home" width="35" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M19 8.71l-5.333 -4.148a2.666 2.666 0 0 0 -3.274 0l-5.334 4.148a2.665 2.665 0 0 0 -1.029 2.105v7.2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-7.2c0 -.823 -.38 -1.6 -1.03 -2.105" />
                        <path d="M16 15c-2.21 1.333 -5.792 1.333 -8 0" />
                    </svg>
                    <p>Solicitudes</p>
                </a>
            </div>
    
            <div class="opcion">
                <a class="opc-menu" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-power" width="35" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 6a7.75 7.75 0 1 0 10 0" />
                        <line x1="12" y1="4" x2="12" y2="12" />
                    </svg>
                    <p>Salir</p>
                </a>
            </div>
        </nav>
    
        <main class="contenido-main">
            <img class="img-main" src="imagesPP\imgUTP.jpg" alt="Campus UTP">
            <h2 class="titulo-main">Bienvenido Nombre del profesor</h2>
        </main>
    </div> <!-- FIN DE LA CLASE contenido -->

    <!-- FOOTER -->
    <footer class="footer">
        <img class="footer__logos" src="imagesPP\logoES.PNG" alt="Logo empresa">
        <p class="footer__parrafo">&copy; 2022 - UTP</p>
        <img class="footer__logos" src="imagesPP\logo_fisc.png" alt="Logo fisc">
    </footer>
</body>
</html>