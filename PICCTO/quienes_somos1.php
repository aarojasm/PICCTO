<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Quiénes Somos</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
        <meta name="description" content="Página de integrantes de la empresa"/>
        <script src="../librerias/jquery/jquery-1.10.1.js" type="text/javascript"></script>

        <style>
            #parrafo{
                font-family: Calibri;
                font-size: 20px;
                width: 950px;
                margin: 0 auto;
                text-align: justify;
                padding-top: 20px;
            }
            #parrafo1{
                font-family: Calibri;
                font-size: 25px;
                margin-left: 35px;
            }
            #listadoValores{
                font-family: Calibri;
                font-size: 20px;   
                width: 950px;
            }
            #listadoValores li{
                margin-left: 40px;   
                padding-top: 15px;
                text-align: justify;
            }
        </style>
    </head>
    <body>              
        <?php 
            include '../librerias/include/encabezado.html';
            include '../librerias/include/menu1.html'; 
            include '../librerias/include/menu2.html';
        ?>
        <div class="page">
            <div class="page-wrap">
                    <p id="parrafo">Somos un grupo de profesionales comprometidos con nuestra sociedad y entorno, que busca 
                        mediante la aplicación de las ciencias exactas y las ciencias sociales contribuir a mejorar los 
                        procesos relacionados al área educativa como a nivel organizacional.
                    </p>
                    <p id="parrafo1">
                        Nuestros Valores:
                    </p>
                    <ul id="listadoValores">
                        <li>Creemos en el establecimiento de relaciones que sean constructivas y claras, en 
                            nuestros equipos y con nuestros clientes.</li>
                        <li>Valoramos la capacidad de cada persona, estimulando el crecimiento personal, la 
                            creatividad y nuestros valores como institución.</li>
                        <li>Mediante el  profesionalismo nos esforzamos por hacer las cosas bien desde el 
                            inicio de cada actividad que emprendemos.</li>
                        <li>Somos tolerantes ante diferentes visiones y enfoques en nuestras labores y 
                            posturas, propendiendo a la calidad y excelencia en cada una de ellas. </li>
                        <li>Nuestro compromiso con cada uno de nuestros clientes consiste en entregar 
                            las mejores soluciones y el mayor valor en cada aspecto de nuestro trabajo.</li>
                    </ul>
            </div>
            <div style="visibility: hidden"></div>
        </div>
        <?php include '../librerias/include/footer.html'; ?>
    </body>
</html>