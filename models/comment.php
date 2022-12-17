<?php
require_once 'models/db.php';
function getAllComment(){
    $sql = "SELECT comment.id,comment.content,time,products.name,client.name as name_client FROM comment JOIN client ON client.id = comment.client_id JOIN products ON products.id=comment.product_id";
    return getData($sql,FETCH_ALL);
}
function deleteCom($id){
    $sql="DELETE FROM comment WHERE id=$id";
    return getData($sql,NOT_FETCH);
}