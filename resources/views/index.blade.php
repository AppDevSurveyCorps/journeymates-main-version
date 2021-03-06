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
                        <a href="{{ url('/trending') }}">
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
                        <a href="{{ url($dat ->Categories) }}">
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
                    style="background-image: url(https://s3-alpha-sig.figma.com/img/6d5d/1bc9/bddbce21a89bf98295e7de6582d6b6b4?Expires=1644796800&Signature=fRGTT~XSz2OJcuN-IFuDYwn7Eagze-hXRUdai~YMBI4vwMWDX1jFnGf7aXGAZA11xWg-OQnqDUTG~npjw6oj1~9NLeZj2OEx--9oiNSpwN83wW780HYZClosENIvqsenVD1l1P1RE2sobMRxR4~PvjW5yLbcv4QZ18coKMoLipqAT~m-ZYV7za9db1mSvy6PjN-i9JeTMlCfAZ0orIcqVr3jQOxVUbBhCy8wDtGfBZ~BF7oPM8lm0OXRe8XaG7KDEnDGpKXoW3kGzchtGGSbR1gVlzvp-MUUAK8U6YEGPGgS69SskPvv~IqA64TaunOtiS8wPr8QGoFweOOgQDK3lg__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA)">
                    <form class="flex pt-2 relative mx-auto text-gray-600 " action="/posts" >
                        <input class="border-2 border-gray-300 bg-white h-16 w-full px-10 rounded-full text-xl focus:outline-none mx-12 my-32 leading-[4rem]" type="text" name="search" placeholder="Search..." value="{{ old('search') }}">
                        <button type="submit" value="search" class="absolute right-20 top-40">
                            Search
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

                    @if ($place -> total_place_rating == 0 )
                    <div class="p-4 flex items-center text-sm text-gray-600"></i><i class="far fa-star"> </i><i class="far fa-star"></i> <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>&nbsp;Rating :{{ $place->total_place_rating }}</div>

                    @elseif ($place -> total_place_rating == 1 )
                    <div class="p-4 flex items-center text-sm text-gray-600"><i class="fas fa-star"> </i><i class="far fa-star"></i> <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>&nbsp;Rating :{{ $place->total_place_rating }}</div>

                    @elseif ($place -> total_place_rating == 2 )
                    <div class="p-4 flex items-center text-sm text-gray-600"><i class="fas fa-star"> </i><i class="fas fa-star"></i> <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>&nbsp;Rating :{{ $place->total_place_rating }}</div>

                    @elseif ($place -> total_place_rating == 3 )
                    <div class="p-4 flex items-center text-sm text-gray-600"><i class="fas fa-star"> </i><i class="fas fa-star"></i> <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>&nbsp;Rating :{{ $place->total_place_rating }}</div>

                    @elseif ($place -> total_place_rating == 4 )
                    <div class="p-4 flex items-center text-sm text-gray-600"><i class="fas fa-star"> </i><i class="fas fa-star"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>&nbsp;Rating :{{ $place->total_place_rating }}</div>
                   
                    @elseif ($place -> total_place_rating == 5 )
                    <div class="p-4 flex items-center text-sm text-gray-600"><i class="fas fa-star"> </i><i class="fas fa-star"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>&nbsp;Rating :{{ $place->total_place_rating }}</div>
                    @endif

                </a>
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