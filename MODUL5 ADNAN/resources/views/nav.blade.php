@guest
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a class="nav-link" style="color: white;" href="/">Home</a>
                </div>
                <div class="d-flex" role="search">
                    <a class="nav-link" href="/login">Login</a>
                </div>
            </div>
        </div>
    </nav>
@else
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-3">
                    <a class="nav-link" style="color: white;" href="/">Home</a>
                </div>
            </div>
            <form class="d-flex justify-content-end" action="#">
                <div class="container">
                    <div class="row">
                        <div class="col-md-auto">
                            <a href="/addcar" class="btn btn-light text-dark">Add Car</a>
                        </div>
                        <div class="col-md-auto">
                            <div class="dropdown">
                                <a class="btn btn-light dropdown-toggle text-dark" href="" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item text-dark" href="/">Profile</a></li>
                                    <li><a class="dropdown-item text-dark" href="/logout">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </nav>
@endguest
