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
    <style>
        p{
            display: -webkit-box;
            overflow : hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical; 
        }
    </style>
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
                        <input class="border-2 border-gray-300 bg-white h-16 w-full px-10 rounded-full text-xl focus:outline-none mx-12 my-32 leading-[4rem]" 
                        type="search" name="search" placeholder="Search">
                        <button type="submit" class="absolute right-20 top-40">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <!--small cards-->
            <div class="container mx-auto py-5 pb-16">
            <h1 class="text-2xl pb-6 mx-12 pt-8" style="font-family: 'Nunito', sans-serif;">You might also like these</h1>
            <div class="flex flex-wrap -mx-4">
            @foreach($place as $place)
                <div class="w-full sm:w-2 md:w-2 xl:w-1/4 p-4">
                    <a href="/places/{{ $place->place_id}}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative pb-48 overflow-hidden">
                    <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('storage/images/' . $place->place_image) }}" alt="">
                    </div>
                    <div class="p-4">
                    <span class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                    <h2 class="mt-2 mb-2  font-bold">{{ $place->place_name }}</h2>
                    <p class="text-sm">{{ $place->place_description }}</p>
                    </div>
                    <div class="p-4 border-t border-b text-xs text-gray-700">
                    <span class="flex items-center mb-1">
                        <i class="far fa-eye fa-fw mr-2 text-gray-900"></i> Total Viewers: {{ $place->page_viewer_count }}
                    </span>
                    <span class="flex items-center">
                        <i class="far fa-clock fa-fw text-gray-900 mr-2"></i> Last Updated at: {{ $place->updated_at }}
                    </span>        
                    </div>
                    <div class="p-4 flex items-center text-sm text-gray-600"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-gray-400"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg><span class="ml-2">34 Bewertungen</span></div>
                </a>
                </div>
            @endforeach
                </div>
            </div>
            <!--big cards-->
            <div class="container mx-auto py-5 pb-16">
                <h1 class="text-2xl pb-6 mx-12" style="font-family: 'Nunito', sans-serif;">Dream your next trip</h1>
                <div class="flex justify-between">
                    <div class="h-96 w-96 mx-12 hover:scale-105 duration-500 transform transition cursor-pointer">
                        <div class="absolute bottom-5">
                            <h1 class="text-3xl text-white ml-5" style="font-family: 'Quicksand', sans-serif;">Bandung,
                                <br>Indonesia
                            </h1>
                        </div>
                        <img class="w-full h-96 object-cover rounded"
                            src="https://s3-alpha-sig.figma.com/img/72f0/4146/5f93f37b9ef9941e3ca8314daaf4fd80?Expires=1642377600&Signature=X6BpnHNSRabh6CRzGC3MdlCqRrEZbtBC8djYw6fleeYPIvIdZTmjWcTB-5usvpSjDeftq2UEzOT-XkbIAqK0iZ0ARvBrDTQIejrSw55z5s1pMzEwbmsUfUtpWsKGyEhS-qDdCqibiyUjpd4nnzufcdLv2taWkgFvv1uhIeCVaYkJnLnm1e7CRs4gMXFURPWTLsh~0tvZcww0pOSjYG0MB2RNP1cUhpjQ~nU1NxlajqBPA3GvBU~UeWM7J5wLkeJmhzRXh8cs1f5K8aGGE1jT0Srhv6KfqJszqJqOAlyE4VEBkchFvsEAB0b38BgSaRy~~AoGrkuh1DgpBjHw8HHGWg__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA"
                            alt="bandung">
                    </div>
                    <div class="h-96 w-96 mx-12 hover:scale-105 duration-500 transform transition cursor-pointer">
                        <div class="absolute bottom-5">
                            <h1 class="text-3xl text-white ml-5" style="font-family: 'Quicksand', sans-serif;">Bogor,
                                <br>Indonesia
                            </h1>
                        </div>
                        <img class="w-full h-96 object-cover rounded"
                            src="https://s3-alpha-sig.figma.com/img/7bfb/a07c/73199bf39b5671d3c72b81713ffeeb27?Expires=1642377600&Signature=P5Umzsjj7iWN7PCeCedxzlcKZKmak9kKCQk1VSkTZn4f5UkeSLtdtMPL-hKH1h5LO8zXa8vQq7oRtDJ4rXGEK0duunMC~DXHKMUunrzR9YGdyBUhweT7lhe8aAHJ2Qzy257cy0dO1sS2jm1TUz4yujG7ypKpx7AO4db6yb7c70TE0zxs12YuhCUVirUGyDt6wu~S9IHwbXB3dnyiCn4voEBizBVwfJzQnYF-0X~gGdNiEKfg4sAutZIQye-ntTijFfBSo1hgLZJwrWt6HiQPMWe3xRLntcB7o-B5xkd53s3ElY1jhAj5SUwW3JNE96hbgizHOGEGMjqFT7feEYr8Nw__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA"
                            alt="bogor">
                    </div>
                    <div class="h-96 w-96 mx-12 hover:scale-105 duration-500 transform transition cursor-pointer">
                        <div class="absolute bottom-5">
                            <h1 class="text-3xl text-white ml-7" style="font-family: 'Quicksand', sans-serif;">Bali,
                                <br>Indonesia
                            </h1>
                        </div>
                        <img class="w-full h-96 object-cover rounded"
                            src="https://s3-alpha-sig.figma.com/img/4d1f/15d7/92e2b42ab6f65c282033560a4b3eb046?Expires=1642377600&Signature=SrH8NQP-C35TElajq3HAdp1q-uNv-LCb7w1PLGog~2wwY~K2Kkzq9MjeZkNR3qtg38hRHRFCCRCcdwP-oBwa2dZTtZs4E~KbxPeAygP6ftUa4m0zPlJ-XLBXGodJuoeH~C2ncD6BTuVfT~t8BXwmFRoPYPst0-KYAqiKS~exV2gNESMeJcL3ErShd7lpYKlCEgMNzdBu48gZloUlKQCD-K2IOWw5fWO8tagLGUvxUTnfgXNk-etPWX8dxjN1UhtSkZYuJeu3EJU5EPcRfzZNUvv4jQZxY0DN0F6lPGBi60NplhAlppPFLin~Ek7F3guT8FGh1BBFzM-6UMbFS-RTUg__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA"
                            alt="bali">
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        @include('includes.footer')
    </div>
</body>

</html>