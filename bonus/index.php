<?php
// Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
// Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
// Il database e la tabella non devono essere realmente creati.
// Una volta finita la classe User, pensate a che altre entitá possiamo avere in un sistema di Blogging oltre all'utente.
// Per darvi un idea, un blog ha degli articoli, categorie, tags etc.
// Create nel diagramma anche le altre entitá e definite per ciascuna le rispettive classi con proprietá e metodi.

include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/Profile.php';
include __DIR__ . '/classes/Articolo.php';


$profiles = [    
    new Profile('Marco', 'Verdi', 'Greenmar', 'marcoverdi@email.it', 'password', 'img', 'descrizione descrizione descrizione descrizione descrizione', 'twitter', 'facebook', 'instagram'),
    new Profile('Anna', 'Rossi', 'Redan', 'annarossi@email.it', 'password', 'img', 'descrizione descrizione descriione descrizione descrizione', 'twitter', 'facebook', 'instagram' ),
    new Profile('Pino', 'Bianchi', 'Whitepino', 'bianchipino@email.it', 'password', 'img', 'descrizione descrizione descriione descrizione descrizione', 'twitter', 'facebook', 'instagram' ),
];

$articolo1 = new Articolo('VsCode vs Atom', 'VsCode o Atom quale scegliere per programmare?', 'La domanda che molti sviluppatori si pongono...', 'img', 'categoria', 'fonti', 'John Doe: sviluppatore...' );
$articolo2 = new Articolo('La scomparsa dei piccioni da Roma', 'Come mai i piccioni stanno scomparendo...', 'Ormai camminare tra le strade di Roma...', 'img', 'categoria', 'fonti', 'Charles Xavier: studente...' );
$articolo3 = new Articolo('Lionel Messi la leggenda blaugrana', 'l\'ultima bandiera del Barcellona...', 'Nasce a Rosario il 24 giugno 1987...', 'img', 'categoria', 'fonti', 'Cristiano Ronaldo: ex calciatore...' );

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog</title>
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
        }
        .utente_card a{
            text-decoration: none;
        }
        .container_articolo{
            width: 80%;
            margin: auto;
            background-color: gold;
        }
        h2{
            text-align: center;
        }
        .introduzione{
            padding: 20px 0;
            font-size: 20px;
            border-bottom: 3px solid black;
        }
        .corpo{
            margin: 80px 0;
        }
        .box_autore{
            background-color: beige;
            padding: 10px 0;
            margin: 20px 0;
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

        <h1>ARTICOLO</h1>
        <div class="container_articolo">
                <h2><?php echo $articolo3->titolo;?></h2>
                <p class="introduzione"><?php echo $articolo3->introduzione;?></p>
                <div class="corpo">
                    <p><?php echo $articolo3->corpo;?></p>
                    <a href="#"><?php echo $articolo3->link; ?></a>
                </div> 
                <p class="box_autore"><?php echo $articolo3->boxAutore;?></p>
        </div>
    </body>
</html>