<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A place - JourneyMates</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Nunito:wght@700&family=Quicksand:wght@700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-200">
    <div class="relative min-h-screen">
        <div class="pb-32">
            <!--navbar-->
            @include('includes.navbar')
            <main class="container mx-auto pt-24">
                <div class="mx-12">
                    <!--place header-->
                    <div>
                        <h1>
                            Soto Betawi Menteng
                        </h1>
                        <div class="flex">
                            <div class="flex">
                                <div>rating</div>
                                <div>rating count</div>
                            </div>
                            <div class="flex">
                                <div>place type</div>
                                <div>location</div>
                            </div>
                        </div>
                    </div>
                    <!--pictures-->
                    <div class="flex flex-wrap">
                        <a href="#" class="mx-6 my-8">
                            <div class="h-60 w-60 bg-red-800">
                                <h4 class="text-[0px]">img id</h4>
                            </div>
                        </a>
                        <a href="#" class="mx-6 my-8">
                            <div class="h-60 w-60 bg-red-800">
                                <h4 class="text-[0px]">img id</h4>
                            </div>
                        </a>
                        <a href="#" class="mx-6 my-8">
                            <div class="h-60 w-60 bg-red-800">
                                <h4 class="text-[0px]">img id</h4>
                            </div>
                        </a>
                        <a href="#" class="mx-6 my-8">
                            <div class="h-60 w-60 bg-red-800">
                                <h4 class="text-[0px]">img id</h4>
                            </div>
                        </a>
                        <a href="#" class="mx-6 my-8">
                            <div class="h-60 w-60 bg-red-800">
                                <h4 class="text-[0px]">img id</h4>
                            </div>
                        </a>
                        <a href="#" class="mx-6 my-8">
                            <div class="h-60 w-60 bg-red-800">
                                <h4 class="text-[0px]">img id</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <h2>Contribute</h2>
                        <div class="mt-4">
                            <button
                                class="border border-black py-2 px-4 rounded-full hover:bg-black hover:text-white transition">Write
                                a review</button>
                            <button
                                class="border border-black py-2 px-4 rounded-full hover:bg-black hover:text-white transition">Upload
                                a photo</button>
                            <div class="my-4">
                                <form action="">
                                    <h2>Insert Your image</h2>
                                    <input type="file">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
        <!--footer-->
        @include('includes.footer')
    </div>
</body>

</html>