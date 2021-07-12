<?php

session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST["placement"])) {
        $placement = $_POST['placement'];
        $placement_array = (explode(',', $placement));
        $_SESSION['bike_x'] = intval($placement_array[0]);
        $_SESSION['bike_y'] = intval($placement_array[1]);
        $_SESSION['facing'] = $placement_array[2];
    }
}    

if(isset($_POST["action"])) {
    if ($_POST["action"] === "forward") {
        if ($_SESSION['facing'] === 'N') {      
            if ($_SESSION['bike_y'] < 6) {
                $_SESSION['bike_y'] += 1;
            }
        } elseif ($_SESSION['facing'] === 'S') {      
            if ($_SESSION['bike_y'] > 0) {
                $_SESSION['bike_y'] -= 1;
            }
        } elseif ($_SESSION['facing'] === 'W') {  
            if ($_SESSION['bike_x'] > 0) {
                $_SESSION['bike_x'] -= 1;
            }    
        } elseif ($_SESSION['facing'] === 'E') {      
            if ($_SESSION['bike_x'] < 6) {
                $_SESSION['bike_x'] += 1;
            }    
        }
    } elseif ($_POST["action"] === "right") {
        if ($_SESSION['facing'] === 'N') {
            $_SESSION['facing'] = 'E';
        } elseif ($_SESSION['facing'] === 'E') {
            $_SESSION['facing'] = 'S';
        } elseif ($_SESSION['facing'] === 'S') {
            $_SESSION['facing'] = 'W';
        } elseif ($_SESSION['facing'] === 'W') {
            $_SESSION['facing'] = 'N';
        }
    } elseif ($_POST["action"] === "left") {
        if ($_SESSION['facing'] === 'N') {
            $_SESSION['facing'] = 'W';
        } elseif ($_SESSION['facing'] === 'W') {
            $_SESSION['facing'] = 'S';
        } elseif ($_SESSION['facing'] === 'S') {
            $_SESSION['facing'] = 'E';
        } elseif ($_SESSION['facing'] === 'E') {
            $_SESSION['facing'] = 'N';
        }
    }
}


$bike_facing = 'North';
if ($_SESSION['facing'] === 'S') {
    $bike_facing = 'South';
} elseif ($_SESSION['facing'] === 'E') {
    $bike_facing = 'East';
} elseif ($_SESSION['facing'] === 'W') {
    $bike_facing = 'West';
}

echo '<div> (&lt;' . $_SESSION['bike_x'] . '&gt;,&lt;' . $_SESSION['bike_y'] . '&gt;), &lt;' . $bike_facing . '&gt;  </div>';



function renderGrid() {
    echo '<div class="grid">';
    for($y = 6; $y >= 0; $y--) {
        echo '<div class="row">';
        for($x = 0; $x < 7; $x++) {
            $css_classes = 'grid-cell';
            if ($_SESSION["bike_x"] === $x && $_SESSION["bike_y"] === $y) {
                $css_classes .= ' bike-location';
            }
            echo '<span class="' . $css_classes . ' ">(' . $x . ',' . $y . ')</span>';
        }
        echo '</div>';
    }
    echo '</div>';
}

renderGrid();
?>