<header class="sticky top-0 z-40 shadow-sm shadow-darkText">
    <div class="w-full h-16 bg-darkTheme flex justify-between lg:pl-72 md:pl-72 pl-0 pr-6 py-2">
        <div class="flex items-center gap-6 px-6">

            <div class="text-lightText lg:hidden md:hidden block cursor-pointer"
                 onclick="
                            document.getElementById('sideBar').classList.toggle('hidden');

                 "
            >
                <i class="fa fa-bars "></i>
            </div>


            <div class="">
                <span class="font-semibold text-lg text-lightText">Welcome, Admin</span>
            </div>
        </div>



        <div class="flex h-full items-center gap-4">
            <div class="bg-lightTheme text-darkText hover:bg-darkText hover:text-lightTheme border-[1px] border-lightTheme transition ease-in duration-2000 h-12 w-12 rounded-full  flex items-center justify-center relative">
                <i class="fa fa-bell"></i>
                <div class="bg-[green] h-3 w-3 rounded-full absolute top-0 right-0">

                </div>
            </div>
            <div class="bg-lightTheme text-darkText hover:bg-darkText hover:text-lightTheme border-[1px] border-lightTheme transition ease-in duration-2000 h-12 w-12 rounded-full  flex items-center justify-center">
                <i class="fa fa-user"></i>
            </div>
        </div>
    </div>
</header>






<sidebar  class="lg:w-72 md:w-72 w-full h-screen overflow-y-auto bg-darkTheme absolute left-0 top-0 lg:flex md:flex hidden flex-col z-50 "  id="sideBar">
    <div class="w-full flex lg:justify-center md:justify-center justify-start relative">
        <div class="lg:h-24 md:h-24 h-20 w-max p-2">
            <img class="h-full w-full object-cover" src="{{asset('/assets/images/logo/logo.png')}}" alt="">
        </div>

        <div class="text-lightText absolute right-4 top-6 lg:hidden md:hidden block"
             onclick="
                            document.getElementById('sideBar').classList.toggle('hidden');
                 "
        >
            <i class="fa fa-xmark text-xl"></i>
        </div>
    </div>
    <div class="w-full h-max flex flex-col gap-4 mt-8">
                    <a href="{{ route('admin') }}">
                        <div class="{{ Route::is('admin') ? 'bg-lightTheme text-darkText' : 'bg-darkTheme' }} hover:text-darkText hover:bg-lightTheme text-lightText ml-6 rounded-l-lg rounded-r-sm py-3 px-2 flex gap-4 items-center">
                            <i class="fa fa-dashboard"></i>
                            <span class="font-semibold text-lg">Dashboard</span>
                        </div>
                    </a>
                    <a href="{{ route('users') }}">
                        <div class="{{ Route::is('users') ? 'bg-lightTheme text-darkText' : 'bg-darkTheme' }} hover:text-darkText hover:bg-lightTheme text-lightText ml-6 rounded-l-lg rounded-r-sm py-3 px-2 flex gap-4 items-center">
                            <i class="fa fa-user"></i>
                            <span class="font-semibold text-lg">Users</span>
                        </div>
                    </a>
                    <a href="{{route('trainers')}}">
                        <div class="{{ Route::is('trainers') ? 'bg-lightTheme text-darkText' : 'bg-darkTheme' }} hover:text-darkText hover:bg-lightTheme text-lightText rounded-l-lg rounded-r-sm py-3 px-2 ml-6 flex gap-4 items-center">
                            <i class="fa-solid fa-certificate"></i>
                            <span class="font-semibold text-lg">Trainers</span>
                        </div>
                    </a>
                    <a href="{{route('payments')}}">
                        <div class="{{ Route::is('payments') ? 'bg-lightTheme text-darkText' : 'bg-darkTheme' }} hover:text-darkText hover:bg-lightTheme text-lightText rounded-l-lg rounded-r-sm py-3 px-2 ml-6 flex gap-4 items-center">
                            <i class="fa-solid fa-credit-card"></i>
                            <span class="font-semibold text-lg">Payments</span>
                        </div>
                    </a>
                        <a href="{{route('gallery')}}">
                            <div class="{{ Route::is('gallery') ? 'bg-lightTheme text-darkText' : 'bg-darkTheme' }} hover:text-darkText hover:bg-lightTheme text-lightText rounded-l-lg rounded-r-sm py-3 px-2 ml-6 flex gap-4 items-center">
                                <i class="fa-solid fa-video"></i>
                                <span class="font-semibold text-lg">Gallery</span>
                            </div>
                        </a>
                    <a href="{{route('exercises')}}">
                        <div class="{{ Route::is('exercises') ? 'bg-lightTheme text-darkText' : 'bg-darkTheme' }} hover:text-darkText hover:bg-lightTheme text-lightText rounded-l-lg rounded-r-sm py-3 px-2 ml-6 flex gap-4 items-center">
                            <i class="fa-solid fa-video"></i>
                            <span class="font-semibold text-lg">Exercises</span>
                        </div>
                    </a>

                    <a href="{{route('workouts')}}">
                        <div class="{{ Route::is('workouts') ? 'bg-lightTheme text-darkText' : 'bg-darkTheme' }} hover:text-darkText hover:bg-lightTheme text-lightText rounded-l-lg rounded-r-sm py-3 px-2 ml-6 flex gap-4 items-center">
                            <i class="fa-solid fa-video"></i>
                            <span class="font-semibold text-lg">Workouts</span>
                        </div>
                    </a>
                    <a href="{{route('logout')}}">
                        <div class="{{ Route::is('logout') ? 'bg-lightTheme text-darkText' : 'bg-darkTheme' }} hover:text-darkText hover:bg-lightTheme text-lightText rounded-l-lg rounded-r-sm py-3 px-2 ml-6 flex gap-4 items-center">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span class="font-semibold text-lg">LogOut</span>
                        </div>
                    </a>
    </div>

</sidebar>
