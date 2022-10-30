<?php
  session_start();
  include 'db_connect.php';
  $sql = 'select';
  $sql .= '(CategoryID,CategoryName,categories)';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
</head>
<body>
  <header>
    <form action="product.php" method="get">
      <label for="category">
        <select name="category" id="category">
        <label for="select">select :</label>
    <option value=""></option>
    <option value="Beveragas">Beveragas</option>
    <option value="Condiments">Condiments</option>
    <option value="Dairy Products">Dairy Products</option>
    <option value="Grains/Cereals">Grains/Cereals</option>
    <option value="Meat/Poultry">Meat/Poultry</option>
    <option value="Produce">Produce</option>
    <option value="Seafood">Seafood</option>
        </select>
      </label>
      <input type="submit" value="Search" name="submit">
    </form>
  </header>
</body>
</html>