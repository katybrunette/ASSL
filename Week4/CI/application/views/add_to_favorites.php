<?php

    $this->load->view('template/header');
?>

<p class="favorites">Your item has been added to your favorites!</p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('welcome/favorites').'/'.$this->uri->segment(3);?>">View My Favorites</a>
&nbsp;&nbsp;&nbsp;//
&nbsp;&nbsp;&nbsp;<a href="javascript: window.history.back();">Back to Search Results</a>


<?php

$this->load->view('template/footer');

?>