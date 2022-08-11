<?php

    if (isset($_POST['email'])) {

        // membuat variabel 
        $alamat_email = $_POST['email'];
        $kata_sandi = $_POST['kata_sandi'];

        // menampilkan nilai variabel ke layar
        echo '<p class="fw-bold">' . $alamat_email . '</p>';
        echo '<p class="fw-bold text-primary">' . $kata_sandi . '</p>';

    }

?>