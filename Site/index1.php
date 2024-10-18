<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:site_name" content="Le fournil alsacien - Boulangerie">
        <meta property="og:title" content="&#x26CA; Le fournil alsacien - Boulangerie">
        <meta property="og:description" content="Le Fournil Alsacien est une boulangerie traditionnelle implantée en Alsace. Reconnue pour la qualité de ses produits artisanaux, cette entreprise a su se faire une place de choix sur le marché local">
        <meta property="og:url" content="https://www.lyceecassin-strasbourg.eu/">
        <meta property="og:image:url" content="img/Accueil.png">
        <link rel="icon" href="img/Accueil.png">
        <title>Le fournil alsacien</title>
        <link rel="stylesheet" href="css/Accueil.css">
    </head>

    <header>
        <nav id="navbar">
            <img src="img/Accueil.png">
            <form id="navForm" method="post" action="index1.php">        
                <button type="submit" name="page" value="Accueil" class="nav-link" >Accueil</button>
                <button type="submit" name="page" value="Pains" class="nav-link">Pains</button>
                <button type="submit" name="page" value="Viennoiseries" class="nav-link">Viennoiseries</button>
                <button type="submit" name="page" value="Specialites" class="nav-link">Spécialités</button>
                <button type="submit" name="page" value="Connexion" class="nav-link">Commandes</button>
            </form>
        </nav>   
    </header>

    <body>


        <?php
            if(isset($_POST['page']))
            {
                
                switch($_POST['page'])
                {
                    case 'Pains' :
                        include 'Pains.php';
                        break;
                    case 'Viennoiseries' :
                        include 'Viennoiseries.php';
                        break;
                    case 'Specialites' :
                        include 'Specialites.php';
                        break;
                    case 'Commandes' :
                        include 'Commandes.php';
                        break;
                    case 'Mentions' :
                        include 'Mentions.php';
                        break;    
                    case 'Contact' :
                        include 'Contact.php';
                        break;   
                    case 'Traitement' :
                        include 'Traitement.php';
                        break; 
                    case 'Connexion_Traitement' :
                        include 'Connexion_Traitement.php';
                        break; 
                    case 'Inscription_Traitement' :
                        include 'Inscription_Traitement.php';
                            break; 
                    case 'Connexion' :
                        include 'Connexion.php';
                        break; 
                    case 'Inscription' :
                        include 'Inscription.php';
                        break;
                    default :
                        include 'Accueil.php';
                        break; 
                }
            } else {
                include 'Accueil.php';
            }


            if (isset($_GET['page']) && $_GET['page'] == 'Connexion') {
                
            }
                
        ?>


    </body>

    <footer>
            <p>Contactez-nous : 
                <a href="tel:0388584590">03.88.58.45.90</a> | 
                <a href="mailto:contact@lefournilalsacien.fr">contact@lefournilalsacien.fr</a><br>
                <a href="https://www.google.com/maps/search/?api=1&query=7+rue+du+sel,+67600+Sélestat">7 rue du sel, 67600 Sélestat</a>
            </p>
            <form id="navForm" method="post" action="index1.php"  >  
            <button type="submit" name="page" value="Mentions" class="footer1"><a>Mentions légales</a></button> |
            <button type="submit" name="page" value="Contact" class="footer1"><a>Contact</a></button>
            </form>
    </footer>
</html>

<!-- DANIELS et ALEXANDRU C 2024 -->