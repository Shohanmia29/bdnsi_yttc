@props(['institute'])

<div class="border-2 border-double border-gray-500 rounded-md">
    <div class="  overflow-hidden rounded-lg bg-white ">
        <img  src="{{$institute->photo??''}}" alt="image" class="w-full   h-64">
        <div class="p-8 bg-gray-200 text-center ">
            <h3>
                <a class="text-dark hover:text-primary mb-4   text-lg font-semibold  ">
                    {{$institute->name??''}}
                </a>
            </h3>


        </div>

    </div>
</div>

