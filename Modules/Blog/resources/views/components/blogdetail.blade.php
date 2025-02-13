<!-- Main Content -->
<div class="container my-5">
    <div class="row">
        <!-- Blog Content -->
        <div class="col-md-8">
            <article class="mb-4">
                <h2 class="mb-3">{{$post->title}}</h2>
                <p class="text-muted">By <strong>{{$post->author}}</strong> on <em>November 26, 2024</em></p>
                {{-- <img src="https://via.placeholder.com/800x400" alt="Post Image" class="img-fluid rounded mb-3" /> --}}

                <p>{{$post->body}}</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                    facilisi. Integer tincidunt, lacus eget feugiat venenatis, eros
                    justo faucibus turpis, vitae ultrices ligula magna sit amet nulla.
                </p>
                <p>
                    Aliquam erat volutpat. Sed ut fringilla nisi, sit amet facilisis
                    risus. Cras tincidunt, lectus ut luctus feugiat, purus mi facilisis
                    erat, a feugiat elit lorem a orci.
                </p>

            </article>
        </div>
    </div>
</div>
