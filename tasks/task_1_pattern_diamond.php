<!DOCTYPE html>

<?php
$page =
    [
        'name'      => 'Double Diamond',
        'title'     => 'Task 1',
        'caption'   => 'Task 1 : Double Diamond Pattern'
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
                1.) Create a Double Diamond Pattern. 
            </h1>
        </div>
        <div>
            <?php
                echo "<pre>";

                $patternPoints = 
                [
                    [3, 9], 
                    [2, 4, 8, 10], 
                    [1, 5, 7, 11], 
                    [0, 6, 12],
                    [1, 5, 7, 11],
                    [2, 4, 8, 10],
                    [3, 9], 
                ]; 

                $rows    = 7;
                $width   = 4;
                $columns = 12;

                for ($i=0; $i < $rows;$i++)
                {
                    for ($j=0; $j<=$columns;$j++)
                    {
                        if(in_array($j, $patternPoints[$i]))
                        {
                            echo "<span>*</span>";
                        }
                        else 
                        {
                            echo "<span>&nbsp</span>";
                        }
                    }
                    echo "<br>";
                } 

                echo "</pre>";
            ?>  
        </div>
    </div>

    <?php include_once "../includes/section_footer.include.php"; ?>
</body>

</html>