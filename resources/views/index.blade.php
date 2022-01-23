<?php
use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JourneyMates</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Nunito:wght@700&family=Quicksand:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
    <div class="relative min-h-screen">
        <div class="pb-32">
            <!--navbar-->
            @include('includes.navbar')
            <!--top squares-->
            <div class="container mx-auto pt-24">
                <div class="mx-12">
                    <div class="container flex flex-wrap justify-between items-center">
                        @foreach ($data as $dat)
                        @if ($dat->intCatId == 4)
                        <a href="#">
                            <div
                                class="border border-emerald-400 w-52 h-16 rounded hover:bg-emerald-500 duration-500 transform transition hover:text-white">
                                <div class="mx-8 my-4 flex justify-between items-center"
                                    style="font-family: 'Nunito', sans-serif;">
                                    {{$dat->Categories}}
                                    <i class= "{{ $dat->Icon }}" width="32" height="20" viewBox="0 0 32 20"></i>
                                </div>
                            </div>
                        </a>
                        @elseif ($dat->intCatId == 6)
                        <a href="/add_place">
                            <div
                                class="border border-emerald-400 w-52 h-16 rounded hover:bg-emerald-500 duration-500 transform transition hover:text-white">
                                <div class="mx-8 my-4 flex justify-between items-center"
                                    style="font-family: 'Nunito', sans-serif;">
                                    {{$dat->Categories}}
                                    <i class= "{{ $dat->Icon }}" width="32" height="20" viewBox="0 0 32 20"></i>
                                </div>
                            </div>
                        </a>
                        @else
                        <a href="#">
                            <div
                                class="border border-emerald-400 w-52 h-16 rounded hover:bg-emerald-500 duration-500 transform transition hover:text-white">
                                <div class="mx-8 my-4 flex justify-between items-center"
                                    style="font-family: 'Nunito', sans-serif;">
                                    {{$dat->Categories}}
                                    <i class= "{{ $dat->Icon }}" width="32" height="20" viewBox="0 0 32 20"></i>
                                </div>
                            </div>
                        </a>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!--big searchbar-->
            <div class="container mx-auto pt-10">
                <div class="mx-12 bg-center bg-cover"
                    style="background-image: url(https://s3-alpha-sig.figma.com/img/6d5d/1bc9/bddbce21a89bf98295e7de6582d6b6b4?Expires=1642982400&Signature=IvRqsRqAgQNypSIdLUM4rfUh2Xp3kcxiuLmrOUh8RxiimvhfwqeynidSfSLvNFU0IDqhs8Axhvdacjsugqgb2y~I920UgA7E8nl67te0PZCaUti3Soa5RYClbM2~oQrR2Z4rOWxQvq8fES6Zo6zvN1uyp9NMosaDJXJKFls-4AqPp05gG8sP51jkgwrX8y4B01pHoQFLVpYMioXYDojPUyeak2Wh2Bfzb7kQqsLqSaE9xGIQcCDfbGklVJpKXjGArKOEzxwruZppYnnW0zyeq8g4IxEbsc9S8Z8nMG82Exw2CC-wwOqB0XqNRwn6ooA3tLNoNjr5w2zRPmcA~cL1lw__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA)">
                    <form class="flex pt-2 relative mx-auto text-gray-600 ">
                        <input
                            class="border-2 border-gray-300 bg-white h-16 w-full px-10 rounded-full text-xl focus:outline-none mx-12 my-32 leading-[4rem]"
                            type="search" name="search" placeholder="Search">
                        <button type="submit" class="absolute right-20 top-40">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <!--small cards-->
            <div class="container mx-auto py-5 pb-16">
                <h1 class="text-2xl pb-6 mx-12 pt-8" style="font-family: 'Nunito', sans-serif;">You might also like
                    these</h1>
                <div class="flex justify-between">
                    @foreach($place as $place)
                    <div class="mx-12 card-group">
                        <div
                            class="relative pl-1 flex justify-center rounded-xl hover:scale-105 duration-500 transform transition cursor-pointer">
                            <!-- Tag Discount -->
                            <div class="w-72 pb-2 bg-white rounded-xl shadow-xl z-10 ">
                                <div class="relative">
                                    <!-- :src="image.largeImageURL"     -->
                                    <img src="https://cdn.pixabay.com/photo/2010/12/13/10/05/berries-2277_640.jpg"
                                        class="max-h-60 object-cover rounded-t-xl" alt="">
                                    <!-- Tag rekomendasi -->
                                    <div
                                        class="bottom-0 right-0 mb-2 mr-2 px-2 rounded-lg absolute bg-yellow-500 text-gray-100 text-xs font-medium">
                                        Recommended</div>
                                </div>
                                <div class="px-2 py-1">
                                    <!-- Product Title -->
                                    <div class="text-sm md:text-base font-bold pr-2">{{$place->place_name}}
                                    </div>
                                    <div class="flex py-2">
                                        <!-- Distance -->
                                        <div
                                            class="bg-gray-200 p-1 mr-2 rounded-full text-xs font-medium text-gray-900">
                                            0.5 Km
                                        </div>
                                        <div class="flex justify-between item-center">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-3 md:h-5 md:w-5 text-yellow-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                <!-- Rating total -->
                                                <p class="text-gray-600 font-bold text-xs md:text-sm ml-1">
                                                    4.96
                                                    <!-- Jumlah review -->
                                                    <span class="text-gray-500 font-normal">(76 rewiews)</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Alamat -->
                                    <p class="pb-1 md:pb-2 text-xs md:text-sm text-gray-500">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua
                                    </p>
                                    <!-- Tombol pesan -->
                                    <a class="duration-500 transform transition inset-x-0 bottom-0 flex justify-center bg-emerald-400 hover:bg-white text-sm md:text-base border hover:border-emerald-500 rounded-xl p-1 text-gray-100 hover:text-emerald-500"
                                        href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!--big cards-->
        </div>
        <!--footer-->
        @include('includes.footer')
    </div>
</body>

</html>