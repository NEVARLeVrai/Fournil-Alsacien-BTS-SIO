<body>
    <section id="connexion_et_inscription" class="connexion_et_inscription">
        <h2>Inscription</h2>
        <p>Remplissez le formulaire ci-dessous pour créer votre compte :</p>
        
        <form method="post" action="index1.php">


            <label for="idCompte">Id :</label><br>
            <input type="text" id="idCompte" name="idCompte" required ><br>

            <label for="mdpCompte">Mot de passe :</label><br>
            <input type="password" id="mdpCompte" name="mdpCompte" required ><br>

            <button type='submit' name='page' class='btn' value='Inscription_Traitement' id='valider'>Inscription</button>
            <br>

        </form>
    

        <br>
        <form method="post" action="index1.php">
            <p>Vous avez un compte ?</p>
            <button type='submit' name='page' class='btn' value='Connexion' id='valider'>Connexion</button>
        </form>
        
    </section>
</body>
