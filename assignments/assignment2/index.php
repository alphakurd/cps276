<?php

$numbers = range(1, 50);
$evenNumbers = "";
foreach ($numbers as $num) {
    if ($num % 2 == 0) {
        $evenNumbers .= $num . " - ";
    }
}
$evenNumbers = rtrim($evenNumbers, " - "); 


$form = <<<FORM
<form class="mb-4">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="textarea" class="form-label">Example textarea</label>
    <textarea class="form-control" id="textarea" rows="3"></textarea>
  </div>
</form>
FORM;

function createTable($rows, $cols) {
    $table = '<table class="table table-bordered">';
    for ($i = 1; $i <= $rows; $i++) {
        $table .= "<tr>";
        for ($j = 1; $j <= $cols; $j++) {
            $table .= "<td>Row $i, Col $j</td>";
        }
        $table .= "</tr>";
    }
    $table .= "</table>";
    return $table;
}

$table = createTable(8, 6);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>PHP Assignment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="container py-4">
  <p><strong>Even Numbers:</strong> <?php echo $evenNumbers; ?></p>
  <?php echo $form; ?>
  <?php echo $table; ?>
</body>
</html>
