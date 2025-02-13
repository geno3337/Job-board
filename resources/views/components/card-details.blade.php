<div class="container py-5">
    <!-- Job Post Start -->
    <div class="card shadow border-0 rounded-3 p-4">
        <div class="row justify-content-between">
            <!-- Left Content -->
            <div class="col-lg-8">
                <!-- Job Title -->
                <div class="mb-4">
                    <h4 class="fw-bold">{{$job->jobRole}}</h4>
                </div>

                <!-- Job Description -->
                <div class="mb-4">
                    <h5 class="text-primary">Job Description</h5>
                    <p>
                        {{-- It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using "Content here, content here,"
                        making it look like readable English. --}}
                        {{$job->discription}}
                    </p>
                </div>

                <!-- Required Skills -->
                <div class="mb-4">
                    <h5 class="text-primary">Required Knowledge, Skills, and Abilities</h5>
                    <ul class="list-unstyled ps-3">
                        <li><i class="bi bi-check-circle text-success me-2"></i>System Software Development</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Mobile Application in iOS/Android/Tizen or other platforms</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Research and code, libraries, APIs, and frameworks</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Strong knowledge of the software development life cycle</li>
                        <li><i class="bi bi-check-circle text-success me-2"></i>Strong problem-solving and debugging skills</li>
                    </ul>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-lg-4">
                <div class="card border-2 p-4 mb-4">
                    <h5 class="text-primary mb-3">Job Overview</h5>
                    <ul class="list-unstyled">
                        <li><strong>Posted date:</strong> <span>12 Aug 2019</span></li>
                        <li><strong>Location:</strong> <span>{{$job->location}}</span></li>
                        <li><strong>Vacancy:</strong> <span>02</span></li>
                        <li><strong>Job nature:</strong> <span>Full time</span></li>
                        <li><strong>Salary:</strong> <span>{{$job->salary}} yearly</span></li>
                        <li><strong>Application date:</strong> <span>12 Sep 2020</span></li>
                    </ul>
                    <div class="text-center mt-3">
                        <button type="button" class="btn btn-primary w-100">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Job Post End -->
</div>
