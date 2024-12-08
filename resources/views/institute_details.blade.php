<x-frontend-layouts>

    <div class="mt-5">
        <div class="container">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="{{$data->director_image}}" alt="" class="img-fluid rounded">
                        </div>
                        <div class="col-md-8">
                            <div class="text-center mb-4">
                                <h2 class="fw-bold">{{$data->name ?? ''}}</h2>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item d-flex align-items-center">
                                    <span class="fw-bold w-50">Email</span>
                                    <span class="px-2">:</span>
                                    <span>{{$data->email ?? 'N/A'}}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <span class="fw-bold w-50">Director Name</span>
                                    <span class="px-2">:</span>
                                    <span>{{$data->owner_name ?? 'N/A'}}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <span class="fw-bold w-50">Address</span>
                                    <span class="px-2">:</span>
                                    <span>{{$data->address ?? 'N/A'}}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <span class="fw-bold w-50">District</span>
                                    <span class="px-2">:</span>
                                    <span>{{ \App\Lib\Geo::districts()[$data->district]['name'] ?? '' }}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <span class="fw-bold w-50">Upazilla</span>
                                    <span class="px-2">:</span>
                                    <span>{{ \App\Lib\Geo::upazillas()[$data->upazilla]['name'] ?? '' }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-frontend-layouts>
