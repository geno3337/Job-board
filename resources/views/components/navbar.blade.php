<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href={{ route('home') }}>Home</a>
                <a class="nav-link" href={{route('blog.index') }}>Blog</a>
                @auth
                    <a class="nav-link" href={{ route('logout') }}>logout</a>
                    @if (Auth()->user()->roles == 'employer')
                        <a class="nav-link" href={{ route('storeJob') }}>Add Job</a>
                        <a class="nav-link" href={{ route('employer.dashboard') }}>Dashboard</a>
                    @endif
                    @if (Auth()->user()->roles == 'admin')
                        <a class="nav-link" href={{ route('admin.dashboard') }}>Dashboard</a>
                    @endif
                    {{-- <a class="nav-link" href={{route('changePassword')}}>change-password</a> --}}
                @else
                    <a class="nav-link" href={{ route('registration') }}>register</a>
                    <a class="nav-link" href={{ route('login') }}>login</a>
                @endauth
            </div>
            @auth
                <a href={{ route('profile') }}>
                    <div class="mX-2 p-1 border">{{ auth()->user()->name }}</div>
                </a>
            @endauth
        </div>
    </div>
</nav>
