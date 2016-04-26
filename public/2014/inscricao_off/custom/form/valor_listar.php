<?php
    $usuario = Structure::verifyAdminSession();
    Structure::header();

    $valor_dao = new ValorDAO;

    $valores = $valor_dao->selectAll("Valor", NULL);
    if (!is_array($valores)) {
        $valores = array($valores);
    }
?>
    <h1>Valor > Listar</h1>

    <a href="<?=APP_URL?>/admin/valor/cadastrar">Cadastrar novo valor</a>
    
    <h2>Valores</h2>
    <?php if ($valores) : ?>
    <table style="font-size:12px;">
        <thead>
            <th style="width:8%;" class="right">ID</th>
            <th style="width:8%;" class="right">Pacote</th>
            <th style="width:16%;">Descrição</th>
            <th style="width:18%;" class="center">Data Início</th>
            <th style="width:18%;" class="center">Data Limite</th>
            <th style="width:10%;">Qtde. Máxima</th>
            <th style="width:10%;">Valor</th>
            <th style="width:6%;" class="center">Editar</th>
            <th style="width:6%;" class="center">Excluir</th>
        </thead>
    <?php foreach ($valores as $valor) { ?>
        <tr>
            <td class="right"><?=$valor->get('id')?></td>
            <td class="right"><?=$valor->get('pacote')?></td>
            <td><?=$valor->get('descricao')?></td>
            <td class="center"><?=$valor->get('data_inicio')?></td>
            <td class="center"><?=$valor->get('data_limite')?></td>
            <td><?=$valor->get('qtde_maxima')?></td>
            <td>R$ <?=$valor->get('valor')?></td>
            <td class="center"><a href="<?=APP_URL?>/admin/valor/editar?id=<?=$valor->get('id')?>">Editar</a></td>
            <td class="center"><a class="post" href="<?=APP_URL?>/admin/action/valor/excluir" id="<?=$valor->get('id')?>">Excluir</a></td>
        </tr>
    <?php } ?>
    </table>
    <?php else : ?>
        <p>Nenhum valor cadastrado.</p>
    <?php endif; ?>


<?php Structure::footer(); ?>
