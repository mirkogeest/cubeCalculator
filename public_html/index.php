<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cube intersection volume calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php 
    require __DIR__ . '/../vendor/autoload.php';

    $x1 = filter_input(INPUT_POST, "x1", FILTER_SANITIZE_NUMBER_INT);
    $y1 = filter_input(INPUT_POST, "y1", FILTER_SANITIZE_NUMBER_INT);
    $z1 = filter_input(INPUT_POST, "z1", FILTER_SANITIZE_NUMBER_INT);
    $s1 = filter_input(INPUT_POST, "s1", FILTER_SANITIZE_NUMBER_INT);
    $x2 = filter_input(INPUT_POST, "x2", FILTER_SANITIZE_NUMBER_INT);
    $y2 = filter_input(INPUT_POST, "y2", FILTER_SANITIZE_NUMBER_INT);
    $z2 = filter_input(INPUT_POST, "z2", FILTER_SANITIZE_NUMBER_INT);
    $s2 = filter_input(INPUT_POST, "s2", FILTER_SANITIZE_NUMBER_INT);
?>
<h1>Cube intersection volume calculator</h1>
<form class="col-xl-12" method="post">
    <h2 class="col-xl-12">Cube 1</h2>
    <div class="input-group col-xl-3">
        <input class="form-control col-xl-3" name="x1" placeholder="Coord X" autocomplete="off" value="<?= $x1 ?>">
    </div>
    <div class="input-group col-xl-3">
        <input class="form-control col-xl-3" name="y1" placeholder="Coord Y" autocomplete="off" value="<?= $y1 ?>">
    </div>
    <div class="input-group col-xl-3">
        <input class="form-control col-xl-3" name="z1" placeholder="Coord Z" autocomplete="off" value="<?= $z1 ?>">
    </div>
    <div class="input-group col-xl-3">
        <input class="form-control col-xl-3" name="s1" placeholder="Size" autocomplete="off" value="<?= $s1 ?>">
    </div>

    <h2 class="col-xl-12">Cube 2</h2>
    <div class="input-group col-xl-3">
        <input class="form-control col-xl-3" name="x2" placeholder="Coord X" autocomplete="off" value="<?= $x2 ?>">
    </div>
    <div class="input-group col-xl-3">
        <input class="form-control col-xl-3" name="y2" placeholder="Coord Y" autocomplete="off" value="<?= $y2 ?>">
    </div>
    <div class="input-group col-xl-3">
        <input class="form-control col-xl-3" name="z2" placeholder="Coord Z" autocomplete="off" value="<?= $z2 ?>">
    </div>
    <div class="col-xl-3">
        <input class="form-control col-xl-3" name="s2" placeholder="Size" autocomplete="off" value="<?= $s2 ?>">
    </div>

    <div class="col-xl-12 ">
        <input type="submit" value="Calculate" name="submit" class="btn btn-primary p-3"/>
    </div>
</form>

</div>

<div class="col-xl-12">
<?php
    // Create input form
    if ($_POST) {
        
        $cube1 = new Cube(
            $x1,
            $y1,
            $z1,
            $s1
        );
        
        $cube2 = new Cube(
            $x2,
            $y2,
            $z2,
            $s2
        );

        $cubeCalculator = new CubeVolumeCalculator;
        $result = $cubeCalculator->calculateIntersectionVolume($cube1, $cube2);

        echo "<div class=col-xl-12>Result: {$result}</div>";
    }
?>
</div>
</body>
</html>

