<!DOCTYPE html>

<?php
if (session_status() == PHP_SESSION_NONE)
{
    //session has not started
    session_start();
}
?>

<?php

if (!isset($_SESSION['REFRESH_COUNTER']))
{
    $_SESSION['REFRESH_COUNTER'] = 0;
}
else
{
    $_SESSION['REFRESH_COUNTER'] += 1;
}
?>

<?php
$page =
    [
        'name'      => 'Page Counter',
        'title'     => 'Task 5',
        'caption'   => 'Task 5 : Page Refresh Counter'
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
                5.) Create a page that shows "refresh count : 0".
            </h1>
            <ul class="list-disc">
                <li>
                    Increase the count value by 1 every page refresh
                </li>
            </ul>
        </div>
        <div class="my-2">
            <?php
                $refreshCounter = $_SESSION['REFRESH_COUNTER'];
            ?>

            <h1 class="p-2 bg-gray-100 mr-1 rounded shadow">
                Refresh Counter : <?=$refreshCounter?>
            </h1>
        </div>
    </div>

    <?php include_once "../includes/section_footer.include.php"; ?>
</body>

</html>