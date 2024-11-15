<!DOCTYPE html>
<html>
<head>
    <style>
        .chessboard {
            width: 320px;
            height: 320px;
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            border: 2px solid #333;
        }
        .black {
            background-color: black;
            width: 40px;
            height: 40px;
        }
        .white {
            background-color: white;
            width: 40px;
            height: 40px;
        }
    </style>
</head>
<body>
    <!-- I Used Gemini For The Style   -->

<div class="chessboard">
    <?php
    // loop for rwo
    for ($i = 0; $i < 8; $i++) {
        //loop for column
        for ($j = 0; $j < 8; $j++) {
            
            if (($i + $j) % 2 == 0) {
                echo '<div class="white"></div>';
            } else {
                echo '<div class="black"></div>';
            }
        }
    }
    ?>
</div>

</body>
</html>
