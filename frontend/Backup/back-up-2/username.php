<?php

function checkuser($username,$password){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM music_world_db WHERE username='".$username."' AND password='".$password."' ");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchALL();
    if(count($kq)>0) return $kq[0]['role'];
    else return 0;
}
   

?>
