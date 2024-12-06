<!-- Portfolio -->
<section id="portfolio" class="py-8 md:py-16 bg-zinc-950 px-4 sm:px-6 md:px-12">
  <div class="container mx-auto">
    <!-- Título -->
    <div class="flex flex-col items-center mb-8 md:mb-12">
      <h2 class="text-xl sm:text-2xl md:text-4xl font-bold text-white mb-2 pt-40">NOSSO PORTFÓLIO</h2>
      <div class="w-24 sm:w-40 h-1 bg-red-600"></div>
    </div>

    <!-- Menu de filtragem -->
    <div class="flex flex-wrap justify-center gap-2 md:gap-4 mb-6 md:mb-8">
      <button data-filter="photo" class="filter-btn bg-gray-600 text-white py-2 px-4 sm:px-6 rounded text-sm hover:bg-gray-700">Fotos</button>
      <button data-filter="horizontal" class="filter-btn bg-gray-600 text-white py-2 px-4 sm:px-6 rounded text-sm hover:bg-gray-700">Vídeos Horizontais</button>
      <button data-filter="vertical" class="filter-btn bg-gray-600 text-white py-2 px-4 sm:px-6 rounded text-sm hover:bg-gray-700">Vídeos Verticais</button>
    </div>

    <!-- Cards do Portfólio -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8" id="portfolio-items">

      <!-- Vídeo Horizontal -->
      <div class="portfolio-item video horizontal relative hidden">
        <div class="video-container">
          <img src="BlackRec/public/img/ThumbYoutube/1.jpg" alt="Vídeo 1" class="rounded-lg object-cover w-full h-full">
          <a href="https://www.youtube.com/watch?v=XLTnOMLzZ7U" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg video-play-btn" data-video="https://www.youtube.com/embed/XLTnOMLzZ7U">
            <img src="BlackRec/public/img/icons/play-button.svg" alt="Play" class="w-10 sm:w-12 h-10 sm:h-12">
          </a>
        </div>
      </div>

      <!-- Vídeo Horizontal -->
      <div class="portfolio-item video horizontal relative hidden">
        <div class="video-container">
          <img src="BlackRec/public/img/ThumbYoutube/2.jpg" alt="Vídeo 2" class="rounded-lg object-cover w-full h-full">
          <a href="https://youtu.be/ixZLYYOePLU" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg video-play-btn" data-video="https://www.youtube.com/embed/49q1NiA7EX4">
            <img src="BlackRec/public/img/icons/play-button.svg" alt="Play" class="w-10 sm:w-12 h-10 sm:h-12">
          </a>
        </div>
      </div>


      
      <!-- Vídeo Horizontal -->
      <div class="portfolio-item video horizontal relative hidden">
        <div class="video-container">
          <img src="BlackRec/public/img/ThumbYoutube/2.jpg" alt="Vídeo 2" class="rounded-lg object-cover w-full h-full">
          <a href="https://youtu.be/hoavFyka-uU" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg video-play-btn" data-video="https://www.youtube.com/embed/49q1NiA7EX4">
            <img src="BlackRec/public/img/icons/play-button.svg" alt="Play" class="w-10 sm:w-12 h-10 sm:h-12">
          </a>
        </div>
      </div>

      <!-- Vídeo Vertical (Fictício) -->
      <div class="portfolio-item video vertical relative hidden">
        <div class="video-container">
          <img src="BlackRec/public/img/ThumbYoutube/3.jpg" alt="Vídeo Vertical 1" class="rounded-lg object-cover w-full h-full">
          <a href="#" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg video-play-btn" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">
            <img src="BlackRec/public/img/icons/play-button.svg" alt="Play" class="w-10 sm:w-12 h-10 sm:h-12">
          </a>
        </div>
      </div>

      <!-- Vídeo Vertical (Fictício) -->
      <div class="portfolio-item video vertical relative hidden">
        <div class="video-container">
          <img src="BlackRec/public/img/ThumbYoutube/4.jpg" alt="Vídeo Vertical 2" class="rounded-lg object-cover w-full h-full">
          <a href="#" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg video-play-btn" data-video="https://www.youtube.com/embed/tgbNymZ7vqY">
            <img src="BlackRec/public/img/icons/play-button.svg" alt="Play" class="w-10 sm:w-12 h-10 sm:h-12">
          </a>
        </div>
      </div>

      <!-- Foto 1 -->
      <div class="portfolio-item photo relative hidden">
        <img src="BlackRec/public/img/portfolio/photo1.jpg" alt="Foto 1" class="rounded-lg cursor-pointer object-cover w-full h-full" data-toggle="modal" data-target="#imageModal" data-image="BlackRec/public/img/portfolio/photo1.jpg">
      </div>

      <!-- Foto 2 -->
      <div class="portfolio-item photo relative hidden">
        <img src="BlackRec/public/img/portfolio/photo2.jpg" alt="Foto 2" class="rounded-lg cursor-pointer object-cover w-full h-full" data-toggle="modal" data-target="#imageModal" data-image="BlackRec/public/img/portfolio/photo2.jpg">
      </div>

      <!-- Foto 3 -->
      <div class="portfolio-item photo relative hidden">
        <img src="BlackRec/public/img/portfolio/photo3.jpg" alt="Foto 3" class="rounded-lg cursor-pointer object-cover w-full h-full" data-toggle="modal" data-target="#imageModal" data-image="BlackRec/public/img/portfolio/photo3.jpg">
      </div>

      <!-- Foto 4 -->
      <div class="portfolio-item photo relative hidden">
        <img src="BlackRec/public/img/portfolio/photo4.jpg" alt="Foto 4" class="rounded-lg cursor-pointer object-cover w-full h-full" data-toggle="modal" data-target="#imageModal" data-image="BlackRec/public/img/portfolio/photo4.jpg">
      </div>

      <!-- Outras Imagens e Vídeos Aqui -->
    </div>

  </div>
