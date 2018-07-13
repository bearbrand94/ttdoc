

@extends('adminlte::page')


@section('htmlheader_title')
	Change Title here!
@endsection

@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Daftar Penerimaan Dokumen</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!-- /.box-header -->
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0" id="t_doc_receive">
                                <thead id="th_item">
                                    <th>Tanggal Terima</th>
                                    <th>No Surat.</th>
                                    <th>Nama Client</th>
                                    <th class="text-center">Penerima I</th>
                                    <th class="text-center">Penerima II</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Notes</th>
                                    <th class="text-center">Action</th>
                                </thead>
                                <tbody id="tb_item">
                                </tbody>  
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="button" class="btn btn-primary pull-right btn-flat">Terima Dokumen Baru</button>
                    </div>
                    <!-- /.box-footer -->
                </div>
			</div>
		</div>
	</div>
@endsection

@section('user-scripts')
<script type="text/javascript">
    $(document).ready(function() {
        var oTable = $('#t_doc_receive').DataTable({
            processing: false,
            serverSide: false,
            ajax: '{!! route('document_receive.data') !!}',
            columns: [
                { data: 'created_at', name: 'created_at' },
                { data: 'letter_number', name: 'letter_number' },
                { data: 'client_name', name: 'client_name' },
                { data: 'r1_name', name: 'r1_name' },
                { data: 'r2_name', name: 'r2_name' },
                { data: 'review_status', name: 'review_status' },
                { data: 'note', name: 'note' },
                { data: 'id', name: 'id' }
            ],
            "columnDefs": [ 
                {
                    // The `data` parameter refers to the data for the cell (defined by the
                    // `data` option, which defaults to the column being worked with, in
                    // this case `data: 0`.
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
                        button_code += '    <li><a href="<?php echo url('/document/receive/detail'); ?>">Detail_' + data + '</a></li>';
                        button_code += '    <li><a href="<?php echo url('/document/receive/update'); ?>">Update_' + data + '</a></li>';
                        button_code += '    <li><a href="<?php echo url('/document/receive/delete'); ?>">Delete_' + data + '</a></li>';
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
