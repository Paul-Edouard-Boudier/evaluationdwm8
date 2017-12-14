
{{--<nav class="navbar navbar-light bg-light">
    <ul>
        <lu><a href="{{url('/')}}">Home</a></lu>
        <lu><a href="{{url('/create')}}">Add a car</a></lu>
        <lu><a href="">TODO</a></lu>
    </ul>
</nav>--}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">Admin Pannel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar" id="navbarNav">
        <ul class="navbar-nav">
            {{--<li class="nav-item active">
                <a class="nav-link" href="{{url('/create/vehicle')}}">Add a vehicle to your garage</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/create/brand')}}">Add a brand to your garage</a>
            </li>--}}
            <li class="nav-item active">
                <a class="nav-link" href="#">Quick view</a>
            </li>
        </ul>
    </div>
</nav>