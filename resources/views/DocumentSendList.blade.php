@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">

				<div class="box box-success box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Daftar Pengajuan Dokumen</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0" id="t_item">
                                <thead id="th_item">
                                    <th>No Surat.</th>
                                    <th>Nama Client</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </thead>
                                <tbody id="tb_item">

                                </tbody>  
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
			</div>
		</div>
	</div>
@endsection
