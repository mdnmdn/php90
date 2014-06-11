<?php

function action_list(){
    $list = array();    
    
    $list[] = array( 'title' => 'fai cose0',
                        'description' => 'AAAA---', 'priority' => 1);
    
    $list[] = array( 'title' => 'fai cose1', 'description' => 'A----');
    $list[] = array( 'title' => 'fai cose4', 'description' => '-N---');    
    $list[] = array( 'title' => 'fai cose3', 'description' => 'C----');
    $list[] = array( 'title' => 'fai cose2', 'description' => 'B----');
    $list[] = array( 'title' => 'fai cose5', 'description' => '---Q-');
    
    $row = array( 'title' => 'fai cose', 'description' => '---');
    $list[] = $row;
    
    $row = array( 'title' => 'fai altre cose', 'description' => '---');
    $list[] = $row;
    
    $row = array( 'title' => 'fai altre cose ancora', 'description' => '---');
    $list[] = $row;
 
    return $list;
}


function action_save($title, $description){
    
    // salvataggio dei dati
    
    
    header('location: index.php');
}


?>