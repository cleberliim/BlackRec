<section id="contact" class="bg-gray-100 py-16 bg-zinc-950">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-semibold text-white mb-8">Dúvidas e Orçamentos?    </h2>

    <!-- Formulário de Contato -->
    <form action="#" method="POST" class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
      <div class="mb-4">
        <label for="name" class="block text-left text-gray-800 font-medium">Nome</label>
        <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg" required>
      </div>

      <div class="mb-4">
        <label for="email" class="block text-left text-gray-800 font-medium">E-mail</label>
        <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg" required>
      </div>

      <div class="mb-4">
        <label for="message" class="block text-left text-gray-800 font-medium">Mensagem</label>
        <textarea id="message" name="message" rows="4" class="w-full p-3 border border-gray-300 rounded-lg" required></textarea>
      </div>

      <button type="submit" class="w-full bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition duration-300">Enviar</button>
    </form>
  </div>

  <!-- Redes sociais e WhatsApp -->
  <div class="mt-16 text-center">
    <h3 class="text-2xl font-semibold text-white mb-4">Siga-nos nas Redes Sociais</h3>
    <div class="flex justify-center space-x-8">
      <a href="#instagram" class="text-white hover:text-gray-600"><i class="fab fa-instagram text-3xl"></i></a>
      <a href="#youtube" class="text-white hover:text-gray-600"><i class="fab fa-youtube text-3xl"></i></a>
      <a href="#facebook" class="text-white hover:text-gray-600"><i class="fab fa-facebook text-3xl"></i></a>
      <a href="#twitter" class="text-white hover:text-gray-600"><i class="fab fa-twitter text-3xl"></i></a>
    </div>
  </div>

  <!-- WhatsApp -->
  <div class="mt-8 text-center">
    <h3 class="text-2xl font-semibold text-white mb-4">Fale Conosco no WhatsApp</h3>
    <a href="https://wa.me/5551999999999" class="inline-flex items-center text-green-500 hover:text-green-600 text-xl font-medium">
      <i class="fab fa-whatsapp mr-2"></i> WhatsApp
    </a>
  </div>
</section>



<!-- Chat Flutuante com Botão do WhatsApp -->
<div class="fixed bottom-4 right-4 z-50">
  <!-- Botão de WhatsApp -->
  <a href="https://wa.me/5551999999999" class="inline-flex items-center bg-green-500 text-white py-3 px-6 rounded-full shadow-lg hover:bg-green-600 transition duration-300">
    <i class="fab fa-whatsapp text-2xl mr-2"></i>
    Vamos conversar?
  </a>
</div>

<!-- Caixa de Chat (opcional) -->
<div class="fixed bottom-20 right-4 z-40 hidden chat-box bg-white p-4 w-80 h-96 border border-gray-300 rounded-lg shadow-lg">
  <div class="flex justify-between items-center mb-4">
    <h4 class="text-xl font-semibold">Chat ao vivo</h4>
    <button class="close-chat text-gray-500 hover:text-gray-700">
      <i class="fas fa-times"></i>
    </button>
  </div>
  <!-- Área de mensagens -->
  <div class="chat-messages h-72 overflow-y-auto mb-4 p-2 border-b border-gray-300">
    <!-- Mensagens aqui -->
    <div class="message mb-2">
      <p class="text-gray-800">Olá! Como posso te ajudar?</p>
    </div>
  </div>
  <!-- Campo para enviar mensagem -->
  <input type="text" placeholder="Escreva sua mensagem..." class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
</div>

<!-- Script para abrir e fechar o chat -->
<script>
  const whatsappButton = document.querySelector('a[href="https://wa.me/5551999999999"]');
  const chatBox = document.querySelector('.chat-box');
  const closeChatButton = document.querySelector('.close-chat');

  whatsappButton.addEventListener('click', () => {
    chatBox.classList.toggle('hidden');
  });

  closeChatButton.addEventListener('click', () => {
    chatBox.classList.add('hidden');
  });
</script>