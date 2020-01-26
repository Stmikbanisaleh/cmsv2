<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Footer </h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/footer',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_footer]'>
                    <tr><th width='120px' scope='row'>About Company</th><td><textarea id='editor1' class='form-control' class='form-control' name='a'>$rows[about_company]</textarea></td></tr>
                    <tr><th width='120px' scope='row'>About Company English</th><td><textarea id='editor2' class='form-control' class='form-control' name='aa'>$rows[about_company_e]</textarea></td></tr>
                    <tr><th width='120px' scope='row'>Information</th><td><textarea id='editor3' class='form-control' class='form-control' name='b'>$rows[information]</textarea></td></tr>
                    <tr><th width='120px' scope='row'>Information English</th><td><textarea id='editor4' class='form-control' class='form-control' name='bb'>$rows[information]</textarea></td></tr>
                        <tr><th width='120px' scope='row'>Information Telephone</th>   <td><input type='text' class='form-control' name='d' value='$rows[i_telephone]'></td></tr>
                        <tr><th width='120px' scope='row'>Informattion E-mail</th>   <td><input type='text' class='form-control' name='e' value='$rows[i_email]'></td></tr>
                    <tr><th width='120px' scope='row'>News Letter</th><td><textarea id='editor5' class='form-control' class='form-control' name='c'>$rows[news_letter]</textarea></td></tr>
                    <tr><th width='120px' scope='row'>News Letter English</th><td><textarea id='editor6' class='form-control' class='form-control' name='cc'>$rows[news_letter_e]</textarea></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                  </div>
            </div></div></div>";
            echo form_close();