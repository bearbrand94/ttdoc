@extends('adminlte::page')

@section('htmlheader_title')
	Document Send
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Daftar Pengajuan Kirim Dokumen</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0" id="t_doc_send">
                                <thead id="th_item">
                                    <th>Tanggal Pengajuan</th>
                                    <th>No Surat.</th>
                                    <th>Diajukan Oleh</th>
                                    <th>Diajukan Kpd</th>
                                    <th>Diserahkan Client</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Note</th>
                                    <th class="text-center">Action</th>
                                </thead>
                                <tbody id="tb_item">
                                </tbody> 
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    
                    <div class="box-footer">
                        <button type="button" class="btn btn-primary pull-right btn-flat">Buat Pengajuan Baru</button>
                    </div>
                    <!-- /.box-footer -->
                </div>
			</div>
		</div>
	</div>


<link rel="stylesheet" type="text/css" href="{{url('css/datatables.bootstrap.css')}}">
<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery.dataTables.min.js')}}"></script>

<script>
$(function() {
    var oTable = $('#t_doc_send').dataTable({
        processing: false,
        serverSide: false,
        ajax: '{!! route('document_send.data') !!}',
        columns: [
            { data: 'created_at', name: 'created_at' },
            { data: 'letter_number', name: 'letter_number' },
            { data: 'receptionist_name', name: 'receptionist_name' },
            { data: 'supervisor_name', name: 'supervisor_name' },
            { data: 'client_name', name: 'client_name' },
            { data: 'approval_status', name: 'approval_status' },
            { data: 'note', name: 'note' },
            { data: 'id', name: 'id' }
        ],
        "columnDefs": [
            {
                // The `data` parameter refers to the data for the cell
                "render": function ( data, type, row ) {
                    var span_code;
                    if(data == 0){
                        span_code = "<span class='label label-primary'>" + "Pending";
                    }
                    else if(data == 1){
                        span_code = "<span class='label label-success'>" + "Confirmed";
                    }
                    else if(data == 2){
                        span_code = "<span class='label label-default'>" + "Rejected";
                    }

                    return span_code + "</span>";
                },
                "className": "text-center",
                "targets": 5
            },
            {
                // The `data` parameter refers to the data for the cell
                "render": function ( data, type, row ) {
                    var button_code;
                    button_code = '<div class="btn-group" role="group">';
                    button_code += '<button type="button" class="btn btn-default btn-sm btn-flat dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi <span class="caret"></span></button>';
                    button_code += '<ul class="dropdown-menu dropdown-menu-right">';
                    button_code += '    <li><a href="<?php echo url('/document/send/detail'); ?>">Detail_' + data + '</a></li>';
                    button_code += '    <li><a href="<?php echo url('/document/send/update'); ?>">Update_' + data + '</a></li>';
                    button_code += '    <li><a href="<?php echo url('/document/send/delete'); ?>">Delete_' + data + '</a></li>';
                    button_code += '   </ul>';
                    button_code += '</div>';
                    return button_code;
                },
                "className": "text-center",
                "targets": 7
            }
        ]
    });
});
</script>

@endsection