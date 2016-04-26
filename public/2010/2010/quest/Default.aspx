<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="appDoManetta._Default" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <style type="text/css">
        body
        {
            background-color: white;
            margin: 0;
            font-family: Verdana, Helvetica, sans-serif;
            font-size: 11px;
            line-height: 20px;
        }
        a
        {
        	color:White;
        }
        div.td {
	width:1000px;
	margin:auto;
}
        div.cabecalho
        {
            margin: auto;
            background-color: #F0F0F0;
        }
        div.conteudo
        {
            float: left;
            width: 400px;
            margin-top: 0;
            margin-bottom: 20px;
            line-height: 16px;
        }
        div.conteudo p
        {
            padding-left: 15px;
            padding-right: 15px;
        }
        div.rodape
        {
            background-color: navy;
            color: white;
            font-size: 11px;
            float: left;
            clear: left;
            margin: 0;
            width: 100%;
        }
        div.titulo
        {
            margin: 0px;
            padding: 10px;
            background-color: navy;
            text-transform: uppercase;
            color: white;
        }
        div.texto
        {
            width: 644px;
            float: left;
            margin: 15px;
            line-height: 17px;
        }
        div.img
        {
            float: left;
            margin: 15px;
        }
        div.inst
        {
            width: 700px;
            margin: auto;
            padding: 20px;
            font-size: 13px;
        }
        div.formulario
        {
            margin-left: 20px;
            float: left;
        }
        span.subtitulo
        {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 12px;
        }
        h1, h3
        {
        text-align: center;
            margin: 0;
        }
        h1
        {
            font-size: large;
        }
        h1
        {
            margin-bottom: 10px;
        }
        h3.inst
        {
        text-align:left;
        }
        h4
        {
            text-align: center;
            color: white;
            background-color: navy;
            margin-top: 0;
            margin-bottom: 3px;
        }
        p
        {
            margin-bottom: 10;
            text-align: justify;
            margin-top: 5px;
        }
        ol
        {
            margin: 0;
        }
        img
        {
            margin: 10px;
        }
        table
        {
            text-align: center;
        }
    </style>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Question&aacute;rio DI/Design 2009 1º Semestre</title>
