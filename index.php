<?php
include("banco.php");
if (isset($_GET['p'])) { $page = stripcslashes($_GET['p']); }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/foxicon.png">
    <title><?php if ((isset($page)) && (file_exists("page/$page.php"))) { echo ucfirst($page)." | "; } ?> Scripting Studios Art - Criação de Sites em Cachoeira do Sul, Santa Maria e Porto Alegre / Desenvolvimento de Sistemas Web</title>
    <meta name="description" content="">
    <meta name="author" content="Scripting Studios Art - André Machado, Rodrigo Machado, Guacimar Mello | Desenvolvimento de Sistemas Web | Solução, Tecnologia e Criação de Sites">
    <META NAME="Keywords" CONTENT="Criação de Sites, Cachoeira do Sul, Desenvolvimento de Sistemas Web, Santa Maria, Porto Alegre, Solução, Tecnologia e Criação, Webdesign, Criar, Site, Informática, Agência Digital, Empresa, Comprar, Valor, Empresariais, Otimização, Rodrigo Machado, André Machado, Guacimar Mello, Tecnologia, Técnico, Informação, Informatica, Melhor, Barato, Rede de Computadores, Orçamento, Contato, Telefone, Equipe, Programação, Criacao, Empresa, Freelance, Desenvolver, Criar Site">
    <META NAME="Description" CONTENT="Criação de Sites, Cachoeira do Sul, Santa Maria, Porto Alegre, Desenvolvimento de Sistemas Web, Ferramentas, Loja Virtual, e Site Institucional para Empresas, Solução, Tecnologia e Criação, Sistema para Veterinárias e Petshops, Site Gerenciável de Imobiliária, Tenha um site para sua empresa">

    <META NAME="Subject" CONTENT="Solução, Tecnologia e Criação de Sites em Cachoeira do Sul, Santa Maria, Porto Alegre, Scripting Studios Art | Desenvolvimento de Sistemas Web">
    <META NAME="Classification" CONTENT="Computers/Internet">
    <META NAME="Abstract" CONTENT="Solução, Tecnologia e Criação de Sites em Cachoeira do Sul, Santa Maria, Porto Alegre - Scripting Studios Art | Desenvolvimento de Sistemas Web">
    <META NAME="Copyright" CONTENT="© Desenvolvimento de Sistemas Web | Solução, Tecnologia e Criação de Sites">
    <META NAME="Contact" CONTENT="contato@scripting.com.br">
    <META NAME="Publisher" CONTENT="Scripting Studios Art - André Machado, Rodrigo Machado, Guacimar Mello | Desenvolvimento de Sistemas Web | Solução, Tecnologia e Criação de Sites">
    <META NAME="Robots" CONTENT="ALL">
    <META NAME="Robots" CONTENT="INDEX,FOLLOW">
    <META NAME="Revisit-After" CONTENT="5 Days">
    <META NAME="Distribution" CONTENT="Global">
    <META NAME="Rating" CONTENT="General">

    <link rel="canonical" href="http://www.scripting.com.br/" >
    <meta name="geo.region" content="BR-RS" >
    <meta name="geo.placename" content="Cachoeira do Sul, Rio Grande do Sul, Brasil" >
    <meta name="geo.position" content="-30.0483822;-52.8872863,17" >
    <meta name="dcterms.title" content="Solução, Tecnologia e Criação de Sites em Cachoeira do Sul, Santa Maria, Porto Alegre, Desenvolvimento de Sistemas Web, Ferramentas, Intranet, Loja Virtual, Produtos, Produtos. Tenha um site para sua empresa, Informatica, Scripting Studios Art" >
    <meta name="dcterms.type" content="text" >
    <meta name="dcterms.format" content="text/html" >
    <meta name="dc.language" content="pt-BR" >
    <meta name="dcterms.subject" content="Criação de Sites, Cachoeira do Sul, Santa Maria, Porto Alegre, Desenvolvimento de Sistemas Web, Ferramentas, Loja Virtual, e Site Institucional para Empresas, Solução, Tecnologia e Criação, Sistema para Veterinárias e Petshops, Site Gerenciável de Imobiliária, Tenha um site para sua empresa" >
    <meta name="dcterms.creator.address" content="contato@scripting.com.br" >
    <meta name="dcterms.identifier" content="http://www.scripting.com.br/" >
    <meta property="og:title" content="Scripting Studios Art - Criação de Sites em Cachoeira do Sul, Santa Maria e Porto Alegre | Desenvolvimento de Sistemas Web | Solução, Tecnologia e Criação de Sites" >
    <meta property="og:url" content="http://www.scripting.com.br/" >
    <meta property="og:image" content="images/foxicon.png" >
    <meta property="og:site_name" content="Scripting Studios Art - Criação de Sites em Cachoeira do Sul, Santa Maria e Porto Alegre | Desenvolvimento de Sistemas Web | Solução, Tecnologia e Criação de Sites" >
    <meta property="fb:admins" content="scriptingstudiosart">
    <meta property="og:description" content="Criação de Sites, Cachoeira do Sul, Santa Maria, Porto Alegre, Desenvolvimento de Sistemas Web, Ferramentas, Loja Virtual, e Site Institucional para Empresas, Solução, Tecnologia e Criação, Sistema para Veterinárias e Petshops, Site Gerenciável de Imobiliária, Tenha um site para sua empresa" >
    <meta property="og:latitude" content="-30.0483822" >
    <meta property="og:longitude" content="-52.8872863,17" >
    <meta property="og:street-address" content="Rua Riachuelo 517" >
    <meta property="og:locality" content="Cachoeira do Sul" >
    <meta property="og:region" content="RS" >
    <meta property="og:country-name" content="BR" >
    <meta property="og:email" content="contato@scripting.com.br" >
    <meta property="og:phone_number" content="(51) 9684-6630" >
    <meta itemprop="name" content="Scripting Studios Art - Criação de Sites em Cachoeira do Sul, Santa Maria e Porto Alegre | Desenvolvimento de Sistemas Web | Solução, Tecnologia e Criação de Sites" >
    <meta itemprop="image" content="images/foxicon.png" >
    <meta name="alexaVerifyID" content="gaBEFg-Vtlufz8aLpC_7r7_EwPA"/>
    <script type="text/javascript">
    _atrk_opts = { atrk_acct:"gH9Cf1a8Md00aq", domain:"scripting.com.br",dynamic: true};
    (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
    </script>


    <link rel="alternate" hreflang="pt-BR" href="http://scripting.com.br/" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/andremachado.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/lightbox.css">

    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <script src="foundation/js/vendor/modernizr.js"></script>

</head>
<body >
<?php


                ?>
    <!-- Inicio do Container -->
    
    <div class="container">
        <!-- Inicio do Conteúdo Header -->
        <header class="row">

            <h1 style="display:none;">Criação de Sites / Desenvolvimento de Sistemas Web - Com espírito inovador, a Scripting Studios Art desenvolve soluções criativas e inteligentes para seus clientes, com o intuito de que a apresentação da empresa na internet alcance os resultados esperados.</h1>
            <?php if (IsMobile()===0) { ?>

            <ul class="nav nav-tabs sans">
                <li <?php if (!isset($page)) { ?> class="active" <?php } ?> >
                    <a <?php if (isset($page)) { ?> href="Home" <?php } else { ?> href="Home#1" data-toggle="tab" <?php } ?> rel="Home">Início</a></li>
                <li <?php if (isset($page) && ($page == "institucional")) { ?> class="active" <?php } ?>><a <?php if (isset($page)) { ?> href="institucional" <?php } else { ?> href="institucional#2" data-toggle="tab" <?php } ?> rel="Institucional">Institucional</a></li>
                <li <?php if (isset($page) && ($page == "produtos")) { ?> class="active" <?php } ?>><a <?php if (isset($page)) { ?> href="produtos" <?php } else { ?> href="produtos#3" data-toggle="tab" <?php } ?> rel="produtos">Produtos</a></li>
                <li <?php if (isset($page) && ($page == "partners")) { ?> class="active" <?php } ?>><a <?php if (isset($page)) { ?> href="partners" <?php } else { ?> href="partners#4" data-toggle="tab"<?php } ?> rel="Blog">Partners</a></li>
                <li <?php if (isset($page) && ($page == "blog")) { ?> class="active" <?php } ?>><a <?php if (isset($page)) { ?> href="blog" <?php } else { ?> href="blog#5" data-toggle="tab"<?php } ?> rel="Blog">Blog</a></li>

                <li <?php if (isset($page) && ($page == "portfolio")) { ?> class="active" <?php } ?> style="background-color:#3B5998;"><a class="social" <?php if (isset($page)) { ?> href="index.php?p=portfolio" <?php } else { ?> href="index.php?p=portfolio#6" data-toggle="tab"<?php } ?> rel="Portfólio">Portfólio</a></li>
                <li <?php if (isset($page) && ($page == "orcamento")) { ?> class="active" <?php } ?> style="background-color:#2FCC73;"><a class="social" <?php if (isset($page)) { ?> href="index.php?p=orcamento" <?php } else { ?> href="index.php?p=orcamento#7" data-toggle="tab"<?php } ?> rel="Orçamento">Orçamento</a></li>
                <li <?php if (isset($page) && ($page == "contato")) { ?> class="active" <?php } ?> style="background-color:#DD4B39;"><a class="social" <?php if (isset($page)) { ?> href="contato" <?php } else { ?> href="contato#8" data-toggle="tab"<?php } ?> rel="Contato">Contato</a></li>
            </ul>

            <?php } else { ?>

            <ul class="nav nav-tabs sans">
                <li <?php if (!isset($page)) { ?> class="active" <?php } ?> >
                    <a <?php if (isset($page)) { ?> href="Home" <?php } else { ?> href="Home#1" data-toggle="tab" <?php } ?> rel="Home">Início</a></li>
                <li <?php if (isset($page) && ($page == "institucional")) { ?> class="active" <?php } ?>><a <?php if (isset($page)) { ?> href="institucional" <?php } else { ?> href="institucional#2" data-toggle="tab" <?php } ?> rel="Institucional">Institucional</a></li>
                <li <?php if (isset($page) && ($page == "produtos")) { ?> class="active" <?php } ?>><a <?php if (isset($page)) { ?> href="produtos" <?php } else { ?> href="produtos#3" data-toggle="tab" <?php } ?> rel="produtos">Produtos</a></li>
                <li <?php if (isset($page) && ($page == "blog")) { ?> class="active" <?php } ?>><a <?php if (isset($page)) { ?> href="blog" <?php } else { ?> href="blog#5" data-toggle="tab"<?php } ?> rel="Blog">Blog</a></li>
                <li <?php if (isset($page) && ($page == "portfolio")) { ?> class="active" <?php } ?> style="background-color:#3B5998;"><a class="social" <?php if (isset($page)) { ?> href="index.php?p=portfolio" <?php } else { ?> href="index.php?p=portfolio#6" data-toggle="tab"<?php } ?> rel="Portfólio">Portfólio</a></li>
                <li <?php if (isset($page) && ($page == "orcamento")) { ?> class="active" <?php } ?> style="background-color:#2FCC73;"><a class="social" <?php if (isset($page)) { ?> href="index.php?p=orcamento" <?php } else { ?> href="index.php?p=orcamento#7" data-toggle="tab"<?php } ?> rel="Orçamento">Orçamento</a></li>
                <li <?php if (isset($page) && ($page == "contato")) { ?> class="active" <?php } ?> style="background-color:#DD4B39;"><a class="social" <?php if (isset($page)) { ?> href="contato" <?php } else { ?> href="contato#8" data-toggle="tab"<?php } ?> rel="Contato">Contato</a></li>
            </ul>
            <?php } ?>
        <!-- Fim do Conteúdo Header -->
        </header>
        <!-- Inicio da Linha -->
        <div class="row" >
            <!-- Inicio da Tag Main com 12 C -->
            <div role="main" class="col-md-12" >
              <!-- Inicio do Tab Content -->
                <div class="tab-content">
            <?php
            if ((isset($page)) && (file_exists("page/$page.php"))){
                ?>
                    <!-- Página dinâmica -->
                    <?php @include("page/$page.php"); ?>
                <?php
            }
            else if ((isset($page)) && (!file_exists("page/$page.php"))) {
                include("page/404.php");
            }
            else if (!isset($page)) {
            ?>
                    <!-- Homepage -->
                    <div id="1" class="tab-pane fade in active">
                        <div style="background-color: rgba(246, 246, 246, 0);margin-bottom:0px;padding-bottom:0px;">
                            <?php include("inc/sliderfoundation.php"); ?>
                            <h3 class="sans" style="font-weight: 300 !important;">Conectando o mundo com você</h3>
                            <p style="margin:0 auto;width:90%;text-align:center;padding:15px;" class="sans"><strong>Criação de Sites / Desenvolvimento de Sistemas Web</strong> - Com espírito inovador, a Scripting Studios Art desenvolve soluções criativas e inteligentes para seus clientes, com o intuito de que a apresentação da empresa na internet alcance os resultados esperados.</p>
                        </div>
                        <div class="box-content">
                            <?php include("inc/frontpage.php"); ?>
                        </div>
                    </div>
                    <!-- Institucional -->
                    <div id="2" class="tab-pane fade">
                            <?php @include("page/institucional.php"); ?>
                    </div>
                    <!-- Produtos -->
                    <div id="3" class="tab-pane fade">
                            <?php @include("page/produtos.php"); ?>
                    </div>
                    <!-- Produtos -->
                    <div id="4" class="tab-pane fade">
                            <?php @include("page/partners.php"); ?>
                    </div>
                    <!-- Blog -->
                    <div id="5" class="tab-pane fade">
                            <?php @include("page/blog.php"); ?>
                    </div>
                    <!-- Portfólio -->
                    <div id="6" class="tab-pane fade">
                            <?php @include("page/portfolio.php"); ?>
                    </div>
                    <!-- Orçamento -->
                    <div id="7" class="tab-pane fade">
                            <?php @include("page/orcamento.php"); ?>
                    </div>
                    <!-- Contato -->
                    <div id="8" class="tab-pane fade">
                            <?php @include("page/contato.php"); ?>
                    </div>
            <?php
            }
            ?>
                <!-- Fim do Tab Content -->
                </div>

            <!-- Fim da tag Main com 12 C -->
            </div>
        <!-- Fim da Linha -->
        </div>

        <!-- Inicio do Footer -->
        <footer class="row">
           <?php if ((!isset($page)) || ((isset($page))&&($page != "blog")&&($page!="institucional")&&($page!="portfolio")&&($page!="partners"))) { include("inc/encerramosatividades.php"); } ?>
           <?php include("inc/footer.php"); ?>
        <!-- Fim do Footer -->
        </footer>
        <!-- Inicio do Copyright -->
        <div class="copyright row">
            E-mail: contato@scripting.com.br
            <p>Scripting Studios Art</p>
        <!-- Fim do Copyright -->
        </div>
    <!-- Fim do Conainer -->
    </div>

    <!-- Inicio do Google Analytics -->
    <div>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-64994314-1', 'auto');
          ga('send', 'pageview');

        </script>
    <!-- Fim do Google Analytics -->
    </div>

    <!-- Google Tag Manager -->
    <div>
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5VQ92L"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5VQ92L');</script>
    <!-- End Google Tag Manager -->
    </div>
    <?php include("inc/seo.php"); ?>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>
