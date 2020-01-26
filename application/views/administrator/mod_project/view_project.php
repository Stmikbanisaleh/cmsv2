            <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Project</h3>
                  <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url().$this->uri->segment(1); ?>/tambah_project'>Tambahkan Data</a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style='width:20px'>No</th>
                        <th>File</th>
                        <th width='60px'>Nama Project</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Status</th>
                        <th style='width:70px'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                    echo "<tr><td>$no</td>";
                    if($row[image]!=''){
                        echo"<td><img src='".base_url()."asset/foto_project/$row[image]' width='50'></td>";
                    }else{
                        echo"<td>Tidak ada gambar</td>";
                    }
                    echo"<td>$row[nm_project]</td>
                        <td>$row[tgl_mulai]</td>
                        <td>$row[tgl_selesai]</td>
                        <td>";
                    if($row[status]==0){
                        echo "Dalam Pengerjaan";
                    } else if($row[status]==1) {
                        echo "Selesai";
                    }
                    echo"</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='".base_url().$this->uri->segment(1)."/edit_project/$row[id_project]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='".base_url().$this->uri->segment(1)."/delete_project/$row[id_project]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>