<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="#">PHP Group</a>
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
    <h1>List of Event</h1>
    <table class="table table-striped">
     <thead>
        <tr>
            <th>date</th>
            <th>description</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($event as $e)
        <tr>
            <td>{{ $e->date }}</td>
            <td>{{ $e->description }} </td>
            <td><form method="get" action="{{ url('/Upevent/' . $e->id . '/edit') }}">
                    {{ csrf_field() }}
                    <input class="btn btn-secondary" type="submit" value="Update"/>
                </form>
            </td>
            <td>
            <form method="post" action="{{ url('Upevent', $e->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input class="btn btn-danger" type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
        </table>

    <a class="btn btn-primary" href="Upevent/create">Add Event</a>
    </body>
