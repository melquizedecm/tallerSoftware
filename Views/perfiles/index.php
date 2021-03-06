<?php
require_once '../../lib/links.php';
libnivel3();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php getMeta("Perfiles"); ?>
        
        <!-- Bootstrap core CSS -->
        <link href="../../lib/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../../lib/css/round-about.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Perfiles</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--  para Data Tables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- no olviden que esta libreria va al final-->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


        <style type="text/css">
            body {
                color: #404E67;
                background: #F5F7FA;
                font-family: 'Open Sans', sans-serif;
            }
            .table-wrapper {
                width: 700px;
                margin: 30px auto;
                background: #fff;
                padding: 20px;	
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }
            .table-title {
                padding-bottom: 10px;
                margin: 0 0 10px;
            }
            .table-title h2 {
                margin: 6px 0 0;
                font-size: 22px;
            }
            .table-title .add-new {
                float: right;
                height: 30px;
                font-weight: bold;
                font-size: 12px;
                text-shadow: none;
                min-width: 100px;
                border-radius: 50px;
                line-height: 13px;
            }
            .table-title .add-new i {
                margin-right: 4px;
            }
            table.table {
                table-layout: fixed;
            }
            table.table tr th, table.table tr td {
                border-color: #e9e9e9;
            }
            table.table th i {
                font-size: 13px;
                margin: 0 5px;
                cursor: pointer;
            }
            table.table th:last-child {
                width: 100px;
            }
            table.table td a {
                cursor: pointer;
                display: inline-block;
                margin: 0 5px;
                min-width: 24px;
            }    
            table.table td a.add {
                color: #27C46B;
            }
            table.table td a.edit {
                color: #FFC107;
            }
            table.table td a.delete {
                color: #E34724;
            }
            table.table td i {
                font-size: 19px;
            }
            table.table td a.add i {
                font-size: 24px;
                margin-right: -1px;
                position: relative;
                top: 3px;
            }    
            table.table .form-control {
                height: 32px;
                line-height: 32px;
                box-shadow: none;
                border-radius: 2px;
            }
            table.table .form-control.error {
                border-color: #f50000;
            }
            table.table td .add {
                display: none;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function () {
                /* DATA TABLE */
                $('#tablaPerfiles').DataTable();



                $('[data-toggle="tooltip"]').tooltip();
                var actions = $("table td:last-child").html();


                // Append table with add row form on add new button click
                $(".add-new").click(function () {
                    $(this).attr("disabled", "disabled");
                    var index = $("table tbody tr:last-child").index();
                    var row = '<tr>' +
                            '<td><input type="text" class="form-control" name="inputId" id="inputId"></td>' +
                            '<td><input type="text" class="form-control" name="inputNombre" id="inputNombre"></td>' +
                            '<td><input type="text" class="form-control" name="inputGestion" id="inputGestion"></td>' +
                            '<td><input type="text" class="form-control" name="inputVenta" id="inputVenta"></td>' +
                            '<td><input type="text" class="form-control" name="inputPerfiles" id="inputPerfiles"></td>' +
                            '<td>' + actions + '</td>' +
                            '</tr>';
                    $("table").prepend(row);
                    $("table tbody tr").eq(0).find(".add, .edit").toggle();
                    $('[data-toggle="tooltip"]').tooltip();
                });


                // Add row on add button click
                $(document).on("click", ".add", function () {
                    var id = document.getElementById("inputId").value;
                    var nombre = document.getElementById("inputNombre").value;

                    alert(id + nombre);

                    $.post("../../Controllers/perfilesController.php",
                            {
                                inputId: Id,
                                inputNombre: Nombre,
                                inputUsuarios: Usuarios,
                                inputVender: Vender,
                                inputPerfiles: Perfiles,
                                buttonCreate: true,
                                buttonEdit: true,
                                buttonDelete: true


                            },
                            function (data) {
                                if (data) {
                                    alert(data);
                                } else {
                                    alert("no tengo datos");
                                }
                            });




                    /*var empty = false;
                     var input = $(this).parents("tr").find('input[type="text"]');
                     input.each(function () {
                     if (!$(this).val()) {
                     $(this).addClass("error");
                     empty = true;
                     } else {
                     $(this).removeClass("error");
                     }
                     });*/
                    $(this).parents("tr").find(".error").first().focus();
                    if (!empty) {
                        input.each(function () {
                            $(this).parent("td").html($(this).val());
                        });
                        $(this).parents("tr").find(".add, .edit").toggle();
                        $(".add-new").removeAttr("disabled");
                    }
                });



                // Edit row on edit button click
                $(document).on("click", ".edit", function () {
                    $(this).parents("tr").find("td:not(:last-child)").each(function () {
                        $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
                    });
                    $(this).parents("tr").find(".add, .edit").toggle();
                    $(".add-new").attr("disabled", "disabled");
                });
                // Delete row on delete button click
                $(document).on("click", ".delete", function () {
                    $(this).parents("tr").remove();
                    $(".add-new").removeAttr("disabled");
                });
            });
        </script>
    </head>
    <body>
        <div>
            <?php getHeader("Perfiles") ?>
        </div>
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Perfiles</h2></div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered" id="tablaPerfiles">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Gestion de Usuarios</th>
                            <th>Permiso de Venta</th>
                            <th>Gestion de Perfiles</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nombre1</td>
                            <td>Si</td>
                            <td>Si</td>
                            <td>Si</td>
                            <td>
                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Nombre2</td>
                            <td>Si</td>
                            <td>Si</td>
                            <td>Si</td>
                            <td>
                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Nombre3</td>
                            <td>Si</td>
                            <td>Si</td>
                            <td>Si</td>
                            <td>
                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>     
    </body>
</html> 
