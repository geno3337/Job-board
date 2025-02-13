<div class="container my-5">
    <div class="row justify-content-center ">
        <!-- Job Card -->
        @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch my-3">
                <div class="card shadow border-0 rounded-3 ">
                    {{-- <!-- Card Header -->
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <div class="fw-bold text-primary">{{$post->title}}</div>
                    </div> --}}

                    <!-- Card Body -->
                    <div class="card-body">
                        <h5 class="card-title text-dark fw-bold">{{$post->title}}</h5>
                        <p class="card-text text-muted">
                            You will be responsible for the visual design for multi-device. Understand basic design
                            principles, user journey, ideation, wireframing, etc.
                        </p>

                        <!-- Tags Section -->
                        {{-- <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-row align-items-center">
                                <span class="badge bg-success text-white me-2 py-2 px-3">Full Time</span>
                                <span class="badge bg-primary text-white py-2 px-3">Min. {{ $job->experience }}
                                    year</span>
                            </div>
                        </div> --}}

                        <!-- Buttons -->
                        <div class="d-flex justify-content-end">
                            {{-- <button type="button" class="btn btn-primary w-45">Apply Now</button> --}}
                            <button type="button"
                                {{-- onclick="window.location='{{ route('cardDetail',$job->id) }}'" --}}
                                class="btn btn-outline-primary w-45">
                                More
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
