<?php

class Client {
    use genos;

    public $id;
    public $nom;
    public $prenom;
    public $age;

    public function __construct() {
        $this->id = 0;
        $this->nom = "";
        $this->prenom = "";
        $this->age = 0; 
    }

    public static function Datagrid($rech = ""){
        $c = new Client;    
        if($rech == ""){
        $req = "Select * FROM client";
        $champs = $c->FieldList();
        $liste = $c->StructList($req,$champs);
        }else{
            $req = "Select * FROM client WHERE 
                    nom LIKE '%$rech%'
                    OR prenom LIKE '%$rech%'
                    OR age LIKE '%$rech%'
                    OR nom LIKE '%$rech%'";
            $champs = $c->FieldList();
            $liste = $c->StructList($req,$champs);
        }
            ?>
    
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Age</th>
                    </tr>
                    <?php foreach($liste as $client){ ?>
                            <tr>
                                <td><?= $client["id"] ?></td>
                                <td><?= $client["prenom"] ?></td>
                                <td><?= $client["nom"] ?></td>
                                <td><?= $client["age"] ?></td>
                            </tr>
                    <?php } ?>      
                </thead>    
            </table>
        <?php }
        }
    