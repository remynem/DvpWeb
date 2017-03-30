
<h1>Les reparations</h1>



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
                    <td>Intervention</td>
                    <td>Description</td>
                </tr>
            </thead>
            <tbody>

                <?php
                include './controlleurs/controlleur_reparations.php';

                foreach ($resultat as $reparation) {
                    $id = $reparation["vehicule_FK"];
                    echo("<tr>"
                    . "<td><a href=index.php?page=voiture&immat=\"$id\">".$id."</a></td>"
                    . "<td>" . $reparation["intervention"] . "</td>"
                    . "<td>" . $reparation["description"] . "</td>"
                    . "<tr>");
                }
                ?>
            </tbody>
        </table>
    </div>
</aside>