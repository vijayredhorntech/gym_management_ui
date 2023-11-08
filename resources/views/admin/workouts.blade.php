@extends('admin.layouts.layout')
@push('styles')

@endpush
@section('content')
    <section class="h-full w-full overflow-y-auto lg:pl-72 md:pl-72 pl-0 py-2 bg-lightTheme">
        <div class="lg:px-6 md:px-6 sm:px-4 px-2">
            <div class="bg-whiteColor py-4 px-2 rounded-lg flex justify-between">
                <span class="text-darkText font-semibold text-2xl">Workout</span>
                <a href="{{route('workoutForm')}}" class="bg-darkText text-whiteColor font-semibold border-[1px] border-darkText px-6 py-1 rounded-md hover:bg-whiteColor hover:text-darkText transition ease-in duration-2000">Add New</a>

            </div>
        </div>

        <div class="lg:px-6 md:px-6 sm:px-4 px-2 mt-4 pb-20 flex flex-col  gap-4">

{{--               //workout card start here--}}
               <div class="p-3 bg-whiteColor w-full h-max rounded-md grid lg:grid-cols-5  gap-4 relative">


                <div class="flex lg:flex-col flex-row items-center lg:justify-center justify-start gap-4">
                    <div class="h-16 w-16 p-1 rounded-full border-[2px] border-whiteColor border-r-lightText border-l-lightText">
                        <img class=" rounded-full h-full w-full object-cover" src="https://images.unsplash.com/photo-1599058917212-d750089bc07e?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>
                    <div class="w-max h-max flex flex-col items-center ">
                        <span class="text-darkTheme font-semibold text-xl"> Back Day </span>
                        <span class="text-lightText font-normal text-md"> Strength / Flexibility </span>
                    </div>
                </div>

                <div class="w-full col-span-2 flex items-center">
                    <textarea  rows="2"  disabled class="overflow-hidden w-full bg-whiteColor text-darkText font-semibol">Why it's on the list: This advanced move is great for those looking for an extra challenge to strengthen their back and chest. It's  Lie face-up on the ball with the head and shoulders supported, weight resting over the chest. · Keep the glutes contracted to lift the body
                    </textarea>

                </div>

                <div class="flex gap-6 col-span-2 justify-end lg:flex-row md:flex-row sm:flex-row flex-col lg:pr-16 md:pr-16 pr-2">
                        <div class="flex gap-6">
                           <div class="flex flex-col justify-center items-center gap-2">
                               <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">60 min</span>
                               <span class="italic text-md text-darkText"> Duration</span>
                           </div>

                           <div class="flex flex-col justify-center items-center gap-2">
                               <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">1200</span>
                               <span class="italic text-md text-darkText"> Calories Burns</span>
                           </div>
                       </div>
                        <div class="flex flex-col justify-center">
                           <span class="font-semibold text-darkText text-xl mb-2">Exercises</span>
                            <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 grid-cols-2 gap-2">
                             <span class="italic text-sm text-lightText"> Dead Lift</span>
                             <span class="italic text-sm text-lightText">Pull-up</span>
                             <span class="italic text-sm text-lightText"> Seated cable rows</span>
                             <span class="italic text-sm text-lightText">One-arm dumbbell row</span>
                             <span class="italic text-sm text-lightText"> Dumbbell pullover</span>
                         </div>
                        </div>
                </div>




                <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                    <i class="fa fa-xmark"></i>
                </div>
                <a href="{{route('workoutForm')}}" class="absolute right-0 top-10">
                    <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                        <i class="fa fa-pencil"></i>
                    </div>
                </a>
            </div>
{{--            // workout card ends here--}}
            <div class="p-3 bg-whiteColor w-full h-max rounded-md grid lg:grid-cols-5  gap-4 relative">


                <div class="flex lg:flex-col flex-row items-center lg:justify-center justify-start gap-4">
                    <div class="h-16 w-16 p-1 rounded-full border-[2px] border-whiteColor border-r-lightText border-l-lightText">
                        <img class=" rounded-full h-full w-full object-cover" src="https://plus.unsplash.com/premium_photo-1682093062214-dc17902b3e3d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>
                    <div class="w-max h-max flex flex-col items-center ">
                        <span class="text-darkTheme font-semibold text-xl"> Chest Day </span>
                        <span class="text-lightText font-normal text-md"> Strength / Flexibility </span>
                    </div>
                </div>

                <div class="w-full col-span-2 flex items-center">
                    <textarea  rows="2"  disabled class="overflow-hidden w-full bg-whiteColor text-darkText font-semibol">preview for Train Your Lats like Arnold With Dumbbell Pullovers I Men's Health Muscle. Why: This old-school bodybuilding move trains your Why it's on the list: This advanced move is great for those looking for an extra challenge to strengthen their back and chest. It's
                    </textarea>

                </div>

                <div class="flex gap-6 col-span-2 justify-end lg:flex-row md:flex-row sm:flex-row flex-col lg:pr-16 md:pr-16 pr-2">
                    <div class="flex gap-6">
                        <div class="flex flex-col justify-center items-center gap-2">
                            <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[red] px-2">90 min</span>
                            <span class="italic text-md text-darkText"> Duration</span>
                        </div>

                        <div class="flex flex-col justify-center items-center gap-2">
                            <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">900</span>
                            <span class="italic text-md text-darkText"> Calories Burns</span>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="font-semibold text-darkText text-xl mb-2">Exercises</span>
                        <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 grid-cols-2 gap-2">
                            <span class="italic text-sm text-lightText">Bench press</span>
                            <span class="italic text-sm text-lightText">Push-up</span>
                            <span class="italic text-sm text-lightText">Dumbbell Flyes</span>
                            <span class="italic text-sm text-lightText">Dumbbell bench press</span>
                        </div>
                    </div>
                </div>




                <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                    <i class="fa fa-xmark"></i>
                </div>
                <a href="{{route('workoutForm')}}" class="absolute right-0 top-10">
                    <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                        <i class="fa fa-pencil"></i>
                    </div>
                </a>
            </div>
            <div class="p-3 bg-whiteColor w-full h-max rounded-md grid lg:grid-cols-5  gap-4 relative">


                <div class="flex lg:flex-col flex-row items-center lg:justify-center justify-start gap-4">
                    <div class="h-16 w-16 p-1 rounded-full border-[2px] border-whiteColor border-r-lightText border-l-lightText">
                        <img class=" rounded-full h-full w-full object-cover" src="https://images.unsplash.com/photo-1541600383005-565c949cf777?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>
                    <div class="w-max h-max flex flex-col items-center ">
                        <span class="text-darkTheme font-semibold text-xl">Legs Day</span>
                        <span class="text-lightText font-normal text-md"> Strength / Flexibility </span>
                    </div>
                </div>

                <div class="w-full col-span-2 flex items-center">
                    <textarea  rows="2"  disabled class="overflow-hidden w-full bg-whiteColor text-darkText font-semibol">A squat is a strength exercise in which the trainee lowers their hips from a standing position and then stands back up. During the descent, the hip and knee joints flex while the ankle joint dorsiflexes; conversely the hip and knee joints extend and the ankle joint plantarflexes when standing up.
                    </textarea>

                </div>

                <div class="flex gap-6 col-span-2 justify-end lg:flex-row md:flex-row sm:flex-row flex-col lg:pr-16 md:pr-16 pr-2">
                    <div class="flex gap-6">
                        <div class="flex flex-col justify-center items-center gap-2">
                            <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[orange] px-2">50 min</span>
                            <span class="italic text-md text-darkText"> Duration</span>
                        </div>

                        <div class="flex flex-col justify-center items-center gap-2">
                            <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">1500</span>
                            <span class="italic text-md text-darkText"> Calories Burns</span>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="font-semibold text-darkText text-xl mb-2">Exercises</span>
                        <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 grid-cols-2 gap-2">
                            <span class="italic text-sm text-lightText">Squat</span>
                            <span class="italic text-sm text-lightText">Split squats</span>
                            <span class="italic text-sm text-lightText">Goblet squat</span>
                            <span class="italic text-sm text-lightText">Lunge</span>
                            <span class="italic text-sm text-lightText">Front barbell squat</span>
                        </div>
                    </div>
                </div>




                <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                    <i class="fa fa-xmark"></i>
                </div>
                <a href="{{route('workoutForm')}}" class="absolute right-0 top-10">
                    <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                        <i class="fa fa-pencil"></i>
                    </div>
                </a>
            </div>
            <div class="p-3 bg-whiteColor w-full h-max rounded-md grid lg:grid-cols-5  gap-4 relative">


                <div class="flex lg:flex-col flex-row items-center lg:justify-center justify-start gap-4">
                    <div class="h-16 w-16 p-1 rounded-full border-[2px] border-whiteColor border-r-lightText border-l-lightText">
                        <img class=" rounded-full h-full w-full object-cover" src="https://images.unsplash.com/photo-1599058917212-d750089bc07e?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>
                    <div class="w-max h-max flex flex-col items-center ">
                        <span class="text-darkTheme font-semibold text-xl"> Back Day </span>
                        <span class="text-lightText font-normal text-md"> Strength / Flexibility </span>
                    </div>
                </div>

                <div class="w-full col-span-2 flex items-center">
                    <textarea  rows="2"  disabled class="overflow-hidden w-full bg-whiteColor text-darkText font-semibol">Why it's on the list: This advanced move is great for those looking for an extra challenge to strengthen their back and chest. It's  Lie face-up on the ball with the head and shoulders supported, weight resting over the chest. · Keep the glutes contracted to lift the body
                    </textarea>

                </div>

                <div class="flex gap-6 col-span-2 justify-end lg:flex-row md:flex-row sm:flex-row flex-col lg:pr-16 md:pr-16 pr-2">
                    <div class="flex gap-6">
                        <div class="flex flex-col justify-center items-center gap-2">
                            <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">60 min</span>
                            <span class="italic text-md text-darkText"> Duration</span>
                        </div>

                        <div class="flex flex-col justify-center items-center gap-2">
                            <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">1200</span>
                            <span class="italic text-md text-darkText"> Calories Burns</span>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="font-semibold text-darkText text-xl mb-2">Exercises</span>
                        <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 grid-cols-2 gap-2">
                            <span class="italic text-sm text-lightText"> Dead Lift</span>
                            <span class="italic text-sm text-lightText">Pull-up</span>
                            <span class="italic text-sm text-lightText"> Seated cable rows</span>
                            <span class="italic text-sm text-lightText">One-arm dumbbell row</span>
                            <span class="italic text-sm text-lightText"> Dumbbell pullover</span>
                        </div>
                    </div>
                </div>




                <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                    <i class="fa fa-xmark"></i>
                </div>
                <a href="{{route('workoutForm')}}" class="absolute right-0 top-10">
                    <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                        <i class="fa fa-pencil"></i>
                    </div>
                </a>
            </div>
            <div class="p-3 bg-whiteColor w-full h-max rounded-md grid lg:grid-cols-5  gap-4 relative">


                <div class="flex lg:flex-col flex-row items-center lg:justify-center justify-start gap-4">
                    <div class="h-16 w-16 p-1 rounded-full border-[2px] border-whiteColor border-r-lightText border-l-lightText">
                        <img class=" rounded-full h-full w-full object-cover" src="https://plus.unsplash.com/premium_photo-1682093062214-dc17902b3e3d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>
                    <div class="w-max h-max flex flex-col items-center ">
                        <span class="text-darkTheme font-semibold text-xl"> Chest Day </span>
                        <span class="text-lightText font-normal text-md"> Strength / Flexibility </span>
                    </div>
                </div>

                <div class="w-full col-span-2 flex items-center">
                    <textarea  rows="2"  disabled class="overflow-hidden w-full bg-whiteColor text-darkText font-semibol">preview for Train Your Lats like Arnold With Dumbbell Pullovers I Men's Health Muscle. Why: This old-school bodybuilding move trains your Why it's on the list: This advanced move is great for those looking for an extra challenge to strengthen their back and chest. It's
                    </textarea>

                </div>

                <div class="flex gap-6 col-span-2 justify-end lg:flex-row md:flex-row sm:flex-row flex-col lg:pr-16 md:pr-16 pr-2">
                    <div class="flex gap-6">
                        <div class="flex flex-col justify-center items-center gap-2">
                            <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[red] px-2">90 min</span>
                            <span class="italic text-md text-darkText"> Duration</span>
                        </div>

                        <div class="flex flex-col justify-center items-center gap-2">
                            <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">900</span>
                            <span class="italic text-md text-darkText"> Calories Burns</span>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="font-semibold text-darkText text-xl mb-2">Exercises</span>
                        <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 grid-cols-2 gap-2">
                            <span class="italic text-sm text-lightText">Bench press</span>
                            <span class="italic text-sm text-lightText">Push-up</span>
                            <span class="italic text-sm text-lightText">Dumbbell Flyes</span>
                            <span class="italic text-sm text-lightText">Dumbbell bench press</span>
                        </div>
                    </div>
                </div>




                <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                    <i class="fa fa-xmark"></i>
                </div>
                <a href="{{route('workoutForm')}}" class="absolute right-0 top-10">
                    <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                        <i class="fa fa-pencil"></i>
                    </div>
                </a>
            </div>
            <div class="p-3 bg-whiteColor w-full h-max rounded-md grid lg:grid-cols-5  gap-4 relative">


                <div class="flex lg:flex-col flex-row items-center lg:justify-center justify-start gap-4">
                    <div class="h-16 w-16 p-1 rounded-full border-[2px] border-whiteColor border-r-lightText border-l-lightText">
                        <img class=" rounded-full h-full w-full object-cover" src="https://images.unsplash.com/photo-1541600383005-565c949cf777?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>
                    <div class="w-max h-max flex flex-col items-center ">
                        <span class="text-darkTheme font-semibold text-xl">Legs Day</span>
                        <span class="text-lightText font-normal text-md"> Strength / Flexibility </span>
                    </div>
                </div>

                <div class="w-full col-span-2 flex items-center">
                    <textarea  rows="2"  disabled class="overflow-hidden w-full bg-whiteColor text-darkText font-semibol">A squat is a strength exercise in which the trainee lowers their hips from a standing position and then stands back up. During the descent, the hip and knee joints flex while the ankle joint dorsiflexes; conversely the hip and knee joints extend and the ankle joint plantarflexes when standing up.
                    </textarea>

                </div>

                <div class="flex gap-6 col-span-2 justify-end lg:flex-row md:flex-row sm:flex-row flex-col lg:pr-16 md:pr-16 pr-2">
                    <div class="flex gap-6">
                        <div class="flex flex-col justify-center items-center gap-2">
                            <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[orange] px-2">50 min</span>
                            <span class="italic text-md text-darkText"> Duration</span>
                        </div>

                        <div class="flex flex-col justify-center items-center gap-2">
                            <span class="font-semibold text-whiteColor rounded-sm text-lg bg-[green] px-2">1500</span>
                            <span class="italic text-md text-darkText"> Calories Burns</span>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="font-semibold text-darkText text-xl mb-2">Exercises</span>
                        <div class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 grid-cols-2 gap-2">
                            <span class="italic text-sm text-lightText">Squat</span>
                            <span class="italic text-sm text-lightText">Split squats</span>
                            <span class="italic text-sm text-lightText">Goblet squat</span>
                            <span class="italic text-sm text-lightText">Lunge</span>
                            <span class="italic text-sm text-lightText">Front barbell squat</span>
                        </div>
                    </div>
                </div>




                <div class="absolute right-0 top-0  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                    <i class="fa fa-xmark"></i>
                </div>
                <a href="{{route('workoutForm')}}" class="absolute right-0 top-10">
                    <div class="  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                        <i class="fa fa-pencil"></i>
                    </div>
                </a>
            </div>

        </div>

    </section>



@endsection

@push('scripts')


@endpush
