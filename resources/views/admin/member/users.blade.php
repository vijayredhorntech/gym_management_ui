@extends('admin.layouts.layout')
@section('content')
    <section class="h-full w-full overflow-y-auto lg:pl-72 md:pl-72 pl-0 py-2 bg-lightTheme">
        <div class="lg:px-6 md:px-6 sm:px-4 px-2">
            <div class="bg-whiteColor py-4 px-2 rounded-lg flex justify-between">
                <span class="text-darkText font-semibold text-2xl">Users</span>
                <a href="{{route('member.create')}}" class="bg-darkText text-whiteColor font-semibold border-[1px] border-darkText px-6 py-1 rounded-md hover:bg-whiteColor hover:text-darkText transition ease-in duration-2000">Add New</a>

            </div>
        </div>
        <div class="lg:px-6 md:px-6 sm:px-4 px-2 mt-4 pb-20 flex flex-col  gap-4">
            @foreach($members as $member)
                <div class="p-3 bg-whiteColor w-full h-max rounded-md flex lg:flex-row md:flex-col sm:flex-row flex-col justify-between gap-4 relative">
                    <div class="flex items-center gap-4">
                           <div class="h-16 w-16 p-1 rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">
                               <img class=" rounded-full h-full w-full object-cover" src="{{ $member->media ? asset('storage/'. $member->media) : 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" alt="">
                           </div>
                           <div class="w-max h-max ">
                               <span class="text-darkTheme font-semibold text-xl"> {{$member->name}} </span>
                           </div>
                       </div>


                    <div class="flex items-center gap-4 justify-end  lg:pr-16 md:pr-16 pr-2">


                        <div class="flex gap-4">
                            <div class="flex flex-col justify-center items-center">
                                <span class="font-semibold text-darkText text-lg">3 Months</span>
                                <span class="italic text-sm text-lightText"> {{$member->plan}}</span>
                            </div>

                            <div class="flex flex-col justify-center items-center">
                                <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">{{$member->payments()->latest('created_at')->first()?->status}}</span>
                                <span class="italic text-sm text-lightText"> Payment</span>
                            </div>
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <div class="flex gap-2">
                                <div class="h-8 w-8 p-1 flex justify-center items-center rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">
                                    <span class="font-semibold text-darkText text-lg">5</span>
                                </div>
                            </div>
                            <span class="italic text-sm text-lightText"> Workout Days</span>
                        </div>

                    </div>


                    <a href="{{route('member.delete', ['member' => $member->id])}}">
                    <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                        <i class="fa fa-xmark"></i>
                    </div>
                    </a>
                    <a href="{{route('member.edit', ['member' => $member->id])}}" class="absolute right-0 top-10">
                        <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </a>
                </div>
            @endforeach
                <div class="p-3 bg-whiteColor w-full h-max rounded-md flex lg:flex-row md:flex-col sm:flex-row flex-col justify-between gap-4 relative">
                    <div class="flex items-center gap-4">
                        <div class="h-16 w-16 p-1 rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">
                            <img class=" rounded-full h-full w-full object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        </div>
                        <div class="w-max h-max ">
                            <span class="text-darkTheme font-semibold text-xl"> Jonson Shekh </span>
                        </div>
                    </div>


                    <div class="flex items-center gap-4 justify-end  lg:pr-16 md:pr-16 pr-2">
                        <div class="flex gap-4">
                            <div class="flex flex-col justify-center items-center">
                                <span class="font-semibold text-darkText text-lg">3 Months</span>
                                <span class="italic text-sm text-lightText"> Plan</span>
                            </div>

                            <div class="flex flex-col justify-center items-center">
                                <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">Done</span>
                                <span class="italic text-sm text-lightText"> Payment</span>
                            </div>
                        </div>

                        <div class="flex flex-col justify-center items-center">
                            <div class="flex gap-2">
                                <div class="h-8 w-8 p-1 flex justify-center items-center rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">
                                    <span class="font-semibold text-darkText text-lg">5</span>
                                </div>
                            </div>
                            <span class="italic text-sm text-lightText"> Workout Days</span>
                        </div>
                    </div>
                    <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                        <i class="fa fa-xmark"></i>
                    </div>
                    <a href="{{route('member.create')}}" class="absolute right-0 top-10">
                        <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </a>
                </div>
{{--                <div class="p-3 bg-whiteColor w-full h-max rounded-md flex lg:flex-row md:flex-col sm:flex-row flex-col justify-between gap-4 relative">--}}
{{--                    <div class="flex items-center gap-4">--}}
{{--                        <div class="h-16 w-16 p-1 rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">--}}
{{--                            <img class=" rounded-full h-full w-full object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="w-max h-max ">--}}
{{--                            <span class="text-darkTheme font-semibold text-xl"> Jonson Shekh </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="flex items-center gap-4 justify-end  lg:pr-16 md:pr-16 pr-2">--}}


{{--                        <div class="flex gap-4">--}}
{{--                            <div class="flex flex-col justify-center items-center">--}}
{{--                                <span class="font-semibold text-darkText text-lg">3 Months</span>--}}
{{--                                <span class="italic text-sm text-lightText"> Plan</span>--}}
{{--                            </div>--}}

{{--                            <div class="flex flex-col justify-center items-center">--}}
{{--                                <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">Done</span>--}}
{{--                                <span class="italic text-sm text-lightText"> Payment</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col justify-center items-center">--}}
{{--                            <div class="flex gap-2">--}}
{{--                                <div class="h-8 w-8 p-1 flex justify-center items-center rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">--}}
{{--                                    <span class="font-semibold text-darkText text-lg">5</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="italic text-sm text-lightText"> Workout Days</span>--}}
{{--                        </div>--}}






{{--                    </div>--}}



{{--                    <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                        <i class="fa fa-xmark"></i>--}}
{{--                    </div>--}}


{{--                    <a href="{{route('member.create')}}" class="absolute right-0 top-10">--}}
{{--                        <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                            <i class="fa fa-pencil"></i>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="p-3 bg-whiteColor w-full h-max rounded-md flex lg:flex-row md:flex-col sm:flex-row flex-col justify-between gap-4 relative">--}}
{{--                    <div class="flex items-center gap-4">--}}
{{--                        <div class="h-16 w-16 p-1 rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">--}}
{{--                            <img class=" rounded-full h-full w-full object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="w-max h-max ">--}}
{{--                            <span class="text-darkTheme font-semibold text-xl"> Jonson Shekh </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="flex items-center gap-4 justify-end  lg:pr-16 md:pr-16 pr-2">--}}


{{--                        <div class="flex gap-4">--}}
{{--                            <div class="flex flex-col justify-center items-center">--}}
{{--                                <span class="font-semibold text-darkText text-lg">3 Months</span>--}}
{{--                                <span class="italic text-sm text-lightText"> Plan</span>--}}
{{--                            </div>--}}

{{--                            <div class="flex flex-col justify-center items-center">--}}
{{--                                <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">Done</span>--}}
{{--                                <span class="italic text-sm text-lightText"> Payment</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col justify-center items-center">--}}
{{--                            <div class="flex gap-2">--}}
{{--                                <div class="h-8 w-8 p-1 flex justify-center items-center rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">--}}
{{--                                    <span class="font-semibold text-darkText text-lg">5</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="italic text-sm text-lightText"> Workout Days</span>--}}
{{--                        </div>--}}






{{--                    </div>--}}



{{--                    <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                        <i class="fa fa-xmark"></i>--}}
{{--                    </div>--}}


{{--                    <a href="{{route('member.create')}}" class="absolute right-0 top-10">--}}
{{--                        <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                            <i class="fa fa-pencil"></i>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="p-3 bg-whiteColor w-full h-max rounded-md flex lg:flex-row md:flex-col sm:flex-row flex-col justify-between gap-4 relative">--}}
{{--                    <div class="flex items-center gap-4">--}}
{{--                        <div class="h-16 w-16 p-1 rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">--}}
{{--                            <img class=" rounded-full h-full w-full object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="w-max h-max ">--}}
{{--                            <span class="text-darkTheme font-semibold text-xl"> Jonson Shekh </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="flex items-center gap-4 justify-end  lg:pr-16 md:pr-16 pr-2">--}}


{{--                        <div class="flex gap-4">--}}
{{--                            <div class="flex flex-col justify-center items-center">--}}
{{--                                <span class="font-semibold text-darkText text-lg">3 Months</span>--}}
{{--                                <span class="italic text-sm text-lightText"> Plan</span>--}}
{{--                            </div>--}}

{{--                            <div class="flex flex-col justify-center items-center">--}}
{{--                                <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">Done</span>--}}
{{--                                <span class="italic text-sm text-lightText"> Payment</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col justify-center items-center">--}}
{{--                            <div class="flex gap-2">--}}
{{--                                <div class="h-8 w-8 p-1 flex justify-center items-center rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">--}}
{{--                                    <span class="font-semibold text-darkText text-lg">5</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="italic text-sm text-lightText"> Workout Days</span>--}}
{{--                        </div>--}}






{{--                    </div>--}}



{{--                    <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                        <i class="fa fa-xmark"></i>--}}
{{--                    </div>--}}


{{--                    <a href="{{route('member.create')}}" class="absolute right-0 top-10">--}}
{{--                        <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                            <i class="fa fa-pencil"></i>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="p-3 bg-whiteColor w-full h-max rounded-md flex lg:flex-row md:flex-col sm:flex-row flex-col justify-between gap-4 relative">--}}
{{--                    <div class="flex items-center gap-4">--}}
{{--                        <div class="h-16 w-16 p-1 rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">--}}
{{--                            <img class=" rounded-full h-full w-full object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="w-max h-max ">--}}
{{--                            <span class="text-darkTheme font-semibold text-xl"> Jonson Shekh </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="flex items-center gap-4 justify-end  lg:pr-16 md:pr-16 pr-2">--}}


{{--                        <div class="flex gap-4">--}}
{{--                            <div class="flex flex-col justify-center items-center">--}}
{{--                                <span class="font-semibold text-darkText text-lg">3 Months</span>--}}
{{--                                <span class="italic text-sm text-lightText"> Plan</span>--}}
{{--                            </div>--}}

{{--                            <div class="flex flex-col justify-center items-center">--}}
{{--                                <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">Done</span>--}}
{{--                                <span class="italic text-sm text-lightText"> Payment</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col justify-center items-center">--}}
{{--                            <div class="flex gap-2">--}}
{{--                                <div class="h-8 w-8 p-1 flex justify-center items-center rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">--}}
{{--                                    <span class="font-semibold text-darkText text-lg">5</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="italic text-sm text-lightText"> Workout Days</span>--}}
{{--                        </div>--}}






{{--                    </div>--}}



{{--                    <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                        <i class="fa fa-xmark"></i>--}}
{{--                    </div>--}}


{{--                    <a href="{{route('member.create')}}" class="absolute right-0 top-10">--}}
{{--                        <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                            <i class="fa fa-pencil"></i>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="p-3 bg-whiteColor w-full h-max rounded-md flex lg:flex-row md:flex-col sm:flex-row flex-col justify-between gap-4 relative">--}}
{{--                    <div class="flex items-center gap-4">--}}
{{--                        <div class="h-16 w-16 p-1 rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">--}}
{{--                            <img class=" rounded-full h-full w-full object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="w-max h-max ">--}}
{{--                            <span class="text-darkTheme font-semibold text-xl"> Jonson Shekh </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="flex items-center gap-4 justify-end  lg:pr-16 md:pr-16 pr-2">--}}


{{--                        <div class="flex gap-4">--}}
{{--                            <div class="flex flex-col justify-center items-center">--}}
{{--                                <span class="font-semibold text-darkText text-lg">3 Months</span>--}}
{{--                                <span class="italic text-sm text-lightText"> Plan</span>--}}
{{--                            </div>--}}

{{--                            <div class="flex flex-col justify-center items-center">--}}
{{--                                <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">Done</span>--}}
{{--                                <span class="italic text-sm text-lightText"> Payment</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col justify-center items-center">--}}
{{--                            <div class="flex gap-2">--}}
{{--                                <div class="h-8 w-8 p-1 flex justify-center items-center rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">--}}
{{--                                    <span class="font-semibold text-darkText text-lg">5</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="italic text-sm text-lightText"> Workout Days</span>--}}
{{--                        </div>--}}






{{--                    </div>--}}



{{--                    <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                        <i class="fa fa-xmark"></i>--}}
{{--                    </div>--}}


{{--                    <a href="{{route('member.create')}}" class="absolute right-0 top-10">--}}
{{--                        <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                            <i class="fa fa-pencil"></i>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="p-3 bg-whiteColor w-full h-max rounded-md flex lg:flex-row md:flex-col sm:flex-row flex-col justify-between gap-4 relative">--}}
{{--                    <div class="flex items-center gap-4">--}}
{{--                        <div class="h-16 w-16 p-1 rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">--}}
{{--                            <img class=" rounded-full h-full w-full object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="w-max h-max ">--}}
{{--                            <span class="text-darkTheme font-semibold text-xl"> Jonson Shekh </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="flex items-center gap-4 justify-end  lg:pr-16 md:pr-16 pr-2">--}}


{{--                        <div class="flex gap-4">--}}
{{--                            <div class="flex flex-col justify-center items-center">--}}
{{--                                <span class="font-semibold text-darkText text-lg">3 Months</span>--}}
{{--                                <span class="italic text-sm text-lightText"> Plan</span>--}}
{{--                            </div>--}}

{{--                            <div class="flex flex-col justify-center items-center">--}}
{{--                                <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">Done</span>--}}
{{--                                <span class="italic text-sm text-lightText"> Payment</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col justify-center items-center">--}}
{{--                            <div class="flex gap-2">--}}
{{--                                <div class="h-8 w-8 p-1 flex justify-center items-center rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">--}}
{{--                                    <span class="font-semibold text-darkText text-lg">5</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="italic text-sm text-lightText"> Workout Days</span>--}}
{{--                        </div>--}}






{{--                    </div>--}}



{{--                    <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                        <i class="fa fa-xmark"></i>--}}
{{--                    </div>--}}


{{--                    <a href="{{route('member.create')}}" class="absolute right-0 top-10">--}}
{{--                        <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                            <i class="fa fa-pencil"></i>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="p-3 bg-whiteColor w-full h-max rounded-md flex lg:flex-row md:flex-col sm:flex-row flex-col justify-between gap-4 relative">--}}
{{--                    <div class="flex items-center gap-4">--}}
{{--                        <div class="h-16 w-16 p-1 rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">--}}
{{--                            <img class=" rounded-full h-full w-full object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="w-max h-max ">--}}
{{--                            <span class="text-darkTheme font-semibold text-xl"> Jonson Shekh </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="flex items-center gap-4 justify-end  lg:pr-16 md:pr-16 pr-2">--}}


{{--                        <div class="flex gap-4">--}}
{{--                            <div class="flex flex-col justify-center items-center">--}}
{{--                                <span class="font-semibold text-darkText text-lg">3 Months</span>--}}
{{--                                <span class="italic text-sm text-lightText"> Plan</span>--}}
{{--                            </div>--}}

{{--                            <div class="flex flex-col justify-center items-center">--}}
{{--                                <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">Done</span>--}}
{{--                                <span class="italic text-sm text-lightText"> Payment</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="flex flex-col justify-center items-center">--}}
{{--                            <div class="flex gap-2">--}}
{{--                                <div class="h-8 w-8 p-1 flex justify-center items-center rounded-full border-[2px] border-[gray] border-t-lightText border-r-lightText border-b-lightText">--}}
{{--                                    <span class="font-semibold text-darkText text-lg">5</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="italic text-sm text-lightText"> Workout Days</span>--}}
{{--                        </div>--}}






{{--                    </div>--}}



{{--                    <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                        <i class="fa fa-xmark"></i>--}}
{{--                    </div>--}}


{{--                    <a href="{{route('member.create')}}" class="absolute right-0 top-10">--}}
{{--                        <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                            <i class="fa fa-pencil"></i>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
        </div>

    </section>
@endsection
