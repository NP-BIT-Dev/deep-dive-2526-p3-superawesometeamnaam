<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/output.css" rel="stylesheet">
</head>

<body class="min-h-screen flex flex-col">

  <nav class="bg-[linear-gradient(to_right,#000000_0%,#EA048C_49%,#000000_100%)] w-full max-h-40">
    <div class="itemsNav flex justify-between items-center max-h-30">
      <div class="relative left-30 top-15">
        <img src="dist/img/logoWithBg.svg" alt="logoArc" class="h-50">
      </div>

      <div class="directions">
        <ul class="flex">
          <li>
            <a href="index.php" class="text-white  px-4 hover:font-bold hover:text-2xl duration-300">Home</a>
          </li>
          <li>
            <a href="#" class="text-white  px-4 hover:font-bold hover:text-2xl duration-300">Nieuws</a>
          </li>
          <li>
            <a href="dist/directions/fotogalerij.php" class="text-white  px-4 hover:font-bold hover:text-2xl duration-300">Fotogalerij</a>
          </li>
          <li>
            <a href="dist/directions/trainers.php" class="text-white  px-4 hover:font-bold hover:text-2xl duration-300">Trainers</a>
          </li>
          <li>
            <a href="#" class="text-white  px-4 hover:font-bold hover:text-2xl duration-300">Inschrijven</a>
          </li>
        </ul>
      </div>

      <div class="btn mr-20">
        <button type="button" class="bg-[#EA048C] hover:bg-[#c70372]  text-white font-bold px-4 py-2 border rounded">CONTACT</button>
      </div>
    </div>
  </nav>

  <div class="flex-1 flex flex-col items-center justify-center">
    <h1 class="text-4xl text-black text-center mt-20">Trainers</h1>
    <button class="bg-[#EA048C] px-12 h-2 rounded mt-5"></button>
  </div>

  
    <main class="flex-1">
      <section class="max-w-6xl mx-auto px-4 py-16">
      
        <!-- Trainer card -->
        <div class="bg-gray-500/20 shadow-xl overflow-hidden grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
          <!-- Image column -->
          <div class="flex flex-col justify-center items-center p-6">
            <img src="dist/img/trainer1.png" alt="Willie trainer" class="size" />
           <h2 class="text-4xl font-semibold mb-3 mt-10">Willie Meering</h2>
          </div>

          <!-- Info column -->
          <div class="p-8">
            <ul class="list-disc">
              <li><p class="text-black mb-4">Meervoudig Nederlands Kampioen Vrijrijden en Paarrijden</p></li>
              <li><p class="text-black mb-6">Nationaal Dataoperator</p></li>
            </ul>
          </div>
        </div>
        
        <div class="items-center justify-center mt-20">
          <button class="bg-[#EA048C] px-80 md:px-150 h-2 rounded mt-5"></button>
        </div>

        <div class="bg-gray-500/20 shadow-xl overflow-hidden grid grid-cols-1 md:grid-cols-2 gap-6 items-center mt-20">
          <!-- Image column -->
          <div class="flex flex-col justify-center items-center p-6">
            <img src="dist/img/trainer2.png" alt="Danielle trainer" class="size" />
           <h2 class="text-4xl font-semibold mb-3 mt-10">Danielle von Henning</h2>
          </div>

          <!-- Info column -->
          <div class="p-8">
            <ul class="list-disc">
              <li><p class="text-black mb-4">Wedstrijdrijdster vrijrijden, figuren en roldansen</p></li>
              <li><p class="text-black mb-6">Trainster roldans/show</p></li>
            </ul>
          </div>
        </div>

        <div class="items-center justify-center mt-20">
          <button class="bg-[#EA048C] px-80 md:px-150 h-2 rounded mt-5"></button>
        </div>

        <div class="bg-gray-500/20 shadow-xl overflow-hidden grid grid-cols-1 md:grid-cols-2 gap-6 items-center mt-20">
          <!-- Image column -->
          <div class="flex flex-col justify-center items-center p-6">
            <img src="dist/img/trainer3.png" alt="Danielle trainer" class="size" />
           <h2 class="text-4xl font-semibold mb-3 mt-10">Gea von Henning</h2>
          </div>

          <!-- Info column -->
          <div class="p-8">
            <ul class="list-disc">
              <li><p class="text-black mb-4">Technische coördinator</p></li>
              <li><p class="text-black mb-6">Internationaal jurylid</p></li>
            </ul>
          </div>
        </div>

        <!-- Add more trainer cards below by repeating the card block -->
      </section>
    </main>
  


  <footer class="bg-[linear-gradient(to_right,#000000_0%,#EA048C_49%,#000000_100%)]">
  <div class="flex items-center justify-between max-w-6xl mx-auto py-12">

    <div class="relative right-40 bottom-45">
      <img src="dist/img/logoWithBg.svg" alt="logoArc" class="h-70">
    </div>

    <div class="flex space-x-20 text-white">

      <div>
        <h2 class="text-3xl font-bold mb-6">Contact ons</h2>
        <p>Mail: arc.noordnederland@gmail.com</p>
        <p>Telefoon: 06-52331296</p>
      </div>

      <div>
        <h2 class="text-3xl font-bold mb-6">Volg ons</h2>
        <div class="flex space-x-5 mt-4">
          <img src="dist/icons/facebook-icon.svg" class="">
          <img src="dist/icons/instagram-icon.svg" class="">
          <img src="dist/icons/linkedln-icon.svg" class="">
        </div>
      </div>

      <div>
        <h2 class="text-3xl mb-6 font-bold">Adres</h2>
        <p>ARC Noord Nederland</p>
        <p>Trainingslocatie secretariaat:</p>
        <p>Nieuweweg 95B 9649AC</p>
        <p>Stikkerlaan 6, 9671 BZ Winschoten</p>
      </div>

    </div>
  </div>
</footer>


</body>

</html>