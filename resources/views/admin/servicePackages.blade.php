@extends('admin.layouts.layout')
@push('styles')
@endpush
@section('content')
    <section class="h-full w-full overflow-y-auto lg:pl-72 md:pl-72 pl-0 py-2 bg-lightTheme">
        <div class="lg:px-6 md:px-6 sm:px-4 px-2">
            <div class="bg-whiteColor py-4 px-2 rounded-lg flex justify-between">
                <span class="text-darkText font-semibold text-2xl">Services And Packages</span>
                <a href="{{route('servicePackagesForm')}}" class="bg-darkText text-whiteColor font-semibold border-[1px] border-darkText px-6 py-1 rounded-md hover:bg-whiteColor hover:text-darkText transition ease-in duration-2000">Add New</a>

            </div>
        </div>

        <div class="lg:px-6 md:px-6 sm:px-4 px-2 grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1  gap-[20px] mt-4">
            <x-admin.package-card
                image="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                packageName="Monthly or Annual Gym Fee"
                duration="1 Month"
                start-date="01 Oct 2023"
                end-date="01 Nov 2023"
                price="12,000"
                active="yes"
                category="Membership"
                capacity="20 Persons"
                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis eum ex fuga harum inventore nisi quis saepe sunt veritatis, voluptates."
                />
            <x-admin.package-card
                image="https://images.unsplash.com/photo-1588286840104-8957b019727f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                packageName="Yoga classes"
                duration="1 Month"
                start-date=" 01 Dec 2023"
                end-date="01 Jan 2024"
                price="8,000"
                active="no"
                category="Group Fitness Classes"
                capacity="10 Persons"
                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis eum ex fuga harum inventore nisi quis saepe sunt veritatis, voluptates."
            />
            <x-admin.package-card
                image="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                packageName="Monthly or Annual Gym Fee"
                duration="1 Month"
                start-date="01 Oct 2023"
                end-date="01 Nov 2023"
                price="12,000"
                active="yes"
                category="Membership"
                capacity="20 Persons"
                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis eum ex fuga harum inventore nisi quis saepe sunt veritatis, voluptates."
            />
            <x-admin.package-card
                image="https://images.unsplash.com/photo-1588286840104-8957b019727f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                packageName="Yoga classes"
                duration="1 Month"
                start-date=" 01 Dec 2023"
                end-date="01 Jan 2024"
                price="8,000"
                active="no"
                category="Group Fitness Classes"
                capacity="10 Persons"
                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis eum ex fuga harum inventore nisi quis saepe sunt veritatis, voluptates."
            />
            <x-admin.package-card
                image="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                packageName="Monthly or Annual Gym Fee"
                duration="1 Month"
                start-date="01 Oct 2023"
                end-date="01 Nov 2023"
                price="12,000"
                active="yes"
                category="Membership"
                capacity="20 Persons"
                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis eum ex fuga harum inventore nisi quis saepe sunt veritatis, voluptates."
            />
            <x-admin.package-card
                image="https://images.unsplash.com/photo-1588286840104-8957b019727f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                packageName="Yoga classes"
                duration="1 Month"
                start-date=" 01 Dec 2023"
                end-date="01 Jan 2024"
                price="8,000"
                active="no"
                category="Group Fitness Classes"
                capacity="10 Persons"
                description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis eum ex fuga harum inventore nisi quis saepe sunt veritatis, voluptates."
            />


        </div>

    </section>



@endsection

@push('scripts')


@endpush
