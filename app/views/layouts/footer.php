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

<!-- WhatsApp Chat -->
<a href="https://wa.me/5515997718114?text=Olá,%20tudo%20bem?%20Vim%20através%20do%20site%20e%20quero%20fazer%20um%20orçamento"
  target="_blank"
  class="fixed bottom-5 right-5 z-50 flex items-center bg-green-500 p-3 rounded-full shadow-lg space-x-2 hover:scale-105 transition-all duration-300 ease-in-out">

  <!-- Ícone do WhatsApp -->
  <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Chat" class="w-8 h-8">
  </div>

  <!-- Texto "Vamos conversar?" -->
  <span class="text-white text-sm sm:text-lg font-semibold">Vamos conversar?</span>
</a>



<section id="cookie-banner"
  class="fixed max-w-md p-4 mx-auto bg-white border border-gray-200 dark:bg-gray-800 left-12 bottom-16 dark:border-gray-700 rounded-2xl shadow-lg hidden">
  <h2 class="font-semibold text-gray-800 dark:text-white">🍪 Aviso de Cookies</h2>

  <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
    Utilizamos cookies para garantir que você tenha a melhor experiência em nosso site.
    <a href="/politica-de-cookies" class="text-blue-500 hover:underline">Leia nossa política de cookies</a>.
  </p>

  <div class="flex items-center justify-between mt-4 gap-x-4 shrink-0">
    <button id="manage-cookies"
      class="text-xs text-gray-800 underline transition-colors duration-300 dark:text-white dark:hover:text-gray-400 hover:text-gray-600 focus:outline-none">
      Gerenciar preferências
    </button>

    <button id="accept-cookies"
      class="text-xs bg-gray-900 font-medium rounded-lg hover:bg-gray-700 text-white px-4 py-2.5 duration-300 transition-colors focus:outline-none">
      Aceitar
    </button>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const banner = document.getElementById("cookie-banner");
    const acceptButton = document.getElementById("accept-cookies");
    const manageButton = document.getElementById("manage-cookies");

    // Mostrar o banner apenas se o consentimento ainda não foi dado
    if (!localStorage.getItem("cookiesAccepted")) {
      banner.classList.remove("hidden");
    }

    // Botão de aceitar cookies
    acceptButton.addEventListener("click", () => {
      localStorage.setItem("cookiesAccepted", "true");
      banner.classList.add("hidden");
    });

    // Exemplo: Gerenciar preferências (pode abrir um modal ou redirecionar)
    manageButton.addEventListener("click", () => {
      alert("Função de gerenciar preferências em desenvolvimento.");
    });
  });
</script>

<footer class="bg-gray-800 text-white py-4">
  <div class="container mx-auto text-center">
    <p class="text-sm">Desenvolvido por <a href="https://github.com/cleberliim" target="_blank"
        class="text-blue-400 hover:text-blue-600">Cleber Lima</a></p>
  </div>
</footer>

</body>

</html>