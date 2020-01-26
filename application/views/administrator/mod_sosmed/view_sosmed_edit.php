<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Social Media</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_sosmed',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_sosmed]'>
                        <tr><th width='120px' scope='row'>Title</th>   <td><input type='text' class='form-control' name='aa' value='$rows[title]'></td></tr>
                    <tr><th width='120px' scope='row'>Link </th><td><input type='text' class='form-control' name='a' value='$rows[link]'></td></tr>
                    <tr><th scope='row'>File</th><td><input type='file' class='form-control' name='b'><hr style='margin:5px'>
                    <tr><th scope='row'>Kategori</th>               <td><select name='c' class='form-control' required>";
                                                                    if($rows[status]==1){
                                                                        echo "<option value='1' selected>Published</option>";
                                                                        echo "<option value='0'>Unpublished</option>";
                                                                    } else {
                                                                        echo "<option value='0' selected>Unpublished</option>";
                                                                        echo "<option value='1'>Published</option>";
                                                                    }
                                                                    
                                                                    
                                                                    
                    echo "</td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/sosmed'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();