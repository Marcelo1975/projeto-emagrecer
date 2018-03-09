<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=100%">
    <meta name="description" content="Emagreçendo com simone, aqui você terá dicas de exercícios e alimentação, seu bem está a um clique" />
    <meta name="author" content="Simone" />
    <title>Emagreça sempre bela</title>
    <!-- core CSS -->
    <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/css/animate.min.css" rel="stylesheet"> 
    <link href="<?php echo BASE_URL; ?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/css/styles.css" rel="stylesheet"> 
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/ico/favicon.ico"> 
</head>
<body onload="minhaNotificacao()">
    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/banner/logo.png" /></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll"><a href="<?php echo BASE_URL; ?>">Home</a></li>  
                        <li class="scroll"><a href="<?php echo BASE_URL; ?>sobre">Sobre</a></li> 
                        <li class="scroll"><a href="<?php echo BASE_URL; ?>receitas">Receitas</a></li>                     
                        <li class="scroll"><a href="<?php echo BASE_URL; ?>exercicios">Dica de Exercícios</a></li>
                        <li class="scroll"><a href="<?php echo BASE_URL; ?>contato">Contato</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="hero-banner">
      <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li> 
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>Você em sua melhor forma</h1>        
            <h3>Obtenha sua adequação todos os dias</h3>
        </hgroup> 
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>Encontre aqui tudo que você procura</h1>        
            <h3>Obtenha saúde</h3>
        </hgroup>        
      </div>
    </div> 
    </div>
  </div> 
</div>
</section><!--/#main-slider-->

    <?php
    $this->loadViewInTemplate($viewName, $viewData);
    ?>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; <?php echo date('Y'); ?> - Todos os direitos reservados | <a target="_blank" href="https://simonecasse34.com" title="Emagreça sempre bela">http://ssimonecasse34.com</a> | <a href="<?php echo BASE_URL; ?>politica">Potítica de Privacidade</a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a target="_blank" href="https://www.facebook.com/simone.cassemiro.31"><img src="<?php echo BASE_URL; ?>assets/images/ico/facebook.png" width="30" height="30"></a></li>
                        <li><a target="_blank" href="https://plus.google.com/117480368023110544087"><img src="<?php echo BASE_URL; ?>assets/images/ico/google-plus.png" width="30" height="30"></a></li>
                        <li><a target="_blank" href="https://twitter.com/simoneandradeca?s=09"><img src="<?php echo BASE_URL; ?>assets/images/ico/twitter.png" width="30" height="30"></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/simonecassemiro34.sc/?hl=pt-br"><img src="<?php echo BASE_URL; ?>assets/images/ico/instagram.png" width="30" height="30"></a></li> 
                        <li><a target="_blank" href="https://www.youtube.com/channel/UCYaH0H7ZVJ7-oQoMAM1jN-Q"><img src="<?php echo BASE_URL; ?>assets/images/ico/youtube.png" width="30" height="30"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo BASE_URL; ?>assets/js/jquery.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script> 
    <script src="<?php echo BASE_URL; ?>assets/js/mousescroll.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/smoothscroll.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.isotope.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.inview.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/wow.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/contact/jqBootstrapValidation.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/contact/contact_me.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/custom-scripts.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>