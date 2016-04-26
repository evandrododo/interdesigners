<?php
    $usuario = Structure::verifyAdminSession();
    Structure::header();
?>

                <form method="POST" action="<?=APP_URL?>/admin/action/listagem/gerar">
                    <h1>Gerar Listagem</h1>
                    <h2>Talvez a geração demore um pouco, mas aguarde. :)</h2>

                    <label for="all_letters">Todas as letras?</label>
                    <select name="all_letters" id="all_letters">
                        <option value="NAO">Não</option>
                        <option value="SIM">Sim</option>
                    </select>

                    <label for="all_status">Credenciados também?</label>
                    <select name="all_status" id="all_status">
                        <option value="SIM">Sim</option>
                        <option value="NAO">Não</option>
                    </select>
                    
                    <label for="letter">Letra</label>
                    <select name="letter" id="letter">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="H">H</option>
                        <option value="I">I</option>
                        <option value="J">J</option>
                        <option value="K">K</option>
                        <option value="L">L</option>
                        <option value="M">M</option>
                        <option value="N">N</option>
                        <option value="O">O</option>
                        <option value="P">P</option>
                        <option value="Q">Q</option>
                        <option value="R">R</option>
                        <option value="S">S</option>
                        <option value="T">T</option>
                        <option value="U">U</option>
                        <option value="V">V</option>
                        <option value="W">W</option>
                        <option value="X">X</option>
                        <option value="Y">Y</option>
                        <option value="Z">Z</option>
                    </select>                    
                
                    <p><input type="submit" value="Gerar" /></p>

                </form>
<?php Structure::footer(); ?>
