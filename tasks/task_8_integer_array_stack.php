<!DOCTYPE html>

<?php
if (session_status() == PHP_SESSION_NONE)
{
    //session has not started
    session_start();
}
?>

<?php

if (!isset($_SESSION['ARRAY_STACK']))
{
    $_SESSION['ARRAY_STACK'] = [];
}

$popValue = null;

if (isset($_POST['_action_push']))
{
    $stack = $_SESSION['ARRAY_STACK'];

    $arrayLength = count($stack);

    if ($_POST['new_value'] != null)
    {
        //! Assign new Value 
        $stack[$arrayLength] = $_POST['new_value'];

        $_SESSION['ARRAY_STACK'] = $stack;
    }
}

if (isset($_POST['_action_pop']))
{
    $stack    = $_SESSION['ARRAY_STACK'];
    $newArray = [];

    $arrayLength = count($stack);


    if ($arrayLength > 0)
    {
        //! Find Removed 
        $popValue = $stack[$arrayLength - 1];

        for ($i = 0; $i < ($arrayLength - 1); $i++)
        {
            $newArray[$i] = $stack[$i];
        }

        $_SESSION['ARRAY_STACK'] = $newArray;
    }
}
?>

<?php
$page =
    [
        'name'      => 'Array Stack',
        'title'     => 'Task 8',
        'caption'   => 'Task 8 : Array Stack'
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
                3.) Create a queue of integers using arrays (first in first out )
            </h1>
            <ol class="list-disc">
                <li>Create input fields and push button to insert new value.</li>
                <li>Create pop button to remove top value.</li>
                <li>Always display the existing stack content.</li>
                <li>Do not use pre defined php array function like array_pop.</li>
            </ol>
        </div>
        <div>
            <?php
                $arrayStack = $_SESSION['ARRAY_STACK'];
            ?>
            <div class="mb-2">
                <h1 class="font-bold">Stack : </h1>
                <div class="my-5">
                    <?php if (count($arrayStack) == 0) : ?>
                        <span>
                            []
                        </span>
                    <?php else : ?>
                        <?php for ($i = 0; $i < count($arrayStack); $i++) : ?>
                            <span class="p-2 bg-gray-900 text-white mr-1 rounded shadow">
                                <?= $arrayStack[$i] ?>
                            </span>
                        <?php endfor; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-5">
                <div class="">
                    <form method="POST" action="task_8_integer_array_stack.php" class="my-2">
                        <input type="hidden" name="_action_push">
                        <div class="my-2">
                            <input class="p-2 w-full border" type="number" name="new_value" id="" placeholder="Enter New Number:" required>
                        </div>
                        <button type="submit" class="bg-gray-900 block  w-full p-2 block rounded text-white hover:bg-gray-800 ease-in-out duration-900 flex justify-center items-center text-sm">
                            Push
                        </button>
                    </form>
                    <form method="POST" action="task_8_integer_array_stack.php" class="my-2">
                        <input type="hidden" name="_action_pop">
                        <button type="submit" class="bg-gray-900 block w-full p-2 block rounded text-white hover:bg-gray-800 ease-in-out duration-900 flex justify-center items-center text-sm">
                            Pop
                        </button>
                    </form>
                    <h1 class="font-bold">
                        Removed : <?= $popValue ?? '[]' ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <?php include_once "../includes/section_footer.include.php"; ?>
</body>

</html>