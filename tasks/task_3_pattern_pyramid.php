<!DOCTYPE html>

<?php
$page =
    [
        'name'      => 'Pyramid',
        'title'     => 'Task 3',
        'caption'   => 'Task 3 : Pyramid Pattern'
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
                3.) Create a Pyramid Pattern.
            </h1>
        </div>
        <div>
            <?php
                $maxNum       = 5;
                $initialValue = 0;
                
                for ($i=0; $i <= ($maxNum-1) ; $i++)
                {
                    $initialValue  = ($i + 1); 
                    $accumulateNum = 0;  

                    for($j=0; $j <= $i; $j++ )
                    {
                        $accumulateNum += $initialValue; 

                        echo "<span class='mr-2 p-2'>{$accumulateNum}</span>";
                    }

                    echo "<br>"; 
                }

                for ($i = ($maxNum-2); $i >= 0; $i--)
                {
                    $initialValue  = ($i + 1);
                    $accumulateNum = 0;

                    for ($j = 0; $j <= $i; $j++)
                    {
                        $accumulateNum += $initialValue;

                        echo "<span class='mr-2 p-2'>{$accumulateNum}</span>";
                    }

                    echo "<br>";
                }
            ?>
        </div>
    </div>

    <?php include_once "../includes/section_footer.include.php"; ?>
</body>

</html>