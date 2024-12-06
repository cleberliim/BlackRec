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
 <a href="https://wa.me/5515997718114?text=Óla%20,%20tudo%20bem?%20Vim%20atrav%C3%A9s%20do%20site%20e%20quero%20fazer%20um%20or%C3%A7amento"
   target="_blank"
   class="fixed bottom-5 right-5 z-50 flex items-center bg-green-500 p-3 rounded-full shadow-lg space-x-2 hover:scale-105 transition-all duration-300 ease-in-out">
   <!-- Texto "Vamos conversar?" -->
   <span class="text-white text-lg font-semibold hidden sm:block">Vamos conversar?</span>

   <!-- Ícone do WhatsApp -->
   <div class="flex items-center justify-center w-12 h-12 rounded-full shadow-md">
     <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Chat" class="w-8 h-8">
   </div>
 </a>


 <footer class="bg-gray-800 text-white py-4">
   <div class="container mx-auto text-center">
     <p class="text-sm">Desenvolvido por <a href="https://github.com/cleberliim" target="_blank" class="text-blue-400 hover:text-blue-600">Cleber Lima</a></p>
   </div>
 </footer>

 </body>

 </html>