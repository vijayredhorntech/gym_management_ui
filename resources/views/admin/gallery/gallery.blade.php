@extends('admin.layouts.layout')
@section('content')
    <section class="h-full w-full overflow-y-auto lg:pl-72 md:pl-72 pl-0 py-6 bg-lightTheme">
        <div class="lg:px-6 md:px-6 sm:px-4 px-2 mt-20">
            <div class="bg-whiteColor py-4 px-2 rounded-lg flex justify-between">
                <span class="text-darkText font-semibold text-2xl">Gallery</span>
                <a href="{{route('gallery.create')}}" class="bg-darkText text-whiteColor font-semibold border-[1px] border-darkText px-6 py-1 rounded-md hover:bg-whiteColor hover:text-darkText transition ease-in duration-2000">Add New</a>

            </div>
        </div>

        {{--        list of trainers are visible here--}}
        <div class="lg:px-6 md:px-6 sm:px-4 px-2 grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-3 grid-cols-1  gap-[20px] mt-4 pb-20">

            @foreach($galleries as $gallery)
                @if($gallery->media)
                    <div class="w-full bg-whiteColor shadow-2xl shadow-black rounded-md p-3 relative">
                        <a href="{{route('gallery.delete', ['gallery' => $gallery->id])}}">
                            <div class="absolute -right-2 -top-2  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                                <i class="fa fa-xmark"></i>
                            </div>
                        </a>
                        <a href="{{asset('storage/'. $gallery->media)}}" target="blank">
                            <div class="w-full h-[300px] flex justify-center">
                                <img class="rounded-md h-full w-full object-cover" src="{{asset('storage/'. $gallery->media)}}" alt="">
                            </div>
                        </a>
                    </div>
                @else
                    <div class="w-full bg-whiteColor shadow-2xl shadow-black rounded-md p-3 relative">
                        <a href="{{route('gallery.delete', ['gallery' => $gallery->id])}}">
                            <div class="absolute -right-2 -top-2  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                                <i class="fa fa-xmark"></i>
                            </div>
                        </a>
                        <a href="{{$gallery->link}}" >
                            <div class="w-full h-[300px] flex justify-center">
                                <iframe class="w-full h-full" src="{{$gallery->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
{{--            <div class="w-full bg-whiteColor shadow-2xl shadow-black rounded-md p-3 relative">--}}
{{--                <div class="absolute -right-2 -top-2  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                    <i class="fa fa-xmark"></i>--}}
{{--                </div>--}}
{{--                <a href="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?q=80&w=1975&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" target="_blank">--}}
{{--                    <div class="w-full h-[300px] flex justify-center">--}}
{{--                        <img class="rounded-md h-full w-full object-cover" src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?q=80&w=1975&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="w-full bg-whiteColor shadow-2xl shadow-black rounded-md p-3 relative">--}}
{{--                <div class="absolute -right-2 -top-2  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                    <i class="fa fa-xmark"></i>--}}
{{--                </div>--}}
{{--                <a href="https://images.unsplash.com/photo-1561214078-f3247647fc5e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" target="_blank">--}}
{{--                    <div class="w-full h-[300px] flex justify-center">--}}
{{--                        <img class="rounded-md h-full w-full object-cover" src="https://images.unsplash.com/photo-1561214078-f3247647fc5e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="w-full bg-whiteColor shadow-2xl shadow-black rounded-md p-3 relative">--}}
{{--                <div class="absolute -right-2 -top-2  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                    <i class="fa fa-xmark"></i>--}}
{{--                </div>--}}
{{--                <a href="" target="_blank">--}}
{{--                    <div class="w-full h-[300px] flex justify-center">--}}
{{--                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/ruX4Le0kBng?si=92sZGA9BXAOWTTsw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="w-full bg-whiteColor shadow-2xl shadow-black rounded-md p-3 relative">--}}
{{--                <div class="absolute -right-2 -top-2  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                    <i class="fa fa-xmark"></i>--}}
{{--                </div>--}}
{{--                <a href="" target="_blank">--}}
{{--                    <div class="w-full h-[300px] flex justify-center">--}}
{{--                        <iframe class="w-full h-full"  src="https://www.youtube.com/embed/0kcbWGzSt0A?si=Za40tqRxGrCfvt7f" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </a>--}}



{{--            </div>--}}

{{--            <div class="w-full bg-whiteColor shadow-2xl shadow-black rounded-md p-3 relative">--}}
{{--                <div class="absolute -right-2 -top-2  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                    <i class="fa fa-xmark"></i>--}}
{{--                </div>--}}
{{--                <a href="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" target="_blank">--}}
{{--                    <div class="w-full h-[300px] flex justify-center">--}}
{{--                        <img class="rounded-md h-full w-full object-cover" src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">--}}
{{--                    </div>--}}
{{--                </a>--}}




{{--            </div>--}}
{{--            <div class="w-full bg-whiteColor shadow-2xl shadow-black rounded-md p-3 relative">--}}
{{--                <div class="absolute -right-2 -top-2  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                    <i class="fa fa-xmark"></i>--}}
{{--                </div>--}}
{{--                <a href="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?q=80&w=1975&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" target="_blank">--}}
{{--                    <div class="w-full h-[300px] flex justify-center">--}}
{{--                        <img class="rounded-md h-full w-full object-cover" src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?q=80&w=1975&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="w-full bg-whiteColor shadow-2xl shadow-black rounded-md p-3 relative">--}}
{{--                <div class="absolute -right-2 -top-2  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">--}}
{{--                    <i class="fa fa-xmark"></i>--}}
{{--                </div>--}}
{{--                <a href="https://images.unsplash.com/photo-1561214078-f3247647fc5e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" target="_blank">--}}
{{--                    <div class="w-full h-[300px] flex justify-center">--}}
{{--                        <img class="rounded-md h-full w-full object-cover" src="https://images.unsplash.com/photo-1561214078-f3247647fc5e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">--}}
{{--                    </div>--}}
{{--                </a>--}}




{{--            </div>--}}

        </div>
        {{--        list of trainer ends here--}}

    </section>
@endsection
