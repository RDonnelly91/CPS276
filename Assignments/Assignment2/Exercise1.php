<?php
  function getNames(){
    $outerlists = [1,2,3,4];
    $innerLists = [1,2,3,4,5];
    $output = "<ul>";
    foreach($outerlists as $outerList){
      $output .= "<li>{$outerList}</li>";
      foreach($innerLists as $innerList){
        $output .= "<ul><li>{$innerList}</li></ul>";
      }
    }
    $output .= "</ul>";
    return $output;
  }
  ?>
<?php
  $output = getNames();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Exercise 1</title>
</head>
<body>
<main class="container">
<?php echo $output; ?>
</main>
</body>