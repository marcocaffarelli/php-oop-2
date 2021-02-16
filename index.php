<?php
// Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
// Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
// Il database e la tabella non devono essere realmente creati.

include __DIR__ . '/classes/User.php';

$users = [    
    new User('Marco', 'Verdi', 'Greenmar', 'marcoverdi@email.it', 'password'),
    new User('Anna', 'Rossi', 'Redan', 'annarossi@email.it', 'password'),
    new User('Pino', 'Bianchi', 'Whitepino', 'bianchipino@email.it', 'password'),
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
        }
    </style>
    <body>
        <h1>Users</h1>
        <div class="container_utenti">
            <?php foreach ($users as $user) {?>
                <div class="utente_card">
                    <div><strong>Nome: </strong><?php echo $user->nome; ?></div>
                    <div><strong>Cognome: </strong><?php echo $user->cognome; ?></div>
                    <div><strong>Nickname: </strong><?php echo $user->nickname; ?></div>
                    <div><strong>Email: </strong><?php echo $user->email; ?></div>
                    <div><strong>Password: </strong><?php echo $user->getPassword(); ?></div>      
                </div>
            <?php } ?>
        </div>
    </body>
</html>