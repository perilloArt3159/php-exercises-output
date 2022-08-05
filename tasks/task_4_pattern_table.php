<!DOCTYPE html>

<?php
$page =
    [
        'name'      => 'Table Pattern',
        'title'     => 'Task 4',
        'caption'   => 'Task 4 : Table Pattern'
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
                4.) Create a Table Pattern.
            </h1>
        </div>
        <div>
            <?php
            $sizeX = 6;
            $sizeY = 5;

            $numArray = []; 

            for ($i = 0; $i < $sizeX; $i++)
            {
                $numArray[$i] = [];
                $initial      = $i + 1;  
                $solution     = $i; 

                for ($j = 0; $j < $sizeY; $j++)
                {                    
                    if ($j == 0)
                    {
                        array_push($numArray[$i], $initial);
                        $solution = $initial; 
                    }
                    else 
                    {
                        $solution *= $initial+1; 
                        array_push($numArray[$i], $solution);
                    }
                }

                //! Reverse Entries
                $numArray[$i] = array_reverse($numArray[$i]);
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
                                <?php for ($i = 0; $i < ($sizeX-1); $i++) : ?>
                                    <th class="p-3">Col_<?= $i + 1 ?></th>
                                <?php endfor; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < $sizeX; $i++) : ?>
                                <tr class="bg-white border-b hover:bg-gray-200 ease-in-out duration-300">
                                    <?php for ($j = 0; $j < $sizeY; $j++) : ?>
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
    </div>

    <?php include_once "../includes/section_footer.include.php"; ?>
</body>

</html>