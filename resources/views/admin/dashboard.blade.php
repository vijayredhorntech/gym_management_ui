@extends('admin.layouts.layout')
@section('content')
    <section class="h-full w-full overflow-y-auto lg:pl-72 md:pl-72 pl-0 py-2 bg-lightTheme">
               <div class="p-6 grid lg:grid-cols-3 grid-cols-1 gap-4 lg:h-[500px] h-max">
                       <div class="w-full lg:col-span-2 flex flex-col gap-6">
                                   <div class="w-full h-[300px] relative">
                                    <img class="rounded-lg w-full h-full object-cover" src="{{asset('/assets/images/dashbaord/yoga-bg.png')}}" alt="">
                                    <div class="w-full h-full absolute flex items-center top-0 left-0 z-20 bg-[black]/50 rounded-lg">
                                         <div class="w-[500px] h-max px-6 text-lightText flex flex-col gap-2">
                                                 <span class="font-bold text-5xl">Hi, Admin</span>
                                                 <p class="font-normal text-lg text-lightTheme">
                                                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eos error, exercitationem nemo odio possimus quaerat quibusdam quos sequi sit.
                                                 </p>
                                         </div>
                                  </div>
                                    <img class="h-[300px] w-[300x] absolute top-0 right-[10%] z-10" src="{{asset('/assets/images/dashbaord/yoga-girls.png')}}" alt="">
                                  </div>
                                   <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-3 grid-cols-1 gap-4">
                                       <div class="w-full bg-whiteColor lg:h-[120px] md:h-[120px] h-[150] rounded-lg grid gap-4 grid-cols-2 shadow-lg shadow-gray-900 p-2">
                                              <div class="w-full h-full flex items-center justify-center">
                                                      <i class="fa fa-users text-4xl text-[blue]"></i>
                                              </div>
                                           <div class="flex flex-col gap-2 w-full h-full items-center justify-center">
                                                 <span class="text-xl italic">Total User's</span>
                                                 <span class="font-bold text-3xl text-[blue]">1500</span>
                                           </div>
                                       </div>
                                       <div class="w-full bg-whiteColor lg:h-[120px] md:h-[120px] h-[150] rounded-lg grid gap-4 grid-cols-2 shadow-lg shadow-gray-900 p-2">
                                              <div class="w-full h-full flex items-center justify-center">
                                                  <i class="fa-solid fa-user-pen text-4xl text-[orange]"></i>
                                              </div>
                                           <div class="flex flex-col gap-2 w-full h-full items-center justify-center">
                                                 <span class="text-xl italic">Total Trainer's</span>
                                                 <span class="font-bold text-3xl text-[orange]">10</span>
                                           </div>
                                       </div>
                                       <div class="w-full bg-whiteColor lg:h-[120px] md:h-[120px] h-[150] rounded-lg grid gap-4 grid-cols-2 shadow-lg shadow-gray-900 p-2">
                                              <div class="w-full h-full flex items-center justify-center">
                                                  <i class="fa-solid fa-dumbbell text-4xl text-[green]"></i>
                                              </div>
                                           <div class="flex flex-col gap-2 w-full h-full items-center justify-center">
                                                 <span class="text-xl italic">Total Gym's</span>
                                                 <span class="font-bold text-3xl text-[green]">2</span>
                                           </div>
                                       </div>


                                   </div>
                       </div>
                       <div class="w-full bg-whiteColor lg:h-full h-[400px]  rounded-lg overflow-y-auto">
                           <div class="w-full h-max p-4 border-b-[1px] border-b-darkText">
                                          <span class="text-darkText font-semibold text-xl"> Upcoming Renewals:</span>
                                  </div>
                           <div class="w-full p-4  flex justify-between">
                                    <div class="flex gap-4">
                                          <div class="h-16 w-16 rounded-md">
                                              <img class="w-full h-full object-cover rounded-full" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?auto=format&fit=crop&q=80&w=2080&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                          </div>
                                        <div class="flex flex-col">
                                              <span class="font-bold text-darkText text-lg">User Name</span>
                                              <span class="font-semibold text-lightText text-md">Expire In : 4 Days</span>
                                        </div>
                                    </div>
                                <div class="flex gap-2 items-center">
                                    <div class="bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full my-auto   flex items-center justify-center">
                                        <i class="fa fa-bell text-xs"></i>
                                    </div>

                                    <div class="bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full my-auto   flex items-center justify-center">
                                        <i class="fa fa-trash text-xs"></i>
                                    </div>
                                </div>

                           </div>
                           <div class="w-full p-4  flex justify-between">
                               <div class="flex gap-4">
                                   <div class="h-16 w-16 rounded-md">
                                       <img class="w-full h-full object-cover rounded-full" src="https://plus.unsplash.com/premium_photo-1683121366070-5ceb7e007a97?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                   </div>
                                   <div class="flex flex-col">
                                       <span class="font-bold text-darkText text-lg">Adam Singh</span>
                                       <span class="font-semibold text-lightText text-md">Expire In : 1 Month</span>
                                   </div>
                               </div>
                               <div class="flex gap-2 items-center">
                                   <div class="bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full my-auto   flex items-center justify-center">
                                       <i class="fa fa-bell text-xs"></i>
                                   </div>

                                   <div class="bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full my-auto   flex items-center justify-center">
                                       <i class="fa fa-trash text-xs"></i>
                                   </div>
                               </div>

                           </div>
                           <div class="w-full p-4  flex justify-between">
                               <div class="flex gap-4">
                                   <div class="h-16 w-16 rounded-md">
                                       <img class="w-full h-full object-cover rounded-full" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?auto=format&fit=crop&q=80&w=2080&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                   </div>
                                   <div class="flex flex-col">
                                       <span class="font-bold text-darkText text-lg">User Name</span>
                                       <span class="font-semibold text-lightText text-md">Expire In : 4 Days</span>
                                   </div>
                               </div>
                               <div class="flex gap-2 items-center">
                                   <div class="bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full my-auto   flex items-center justify-center">
                                       <i class="fa fa-bell text-xs"></i>
                                   </div>

                                   <div class="bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full my-auto   flex items-center justify-center">
                                       <i class="fa fa-trash text-xs"></i>
                                   </div>
                               </div>

                           </div>
                           <div class="w-full p-4  flex justify-between">
                               <div class="flex gap-4">
                                   <div class="h-16 w-16 rounded-md">
                                       <img class="w-full h-full object-cover rounded-full" src="https://plus.unsplash.com/premium_photo-1683121366070-5ceb7e007a97?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                   </div>
                                   <div class="flex flex-col">
                                       <span class="font-bold text-darkText text-lg">Adam Singh</span>
                                       <span class="font-semibold text-lightText text-md">Expire In : 1 Month</span>
                                   </div>
                               </div>
                               <div class="flex gap-2 items-center">
                                   <div class="bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full my-auto   flex items-center justify-center">
                                       <i class="fa fa-bell text-xs"></i>
                                   </div>

                                   <div class="bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full my-auto   flex items-center justify-center">
                                       <i class="fa fa-trash text-xs"></i>
                                   </div>
                               </div>

                           </div>
                           <div class="w-full p-4  flex justify-between">
                               <div class="flex gap-4">
                                   <div class="h-16 w-16 rounded-md">
                                       <img class="w-full h-full object-cover rounded-full" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?auto=format&fit=crop&q=80&w=2080&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                   </div>
                                   <div class="flex flex-col">
                                       <span class="font-bold text-darkText text-lg">User Name</span>
                                       <span class="font-semibold text-lightText text-md">Expire In : 4 Days</span>
                                   </div>
                               </div>
                               <div class="flex gap-2 items-center">
                                   <div class="bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full my-auto   flex items-center justify-center">
                                       <i class="fa fa-bell text-xs"></i>
                                   </div>

                                   <div class="bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full my-auto   flex items-center justify-center">
                                       <i class="fa fa-trash text-xs"></i>
                                   </div>
                               </div>

                           </div>
                           <div class="w-full p-4  flex justify-between">
                               <div class="flex gap-4">
                                   <div class="h-16 w-16 rounded-md">
                                       <img class="w-full h-full object-cover rounded-full" src="https://plus.unsplash.com/premium_photo-1683121366070-5ceb7e007a97?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                   </div>
                                   <div class="flex flex-col">
                                       <span class="font-bold text-darkText text-lg">Adam Singh</span>
                                       <span class="font-semibold text-lightText text-md">Expire In : 1 Month</span>
                                   </div>
                               </div>
                               <div class="flex gap-2 items-center">
                                   <div class="bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full my-auto   flex items-center justify-center">
                                       <i class="fa fa-bell text-xs"></i>
                                   </div>

                                   <div class="bg-darkText text-lightTheme hover:bg-lightTheme hover:text-darkText border-[1px] border-darkText transition ease-in duration-2000 h-8 w-8 rounded-full my-auto   flex items-center justify-center">
                                       <i class="fa fa-trash text-xs"></i>
                                   </div>
                               </div>

                           </div>

                       </div>
               </div>




        <div class="pb-24 lg:px-6 md:px-6 sm:px-4 px-2">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=UTC&showPrint=0&showNav=1&showTz=0&showCalendars=0&showTabs=1&src=dmNkaWFtb25kOTZAZ21haWwuY29t&src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%23009688" class="h-[600px] w-full border-[1px] border-darkText rounded-lg p-2"  frameborder="0" scrolling="no"></iframe>
        </div>



    </section>
@endsection
