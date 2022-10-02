<?php
function tableFunction(){
$rows = 15;
$cell = 5;

echo "<table border='1'>";

for($tr=1;$tr<=$rows;$tr++){

    echo "<tr>";
        for($td=1;$td<=$cell;$td++){
               echo "<td>Row: ".$tr." Cell: ".$td."</td>";
        }
    echo "</tr>";
}

echo "</table>";
}
?>
<?php
$output = tableFunction();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
  <main class="container">
<?php echo $output; ?>
  </body>
</html>
