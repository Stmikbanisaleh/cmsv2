<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit History</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_history',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_history]'>
                    <tr><th width='200px' scope='row'>Deskripsi History</th>   <td><textarea id='editor1' type='text' style='height:350px' class='form-control' name='a'>$rows[deskripsi_history]</textarea></td></tr>
                        <tr><th width='200px' scope='row'>Deskripsi History Inggris</th>   <td><textarea id='editor2' type='text' style='height:350px' class='form-control' name='b'>$rows[deskripsi_history_e]</textarea></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    
                  </div>
            </div></div></div>";
            echo form_close();