<?php

class Matricula_aluno_upload {

  public function dados_aluno($idAluno, $nomeDaFoto){
    $insert=mysql_query("UPDATE `alunos` SET `foto` = '$nomeDaFoto' WHERE `alunos`.`id_aluno` = '$idAluno'; ");
  }
}