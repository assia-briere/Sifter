<?php
require_once dirname(__DIR__) . '/Model/Message.php'; 
$meg= new message();
$megs=$meg->getMesSender( $_POST['incoming_id'] , $_SESSION['reci'] );
$output="";
if(count($megs)>0){
foreach($megs as $mg){
    if($mg['sender_id']==$_SESSION['id']){
        $output .= '<div class="send">
        <p class="sendp"><strong>'.$mg["message_text"].'</strong></p>
        <p><small>'.$mg["timestamp"].'</small></p></div>';
    }else{
        $output .= '<div class="recipent">
        <p class="recipentp"><strong>'.$mg["message_text"].'</strong></p>
        <p><small>'.$mg["timestamp"].'</small></p></div>';
    }
}
}else{
    $output =  '<div class="nomessage">
    Cree un message </div>';
}

echo $output;