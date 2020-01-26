<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Project</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/tambah_project',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Nama Project</th>   <td><input type='text' class='form-control' name='a'></td></tr>
                    <tr><th scope='row'>Tanggal Mulai Project</th><td><input type='date' class='form-control' name='b'></td></tr>
                    <tr><th scope='row'>Tanggal Selesai Project</th><td><input type='date' class='form-control' name='c'></td></tr>
                    <tr><th scope='row'>Description</th><td><textarea id='editor1' class='form-control' name='d'></textarea></td></tr>
                    <tr><th scope='row'>Description English</th><td><textarea id='editor2' class='form-control' name='e'></textarea></td></tr>
                    <tr><th scope='row'>Kategori</th>
                          <td><select name='f' class='form-control' required>
                              <option value='' selected>- Pilih Kategori -</option>
                              <option value='1'>Selesai</option>
                              <option value='0'>On Progress</option>
                         </td></tr>
                         <tr><th scope='row'>File</th><td><input type='file' class='form-control' name='g'></td></tr>
                         <tr><th width='120px' scope='row'>URL File</th>   <td><input type='text' class='form-control' name='h'></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/project'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();
