<?php
    session_start();
    
    $_SESSION['bike_x'] = 0;
    $_SESSION['bike_y'] = 0;
    $_SESSION['facing'] = 'N';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bicycle</title>
    <link rel="stylesheet" href="./index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        function move(action) {
            $.ajax({  
                type: "POST", 
                url: "./game.php", 
                data: {action}, 
                success: (html) => {
                    $("#container").html(html);
                } 
            });
        }
        function submitPlacement() {
            const placement = $("#placement-input").val();
             $.ajax({  
                type: "POST", 
                url: "./game.php", 
                data: {placement},
                success: (html) => {
                    $("#container").html(html);
                } 
            });
        }
    </script>
</head>
<body>
    <label>Place</label>
    <input name="placement" type="text" id="placement-input"/>
    <button onclick="submitPlacement()">Start</button>
    <button onclick="move('forward')">Forward</button>
    <button onclick="move('right')">Turn right</button>
    <button onclick="move('left')">Turn left</button>
    <div id="container"></div>
</body>
</html>

