@props(['institute'])

<div class="w-full border-2 border-double border-gray-500 rounded-md">
    <div class="  overflow-hidden rounded-lg bg-white ">
        <img  src="{{$institute->photo??''}}" alt="image" class="w-full   h-64">
        <div class=" py-6 bg-gray-200 text-center ">
            <div>
                <a href="{{route('institute.details',$institute->id)}}" class="text-dark hover:text-primary mb-4 underline  text-lg font-semibold  ">
                    {{$institute->name??''}}
                </a>
            </div>


        </div>

    </div>
</div>

