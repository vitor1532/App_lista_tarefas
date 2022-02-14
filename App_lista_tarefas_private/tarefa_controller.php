<?php

    require '../../App_lista_tarefas_private/tarefa.php';
    require '../../App_lista_tarefas_private/tarefa.service.php';
    require '../../App_lista_tarefas_private/conexao.php';

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);

    $tarefaService->inserir();

    header("Location: nova_tarefa.php?inclusao=1");

?>

