<x-guest-layout>

    <div class="py-10">
        <div class="max-w-6xl mx-auto px-3">

            <div class="shadow-lg rounded-md border p-10">
                <div class="w-full flex flex-wrap">
                    <div class="w-full md:w-[30%] p-3">
                        <img class="w-full" src="{{$data->picture??''}}" alt="">
                    </div>
                    <div class="w-full md:w-[70%] p-3">
                         <div class="p-2 font-bold text-xl text-center md:text-2xl">
                             Student information
                         </div>
                        <ul class="w-full">
                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                    Registration No
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">
                                    {{$data->registration??'N/A'}}
                                </div>
                            </li>
                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                    Student Name
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">
                                    {{$data->name??'N/A'}}
                                </div>
                            </li>
                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                  Father Name
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">
                                    {{$data->fathers_name??'N/A'}}
                                </div>
                            </li>
                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                   Mother Name
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">
                                    {{$data->mothers_name??'N/A'}}
                                </div>
                            </li>
                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                 Gender
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">
                                    {{$data->gender->key??'N/A'}}
                                </div>
                            </li>

                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                    Present address
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">
                                    {{$data->present_address??'N/A'}}
                                </div>
                            </li>

                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                    Student Thana
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">
                                    {{$data->permanent_address??'N/A'}}
                                </div>
                            </li>

                          <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                    Student District
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">
                                    {{$data->permanent_address??'N/A'}}
                                </div>
                            </li>
                          <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                    Institute Name
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">
                                    {{$data->center->name??'N/A'}}
                                </div>
                            </li>
                          <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                   Course Name
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">
                                    {{$data->subject->name??'N/A'}}
                                </div>
                            </li>
                          <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                   Course Duration
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">
                                    {{$data->course_duration??'N/A'}}
                                </div>
                            </li>
                          <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                   Session
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">
                                    {{$data->session->name??'N/A'}}
                                </div>
                            </li>


                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
