<?php

    // Add your customized URLs as $custom_urlpatterns[key] = value.
    $custom_urlpatterns = array(
        "/admin/info_panel" => "form/info_panel.php",

        "/admin/inscricao/buscar" => "form/inscricao_buscar.php",
        "/admin/action/inscricao/buscar" => "action/inscricao_buscar.php",
        "/admin/action/inscricao/cancelar" => "action/inscricao_cancelar.php",
        "/admin/action/inscricao/cancelar/inutilizadas" => "action/inscricao_cancelar_inutilizadas.php",
        "/admin/action/inscricao/confirmar" => "action/inscricao_confirmar.php",
        "/admin/action/inscricao/credenciar" => "action/inscricao_credenciar.php",

        "/admin/isencao/cadastrar" => "form/isencao_cadastrar.php",
        "/admin/action/isencao/cadastrar" => "action/isencao_cadastrar.php",

        "/admin/valor/cadastrar" => "form/valor_cadastrar.php",
        "/admin/valor/editar" => "form/valor_editar.php",
        "/admin/valor/listar" => "form/valor_listar.php",
        "/admin/action/valor/cadastrar" => "action/valor_cadastrar.php",
        "/admin/action/valor/editar" => "action/valor_editar.php",
        "/admin/action/valor/excluir" => "action/valor_excluir.php",

        "/admin/listagem/gerar" => "form/listagem_gerar.php",
        "/admin/action/listagem/gerar" => "action/listagem_gerar.php",

        "/admin/transacao" => "form/transacao.php",
        "/admin/transacoes/usuarios_csv" => "action/transacao_csv_usuarios_confirmados.php",

        "/pacotes" => "form/pacotes.php",
        "/metodo_pagamento" => "form/metodo_pagamento.php",
        "/pagamento" => "form/pagamento.php",

        "/faq" => "form/faq.php",

        // Overriding noisy-cricket's original Usuario interface
        "/usuario/cadastrar" => "form/usuario_cadastrar.php",
        "/usuario/atualizar" => "form/usuario_atualizar.php",

        "/action/usuario/cadastrar" => "action/usuario_cadastrar.php",
        "/action/usuario/atualizar" => "action/usuario_atualizar.php",

        "/pagseguro_notification" => "action/pagseguro_notification.php",
    );

?>
