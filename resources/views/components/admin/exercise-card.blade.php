<div class="w-full bg-whiteColor shadow-2xl shadow-black rounded-md px-3 pt-12 pb-4 relative">

    <div class="absolute -right-2 -top-2  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
        <i class="fa fa-xmark"></i>
    </div>
    <a href="{{route('exerciseForm')}}">
        <div class="absolute -right-2 top-8  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
            <i class="fa fa-pencil"></i>
        </div>
    </a>

    <div class="flex justify-center flex-col  items-center">
        <span class="text-xl font-semibold text-darkText">{{$exerciseName}}</span>
        <span class="text-[gray]">{{$muscleGroup}} / {{$exerciseCategory}}</span>
    </div>

    <div class="w-full flex justify-center mt-6">
        <div class="h-32 w-32 p-2 rounded-full border-[5px] border-whiteColor border-l-darkText border-r-darkText">
                <img class="rounded-full h-full w-full object-cover" src="{{ $images }}" alt="">
        </div>
    </div>
    <div class="flex text-justify px-3 mt-6 relative">
        <textarea name="" id="" rows="4"  disabled class="overflow-hidden w-full bg-whiteColor text-darkText font-semibol">{{$description}}</textarea>
    </div>

    <div class="carousel w-full overflow-hidden mt-8">

            <div class="mr-2 rounded-md overflow-hidden h-32">
                <a href="{{$images}}" target="_blank">
                    <img class="w-full h-full object-cover" src="{{$images}}" alt="Image 1">
                </a>
            </div>
        <div class="mr-2 rounded-md overflow-hidden h-32">
            <a href="{{$images}}" target="_blank">
                <img class="w-full h-full object-cover" src="{{$images}}" alt="Image 1">
            </a>
        </div>
        <div class="mr-2 rounded-md overflow-hidden h-32">
            <a href="{{$images}}" target="_blank">
                <img class="w-full h-full object-cover" src="{{$images}}" alt="Image 1">
            </a>
        </div>





        {{--                    if exercse contains vides then uncomment this code--}}

        {{--                    <div class="mr-2 rounded-md overflow-hidden h-32">--}}
        {{--                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/4Y2ZdHCOXok?si=-oD_A2LicpwiVl20" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>--}}
        {{--                    </div>--}}



    </div>

</div>
