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
    </head>
    <body>
        <div class="container-fluid">
            <div style="margin-top: 5px;" class="panel panel-default">
                <div class="panel-body">
                    <form class="form-inline">
                        <div class="form-group">
                            <label>Empresa:</label>
                            <select class="form-control">
                                <option>Seleccione una Empresa</option>
                                <option>Chacomer</option>
                                <option>Comagro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>División:</label>
                            <select class="form-control">
                                <option>Seleccione una División</option>
                                <option>Motos</option>
                                <option>Bicicletas</option>
                                <option>Bosque y Jardín</option>
                                <option>EQ. Gimnasia</option>
                                <option>Autoaccesorios</option>
                                <option>Autorepuestos</option>
                                <option>Rep. Bicis</option>
                                <option>Rep. y Acc. Motos</option>
                                <option>Lubricantes</option>
                                <option>Motos</option>
                            </select>
                        </div>
                        <div class="form-group">
                               <label>Nombre del Producto:</label>
                            <input type="text" class="form-control" placeholder="Producto">
                        </div>
                        <button type="submit" class="btn btn-default">Filtrar</button>
                    </form>
                </div>
                <div style="margin: 5px;" class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <th>
                                   Opción 
                                </th>
                                <th>
                                    Nombre del Producto
                                </th>
                                <th>
                                    Categoria
                                </th>
                                <th>
                                    Proveedor
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <a href="Producto.php">Ver</a>
                                </td>
                                <td>
                                    Llantas de Aluminio Aro 17
                                </td>
                                <td>
                                    Autoaccesorio
                                </td>
                                <td>
                                    WF Maschinenbau
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Ver</a>
                                </td>
                                <td>
                                    Llantas de Aluminio Aro 16
                                </td>
                                <td>
                                     Autoaccesorio
                                </td>
                                <td>
                                    GERALD WIMMER
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">Ver</a>
                                </td>
                                <td>
                                    Llantas de Aluminio Aro 15
                                </td>
                                <td>
                                     Autoaccesorio
                                </td>
                                <td>
                                    REIFEN STRAUB GMBH
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
