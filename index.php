<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Delícias Graff</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <style>
    .whatsapp-float {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
      background-color: transparent;
      border-radius: 50%;
      transition: transform 0.3s ease;
    }

    .whatsapp-float:hover {
      transform: scale(1.1);
    }

    .whatsapp-float img {
      width: 56px;
      height: 56px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
  </style>

  <style>
    body {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
      background-color: #ffffff;
      color: #1d1d1f;
      margin: 0;
      padding: 0;
    }

    nav.navbar {
      background-color: #fff;
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
    }

    .navbar-brand, .nav-link {
      color: #1d1d1f !important;
      font-weight: 500;
    }

    .hero {
      text-align: center;
      padding: 10vh 2rem;
      background: url('https://media.istockphoto.com/id/1187830875/photo/confectioner-decorating-chocolate-cake-close-up.jpg?s=612x612&w=0&k=20&c=sAUop7R4pohc-Pghb3CqVJnFE44p2phGi47z7pjK4Lc=') center/cover no-repeat;
      color: #f5f5f7;
      font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    .hero h1 {
      font-size: 4rem;
      font-weight: 600;
    }

    .hero h2 {
      font-size: 3rem;
      font-weight: 400;
    }

    .hero p {
      font-size: 1.5rem;      
    }

    section {
      padding: 6rem 1rem;
    }

    .section-title {
      font-size: 2.5rem;
      font-weight: 600;
      text-align: center;
      margin-bottom: 2rem;
    }

    .img-fluid {
      border-radius: 1rem;
    }

    footer {
      text-align: center;
      padding: 2rem;
      background-color: #f5f5f7;
      color: #6e6e73;
    }
  </style>
</head>
<body>

  <!-- Navbar 
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Delícias Graff</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="#produtos">Produtos</a></li>
          <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
          <li class="nav-item"><a class="nav-link" href="pedido.php">Pedido</a></li>
        </ul>
      </div>
    </div>
  </nav>-->

  <?php include 'header.php'; ?>

  <!-- Hero -->
  <header class="hero">
    <div class="container">
      <h2>Tradição, sabor e carinho</h2>
    </div>      
  </header>

  <!-- Sobre -->
  <section id="sobre">
    <div class="container" data-aos="fade-up">
      <h2 class="section-title">Sobre Nós</h2>
      <div class="row align-items-center">
        <div class="col-md-6">
          <p class="lead">A Delícias Graff é mais que uma confeitaria — é uma experiência. Fundada pela família Graff em 2010, nossa missão é levar qualidade e sabor para os eventos mais importantes da sua vida.</p>
        </div>
        <div class="col-md-6">
          <img src="logo_grande.png" alt="Sobre" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- Produtos -->
  <section id="produtos" style="background-color: #f5f5f7;">
    <div class="container" data-aos="fade-up">
      <h2 class="section-title">Nossos Produtos</h2>
      <div class="row text-center g-4">
        <div class="col-md-4">
          <img src="doces.png" class="img-fluid" alt="Pães">
          <h5 class="mt-3">Doces</h5>
          <p>Brigadeiro, beijinho, caramelo e muito mais.</p>
        </div>
        <div class="col-md-4">
          <img src="salgados.png" class="img-fluid" alt="Doces">
          <h5 class="mt-3">Salgados</h5>
          <p>Uma experiência inesquecível a cada sabor.</p>
        </div>
        <div class="col-md-4">
          <img src="bolo.png" class="img-fluid" alt="Café">
          <h5 class="mt-3">Tortas</h5>
          <p>Para celebrar os melhores momentos da vida.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contato -->
  <section id="contato">
    <div class="container" data-aos="fade-up">
      <h2 class="section-title">Fale Conosco</h2>
      <div class="row align-items-center">
        <div class="col-md-6">
          <p class="lead"><strong>Email:</strong> deliciasgraff@gmail.com</p>
          <p class="lead"><strong>Telefone:</strong> (49) 99102-6350</p>
          <p class="lead"><strong>Endereço:</strong> Rua Vagalumess, 51e - Efapi - Chapecó, SC</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Delícias Graff — Todos os direitos reservados.</p>
  </footer>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>
  <!-- Botão WhatsApp Fixo -->
  <a href="https://wa.me/5549991026350" target="_blank" class="whatsapp-float" aria-label="Fale conosco no WhatsApp">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" width="48" height="48">
  </a>
</body>
</html>
