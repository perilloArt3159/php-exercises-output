<!DOCTYPE html>

<?php
$page =
    [
        'name'      => 'Page Counter',
        'title'     => 'Task 7',
        'caption'   => 'Task 7 : Dimensional Array'
    ];
?>

<html lang="en">

<head>
    <?php include_once "../includes/section_head.include.php"; ?>

    <style>
        tbody>tr:last-child,
        tbody>tr>td:last-child {
            background-color: #aaa;
            color: white;
        }
    </style>
</head>

<body>
    <?php include_once "../includes/section_header.include.php"; ?>

    <div class="container mx-auto">
        <div>
            <h1 class="my-3">
                2.) Manipulate Multidimensional Array.
            </h1>
            <ol class="list-disc">
                <li>
                    Create a 4x4 table
                    <ol class="list-disc">
                        <li>
                            Generate a random number from 1 - 100.
                        </li>
                        <li>
                            The number generated should always be unique.
                        </li>
                        <li>
                            Sum up the number per column and row.
                        </li>
                    </ol>
                </li>
            </ol>
        </div>
        <div>
            <?php
            //! Define Array; 
            $numArray    = [[]];
            $sumRowArray = [];

            //! Track Numbers 
            $trackArray = [];

            //! Define Array Size
            $sizeX    = 4;
            $sizeY    = 4;

            for ($i = 0; $i <= $sizeX; $i++)
            {
                array_push($sumRowArray, 0);
            }

            for ($i = 0; $i <= $sizeX; $i++)
            {
                //! Define Index as an Array;
                $numArray[$i] = [];
                $sumColumn    = 0;

                for ($j = 0; $j <= $sizeY; $j++)
                {
                    if ($i == $sizeX)
                    {
                        array_push($numArray[$i], $sumRowArray[$j]);
                    }
                    else
                    {
                        if ($j == $sizeY)
                        {
                            array_push($numArray[$i], $sumColumn);
                        }
                        else
                        {
                            //! Generate Unique Number; 
                            do
                            {
                                $uniqueNumber = rand(1, 100);
                            } while (in_array($uniqueNumber, $trackArray));

                            array_push($numArray, $uniqueNumber);

                            array_push($numArray[$i], $uniqueNumber);

                            $sumColumn += $numArray[$i][$j];
                            $sumRowArray[$j] += $numArray[$i][$j];
                        }
                    }
                }
            }
            ?>

            <div class="grid grid-cols-2 gap-4 mt-5">
                <div class="">
                    <table class="table-auto w-full text-sm shadow-md rounded overflow-hidden">
                        <thead>
                            <tr class="bg-gray-900 text-white text-left border-b">
                                <th class="p-3 text-center" colspan="5">OUTPUT</th>
                            </tr>
                            <tr class="bg-gray-900 text-white text-left">
                                <th class="p-3">Col_1</th>
                                <th class="p-3">Col_2</th>
                                <th class="p-3">Col_3</th>
                                <th class="p-3">Col_4</th>
                                <th class="p-3">Col_Sum</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i <= $sizeX; $i++) : ?>
                                <tr class="bg-white border-b hover:bg-gray-200 ease-in-out duration-300">
                                    <?php for ($j = 0; $j <= $sizeY; $j++) : ?>
                                        <td class="p-3">
                                            <?= $numArray[$i][$j]; ?>
                                        </td>
                                    <?php endfor; ?>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php include_once "../includes/section_footer.include.php"; ?>
</body>

</html>