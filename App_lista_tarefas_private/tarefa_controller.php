<?php
    require '../../App_lista_tarefas_private/tarefa.php';
    require '../../App_lista_tarefas_private/tarefa.service.php';
    require '../../App_lista_tarefas_private/conexao.php';

    $tarefas = null;
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == 'inserir') {
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);

        $tarefaService->inserir();

        header("Location: nova_tarefa.php?inclusao=1");
    } else if ($acao == 'recuperar') {

        $tarefa = new Tarefa();
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperar();
    }

?>


