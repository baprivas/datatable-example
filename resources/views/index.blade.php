<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clase de rimorsoft con DataTable</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css"> 
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        

       
    </head>
    <body>
       <div class="container">
        <table id="users" class="table">
            <thead>
                <tr>
                    <th width="10px">ID</th>
                    <th>Nombre</th>
                    <th width="120px">Email</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
        </table>
       </div>
    </body>
    



<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.print.min.js"></script>
<script>
    $(document).ready(function() {
    $('#users').DataTable({
        'serverSide': true,
        dom: 'Bfrtip',
        'ajax': '{{ url("api/users") }}',
        'columns': [
            {data: 'id'},
            {data: 'name'},
            {data: 'email'},
            {data: 'btn'},
        ],
        buttons: [
        'excel'
        ],
        language: {
            'url' : '//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
            }
    });
} );
</script>
</html>
