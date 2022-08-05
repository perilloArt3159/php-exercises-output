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

            function fixedBubbleSort($lists)
            {
                $length = count($lists);

                for ($parent = 0; $parent < $length; $parent++)
                {
                    for ($child = 0; $child < $length - $parent - 1; $child++)
                    {
                        if ($lists[$child] > $lists[$child + 1])
                        {
                            $temp              = $lists[$child];
                            $lists[$child]     = $lists[$child + 1];
                            $lists[$child + 1] = $temp;
                        }
                    }
                }

                return $lists;
            }


            $testArray = [];

            for ($i = 0; $i < 10; $i++)
            {
                array_push($testArray, rand(0, 10000));
            }

            $errorSortedArray = bubbleSort($testArray);
            $fixedSortedArray = fixedBubbleSort($testArray);

            ?>

            <div class="my-2">
                <h1 class="font-bold mb-2">
                    Original Array :
                </h1>
                <?php for ($i = 0; $i < count($testArray); $i++) : ?>
                    <span class="p-2 bg-gray-900 text-white mr-1 rounded shadow">
                        <?= $testArray[$i] ?>
                    </span>
                <?php endfor ?>
            </div>

            <div class="my-2">
                <h1 class="font-bold mb-2">
                    Sorted Array Using Old Bubble Sort :
                </h1>
                <?php for ($i = 0; $i < count($testArray); $i++) : ?>
                    <span class="p-2 bg-gray-900 text-white mr-1 rounded shadow">
                        <?= $errorSortedArray[$i] ?>
                    </span>
                <?php endfor ?>
            </div>

            <div class="my-2">
                <h1 class="font-bold mb-2">
                    Sorted Array Using Fixed Bubble Sort :
                </h1>
                <?php for ($i = 0; $i < count($testArray); $i++) : ?>
                    <span class="p-2 bg-gray-900 text-white mr-1 rounded shadow">
                        <?= $fixedSortedArray[$i] ?>
                    </span>
                <?php endfor ?>
            </div>

            <div class="my-2">
                <h1 class="font-bold mb-2">Explaination</h1>
                <ul class="list-disc">
                    <li>
                        $temp = $lists[$child + 1]; should be $temp = $lists[$child];
                    </li>
                    <li>
                        function should return the lists
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <?php include_once "../includes/section_footer.include.php"; ?>
</body>

</html>