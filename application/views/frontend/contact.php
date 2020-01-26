<?php
if ($this->session->userdata('bahasa') == 'id') {

    ?>
<h2>Contact us <small>hubungi kami dengan mengisi formulir di bawah ini</small></h2>
<hr class="colorgraph">
<?php
if($hasil==0){
    
} else {
    echo '<div id="sendmessage">Pesan Anda telah dikirim. Terima kasih!</div>';
}
?>
<div id="errormessage"></div>
<form action="<?php echo base_url()."home/contact" ?>" method="post" role="form" class="contactForm">
    <div class="form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
               data-msg="Please enter at least 4 chars" required=""/>
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
               data-msg="Please enter a valid email" required=""/>
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
               data-msg="Please enter at least 8 chars of subject" required=""/>
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                  placeholder="Message" required=""></textarea>
        <div class="validation"></div>
    </div>

    <div class="text-center"><input type="submit" name="submit" class="btn btn-theme btn-block btn-md" style="color: #fff;" value="Submit"></div>
</form>
<hr class="colorgraph">

    <?php
} else {
    ?>
<!-- ============================================================================ -->
<h2>Contact us <small>get in touch with us by filling form below</small></h2>
<hr class="colorgraph">
<?php
if($hasil==0){
    
} else {
    echo '<div id="sendmessage">Your message has been sent. Thank you!</div>';
}
?>
<!--<div id="sendmessage">Your message has been sent. Thank you!</div>-->
<div id="errormessage"></div>
<form action="<?php echo base_url()."home/contact" ?>" method="post" role="form" class="contactForm">
    <div class="form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
               data-msg="Please enter at least 4 chars" required=""/>
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
               data-msg="Please enter a valid email" required=""/>
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
               data-msg="Please enter at least 8 chars of subject" required=""/>
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                  placeholder="Message" required=""></textarea>
        <div class="validation"></div>
    </div>

    <div class="text-center"><input type="submit" name="submit" class="btn btn-theme btn-block btn-md" style="color: #fff;" value="Submit"></div>
</form>
<hr class="colorgraph">
<?php
}
?>
