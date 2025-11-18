<?php
require "config/db.php";
include "includes/header.php";

$id_producto = $_GET['id_producto'];
$stmt = $pdo->prepare("SELECT * FROM PRODUCTOS WHERE id_producto = ?");
$stmt->execute([$id_producto]);
$producto = $stmt->fetch(PDO::FETCH_ASSOC);

// var_dump($producto);



if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];
    // var_dump($nombre, $descripcion, $precio, $stock);

    try{
        $stmt = $pdo->prepare("UPDATE PRODUCTOS SET nombre = ?, descripcion = ?, precio = ?, stock = ? WHERE id_producto = ?");
        $stmt->execute([$nombre, $descripcion, $precio, $stock, $id_producto]);

        echo "<script>
        Swal.fire({
          title: 'Producto Actualizado',
          text: 'Producto Actualizado Correctamente',
          icon: 'success'
        }).then(()=>window.location ='index.php');
        </script>
        ";

        }catch(PDOException $e){
          $error = addslashes($e->getMessage());
        echo "
        <script>
          Swal.fire({
          title: 'Error al Actualizar',
          text: '$error',
          icon: 'error'
         });
          </script>
        ";
    }


    
}
    
?>

<h2>Actualizar Producto ✏️</h2>
<form method="POST">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required 
    value="<?= ($producto['nombre']) ?>">
  </div>
  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" required 
    value="<?= ($producto['descripcion']) ?>">
  </div>
  <div class="mb-3">
    <label for="precio" class="form-label">Precio</label>
    <input type="text" class="form-control" id="precio" name="precio" required 
    value="<?= ($producto['precio']) ?>">
  </div>
  <div class="mb-3">
    <label for="stock" class="form-label">Stock</label>
    <input type="text" class="form-control" id="stock" name="stock" required 
    value="<?= ($producto['stock']) ?>">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

<?php
include "includes/footer.php";
?>