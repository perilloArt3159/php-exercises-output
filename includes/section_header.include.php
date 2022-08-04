<header id="header">
    <nav class="flex items-center justify-between flex-wrap bg-gray-900 p-5">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <img class="fill-current mr-2" width="70" height="70" src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg">
            <span class="font-semibold text-xl tracking-tight">PHP Exercises</span>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-md lg:flex-grow">
                <a href="/" class="block mt-4 lg:inline-block lg:mt-0 <?= $page['name'] == 'home' ? 'text-gray-400 cursor-not-allowed' : 'text-white' ?> hover:text-gray-400 font-bold mr-4">
                    Home
                </a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto mt-5">
        <div class="flex items-center justify-between py-2">
            <h1 class="capitalize">
                <?= $page['caption'] ?? 'Page Caption' ?>
            </h1>

            <?php if ($page['name'] != 'home'): ?>
            <a href="/" class="bg-gray-900 p-1 px-3 block rounded text-white hover:bg-gray-800 ease-in-out duration-900 flex justify-center items-center text-sm">
                <span class="material-symbols-outlined">
                    home
                </span>
                <span class="ml-2">
                    Back to Home
                </span>
            </a>
            <?php endif ?>
        </div>
        <div class="h-1 w-full bg-gray-200">

        </div>
    </div>
</header>