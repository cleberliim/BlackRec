 <!-- Modal -->
 <div id="photo-modal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50">
    <div class="relative max-w-4xl w-full p-4">
      <img id="modal-image" src="" alt="Imagem ampliada" class="rounded-lg w-full">
      <button id="close-modal" class="absolute top-4 right-4 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
        Fechar
      </button>
    </div>
  </div>

 
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn'); // Botões de filtragem
    const portfolioItems = document.querySelectorAll('.portfolio-item'); // Itens do portfólio

    // Função para filtrar os itens
    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
        const filterValue = button.getAttribute('data-filter'); // Obtém o valor do filtro

        portfolioItems.forEach(item => {
          // Se for "todos", mostra todos os itens
          if (filterValue === 'all') {
            item.classList.remove('hidden');
          } 
          // Se o filtro for "foto", mostra apenas os itens com a classe 'photo'
          else if (filterValue === 'photo' && item.classList.contains('photo')) {
            item.classList.remove('hidden');
          } 
          // Se o filtro for "video", mostra apenas os itens com a classe 'video'
          else if (filterValue === 'video' && item.classList.contains('video')) {
            item.classList.remove('hidden');
          } 
          // Se o item não corresponder ao filtro, esconde ele
          else {
            item.classList.add('hidden');
          }
        });
      });
    });
  });
</script>


<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.mySwiper', {
  loop: true,
  slidesPerView: 5, // Número de logos por vez
  spaceBetween: 20,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 5,
    },
  },
});


// Modal
document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("photo-modal");
    const modalImage = document.getElementById("modal-image");
    const closeModal = document.getElementById("close-modal");

    // Adiciona evento de clique nas imagens de fotos
    document.querySelectorAll(".portfolio-item.photo img").forEach((image) => {
      image.addEventListener("click", () => {
        modalImage.src = image.src; // Define a imagem no modal
        modal.classList.remove("hidden"); // Mostra o modal
      });
    });

    // Fecha o modal ao clicar no botão de fechar
    closeModal.addEventListener("click", () => {
      modal.classList.add("hidden");
      modalImage.src = ""; // Reseta a imagem para evitar problemas
    });

    // Fecha o modal ao clicar fora da imagem
    modal.addEventListener("click", (e) => {
      if (e.target === modal) {
        modal.classList.add("hidden");
        modalImage.src = "";
      }
    });
  });
</script>

</body>
</html>
