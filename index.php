<!DOCTYPE html>

<?php
$page =
    [
        'name'      => 'home',
        'title'     => 'Home',
        'caption'   => 'excercise selection'
    ];
?>

<html lang="en">

<head>
    <?php include_once "includes/section_head.include.php"; ?>
</head>

<body>
    <?php include_once "includes/section_header.include.php"; ?>

    <?php
    //! Create Array of Items for Part 1 Tasks 
    $itemsSet1 = [
        [
            "name" => "Double Diamond Pattern",
            "link" => "/tasks/task_1_pattern_diamond.php",
        ],
        [
            "name" => "Cross Pattern",
            "link" => "/tasks/task_2_pattern_cross.php",
        ],
        [
            "name" => "Pyramid Pattern",
            "link" => "/tasks/task_3_pattern_pyramid.php",
        ],
        [
            "name" => "Table Pattern",
            "link" => "/tasks/task_4_pattern_table.php",
        ],
        [
            "name" => "Page Refresh Counter",
            "link" => "/tasks/task_5_count_refresh.php",
        ],
    ];

    //! Create Array of Items for Part 2 Tasks 
    $itemsSet2 = [
        [
            "name" => "Random Character Table",
            "link" => "/tasks/task_6_random_character_table.php",
        ],
        [
            "name" => "Multi Dimensional Array Manipulation",
            "link" => "/tasks/task_7_multi_dimensional_array.php",
        ],
        [
            "name" => "Integer Array Stack",
            "link" => "/tasks/task_8_integer_array_stack.php",
        ],
        [
            "name" => "Integer Array Queue",
            "link" => "/tasks/task_9_integer_array_queue.php",
        ],
        [
            "name" => "Bubble Sort Error",
            "link" => "/tasks/task_10_code_error.php",
        ],
    ]
    ?>


    <div class="container mx-auto">
        <div class="grid grid-cols-2 gap-4 mt-5">
            <div class="">
                <table class="table-auto w-full text-sm shadow-md rounded overflow-hidden">
                    <thead>
                        <tr class="bg-gray-900 text-white text-left border-b">
                            <th class="p-3 text-center" colspan="3">
                                EXERCISES SET 1
                            </th>
                        </tr>
                        <tr class="bg-gray-900 text-white text-left">
                            <th class="p-3">#</th>
                            <th class="p-3">Name</th>
                            <th class="p-3">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($itemsSet1 as $key => $item) : ?>
                            <tr class="bg-white border-b hover:bg-gray-200 ease-in-out duration-300">
                                <td class="p-3">
                                    <?= $key + 1 ?>
                                </td>
                                <td class="p-3">
                                    <?= $item["name"] ?>
                                </td>
                                <td class="p-3">
                                    <a href="<?= $item["link"] ?>" class="bg-gray-900 p-2 block rounded text-white hover:bg-gray-800 ease-in-out duration-900 flex justify-center items-center">
                                        <span class="material-symbols-outlined">
                                            link
                                        </span>
                                        <span class="ml-2">
                                            Link to Page
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div>
                <table class="table-auto w-full text-sm shadow-md rounded overflow-hidden">
                    <thead>
                        <tr class="bg-gray-900 text-white text-left border-b">
                            <th class="p-3 text-center" colspan="3">
                                EXERCISES SET 2
                            </th>
                        </tr>
                        <tr class="bg-gray-900 text-white text-left">
                            <th class="p-3">#</th>
                            <th class="p-3">Name</th>
                            <th class="p-3">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($itemsSet2 as $key => $item) : ?>
                            <tr class="bg-white border-b hover:bg-gray-200 ease-in-out duration-300">
                                <td class="p-3">
                                    <?= $key + 1 ?>
                                </td>
                                <td class="p-3">
                                    <?= $item["name"] ?>
                                </td>
                                <td class="p-3">
                                    <a href="<?= $item["link"] ?>" class="bg-gray-900 p-2 block rounded text-white hover:bg-gray-800 ease-in-out duration-900 flex justify-center items-center">
                                        <span class="material-symbols-outlined">
                                            link
                                        </span>
                                        <span class="ml-2">
                                            Link to Page
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?php include_once "includes/section_footer.include.php"; ?>
</body>

</html>