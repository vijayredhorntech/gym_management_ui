<div class="w-full bg-whiteColor shadow-2xl shadow-black rounded-md pb-4 relative overflow-hidden">

    <div class="absolute right-0 top-0   bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
        <i class="fa fa-xmark"></i>
    </div>
    <a href="{{route('servicePackagesForm')}}">
        <div class="absolute right-0 top-10  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
            <i class="fa fa-pencil"></i>
        </div>
    </a>

    <div class="h-6 w-24 absolute top-2 -left-6 @if($active==='yes') bg-[green] @else bg-[red] @endif -rotate-45 shadow-md shadow-[gray] flex justify-center text-whiteColor font-semibold">
        @if($active==='yes') <span>Active</span>@else <span>NaN</span> @endif

    </div>


    <div class="w-full h-[150px]">
        <img class="h-full w-full object-cover" src="{{$image}}" alt="">
    </div>


    <div class="flex justify-center flex-col mt-4 px-3">
        <span class="text-xl font-semibold text-darkText">{{$packageName}}</span>
    </div>

    <div class="flex justify-center flex-col mt-2 px-3">
        <span class="text-[gray]">{{$category}} ({{$capacity}})</span>
    </div>


    <div class="flex justify-between mt-2 px-3">
        <span class="text-[green] font-semibold">{{$startDate}}</span>
        <span class="text-darkText italic font-bold  text-sm">---</span>
        <span class="text-lightText font-semibold">{{$endDate}}</span>
    </div>


    <div class="flex justify-center mt-4 px-3 bg-darkText py-4">
        <span class="text-3xl font-semibold text-lightTheme">{{$price}}</span>
    </div>


    <div class="flex text-justify px-3 mt-2 relative flex-col">
        <div class="flex justify-center flex-col">
            <span class="text-[green] font-semibold text-xl">Details.....</span>
        </div>
        <textarea name="" id="" rows="3"  disabled class="mt-2 overflow-hidden w-full bg-whiteColor text-darkText font-semibol">{{$description}}</textarea>
    </div>


</div>
