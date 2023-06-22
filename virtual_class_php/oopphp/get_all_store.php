<?php
    require "classes/Store.php";

    $store = new Store();
    $insert = $store->getAllStore();
    
    //response
    $allStore = $insert['result'];
    while ($row = $allStore->fetch_assoc()) {
       print_r($row);
    }

    if ($insert) {
        echo "success";
    } else {
        echo "unsuccessful";
    }

?>





