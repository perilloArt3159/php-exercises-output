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
            <ul class="list-disc">
                <li>Create a 4 x 5 table.</li>
                <li>Display all random character inside the table.</li>
                <li>Hightlight all character that belongs to an even column.</li>
            </ul>
        </div>
        <div>
            <?php

            //! Function to Check if Even
            function isEven(int $num): bool
            {
                if ($num % 2 == 0)
                {
                    return true;
                }

                return false;
            }

            //! Define Array
            $randomCharacterArray = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k'];
            $sizeX = 4;
            $sizeY = 5;

            $randomCharacterTable = [];
            $arrayLength          = count($randomCharacterArray); 

            for ($i = 0; $i < $sizeX; $i++)
            {
                $randomCharacterTable[$i] = [];

                for ($j = 0; $j < $sizeY; $j++)
                {
                    $randomNumber = rand(0, ($arrayLength - 1));

                    array_push(
                        $randomCharacterTable[$i],
                        [
                            'value'  => $randomCharacterArray[$randomNumber],
                            'isEven' => isEven($randomNumber),
                        ]
                    );
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
                                <?php for ($i=0; $i <= $sizeX; $i++) : ?> 
                                <th class="p-3">Col_<?=$i+1?></th>
                                <?php endfor; ?> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < $sizeX; $i++) : ?>
                                <tr class="bg-white border-b hover:bg-gray-200 ease-in-out duration-300">
                                    <?php for ($j = 0; $j < $sizeY; $j++) : ?>
                                        <td class="p-3 <?= $randomCharacterTable[$i][$j]['isEven'] ? 'uppercase bg-gray-400 text-white' : '' ?>">
                                            <?= $randomCharacterTable[$i][$j]['value']; ?>
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
    </div>

    <?php include_once "../includes/section_footer.include.php"; ?>
</body>

</html>