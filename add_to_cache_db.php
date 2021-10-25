<?php

function get_last_ID(){
    // load file
    $data = file_get_contents('json_hira/hira.json');
    // decode json to associative array
    $json_arr = json_decode($data, true);
    
    return end($json_arr)["id"];
    
}

//Function to use
function push_in_JSON($title, $content){
    // load file
    $data = file_get_contents('json_hira/hira.json');
    // decode json to associative array
    $json_arr = json_decode($data, true);
    
    $last_id = get_last_ID();

    // add data
    $json_arr[] = array('id'=>$last_id + 1, 'title'=>$title, 'content'=>$content);

    // encode json and save to file
    file_put_contents('json_hira/hira.json', json_encode($json_arr));
    
}

push_in_JSON($_POST["title"], $_POST["content"]);
header('Location: song_page.php');

?>