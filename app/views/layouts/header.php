<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BlackRec</title>

  <!-- Taiwindcss -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Custom css -->
  <link href="/public/assets/css/custom.css" rel="stylesheet" title="custom">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">
  <?php include_once("../BlackRec/app/views/layouts/navbar.php") ?>

  
 <!-- Botão e Modal -->
<header class="relative h-screen bg-cover bg-center" style="background-image: url('http://localhost/BlackRec/public/img/background.png');">
  <div class="absolute inset-0 bg-black bg-opacity-80 flex flex-col items-center justify-center text-center px-4">
    <h1 class="text-white font-thin font-montserrat text-[20px] mb-8" style="letter-spacing: 0.5px;">
      Bem-vindo ao universo <span class="font-bold">Blackrec</span>, onde a arte ganha vida <br>através de vídeos autênticos e ousados.
    </h1>
    <button id="playButton" class="w-24 h-24 rounded-full bg-red-600 flex items-center justify-center hover:bg-red-700 transition duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-10 h-10">
        <path d="M8 5v14l11-7z" />
      </svg>
    </button>
  </div>
</header>

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
  const videoUrl = "https://www.youtube.com/embed/AVKHkOQ5bYQ?autoplay=1";  //alterar a url do video

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
