<?php
$title = "Inserir";
$href = "../../../index.php";
$textoHref = "Visualizar usuários";

include_once("./frontend/views/layouts/_header.php");
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <?php
        $titulo = 'Inserir usuário';
        include_once('./frontend/views/layouts/_form_usuario.php');
        ?>
    </div>
</div>

</body>

</html>