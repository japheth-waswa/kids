<!DOCTYPE html>
<html>
    <head>
        <title>Kids</title>

        <link href='{{ asset("bootstrap/css/bootstrap.min.css") }}' rel='stylesheet' type='text/css'>
        <script src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("bower_components/webcomponentsjs/webcomponents-lite.min.js") }}"></script>

    </head>
    <body>

        <div class="container-fluid">

            <link href='{{ asset("assets/gencss/home.css") }}' rel='stylesheet' type='text/css'>
            <div class="row-fluid home-first-row">

                <div class="col-md-4">
                    <div class="row-fluid" home-first-row-column-one>
                        <link rel="import" href="{{asset("bower_components/paper-material/paper-material.html") }}">
                        <paper-material elevation='2'>
                            Characters here and image selected
                        </paper-material>
                    </div>
                </div>

                <div class="col-md-8">

                    <div class="row-fluid home-first-row-column-two">
                        commands,cli,action
                        <link rel="import" href="{{asset("bower_components/paper-input/paper-input.html") }}">
                        <paper-input label="Username" char-counter error-message="Invalid Input"></paper-input>
                    </div>

                </div>

            </div>
            
        </div>

    </body>
</html>
