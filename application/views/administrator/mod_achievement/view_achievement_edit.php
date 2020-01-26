<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Achievement</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_achievement',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                  <input type='hidden' name='id' value='$rows[id_achievement]'>
                    <tr><th width='120px' scope='row'>Judul</th>   <td><input type='text' class='form-control' name='a' value='$rows[judul]'></td></tr>
                    <tr><th width='120px' scope='row'>Deskripsi</th>   <td><textarea id='editor1' class='form-control' name='b' style='height:260px' required>$rows[deskripsi]</textarea></td></tr>
                        <tr><th width='120px' scope='row'>Deskripsi Inggris</th>   <td><textarea id='editor1' class='form-control' name='bb' style='height:260px' required>$rows[deskripsi_e]</textarea></td></tr>
                    <tr><th scope='row'>Gambar</th>                    <td><input type='file' class='form-control' name='c'>
                                                                        Achievement Aktif Saat ini : <img style='margin-top:10px; width:70px; height:70px' src='".base_url()."asset/front/img/achievement/$rows[image]'></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/achievement'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();