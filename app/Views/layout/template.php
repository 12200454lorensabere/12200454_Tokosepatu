<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
  <link rel="stylesheet" href="/css/styles.css" />
  <link rel="stylesheet" href="/css/responsive.css" />
  <title>Sneaker Store</title>
</head>

<body>
  <br><br>
  <!-- bagian sidebar -->
  <input type="checkbox" id="check" />
  <div class="sidebar">
    <ul>
      <li><a href="/">home</a></li>
      <li><a href="/about">about</a></li>
      <li><a href="#product">products</a></li>
    </ul>
  </div>

  <!-- bagian header -->
  <header>
    <div class="container">
      <div class="header-left">
        <h1><a href="/">sneakerstore</a></h1>
      </div>
      <div class="header-right">
        <ul>
          <li><a href="/">home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="#product">products</a></li>
        </ul>
      </div>
      <label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
    </div>
  </header>

  <?= $this->renderSection('content'); ?>

  <section id="contact">
    <div class="container">
      <h3>Contact</h3>
      <div class="col-3">
        <h4>Address</h4>
        <p>Jl. Merdeka 59 Pontianak , Indonesia</p>
      </div>

      <div class="col-3">
        <h4>Email</h4>
        <p>sneakerstore@gmail.com</p>
      </div>

      <div class="col-3">
        <h4>Telephone</h4>
        <p>+62 8229 0921 12</p>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <small>Copyright &copy; 2021 - SNEAKERSTORE</small>
    </div>
  </footer>
  <script src="/js/script.js"></script>
</body>

</html>