<h2>Carnet de reparation du vehicule : 
    <mark>
            <?php echo $_GET['immat']?>
    </mark> </h2><br>

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
                    <td>Intervention</td>
                    <td>Description</td>
                    <td>Date</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include './controlleurs/controlleur_reparations.php';
                    foreach ($resultat as $reparation) {
                    echo("<tr>"
                    . "<td>" . $reparation["intervention"] . "</td>"
                    . "<td>" . $reparation["description"] . "</td>"
                    . "<td>" . $reparation["date"] . "</td>"        
                    . "<tr>");
                }
                ?>
            </tbody>
        </table>
    </div>
</aside>