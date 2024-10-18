<body>
	<?php
		include 'dbConnectFournilAlsacien.php';

		$affiches ="SELECT photoP, refP, designationP, prixP, poidsP, descriptifP FROM PRODUIT";
		$res = $pdo->query($affiches);
		$rows = $res->fetchAll();
		$idCompte = $_POST['idCompte'];

		if(count($rows) > 0)
		{
			echo '
			<section id="commandes" class="commandes">
				<h2>Commandes : </h2>
				<br>
                <form method="POST">
				<table>
					<thead>
						<tr>
                            <th scope="col">Référence</th>
                            <th scope="col">Désignation</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Poids</th>
                            <th scope="col">Descriptif</th>
                            <th scope="col">Quantité</th>
						</tr>
					</thead>
					<tbody>
				';
                foreach($rows as $row){
                    echo '<tr>
                            <td>'.$row['refP'].'</td>
                            <td>'.$row['designationP'].'</td>
                            <td>'.$row['prixP'].'</td>
                            <td>'.$row['poidsP'].'</td>
                            <td>'.$row['descriptifP'].'</td>
                            <td><input type="number" id="quantite'.$row['refP'].'" name="quantite'.$row['refP'].'"></td>

                            
                        </tr>
                        <input type="hidden" id="refP'.$row['refP'].'" name="refP'.$row['refP'].'">';
            }
			echo "  </tbody>
				</table>
				<button type='submit' name='page' class='btn' value='Traitement' id='valider'>Valider le panier</button>
				<br>
				<br>
				<p>En validant le panier vous acceptez nos mentions légales
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
                <input type='hidden' id='idCompte' name='idCompte' value='$idCompte'>
                </form>
			    </section>

			";
		}

		
	?>
</body>