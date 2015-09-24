<?php

$this->load->view('template/header');

?>

<img src='<?php echo base_url('images/banner.jpg'); ?>' alt='banner' />


<center>

<div id="login">
    <br /><br />
    
    <form method="POST" action="index.php/login">
        <label>User Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" value="" placeholder="Enter your email address" required></label><br /><br />
        <label>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" value="" required></label>
        <br /><br />
        <input type="image" name="submit" src="<?php echo base_url('images/loginbutton.jpg');?>" border="0" alt="Submit" style="margin-left: 85px;" />
    </form>

    <p><a href="index.php/register"><img src="<?php echo base_url('images/signupbutton.jpg');?>"/></a></p>
</div>

</center>

<?php

$this->load->view('template/footer');

?>