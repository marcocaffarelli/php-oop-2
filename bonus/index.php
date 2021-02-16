<?php
// Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
// Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
// Il database e la tabella non devono essere realmente creati.
// Una volta finita la classe User, pensate a che altre entitá possiamo avere in un sistema di Blogging oltre all'utente.
// Per darvi un idea, un blog ha degli articoli, categorie, tags etc.
// Create nel diagramma anche le altre entitá e definite per ciascuna le rispettive classi con proprietá e metodi.

include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/Profile.php';


$profiles = [    
    new Profile('Marco', 'Verdi', 'Greenmar', 'marcoverdi@email.it', 'password', 'img', 'descrizione descrizione descrizione descrizione descrizione', 'twitter', 'facebook', 'instagram'),
    new Profile('Anna', 'Rossi', 'Redan', 'annarossi@email.it', 'password', 'img', 'descrizione descrizione descriione descrizione descrizione', 'twitter', 'facebook', 'instagram' ),
    new Profile('Pino', 'Bianchi', 'Whitepino', 'bianchipino@email.it', 'password', 'img', 'descrizione descrizione descriione descrizione descrizione', 'twitter', 'facebook', 'instagram' ),
];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Users</title>
    </head>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h1{
            text-align: center;
        }
        .container_utenti{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .utente_card{
            border:1px solid black;
            margin: 20px 0;
            width: 300px;
            text-align: center;
            background-color: yellow;
        }
        .utente_card a{
            text-decoration: none;
        }
    </style>
    <body>
        <h1>Profiles</h1>
        <div class="container_utenti">
            <?php foreach ($profiles as $profile) {?>
                <div class="utente_card">
                    <div><strong>Nome: </strong><?php echo $profile->nome; ?></div>
                    <div><strong>Cognome: </strong><?php echo $profile->cognome; ?></div>
                    <div><strong>Nickname: </strong><?php echo $profile->nickname; ?></div>
                    <div><strong>Email: </strong><?php echo $profile->email; ?></div>
                    <div><strong>Descrizione: </strong><?php echo $profile->descrizione; ?></div>
                    <div><a href="#"><?php echo $profile->linkAccountTwitter; ?></a></div> 
                    <div><a href="#"><?php echo $profile->linkAccountFacebook; ?></a></div> 
                    <div><a href="#"><?php echo $profile->linkAccountInstagram; ?></a></div> 
                </div>
            <?php } ?>
        </div>
    </body>
</html>