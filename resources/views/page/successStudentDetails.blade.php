<x-guest-layout>


    <div class="py-4">
        <div class="container">

            <div class="shadow-lg rounded border p-4">
                <div class="row">
                    <!-- Student Image Section -->
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{$data->picture ?? ''}}" alt="" class="img-fluid rounded">
                    </div>

                    <!-- Student Information Section -->
                    <div class="col-12 col-md-8">
                        <h5 class="text-center mb-4">Student Information</h5>
                        <ul class="list-unstyled">
                            <li class="border p-3 rounded mb-2 d-flex">
                                <strong class="w-50">Registration No:</strong>
                                <span class="w-50">{{$data->registration ?? 'N/A'}}</span>
                            </li>
                            <li class="border p-3 rounded mb-2 d-flex">
                                <strong class="w-50">Student Name:</strong>
                                <span class="w-50">{{$data->name ?? 'N/A'}}</span>
                            </li>
                            <li class="border p-3 rounded mb-2 d-flex">
                                <strong class="w-50">Father's Name:</strong>
                                <span class="w-50">{{$data->fathers_name ?? 'N/A'}}</span>
                            </li>
                            <li class="border p-3 rounded mb-2 d-flex">
                                <strong class="w-50">Mother's Name:</strong>
                                <span class="w-50">{{$data->mothers_name ?? 'N/A'}}</span>
                            </li>
                            <li class="border p-3 rounded mb-2 d-flex">
                                <strong class="w-50">Gender:</strong>
                                <span class="w-50">{{$data->gender->key ?? 'N/A'}}</span>
                            </li>
                            <li class="border p-3 rounded mb-2 d-flex">
                                <strong class="w-50">Present Address:</strong>
                                <span class="w-50">{{$data->present_address ?? 'N/A'}}</span>
                            </li>
                            <li class="border p-3 rounded mb-2 d-flex">
                                <strong class="w-50">Student Thana:</strong>
                                <span class="w-50">{{$data->permanent_address ?? 'N/A'}}</span>
                            </li>
                            <li class="border p-3 rounded mb-2 d-flex">
                                <strong class="w-50">Student District:</strong>
                                <span class="w-50">{{$data->permanent_address ?? 'N/A'}}</span>
                            </li>
                            <li class="border p-3 rounded mb-2 d-flex">
                                <strong class="w-50">Institute Name:</strong>
                                <span class="w-50">{{$data->center->name ?? 'N/A'}}</span>
                            </li>
                            <li class="border p-3 rounded mb-2 d-flex">
                                <strong class="w-50">Course Name:</strong>
                                <span class="w-50">{{$data->subject->name ?? 'N/A'}}</span>
                            </li>
                            <li class="border p-3 rounded mb-2 d-flex">
                                <strong class="w-50">Course Duration:</strong>
                                <span class="w-50">{{$data->course_duration ?? 'N/A'}}</span>
                            </li>
                            <li class="border p-3 rounded mb-2 d-flex">
                                <strong class="w-50">Session:</strong>
                                <span class="w-50">{{$data->session->name ?? 'N/A'}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-guest-layout>
