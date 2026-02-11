<?php

require "db.php";

$stmt = $pdo->query("SELECT * FROM fotos ORDER BY categorie DESC");
$fotos = $stmt->fetchAll();

$groups = [];

foreach ($fotos as $foto) {
    $groups[$foto['categorie']][] = $foto;
}

?>


<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../output.css" rel="stylesheet">
</head>
<body>
   <nav class="bg-gradient-to-r from-[#EA048C] via-[#6C6D71] to-[#6C6D71] via-[51%] w-full max-h-40">
    <div class="itemsNav flex justify-between items-center max-h-30">
      <div class="relative left-30 top-15">
        <img src="../img/logoWithBg.svg" alt="logoArc" class="h-50">
      </div>
      
      <div class="directions">
        <ul class="flex">
          <li>
            <a href="../../index.php" class="text-white font-bold px-4 hover:text-[#c70372]">Home</a>
          </li>
          <li>
            <a href="#" class="text-white font-bold px-4 hover:text-[#c70372]">Nieuws</a>
          </li>
          <li>
            <a href="#" class="text-white font-bold px-4 hover:text-[#c70372]">Fotogalerij</a>
          </li>
          <li>
            <a href="#" class="text-white font-bold px-4 hover:text-[#c70372]">Login</a>
          </li>
        </ul>
      </div>

      <div class="btn mr-20">
        <button type="button" class="bg-[#EA048C] hover:bg-[#c70372]  text-white font-bold px-4 rounded">CONTACT</button>
      </div>
    </div>
   </nav>

   <h2 class="text-3xl font-bold text-center w-full mt-20">
    Fotogalerij
   </h2>
   <div class="flex justify-center mt-10">

       <button class="bg-[#c70372] px-13 py-1 rounded-xl">
    
       </button>
   </div>





<?php foreach($groups as $categorie => $fotos): ?>

    <h2 class="text-xl font-bold text-center mb-8 uppercase mt-20">
        <?= $categorie ?>
    </h2>
<div class="columns-1 md:columns-3 lg:columns-4 gap-6 space-y-6 px-30 p-4">

<?php foreach($fotos as $foto): ?>

    <img src="<?= $foto['url'] ?>"
         class="w-full rounded-xl shadow-lg break-inside-avoid">

<?php endforeach; ?>

</div>


<?php endforeach; ?>
    <!-- hero starting -->
      

     <!-- hero ending -->

</body>
</html>