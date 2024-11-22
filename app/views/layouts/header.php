<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackRec</title>

    <!-- Taiwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom css -->
    <link href="/public/assets/css/custom.css" rel="stylesheet" title="custom">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
    body {
      font-family: 'Montserrat', sans-serif;
    }

    .menu-item {
      font-size: 14px;
      position: relative;
    }

    /* Efeito hover para itens do menu */
    .menu-item:hover::after {
      content: '';
      display: block;
      width: 100%;
      height: 2px;
      background-color: #FE2C2B;
      margin-top: 2px;
    }

    /* Borda fixa vermelha para HOME */
    .active::after {
      content: '';
      display: block;
      width: 100%;
      height: 2px;
      background-color: #FE2C2B;
      margin-top: 2px;
    }
  </style>
    
</head>
<body class="bg-gray-100">
 <!-- Header Section -->
 <header class="relative h-screen bg-cover bg-center" style="background-image: url('http://localhost/BlackRec/public/img/background.png');"> 
 <div class="absolute inset-0 bg-black bg-opacity-80 flex items-center justify-center text-center px-4">
    <h1 
      class="text-white font-thin font-montserrat text-[20px]"
      style="letter-spacing: 0.5px;"
    >
      Bem-vindo ao universo <span class="font-bold">Blackrec</span>, onde a arte ganha vida <br>através de vídeos autênticos e ousados.
    </h1>
      
    <!-- Botão Play -->
    <button class="mt-8 w-24 h-24 rounded-full bg-red-600 flex items-center justify-center hover:bg-red-700 transition duration-300 mb-12">
      <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-10 h-10">
        <path d="M8 5v14l11-7z"/>
      </svg>
    </button>
  </div>
  </header>
 


 