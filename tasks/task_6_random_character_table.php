<!DOCTYPE html>

<?php
$page =
    [
        'name'      => 'Character Table',
        'title'     => 'Task 6',
        'caption'   => 'Task 6 : Character Table'
    ];
?>

<html lang="en">

<head>
    <?php include_once "../includes/section_head.include.php"; ?>
</head>

<body>
    <?php include_once "../includes/section_header.include.php"; ?>

    <div class="container mx-auto">
        <div>
            <h1 class="my-3">
                1.) Generate a random character from a-k.
            </h1>
            <ul>
                <li>Create a 4 x 5 table</li>
                <li>Display all random character inside the table</li>
                <li>Hightlight all character that belongs to an even column</li>
            </ul>
        </div>
        <div>
            <?php
                //! Define Array
                $randomCharacterArray = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k']; 
                $sizeX = 4; 
                $sizeY = 5; 
            ?>
        </div>
    </div>

    <?php include_once "../includes/section_footer.include.php"; ?>
</body>

</html>