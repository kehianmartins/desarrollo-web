<?php include 'includes/header.php';

// es de type String, hace que la función si o si
// deba retornar un String. (como en Java). void no retorna nada o null;
function usuarioAutenticado(bool $autenticado) : string{
    return $autenticado ? 'Usuario Autenticado' : 'Usuario no autenticado';
}

// el '?' le dice a php que puede ser que retorne un string
function usuarioAutenticadoDos(bool $autenticado) : ?string{
    if ($autenticado) {
        return "Usuario Autenticado";
    } else {
        return null;
    }
}

// retorna un string o(|) un int
function usuarioAutenticadoTres(bool $autenticado) : string|int{
    if ($autenticado) {
        return "Usuario Autenticado";
    } else {
        return 0;
    }
}

$usuario = usuarioAutenticado(true);

echo $usuario; // Usuario Autenticado



include 'includes/footer.php';