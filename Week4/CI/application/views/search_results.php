<?php

    $this->load->view('template/header');


    if(count($results)>0){

    echo '<h2>Search Results</h2><table width="100%" cellpadding="5" id="search_results">';
    echo '<tr><th>Name</th><th>File</th><th>Type</th><th>Add to Favorites</th></tr>';

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
        echo '<td><a href="'.site_url('favorites/add/'.$this->input->post('user_id').'/'.$result->id).'">+ Add to Favorites</a></td></tr>';
    }

    echo '</table>';

    }else{
        echo 'no results. please try your search again.';
    }




$this->load->view('template/footer');

?>