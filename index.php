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
    <body>
        <h1>Users</h1>
        <div class="container_utenti"></div>
        <?php foreach ($users as $user) {?>
            <div><?php echo $user->nome; ?></div>
            <div><?php echo $user->cognome; ?></div>
            <div><?php echo $user->nickname; ?></div>
            <div><?php echo $user->email; ?></div>
            <div><?php echo $user->password; ?></div>      
        <?php } ?>
    </body>
</html>