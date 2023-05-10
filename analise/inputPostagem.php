<?php
include_once('conexao.php');
if(isset($_POST['submit']) && !empty($_POST['materia'])){
    if(isset($_POST['submit']) && !empty($_POST['desc'])){
        if(isset($_POST['submit']) && isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] === UPLOAD_ERR_OK){

            $formatosPermitidos = array("pdf");

            $extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);
        
            if(in_array($extensao, $formatosPermitidos)){
                $pasta = "arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name'];
                $novoNome = uniqid().".$extensao";
                
                if(move_uploaded_file($temporario, $pasta. $novoNome)){
                    echo $mensagem = "Upload feito com sucesso!";
                    echo $novoNome;
                }else{
                    echo $mensagem = "Erro, não foi possivel fazer o upload";
                }
            }else{
                echo "ERRO, formato de arquivo inválido!!!";
            }
        }else{
            echo "ERRO, informe o campo de arquivo!!!";
        }
    }else{
        echo "ERRO, informe o campo de descrição!!!";
    }
}else{
    echo "ERRO, informe o campo de matéria!!!";
}
?> 

    





