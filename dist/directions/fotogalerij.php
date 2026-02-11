<?php

require "db.php";

$categorie = $_GET['cat'] ?? null;

if ($categorie) {
    $stmt = $pdo->prepare("SELECT * FROM fotos WHERE categorie = ?");
    $stmt->execute([$categorie]);
} else {
    $stmt = $pdo->query("SELECT * FROM fotos");
}

$fotos = $stmt->fetchAll();

$cats = $pdo->query("SELECT DISTINCT categorie FROM fotos")->fetchAll();
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
            <a href="index.php" class="text-white font-bold px-4 hover:text-[#c70372]">Home</a>
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




   <h1 class="text-3xl font-bold mb-6">Categories</h1>

<!-- KATEGORİ FİLTRE -->
<div class="mb-6 space-x-2">
    <?php foreach($cats as $c): ?>
        <a href="?cat=<?= $c['categorie'] ?>"
           class="px-4 py-2 bg-pink-500 text-white rounded">
           <?= $c['categorie'] ?>
        </a>
    <?php endforeach; ?>
</div>


<!-- FOTO GRID -->
<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">

<?php foreach($fotos as $foto): ?>

    <div class="bg-white shadow-lg rounded-xl overflow-hidden">
        <img src="<?= $foto['url'] ?>"
             class="w-full h-64 object-cover hover:scale-110 transition">
        
        <div class="p-3 text-center font-semibold">
            <?= $foto['categorie'] ?>
        </div>
    </div>

<?php endforeach; ?>

</div>
    <!-- hero starting -->
      

     <!-- hero ending -->

</body>
</html>