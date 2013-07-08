<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Asesoría</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
        <meta name="description" content="Página de asesorías realizadas"/>
        <script src="../librerias/jquery/jquery-1.10.1.js" type="text/javascript"></script>
        <style>
            #parrafo{
                font-family: Calibri;
                font-size: 20px;
                max-width: 950px;
                margin: 0 auto;
                text-align: justify;
                padding-top: 20px;
            }
            
            #listadoAsesorias {
                position:relative;
                float: left;
                margin-left: 50px;
            }
            #listadoAsesorias li
            {
                font-family: Calibri;
                font-size: 20px;
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
                <p id="parrafo">Esta Institución tiene como foco principal ser un aporte para las instituciones 
                    educacionales, ejecutando acciones de capacitación docente, gestión y evaluación de Proyectos 
                    Educativos para satisfacer necesidades en los distintos procesos de evaluación diagnóstica integral.
                </p>
                <p id="parrafo">
                    Asesorias en:
                </p>
                
                <ul id="listadoAsesorias">
                    <li>Diagnóstico.</li>
                    <li>Elaboración Políticas Educacionales.</li>
                    <li>Plan de Monitoreo y Evaluación.</li>
                    <li>Programas de Acción Convivencia Escolar</li>
                    <li>Programa Integración Escolar</li>
                    <li>SIMCE Enseñanza Básica</li>
                    <li>Informática Educativa</li>
                </ul>
            </div>
        </div>
        <?php include '../librerias/include/footer.html'; ?>
    </body>
</html>