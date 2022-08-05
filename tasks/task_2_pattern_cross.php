<!DOCTYPE html>

<?php
$page =
    [
        'name'      => 'Cross',
        'title'     => 'Task 2',
        'caption'   => 'Task 2 : Cross Pattern'
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
                2.) Create a Cross Pattern.
            </h1>
        </div>
        <div>
            <?php
                $columns      = 11;
                $rows         = 11;
                $initialValue = 6;
                $reverse      = false;

                $patternPoints = 
                [
                    [0, 10], 
                    [1, 9], 
                    [2, 8], 
                    [3, 7], 
                    [4, 6],
                    [5],
                    [4, 6],
                    [3, 7],
                    [2, 8],
                    [1, 9],
                    [0, 10], 
                ]; 

                for ($i = 0; $i < $rows; $i++)
                {
                    for ($j = 0; $j < $columns; $j++)
                    {
                        if (in_array($j, $patternPoints[$i]))
                        {
                            if($i % 2 == 0)
                            {
                                echo "<span>&nbsp&nbsp&nbsp&nbsp*</span>";
                            }
                            else 
                            {
                                echo "<span>&nbsp&nbsp&nbsp&nbsp{$initialValue}</span>";
                            }
                        }
                        else
                        {
                            echo "<span>&nbsp&nbsp&nbsp&nbsp&nbsp</span>";
                        }

                    }

                    if($initialValue == 1)
                    {
                        $reverse = true; 
                    }

                    if ($reverse)
                    {
                        $initialValue += 1;
                    } 
                    else 
                    {
                        $initialValue -= 1; 
                    }


                    echo "<br>";
                } 
            ?>
        </div>
    </div>

    <?php include_once "../includes/section_footer.include.php"; ?>
</body>

</html>