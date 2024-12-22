<x-frontend-layouts>

    <div class="mt-5 bg-light">
        <div class="py-5">
            <div class="container">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="row g-0">
                        <!-- Image Section -->
                        <div class="col-md-4 p-4 text-center">
                            <img src="{{$data->director_image ?? ''}}" class="img-fluid rounded-circle border" alt="Director Image" style="max-width: 200px;">
                        </div>
                        <!-- Details Section -->
                        <div class="col-md-8 p-5">
                            <div class="text-center mb-4">
                                <h2 class="fw-bold">{{$data->name ?? ''}}</h2>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-c text-white rounded-2 mb-2 d-flex align-items-center">
                                    <span class="fw-bold w-50">Email</span>
                                    <span class="px-2">:</span>
                                    <span class="w-50">{{$data->email ?? 'N/A'}}</span>
                                </li>
                                <li class="list-group-item bg-c text-white rounded-2 mb-2 d-flex align-items-center">
                                    <span class="fw-bold w-50">Director Name</span>
                                    <span class="px-2">:</span>
                                    <span class="w-50">{{$data->owner_name ?? 'N/A'}}</span>
                                </li>
                                <li class="list-group-item bg-c text-white rounded-2 mb-2 d-flex align-items-center">
                                    <span class="fw-bold w-50">Address</span>
                                    <span class="px-2">:</span>
                                    <span class="w-50">{{$data->address ?? 'N/A'}}</span>
                                </li>
                                <li class="list-group-item bg-c text-white rounded-2 mb-2 d-flex align-items-center">
                                    <span class="fw-bold w-50">District</span>
                                    <span class="px-2">:</span>
                                    <span class="w-50">{{ \App\Lib\Geo::districts()[$data->district]['name'] ?? 'N/A' }}</span>
                                </li>
                                <li class="list-group-item bg-c text-white rounded-2 mb-2 d-flex align-items-center">
                                    <span class="fw-bold w-50">Upazilla</span>
                                    <span class="px-2">:</span>
                                    <span class="w-50">{{ \App\Lib\Geo::upazillas()[$data->upazilla]['name'] ?? 'N/A' }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-frontend-layouts>
