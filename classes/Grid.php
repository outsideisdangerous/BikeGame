<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  

<?php

$grid = array(array(0,0), array(0,1), array(0,2), array(0,3), array(0,4), array(0,5), array(0,6),
              array(1,0), array(1,1), array(1,2), array(1,3), array(1,4), array(1,5), array(1,6),
              array(2,0), array(2,1), array(2,2), array(2,3), array(2,4), array(2,5), array(2,6), 
              array(3,0), array(3,1), array(3,2), array(3,3), array(3,4), array(3,5), array(3,6),
              array(4,0), array(4,1), array(4,2), array(4,3), array(4,4), array(4,5), array(4,6),
              array(5,0), array(5,1), array(5,2), array(5,3), array(5,4), array(5,5), array(5,6),
              array(6,0), array(6,1), array(6,2), array(6,3), array(6,4), array(6,5), array(6,6)
);

$bike_location = array(4, 3);

echo '<div class="container">';
  foreach ($grid as $val) {
    $coord = implode(',', $val);
    // Every loop will start with this CSS class
    $css_classes = 'cell';
    // Checks if current grid coord matches bike's coord
    // If matches append 'bike-location' class
    if($val === $bike_location) {
      $css_classes .= ' bike-location'; // +=
    }
    // Concat CSS class into div
    echo '<div class="' . $css_classes . '">' . $coord . '<br>'.'</div>';
  }
echo '</div>';
      
// function CreateGrid($grid) {
//   for ($row=0; $row < $grid; $row++) { 
//     echo '<div class="container">';
//       echo '<div class="rows">';
      
//         for ($col=0; $col < $grid; $col++) {
//           echo '<span class="cols">cell<span />';
//         }
     
//       echo '</div>';
//     echo '</div>';
//   }
// }


// CreateGrid(7);

?>


</body>
</html>
