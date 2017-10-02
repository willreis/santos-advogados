<?php
    include('header.php');
?>
<!-- Main Content
================================================== -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">

        <!--  Page Heading -->
        <div class="page-heading no-margin">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="page-title">Contato</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--  Page Heading -->

        <!-- Header Image -->
        <div class="header-image">
            <img src="img/contact-top.jpg" alt="">
        </div>
        <!-- /header-image -->

        <!-- container  -->
        <div class="container contact-page">
            <div class="row">
                <!-- col -->
                <div class="col-sm-4">
                    <!-- contact box -->
                    <div class="contact-box">
                        <h3>NOSSO ENDEREÇO</h3>
                        <p class="endereco">Rua Cel. Alfredo Fláquer nº 285 SL 07 - Centro - Santo André - SP - Brasil - CEP: 09020-030</p>
                        <h3>Telefone</h3>
                        <a href="tel:+5511438889117">+55 11 4388-89117</a> / <a href="tel:+551149904518">+55 11 4990-4518 </a>
                        <h3>Celular</h3>
                        <a href="tel:+5511989506588">+55 11 98950-6588</a>
                        <h3>EMAIL</h3>
                        <a href="mailto:santosadvogados.juridico@gmail.com">santosadvogados.juridico@gmail.com</a>
                    </div>
                    <!-- /contact box -->

                    <!-- Map -->
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.3849851845544!2d-46.52829558555605!3d-23.662186584632877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce428809182bbd%3A0x5a19f322127b81e8!2sRua+Coronel+Alfredo+Flaquer%2C+285+-+07+-+Centro%2C+Santo+Andr%C3%A9+-+SP%2C+09020-030!5e0!3m2!1spt-BR!2sbr!4v1506296792300" height="280"  frameborder="0" width="100%" allowfullscreen></iframe>
                    </div>
                    <!-- /Map -->
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-sm-8">
                    <h2>Fale conosco</h2>
                    <hr class="line-block">
                    <span class="heading-details">
                        Entre em contato conosco através do formulário abaixo.
                    </span>

                    <form class="form contf7 main-contact-form" action="enviaContato.php" method="post">
                        <div class="row">
                        <!-- Form Group -->
                        <div class="col-sm-6 form-group">
                            <input type="text" class="contf7-form-control required" placeholder="NOME *" id="name" name="name" required />
                            <!-- Form Group -->
                        </div>
                        <!-- Form Group -->

                        <!-- Form Group -->
                        <div class="col-sm-6 form-group">
                            <input type="email" class="contf7-form-control required" placeholder="EMAIL *" id="email" name="email" required/>
                        </div> 

                        <div class="col-sm-12 form-group">
                            <input type="text" class="contf7-form-control required" placeholder="TELEFONE *" id="telefone" name="telefone" required/>
                        </div>
                        <!-- Form Group -->

                        <!-- Form Group -->
                        <div class="col-sm-12 form-group">
                            <input type="text" class="contf7-form-control" placeholder="ASSUNTO *" id="subject" name="subject" required/>
                        </div>
                        <!-- Form Group -->

                        <!-- Form Group -->
                        <div class="col-sm-12 form-group">
                            <textarea class="contf7-form-control required" placeholder="MENSAGEM *" name="message" id="message" required></textarea>
                        </div>
                        <!-- Form Group -->

                        <!-- Form Group -->
                        <div class="col-sm-12 form-group">
                            <input type="submit" value="Enviar" class="">
                        </div>
                        <!-- Form Group -->
                        </div>                    
                </form>

                </div>
                <!-- /col -->
            </div>
        </div>
        <!-- /container -->


    </div>
</div>
<!-- /Main Content    
================================================== -->
<!-- Contact Form - Ajax Messages
========================================================= -->
<!-- Form Sucess -->
<div class="form-result modal-wrap" id="contactSuccess">
  <div class="modal-bg"></div>
  <div class="modal-content">
    <h4 class="modal-title"><i class="fa fa-check-circle"></i> Sucesso!</h4>
    <p>Sua mensagem foi enviada com sucesso.</p>
  </div>
</div>
<!-- /Form Sucess -->
<!-- form-error -->
<div class="form-result modal-wrap" id="contactError">
  <div class="modal-bg"></div>
  <div class="modal-content">
    <h4 class="modal-title"><i class="fa fa-times"></i> Erro</h4>
    <p>Ocorreu um erro, por favor tente novamente.</p>
  </div>
</div>
<!-- /form-error -->
<!-- form-sending -->
<div class="form-result modal-wrap" id="contactWait">
  <div class="modal-bg"></div>
  <div class="modal-content">  
    <div class="modal-loader"></div> 
    <p>Enviando sua mensagem...</p>
  </div>
</div>
<!-- /form-sending -->
<!-- / Contact Form - Ajax Messages
========================================================= -->
<?php
    include('footer.php');
?>