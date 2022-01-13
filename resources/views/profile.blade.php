<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ auth()->user()->fname }} - JourneyMates</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Nunito:wght@700&family=Quicksand:wght@700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-200">
    <div class="relative min-h-screen">
        <div class="pb-32">
            <!--navbar-->
            @include('includes.navbar')
            <!--Profile body-->
            <main class="profile-page">
                <section class="relative block h-500-px">
                    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
                        background-image: url('https://s3-alpha-sig.figma.com/img/58b1/4433/85f6d06b4105824b80ab2321a42ddce7?Expires=1642377600&Signature=D1bo0KhctwMXddTHN-AjmArG6jXne7bZTeg2BGvpv7C9huXPHDCFKgSXv7JhRR64dNlQQsA-NSpkrIPss-R~~d11aebEnisbAUD~JJVcJOdO-whV8M8eY23VMhMst4klHspW9f~xHPrnxHSP2N8gzKv6EH0f6Akk~8Rzo8RYy~le8rKMmqWEw8s-e6yhQZVNiOWuf8j33UmsqcbPhtVJzjiVNIOvFc8maPPrQ7QFZwoXgeiWgQXjKD43j8f~giAjGhl2TFrx40djgNHWSQSxrSfCEORgpbGBAljBJRbsynnHKC6sZIYL-7OolPkAHEGEXQwwVnfx65Az5Eqt2RoCUg__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA');
                        ">
                        <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
                    </div>
                    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                        style="transform: translateZ(0px)">
                        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                            <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                        </svg>
                    </div>
                </section>
                <section class="relative py-16 bg-blueGray-200">
                    <div class="container mx-auto px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                            <div class="px-6">
                                <div class="flex flex-wrap justify-center">
                                    <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                        <div class="relative">
                                            <img alt="..."
                                                src="https://i.pinimg.com/474x/64/b2/95/64b295c8c9df6a71bb8e72adcb1bb6cd.jpg"
                                                class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                        <div class="py-6 px-3 mt-32 sm:mt-0">
                                            <button
                                                class="bg-emerald-400 active:bg-emerald-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150"
                                                type="button">
                                                Edit profile
                                            </button>
                                            <button
                                                class="bg-emerald-400 active:bg-emerald-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150"
                                                type="button">
                                                Bookmarks
                                            </button>
                                        </div>
                                    </div>

                                    
                                    <div class="w-full lg:w-4/12 px-4 lg:order-1">
                                        <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                            <div class="mr-4 p-3 text-center">
                                                <span
                                                    class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">22</span><span
                                                    class="text-sm text-blueGray-400">Contribution</span>
                                            </div>
                                            <div class="mr-4 p-3 text-center">
                                                <span
                                                    class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">10</span><span
                                                    class="text-sm text-blueGray-400">Followers</span>
                                            </div>
                                            <div class="lg:mr-4 p-3 text-center">
                                                <span
                                                    class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">89</span><span
                                                    class="text-sm text-blueGray-400">Following</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="text-center mt-12">
                                    <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                                        {{ auth()->user()->fname }}
                                    </h3>
                                    <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                                        <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                                        Los Angeles, California
                                    </div>
                                    <div class="mb-2 text-blueGray-600 mt-10">
                                        <i class="fas fa-globe mr-2 text-lg text-blueGray-400"></i>Add a website
                                    </div>
                                    <div class="mb-2 text-blueGray-600">
                                        <i class="fas fa-info mr-2 text-lg text-blueGray-400"></i>Write some details about yourself
                                    </div>
                                </div>
                                <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                                    <div class="flex flex-wrap justify-center">
                                        <div class="w-full lg:w-9/12 px-4">
                                            <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                                                Write your first review!<br> Start reviewing hotels, restaurants, and places
                                                you’ve already visited.
                                            </p>
                                            <a href="#pablo" class="font-normal text-emerald-400">Show more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <!--footer-->
        @include('includes.footer')
    </div>
</body>

</html>