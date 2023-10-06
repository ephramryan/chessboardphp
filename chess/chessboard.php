<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <link rel="stylesheet" href="style.php">
</head>
<body>

<?php include 'style.php'?>

    <?php
    // Define the size of the chessboard (number of rows and columns)
    $size = 8;
    ?>

    <div class="board">
        <?php for ($row = 1; $row <= $size; $row++) : ?>
            <div class="row">
                <?php for ($col = 1; $col <= $size; $col++) : ?>
                    <?php
                    // Determine whether the cell should be black or white
                    $class = ($row + $col) % 2 == 0 ? 'black' : 'white';
                    ?>
                    <!-- below need to add an if statement -->

                    <?php if ($row == 2 && $col == 4) : ?>
                        <div class="<?=$class?>"><img src="https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png" alt="White King" class="kingqueen"></div>
                    <?php elseif ($row == 6 && $col == 8) : ?>
                        <div class="<?=$class?>"><img src="https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png" alt="White Queen" class="kingqueen"></div>     
                    <?php else : ?>
                        <div class="<?=$class?>"></div>
                <?php endif; ?>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
     


    </div>
</body>
</html>
