@include('component.header')
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Julyana F.H</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url ('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('profile')}}">My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url ('univ')}}">My University</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>

        @yield ('content')

</body>
</html>