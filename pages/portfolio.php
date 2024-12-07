<!-- Portfolio -->
<section id="portfolio" class="py-8 md:py-16 bg-zinc-950 px-4 sm:px-6 md:px-12">
  <div class="container mx-auto">
    <!-- Título -->
    <div class="flex flex-col items-center mb-8 md:mb-12">
      <h2 class="text-xl sm:text-2xl md:text-4xl font-bold text-white mb-2 pt-40">NOSSO PORTFÓLIO</h2>
      <div class="w-24 sm:w-40 h-1 bg-red-600"></div>
    </div>

    <!-- Menu de Filtro -->
    <div class="flex justify-center mb-6">
      <button id="filter-vertical" class="text-white mx-2 px-4 py-2 bg-gray-600 hover:bg-gray-800 rounded">Vídeos Verticais</button>
      <button id="filter-horizontal" class="text-white mx-2 px-4 py-2 bg-gray-600 hover:bg-gray-800 rounded">Vídeos Horizontais</button>
      <button id="filter-photos" class="text-white mx-2 px-4 py-2 bg-gray-600 hover:bg-gray-800 rounded">Fotos</button>
    </div>

    <!-- Itens do Portfólio -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">
      <!-- Vídeos Verticais -->
      <div class="aspect-[9/16] video-vertical">
        <iframe src="https://www.youtube.com/embed/P1ytuWrJ4vA" class="rounded-lg w-full h-full" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="aspect-[9/16] video-vertical">
        <iframe src="https://www.youtube.com/embed/qxRu7IqnAdQ" class="rounded-lg w-full h-full" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="aspect-[9/16] video-vertical">
        <iframe src="https://www.youtube.com/embed/fwtCGg94H9g" class="rounded-lg w-full h-full" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <!-- Vídeos Horizontais -->
      <div class="aspect-[16/9] video-horizontal">
        <iframe src="https://www.youtube.com/embed/XLTnOMLzZ7U" class="rounded-lg w-full h-full" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="aspect-[16/9] video-horizontal">
        <iframe src="https://www.youtube.com/embed/49q1NiA7EX4" class="rounded-lg w-full h-full" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="aspect-[16/9] video-horizontal">
        <iframe src="https://www.youtube.com/embed/ixZLYYOePLU" class="rounded-lg w-full h-full" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <!-- Fotos -->
      <div class="photo">
        <img src="BlackRec/public/img/portfolio/photo1.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 1 - Descrição do projeto 1">
      </div>
      <div class="photo">
        <img src="BlackRec/public/img/portfolio/photo2.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 2 - Descrição do projeto 2">
      </div>
      <div class="photo">
        <img src="BlackRec/public/img/portfolio/photo3.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 3 - Descrição do projeto 3">
      </div>
      <!-- Mais fotos aqui -->
    </div>
  </div>
</section>

<!-- Modal -->
<div id="video-modal" class="fixed inset-0 bg-black bg-opacity-80 hidden items-center justify-center z-50">
  <div class="relative w-11/12 max-w-4xl bg-black p-4 rounded-lg">
    <button id="close-modal" class="absolute top-2 right-2 text-white text-3xl font-bold cursor-pointer">&times;</button>
    <iframe id="video-iframe" class="w-full h-96" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const allItems = document.querySelectorAll('.video-vertical, .video-horizontal, .photo');
    const filterVertical = document.getElementById('filter-vertical');
    const filterHorizontal = document.getElementById('filter-horizontal');
    const filterPhotos = document.getElementById('filter-photos');

    // Função para mostrar todos os itens
    const showAllItems = () => {
      allItems.forEach(item => item.classList.remove('hidden'));
    };

    // Função para esconder itens de um tipo específico
    const hideItems = (selector) => {
      document.querySelectorAll(selector).forEach(item => item.classList.add('hidden'));
    };

    // Filtros
    filterVertical.addEventListener('click', () => {
      showAllItems(); // Mostrar todos inicialmente
      hideItems('.video-horizontal, .photo'); // Esconder horizontais e fotos
    });
    filterHorizontal.addEventListener('click', () => {
      showAllItems();
      hideItems('.video-vertical, .photo');
    });
    filterPhotos.addEventListener('click', () => {
      showAllItems();
      hideItems('.video-vertical, .video-horizontal');
    });

    // Modal de vídeo
    const modal = document.getElementById('video-modal');
    const closeModalButton = document.getElementById('close-modal');
    const iframe = document.getElementById('video-iframe');

    const openModal = (videoUrl) => {
      iframe.src = videoUrl;
      modal.classList.remove('hidden');
      modal.style.display = 'flex';
    };

    const closeModal = () => {
      modal.classList.add('hidden');
      modal.style.display = 'none';
      iframe.src = '';
    };

    closeModalButton.addEventListener('click', closeModal);
    window.addEventListener('click', (event) => {
      if (event.target === modal) {
        closeModal();
      }
    });
  });
</script>