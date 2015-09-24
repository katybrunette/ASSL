<?php

    $this->load->view('template/header');
?>

 <img src='<?php echo base_url('images/favoritesbanner.jpg'); ?>' alt='favoritesbanner' />

<?php

    if(count($results)>0){

    echo '<h2>My Favorites</h2><table width="75%" cellpadding="3" id="search_results">';
    echo '<tr><th>Name</th><th>File</th><th>Type</th></tr>';

    foreach($results as $result){
        if (stristr($result->filename, 'jpg')){
            $type='img';
        }else{
            $type='video';

        }
        echo '<tr><td align="center">'.$result->title.'</td>';
        
        if($type=='img'){
            echo '<td><img src="'.base_url('images/tricks').'/'.$result->filename.'" width="125"/></td>';
        
        }else{
            echo '<td><a href="'.base_url('videos').'/'.$result->filename.'" target="_blank">View Video</a></td>';
        }
        echo '<td>'.$type.'</td>';
    }

    echo '</table>';

    }else{
        echo '&nbsp;&nbsp;&nbsp;&nbsp;You currently have no favorites.';
    }
?>

<p><a href="<?php echo site_url(); ?>"><img src='<?php echo base_url('images/backtologinbtn.jpg'); ?>' alt='backtologin' /></a></p>

<?php

$this->load->view('template/footer');

?>