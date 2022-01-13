<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmarks - JourneyMates</title>
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
            <div class="container mx-auto pt-48">
                <h1 class="text-2xl text-center" style="font-family: 'Nunito', sans-serif;">Bookmarks</h1>
                <h2 class="text-2xl text-center mt-24" style="font-family: 'Nunito', sans-serif;">Looks like you still
                    don't have any bookmark. Start saving your wishlist destination trip, travel later!</h2>
            </div>
        </div>
        <!--footer-->
        @include('includes.footer')
    </div>
</body>

</html>