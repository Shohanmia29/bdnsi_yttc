<x-frontend-layouts>


    <section id="courses">
        <div class="d-flex justify-content-end py-3">
            <div>
                <form action="{{ route('all_course') }}" method="get">
                    <div class="card-body">
                        <div class="mb-3 input-group">
                            <input
                                name="course_name"
                                value="{{ request('course_name') }}"
                                class="form-control"
                                placeholder="Enter Course name"
                                aria-label="Course name"
                            />
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-search"></i>
                                Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="container courses-list">
            <div class="row">
                @forelse($courses as $course)
                    <div class="col-lg-3 flip-box p-2 ">
                        <x-course :subject="$course" />
                    </div>
                @empty
                    <div class="font-bold text-red-500">
                        Not Found
                    </div>
                @endforelse

            </div>
            <div class="py-3 d-flex justify-content-end">
                {{$courses->links()}}
            </div>
        </div>
    </section>








</x-frontend-layouts>
