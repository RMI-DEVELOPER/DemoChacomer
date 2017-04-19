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
                                <a href="#fichaTecnica" id="ficha-tab" role="tab" data-toggle="tab" aria-controls="ficha" aria-expanded="true">Ficha Técnica</a>
                            </li> 
                            <li role="presentation">
                                <a href="#manuales" role="tab" id="manuales-tab" data-toggle="tab" aria-controls="manuales">Manuales</a>
                            </li> 
                            <li role="presentation">
                                <a href="#catalogo" role="tab" id="catalogo-tab" data-toggle="tab" aria-controls="catalogo">Catalogo</a>
                            </li> 
                            <li role="presentation">
                                <a href="#curvas" role="tab" id="curvas-tab" data-toggle="tab" aria-controls="curvas">Curvas</a>
                            </li>  
                        </ul> 

                        <div style="margin: 20px;" class="tab-content" id="myTabContent"> 
                            <div class="tab-pane fade in active" role="tabpanel" id="fichaTecnica" aria-labelledby="ficha-tab"> 
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
                            <div class="tab-pane fade" role="tabpanel" id="manuales" aria-labelledby="manuales-tab"> 
                                <p>Food r butcher vero sint qui sapiente accusamus tattooed echo park.</p> 
                            </div> 
                            <div class="tab-pane fade" role="tabpanel" id="catalogo" aria-labelledby="catalogo-tab"> 
                                <p>Food r butcher vero sint qui sapiente accusamus tattooed echo park.</p> 
                            </div> 
                            <div class="tab-pane fade" role="tabpanel" id="curvas" aria-labelledby="curvas-tab"> 
                                <p>Food r butcher vero sint qui sapiente accusamus tattooed echo park.</p> 
                            </div> 
                        </div> 
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
