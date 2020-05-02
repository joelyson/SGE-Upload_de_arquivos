<?php

//GET id do aluno 
$idAluno=$_GET["ID"];

// local onde o arquivo esta salvo
$caminho="../upload_arquivos/";

//busca imagem na pasta pelo nome salvo no banco
$img=$caminho . $alunoencontrado[foto];
?>
<!DOCTYPE html>
<html lang="en">

<head> ... </head>

<body>

    <form action="../index.php?acao=aluno_editar_matricula" role="form" method="post" enctype="multipart/form-data">
        <div class="col-xs-6 col-sm-3">
            <!-- mostras imaguem  -->
            <img src=<?php echo $img;?> width="210" height="180">
            
            <!-- enviar imagem -->
            <input type="file" name="arquivo" id="txFoto">
        </div>

    </form>

</body>

</html>