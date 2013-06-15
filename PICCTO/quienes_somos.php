<?php

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Quiénes Somos</title>
        <link type="text/css" rel="stylesheet" href="/librerias/css/Style.css"/>
        <meta name="description" content="Página de integrantes de la empresa"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
        <style>
            .page-wrap{
                height: 700px;
            }
        </style>
    </head>
    <body>              
        <?php include '../librerias/include/encabezado.html';
            include '../librerias/include/menu1.html'; 
            include '../librerias/include/menu2.html';?>
        <div class="page">
            <div class="page-wrap">
                <div id="padre1">
                    <div id="hijo1">
                        <div id="hijo11">
                        <img class="retrato" alt="retrato" src="../librerias/img/retrato/aida.png" />
                        <p style="text-align:center;" class="nombre">Aida Torres Piccardo</p>
                        <p style="text-align:center;" class="cargo">Profesora Educación Básica<br/>Universidad</p>
                        </div>
                        <div style="visibility: hidden;"></div>
                    </div>
                    <div id="hijo2">
                        <div id="hijo11">
                        <img class="retrato" alt="retrato" src="../librerias/img/retrato/aida.png" />
                        <p style="text-align:center;" class="nombre">Egla Rojas Torres</p>
                        <p style="text-align:center;" class="cargo">Ingeniera Civil Industrial<br/>Universidad</p>
                        </div>
                    <div style="visibility: hidden;"></div>
                    </div>
                    <div id="hijo3">
                        <div id="hijo11">
                        <img class="retrato" alt="retrato" src="../librerias/img/retrato/aida.png" />
                        <p style="text-align:center;" class="nombre">Genoveva Candia Mardones</p>
                        <p style="text-align:center;" class="cargo">Asistente Social<br/>Universidad</p>
                        </div>
                    <div style="visibility: hidden;"></div>
                    </div>
                    <div style="visibility: hidden;"></div>
                </div>
                <div id="padre2">
                    <div id="hijo4">
                        <img class="retrato" alt="retrato" src="../librerias/img/retrato/aida.png" />
                        <p style="text-align:center;" class="nombre">Nicole Sotomayor</p>
                        <p style="text-align:center;" class="cargo">Profesora Educación Básica<br/>Universidad</p>
                    </div>
                    <div id="hijo5">
                        <img class="retrato" alt="retrato" src="../librerias/img/retrato/aida.png" />
                        <p style="text-align:center;" class="nombre">Alicia Mancilla Rubio</p>
                        <p style="text-align:center;" class="cargo">Profesora General Básica<br/>Universidad</p>
                    </div>
                </div>
                <div id="padre3">
                    <div id="hijo6">
                        <img class="retrato" alt="retrato" src="../librerias/img/retrato/aida.png" />
                        <p style="text-align:center;" class="nombre">Alejandra Valencia</p>
                        <p style="text-align:center;" class="cargo">Profesora Educación Básica<br/>Universidad</p>
                    </div>
                    <div id="hijo7">
                        <img class="retrato" alt="retrato" src="../librerias/img/retrato/aida.png" />
                        <p style="text-align:center;" class="nombre">Lucila Avilés Herrera</p>
                        <p style="text-align:center;" class="cargo">Profesora General Básica<br/>Universidad</p>
                    </div>
                </div> 
                <div style="visibility: hidden"></div>
            </div>
            <div style="visibility: hidden"></div>
        </div>
        <?php include '../librerias/include/footer.html'; ?>
    </body>
</html>
