<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $META_TITLE = "Error... Page Not Found...";
    require_once("modules/meta.php");
    ?>
</head>

<body oncontextmenu="return false">
    <?php
    include_once('./modules/header.php');
    ?>
    <hr />
    <section class="text-gray-400 bg-gray-900 body-font" style="height: 50em;">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <img alt="Squad Bot Logo" src="./img/404.gif" style="margin-top: -8em;" />
            <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">
                    Looks like there was an error while finding this page.
                </h1>
                <p class="leading-relaxed mb-8">
                    Check the link to ensure it is spelled corrently, isn't missing character, etc. If it is not a url
                    error then it could be something on our end and we are sorry for that. Oh, the page may not excist
                    anymore, so that could be it too.
                </p>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                        <a href="./">Home Page</a>
                    </button>
                    <button
                        class="ml-4 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">
                        <a href="./support">Support Server</a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <hr />
    <?php
    include_once('./modules/footer.php');
    ?>
</body>

</html>