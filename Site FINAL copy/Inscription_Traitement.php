<?php
    // Inclure le fichier de connexion à la base de données
    include 'dbConnectFournilAlsacien.php';

    // Vérifier si le formulaire d'inscription a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs des champs du formulaire
        $idCompte = $_POST["idCompte"];
        $mdpCompte = $_POST["mdpCompte"];

        // Vérifier si les champs sont vides
        if (empty($idCompte) || empty($mdpCompte)) {
            echo "<section id='connexion_et_inscription' class='connexion_et_inscription'>
            Veuillez remplir tous les champs.
            </section>";
        } else {
            // Vérifier si l'identifiant est déjà utilisé
            $sql_check = "SELECT idCompte FROM COMPTE WHERE idCompte = :idCompte";
            $stmt_check = $pdo->prepare($sql_check);
            $stmt_check->bindParam(':idCompte', $idCompte, PDO::PARAM_STR);
            $stmt_check->execute();

            // Récupérer tous les résultats de la première requête avant d'exécuter la suivante
            $rows = $stmt_check->fetchAll();

            // Vérifier si l'identifiant est déjà utilisé
            if (count($rows) > 0) {
                echo "<section id='connexion_et_inscription' class='connexion_et_inscription'>
                L'identifiant est déjà utilisé. 
                <br>
                Veuillez en choisir un autre.
                </section>";
            } else {
                // Insérer le nouvel utilisateur dans la base de données
                $sql_insert = "INSERT INTO COMPTE (idCompte, mdpCompte) VALUES (:idCompte, :mdpCompte)";
                $stmt_insert = $pdo->prepare($sql_insert);
                $stmt_insert->bindParam(':idCompte', $idCompte, PDO::PARAM_STR);
                $stmt_insert->bindParam(':mdpCompte', $mdpCompte, PDO::PARAM_STR);

                if ($stmt_insert->execute()) {
                    echo "<section id='connexion_et_inscription' class='connexion_et_inscription'>
                    <h2>Inscription réussie avec l'id ".$idCompte."</h2>
                    <br>
                    <br>
                    <form method='post' action='index1.php'>
                    <button type='submit' name='page' class='btn' value='Connexion' id='valider'>Connexion</button>
                    </form>
                    </section>";
                } else {
                    echo "<section id='connexion_et_inscription' class='connexion_et_inscription'>
                    Une erreur s'est produite lors de l'inscription. 
                    <br>
                    Veuillez réessayer.
                    </section>";
                }
            }
        }
    }
?>