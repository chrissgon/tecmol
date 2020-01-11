<?php
session_start();

$msg = isset($_SESSION["msg"]) ? $_SESSION["msg"] : null;


$class = $msg == "Email enviado com sucesso" ? "ativo sucesso" : "ativo erro";

$class = $msg == null ? null : $class;

unset($_SESSION["msg"]);

?>

<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TecMol - Fábrica de Molas Industrias em São Paulo</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <!-- LOGO -->
    <link rel="icon" href="img/logo.png">
</head>

<body>
    <!-- MENSAGEM -->
    <section class="msg">
        <p class="<?php echo $class ?>"><?php echo $msg ?></p>
    </section>

    <!-- BTN-FLOAT -->
    <a href="https://api.whatsapp.com/send?phone=5511998546411&text=Ol%C3%A1%2C%20pode%20me%20ajudar%3F" class="btn-float" target="_blank"><i class="fab fa-whatsapp"></i></a>

    <!-- MODAL -->
    <section class="container-modal">
        <!-- SOBRE -->
        <article class="modal informacoes">
            <article class="info">
                <h3>Informações</h3>
                <p>Atendemos aos mais variados setores da indústria brasileira, atuamos com molas nas áreas: alimentícia, ferroviária, metalúrgica, siderúrgica, válvulas industriais, usinas e indústrias em geral. Possuímos máquina de cortar e endireitar material de Ø 2,00 a 6mm.Com experiência no mercado de molas industriais, oferecemos aos nossos clientes produtos como:<br>

                    <strong><br>Molas de tração, torção, compressão</strong>;
                    <strong><br>Molas volutas</strong>;
                    <strong><br>Molas prato, arruelas onduladas, arruelas lisas</strong>;
                    <strong><br>Molas de fita em geral</strong>;
                    <strong><br>Anéis, pinos</strong>;
                    <strong><br>Artefatos de arames em geral</strong>;
                    <strong><br>Molas para estampo</strong>;
                    <strong><br>Hastes retas.</p>
            </article>
        </article>
    </section>

    <!-- NAV - DESKTOP -->
    <nav class="nav">
        <article class="logo">
            <img src="img/logo.png" alt="Logo Tecmol">
        </article>
        <article class="links">
            <a href="#home" class="link">Home</a>
            <a href="#empresa" class="link">Empresa</a>
            <a href="#produto" class="link">Produtos</a>
            <a href="#cotacao" class="link">Cotação</a>
            <a href="#contato" class="link">Contato</a>
        </article>
    </nav>

    <!-- NAV - MOBILE -->
    <a class="material-icons btn-menu">menu</a>

    <section class="menu">
        <!-- header -->
        <header class="header">
            <!-- info -->
            <article class="info">
                <img src="img/logo.png" alt="Logo Tecmol">
                <p class="email">tecmol@comercial.com</p>
            </article>
        </header>
        <!-- guia -->
        <article class="guia">
            <a href="#home" class="aba">Home</a>
            <a href="#empresa" class="aba">Empresa</a>
            <a href="#produto" class="aba">Produtos</a>
            <a href="#cotacao" class="aba">Cotação</a>
            <a href="#contato" class="aba">Contato</a>
        </article>
    </section>

    <!-- HOME -->
    <section class="container home" id="home">
        <main class="info">
            <article class="carousel" id="1">
                <h1>Fábrica TecMol</h1>
                <p>A experiência fazendo a diferença!</p>
                <a href="#apresentacao" class="btn-home">Explorar</a>
            </article>
            <article class="carousel" id="2">
                <h1>Qualidade garantida</h1>
                <p>Qualidade, produtividade, custo baixo e excelente atendimento!</p>
                <a href="#produto" class="btn-home">Produtos</a>
            </article>
            <article class="carousel" id="3">
                <h1>Sobre nós</h1>
                <p>Desde 1968 oferecendo produtos com qualidade!</p>
                <a href="#industria" class="btn-home">Saiba mais</a>
            </article>
        </main>
        <footer class="btn-carousel">
            <a class="1 ativado"></a>
            <a class="2"></a>
            <a class="3"></a>
        </footer>
    </section>

    <!-- APRESENTAÇÃO -->
    <section class="container apresentacao" id="apresentacao">
        <!-- item -->
        <a href="#industria" class="item">
            <!-- icone -->
            <figure class="icone">
                <img src="img/icone-industria.png">
            </figure>
            <!-- info -->
            <h3>Fábrica de Molas</h3>
            <p>Cinquenta anos de experiência na criação de molas industriais.</p>
        </a>
        <!-- item -->
        <a href="#servico" class="item">
            <!-- icone -->
            <figure class="icone">
                <img src="img/icone-contrato.png">
            </figure>
            <!-- info -->
            <h3>Prestação de Serviços</h3>
            <p>Alta capacitação para atender qualquer demanda.</p>
        </a>
        <!-- item -->
        <a href="#produto" class="item">
            <!-- icone -->
            <figure class="icone">
                <img src="img/icone-qualidade.png">
            </figure>
            <!-- info -->
            <h3>Produtos de Qualidade</h3>
            <p>Garantimos a satisfação dos nosso clientes.</p>
        </a>
    </section>

    <!-- EMPRESA -->
    <section class="container empresa" id="empresa">
        <!-- bg -->
        <figure class="bg">
            <img src="img/bg-empresa.jpg">
        </figure>
        <h1>A nossa experiencia garante a sua tranquilidade</h1>
        <!-- item -->
        <article class="item">
            <h3><i class="material-icons">work</i></h3>
            <p>A criatividade de homens empreendedores faz surgir em 1.968, e garante a sua permanência no mercado, uma fábrica de molas industriais que tem como objetivo satisfazer as expectativas de todos aqueles que procuram pelos seus produtos ou serviços, para isto constantemente melhora seus processos internos buscando a efetiva eficácia, foi assim que conquistou a certificação ISO em 2005, mantendo sua recertificação até os dias atuais.</p>
        </article>
        <!-- item -->
        <article class="item">
            <h3><i class="material-icons">build</i></h3>
            <p>A TECMOL possui profissionais qualificados capazes de produzir molas artesanalmente, assim como dispõe de maquinários que permitem a produção em série com alta tecnologia. Possui laboratório onde realiza todos os testes necessários a cada tipo de mola. Testes em mola de compressão, tração, torção, mola prato, de fita e mais.</p>
        </article>
        <!-- item -->
        <article class="item">
            <h3><i class="material-icons">home</i></h3>
            <p>Com sede própria e uma área com cerca de 2.200m² a TEC-MOL garante aos seus colaboradores, fornecedores e clientes a tranquilidade de trabalharem com uma empresa comprometida e que acredita que a cooperação de todos gera a superação de qualquer obstáculo e cria infinitas possibilidades de novos negócios.</p>
        </article>
        <!-- item -->
        <article class="item">
            <h3><i class="material-icons">done</i></h3>
            <p>É uma empresa capacitada para atender qualquer quantidade, o método de trabalho é sob encomenda, mediante especificações técnicas, amostras ou desenhos de molas. São utilizados os mais variados tipos de materiais: aços carbonos, inox, latão, bronze, e outros, com bitolas à partir de 0,10mm até 50,8mm.</p>
        </article>
        <!-- item -->
        <article class="item meia">
            <h3><i class="material-icons">visibility</i></h3>
            <p>Ser reconhecida como uma empresa de excelência no mercado por produzir
                produtos de alta qualidade a preços competitivos.
            </p>
        </article>
        <!-- item -->
        <article class="item meia">
            <h3><i class="material-icons">trending_up</i></h3>
            <p>Buscamos atender suas necessidades, alinhando a nossa experiência e
                conhecimento no ramo. Contamos com a participação e credibilidade de nossos
                colaboradores, fornecedores e clientes.
            </p>
        </article>
        <!-- item -->
        <article class="item meia">
            <h3><i class="material-icons">favorite</i></h3>
            <p>Desde 1968 buscamos atender da melhor forma suas necessidades: respeitando,
                diversificando, acreditando. Esta é a nossa prioridade.
            </p>
        </article>
        <!-- diferencial -->
        <article class="diferencial">
            <figure class="img">
                <img src="img/bg-diferencial.jpg">
            </figure>
            <h3>Qual o nosso diferencial?</h3>
            <p>O que diferencia a TecMol das demais empresas do ramo é a personalização de seu atendimento, nossas molas são de alta qualidade e não há nenhuma restrição quanto à quantidade. O principal objetivo da TecMol é proporcionar aos seus clientes produtos de qualidade garantindo-lhes a satisfação tanto com o produto quanto com o atendimento, assim como realizar parcerias com fornecedores visando minimizar custos e garantir competitividade.</p>
        </article>
    </section>

    <!-- SOBRE -->
    <section class="container sobre">
        <!-- item -->
        <article class="item" id="industria">
            <!-- img -->
            <figure class="img">
                <img src="img/bg-industria.jpg">
            </figure>
            <!-- info -->
            <article class="info">
                <h3>Sobre Nós</h3>
                <p>A TecMol iniciou suas atividades em 1968, determinada em atender ao segmento de molas industriais, realizando serviços com profissionais competentes e utilizando matéria prima de alto nível, garantindo aos seus clientes o melhor produto a preços competitivos. A TecMol busca a melhoria contínua de suas molas industriais e de sua fábrica, através da eficácia dos processos e do atendimento aos clientes, garantindo-lhes a excelência, conquistando, assim, em 2005 a certificação ISO 9001.</p>
                <a href="img/certificado.pdf" class="btn-sobre" target="_blank">Veja Mais</a>
            </article>
        </article>
        <!-- item -->
        <article class="item" id="servico">
            <!-- img -->
            <figure class="img">
                <img src="img/bg-servico.jpg">
            </figure>
            <!-- info -->
            <article class="info">
                <h3>Serviços</h3>
                <p>Utilizamos os mais variados tipos de materiais para nossas molas: carbono, inox, latão, bronze, e outros, com bitolas a partir de 0,10mm até 50,8mm.</p>
                <br>
                <p>É uma empresa capacitada para atender qualquer quantidade, o método de trabalho é sob encomenda, mediante amostras, medidas ou desenhos.</p>
                <a class="btn-sobre btn-modal" id="servico">Veja Mais</a>
            </article>
        </article>
        <!-- item -->
        <article class="item" id="produto">
            <!-- img -->
            <figure class="img">
                <img src="img/bg-produto.jpg">
            </figure>
            <!-- info -->
            <article class="info">
                <h3>Produtos</h3>
                <p>Com a experiencia no mercado de molas industriais, oferece aos seus clientes produtos como:
                    <strong>Molas de tração</strong>;
                    <strong>Molas de torção</strong>;
                    <strong>Molas de compressão</strong>;
                    <strong>Molas de prato</strong>;
                    <strong>Molas de grampo</strong>;
                    <strong>Anéis e outros.</strong></p>
                <a class="btn-sobre btn-modal">Veja Mais</a>
            </article>
        </article>
    </section>

    <!-- COTAÇÃO -->
    <section class="container cotacao" id="cotacao">
        <!-- img -->
        <figure class="img">
            <img src="img/bg-cotacao.jpg">
        </figure>

        <!-- info -->
        <article class="info">
            <h1>Faça a sua cotação</h1>
            <p>Utilizamos os mais variados tipos de materiais para nossas molas: carbono, inox, latão, bronze, e outros, com bitolas a partir de 0,10mm até 50,8mm.
                <br>Solicite já uma cotação. Nosso método de trabalho é sob encomenda, mediante amostras, medidas ou desenhos.</p>
        </article>

        <!-- form -->
        <form action="php/form.php" method="POST" class="form">
            <!-- campo -->
            <p class="campo hidden">
                <input type="hidden" name="cotacao">
            </p>
            <!-- campo -->
            <p class="campo">
                <input type="text" name="nome" placeholder="Nome" pattern="[a-zA-ZÀ-ú\s]+" required>
            </p>
            <!-- campo -->
            <p class="campo">
                <input type="email" name="email" placeholder="Email" required>
            </p>
            <!-- campo -->
            <p class="campo">
                <input type="tel" name="telefone" maxlength="11" minlength="10" title="Somente números" placeholder="Telefone" required>
            </p>
            <!-- campo -->
            <p class="campo">
                <input type="text" name="empresa" pattern="[a-zA-ZÀ-ú\s]+" placeholder="Empresa" required>
            </p>
            <!-- campo -->
            <p class="campo">
                <input type="text" name="uf" pattern="[a-zA-Z\s]+" maxlength="2" minlength="2" placeholder="UF" required>
            </p>
            <!-- campo -->
            <p class="campo">
                <input type="text" name="assunto" pattern="[a-zA-ZÀ-ú\s]+" placeholder="Assunto" required>
            </p>
            <!-- campo -->
            <p class="campo textarea">
                <textarea name="mensagem" placeholder="Mensagem" required></textarea>
            </p>
            <input type="submit" value="Enviar">
        </form>
    </section>

    <!-- GALERIA -->
    <section class="container galeria">
        <!-- aba -->
        <article class="aba">
            <p class="ativo">Todas</p>
            <p>Molas</p>
            <p>Desenhos</p>
        </article>
        <!-- fotos -->
        <article class="fotos">
            <!-- img -->
            <figure class="img molas">
                <p>Descrição</p>
                <img src="img/galeria1.jpg">
            </figure>
            <!-- img -->
            <figure class="img molas">
                <p>Descrição</p>
                <img src="img/galeria2.jpg">
            </figure>
            <!-- img -->
            <figure class="img molas">
                <p>Molas de Fita</p>
                <img src="img/galeria3.jpg">
            </figure>
            <!-- img -->
            <figure class="img molas">
                <p>Molas Estampadas</p>
                <img src="img/galeria4.jpg">
            </figure>
            <!-- img -->
            <figure class="img molas">
                <p>Molas de Fita</p>
                <img src="img/galeria5.jpg">
            </figure>
            <!-- img -->
            <figure class="img molas">
                <p>Descrição</p>
                <img src="img/galeria6.jpg">
            </figure>
            <!-- img -->
            <figure class="img molas">
                <p>Molas de Tração</p>
                <img src="img/galeria7.jpg">
            </figure>
            <!-- img -->
            <figure class="img molas">
                <p>Molas de Fita</p>
                <img src="img/galeria8.jpg">
            </figure>
            <!-- img -->
            <figure class="img molas">
                <p>Molas de Compressão</p>
                <img src="img/galeria9.jpg">
            </figure>
            <!-- img -->
            <figure class="img molas">
                <p>Descrição</p>
                <img src="img/galeria10.jpg">
            </figure>
            <!-- img -->
            <figure class="img desenhos">
                <p>Descrição</p>
                <img src="img/galeria11.jpg">
            </figure>
            <!-- img -->
            <figure class="img desenhos">
                <p>Descrição</p>
                <img src="img/galeria12.jpg">
            </figure>
            <!-- img -->
            <figure class="img desenhos">
                <p>Descrição</p>
                <img src="img/galeria13.jpg">
            </figure>
            <!-- img -->
            <figure class="img desenhos">
                <p>Descrição</p>
                <img src="img/galeria14.jpg">
            </figure>
            <!-- img -->
            <figure class="img desenhos">
                <p>Descrição</p>
                <img src="img/galeria15.jpg">
            </figure>
            <!-- img -->
            <figure class="img desenhos">
                <p>Descrição</p>
                <img src="img/galeria16.jpg">
            </figure>
            <!-- img -->
            <figure class="img desenhos">
                <p>Descrição</p>
                <img src="img/galeria17.jpg">
            </figure>
            <!-- img -->
            <figure class="img desenhos">
                <p>Descrição</p>
                <img src="img/galeria18.jpg">
            </figure>
            <!-- img -->
            <figure class="img desenhos">
                <p>Descrição</p>
                <img src="img/galeria19.jpg">
            </figure>
            <!-- img -->
            <figure class="img desenhos">
                <p>Descrição</p>
                <img src="img/galeria20.jpg">
            </figure>
        </article>
        <!-- btn-galeria -->
        <article class="btn-galeria">
            <i class="material-icons desabilitado" id="anterior">keyboard_arrow_left</i>
            <i class="material-icons" id="proximo">keyboard_arrow_right</i>
        </article>
    </section>

    <!-- CONTATO -->
    <section class="container contato" id="contato">
        <h1>Contatos</h1>
        <!-- img -->
        <figure class="img">
            <img src="img/bg-contato.jpg">
        </figure>
        <!-- form -->
        <form action="php/form.php" method="POST" class="form">
            <h3>Envie-nos uma mensagem!</h3>
            <!-- campo -->
            <p class="campo">
                <input type="hidden" name="contato">
            </p>
            <p class="campo">
                <input type="text" name="nome" placeholder="Nome" pattern="[a-zA-ZÀ-ú\s]+" required>
            </p>
            <p class="campo">
                <input type="email" name="email" placeholder="Email" required>
            </p>
            <p class="campo">
                <textarea name="mensagem" placeholder="Mensagem" required></textarea>
            </p>
            <p class="campo">
                <input type="submit" value="Enviar">
            </p>
        </form>
        <!-- info -->
        <article class="info">
            <!-- item -->
            <article class="item">
                <h3><i class="material-icons">phone</i></h3>
                <p>(11) 4605-4109<br>
                    (11) 4605-4754<br>
                    (11) 4605-4255
                    <p>(11) 4605-4166<br>
                        (11) 4445-1511</p>
            </article>
            <!-- item -->
            <article class="item">
                <h3><i class="material-icons">mail</i></h3>
                <p>
                    <strong>Vendas:</strong>
                    <a href="mailto:comercial@tecmol.com.br">comercial@tecmol.com.br</a>
                </p>
                <p>
                    <strong>Vendas:</strong>
                    <a href="mailto:tecmol@uol.com.br">tecmol@uol.com.br</a>
                </p>
                <p>
                    <strong>Faturamento:</strong>
                    <a href="mailto:faturamento@tecmol.com.br">faturamento@tecmol.com.br</a>
                </p>
            </article>
            <!-- item -->
            <article class="item">
                <h3><i class="material-icons">mail</i></h3>
                <p>
                    <strong>Financeiro:</strong>
                    <a href="mailto:cobranca@tecmol.com.br">cobranca@tecmol.com.br</a>
                </p>
                <p>
                    <strong>Qualidade:</strong>
                    <a href="mailto:qualidade@tecmol.com.br">qualidade@tecmol.com.br</a>
                </p>
                <p>
                    <strong>NFE:</strong>
                    <a href="mailto:nfeletronica@tecmol.com.br">nfeletronica@tecmol.com.br</a>
                </p>
            </article>
        </article>

        <!-- maps -->
        <article class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1831.6841036808548!2d-46.7526006!3d-23.3386711!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cee3f427a65781%3A0x284d30ae86d9045a!2sTec-Mol!5e0!3m2!1spt-BR!2sbr!4v1573161278063!5m2!1spt-BR!2sbr"></iframe>
        </article>
    </section>

    <!-- FOOTER -->
    <footer class="container footer">
        <img src="img/tecmol.png">
        <p>© 1968-2020 Tecmol | Todos os direitos reservados</p>
        <p>By <a href="http://sophietech.com.br/">Sophie Tech</a></p>
    </footer>

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- JS -->
    <script src="js/pred.js"></script>
    <script src="js/index.js"></script>
</body>

</html>