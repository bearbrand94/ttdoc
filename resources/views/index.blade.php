<!DOCTYPE html>
<html>
<head>
    <h1>Hello</h1>
    <link rel="stylesheet" type="text/css" href="{{url('css/datatables.bootstrap.css')}}">
    <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery.dataTables.min.js')}}"></script>
</head>
<body>
    <h3>Section Table</h3>
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Tanggal Terima</th>
                <th>No Surat.</th>
                <th>Nama Client</th>
                <th class="text-center">Penerima I</th>
                <th class="text-center">Penerima II</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
    </table>
</body>
</html>

<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{ url("data-cust") }}'
        },
        columns: [
            { data: 'created_at', name: 'created_at' },
            { data: 'letter_number', name: 'letter_number' },
            { data: 'client', name: 'client' },
            { data: 'receiver1', name: 'receiver1' },
            { data: 'receiver2', name: 'receiver2' },
            { data: 'review_status', name: 'review_status' },
            { data: 'note', name: 'note' }
        ]
    });
});
</script>