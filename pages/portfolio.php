  <!-- Portfólio -->
  <section id="portfolio" class="py-8 md:py-16 bg-zinc-950 px-4 sm:px-6 md:px-12">
    <div class="container mx-auto">
      <div class="flex flex-col items-center mb-8 md:mb-12">
        <h2 class="text-xl sm:text-2xl md:text-4xl font-bold text-white mb-2 pt-40">NOSSO PORTFÓLIO</h2>
        <div class="w-24 sm:w-40 h-1 bg-red-600"></div>
      </div>

      <div class="flex flex-wrap justify-center gap-2 md:gap-4 mb-6 md:mb-8">
        <button data-filter="all" class="filter-btn bg-red-600 text-white py-2 px-4 sm:px-6 rounded text-sm hover:bg-red-700">Todos</button>
        <button data-filter="photo" class="filter-btn bg-gray-600 text-white py-2 px-4 sm:px-6 rounded text-sm hover:bg-gray-700">Fotos</button>
        <button data-filter="video" class="filter-btn bg-gray-600 text-white py-2 px-4 sm:px-6 rounded text-sm hover:bg-gray-700">Vídeos</button>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8" id="portfolio-items">
        <div class="portfolio-item video">
          <div class="video-container">
            <img src="BlackRec/public/img/ThumbYoutube/1.jpg" alt="Vídeo 1" class="rounded-lg object-cover w-full h-full cursor-pointer" onclick="openModal('https://www.youtube.com/embed/XLTnOMLzZ7U')">
          </div>
        </div>
        <div class="portfolio-item photo">
          <img src="BlackRec/public/img/portfolio/photo1.jpg" alt="Foto 1" class="rounded-lg cursor-pointer object-cover w-full h-full">
        </div>
      </div>
    </div>
  </section>

  <!-- Botão que chama o modal -->
  <img src="thumbnail.jpg" onclick="openModal('https://www.youtube.com/embed/dQw4w9WgXcQ')" alt="Vídeo">
  <!-- Modal -->
  <div id="video-modal" class="fixed inset-0 bg-black bg-opacity-80 hidden items-center justify-center z-50">
    <div class="relative w-11/12 max-w-4xl bg-black p-4 rounded-lg">
      <button id="close-modal" class="absolute top-2 right-2 text-white text-3xl font-bold cursor-pointer">
        &times;
      </button>
      <iframe id="video-iframe" class="w-full h-96" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>


  <script>
    const modal = document.getElementById('video-modal');
    const closeModalButton = document.getElementById('close-modal');
    const iframe = document.getElementById('video-iframe');

    // Tornar openModal global
    window.openModal = function(videoUrl) {
      iframe.src = videoUrl;
      modal.classList.remove('hidden'); // Mostra o modal
      modal.style.display = 'flex'; // Garante que o modal é exibido corretamente
    };

    // Tornar closeModal global
    window.closeModal = function() {
      modal.classList.add('hidden'); // Esconde o modal
      modal.style.display = 'none'; // Remove completamente do fluxo
      iframe.src = ''; // Limpa o conteúdo do iframe para parar o vídeo
    };

    // Evento de clique no botão "X"
    closeModalButton.addEventListener('click', window.closeModal);

    // Evento para fechar ao clicar fora do modal
    window.addEventListener('click', (event) => {
      if (event.target === modal) {
        window.closeModal();
      }
    });
  </script>