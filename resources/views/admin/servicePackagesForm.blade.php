@extends('admin.layouts.layout')
@section('content')
    {{--    // add new trainer modal starts here--}}
    <div id="addTrainerModal" class=" absolute top-0 left-0 z-50 w-screen h-screen bg-[black]/50">
        <div class="w-full h-full  flex justify-center items-center">
            <div class="bg-lightTheme lg:w-[30%] md:w-[50%] sm:w-[70%] w-[90%]  h-[90%] rounded-md relative overflow-x-hidden overflow-y-auto scrollbar-hide" >
                <a href="{{route('servicePackages')}}">
                    <div class="absolute -right-2 -top-2  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                        <i class="fa fa-xmark"></i>
                    </div>
                </a>
                <div class="w-full shadow-lg shadow-[gray] bg-whiteColor rounded-md px-2  h-max py-4">
                    <div class="bg-whiteColor py-2 px-2  border-b-[1px] border-darkText">
                        <span class="text-darkText font-semibold text-2xl">Add Service/Package</span>
                    </div>

                    <div class="flex flex-col p-2">
                        <div class="flex items-end">
                            <img class="h-24" src="{{asset('/assets/images/dashbaord/package.png')}}" alt="">

                            <div class="h-8 w-8 rounded-full bg-darkText flex justify-center items-center relative">
                                <i class="fa fa-edit text-lightTheme"></i>
                                <div class="absolute top-0 left-0 h-full w-full overflow-hidden ">
                                    <input type="file" class="opacity-0">
                                </div>

                            </div>

                        </div>

                        <span class="font-semibold">Only <span class="italic text-darkText">.jpg .png .jpeg</span> allowed</span>
                    </div>


                    <div>
                        <div class="flex flex-col gap-2 mt-3">
                            <label for="name" class="text-darkText font-semibold text-lg">Service/Package Name</label>
                            <input name="name" type="text" class="bg-lightTheme p-2 text-darkText border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                        </div>

                        <div class="flex flex-col gap-2 mt-3">
                            <label for="price" class="text-darkText font-semibold text-lg">Price</label>
                            <input name="price" type="number" class="bg-lightTheme p-2 text-darkText border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                        </div>

                        <div class="flex flex-col gap-2 mt-3">
                            <label for="duration" class="text-darkText font-semibold text-lg">Duration</label>
                            <input name="duration" type="text" class="bg-lightTheme p-2 text-darkText border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                        </div>

                        <div class="flex flex-col gap-2 mt-3">
                            <label for="startDate" class="text-darkText font-semibold text-lg">Start Date</label>
                            <input name="startDate" type="date" class="bg-lightTheme p-2 text-darkText border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                        </div>

                        <div class="flex flex-col gap-2 mt-3">
                            <label for="endDate" class="text-darkText font-semibold text-lg">End Date</label>
                            <input name="endDate" type="date" class="bg-lightTheme p-2 text-darkText border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                        </div>

                        <div class="flex flex-col gap-2 mt-3">
                            <label for="capacity" class="text-darkText font-semibold text-lg">Capacity</label>
                            <input name="capacity" type="number" class="bg-lightTheme p-2 text-darkText border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                        </div>

                        <div class="flex flex-col gap-2 mt-3">
                            <label for="active" class="text-darkText font-semibold text-lg">Active</label>
                            <select name="active" type="text" class="bg-lightTheme text-darkText p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>

                            </select>
                        </div>

                        <div class="flex flex-col gap-2 mt-3">
                            <label for="categories" class="text-darkText font-semibold text-lg">Category</label>
                            <select name="categories" type="text" class="bg-lightTheme text-darkText p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                                <option value="Personal Training">Personal Training</option>
                                <option value="Membership Plan">Membership Plan</option>
                                <option value="Group Fitness Classes">Group Fitness Classes</option>
                                <option value="Specialized Programs">Specialized Programs</option>
                                <option value="Nutrition Services">Nutrition Services</option>
                                <option value="Health and Wellness">Health and Wellness</option>
                                <option value="Sports Facilities">Sports Facilities</option>
                                <option value="Online and Virtual Services">Online and Virtual Services</option>
                                <option value="Senior Fitness Programs">Senior Fitness Programs</option>
                                <option value="Youth Programs">Youth Programs</option>
                                <option value="Special Events and Challenges">Special Events and Challenges</option>
                                <option value="Additional Services">Additional Services</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-2 mt-3">
                            <label for="description" class="text-darkText font-semibold text-lg">Description</label>
                            <textarea name="description" type="text" class="bg-lightTheme p-2 text-darkText border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none " rows="3"></textarea>
                        </div>

                        <div class="w-full flex justify-end mt-4">
                            <button class="px-6 py-2 bg-darkText text-whiteColor font-semibold text-lg rounded-md border-[1px] border-darkText hover:text-darkText hover:bg-whiteColor transition ease-in duration-2000">Sumbit</button>
                        </div>

                    </div>


                </div>
            </div>
        </div>

    </div>
    {{--    // add new trainer modal ends here--}}
@endsection
