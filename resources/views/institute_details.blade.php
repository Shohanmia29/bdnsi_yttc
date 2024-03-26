<x-guest-layout>

    <div class="mt-10">
        <div class="max-w-6xl mx-auto px-3">

            <div class="shadow-lg rounded-md border p-10">
                <div class="w-full flex flex-wrap">
                    <div class="w-full md:w-[30%] p-3">
                        <img class="w-full" src="{{$data->photo??''}}" alt="">
                    </div>
                    <div class="w-full md:w-[70%] p-3">
                        <ul class="w-full">
                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                    Course Name
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
                                    Course Duration
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">

                                </div>
                            </li>
                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                    Course Rate
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">

                                </div>
                            </li>
                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                    Educational Qualification
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">

                                </div>
                            </li>
                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                    Course Details
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">

                                </div>
                            </li>


                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
