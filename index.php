<!-- PAGINA PRINCIPAL PARA EL FORMULARIO DE PARAMEDICO -->
<!-- UNICAMENTE REGISTRA SU NOMBRE Y FECHA DE NACIMIENTO PARA BUSCARLO EN LA BD -->
<?php
    include('header.php');
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<div class='py-4'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Datos URGENCIAS</h4>
                        </div>
                        <div class="card-body">
                            <section id="urgencias">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header text-white pt-3 mb-3"style="background:#9e1919">
                                                <h3>Ambulancia N.32</h3>
                                        </div>
                                        <div class="card-body"> 
                                            
                                            <p class="card-text"><h6>TRANSCRIPCION DE AUDIO DEL PARAMEDICO </h6></p>
                                            
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header text-white  pt-3 mb-3" style="background:Orange">
                                                <h3>Ambulancia N.09</h3>
                                        </div>
                                        <div class="card-body">
                                            
                                            <p class="card-text"><h6>TRANSCRIPCION DE AUDIO DEL PARAMEDICO </h6></p>
                                            
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header text-white pt-3 mb-3"style="background:#ffee00">
                                                <h3>Ambulancia N.06</h3>
                                        </div>
                                        <div class="card-body">
                                           
                                            <p class="card-text"><h6>TRANSCRIPCION DE AUDIO DEL PARAMEDICO </h6></p>
                                            <a href="#" class="btn btn-primary">Expediente</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header text-white pt-3 mb-3"style="background:Green">
                                                <h3>Ambulancia N.10</h3>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><h6>TRANSCRIPCION DE AUDIO DEL PARAMEDICO </h6></p>
                                            <a href="#" class="btn btn-primary">Expediente</a>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header text-white pt-3 mb-3"style="background:#0157b9">
                                                <h3>Ambulancia N.13</h3>
                                        </div>
                                        <div class="card-body">
                                           
                                            <p class="card-text"><h6>TRANSCRIPCION DE AUDIO DEL PARAMEDICO </h6></p>
                                            <a href="#" class="btn btn-primary">Expediente</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    
    include('footer.php');
?>