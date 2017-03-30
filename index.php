                   
<html>
    <body>
        <?php include './vues/header.php'; ?>
        <div class="container">
            <div class="jumbotron text-center">
                <h1>VW Leuven</h1>
                <p>Votre concessionaire VW vous souhaite le bienvenu</p>
            </div>

            <?php
            
            if (isset($_GET['page'])) {
                include 'menus/menu_autres_pages.php';
                $navigation = $_GET['page'];
                switch ($navigation) {

                    case 'voitures':
                        include './vues/liste_vehicules.php';
                        break;
                    case 'entretiens':
                        include './vues/liste_reparations.php';
                        break;
                    case 'carnet':
                        include './vues/carnet_reparations_vehicule.php';
                        break;
                    case 'detail_vehicule':
                        include './vues/details_vehicule.php';
                        break;
                    case 'contact':
                        include './vues/contact.php';
                        break;
                    default:
                        break;
                }
            } else {
                include 'menus/menu_accueil.php';
                include 'vues/accueil.php';
            }
            ?>
        </div>
        <?php include 'vues/footer.php'; ?>
    </body>
</html>
