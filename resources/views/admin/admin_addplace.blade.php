<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User - JourneyMates</title>
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
</head>
<!-- component -->
<div class="grid min-h-screen place-items-center">
    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
      
     

        <form action='/add_place' method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            
            @csrf
          <label for="Place Name" class="block text-xs font-semibold text-gray-600 uppercase">Place Name</label>
          <input id="place_name" type="place_name" name="place_name"  autocomplete="place_name" class="block w-full p-3 mt-2  bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
          <label for="Place Description" class="block text-xs font-semibold text-gray-600 uppercase">Place Description</label>
          <input id="place_description" type="place_description" name="place_description"  autocomplete="place_description" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
          <label for="Rating" class="block text-xs font-semibold text-gray-600 uppercase">Rating</label>
          <input id="place_ratings" type="number" name="place_ratings"  class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
          <label for="Place Image" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>
         
          <input id="place_image" type="file" name="place_image"  autocomplete="place_image" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required onchange="previewImage()" />
          <img class="img-preview img-fluid">
          <input type="submit" value="Add" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
            
          
        </form>
          
 
        <script>

          fucntion previewImage(){

            const image = document.querySelector('#place_image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {

              imgPreview.src = oFREvent.target.result;

            }


          }
          
        </script>
     
    </div>
  </div>