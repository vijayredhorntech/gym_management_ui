@extends('admin.layouts.layout')
@section('content')
    {{--    // add new trainer modal starts here--}}
    <div id="addTrainerModal" class=" absolute top-0 left-0 z-50 w-screen h-screen bg-[black]/50">
        <div class="w-full h-full  flex justify-center items-center">
            <div class="bg-lightTheme lg:w-[80%] md:w-[90%] w-[90%] lg:h-[80%] md:h-[90%] h-[90%] rounded-md relative">
                <a href="{{route('member.index')}}">
                    <div class="absolute -right-2 -top-2  bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full  flex items-center justify-center">
                        <i class="fa fa-xmark"></i>
                    </div>
                </a>

                <form action="{{$member ? route('member.update', ['member' => $member->id]) : route('member.store')}}" method="post" enctype="multipart/form-data">
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
                <div class="flex lg:flex-row md:flex-row flex-col p-4 w-full h-full gap-4 lg:overflow-hidden md:overflow-hidden overflow-auto">
                    <div class="lg:w-[20%] md:w-[30%]  shadow-lg shadow-[gray] bg-whiteColor rounded-md px-2 lg:h-full md:h-full h-max py-4 lg:overflow-auto md:overflow-auto overflow-none">
                        <div class="bg-whiteColor py-2 px-2  border-b-[1px] border-darkText">
                            <span class="text-darkText font-semibold text-2xl">Add User</span>
                        </div>

                        <div class="flex flex-col p-2">
                            <div class="flex items-end">
                                <img src="{{asset('/assets/images/dashbaord/1.png')}}" alt="">

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
                                <label for="name" class="text-darkText font-semibold text-lg">Name</label>
                                <input name="name" type="text" value="{{$member ? $member->name : ''}}" class="bg-lightTheme p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                            </div>

                            <div class="flex flex-col gap-2 mt-3">
                                <label for="dob" class="text-darkText font-semibold text-lg">Date Of Birth</label>
                                <input name="date_of_birth" type="date" value="{{$member ? $member->date_of_birth : ''}}" class="bg-lightTheme p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                            </div>

                            <div class="flex flex-col gap-2 mt-3">
                                <label for="plan" class="text-darkText font-semibold text-lg">Plan</label>
                                <input name="plan" type="number" value="{{$member ? $member->plan : ''}}" class="bg-lightTheme p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                            </div>
                            <div class="flex flex-col gap-2 mt-3">
                                <label for="fee" class="text-darkText font-semibold text-lg">Initial Fee</label>
                                <input name="initial_fee" type="number" value="{{$member ? $member->initial_fee : ''}}" class="bg-lightTheme p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                            </div>
                            <div class="flex flex-col gap-2 mt-3">
                                <label for="fee" class="text-darkText font-semibold text-lg">Personal Trainer</label>
                                <select name="personal_trainer" type="number" class="bg-lightTheme p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                                    <option value="yes" {{$member ? $member->personal_traner == 'yes' ? 'selected' : '' : ''}}>Yes</option>
                                    <option value="no" {{$member ? $member->personal_traner == 'no' ? 'selected' : '' : ''}}>No</option>
                                </select>
                            </div>

                        </div>


                    </div>


                    <div class="lg:w-[80%] md:w-[70%] shadow-lg shadow-[gray] bg-whiteColor rounded-md px-6 py-4 lg:overflow-auto md:overflow-auto overflow-none">
                        <div class="bg-whiteColor py-2 px-2 border-b-[1px] border-darkText">
                            <span class="text-darkText font-semibold text-2xl">User Contact Information </span>
                        </div>
                        <div class="w-full ">
                            <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-3 grid-cols-1 gap-2 w-full ">
                                <div class=" w-full flex flex-col gap-2 mt-3">
                                    <label for="address" class="text-darkText font-semibold text-lg">Address</label>
                                    <input name="address" type="text" value="{{$member ? $member->address : ''}}" class="bg-lightTheme p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                                </div>
                                <div class=" w-full flex flex-col gap-2 mt-3">
                                    <label for="country" class="text-darkText font-semibold text-lg">Country</label>
                                    <input name="country" type="text" value="{{$member ? $member->country : ''}}" class="bg-lightTheme p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                                </div>
                                <div class=" w-full flex flex-col gap-2 mt-3">
                                    <label for="city" class="text-darkText font-semibold text-lg">City</label>
                                    <input name="city" type="text" value="{{$member ? $member->city : ''}}" class="bg-lightTheme p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                                </div>
                                <div class=" w-full flex flex-col gap-2 mt-3">
                                    <label for="mobile" class="text-darkText font-semibold text-lg">Mobile Number</label>
                                    <input name="mobile" type="number" value="{{$member ? $member->mobile : ''}}" class="bg-lightTheme p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                                </div>
                                <div class=" w-full flex flex-col gap-2 mt-3">
                                    <label for="email" class="text-darkText font-semibold text-lg">Email</label>
                                    <input name="email" type="email" value="{{$member ? $member->email : ''}}" class="bg-lightTheme p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                                </div>
                            </div>
                        </div>


                        <div class="bg-whiteColor py-2 px-2 border-b-[1px] border-darkText mt-4">
                            <span class="text-darkText font-semibold text-2xl">User Body Information </span>
                        </div>
                        <div class="w-full ">
                            <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-3 grid-cols-1 gap-2 w-full ">
                                <div class=" w-full flex flex-col gap-2 mt-3">
                                    <label for="gender" class="text-darkText font-semibold text-lg">Gender</label>
                                    <input name="gender" type="text" value="{{$member ? $member->gender : ''}}" class="bg-lightTheme p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                                </div>

                                <div class=" w-full flex flex-col gap-2 mt-3">
                                    <label for="weight" class="text-darkText font-semibold text-lg">Weight</label>
                                    <input name="weight" type="text" value="{{$member ? $member->weight : ''}}" class="bg-lightTheme p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                                </div>

                                <div class=" w-full flex flex-col gap-2 mt-3">
                                    <label for="height" class="text-darkText font-semibold text-lg">Height</label>
                                    <input name="height" type="text" value="{{$member ? $member->height : ''}}" class="bg-lightTheme p-2 border-[1px] border-darkText rounded-md focus:ring-0 focus:outline-none ">
                                </div>

                            </div>
                        </div>


                        <div class="w-full flex justify-end mt-4">
                            <input type="submit" class="px-6 py-2 bg-darkText text-whiteColor font-semibold text-lg rounded-md border-[1px] border-darkText hover:text-darkText hover:bg-whiteColor transition ease-in duration-2000"/>
                        </div>
                    </div>

                </div>
                </form>
            </div>
        </div>

    </div>
    {{--    // add new trainer modal ends here--}}
@endsection
