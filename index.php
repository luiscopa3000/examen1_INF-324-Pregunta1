<?php include ('cabecera.inc.php'); ?>

<body>
    <?php
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'deposito':
                include ('pages/page1.inc.php');
                break;
            case 'caja-ah-pr-plus':
                include ('pages/page2.inc.php');
                break;

            case 'caja-ah-pr-renta':
                include ('pages/page3.inc.php');
                break;

            case 'caja-ah-pr-cta':
                include ('pages/page4.inc.php');
                break;

            case 'caja-ah-pr-tcc':
                include ('pages/page5.inc.php');
                break;

            case 'caja-ah-pr-edu':
                include ('pages/page6.inc.php');
                break;

            default:
                # code...
                break;
        }

    }
    ?>
</body>

<?php include ('pie_pag.inc.php'); ?>