<?php

$pg = isset($_GET['pg']);

if ($pg) {

    //PAGINA INDEX DO SITE PRINCIPAL

    switch ($_GET['pg']) {

        case 'FenixEcho':
            include_once 'paginas/include/header.php';
            include_once 'paginas/home.php';
            // include_once 'paginas/include/footer.php';
            break;


            // FIM PAGINA INDEX DO SITE PRINCIPAL

        default:
            include_once 'paginas/include/header.php';
            include_once 'paginas/home.php';
            // include_once 'paginas/include/footer.php';
            break;
    }
} else {
    //não existe   
    include_once 'paginas/include/header.php';
    include_once 'paginas/home.php';
    // include_once 'paginas/include/footer.php';
}
