@extends('frontend.layout.main')
@section('section')
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <div class="container">
        <br>
        <h3 class="text-center">This is contact page</h3>
        <br> <br>
        <form method="post" action="{{ url('/') }}/contact">
            @csrf
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
            </div>

            <div class="form-row">
                <div class="form-group col-md-7">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" id="city" required>
                </div>
                <div class="form-group col-md-5">
                    <label for="state">State</label>
                    <select name="state" id="state" class="form-control" required>
                        <option selected>Pakistan</option>
                        <option>India</option>
                    </select>
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Send</button>
        </form> <br>
    </div>
@endsection
