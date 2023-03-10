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
                E-mail para recupera????o:
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
                <p>O conselho Municipal de Cultura de Brusque ?? um ??rg??o permanente igualit??rio, consultivo e
                    deliberativo, integrante da estrutura pol??tico-administrativa institu??da pela Lei do Poder
                    Executivo, composta por membros do Poder P??blico e da Sociedade Civil. Compete ao Conselho propor e
                    aprovar as premissas gerais do Plano de Cultura e acompanhar sua implementa????o, avaliar e aprovar as
                    premissas do Sistema de Financiamento da Cultura e fiscalizar a aplica????o dos recursos recebidos dos
                    repasses federais. Tamb??m se atribui o incentivo ?? promo????o e divulga????o dos valores humanos e
                    tradi????es locais, o desenvolvimento do interc??mbio cultural e art??stico com outros munic??pios,
                    estados e pa??ses, mediando o aperfei??oamento e valoriza????o dos profissionais da cultura, a
                    coopera????o com a Uni??o e o Estado no prote????o de locais e objetos de interesse hist??rico, art??stico
                    e arquitet??nico do concelho e apresenta????o de propostas de cria????o, abertura e manuten????o de espa??os
                    p??blicos, capazes de garantir a divulga????o e apresenta????o de manifesta????es culturais, cient??ficas e
                    art??sticas por entidades p??blicas e privadas.</p>
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
                    <p>Fun????o: Presidente</p>
                </div>
                <div class="membros">
                    <h1>Rafaela Felipe Kohler</h1>
                    <p>Fun????o: Vice-Presidente</p>
                </div>
                <div class="membros">
                    <h1>Luaba Franciele Fernandes</h1>
                    <p>Fun????o: Primeira Secret??ria</p>
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
                    <p>Suplente: Ademir Jos?? Jorge</p>
                </div>
                <div class="membros">
                    <h1>Representante Secretaria de Controle Interno</h1>
                    <p>Titular: Gilberto Raul Scherer</p>
                    <p>Suplente: Daniel Felicio </p>
                </div>
            </div>
            <div class="box_membros">
                <div class="membros">
                    <h1>Representante da Secretaria de Educa????o</h1>
                    <p>Titular: Franciele M??rcia Mayer</p>
                    <p>Suplente: Maria Ivone Crespi Noldin </p>
                </div>
                <div class="membros">
                    <h1>Representante da Funda????o Cultural </h1>
                    <p>Titular: Elisane Marcos</p>
                    <p>Suplente: Jaqueline da Silva </p>
                </div>
                <div class="membros">
                    <h1>Representante da Biblioteca P??blica Ary Cabral </h1>
                    <p>Titular: Igor Alves Balbinot</p>
                    <p>Suplente: Cleber da Silva Andr?? </p>
                </div>
            </div>
            <div class="box_membros">
                <div class="membros">
                    <h1>Representante da Secret??ria de Comunica????o Social </h1>
                    <p>Titular: Jos?? Carlos Paulini </p>
                </div>
                <div class="membros">
                    <h1>Representante da Secret??ria de Governo e Gest??o Estrat??gica </h1>
                    <p>Titular: Rafael Scheibel de Andrade </p>
                    <p>Suplente: Ademilson Gamba </p>
                </div>
                <div class="membros">
                    <h1>Representantes de entidades n??o governamentais com efetiva atua????o na ??rea cultural </h1>
                    <p>Titular: Franciele Fernandes</p>
                    <p>Suplente: Elisiane Mafezolli </p>
                </div>
            </div>
            <div class="box_membros">
                <div class="membros">
                    <h1>Representante da M??sica </h1>
                    <p>Titular: Edelcio Cardoso </p>
                </div>
                <div class="membros">
                    <h1>Representante de Arte C??nica </h1>
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
                    <h1>Representante dos Museus e Arquivos Hist??ricos </h1>
                    <p>Titular: Angela Sikorski Santos</p>
                    <p>Suplente: Larissa Fischer </p>
                </div>
                <div class="membros">
                    <h1>Representante da Arte Popular </h1>
                    <p>Titular: Silvio Jos?? da Luz</p>
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
            <h1>LEI N??3073/2008 DE 04/03/2008</h1>
            <P>DISP??E SOBRE O CONSELHO MUNICIPAL DE CULTURA DE BRUSQUE E D?? OUTRAS PROVID??NCIAS.</P>
        </div>
        <div class="lei_ver" onclick="verlei()">
            VER LEI COMPLETA
            <img class="setinha" src="../image/seta.png" />
        </div>
        <div class="lei">
            <p>O PREFEITO MUNICIPAL DE BRUSQUE, Fa??o saber que a C??mara Municipal aprovou e eu sanciono e promulgo a
                seguinte Lei:</p>
            <p>Art. 1?? O Conselho Municipal de Cultura de Brusque, ??rg??o colegiado de car??ter formulador, normativo,
                deliberador e controlador da pol??tica p??blica de cultura do munic??pio de Brusque, vinculado ?? Funda????o
                Cultural de Brusque, tem suas atribui????es, compet??ncias, estrutura e funcionamento definidos nesta Lei.
                (Reda????o dada pela Lei n?? 3664/2013)</p><br />
            <p>Art. 2?? Compete ao Conselho Municipal de Cultura:</p>
            <p>I - regulamentar, acompanhar, propor e orientar a pol??tica municipal de cultura;</p>
            <p>II - apreciar e aprovar os projetos culturais financiados pelo Fundo Municipal de Apoio ?? Cultura,
                respeitadas as disposi????es legais e regulamentares, as diretrizes da pol??tica cultural e o planejamento
                das aplica????es financeiras do Fundo;</p>
            <p>III - acompanhar e fiscalizar a execu????o dos projetos aprovados pelo Fundo Municipal de Apoio ?? Cultura,
                promovendo as medidas saneadoras que estiverem ao seu alcance;</p>
            <p>IV - deliberar sobre a contrata????o de consultores e pareceristas;</p>
            <p>V - receber e manifestar-se acerca das sugest??es da Funda????o Cultural de Brusque. (Reda????o dada pela Lei
                n?? 3664/2013)</p>
            <p>VI - fomentar a elabora????o do Plano Municipal de Cultura, fiscalizando e orientando a sua execu????o;</p>
            <p>VII - assistir e apoiar a todas as manifesta????es culturais, assegurando-lhes inteira liberdade;</p>
            <p>VIII - fomentar a cria????o de entidades locais de Cultura;</p>
            <p>IX - propor medidas que possibilitem a livre circula????o de bens e servi??os culturais;</p>
            <p>X - propor e incentivar a????es que visem o desenvolvimento art??stico-cultural do Munic??pio;</p>
            <p>XI - articular-se com ??rg??os federais, estaduais e municipais, voltados ??s atividades culturais, de modo
                a assegurar o atendimento das necessidades dentro da realidade do Munic??pio e um desenvolvimento
                equilibrado dos programas culturais, integrando o munic??pio de Brusque no Sistema Nacional e no Sistema
                Estadual de Cultura;</p>
            <p>XII - instituir e regulamentar a outorga de t??tulos honor??ficos;</p>
            <p>XIII - manter interc??mbio cultural com pa??ses, Estados da Federa????o e outros Munic??pios;</p>
            <p>XIV - incentivar o aperfei??oamento e a valoriza????o dos profissionais da cultura;</p>
            <p>XV - elaborar e aprovar os editais que regular??o a forma de financiamento de projetos culturais;</p>
            <p>XVI - elaborar seu regimento interno;</p>
            <p>XVII - outras atribui????es que lhe forem conferidas.</p><br />
            <p>Art. 3?? O Conselho Municipal de Cultura ter?? composi????o parit??ria e ser?? integrado por 16 (dezesseis)
                conselheiros titulares e igual n??mero de suplentes, na seguinte conformidade:</p>
            <p>I - 08 (oito) representantes e seus respectivos suplentes do Poder P??blico Municipal, assim
                especificados:</p>
            <p>a) 02 (dois) representantes de livre escolha do Chefe do Poder Executivo;</p>
            <p>b) 01 (um) representante da Secretaria de Controle Interno;</p>
            <p>c) 01 (um) representante da Secretaria de Educa????o;</p>
            <p>d) 01 (um) representante da Funda????o Cultural de Brusque;</p>
            <p>e) 01 (um) representante da Biblioteca P??blica Municipal Ary Cabral;</p>
            <p>f) 01 (um) representante da Secretaria de Comunica????o Social;</p>
            <p>g) 01 (um) representante da Secretaria de Governo e Gest??o Estrat??gica.</p><br />
            <p>II - 08 (oito) representantes e seus respectivos suplentes representativos da sociedade civil, por ??reas
                assim especificadas:</p>
            <p>a) 02 (dois) representantes de entidades n??o governamentais com efetiva atua????o na ??rea cultural;</p>
            <p>a) 01 (um) representante da M??sica;</p>
            <p>b) 01 (um) representante das Artes C??nicas;</p>
            <p>c) 01 (um) representante das Artes Visuais;</p>
            <p>d) 01 (um) representante da Literatura;</p>
            <p>e) 01 (um) representante dos Museus e Arquivos Hist??ricos;</p><br />
            <p>f) 01 (um) representante da Arte Popular. (Reda????o dada pela Lei n?? 3664/2013)</p><br />
            <p>?? 1?? Os conselheiros titulares e suplentes representantes dos ??rg??os p??blicos ser??o designados pelo
                Prefeito Municipal, dentre pessoas com poderes de decis??o no ??mbito do respectivo ??rg??o. (Reda????o dada
                pela Lei n?? 3664/2013)</p>
            <p>?? 2?? Os representantes titulares e suplentes da sociedade civil ser??o escolhidos pelo voto dos
                integrantes de cada ??rea, reunidos em assembl??ia convocada e mediada pelo Conselho Municipal de Cultura,
                preferencialmente durante a Confer??ncia Municipal de Cultura, mediante edital publicado na imprensa e
                amplamente divulgado no Munic??pio.</p><br />
            <p>?? 3?? Os conselheiros representantes do poder p??blico e da sociedade civil e respectivos suplentes
                exercer??o mandato de 02 (dois) anos, admitindo-se a recondu????o.</p><br />
            <p>?? 4?? O servidor p??blico n??o pode figurar como representante da sociedade civil. (Reda????o dada pela Lei n??
                3664/2013)</p><br />
            <p>?? 5?? A nomea????o e posse dos membros do Conselho Municipal de Cultura de Brusque far-se-?? pelo Prefeito
                Municipal, obedecidos os crit??rios de escolha previstos nesta Lei. (Reda????o acrescida pela Lei n??
                3664/2013)</p><br />
            <p>Art. 4?? O Conselho ser?? dirigido por um Presidente, um Vice-Presidente e um Secret??rio que ser??o eleitos
                pelos Conselheiros Municipais de Cultura, para mandato de 02 (dois) anos, dentre os conselheiros,
                atrav??s de escrut??nio secreto, pela maioria absoluta do Colegiado.</p> <br />
            <p>Art. 5?? A fun????o exercida no Conselho ?? considerada servi??o relevante, n??o ser?? remunerada e ao servidor
                p??blico que a exercer ser??o concedidos todos os meios para seu desempenho.</p><br />
            <p>Art. 6?? O Conselho ter?? sede na Funda????o Cultural de Brusque e realizar?? reuni??es no per??odo e na forma
                fixados no respectivo Regimento Interno.</p><br />
            <p>Art. 7?? O Conselho manifestar-se-?? atrav??s de normatiza????o, orienta????o e decis??es e seus atos ser??o
                publicados na forma de Atos Legais do Munic??pio.</p><br />
            <p>Art. 8?? A Funda????o Cultural de Brusque oferecer?? suporte t??cnico e administrativo ao Conselho, para o
                fiel desempenho de suas atribui????es. (Reda????o dada pela Lei n?? 3664/2013)</p><br />
            <p>Art. 9?? Esta lei entra em vigor na data da sua publica????o.</p><br />
            <p>Art. 10 Ficam revogadas as disposi????es em contr??rio constantes nas Leis n?? 1812, de 08 de novembro de
                1993 e n?? 2.581, de 18 de janeiro de 2002.</p><br /><br />
            <p>Prefeitura Municipal de Brusque, em 04 de mar??o de 2008.</p>





        </div>
    </section>
    <footer>
        <div class="fim">
            <h1>Contato: conselho@fcbrusque.sc.gov.br</h1>
            <p>P??gina criada pelos alunos da segunda fase de Sistemas de Informa????o - Unifebe - Brusque - SC</p>
        </div>
    </footer>
    <script type="text/javascript" src="../js/curri.js"></script>
</body>

</html>