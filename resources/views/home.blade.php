<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Album example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <link rel="stylesheet" href="../assets/dist/css/item-styles.css">
    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .fullscreen-background {
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        background-image: url('../images/MainBackground.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: -1; 
      }
    </style>

    
  </head>
  <body>
    <div class="fullscreen-background"></div>
    
<header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="../images/Logo.png" width="48" height="48" style="margin-right: 16px"></img>
        <strong>Perfum Song</strong>
      </a>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5" style="background-image: url('../images/Background.png'); background-position: 0% 0%">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light" style="color: white">Відкрийте світ вишуканих ароматів</h1>
        <p class="lead text-muted">Ексклюзивна колекція парфумів, що розкривають вашу індивідуальність</p>
        <p>
          <a href="#" class="btn btn-primary my-2" style="background: #212529">Відкрити колекцію</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5">
    <div class="container" style="background-image: url('../images/Background.png'); background-position: 0% 33%">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        <div class="col">
          <div class="item-card">
            <div class="item-view">
                <img src="../images/sticker1.webp" alt="">
            </div>
            <div class="item-text">
                <h3 class="item-header">Рожева Мрія</h3>
                <p class="item-description">Квітковий аромат</p>
            </div>
            <div class="item-shop">
                <span class="item-price">1000 грн</span>
                <a class="item-add" href="#">Додати</a>
            </div>
          </div>
        </div>

      </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5" style="background: #212529">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
