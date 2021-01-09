<?php
class Cars {
  public $name;
  public $color;
  public $model;

  function __construct($name, $color, $model) {
    $this->name = $name;
    $this->color = $color;
    $this->model = $model;
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
  function get_model() {
    return $this->model;
  }
}

$brand = new Cars("BMW", "Black", "M5");
// echo $brand->get_name();
//  echo "<br>";
// echo $brand->get_color();
//  echo "<br>";
// echo $brand->get_model();
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    .table {
      font-family: Calibri;
      border: 3px solid black;
      text-align: center;
      width: 25%;
    }
  </style>
</head>
<body>
  <h1 style="font-family:calibri;">Mini OOP Experiment 1</h1>
  <h2 style="font-family:calibri;">Made by Vlad Mastjulins.<h2>
  <center>
  <div class="table">
    <tr>
      <td>Brand</td>
      <td>Model</td>
      <td>Color</td>
    <tr><br>
      <td><?php echo $brand->get_name(); ?></td>
      <td><?php echo $brand->get_model(); ?></td>
      <td><?php echo $brand->get_color(); ?></td>
    </tr>
  </div>
  </center>
</body>
</html>
