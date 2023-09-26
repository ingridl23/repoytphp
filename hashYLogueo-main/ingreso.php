<?php
session_start();

if ($_GET['modificar']) {
    if ($_SESSION['logueado']) {
        echo '<br>Estas logueado,modifica no mas';
    } else {
        echo "logueate";
    }
} else if ($_GET['cerrar']) {
    session_destroy();
    header('Location: index.html');
} else {
    $clave = password_hash($_POST['clave'], PASSWORD_BCRYPT);

    $db = new PDO('mysql:host=localhost;' . 'dbname=hash;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM usuario WHERE nombre = ?');
    $query->execute([$_POST['nombre']]);
    $user = $query->fetch(PDO::FETCH_OBJ);
    echo "<br>";
    var_dump($user);

    if (password_verify($_POST['clave'], ($user->clave))) {
        $_SESSION['usuario'] = $_POST['nombre'];
        $_SESSION['logueado'] = true;
        echo "<br>Ingrersate Correctamente";
    } else
        echo "<br>Algun dato esta mal. No entro<br>";

}

//SELECT * FROM usuario WHERE nombre = "'.$_POST['nombre'].'"')
                                    //  = "' x" or "1"="1      " 