<!-- Portfolio -->
<section id="portfolio" class="py-8 md:py-16 bg-zinc-950 px-4 sm:px-6 md:px-12">
  <div class="container mx-auto">
    <!-- Título -->
    <div class="flex flex-col items-center mb-8 md:mb-12">
      <h2 class="text-xl sm:text-2xl md:text-4xl font-bold text-white mb-2">NOSSO PORTFÓLIO</h2>
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
      <!-- Exemplo de Foto -->
      <div class="portfolio-item photo relative">
        <img src="BlackRec/public/img/portfolio/photo1.jpg" alt="Foto 1" class="rounded-lg cursor-pointer">
      </div>

      <!-- Exemplo de Vídeo -->
      <div class="portfolio-item video relative">
        <img src="BlackRec/public/img/portfolio/thumbYoutube1.png" alt="Vídeo 1" class="rounded-lg">
        <a href="https://www.youtube.com/watch?v=AVKHkOQ5bYQ" target="_blank" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg">
          <img src="BlackRec/public/img/icons/play-button.svg" alt="Play" class="w-10 sm:w-12 h-10 sm:h-12">
        </a>
      </div>

      <!-- Fotos -->
      <div class="portfolio-item photo relative">
        <img src="BlackRec/public/img/portfolio/photo2.jpg" alt="Foto 2" class="rounded-lg cursor-pointer">
      </div>

      <!-- Vídeos -->
      <div class="portfolio-item video relative">
        <img src="BlackRec/public/img/portfolio/thumbYoutube2.png" alt="Vídeo 2" class="rounded-lg">
        <a href="https://www.youtube.com/watch?v=ixZLYYOePLU&t=17s" target="_blank" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg">
          <img src="BlackRec/public/img/icons/play-button.svg" alt="Play" class="w-10 sm:w-12 h-10 sm:h-12">
        </a>
      </div>

      <!-- Itens Adicionais -->
      <div class="hidden more-items">
        <div class="portfolio-item video relative">
          <img src="BlackRec/public/img/portfolio/thumbYoutube3.png" alt="Vídeo 3" class="rounded-lg">
          <a href="https://www.youtube.com/watch?v=hoavFyka-uU" target="_blank" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg">
            <img src="BlackRec/public/img/icons/play-button.svg" alt="Play" class="w-10 sm:w-12 h-10 sm:h-12">
          </a>
        </div>
      </div>
    </div>

    <!-- Botão Ver Mais -->
    <div class="text-center mt-6 md:mt-8">
      <button id="see-more-btn" class="bg-red-600 text-white py-2 px-6 sm:px-8 rounded text-sm hover:bg-red-700">
        Ver Mais
      </button>
    </div>
  </div>
</section>

<script>
  const seeMoreBtn = document.getElementById('see-more-btn');
  const moreItems = document.querySelector('.more-items');

  seeMoreBtn.addEventListener('click', () => {
    moreItems.classList.toggle('hidden');
    seeMoreBtn.textContent = moreItems.classList.contains('hidden') ? 'Ver Mais' : 'Ver Menos';
  });
</script>
