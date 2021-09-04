<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Datatables</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <link href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>

</head>
<body>

<div class="container">
    <h1>ISP Datatables List <br/></h1>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>IP</th>
                <th>ISP</th>
                <th>Status</th>
                <th>Allow Latency</th>
                <th>Avg latency</th>
                <th>sysdt</th>
                {{-- <th width="100px">Action</th> --}}
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

</body>

<script type="text/javascript">
  $(function () {

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,

        paging:   false,
        // ordering: false,
        info:     false,
        // filter:false,

        ajax: "{{ route('remote.show') }}",
        columns: [
            {data: 'ip', name: 'ip'},
            {data: 'isp', name: 'isp'},
            {data: 'status', name: 'status'},
            {data: 'allow_latency', name: 'allow_latency'},
            {data: 'avg_latency', name: 'avg_latency'},
            {data: 'sysdt', name: 'sysdt'},

        ]
    });

    //setInterval(table.ajax.reload(), 5000);

    function f_load(){
        table.ajax.reload();
        console.log('reloaded!!');
    }
    setInterval(f_load,5000);

  });


</script>
</html>

