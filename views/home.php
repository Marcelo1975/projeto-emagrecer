<section id="mainservice" >
	<div class="container">
        <div class="row">
            <?php foreach($posts as $p): ?>
            <div class="col-sm-6 col-md-4">
                <a href="<?php echo BASE_URL; ?>posts/ler/<?php echo $p['id']; ?>">
                    <div class="thumbnail">
                        <img class="img-responsive" id="img-photo" src="<?php echo BASE_URL; ?>assets/images/imgs/<?php echo $p['url']; ?>" alt="Clique para lê" title="IR para artigo" border="0" />
                        <div class="caption">
                            <h3><?php echo utf8_encode(substr($p['titulo'], 0, 20)); ?></h3>
                            <p><?php echo utf8_encode(substr($p['corpo'], 0, 40)); ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
 </div>
</section>
<section id="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Galeria de Fotos</h2>
            <p class="wow fadeInDown">Bons momentos precisam serem sempre lembrados, e nada melhor que fotos para que nunca sejam apagados de nossas mentes.</p>
        </div>     

        <div class="portfolio-items">
            <?php foreach($historias as $hist): ?>
            <div class="portfolio-item designing">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" id="img-photo-galeria" src="<?php echo BASE_URL; ?>assets/images/imgs/<?php echo $hist['url']; ?> " alt="">
                        <div class="portfolio-info">
                            <h3><?php echo $hist['rotulo']; ?></h3>
                            Sem Descrição...
                            <a class="preview" href="<?php echo BASE_URL; ?>assets/images/imgs/<?php echo $hist['url']; ?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
            </div><!--/.historias-item-->
            <?php endforeach; ?>
        </div>
    </div><!--/.container-->
</section><!--/#historias-->
<section class="testimonial-area" id="testimonial">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeInDown">Depoimentos</h2>
            <p class="wow fadeInDown">E você ? o que acha ? gostaria de compartilhar um pouco de sua hitória conosco ?<br/>diga-nos como foi sua batalha contra balança.</p>
        </div>
        <div class="row">
            <?php foreach($depoimentos as $d): ?>
                <div class="col-md-4">
                    <div class="single-testimonial animate_fade_in" style="opacity: 1; right: 0px;">
                        <div class="row">
                            <div class="col-xs-12">
                                <blockquote><?php echo utf8_encode(substr($d['depoi'], 0, 400)); ?></blockquote>
                            </div>
                        </div>
                    <div class="row"> 
                        <div class="col-xs-12">
                            <h5><?php echo $d['name_depo']; ?></h5>                            
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
    <h6 style="text-align: center;"><a class="btn btn-success" style="border-radius: 5px;" href="<?php echo BASE_URL; ?>depoimentos/ver">adicionar depoimento</a></h6>
</section><!--Depoimentos-->