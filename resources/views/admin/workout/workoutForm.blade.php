@extends('admin.layouts.layout')
@section('content')
    {{--    // add new trainer modal starts here--}}
    <div id="addTrainerModal" class=" absolute top-0 left-0 z-50 w-screen h-screen bg-[black]/50">
        <div class="w-full h-full  flex justify-center items-center">
            <div class="bg-lightTheme lg:w-[30%] md:w-[50%] sm:w-[70%] w-[90%] rounded-md relative">
                <a href="{{route('workouts')}}">
                    <div class="absolute -right-2 -top-2  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                        <i class="fa fa-xmark"></i>
                    </div>
                </a>
                <div class="w-full  shadow-lg shadow-[gray] bg-whiteColor rounded-md px-2 lg:h-full md:h-full h-max py-4">
                    <div class="bg-whiteColor py-2 px-2  border-b-[1px] border-darkText">
                        <span class="text-darkText font-semibold text-2xl">Add Workout</span>
                    </div>
                    <form action="{{route('workout.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <div class="flex flex-col p-2">
                        <div class="flex items-end">
                            <img class="h-24" src="{{asset('/assets/images/dashbaord/exercise.png')}}" alt="">

                            <div class="h-8 w-8 rounded-full bg-darkText flex justify-center items-center relative">
                                <i class="fa fa-edit text-lightTheme"></i>
                                <div class="absolute top-0 left-0 h-full w-full overflow-hidden ">
                                    <input type="file" name="media" class="opacity-0">
                                </div>

                            </div>

                        </div>

                        <span class="font-semibold">Only <span class="italic text-darkText">.jpg .png .jpeg</span> allowed</span>
                    </div>


                    <div>
                        <div class="flex flex-col gap-2 mt-3">
                            <label for="workoutName" class="text-darkText font-semibold text-lg">Workout Name</label>
                            <input name="name" type="text" class="bg-lightTheme p-2 text-darkText border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                        </div>

                        <div class="flex flex-col gap-2 mt-3">
                            <label for="workoutName" class="text-darkText font-semibold text-lg">Workout Duration(In Minutes)</label>
                            <input name="duration" type="number" class="bg-lightTheme p-2 text-darkText border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                        </div>

                        <div class="flex flex-col gap-2 mt-3">
                            <label for="calories" class="text-darkText font-semibold text-lg">Calories Burns</label>
                            <input name="calories" type="number" class="bg-lightTheme p-2 text-darkText border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                        </div>

                        <div class="flex flex-col gap-2 mt-3">
                            <label for="categories" class="text-darkText font-semibold text-lg">Workout Category</label>
                            <select name="category" type="text" class="bg-lightTheme text-darkText p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                                <option value="Strength">Strength</option>
                                <option value="Training">Training</option>
                                <option value="Cardio">Cardio</option>
                                <option value="Flexibility">Flexibility</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-2 mt-3">
                            <label for="exercises" class="text-darkText font-semibold text-lg">Workout Exercises</label>
                            <select name="exercise" type="text" class="bg-lightTheme text-darkText p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
{{--                                // options cames from exercises table--}}
                                <option value="Bench Press">Bench Press</option>
                                <option value="Push Ups">Push Ups</option>
                                <option value="Dead Lifts">Dead Lifts</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-2 mt-3">
                            <label for="description" class="text-darkText font-semibold text-lg">Description</label>
                            <textarea name="description" type="text" class="bg-lightTheme p-2 text-darkText border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none " rows="3"></textarea>
                        </div>
                        <div class="w-full flex justify-end mt-4">
                            <button type="submit" class="px-6 py-2 bg-darkText text-whiteColor font-semibold text-lg rounded-md border-[1px] border-darkText hover:text-darkText hover:bg-whiteColor transition ease-in duration-2000">Sumbit</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    {{--    // add new trainer modal ends here--}}
@endsection
