<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Conselho Muncipal de Cultura de Brusque - SC</title>
    <meta charsert='UTF-8' />
    <meta name="viewport" content="width=device-width,user-scalable=0" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <header>
        <div class="box_header">
            <div class="info_header">
                <span class="namepag">Conselho Municipal de Cultura - Brusque - SC</span>
                <img class="logobq" src="../image/logo_bq.png" />
                <span class="contato">conselho@fcbrusque.sc.gov.br</span>
            </div>
            <div class="faixa_menu">
                <div class="logo">
                    <img class="logo_name" src="../image/logo.png" />
                </div>
                <div class="menu">
                    <nav>
                        <ul>
                            <li class="action">HOME</li>
                            <li onclick="sobre()">SOBRE</li>
                            <li onclick="membros()">MEMBROS</li>
                            <li onclick="editais()">EDITAIS</li>
                            <li onclick="irlei()">LEI</li>
                            <li onclick="aparecerlogin()"> <a style="color: white; text-decoration: none;" href="user.php">PERFIL</a></li>
                            <li onclick="logout()"> <a style="color: white; text-decoration: none;">SAIR</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="box_banner">
            <img class="image_banner" src="../image/banner.jpg" />
        </div>
        <div class="box_ajuda">
            <h1>AJUDA</h1>
            <label>
                E-mail para recuperação:
                <input type="e-mail" name="e-mail" required /> <br /><br />
                Criar nova Senha:
                <input type="password" name="senha" required /> <br /><br />
                Confirmar nova Senha:
                <input type="password" name="senha" required /> <br /><br />
                <a href="paginicial.html"><input type="submit" value="Confirmar" class="ffcadastro" /></a>
                <input type="submit" value="Voltar" class="fffcadastro" onclick="voltar2()" />
            </label>
        </div>

        <div class="back_faixa">
            <h1 class="title_sobre">SOBRE</h1>
        </div>
        <div class="box_sobre">
            <div class="text_sobre">
                <h1 class="title_sobre">Conselho Municipal de Cultura de Brusque</h1>
                <p>O conselho Municipal de Cultura de Brusque é um órgão permanente igualitário, consultivo e
                    deliberativo, integrante da estrutura político-administrativa instituída pela Lei do Poder
                    Executivo, composta por membros do Poder Público e da Sociedade Civil. Compete ao Conselho propor e
                    aprovar as premissas gerais do Plano de Cultura e acompanhar sua implementação, avaliar e aprovar as
                    premissas do Sistema de Financiamento da Cultura e fiscalizar a aplicação dos recursos recebidos dos
                    repasses federais. Também se atribui o incentivo à promoção e divulgação dos valores humanos e
                    tradições locais, o desenvolvimento do intercâmbio cultural e artístico com outros municípios,
                    estados e países, mediando o aperfeiçoamento e valorização dos profissionais da cultura, a
                    cooperação com a União e o Estado no proteção de locais e objetos de interesse histórico, artístico
                    e arquitetônico do concelho e apresentação de propostas de criação, abertura e manutenção de espaços
                    públicos, capazes de garantir a divulgação e apresentação de manifestações culturais, científicas e
                    artísticas por entidades públicas e privadas.</p>
            </div>
            <div class="boximg1">
                <img class="fbq" src="../image/fundbq.png" />
                <h1 class="textimg">Conselho Municipal de Cultura de Brusque - SC</h1>
            </div>
        </div>
        <div class="back_faixa">
            <h1 class="title_sobre">MEMBROS</h1>
        </div>
        <div class="box_mm">
            <div class="box_membros1">
                <div class="membros">
                    <h1>Ivan Jasper</h1>
                    <p>Função: Presidente</p>
                </div>
                <div class="membros">
                    <h1>Rafaela Felipe Kohler</h1>
                    <p>Função: Vice-Presidente</p>
                </div>
                <div class="membros">
                    <h1>Luaba Franciele Fernandes</h1>
                    <p>Função: Primeira Secretária</p>
                </div>
            </div>
            <div class="box_membros">
                <div class="membros">
                    <h1>Representante Chefe do Poder Executivo</h1>
                    <p>Titular: Ana Helena Boose</p>
                    <p>Suplente: Herbert Tavares</p>
                </div>
                <div class="membros">
                    <h1>Representante Chefe do Poder Executivo</h1>
                    <p>Titular: Ivan Jasper</p>
                    <p>Suplente: Ademir José Jorge</p>
                </div>
                <div class="membros">
                    <h1>Representante Secretaria de Controle Interno</h1>
                    <p>Titular: Gilberto Raul Scherer</p>
                    <p>Suplente: Daniel Felicio </p>
                </div>
            </div>
            <div class="box_membros">
                <div class="membros">
                    <h1>Representante da Secretaria de Educação</h1>
                    <p>Titular: Franciele Márcia Mayer</p>
                    <p>Suplente: Maria Ivone Crespi Noldin </p>
                </div>
                <div class="membros">
                    <h1>Representante da Fundação Cultural </h1>
                    <p>Titular: Elisane Marcos</p>
                    <p>Suplente: Jaqueline da Silva </p>
                </div>
                <div class="membros">
                    <h1>Representante da Biblioteca Pública Ary Cabral </h1>
                    <p>Titular: Igor Alves Balbinot</p>
                    <p>Suplente: Cleber da Silva André </p>
                </div>
            </div>
            <div class="box_membros">
                <div class="membros">
                    <h1>Representante da Secretária de Comunicação Social </h1>
                    <p>Titular: José Carlos Paulini </p>
                </div>
                <div class="membros">
                    <h1>Representante da Secretária de Governo e Gestão Estratégica </h1>
                    <p>Titular: Rafael Scheibel de Andrade </p>
                    <p>Suplente: Ademilson Gamba </p>
                </div>
                <div class="membros">
                    <h1>Representantes de entidades não governamentais com efetiva atuação na área cultural </h1>
                    <p>Titular: Franciele Fernandes</p>
                    <p>Suplente: Elisiane Mafezolli </p>
                </div>
            </div>
            <div class="box_membros">
                <div class="membros">
                    <h1>Representante da Música </h1>
                    <p>Titular: Edelcio Cardoso </p>
                </div>
                <div class="membros">
                    <h1>Representante de Arte Cênica </h1>
                    <p>Titular: Mayara Luana Voltolini</p>
                    <p>Suplente: Roner Lucad Becker da Luz </p>
                </div>
                <div class="membros">
                    <h1>Representante das Artes Visuais</h1>
                    <p>Titular: Rafaela Felipe Kohler </p>
                    <p>Suplente: Ricardo Weschenfelder
                    <p>
                </div>
            </div>
            <div class="box_membros">
                <div class="membros">
                    <h1>Representante da Literatura </h1>
                    <p>Titular: Luiz Gustavo Boscariol </p>
                </div>
                <div class="membros">
                    <h1>Representante dos Museus e Arquivos Históricos </h1>
                    <p>Titular: Angela Sikorski Santos</p>
                    <p>Suplente: Larissa Fischer </p>
                </div>
                <div class="membros">
                    <h1>Representante da Arte Popular </h1>
                    <p>Titular: Silvio José da Luz</p>
                </div>
            </div>
        </div>
        <div class="back_faixa">
            <h1 class="title_sobre">EDITAIS</h1>
        </div>
        <div class="box-editais">
            <h1>2021</h1>
            <p><a href="../editais/primeiro.pdf" target="_blank"> EDITAL-DE-CONCURSO-03.2021-FCB-PREMIO-WILSON-SANTOS-1
                </a></p>
            <p><a href="../editais/segundo.odt" target="_blank">
                    Primeira_Retificacao_Edital_03.2021_FCB-Premio_Wilson_Santos</a></p>

            <h1>2019</h1>
            <p><a href="../editais/terceiro.pdf" target="_blank">Documento-DOM-Habilitados-Final-Edital-02.2019-FMAC</a>
            </p>
            <p><a href="../editais/quarto.pdf" target="_blank">Edital-02.2019-FMAC</a></p>
            <p><a href="../editais/quinto.pdf" target="_blank">ERRATA-EDITAL-02.2019-FMAC</a></p>
            <p><a href="../editais/sexto.pdf" target="_blank">Listagem-Classificacao-Final-Edital-02.2019-FMAC</a></p>

            <h1>2018</h1>
            <p><a href="../editais/setimo.pdf" target="_blank">1530746173_edital_012018_fmacerrata</a></p>
            <p><a href="../editais/oitavo.pdf"
                    target="_blank">1531428670_edital_0012018_fmac_relatrio_final_da_habilitacao_dos_projetos_inscritos</a>
            </p>
            <p><a href="../editais/nono.pdf" target="_blank">1532984505_edital_n_01_2018fmacprorrogao_de_prazos</a></p>
            <p><a href="editais/decimo" target="_blank">1534017293_edital_012018_fmaccmcfcb</a></p>
            <p><a href="../editais/decimopri.pdf" target="_blank">Edital-Completo-da-Cultura-001-2018-</a></p>

            <h1>2017</h1>
            <p class="ult"><a href="../editais/decimoseg.pdf" target="_blank">Edital-CMC-2017</a></p>

        </div>
        <div class="back_faixa">
            <h1 class="title_sobre">LEI</h1>
        </div>
        <div class="text_lei">
            <h1>LEI N°3073/2008 DE 04/03/2008</h1>
            <P>DISPÕE SOBRE O CONSELHO MUNICIPAL DE CULTURA DE BRUSQUE E DÁ OUTRAS PROVIDÊNCIAS.</P>
        </div>
        <div class="lei_ver" onclick="verlei()">
            VER LEI COMPLETA
            <img class="setinha" src="../image/seta.png" />
        </div>
        <div class="lei">
            <p>O PREFEITO MUNICIPAL DE BRUSQUE, Faço saber que a Câmara Municipal aprovou e eu sanciono e promulgo a
                seguinte Lei:</p>
            <p>Art. 1º O Conselho Municipal de Cultura de Brusque, órgão colegiado de caráter formulador, normativo,
                deliberador e controlador da política pública de cultura do município de Brusque, vinculado à Fundação
                Cultural de Brusque, tem suas atribuições, competências, estrutura e funcionamento definidos nesta Lei.
                (Redação dada pela Lei nº 3664/2013)</p><br />
            <p>Art. 2º Compete ao Conselho Municipal de Cultura:</p>
            <p>I - regulamentar, acompanhar, propor e orientar a política municipal de cultura;</p>
            <p>II - apreciar e aprovar os projetos culturais financiados pelo Fundo Municipal de Apoio à Cultura,
                respeitadas as disposições legais e regulamentares, as diretrizes da política cultural e o planejamento
                das aplicações financeiras do Fundo;</p>
            <p>III - acompanhar e fiscalizar a execução dos projetos aprovados pelo Fundo Municipal de Apoio à Cultura,
                promovendo as medidas saneadoras que estiverem ao seu alcance;</p>
            <p>IV - deliberar sobre a contratação de consultores e pareceristas;</p>
            <p>V - receber e manifestar-se acerca das sugestões da Fundação Cultural de Brusque. (Redação dada pela Lei
                nº 3664/2013)</p>
            <p>VI - fomentar a elaboração do Plano Municipal de Cultura, fiscalizando e orientando a sua execução;</p>
            <p>VII - assistir e apoiar a todas as manifestações culturais, assegurando-lhes inteira liberdade;</p>
            <p>VIII - fomentar a criação de entidades locais de Cultura;</p>
            <p>IX - propor medidas que possibilitem a livre circulação de bens e serviços culturais;</p>
            <p>X - propor e incentivar ações que visem o desenvolvimento artístico-cultural do Município;</p>
            <p>XI - articular-se com órgãos federais, estaduais e municipais, voltados às atividades culturais, de modo
                a assegurar o atendimento das necessidades dentro da realidade do Município e um desenvolvimento
                equilibrado dos programas culturais, integrando o município de Brusque no Sistema Nacional e no Sistema
                Estadual de Cultura;</p>
            <p>XII - instituir e regulamentar a outorga de títulos honoríficos;</p>
            <p>XIII - manter intercâmbio cultural com países, Estados da Federação e outros Municípios;</p>
            <p>XIV - incentivar o aperfeiçoamento e a valorização dos profissionais da cultura;</p>
            <p>XV - elaborar e aprovar os editais que regularão a forma de financiamento de projetos culturais;</p>
            <p>XVI - elaborar seu regimento interno;</p>
            <p>XVII - outras atribuições que lhe forem conferidas.</p><br />
            <p>Art. 3º O Conselho Municipal de Cultura terá composição paritária e será integrado por 16 (dezesseis)
                conselheiros titulares e igual número de suplentes, na seguinte conformidade:</p>
            <p>I - 08 (oito) representantes e seus respectivos suplentes do Poder Público Municipal, assim
                especificados:</p>
            <p>a) 02 (dois) representantes de livre escolha do Chefe do Poder Executivo;</p>
            <p>b) 01 (um) representante da Secretaria de Controle Interno;</p>
            <p>c) 01 (um) representante da Secretaria de Educação;</p>
            <p>d) 01 (um) representante da Fundação Cultural de Brusque;</p>
            <p>e) 01 (um) representante da Biblioteca Pública Municipal Ary Cabral;</p>
            <p>f) 01 (um) representante da Secretaria de Comunicação Social;</p>
            <p>g) 01 (um) representante da Secretaria de Governo e Gestão Estratégica.</p><br />
            <p>II - 08 (oito) representantes e seus respectivos suplentes representativos da sociedade civil, por áreas
                assim especificadas:</p>
            <p>a) 02 (dois) representantes de entidades não governamentais com efetiva atuação na área cultural;</p>
            <p>a) 01 (um) representante da Música;</p>
            <p>b) 01 (um) representante das Artes Cênicas;</p>
            <p>c) 01 (um) representante das Artes Visuais;</p>
            <p>d) 01 (um) representante da Literatura;</p>
            <p>e) 01 (um) representante dos Museus e Arquivos Históricos;</p><br />
            <p>f) 01 (um) representante da Arte Popular. (Redação dada pela Lei nº 3664/2013)</p><br />
            <p>§ 1º Os conselheiros titulares e suplentes representantes dos órgãos públicos serão designados pelo
                Prefeito Municipal, dentre pessoas com poderes de decisão no âmbito do respectivo órgão. (Redação dada
                pela Lei nº 3664/2013)</p>
            <p>§ 2º Os representantes titulares e suplentes da sociedade civil serão escolhidos pelo voto dos
                integrantes de cada área, reunidos em assembléia convocada e mediada pelo Conselho Municipal de Cultura,
                preferencialmente durante a Conferência Municipal de Cultura, mediante edital publicado na imprensa e
                amplamente divulgado no Município.</p><br />
            <p>§ 3º Os conselheiros representantes do poder público e da sociedade civil e respectivos suplentes
                exercerão mandato de 02 (dois) anos, admitindo-se a recondução.</p><br />
            <p>§ 4º O servidor público não pode figurar como representante da sociedade civil. (Redação dada pela Lei nº
                3664/2013)</p><br />
            <p>§ 5º A nomeação e posse dos membros do Conselho Municipal de Cultura de Brusque far-se-á pelo Prefeito
                Municipal, obedecidos os critérios de escolha previstos nesta Lei. (Redação acrescida pela Lei nº
                3664/2013)</p><br />
            <p>Art. 4º O Conselho será dirigido por um Presidente, um Vice-Presidente e um Secretário que serão eleitos
                pelos Conselheiros Municipais de Cultura, para mandato de 02 (dois) anos, dentre os conselheiros,
                através de escrutínio secreto, pela maioria absoluta do Colegiado.</p> <br />
            <p>Art. 5º A função exercida no Conselho é considerada serviço relevante, não será remunerada e ao servidor
                público que a exercer serão concedidos todos os meios para seu desempenho.</p><br />
            <p>Art. 6º O Conselho terá sede na Fundação Cultural de Brusque e realizará reuniões no período e na forma
                fixados no respectivo Regimento Interno.</p><br />
            <p>Art. 7º O Conselho manifestar-se-á através de normatização, orientação e decisões e seus atos serão
                publicados na forma de Atos Legais do Município.</p><br />
            <p>Art. 8º A Fundação Cultural de Brusque oferecerá suporte técnico e administrativo ao Conselho, para o
                fiel desempenho de suas atribuições. (Redação dada pela Lei nº 3664/2013)</p><br />
            <p>Art. 9º Esta lei entra em vigor na data da sua publicação.</p><br />
            <p>Art. 10 Ficam revogadas as disposições em contrário constantes nas Leis nº 1812, de 08 de novembro de
                1993 e nº 2.581, de 18 de janeiro de 2002.</p><br /><br />
            <p>Prefeitura Municipal de Brusque, em 04 de março de 2008.</p>





        </div>
    </section>
    <footer>
        <div class="fim">
            <h1>Contato: conselho@fcbrusque.sc.gov.br</h1>
            <p>Página criada pelos alunos da segunda fase de Sistemas de Informação - Unifebe - Brusque - SC</p>
        </div>
    </footer>
    <script type="text/javascript" src="../js/curri.js"></script>
</body>

</html>