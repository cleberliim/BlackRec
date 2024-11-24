<!-- Portfolio -->
<section id="portfolio" class="py-16 bg-zinc-950 p-40">
  <div class="container mx-auto">
    <!-- Título -->
    <div class="flex flex-col items-center mb-12">
      <h2 class="text-2xl md:text-4xl font-bold text-white mb-2">NOSSO PORTFÓLIO</h2>
      <div class="w-80 h-1 bg-red-600"></div>
    </div>

    <!-- Menu de filtragem -->
    <div class="flex justify-center gap-4 mb-8">
      <button data-filter="all" class="filter-btn bg-red-600 text-white py-2 px-6 rounded hover:bg-red-700">Todos</button>
      <button data-filter="photo" class="filter-btn bg-gray-600 text-white py-2 px-6 rounded hover:bg-gray-700">Fotos</button>
      <button data-filter="video" class="filter-btn bg-gray-600 text-white py-2 px-6 rounded hover:bg-gray-700">Vídeos</button>
    </div>

    <!-- Cards do Portfólio -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-items">
      <!-- Exemplo de Foto -->
      <div class="portfolio-item photo relative">
        <img src="BlackRec/public/img/portfolio/photo1.jpg" alt="Foto 1" class="rounded-lg cursor-pointer">
      </div>

      <!-- Exemplo de Vídeo -->
      <div class="portfolio-item video relative">
        <img src="BlackRec/public/img/portfolio/thumbYoutube1.png" alt="Vídeo 1" class="rounded-lg">
        <a href="https://www.youtube.com/watch?v=AVKHkOQ5bYQ" target="_blank" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg">
          <img src="BlackRec/public/img/icons/play-button.svg" alt="Play" class="w-12 h-12">
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
          <img src="BlackRec/public/img/icons/play-button.svg" alt="Play" class="w-12 h-12">
        </a>
      </div>

      <!-- Mais Vídeos -->
      <div class="portfolio-item video relative">
        <img src="BlackRec/public/img/portfolio/thumbYoutube3.png" alt="Vídeo 3" class="rounded-lg">
        <a href="https://www.youtube.com/watch?v=hoavFyka-uU" target="_blank" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg">
          <img src="BlackRec/public/img/icons/play-button.svg" alt="Play" class="w-12 h-12">
        </a>
      </div>

      <div class="portfolio-item video relative">
        <img src="BlackRec/public/img/portfolio/thumbYoutube4.png" alt="Vídeo 3" class="rounded-lg">
        <a href="https://youtube.com/watch?v=zItB3Cun3Pw" target="_blank" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-lg">
          <img src="BlackRec/public/img/icons/play-button.svg" alt="Play" class="w-12 h-12">
        </a>
      </div>
  </div>
</section>
