<x-guest-layout>

    <div class="mt-10">
        <div class="max-w-6xl mx-auto px-3 py-4">
            <div class="shadow-lg rounded-md border p-10">
                <div class="w-full flex flex-wrap">
                    <div class="w-full md:w-[30%] p-3">
                        <img class="w-full" src="{{$data->photo??''}}" alt="">
                    </div>
                    <div class="w-full md:w-[70%] p-3">
                         <div class="w-full text-center py-2 text-lg md:text-2xl font-bold">
                                {{$data->name??''}}
                         </div>
                        <ul class="w-full">
                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                    Email
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">
                                    {{$data->email??'N/A'}}
                                </div>
                            </li>
                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                    Director Name
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
                                    Address
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">
                                    {{$data->address??'N/A'}}
                                </div>
                            </li>
                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                    District
                                </div>
                                <div class=" w-[10%]">
                                    :
                                </div>
                                <div class=" w-[50%]">

                                </div>
                            </li>
                            <li class="w-full border p-2 rounded-md mt-2 flex  ">
                                <div class="font-bold w-[40%]">
                                    Upazilla
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
