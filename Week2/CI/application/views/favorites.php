<?php

    $this->load->view('template/header');
    
?>
    <img src='<?php echo base_url('images/favoritesbanner.jpg'); ?>' alt='favoritesbanner' />

<?php

    if(count($results)>0){

    echo '<table width="100%" cellpadding="5"><tr>';


    foreach($results as $result){
        echo '<td align="center">'.$result->title.'<br /><img src="'.base_url('images/tricks').'/'.$result->filename.'" width="50"/></td>';
    }

    echo '</tr></table>';

    }else{
        echo '&nbsp;&nbsp;&nbsp;You currently have no favorites.';
    }

?>


<p><a href="<?php echo site_url(); ?>"><img src='<?php echo base_url('images/backtologinbtn.jpg'); ?>' alt='backtologin' /></a></p>

<?php

$this->load->view('template/footer');

?>