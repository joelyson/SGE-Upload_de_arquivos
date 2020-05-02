<?php

        
        $idAluno=$_POST["idAluno"];
        
        // Lista de tipos de arquivos permitidos
        $tiposPermitidos = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
        // Tamanho máximo (em bytes)
        $tamanhoPermitido = 1024 * 500; // 500 Kb
        // O nome original do arquivo no computador do usuário
        $arqName = $_FILES['arquivo']['name'];
        // O tipo mime do arquivo. Um exemplo pode ser "image/gif"
        $arqType = $_FILES['arquivo']['type'];
        // O tamanho, em bytes, do arquivo
        //$arqSize = $_FILES['arquivo']['size'];
        // O nome temporário do arquivo, como foi guardado no servidor
        $arqTemp = $_FILES['arquivo']['tmp_name'];
        
        //pasta que será salvo o arquivo
        $pasta = '/upload_arquivos/';
        // Pega a extensão do arquivo enviado
        $extensao = strtolower(end(explode('.', $arqName)));
        // Define o novo nome do arquivo usando um UNIX TIMESTAMP
        $nomeDaFoto = time() . '.' . $extensao;
        // Escapa os caracteres protegidos do MySQL (para o nome do usuário)
        //$nomeMySQL = mysql_real_escape_string($_POST['nome']);
        $upload = move_uploaded_file($arqTemp, $pasta . $nomeDaFoto);
        
    }

        $matricula_aluno=new Matricula_aluno_upload;
        $matricula_aluno=$matricula_aluno->dados_aluno($idAluno, $nomeDaFoto);
            
           }  
         

?>