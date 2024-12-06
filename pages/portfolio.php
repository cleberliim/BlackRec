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
      <button data-filter="all" class="filter-btn bg-red-600 text-white py-2 px-4 sm:px-6 rounded text-sm hover:bg-red-700">Todos</button>
      <button data-filter="photo" class="filter-btn bg-gray-600 text-white py-2 px-4 sm:px-6 rounded text-sm hover:bg-gray-700">Fotos</button>
      <button data-filter="video" class="filter-btn bg-gray-600 text-white py-2 px-4 sm:px-6 rounded text-sm hover:bg-gray-700">Vídeos</button>
    </div>

    <!-- Cards do Portfólio -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8" id="portfolio-items">

      <!-- Vídeo de casamento -->
      <div class="portfolio-item video relative">
        <div class="video-container">
          <img src="BlackRec/public/img/ThumbYoutube/1.jpg" alt="Vídeo 1" loading="lazy" class="rounded-lg object-cover w-full h-full cursor-pointer" onclick="openModal('https://www.youtube.com/embed/XLTnOMLzZ7U')">
        </div>
      </div>

      <!-- Vídeo documentário -->
      <div class="portfolio-item video relative">
        <div class="video-container">
          <img src="BlackRec/public/img/ThumbYoutube/2.jpg" alt="Vídeo 2" loading="lazy" class="rounded-lg object-cover w-full h-full cursor-pointer" onclick="openModal('https://www.youtube.com/embed/49q1NiA7EX4')">
        </div>
      </div>

      <!-- Fotos -->
      <div class="portfolio-item photo relative">
        <img src="BlackRec/public/img/portfolio/photo1.jpg" alt="Foto 1" loading="lazy" class="rounded-lg cursor-pointer object-cover w-full h-full">
      </div>

    </div>

    <!-- Botão Ver Mais -->
    <div class="text-center mt-6 md:mt-8 w-full">
      <button id="see-more-btn" class="bg-red-600 text-white font-bold tracking-wider py-2 px-6 sm:px-8 rounded text-sm hover:bg-red-700 w-full">
        CARREGAR MAIS ...
      </button>
    </div>
  </div>
</section>

<!-- Modal -->
<div id="video-modal" class="fixed inset-0 bg-black bg-opacity-80 hidden items-center justify-center z-50">
  <div class="relative w-full h-full p-4 bg-black">
    <!-- Botão Fechar -->
    <div id="close-modal" class="absolute top-2 right-2 cursor-pointer text-white text-3xl">×</div>
    <iframe id="video-iframe" class="w-full h-full" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>

<script>
  // Função para abrir o modal com o vídeo
  function openModal(videoUrl) {
    const modal = document.getElementById('video-modal');
    const iframe = document.getElementById('video-iframe');
    iframe.src = videoUrl;  // Configura a URL do vídeo dentro do iframe
    modal.classList.remove('hidden');  // Exibe o modal
  }

  // Função para fechar o modal
  function closeModal() {
    const modal = document.getElementById('video-modal');
    const iframe = document.getElementById('video-iframe');
    iframe.src = '';  // Remove o vídeo do iframe
    modal.classList.add('hidden');  // Oculta o modal
  }

  // Adicionar o evento de clique no "X" para fechar o modal
  document.getElementById('close-modal').addEventListener('click', closeModal);

  // Adicionar um evento de clique fora do modal para fechá-lo
  window.addEventListener('click', (event) => {
    const modal = document.getElementById('video-modal');
    if (event.target === modal) {
      closeModal();
    }
  });
</script>
