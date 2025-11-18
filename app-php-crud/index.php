<?php
require "config/db.php"; 
include "includes/header.php";

$stmt = $pdo->query("SELECT * FROM productos ORDER BY fecha_creacion DESC");
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo "<h1>Lista de productos</h1>";
// foreach($productos as $producto){
    // echo "<div>";
    // echo "<h2>".$producto['nombre']."</h2>";
    // echo "<p>Precio: S/ ".$producto['precio']."</p>";
    // echo "<p>Stock: ".$producto['stock']."</p>";
    // echo "</div><hr>";
// }
?>
<h2>Gestion de Productos</h2>
<a href="create.php" type="button" class="btn btn-outline-success">➕ Nuevo producto</a>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($productos as $item): ?>
    <tr>
      <th scope="row"> <?= $item["id_producto"] ?></th>
      <td><?=  $item["nombre"] ?></td>
      <td><?=  $item["descripcion"] ?></td>
      <td><?=  $item["precio"] ?></td>
      <td><?=  $item["stock"] ?></td>
      <td>
        <div style="display: flex;">
          <a href="delete.php?id_producto=<?= $item["id_producto"] ?>" type="button" class="mx-2 btn btn-outline-danger">🗑️</a>
          <a href="update.php?id_producto=<?= $item["id_producto"]?>" type="button" class="mx-2 btn btn-outline-info">✏️</a>
        </div>
      </td>
    <?php endforeach; ?>  
    </tr>
    
  </tbody>
</table>

<?php
include "includes/footer.php";
?>
