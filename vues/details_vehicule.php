
    <h1>Fiche concernant le vehicule : 
        <?php
            $immatriculation = $_GET['immat'];
            echo "$immatriculation";
        ?>
    </h1>

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
                        <td>Numero de chassis</td>
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
                    echo("<tr>"
                    . "<td>" . $vehicule["numero_chassis"] . "</td>"
                    . "<td>" . $vehicule["plaque"] . "</td>"
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


