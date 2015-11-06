<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>


<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
</ul>
<nav>
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a>
            </li>
        </ul>
    </div>
</nav>


<div class="row">
    <div class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a href="#test1">Test 1</a></li>
            <li class="tab col s3"><a href="#test2">Test 2</a></li>
            <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li>
            <li class="tab col s3"><a href="#test4">Test 4</a></li>
        </ul>
    </div>
    <div id="test1" class="col s12">

        <div class="row">

            {!! Form::open(array('url' => 'savearticle'))  !!}
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div class="row">

                <div class="input-field col s6">
                    <input name="title" type="text" id="title">
                    <label for="title">Title</label>
                </div>



                <div class="input-field col s6">
                    <input name="body" type="text">
                    <label for="last_name">Body</label>
                </div>
            </div>


            <button type="submit" class="waves-effect waves-light btn">submit</button>


            {!! Form::close() !!}


        </div>

    </div>
    <div id="test2" class="col s12">Test 2</div>
    <div id="test3" class="col s12">Test 3</div>
    <div id="test4" class="col s12">Test 4</div>
</div>


<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></i></a></li>
        <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
        <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
        <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
</div>

@foreach($dataes as $data)
    {{$data->title}} <br/>
    {{$data->body}}

    @endforeach


<script>
    $('.fixed-action-btn').openFAB();
</script>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
