<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Project</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/edit_project',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_project]'>
                    <tr><th width='120px' scope='row'>Nama Project</th><td><input type='text' class='form-control' name='a' value='$rows[nm_project]'></td></tr>
                    <tr><th width='120px' scope='row'>Tanggal Mulai</th><td><input type='date' class='form-control' name='b' value='$rows[tgl_mulai]'></td></tr>
                    <tr><th width='120px' scope='row'>Tanggal Selesai</th><td><input type='date' class='form-control' name='c' value='$rows[tgl_selesai]'></td></tr>
                    <tr><th width='120px' scope='row'>Description</th><td><textarea id='editor1' class='form-control' class='form-control' name='d'>$rows[description]</textarea></td></tr>
                    <tr><th width='120px' scope='row'>Description English</th><td><textarea id='editor2' class='form-control' class='form-control' name='ee'>$rows[description_eng]</textarea></td></tr>
                    <tr><th scope='row'>Status</th><td>"; if ($rows['status']=='1'){ echo "<input type='radio' name='e' value='1' checked> Selesai &nbsp; <input type='radio' name='e' value='0'> On Progress"; }else{ echo "<input type='radio' name='e' value='1'> Selesai &nbsp; <input type='radio' name='e' value='0' checked> On Progress"; } echo "</td></tr>
                    <tr><th scope='row'>File</th><td><input type='file' class='form-control' name='g'><hr style='margin:5px'>
                    <tr><th width='120px' scope='row'>URL File</th>   <td><input type='text' class='form-control' name='h' value='$rows[url_project]'></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/project'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();