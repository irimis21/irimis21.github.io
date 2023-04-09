
<?php
        if(isset($_POST['formsend']))
        
        {
                extract($_POST);

                if($espece == "collier" or $espece == "inseparable")
                {
                        $c = $db->prepare("SELECT bague FROM $espece WHERE bague = :bague");
                        $c->execute

                        ([
                            'bague' => $_POST['bague']
                        ]);

                        $result = $c->rowCount();



                        if($result == 0)
                        {
                            $q = $db->prepare("INSERT INTO $espece (bague, age, sexe) VALUES(:bague, :age, :sexe)");
                            $q->execute
                                ([
                                    'bague' => $bague,
                                    'age' => $age,
                                    'sexe' => $sexe
                                ]);

                             echo "l'oiseau a été ajouté";
                        }
                        else
                        {
                            echo "cet oiseau est déja répertorié";
                        }
                }
                else
                {
                    echo "ca ne fonctionne pas";
                }

           }
?>
