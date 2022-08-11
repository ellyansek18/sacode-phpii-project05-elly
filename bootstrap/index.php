<?php 

    //include header 
    require __DIR__ . '/include/header.php';
    
    // buat variabel method request
    $request_method = strtoupper($_SERVER['REQUEST_METHOD']);

    if ($request_method === 'GET') {

        // echo 'gunakan metode GET';
        require __DIR__ . '/include/form.php';

    }elseif($request_method === 'POST') {

        // echo 'gunakan metode POST';
        require __DIR__ .  '/include/proses.php';
    }
    

    // include form 
    // require __DIR__ . '/include/form.php';

    // include footer
    require __DIR__ . '/include/footer.php';

?>

