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
                            <label>Reporte:</label>
                            <select class="form-control">
                                <option>Seleccione un Reporte</option>
                                <option>Ultima Fecha Modificacion</option>
                                <option>Productos Actualizados en el Mes</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-default">Visualizar</button>  <button type="submit" class="btn btn-default">Descargar</button>
                    </form>
                </div>
                <div style="margin: 5px;" class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <th>
                                    Fecha de Modificacion
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
                                    12/Ene/2017
                                </td>
                                <td>
                                    Llantas de Aluminio Aro 17
                                </td>
                                <td>
                                    Autoaccesorio
                                </td>
                                <td>
                                    REIFEN STRAUB GMBH
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    17/Mar/2017
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
                                    22/Abr/2017
                                </td>
                                <td>
                                    Llantas de Aluminio Aro 15
                                </td>
                                <td>
                                    Autoaccesorio
                                </td>
                                <td>
                                    WF Maschinenbau
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>