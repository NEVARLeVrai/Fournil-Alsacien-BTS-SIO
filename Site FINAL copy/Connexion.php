<body>
    <section id="connexion_et_inscription" class="connexion_et_inscription">
        <h2>Connectez-vous</h2>
        <p>Connectez vous à votre compte :</p>
        
        <form method="post" action="index1.php">


            <label for="idCompte">Id :</label><br>
            <input type="text" id="idCompte" name="idCompte" required ><br>

            <label for="mdpCompte">Mot de passe :</label><br>
            <input type="password" id="mdpCompte" name="mdpCompte" required ><br>

            <button type='submit' name='page' class='btn' value='Connexion_Traitement' id='valider'>Connexion</button>
            <br>

        </form>
    

        <br>
        <form method="post" action="index1.php">
            <p>Vous n'avez pas de compte ?</p>
            <button type='submit' name='page' class='btn' value='Inscription' id='valider'>Inscription</button>
        </form>
        
    </section>
</body>
