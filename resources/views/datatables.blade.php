<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel DataTables Tutorial</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/datatables.bootstrap.css')}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            body {
                padding-top: 40px;
            }
        </style>
        
    </head>
    <body>

    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    

        <!-- jQuery -->
        <script  type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <!-- DataTables -->
        <script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <!-- Bootstrap JavaScript -->
    <!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
        <!-- App scripts -->
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('datatables.data') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
            </body>
</html>