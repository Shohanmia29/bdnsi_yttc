<x-frontend-layouts>


    <section id="courses">
        <div class="pt-2">
            <div class="container py-4">
                <div class="card shadow-lg rounded mx-auto" style="max-width: 500px;">
                    <form action="{{route('all_course')}}" method="get">
                        <div class="card-body">
                            <div class="mb-3">
                                <input name="course_name" value="{{request('course_name')}}" class="form-control" placeholder="Enter Course name"/>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container courses-list">
           <div class="row">
               @forelse($courses as $course)
                   <div class="col-lg-3 flip-box p-2">
                   <x-course :subject="$course" />
                   </div>
               @empty
                   <div class="font-bold text-red-500">
                       Not Found
                   </div>
               @endforelse

           </div>

        </div>
    </section>








</x-frontend-layouts>
