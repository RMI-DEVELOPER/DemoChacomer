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
            $(function () {
                $("#tabs").tabs();
            });
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
                        <div style="margin-left: 10px;margin-right: 10px;margin-top: 30px;" id="tabs">
                            <ul class="nav nav-tabs">
                                <li><a href="#tabs-1">Ficha Técnica</a></li>
                                <li><a href="#tabs-2">Manuales</a></li>
                                <li><a href="#tabs-3">Catalogo</a></li>
                                <li><a href="#tabs-4">Curvas</a></li>
                            </ul>
                            <div id="tabs-1">
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
                            <div id="tabs-2">
                                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
                            </div>
                            <div id="tabs-3">
                                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                            </div>
                            <div id="tabs-4">
                                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
