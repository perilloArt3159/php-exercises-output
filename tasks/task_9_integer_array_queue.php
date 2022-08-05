<!DOCTYPE html>


<?php
if (session_status() == PHP_SESSION_NONE)
{
    //session has not started
    session_start();
}
?>

<?php

if (!isset($_SESSION['ARRAY_QUEUE']))
{
    $_SESSION['ARRAY_QUEUE'] = [];
}

$popValue = null;

if (isset($_POST['_action_push']))
{
    $queue = $_SESSION['ARRAY_QUEUE'];

    $arrayLength = count($queue);

    if ($_POST['new_value'] != null)
    {
        //! Assign new Value 
        $queue[$arrayLength] = $_POST['new_value'];

        $_SESSION['ARRAY_QUEUE'] = $queue;
    }
}

if (isset($_POST['_action_pop']))
{
    $queue    = $_SESSION['ARRAY_QUEUE'];
    $newArray = [];

    $arrayLength = count($queue);


    if ($arrayLength > 0)
    {
        //! Find Removed 
        $popValue = $queue[0];

        for ($i = 1; $i < $arrayLength; $i++)
        {
            $newArray[$i - 1] = $queue[$i];
        }

        $_SESSION['ARRAY_QUEUE'] = $newArray;
    }
}
?>

<?php
$page =
    [
        'name'      => 'Array Queue',
        'title'     => 'Task 9',
        'caption'   => 'Task 9 : Array Queue'
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
                4.) Create a queue of integers using arrays (first in first out ).
            </h1>
            <ol class="list-disc">
                <li>Create input fields and push button to insert new value</li>
                <li>Create pop button to remove old value</li>
                <li>Always display the existing stack content</li>
                <li>Do not use pre defined php array function like array_pop</li>
            </ol>
        </div>
        <div>
            <?php
            $arrayQueue = $_SESSION['ARRAY_QUEUE'];
            ?>
            <div class="mb-2">
                <h1 class="font-bold">Queue : </h1>
                <div class="my-5">
                    <?php if (count($arrayQueue) == 0) : ?>
                        <span class="p-2 bg-gray-900 text-white mr-1 rounded shadow">
                            Empty []
                        </span>
                    <?php else : ?>
                        <?php for ($i = 0; $i < count($arrayQueue); $i++) : ?>
                            <span class="p-2 bg-gray-900 text-white mr-1 rounded shadow">
                                <?= $arrayQueue[$i] ?>
                            </span>
                        <?php endfor; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-5">
                <div class="">
                    <form method="POST" action="task_9_integer_array_queue.php" class="my-2">
                        <input type="hidden" name="_action_push">
                        <div class="my-2">
                            <input class="p-2 w-full border" type="number" name="new_value" id="" placeholder="Enter New Number:" required>
                        </div>
                        <button type="submit" class="bg-gray-900 block  w-full p-2 block rounded text-white hover:bg-gray-800 ease-in-out duration-900 flex justify-center items-center text-sm">
                            Push
                        </button>
                    </form>
                    <form method="POST" action="task_9_integer_array_queue.php" class="my-2">
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