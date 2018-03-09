<section id="contact-us">
  <div class="container">
    <?php if($mens): ?>
      <div class="alert alert-success">
        <?php echo $mens; ?>
      </div>
    <?php endif; ?>
    <div class="section-header">
      <h2 class="section-title wow fadeInDown">Contato</h2>
      <p class="wow fadeInDown">Em casos de duvidas ou queira compartilhar sua idéia, entre em contato direto comigo enviando um e-mail para: <u>simonecssemiro34.sc.sc@.com</u></p>
    </div>
  </div>
</section><!--/#contact-us-->


<section id="contact">
  
  <div class="container">
    <div class="container contact-info">
      <div class="row">
        <div class="col-sm-4 col-md-4">
          <div class="contact-form"> 
            <address>
              <strong>Sempre de bem com a vida.</strong><br/>
              Cláudio<br/>
              Rua Almenara<br/>
              sem número<br/>
              Brasil<br>
              <abbr title="Phone"></abbr> (37) 9 9952-6155
            </address>
          </div></div>
          <div class="col-sm-8 col-md-8">
            <div class="contact-form">
              <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
              
              <form method="POST" name="sentMessage" id="contactForm"  novalidate> 
               <div class="control-group">
                <div class="controls">
                  <input type="text"  name="nome" class="form-control" 
                  placeholder="Digite seu nome" id="name" required
                  data-validation-required-message="Please enter your name" />
                  <p class="help-block"></p>
                </div>
              </div>     
              <div class="control-group">
                <div class="controls">
                  <input type="email"  name="email" class="form-control" placeholder="Email" 
                  id="email" required
                  data-validation-required-message="Please enter your email" />
                </div>
              </div>  
              
              <div class="control-group">
               <div class="controls">
                 <textarea rows="10" cols="100" class="form-control" name="assunto" 
                 placeholder="Messagem" id="message" required
                 data-validation-required-message="Please enter your message" minlength="5" 
                 data-validation-minlength-message="Min 5 characters" 
                 maxlength="999" style="resize:none"></textarea>
               </div>
             </div>        
             <div id="success"> </div> <!-- For success/fail messages -->
             <button type="submit" class="btn btn-primary pull-right">Enviar</button><br />
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>   
</section>