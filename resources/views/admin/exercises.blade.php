@extends('admin.layouts.layout')
@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
@endpush
@section('content')
    <section class="h-full w-full overflow-y-auto lg:pl-72 md:pl-72 pl-0 py-2 bg-lightTheme">
        <div class="lg:px-6 md:px-6 sm:px-4 px-2">
            <div class="bg-whiteColor py-4 px-2 rounded-lg flex justify-between">
                <span class="text-darkText font-semibold text-2xl">Exercises</span>
                <a href="{{route('exerciseForm')}}" class="bg-darkText text-whiteColor font-semibold border-[1px] border-darkText px-6 py-1 rounded-md hover:bg-whiteColor hover:text-darkText transition ease-in duration-2000">Add New</a>

            </div>
        </div>

        <div class="lg:px-6 md:px-6 sm:px-4 px-2 grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1  gap-[20px] mt-4">
            <x-admin.exercise-card
              exercise-name="Bench Press"
              muscle-group="Chest"
              exercise-category="Strength"
              description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid debitis doloribus fugiat magnam nobis, perferendis repellendus repudiandae saepe voluptas."
              images="https://plus.unsplash.com/premium_photo-1682094035772-a5ccdb07d9b0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          />
            <x-admin.exercise-card
                exercise-name="Dead Lifts"
                muscle-group="Back"
                exercise-category="Strength"
                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid debitis doloribus fugiat magnam nobis, perferendis repellendus repudiandae saepe voluptas."
                images="https://images.unsplash.com/photo-1683889842943-17e8eea3ac7c?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            />
            <x-admin.exercise-card
                exercise-name="Bench Press"
                muscle-group="Chest"
                exercise-category="Strength"
                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid debitis doloribus fugiat magnam nobis, perferendis repellendus repudiandae saepe voluptas."
                images="https://plus.unsplash.com/premium_photo-1682094035772-a5ccdb07d9b0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            />
            <x-admin.exercise-card
                exercise-name="Dead Lifts"
                muscle-group="Back"
                exercise-category="Strength"
                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid debitis doloribus fugiat magnam nobis, perferendis repellendus repudiandae saepe voluptas."
                images="https://images.unsplash.com/photo-1683889842943-17e8eea3ac7c?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            />
            <x-admin.exercise-card
                exercise-name="Bench Press"
                muscle-group="Chest"
                exercise-category="Strength"
                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid debitis doloribus fugiat magnam nobis, perferendis repellendus repudiandae saepe voluptas."
                images="https://plus.unsplash.com/premium_photo-1682094035772-a5ccdb07d9b0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            />
            <x-admin.exercise-card
                exercise-name="Dead Lifts"
                muscle-group="Back"
                exercise-category="Strength"
                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid debitis doloribus fugiat magnam nobis, perferendis repellendus repudiandae saepe voluptas."
                images="https://images.unsplash.com/photo-1683889842943-17e8eea3ac7c?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            />
        </div>

    </section>



@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.carousel').slick({
                slidesToShow: 2, // Number of visible slides at a time
                slidesToScroll: 1,
                prevArrow: '<button class="slick-prev">Previous</button>',
                nextArrow: '<button class="slick-next">Next</button>',
                // responsive: [
                //     {
                //         breakpoint: 768,
                //         settings: {
                //             slidesToShow: 1, // Adjust for smaller screens
                //             slidesToScroll: 1
                //         }
                //     }
                // ]
            });
        });
    </script>

@endpush
