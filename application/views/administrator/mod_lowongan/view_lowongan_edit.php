<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Lowongan</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_lowongan',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_lowongan]'>
                    <tr><th width='120px' scope='row'>Kode Lowongan</th>   <td><input type='text' class='form-control' name='a' value='$rows[kode_lowongan]'></td></tr>
                    <tr><th width='120px' scope='row'>Posisi</th>   <td><input type='text' class='form-control' name='b' value='$rows[posisi]'></td></tr>
                    <tr><th width='120px' scope='row'>Kriteria</th>   <td><input type='text' class='form-control' name='c' value='$rows[kriteria]'></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/lowongan'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();