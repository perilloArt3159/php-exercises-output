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
            function bubbleSort($lists)
            {
                $length = count($lists);

                for ($parent = 0; $parent < $length; $parent++)
                {
                    echo print_r ($lists) . '<br>';
                    for ($child = 0; $child < $length - $parent - 1; $child++)
                    {
                        if ($lists[$child] > $lists[$child + 1])
                        {
                            $temp = $lists[$child + 1];
                            $lists[$child] = $lists[$child + 1];
                            $lists[$child + 1] = $temp;
                        }
                    }
                }

                return $lists;
            }

            $testArray   = [50, 40, 30 ,20 ,20];
            
            $sortedArray =  bubbleSort($testArray);

            for($i=0; $i < count($sortedArray); $i++)
            {
                echo $sortedArray[$i] . '<br>';
            }

            ?>

            <h1>Explaination</h1>
            <p>

            </p>
        </div>
    </div>

    <?php include_once "../includes/section_footer.include.php"; ?>
</body>

</html>