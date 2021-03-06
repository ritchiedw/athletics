<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Athletics Club') }}</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
        </script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')
        </div>

        <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script>

                                               $(function () {
                                                   $('#deleteAthleteModal').on("click", function (e) {
                                                       var urlid = 'form[action$=:ID]';

                                                       urlid = urlid.replace(":ID", $("#modal-athlete-id").html());
                                                       //alert(urlid);
                                                       //alert($(urlid).html());
                                                       var athurl = '{{ URL::route('athletes.show', ":ID") }}';
                                                       athurl = athurl.replace(":ID", $("#modal-athlete-id").html());
                                                       alert(athurl);
                                                       $.ajax({
                                                           method: "DELETE",
                                                           url: athurl
                                                       });
                                                   });
                                               });



                                               /*
                                                var athurl = '{{ URL::route('athletes.show', ":ID") }}';
                                                athurl = athurl.replace(":ID", $("#modal-athlete-id").html());
                                                $.ajax({
                                                method: "DELETE",
                                                url: athurl
                                                });
                                                });
                                                */

                                               $(function () {
                                                   $('#myModal').on("show.bs.modal", function (e) {
                                                       //alert($(e.relatedTarget).data('athid'));
                                                       $("#myModalLabel").html($(e.relatedTarget).data('title'));
                                                       $("#athlete-title").html($(e.relatedTarget).data('title'));
                                                       //$("#athlete-id").html($(e.relatedTarget).data('athid'));
                                                       $("#modal-athlete-id").html($(e.relatedTarget).data('athid'));
                                                   });
                                               });
        </script>


        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Please confirm you would like to delete <b><span id="athlete-title"></span></b> with <b><span id="modal-athlete-id">test</span></b>.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="deleteAthleteModal" >Delete Athlete</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
