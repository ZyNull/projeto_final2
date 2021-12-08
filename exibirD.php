<?php
    //  chama a classe pessoa
    include 'class/PessoaReal.class.php';

    // instancia o objeto da classe pessoareal
    $usuario = new Pessoa();

    // atribui os valores aos atributos do objeto
    $usuario->setNome($_POST['nome']);
    $usuario->setSobrenome($_POST['sobrenome']);
    $usuario->setEndereco($_POST['endereco']);
    $usuario->setCidade($_POST['cidade']);
    $usuario->setSelecionar($_POST['selecionar']);
    

    // exibe os dados na tela
    echo 'Nome: ' . $usuario->getNome() . '<br />';
    echo 'Sobrenome: ' . $usuario->getSobrenome() . '<br />';
    echo 'Endereço: ' . $usuario->getEndereco() . '<br />';
    echo 'Cidade: ' . $usuario->getCidade() . '<br />';
    echo 'Selecionar: ' . $usuario->getSelecionar() . '<br />';
?>