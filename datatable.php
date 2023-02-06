<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatable Example</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--  Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Puesto</th>
                            <th>Tipo</th>
                            <th>Edad</th>
                            <th>Fecha Inicio</th>
                            <th>Salario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Vanessa Rodríguez</td>
                            <td>Back-End Developer</td>
                            <td>Híbrido</td>
                            <td>28</td>
                            <td>2020-01-20</td>
                            <td>1500</td>
                        </tr>
                        <tr>
                            <td>Alberto Garrido</td>
                            <td>Presencial</td>
                            <td>Community Manager</td>
                            <td>36</td>
                            <td>2018-09-15</td>
                            <td>1350</td>
                        </tr>
                        <tr>
                            <td>Miguel Pozo</td>
                            <td>Remoto</td>
                            <td>Front-End Developer</td>
                            <td>34</td>
                            <td>2022-04-06</td>
                            <td>1300</td>
                        </tr>                           
                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table> 
            </div>
        </div>
    </div>

    <!-- jQuery  -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!--  Datatables JS-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>   
    <!-- SUM()  Datatables-->
    <script src="https://cdn.datatables.net/plug-ins/1.10.20/api/sum().js"></script>

    <script>
        $(document).ready(function(){
            var tabla = $("#example").DataTable({                 
                "drawCallback":function(){ 
                    var api = this.api();
                    $(api.column(5).footer()).html(
                        
                        //sumatorio de la página actual
                        //'Total: '+api.column(5, {page:'current'}).data().sum()
                        
                        //sumatorio de todas las páginas
                        'Total: '+api.column(5, {page:'all'}).data().sum()
                    )
                }
            });
        });
    </script>
</body>
</html>
