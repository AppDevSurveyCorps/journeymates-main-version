    <div class="w-full fixed bg-white z-10">
        <div class="container mx-auto">
            <nav class="bg-white px-2 sm:px-4 py-4 mx-12">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    <a href="{{ url('index') }}"class="flex">
                        <h1 class="text-2xl " style="font-family: 'Montserrat', sans-serif;">JourneyMates</h1>
                    </a>
                    <button data-collapse-toggle="mobile-menu" type="button"
                        class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium items-center">
                            <li>
                                <form class="pt-2 relative mx-auto text-gray-600">
                                    <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                                      type="search" name="search" placeholder="Search">
                                    <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                                      <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                        width="512px" height="512px">
                                        <path
                                          d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                      </svg>
                                    </button>
                                </form>
                            </li>
                            <li>
                                <a href="{{ url('reviewhome') }}"
                                    class="block py-2 pr-4 pl-3 text-gray-400 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">Review</a>
                            </li>
                            <li>
                                <a href="{{ url('bookmarks') }}"
                                    class="block py-2 pr-4 pl-3 text-gray-400 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">Bookmarks</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pr-4 pl-3 text-gray-400 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">Alert</a>
                            </li>
                            <?php if(Auth::check()){ ?>
                            <li>
                                <div class="relative">
                                    <!-- Dropdown toggle button -->
                                    <img onclick="dropdown()" class="h-12 w-12 dropbtn cursor-pointer rounded-full object-cover" src="https://i.pinimg.com/474x/64/b2/95/64b295c8c9df6a71bb8e72adcb1bb6cd.jpg" alt="">
                                    <!-- Dropdown list -->
                                    <div id="myDropdown" class="absolute right-0 py-2 mt-2 bg-white bg-gray-100 rounded-md shadow-xl w-44 dropdown-content hidden z-50">
                                        <h1 class="block px-4 py-2 text-lg text-gray-300 text-gray-700">Hi, {{ auth()->user()->fname }}</h1><hr>
                                        <a href="{{ url('profile') }}" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                            My Profile
                                        </a>
                                        <a href="{{ url('signout') }}" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                            Sign Out
                                        </a>
                                    </div>
                                </div>
                                <script>
                                    function dropdown() {
                                        document.getElementById("myDropdown").classList.toggle("hidden");
                                    }
                                    window.onclick = function(event) {
                                        if (!event.target.matches('.dropbtn')) {
                                                var dropdowns = document.getElementsByClassName("dropdown-content");
                                                var i;
                                                for (i = 0; i < dropdowns.length; i++) {
                                                    var openDropdown = dropdowns[i];
                                                    if (!openDropdown.classList.contains('hidden')) {
                                                        openDropdown.classList.add('hidden');
                                                    }
                                                }
                                            }
                                        }
                                </script>
                            </li>    
                            <?php } else{ ?>
                            <li>
                                <a href="{{ url('login') }}"
                                    class="block py-2 pr-4 pl-3 text-gray-400 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent">Log
                                    In</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>