            <div class="row">
                <div class="col-lg-12">
					<h3 class="page-header"><strong>Data Universitas</strong></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Universitas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Kode</th>
                                            <th class="text-center">Nama Universitas</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$no=1;
	$sql=mysql_query("select * from sekolah");
	while($rs=mysql_fetch_array($sql)){

?>                                        <tr class="odd gradeX">
                                            <td><?php echo"$rs[kode]";  ?></td>
                                            <td ><?php echo"$rs[nama]";  ?></td>
                                            <td ><?php echo"$rs[alamat]";  ?></td>

                                        <td class="text-center"><a href="./././media.php?module=input_sekolah&act=edit_sekolah&id=<?php echo $rs['id'] ?>"><button type="button" class="btn btn-info">Edit</button> <a href="././module/simpan.php?act=hapus_sekolah&id=<?php echo $rs['id'] ?>"><button type="button" class="btn btn-danger">Hapus</button></a></td>

                                        </tr>
<?php
}
?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
