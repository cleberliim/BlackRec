<nav class="bg-black text-white py-4 px-8">
  <div class="container mx-auto flex items-center justify-between">
    <!-- Logo -->
    <div>
      <a href="#home">
        <img src="BlackRec/public/img/logoNavbar.png" alt="Logo" class="h-12"> <!-- Atualize o caminho da imagem -->
      </a>
    </div>

    <!-- Botão Hambúrguer -->
    <div class="md:hidden">
      <button id="menu-toggle" class="text-white focus:outline-none">
        <i class="fas fa-bars text-2xl"></i> <!-- Ícone do Font Awesome -->
      </button>
    </div>

    <!-- Navbar Menu -->
    <div
      id="menu"
      class="hidden flex-col items-center space-y-4 mt-4 md:flex md:flex-row md:space-y-0 md:space-x-8 md:mt-0">
      <a href="#home" class="menu-item active">HOME</a>
      <a href="#services" class="menu-item">SERVIÇOS</a>
      <a href="#portfolio" class="menu-item">PORTFÓLIO</a>
      <a href="#contact" class="menu-item">CONTATO</a>
    </div>

    <!-- Social Icons -->
    <div class="hidden md:flex space-x-6">
      <a
        href="https://www.instagram.com/blackrecprod/"
        target="_blank"
        rel="noopener noreferrer"
        class="hover:text-gray-400"><i class="fab fa-instagram text-xl"></i></a>
      <a
        href="https://www.youtube.com/@BlackrecProducoes"
        target="_blank"
        rel="noopener noreferrer"
        class="hover:text-gray-400"><i class="fab fa-youtube text-xl"></i></a>
      <a
        href="https://www.facebook.com/blackrecprod"
        target="_blank"
        rel="noopener noreferrer"
        class="hover:text-gray-400"><i class="fab fa-facebook text-xl"></i></a>
    </div>
  </div>
</nav>

<script>
  // Script para alternar o menu
  const menuToggle = document.getElementById("menu-toggle");
  const menu = document.getElementById("menu");

  menuToggle.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    menu.classList.toggle("flex");
  });
</script>