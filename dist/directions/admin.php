<?php
require "db.php";

if(isset($_POST["toevoegen"])) {
    $cat = $_POST["categorie"];
    $url = $_POST["url"];

    $stmt = $pdo->prepare("INSERT INTO fotos (categorie, url) VALUES (?, ?)");
    $stmt->execute([$cat, $url]);

    header("Location: admin.php");
    exit;
}

if(isset($_GET["verwijderen"])) {
    $id = $_GET["verwijderen"];

    $stmt = $pdo->prepare("DELETE FROM fotos WHERE id=?");
    $stmt->execute([$id]);

    header("Location: admin.php");
    exit;
}

$fotos = $pdo->query("SELECT * FROM fotos ORDER BY id DESC")->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../output.css" rel="stylesheet">
<title>Admin Panel</title>
</head>

<body class="bg-gray-100 p-10">

<h1 class="text-3xl font-bold mb-8">Admin Panel</h1>

<div class="bg-white p-6 rounded-xl shadow mb-10">

<form method="POST" class="space-y-4">

    <input type="text" name="categorie"
           placeholder="Categorie"
           class="w-full border p-3 rounded" required>

    <input type="text" name="url"
           placeholder="Foto URL"
           class="w-full border p-3 rounded" required>

    <button name="toevoegen"
            class="bg-pink-600 text-white px-6 py-3 rounded z-50">
        Foto toevoegen
    </button>

</form>

</div>

<h2 class="text-2xl font-bold mb-4">Foto'sr</h2>

<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">

<?php foreach($fotos as $foto): ?>

    <div class="bg-white p-3 rounded shadow">
        <img src="<?= $foto['url'] ?>" class="w-full h-48 object-cover mb-2">

        <p class="font-bold"><?= $foto['categorie'] ?></p>

        <a href="?verwijderen=<?= $foto['id'] ?>"
           class="bg-red-500 text-white px-3 py-1 rounded mt-2 inline-block z-50">
           Verwijderen
        </a>
    </div>

<?php endforeach; ?>

</div>

</body>
</html>
