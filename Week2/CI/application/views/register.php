<?php

$this->load->view('template/header');

?>

<img src='<?php echo base_url('images/registerbanner.jpg'); ?>' alt='registerbanner' />
        

<center>

<div id="login">
    <br /><br />
    
    <form method="POST" action="<?php echo base_url('index.php/register'); ?>">
        <label>First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fname" value="" required></label><br /><br />
        <label>Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" value="" required></label><br /><br />
        <label>User Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" value="" placeholder="Please use an email address" required></label><br /><br />
        <label>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="password" value="" required></label><br /><br />
        <!--<input type="image" name="submit2" src="images/registerbutton.jpg" alt="Register" />-->
        <input type="submit" value="Register">
    </form>
	
    <p><a href="<?php echo site_url(); ?>"><img src='<?php echo base_url('images/backtologinbtn.jpg'); ?>' alt='backtologin' /></a></p>
</div>

</center>

<?php

$this->load->view('template/footer');

?>