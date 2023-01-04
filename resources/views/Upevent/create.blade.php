<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="#">PHP Group</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto topnav">
            <li class="nav-item">
                <a class="nav-link" href="../Admin">Menu</a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="nav-link btn btn-danger text-white" type="button" href="route('logout')"
                       onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </li>
        </ul>
    </div>

</nav>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div>
    <form action="/Upevent" method="post">
        @csrf
        <div class="form-group">
            <label for="id">id :</label>
            <input type="text" class="form-control" name="id" id="id" value=""
                   placeholder="Enter id">
            <span style="color: red">

            </span>
        </div>
        <div class="form-group">
            <label for="date">date :</label>
            <input type="text" class="form-control" id="date" name="date"
                   value="" placeholder="Enter date">
            <span style="color: red">

            </span>
        </div>
        <div class="form-group">
            <label for="description">description :</label>
            <input type="text" name="description" value="description"  class="form-control"
                   id="description"    placeholder="Enter description ">
            <span style="color: red">

            </span>
        </div>
        <a href="/Upevent" id="btn_back" class="btn btn-success float-left">Back</a>
        <button type="submit" name="addEvent"
                class="btn btn-primary float-right" id="btn-submit">
            Add Event
        </button>
    </form>
</div>


</body>
</html>
