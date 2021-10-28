<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Karnataka</title>
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/icons.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
  </head>
  <body>
    <div class="navigation">
      <input type="checkbox" class="navigation__checkbox" id="navi-toggle" />

      <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
      </label>

      <div class="navigation__background">&nbsp:</div>

      <nav class="navigation__nav">
        <ul class="navigation__list">
          <li class="navigation__item">
            <a href="index.html" class="navigation__link">About</a>
          </li>
          <li class="navigation__item" >
            <a href="index.html#bookerPlace" class="navigation__link">Book now</a>
          </li>
          <li class="navigation__item">
            <a href="login.php" class="navigation__link">Login</a>
          </li>
          <li class="navigation__item">
            <a href="index.html#bottomPlace" class="navigation__link">Contact Us</a>
          </li>
        </ul>
      </nav>
    </div>

    
    <header class="header">
      <div class="header__logo-box">
        <img src="img/logo-white.png" alt="logo" class="header__logo" />
      </div>

      <div class="header__text-box">
        <h1 class="heading-primary">
          <span class="heading-primary--main">Travel</span>
          <span class="heading-primary--sub">doesn’t become adventure until you leave yourself behind</span>
        </h1>
      </div>
    </header>

    <main>
      
      

      <section class="section-tours">
        <div class="u-center-text u-margin-bottom-big">
          <h2 class="heading-secondary">
            Most popular tours
          </h2>
        </div>
        <?php
          include_once("get_images.php");
        ?>
      </section>

      
    </main>

    <footer class="footer">
        <div class="footer__logo-box">
          <!-- === Art Direction and Density Switching === -->
          
        </div>
        <div class="row">
          <div class="col-1-of-2">
            <div class="footer__navigation">
              <ul class="footer__list">
                <li class="footer__item">
                  <a href="index.html" class="footer__link">ABOUT</a>
                </li>
                <li class="footer__item">
                  <a href="all_tours.html" class="footer__link">PACKAGES</a>
                </li>
                <li class="footer__item">
                  <a href="admin.php" class="footer__link">LOGIN</a>
                </li>
                <li class="footer__item">
                  <a href = "mailto: abhizeus2302@gmail.com" class="footer__link">CONTACT US</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-1-of-2">
            <p class="footer__copyright">
              <a id = "bottomPlace"></a>
            </p>
          </div>
        </div>
      </footer>

    <div class="popup" id="popup">
      <div class="popup__content">
        <div class="popup__img-box">
          <img src="img/gokarna.jpeg" alt="Photo 1" class="popup__img" />
          <img src="img/chitradurga.jpeg" alt="Photo 2" class="popup__img" />
        </div>
        <div class="popup__text-box">
          <a href="#section-tours" class="popup__close">&times;</a>
          <h2 class="heading-secondary u-margin-bottom-small">
            Start booking now
          </h2>
          <h3 class="heading-tertiary u-margin-bottom-small">
            Important &ndash; Please read terms and conditions before booking
          </h3>
          
          <a href="index.html#bookerPlace" class="btn btn--green">Book now</a>
        </div>
      </div>
    </div>

  </body>
</html>
