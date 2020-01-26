<div class="col-xs-12">  
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Our Client</h3>
            <a class='pull-right btn btn-primary btn-sm' href='<?php echo base_url() . $this->uri->segment(1); ?>/tambah_client'>Tambahkan Data</a>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style='width:20px'>No</th>
                        <th width='60px'>Title</th>
                        <th style='align:middle'>Link</th>
                        <th width='20px'>Image</th>
                        <th>Created at</th>
                        <th>Created With</th>
                        <th style='width:70px'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($record as $row) {
                        echo "<tr><td>$no</td>
                            <td style='align:middle'>$row[title]</td>
                            <td>$row[url_client]</td>
                            <td><img src='" . base_url() . "asset/front/img/clients/$row[img]' width='50'></td>
                            <td>$row[created_at]</td>
                            <td>$row[username]</td>
                              <td><center>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='" . base_url() . $this->uri->segment(1) . "/edit_client/$row[id_client]'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='" . base_url() . $this->uri->segment(1) . "/delete_client/$row[id_client]' onclick=\"return confirm('Apa anda yakin untuk hapus Data ini?')\"><span class='glyphicon glyphicon-remove'></span></a>
                              </center></td>
                          </tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>