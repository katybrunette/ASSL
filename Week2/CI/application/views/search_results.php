<?php

    $this->load->view('template/header');


    if(count($results)>0){

    echo '<h2>Search Results</h2><table width="100%" cellpadding="5"><tr>';

    foreach($results as $result){
        echo '<td align="center">'.$result->title.'<br /><img src="'.base_url('images/tricks').'/'.$result->filename.'" width="50"/>'.$this->input->post('user_id').$result->id.'</td>';
    }

    echo '</tr></table>';

    }else{
        echo 'no results. please try your search again.';
    }




$this->load->view('template/footer');

?>