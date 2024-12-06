<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Cleber Lima">

  <title>BlackRec</title>

  <!-- TailwindCSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Custom css -->
  <link href="/public/assets/css/custom.css" rel="stylesheet" title="custom">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <!-- Font awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- Font icone -->
  <link rel="icon" href="/public/img/icons/logo.ico" type="image/x-icon">

  <!-- Incluindo Isotope -->
  <script src="https://unpkg.com/isotope-layout@3.0.7/dist/isotope.pkgd.min.js"></script>


</head>

<body class="bg-gray-100">
  <nav class="bg-black text-white py-4 px-8">
    <div class="container mx-auto flex items-center justify-between">
      <!-- Logo -->
      <div class="w-auto">
        <a href="https://blackrecprod.com.br/">
          <img src="BlackRec/public/img/logoNavbar.png" alt="Logo" class="h-12"> <!-- Atualize o caminho da imagem -->
        </a>
      </div>

      <!-- Navbar Menu (centralizado para telas maiores) -->
      <div
        id="menu"
        class="hidden md:flex flex-row items-center space-x-8 mx-auto"> <!-- Centralizado -->
        <a href="#home" class="menu-item active">HOME</a>
        <a href="#services" class="menu-item">SERVIÇOS</a>
        <a href="#portfolio" class="menu-item">PORTFÓLIO</a>
        <a href="#contact" class="menu-item">CONTATO</a>
      </div>

      <!-- Social Icons (à direita) -->
      <div class="hidden md:flex space-x-6">
        <a
          href="https://www.instagram.com/blackrecprod/"
          target="_blank"
          rel="noopener noreferrer"
          class="hover:text-gray-400"><i class="fab fa-instagram text-xl"></i></a>
        <a
          href="https://www.youtube.com/@BlackrecProducoes"
          target="_blank"
          rel="noopener noreferrer"
          class="hover:text-gray-400"><i class="fab fa-youtube text-xl"></i></a>
        <a
          href="https://www.facebook.com/blackrecprod"
          target="_blank"
          rel="noopener noreferrer"
          class="hover:text-gray-400"><i class="fab fa-facebook text-xl"></i></a>
      </div>

      <!-- Botão Hambúrguer (aparece apenas em telas pequenas) -->
      <div class="md:hidden">
        <button id="menu-toggle" class="text-white focus:outline-none">
          <i class="fas fa-bars text-2xl"></i> <!-- Ícone do Font Awesome -->
        </button>
      </div>
    </div>

    <!-- Menu para telas pequenas (hambúrguer) -->
    <div
      id="mobile-menu"
      class="hidden md:hidden flex-col items-center space-y-4 mt-4">
      <a href="#home" class="menu-item">HOME</a>
      <a href="#services" class="menu-item">SERVIÇOS</a>
      <a href="#portfolio" class="menu-item">PORTFÓLIO</a>
      <a href="#contact" class="menu-item">CONTATO</a>
    </div>
  </nav>

  <!-- Estilo CSS para o comportamento responsivo -->
  <style>
    /* Menu para quando está aberto no celular, empurrando o conteúdo para baixo */
    .menu-open {
      overflow: hidden;
      height: 100vh;
    }

    .menu-item {
      transition: all 0.3s ease-in-out;
    }

    .menu-item:hover {
      color: #f3f3f3;
    }
  </style>

  <!-- Script para alternar o menu -->
  <script>
    // Script para alternar o menu
    const menuToggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("mobile-menu");
    const body = document.body;

    menuToggle.addEventListener("click", () => {
      menu.classList.toggle("hidden");
      menu.classList.toggle("flex");
      body.classList.toggle("menu-open");
    });
  </script>


  <header class="relative h-screen bg-cover bg-center" style="background-image: url('BlackRec/public/img/background.jpg');">



    <div class="absolute inset-0 bg-black bg-opacity-80 flex flex-col items-center justify-center text-center px-4">
      <h1 class="text-white font-thin font-montserrat text-[20px] mb-8" style="letter-spacing: 0.5px;">
        Bem-vindo ao universo <span class="font-bold">Blackrec</span>, onde a arte ganha vida <br>através de vídeos autênticos e ousados.
      </h1>
      <button id="playButton" class="w-24 h-24 rounded-full bg-red-600 flex items-center justify-center hover:bg-red-700 transition duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-10 h-10">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
      <!-- Adicionando a seta animada -->
      <div class="arrow-down mt-20 absolute left-4 flex justify-center sm:mt-10 sm:relative sm:left-auto">
        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-12 h-12 sm:w-20 sm:h-20 animate-bounce">
          <path d="M12 4v16m0 0l-6-6m6 6l6-6" stroke="white" stroke-width="2" fill="none" />
        </svg>
      </div>
    </div>
  </header>



  <!-- Botão e Modal -->
  <div id="videoModal" class="hidden fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50">
    <div class="relative w-full max-w-3xl mx-auto bg-black p-4 rounded-lg shadow-lg">
      <button id="closeModal" class="absolute top-2 right-2 text-white text-2xl hover:text-gray-300">&times;</button>
      <div class="aspect-w-16 aspect-h-9">
        <iframe
          id="videoIframe"
          class="w-full h-full rounded-lg"
          src=""
          frameborder="0"
          allow="autoplay; fullscreen"
          allowfullscreen>
        </iframe>
      </div>
    </div>
  </div>

  <script>
    const playButton = document.getElementById('playButton');
    const videoModal = document.getElementById('videoModal');
    const closeModal = document.getElementById('closeModal');
    const videoIframe = document.getElementById('videoIframe');
    const videoUrl = "https://www.youtube.com/embed/AVKHkOQ5bYQ?autoplay=1"; //alterar a url do video

    playButton.addEventListener('click', () => {
      videoIframe.src = videoUrl; // Define o vídeo ao abrir o modal
      videoModal.classList.remove('hidden');
    });

    closeModal.addEventListener('click', () => {
      videoIframe.src = ""; // Para o vídeo ao fechar o modal
      videoModal.classList.add('hidden');
    });

    videoModal.addEventListener('click', (e) => {
      if (e.target === videoModal) {
        videoIframe.src = ""; // Para o vídeo ao clicar fora
        videoModal.classList.add('hidden');
      }
    });
  </script>