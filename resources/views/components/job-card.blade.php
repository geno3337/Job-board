<div class="container my-5">
    <div class="row justify-content-center ">
        <!-- Job Card -->
        @foreach ($jobs as $job)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch my-3">
                <div class="card shadow border-0 rounded-3 ">
                    <!-- Card Header -->
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <div class="fw-bold text-primary">Logo</div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <h5 class="card-title text-dark fw-bold">{{ $job->jobRole }}</h5>
                        <p class="card-text text-muted">
                            {{-- You will be responsible for the visual design for multi-device. Understand basic design
                            principles, user journey, ideation, wireframing, etc. --}}
                            {{$job->discription}}
                        </p>

                        <!-- Tags Section -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-row align-items-center">
                                <span class="badge bg-success text-white me-2 py-2 px-3">Full Time</span>
                                <span class="badge bg-primary text-white py-2 px-3">Min. {{ $job->experience }}
                                    year</span>
                            </div>
                            {{-- <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="green"
                                    class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                                </svg>
                            </div> --}}
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-primary w-45">Apply Now</button>
                            <button type="button"
                                onclick="window.location='{{ route('cardDetail',$job->id) }}'"
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
