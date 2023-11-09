<div class="w-full bg-whiteColor shadow-2xl shadow-black rounded-md px-3 py-12 relative">
    <a href="{{route('trainer.delete', ['trainer' => $id])}}">
    <div class="absolute -right-2 -top-2  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
        <i class="fa fa-xmark"></i>
    </div>
    </a>


    <a href="{{route('trainer.edit', ['trainer' => $id])}}">
        <div class="absolute -right-2 top-8  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
            <i class="fa fa-pencil"></i>
        </div>
    </a>


    <div class="flex justify-center flex-col  items-center">
        <span class="text-xl font-semibold text-darkText">{{$designation}}</span>
        <span class="text-[gray]">{{$name}}</span>
    </div>

    <div class="flex justify-center mt-3">
        @for($i=1; $i<$stars; $i++)
            <i class="fa-solid fa-star text-lightText"></i>
        @endfor
        <i class="fa-solid fa-star text-lightText"></i>
    </div>

    <div class="w-full flex justify-center mt-6">
        <div class="h-32 w-32 p-2 rounded-full border-[10px] border-[gray] border-t-darkText border-r-darkText border-b-darkText">
            <img class=" rounded-full h-full w-full object-cover" src="{{$image}}" alt="">
        </div>
    </div>

    <div class="flex text-center px-3 mt-6">
        <p class="font-semibold text-lg text-darkText">{{$description}}</p>
    </div>

    <div class="w-full mt-4 flex gap-4 justify-center">
          <div class="bg-whiteColor rounded-full text-darkText hover:text-lightText h-12 w-12 flex justify-center items-center shadow-lg shadow-[gray] transition ease-in duration-2000">
              <i class="fa-brands fa-facebook  text-xl"></i>
          </div>
        <div class="bg-whiteColor rounded-full text-darkText hover:text-lightText h-12 w-12 flex justify-center items-center shadow-lg shadow-[gray] transition ease-in duration-2000">
            <i class="fa-brands fa-instagram  text-xl"></i>
        </div>
        <div class="bg-whiteColor rounded-full text-darkText hover:text-lightText h-12 w-12 flex justify-center items-center shadow-lg shadow-[gray] transition ease-in duration-2000">
            <i class="fa-brands fa-x-twitter text-xl"></i>
        </div>
        <div class="bg-whiteColor rounded-full text-darkText hover:text-lightText h-12 w-12 flex justify-center items-center shadow-lg shadow-[gray] transition ease-in duration-2000">
            <i class="fa-brands fa-youtube text-xl"></i>
        </div>
    </div>

</div>
