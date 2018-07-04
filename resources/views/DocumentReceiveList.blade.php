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
                        <h3 class="box-title">Daftar Penerimaan Dokumen</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="box box-success box-solid">
                            <!-- /.box-header -->
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0" id="t_item">
                                    <thead id="th_item">
                                        <th>Tanggal Terima</th>
                                        <th>No Surat.</th>
                                        <th>Nama Client</th>
                                        
                                        <th class="text-center">Penerima I</th>
                                        <th class="text-center">Penerima II</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </thead>
                                    <tbody id="tb_item">
                                        <?php 
                                            foreach($document_receive as $doc){
                                                echo "<tr>";
                                                echo "<td>".$doc['created_at']."</td>"; 
                                                echo "<td>".$doc['letter_number']."</td>"; 
                                                echo "<td>".$doc['client']."</td>"; 
                                                echo "<td>".$doc['receiver1']."</td>"; 
                                                echo "<td>".$doc['receiver2']."</td>"; 
                                                echo "<td>".$doc['review_status']."</td>";
                                                echo "<td>".$doc['note']."</td>"; 
                                                echo "</tr>";
                                            };
                                        ?>
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
