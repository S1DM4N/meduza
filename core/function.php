<?php
require_once 'db.php';
function get_product_by_id($id) {
    global $connect;
    $query = "SELECT * FROM products WHERE id_product=" . $id;
    $req = mysqli_query($connect, $query);
    $resp = mysqli_fetch_assoc($req);

    return $resp;
}   