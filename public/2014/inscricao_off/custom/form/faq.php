<?php
    $usuario = Structure::verifySession();
    Structure::header();
?>
    <style>
        article p{
            margin-bottom: 30px;
        }
        article h3{
            margin-top: 30px;
        }
    </style>
    <article>
        <h1>FAQ</h1>
        <p><em>(enUS: Frequently Asked Questions; ptBR: Perguntas Feitas Geralmente)</em></p>

        <h2>Preciso mudar meu método de pagamento, o que fazer?</h2>
        <p>Em seu Painel, clique no link "Mudar Pagamento" na coluna "Pagamento" de sua transação (Inscrição ou Pacotes Avulsos).<br />
        <strong>MAS TENHA CUIDADO!</strong> Não utilize essa opção se você já realizou o pagamento. Aguarde a confirmação do pagamento.</p>

        <h2>Não consegui imprimir meu boleto no final de inscrição, como fazer?</h2>
        <p>Em seu Painel, clique no link "Boleto" na coluna "Pagamento" e imprima o mesmo.</p>

        <h3>Demais dúvidas, entre em contato com a organização</h3>
        <p><a href="mailto:<?=DEFAULT_HUMAN_EMAIL?>"><?=DEFAULT_HUMAN_EMAIL?></a></p>
    </article>

<?php Structure::footer(); ?>
