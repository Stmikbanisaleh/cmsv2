<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Ship design & Analysis </h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_shipdesign',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_shipdesign]'>
                    <tr><th width='120px' scope='row'>Description</th><td><textarea id='editor1' class='form-control' class='form-control' name='a'>$rows[description]</textarea></td></tr>
                    <tr><th width='120px' scope='row'>Description English</th><td><textarea id='editor2' class='form-control' class='form-control' name='c'>$rows[description_eng]</textarea></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                  </div>
            </div></div></div>";
            echo form_close();