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
      
     
        @foreach ($place as $p) 
        <form action="{{ url('admin_update_place') }}"  method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            
            @csrf
            {{-- @method('PUT') --}}
            <input type="hidden" name="id" value="{{ $p->place_id }}"> <br/>
            <h1 class="text-xl font-semibold">Edit Place</h1>
          <label for="Place Name" class="block text-xs font-semibold text-gray-600 uppercase">Place Name</label>
          <input id="place_name" type="place_name" name="place_name" value="{{ $p->place_name }}" autocomplete="place_name" class="block w-full p-3 mt-2  bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
          
          <label for="Place Description" class="block text-xs font-semibold text-gray-600 uppercase">Place Description</label>
          <input id="place_description" type="place_description" name="place_description" value="{{ $p->place_description }}" autocomplete="place_description" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
          
          <label for="Rating" class="block text-xs font-semibold text-gray-600 uppercase">Place Rating</label>
          <input id="place_ratings" type="number" name="place_ratings" value="{{ $p->place_ratings }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />

          <label for="Category" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Category</label>
            
            <select id="intCatId" name="intCatId">
              <option value="1">Hotel</option>
              <option value="2">Restaurant</option>
              <option value="3">Landmark</option>
              <option value="5">City</option>
            </select>
          
          <label for="Place Image" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Place Image</label>
         
          <input id="place_image" type="file" name="place_image"  autocomplete="place_image" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required onchange="previewImage()" />
          @if ($p->place_image)
                                                            
                <img src="{{ asset('storage/images/' . $p->place_image) }}" width="140px" height="140px" >
          @endif
          <input type="submit" value="Update Place" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
          
            
          
        </form>
          
 
    @endforeach
    </div>
  </div>