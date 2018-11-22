<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Feval | Landing-page</title>
  <link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,400italic,300italic,300|Raleway:300,400,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>
  <div class="content">
    <div class="container wow fadeInUp delay-03s">
      <div class="row">
        <div class="logo text-center">
          <img src="img/logo.png" alt="logo" width="400">
          <h2>Algo grandioso esta por suceder aqui</h2>
        </div>

        <!--div id="countdown" data-wow-delay=".3s" data-date="Dec 26, 2016 06:00:00"></div-->
        <h2 class="subs-title text-center">¡Subscribete ahora!</h2>
        <div class="subcription-info text-center">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="subscribe_form" name="register">
            <input placeholder="Ingresa tu correo..." class="email" id="email" name="email" type="email">
            <input class="subscribe" name="register" value="Subscribete!" type="submit"><i class="submit-btn" onclick="register.submit()"></i>

            <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if(!empty($correct)): ?>
                <div class="correct">
                    <ul>
                        <?php echo $correct; ?>
                    </ul>
                </div>
            <?php endif; ?>
          </form>
          <p class="sub-p">No haremos spam, no tienes porque preocuparte</p>
        </div>
      </div>
    </div>
    <section>
      <div class="container">
        <div class="row bort text-center">
          <div class="social">
            <ul>
              <li>
                <a href=""><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href=""><i class="fa fa-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="catalogo">
      <center>
          <section>
              <h3>Nuestros servicios</h3>
              <article>
                  <img src="img/planeacion.jpg">
                  <a href="#">Nosotros planeamos tu fiesta</a>
              </article>
              <article>
                  <img src="img/calendario.jpg">
                  <a href="#">Nosotros agendamos tu tiempo</a>
              </article>
              <article>
                  <img src="img/brindar.jpg">
                  <a href="#">Gasta menos tiempo planeando tu evento</a>
              </article>
              <article>
                  <img src="img/deseo.jpg">
                  <a href="#">Haz de tus fiestas tu deseo hecho realidad</a>
              </article>
          </section>
      </center>
  </section>
    <div id="contact-info">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-title">
              <i class="fa fa-envelope"></i>
              <h2>Mantente en contacto</h2>
              <p>En cuanto estemos listos, enviaremos un correo <br>Asi que mantente en contacto y atento a nuestras noticias</p>
            </div>
          </div>
          <div class="contact col-md-6 wow fadeIn delay-08s">
            <div class="col-md-10 col-md-offset-1">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="send">

              <input placeholder="Tu nombre" type="text" name="name" id="name">
              <input placeholder="Tu correo" id="email" name="email" type="email">
              <input placeholder="Asunto" type="text" name="subject" id="subject">
              <textarea name="message" rows="5" data-rule="required"></textarea>
              <input class="contact-submit" name="send" value="ENVIAR" type="submit"> 

            <?php if(!empty($errores2)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores2; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if(!empty($correct2)): ?>
                <div class="correct">
                    <ul>
                        <?php echo $correct2; ?>
                    </ul>
                </div>
            <?php endif; ?>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="row bort">

        <div class="copyright">
          © Copyright Feval Theme. Todos los derechos reservados
        </div>

      </div>
    </div>
  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>