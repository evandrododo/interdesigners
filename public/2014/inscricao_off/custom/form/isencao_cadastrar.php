<?php
    $usuario = Structure::verifyAdminSession();
    Structure::header();
?>
    <h1>Isenção > Cadastrar</h1>
    
        <form method="POST" action="<?=APP_URL?>/admin/action/isencao/cadastrar" class="new_submit">
            
            <label for="user_email">E-mail do usuário</label>
            <input type="email" name="Isencao-user_email" id="user_email" placeholder="usuario@servidor.com.br" required>

            <ul id="package_selection">
                <li>
                    <input type="checkbox" name="pacotes[]" value="0" id="inscricao_basica">
                    <label for="inscricao_basica">Inscrição Básica</label>
                </li>
                <li>
                    <input type="checkbox" name="pacotes[]" value="1" id="alojamento">
                    <label for="alojamento">Alojamento</label>
                </li>
                <li>
                    <input type="checkbox" name="pacotes[]" value="2" id="alimentacao">
                    <label for="alimentacao">Alimentação</label>
                </li>
                <li>
                    <input type="checkbox" name="pacotes[]" value="3" id="festas">
                    <label for="festas">Festas</label>
                </li>
            </ul>

            <p><input type="submit" name="cadastrar" value="Cadastrar">
        </form>
<?php Structure::footer(); ?>