</head>
<body>
<div class="td">
    <div class="cabecalho">
        <div class="titulo">
            <h1>
                Questionário de Avaliação dos Professores - 2009 1° semestre</h1>
            <h3>
                Desenho Industril / Design - Faac - Unesp</h3>
        </div>
        <div class="inst">
            <h3 class="inst">
                Instruções</h3>
            <ol>
                <li>Preencha os campos Nome e RA (estes dados não serão divulgados).</li>
                <li>Selecione o nome da disciplina e do professor por ordem de ocorrência na semana.</li>
                <li>Dê notas de 1 a 10 para cada item, relativos ao desempenho do professor no presente
                    semestre.</li>
                <li>Adicione mais aulas conforme o necessário.</li>
                <li>Se possível, escreva um comentário.</li>
            </ol>
        </div>
    </div>
    <div class="conteudo">
        <h4>
            ITENS AVALIADOS</h4>
        <p>
            <span class="subtitulo">A. Organização da disciplina:</span><br />
            Fornece programa de aula no início do semestre e bibliografia; É eficiente no formato
            da aula e nos materiais de apoio.
        </p>
        <p>
            <span class="subtitulo">B. Domínio do conteúdo:</span><br />
            Conhece profundamente a disciplina; seguro na ministração das aulas; conhecimentos
            atualizados e inovações da área; responde efetivamente as questões formuladas.
        </p>
        <p>
            <span class="subtitulo">C. Clareza e objetividade em sala de aula:</span><br />
            Demonstra planejamento da aula; vincula teoria e prática; formula perguntas de natureza
            exploratória, fala de maneira clara e precisa.
        </p>
        <p>
            <span class="subtitulo">D. Conduta e relacionamento:</span><br />
            Respeito, ética e prestatividade dentro e fora da sala de aula; Está atento às dificuldades
            de aprendizagem dos alunos; Postura, conduta e apresentação.</p>
        <p>
            <span class="subtitulo">E. Assiduidade:</span><br />
            Comparece as aulas; avisa antecipadamente as faltas; justifica e repõe ausências,
            cumpre o programa semestral; aproveita e é eficiente com a carga horária.
        </p>
        <p>
            <span class="subtitulo">F. Acompanhamento de trabalhos acadêmicos:</span><br />
            Oferece disponibilidade de atendimento e acompanhamento para os trabalhos propostos;
            usa os horários de permanência para atendimento de trabalhos da disciplina ou extracurriculares.
        </p>
        <p>
            <span class="subtitulo">G. Avaliação da aprendizagem:</span><br />
            elabora adequadamente os instrumentos de avaliação; analisa com os alunos os resultados
            da avaliação.
        </p>
        <p>
            <span class="subtitulo">H. Pesquisa:</span><br />
            Estimula, orienta e oferece meios de acesso para atividades de pesquisa.
        </p>
    </div>
    <div class="formulario">
        <form id="frmAvaliacao" runat="server">
        <div>
            <p>
                <asp:Label ID="lblNome" runat="server" Text="Nome"></asp:Label>
                <br />
                <asp:TextBox ID="txtNome" runat="server" Width="300px"></asp:TextBox>
                <asp:Label ID="lblNomeErro" runat="server" Text="Campo Obrigatório!" ForeColor="Red"
                    Visible="false"></asp:Label></p>
            <p>
                <asp:Label ID="lblRA" runat="server" Text="RA"></asp:Label>
                <br />
                <asp:TextBox ID="txtRA" runat="server" MaxLength="6"></asp:TextBox>
                <asp:Label ID="lblRAErro" runat="server" Text="Campo Obrigatório!" ForeColor="Red"
                    Visible="false"></asp:Label></p>
            <br />
            <table>
                <asp:Repeater ID="rptForm" runat="server" OnItemCommand="rptForm_ItemCommand">
                    <HeaderTemplate>
                        <tr>
                            <td>
                                <asp:Label ID="lblMateria" runat="server" Text="Aula" CssClass="lblMateria"></asp:Label>
                            </td>
                            <td>
                                <asp:Label ID="lblA" runat="server" Text="A" CssClass="lblA" ToolTip="Organização da disciplina"></asp:Label>
                            </td>
                            <td>
                                <asp:Label ID="lblB" runat="server" Text="B" CssClass="lblB" ToolTip="Domínio do conteúdo"></asp:Label>
                            </td>
                            <td>
                                <asp:Label ID="lblC" runat="server" Text="C" CssClass="lblC" ToolTip="Clareza e objetividade em sala de aula"></asp:Label>
                            </td>
                            <td>
                                <asp:Label ID="lblD" runat="server" Text="D" CssClass="lblD" ToolTip="Conduta e relacionamento"></asp:Label>
                            </td>
                            <td>
                                <asp:Label ID="lblE" runat="server" Text="E" CssClass="lblE" ToolTip="Assiduidade"></asp:Label>
                            </td>
                            <td>
                                <asp:Label ID="lblF" runat="server" Text="F" CssClass="lblF" ToolTip="Acompanhamento de trabalhos acadêmicos"></asp:Label>
                            </td>
                            <td>
                                <asp:Label ID="lblG" runat="server" Text="G" CssClass="lblG" ToolTip="Avaliação da aprendizagem"></asp:Label>
                            </td>
                            <td>
                                <asp:Label ID="lblH" runat="server" Text="H" CssClass="lblH" ToolTip="Pesquisa"></asp:Label>
                            </td>
                        </tr>
                    </HeaderTemplate>
                    <ItemTemplate>
                        <tr>
                            <td>
                                <asp:DropDownList ID="ddlMateria" runat="server" CssClass="ddlMateria">
                                    <asp:ListItem Text="Selecione" Value="" Selected="True"></asp:ListItem>
                                    <asp:ListItem Text="2ª feira - manhã - bigal - animação"></asp:ListItem>
                                    <asp:ListItem Text="2ª feira - manhã - m.luiza - hist. arte I"></asp:ListItem>
                                    <asp:ListItem Text="2ª feira - manhã - paula - met. científica"></asp:ListItem>
                                    <asp:ListItem Text="2ª feira - manhã - ronise -  projeto I"></asp:ListItem>
                                    <asp:ListItem Text="2ª feira - noite - dorival - ling. contemp."></asp:ListItem>
                                    <asp:ListItem Text="2ª feira - noite - furtado - foto II"></asp:ListItem>
                                    <asp:ListItem Text="2ª feira - noite - glória - met. projeto. II"></asp:ListItem>
                                    <asp:ListItem Text="2ª feira - noite - j.marcelo - prod. gráf. II"></asp:ListItem>
                                    <asp:ListItem Text="2ª feira - noite - marizilda - desenho III"></asp:ListItem>
                                    <asp:ListItem Text="2ª feira - noite - nakata - des. observação I"></asp:ListItem>
                                    <asp:ListItem Text="2ª feira - noite - osmar - modelagem"></asp:ListItem>
                                    <asp:ListItem Text="2ª feira - noite - plácido - des. observação I"></asp:ListItem>
                                    <asp:ListItem Text="2ª feira - noite - reinaldo - of. metal"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - manhã - cássia - tipografia II"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - manhã - marta - ergonomia"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - manhã - glória - metod.pjto. II"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - manhã - sérgio busato - foto II"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - manhã - vânia - desenho I"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - tarde - dorival - plástica I"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - tarde - j.marcelo - projeto V"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - tarde - sileide - projeto I"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - tarde - winck - semiótica II"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - noite - bigal - animação"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - noite - carbone - filosofia (turma B)"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - noite - carbone - filosofia (turma C)"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - noite - cássia - tipografia II"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - noite - cássia - prod. gráfica II"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - noite - furtado - foto II"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - noite - guarnetti - el. máquina"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - noite - m.luiza - hist. arte I   (turma B)"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - noite - m.luiza - hist. arte I (turma C)"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - noite - paula - met. cient."></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - noite - sileide - projeto I"></asp:ListItem>
                                    <asp:ListItem Text="3ª feira - noite - winck - semiotica I"></asp:ListItem>
                                    <asp:ListItem Text="4ª feira - manhã - carbone - filosofia"></asp:ListItem>
                                    <asp:ListItem Text="4ª feira - manhã - furtado - foto II"></asp:ListItem>
                                    <asp:ListItem Text="4ª feira - manhã - marizilda - desenho III"></asp:ListItem>
                                    <asp:ListItem Text="4ª feira - manhã - osmar- of. mat. plásticos"></asp:ListItem>
                                    <asp:ListItem Text="4ª feira - tarde - fábio - of. madeira"></asp:ListItem>
                                    <asp:ListItem Text="4ª feira - noite - cássia - tipografia II"></asp:ListItem>
                                    <asp:ListItem Text="4ª feira - noite - cássia - prod. gráfica II"></asp:ListItem>
                                    <asp:ListItem Text="4ª feira - noite - fábio - of.   madeira"></asp:ListItem>
                                    <asp:ListItem Text="4ª feira - noite - goya - plástica I"></asp:ListItem>
                                    <asp:ListItem Text="4ª feira - noite - marar - el. computação"></asp:ListItem>
                                    <asp:ListItem Text="4ª feira - noite - marizilda - desenho III"></asp:ListItem>
                                    <asp:ListItem Text="4ª feira - noite - paschoarelli - ergonomia"></asp:ListItem>
                                    <asp:ListItem Text="4ª feira - noite - reinaldo - teor. fab."></asp:ListItem>
                                    <asp:ListItem Text="4ª feira - noite - vânia - desenho I"></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - manhã - cássia - prod.gráf. II"></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - manhã - celso - el. computação"></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - manhã - dorival - ling.contemp."></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - manhã - j.marcelo - rec. computac."></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - manhã - nakata - des. observ. I"></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - manhã - olímpio - his. arte III"></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - tarde - fábio - of. madeira"></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - tarde - susy - projeto I"></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - noite - celso - el. computação"></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - noite - chico - modelagem"></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - noite - dorival - ling.contemp."></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - noite - glória - met. projeto II"></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - noite - goya - plástica I"></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - noite - paschoarelli - ergonomia"></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - noite - plácido - projeto I"></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - noite - sérgio busato - foto II"></asp:ListItem>
                                    <asp:ListItem Text="5ª feira - noite - vânia - desenho I"></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - manhã - chico - modelagem"></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - manhã - eiji - prod.gráfica II"></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - manhã - marta - int. design"></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - manhã - suzi - projeto I"></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - tarde - priscila - antropol."></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - noite - eiji - rec. computac. (turma B)"></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - noite - eiji - rec. computac. (turma   C)"></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - noite - gilberto - mat. construção"></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - noite - goya - projeto I"></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - noite - marta - int. design"></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - noite - olimpio - hist.arte III (turma B)"></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - noite - olimpio - hist.arte III (turma C)"></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - noite - osmar -  of. mat. plásticos"></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - noite - priscila - antropol."></asp:ListItem>
                                    <asp:ListItem Text="6ª feira - noite - ronise - projeto I"></asp:ListItem>
                                    <asp:ListItem Text="sábado - eiji    - projeto V"></asp:ListItem>
                                    <asp:ListItem Text="sábado - sileide - projeto V"></asp:ListItem>
                                    <asp:ListItem Text="sábado - susy    - projeto I"></asp:ListItem>
                                </asp:DropDownList>
                            </td>
                            <td>
                                <asp:TextBox ID="txtA" runat="server" Width="20" CssClass="txtA" MaxLength="2" Text='<%# Bind("A") %>'></asp:TextBox>
                            </td>
                            <td>
                                <asp:TextBox ID="txtB" runat="server" Width="20" CssClass="txtB" MaxLength="2" Text='<%# Bind("B") %>'></asp:TextBox>
                            </td>
                            <td>
                                <asp:TextBox ID="txtC" runat="server" Width="20" CssClass="txtC" MaxLength="2" Text='<%# Bind("C") %>'></asp:TextBox>
                            </td>
                            <td>
                                <asp:TextBox ID="txtD" runat="server" Width="20" CssClass="txtD" MaxLength="2" Text='<%# Bind("D") %>'></asp:TextBox>
                            </td>
                            <td>
                                <asp:TextBox ID="txtE" runat="server" Width="20" CssClass="txtE" MaxLength="2" Text='<%# Bind("E") %>'></asp:TextBox>
                            </td>
                            <td>
                                <asp:TextBox ID="txtF" runat="server" Width="20" CssClass="txtF" MaxLength="2" Text='<%# Bind("F") %>'></asp:TextBox>
                            </td>
                            <td>
                                <asp:TextBox ID="txtG" runat="server" Width="20" CssClass="txtG" MaxLength="2" Text='<%# Bind("G") %>'></asp:TextBox>
                            </td>
                            <td>
                                <asp:TextBox ID="txtH" runat="server" Width="20" CssClass="txtH" MaxLength="2" Text='<%# Bind("H") %>'></asp:TextBox>
                            </td>
                            <td>
                                <asp:Button ID="btnRemoveLine" runat="server" Text="X" CommandName="Remove" />
                            </td>
                        </tr>
                    </ItemTemplate>
                </asp:Repeater>
            </table>
            <asp:Label ID="lblCamposErro" runat="server" Text="Escolha pelo menos uma aula e dê notas de 1 a 10 para todos os itens."
                ForeColor="Red" Visible="false"></asp:Label></p>
            <br />
            <asp:Button ID="btnAddLine" runat="server" Text="Adicionar Aula" OnClick="btnAddLine_Click" />
            <br />
            <br />
            <p>
                <asp:Label ID="lblObservacoes" runat="server" Text="Observa&ccedil;&otilde;es"></asp:Label>
                <br />
                <asp:TextBox ID="txtObservacoes" runat="server" Height="93px" TextMode="MultiLine"
                    Width="389px"></asp:TextBox>
            </p>
            <asp:Button ID="btnFinish" runat="server" Text="Enviar" OnClick="btnFinish_Click" />
        </div>
        </form>
    </div>
    <div class="rodape">
        <div class="texto">
            <p>
                Esse questionário tem por objetivo <b>avaliar</b> e <b>orientar</b> os docentes
                do <b>Departamento de Design</b> para a melhoria do ensino e foi feito com o apoio
                do <b>Conselho Departamental</b>, <b>Conselho de Curso de Design</b> e do <b>Núcleo
                    de Pesquisa de Opinião Pública da Unesp</b>, baseado no questionário utilizado
                pelo CADI, Centro Acadêmico de Desenho Industrial da UFPR. Uma iniciativa CADUnesp.
            </p>
            <div>
                Apoio:<a href="http://www.ltia.fc.unesp.br" target="_blank">Laboratório de Tecnologia da Informação Aplicada - LTIA</a> 
                <br />
                <asp:Label ID="lblPinda" runat="server" Text="Webmaster: Pedro Cavalca - pedro.cavalca@ltia.fc.unesp.br "></asp:Label>
            </div>
        </div>
        <div class="img">
            <img height="50" style="margin:0 0 0 0" alt="Logotipo Faac" src="faac.gif"/>
            <img height="50" style="margin:0 0 0 10px"alt="Logotipo Unesp" src="unesp.gif"/>
        </div>
    </div>
    </div>
</body>
</html>
