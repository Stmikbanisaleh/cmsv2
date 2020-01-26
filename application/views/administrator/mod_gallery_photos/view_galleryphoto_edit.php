<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Photo</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_galleryphoto',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                  <input type='hidden' name='id' value='$rows[id_photo]'>
                    <tr><th width='120px' scope='row'>Judul</th>   <td><input type='text' class='form-control' name='a' value='$rows[judul]'></td></tr>
                        <tr><th scope='row'>Kategori</th>               <td><select name='d' class='form-control' required>";
                                                                            foreach ($record as $row){
                                                                                if ($rows['id_album'] == $row['id_album']){
                                                                                  echo "<option value='$row[id_album]' selected>$row[jdl_album]</option>";
                                                                                }else{
                                                                                  echo "<option value='$row[id_album]'>$row[jdl_album]</option>";
                                                                                }
                                                                            }
                    echo "</td></tr>
                    <input type='hidden' class='form-control' name='b' value='$rows[keterangan]'>
                    <tr><th scope='row'>Image</th>                    <td><input type='file' class='form-control' name='c'></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/photo'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();