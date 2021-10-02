<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <?php wp_head();?>
</head>

<body class="text-base text-gray-700 font-Montserrat">
    <div class="circle is-light circle-1"></div>
    <div class="circle is-light circle-2"></div>
    <div class="circle is-primary circle-3"></div>
    <div class="circle is-primary circle-4"></div>
    <div class="circle is-primary circle-5"></div>
    <div class="circle is-primary circle-6"></div>
    <div class="circle is-light circle-7"></div>

    <div class="bg-hero bg-no-repeat bg-cover">
        <!--   nav bar -->
        <div class="p-5 flex justify-between">
            <!-- left -->
            <div class="flex">
                <!--svg logo-->                
                <a href="/"><h1 class="text-xl text-bold text-white">SGT Wiki</h1></a>
            </div>
            <!-- right -->
            <div class="flex gap-x-5 text-white">
                <a href="/wp-admin/post-new.php" alt="Home">New Post</a>
            </div>
        </div>

        <!--   hero section -->
        <div class="p-5 mx-auto text-center">
            <p class="text-3xl text-white">Search for anything</p>

            <!--     search form -->
            <div class="my-5 flex justify-start text-2xl">
                <input class="outline-none w-1/2 px-5 py-3 mx-auto border rounded-full" type="text"
                    placeholder="keyword...">
            </div>
        </div>
    </div>