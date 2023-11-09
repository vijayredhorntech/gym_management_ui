@extends('admin.layouts.layout')
@section('content')
    <section class="h-full w-full overflow-y-auto lg:pl-72 md:pl-72 pl-0 py-2 bg-lightTheme">
        <div class="lg:px-6 md:px-6 sm:px-4 px-2">
            <div class="bg-whiteColor py-4 px-2 rounded-lg flex justify-between">
                <span class="text-darkText font-semibold text-2xl">Trainers</span>
                <a href="{{route('trainer.create')}}" class="bg-darkText text-whiteColor font-semibold border-[1px] border-darkText px-6 py-1 rounded-md hover:bg-whiteColor hover:text-darkText transition ease-in duration-2000">Add New</a>

            </div>
        </div>

{{--        list of trainers are visible here--}}
        <div class="lg:px-6 md:px-6 sm:px-4 px-2 grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-3 grid-cols-1  gap-[20px] mt-4 pb-20">
            @foreach($trainers as $trainer)
            <x-admin.trainer-card
                name="{{$trainer->first_name.' '.$trainer->last_name}}"
                designation="{{$trainer->expertise}}"
                stars="{{$trainer->rating}}"
                image="{{$trainer->media ? asset('storage/'. $trainer->media) : 'https://images.unsplash.com/photo-1463453091185-61582044d556?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'}}"
                description="{{$trainer->description}} ."
                facebook-link="{{$trainer->facebook}}"
                twitter-link="{{$trainer->twitter}}"
                instagram-link="{{$trainer->instagram}}"
                youtube-link="{{$trainer->youtube}}"
                id="{{$trainer->id}}"
            />
            @endforeach

{{--
{{--            <x-admin.trainer-card--}}
{{--                name="Albert Flores"--}}
{{--                designation="Cardio Expert"--}}
{{--                stars="3"--}}
{{--                image="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"--}}
{{--                description="Slate helps you see how many more days you need ."--}}
{{--                facebook-link="#"--}}
{{--                twitter-link="#"--}}
{{--                instagram-link="#"--}}
{{--                youtube-link="#"--}}
{{--            />--}}
        </div>
{{--        list of trainer ends here--}}

    </section>
@endsection
