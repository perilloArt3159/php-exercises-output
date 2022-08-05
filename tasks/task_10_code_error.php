<!DOCTYPE html>

<?php
$page =
    [
        'name'      => 'Code Error',
        'title'     => 'Task 10',
        'caption'   => 'Task 10 : Code Error'
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
                5.) Fix the code function to output the correct reslt. Explain your Answer.
            </h1>
        </div>
        <div>
            <?php
            /* 
                $lines  = 7; 
                $width  = 4; 
                $intial = ($lines / 2) + 1;

                for ($i=1; $i<=$lines;$i++)
                {
                    for ($j=0; $j<=12;$j++)
                    {
                        if($j == $initial)
                        {
                            $initial *= $initial;

                            echo "*";
                        }
                        else 
                        {
                            echo "<span>&nbsp</span>";
                        }
                    }
                    echo "<br>";
                } */
            echo "<pre>";
            for ($i = 1; $i < 8; $i++)
            {
                for ($j = $i; $j < 8; $j++)
                    echo "&nbsp;&nbsp;";
                for ($j = 2 * $i - 1; $j > 0; $j--)
                    echo ("&nbsp;*");
                echo "<br>";
            }
            $n = 8;
            for ($i = 8; $i > 0; $i--)
            {
                for ($j = $n - $i; $j > 0; $j--)
                    echo "&nbsp;&nbsp;";
                for ($j = 2 * $i - 1; $j > 0; $j--)
                    echo ("&nbsp;*");
                echo "<br>";
            }
            echo "</pre>";
            ?>
        </div>
    </div>

    <?php include_once "../includes/section_footer.include.php"; ?>
</body>

</html>