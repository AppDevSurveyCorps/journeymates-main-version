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
      
     

        <form action='/add_category' method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            
            @csrf
          <label for="Place Name" class="block text-xs font-semibold text-gray-600 uppercase">Category</label>
          <input id="Categories" type="Categories" name="Categories"  autocomplete="Categories" class="block w-full p-3 mt-2  bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
          
          <label for="Icon" class="block text-xs font-semibold text-gray-600 uppercase">Icon</label>
          <input id="Icon" type="text" name="Icon"  autocomplete="Icon" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
          
          
          <input type="submit" value="Add Category" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
            
          
        </form>
          
 
     
    </div>
  </div>