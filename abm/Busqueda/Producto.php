<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php
        include '../../head.php';
        ?>
        <script>
            function enviar() {
                $(".modal").modal();
            }
        </script>

    </head>
    <body>
        <div class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Enviar Archivo por Correo</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Mensaje</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div class="container-fluid">
            <div style="margin-top: 5px;" class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Producto</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <p><strong>Empresa:</strong> Comagro</p>
                        </div>
                        <div class="col-md-3">
                            <p><strong>Nombre:</strong> Llantas de Aluminio Aro 17</p>
                        </div>
                        <div class="col-md-3">
                            <p><strong>Tipo de Producto:</strong> Autoaccesorio</p>
                        </div>
                        <div class="col-md-3">
                            <p><strong>Fecha de Act.:</strong> 18/04/2017</p>
                        </div>
                        <div class="col-md-3">
                            <p><strong>Codigo:</strong> LLA17A</p>
                        </div>
                        <div class="col-md-3">
                            <p><strong>Cod SAP:</strong> 7632900</p>
                        </div>
                        <div class="col-md-3">
                            <p><strong>Proveedor:</strong> Prollacsa</p>
                        </div>
                        <div class="col-md-3">
                            <p><strong>Procedencia:</strong> Mexico</p>
                        </div>
                    </div>
                    <div class="row">
                        <ul style="margin: 10px;margin-top: 50px;" class="nav nav-tabs" id="myTabs" role="tablist"> 
                            <li role="presentation" class="active">
                                <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a>
                            </li> 
                            <li role="presentation">
                                <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Profile</a>
                            </li> 
                            <li role="presentation" class="dropdown"> 
                                <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                    Dropdown 
                                    <span class="caret">

                                    </span>
                                </a> 
                                <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents"> 
                                    <li>
                                        <a href="#dropdown1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a>
                                    </li> 
                                    <li>
                                        <a href="#dropdown2" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a></li>
                                </ul> 
                            </li> 
                        </ul> 

                        <div style="margin: 20px;" class="tab-content" id="myTabContent"> 
                            <div class="tab-pane fade in active" role="tabpanel" id="home" aria-labelledby="home-tab"> 
                                <label>Documentos:</label>
                                <ul>
                                    <li>
                                        <p> <a href="#">Ficha Tecnica.pdf    </a><button class="btn btn-primary" onclick="enviar();">Enviar</button></p>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <p> <a href="#">Documento.pdf        </a><button class="btn btn-primary" onclick="enviar();">Enviar</button></p>
                                    </li>
                                </ul>
                                <label>Videos:</label>
                                <ul>
                                    <li>
                                        <p> <a href="#">Video1   </a></p>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <p> <a href="#">Video2   </a></p>
                                    </li>
                                </ul>
                            </div> 
                            <div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profile-tab"> 
                                <p>Food r butcher vero sint qui sapiente accusamus tattooed echo park.</p> 
                            </div> 
                            <div class="tab-pane fade" role="tabpanel" id="dropdown1" aria-labelledby="dropdown1-tab">
                                <p>Etsy mixtape wayfarer Pitchfork sustainable tofu synth chambray yr.</p> 
                            </div> <div class="tab-pane fade" role="tabpanel" id="dropdown2" aria-labelledby="dropdown2-tab"> 
                                <p>Trust fund seitan letterper marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p> 
                            </div> 
                        </div> 
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
