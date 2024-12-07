<!-- Portfolio -->
<section id="portfolio" class="py-8 md:py-16 bg-zinc-950 px-4 sm:px-6 md:px-12">
  <div class="container mx-auto">
    <!-- Título -->
    <div class="flex flex-col items-center mb-8 md:mb-12">
      <h2 class="text-xl sm:text-2xl md:text-4xl font-bold text-white mb-2 pt-40">NOSSO PORTFÓLIO</h2>
      <div class="w-24 sm:w-40 h-1 bg-red-600"></div>
    </div>

    <!-- Itens do Portfólio -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">
      <!-- Vídeos -->
      <img src="BlackRec/public/img/ThumbYoutube/1.jpg" data-video="https://www.youtube.com/embed/XLTnOMLzZ7U" class="video-thumbnail rounded-lg object-cover w-full h-full cursor-pointer" alt="Vídeo 1">
      <img src="BlackRec/public/img/ThumbYoutube/2.jpg" data-video="https://www.youtube.com/embed/49q1NiA7EX4" class="video-thumbnail rounded-lg object-cover w-full h-full cursor-pointer" alt="Vídeo 2">
      <img src="BlackRec/public/img/ThumbYoutube/3.jpg" data-video="https://www.youtube.com/embed/ZfrtOVmVY1I" class="video-thumbnail rounded-lg object-cover w-full h-full cursor-pointer" alt="Vídeo 3">

      <!-- Fotos -->
      <img src="BlackRec/public/img/portfolio/photo1.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 1">
      <img src="BlackRec/public/img/portfolio/photo2.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 2">
      <img src="BlackRec/public/img/portfolio/photo3.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 3">
      <img src="BlackRec/public/img/portfolio/photo4.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 4">
      <img src="BlackRec/public/img/portfolio/photo5.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 5">
      <img src="BlackRec/public/img/portfolio/photo6.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 6">
      <img src="BlackRec/public/img/portfolio/photo7.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 7">
      <img src="BlackRec/public/img/portfolio/photo8.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 8">
      <img src="BlackRec/public/img/portfolio/photo9.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 9">
      <img src="BlackRec/public/img/portfolio/photo10.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 10">
      <img src="BlackRec/public/img/portfolio/photo11.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 11">
      <img src="BlackRec/public/img/portfolio/photo12.jpg" class="rounded-lg object-cover w-full h-full cursor-pointer" alt="Foto 12">
    </div>
  </div>
</section>

<!-- Modal -->
<div id="video-modal" class="fixed inset-0 bg-black bg-opacity-80 hidden items-center justify-center z-50">
  <div class="relative w-11/12 max-w-4xl bg-black p-4 rounded-lg">
    <!-- Botão Fechar -->
    <button id="close-modal" class="absolute top-2 right-2 text-white text-3xl font-bold cursor-pointer">
      &times;
    </button>
    <!-- Vídeo -->
    <iframe id="video-iframe" class="w-full h-96" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('video-modal');
    const closeModalButton = document.getElementById('close-modal');
    const iframe = document.getElementById('video-iframe');
    const thumbnails = document.querySelectorAll('.video-thumbnail');

    // Função para abrir o modal
    function openModal(videoUrl) {
      iframe.src = videoUrl; // Configura o vídeo no iframe
      modal.classList.remove('hidden'); // Mostra o modal
      modal.style.display = 'flex'; // Garante a exibição correta
    }

    // Função para fechar o modal
    function closeModal() {
      modal.classList.add('hidden'); // Esconde o modal
      modal.style.display = 'none'; // Remove do fluxo
      iframe.src = ''; // Limpa o iframe para parar o vídeo
    }

    // Adiciona eventos aos thumbnails
    thumbnails.forEach(thumbnail => {
      thumbnail.addEventListener('click', () => {
        const videoUrl = thumbnail.getAttribute('data-video');
        openModal(videoUrl);
      });
    });

    // Evento de clique no botão "X"
    closeModalButton.addEventListener('click', closeModal);

    // Fecha o modal ao clicar fora dele
    window.addEventListener('click', (event) => {
      if (event.target === modal) {
        closeModal();
      }
    });
  });
</script>