<?php
$conn_string = 'mysql:host=localhost;dbname=todo';
$username    = 'root';
$password    = 'root';





function action_save($title, $description){
    
    // salvataggio dei dati
    
    
    header('location: index.php');
}



function action_list(){   
    $sql = 'select * from todo order by priority';
    
    $list = db_query($sql);
     
    return $list;
}


function db_query($sql){
    
    global $conn_string;
    global $username;
    global $password;
    
    $db = new PDO($conn_string,$username,$password);
    
    $result = $db->query($sql);
    
    if (!$result){
        print_r($db->errorInfo());
        die();
    }
    
    $list = $result->fetchAll(PDO::FETCH_ASSOC);
    
    return $list;
}




function action_list_old(){
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

?>