</section>

<!-- Modal de Imagem -->
<div id="imageModal" class="hidden fixed inset-0 flex justify-center items-center bg-black bg-opacity-75 z-50">
  <div class="relative">
    <span id="closeModal" class="absolute top-2 right-2 text-white text-2xl cursor-pointer">&times;</span>
    <img id="modalImage" src="" alt="Imagem em Modal" class="max-w-full max-h-screen object-contain cursor-zoom-in">
  </div>
</div>

<!-- Modal de Vídeo -->
<div id="videoModal" class="hidden fixed inset-0 flex justify-center items-center bg-black bg-opacity-75 z-50">
  <div class="relative">
    <span id="closeVideoModal" class="absolute top-2 right-2 text-white text-2xl cursor-pointer">&times;</span>
    <iframe id="modalVideo" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>

<script>
  // Abrir imagem no modal
  document.querySelectorAll('.portfolio-item.photo img').forEach(img => {
    img.addEventListener('click', function() {
      const imageUrl = this.getAttribute('data-image');
      document.getElementById('modalImage').src = imageUrl;
      document.getElementById('imageModal').classList.remove('hidden');
    });
  });

  // Fechar modal de imagem
  document.getElementById('closeModal').addEventListener('click', () => {
    document.getElementById('imageModal').classList.add('hidden');
  });

  // Abrir vídeo no modal
  document.querySelectorAll('.video-play-btn').forEach(button => {
    button.addEventListener('click', function() {
      const videoUrl = this.getAttribute('data-video');
      document.getElementById('modalVideo').src = videoUrl;
      document.getElementById('videoModal').classList.remove('hidden');
    });
  });

  // Fechar modal de vídeo
  document.getElementById('closeVideoModal').addEventListener('click', () => {
    document.getElementById('videoModal').classList.add('hidden');
    document.getElementById('modalVideo').src = ''; // Para parar o vídeo
  });

  // Exibir todos os itens ao carregar a página
  document.addEventListener('DOMContentLoaded', () => {
    const allItems = document.querySelectorAll('.portfolio-item');
    allItems.forEach(item => {
      item.classList.remove('hidden');  // Remover 'hidden' para exibir todos os itens
    });
  });

  // Filtragem de itens
  const filterButtons = document.querySelectorAll('.filter-btn');
  filterButtons.forEach(button => {
    button.addEventListener('click', function() {
      const filter = this.getAttribute('data-filter');
      const items = document.querySelectorAll('.portfolio-item');

      items.forEach(item => {
        // Remover todos os filtros
        item.classList.add('hidden');

        // Mostrar itens baseados no filtro
        if (filter === 'photo' && item.classList.contains('photo')) {
          item.classList.remove('hidden');
        } else if (filter === 'horizontal' && item.classList.contains('horizontal')) {
          item.classList.remove('hidden');
        } else if (filter === 'vertical' && item.classList.contains('vertical')) {
          item.classList.remove('hidden');
        }
      });
    });
  });
</script>

