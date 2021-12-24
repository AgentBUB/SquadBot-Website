<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $META_TITLE = "Thanks for Inviting Squad Bot!";
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
            <img alt="Squad Bot Logo" src="./img/thank-you.gif" style="margin-bottom: 5em;" />
            <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">
                    Thank you for invite Squad Bot to your Discord Server!
                </h1>
                <p class="leading-relaxed mb-8">
                    We love to see more and more servers use our amazing bot! The future of Squad Bot is bright and we
                    are glad your apart of the journey.
                </p>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                        <a href="./commands">Commands</a>
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