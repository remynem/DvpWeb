
    <h1>Liste des vehicules</h1>

    <aside class="col-md-4">
        <p>Nous faisons de notre mieux pour vous <br/> rendre un service incontournable <br/>
            Où que vous soyez, Garage Remy vous viendra toujours en secours <br/>
            Nos salutations.
        </p>
    </aside>
    <aside class="col-md-8">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Immatriculation</td>
                        <td>Marque</td>
                        <td>Modele</td>
                        <td>Type</td>
                    </tr>
                </thead>
                <tbody>

                <?php
                include './controlleurs/controlleur_vehicules.php';

                foreach ($resultat as $vehicule) {
                    $id = $vehicule["id"];
                    echo("<tr>"
                    . "<td><a href=index.php?page=carnet&immat=\"$id\">".$vehicule["plaque"]."</a></td>"
                    . "<td>" . $vehicule["marque"] . "</td>"
                    . "<td>" . $vehicule["modele"] . "</td>"
                    . "<td>" . $vehicule["type"] . "</td>"
                    . "<tr>");
                }
                ?>
            </tbody>
            </table>
        </div>
    </aside>


