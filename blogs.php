<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<link rel="stylesheet" href="assets/css/index.css">
	<title>PhotoStock</title>
</head>
<body>
  <?php include "templates/header.php";?>

<div class="custom-main">

    <div class="grid-container fotos-populares">
      <h2>Todos los blogs</h2>
      <section class="grid" id="grid">
        <div class="item">
          <div class="item-contenido">
          <?php include "controladores/obtener_todos_blogs.php";?>
          </div>
          </div>
        </div>
      </section>
    </div>
  </div>

</body>
</html>