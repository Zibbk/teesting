@extends('layouts.navbar')

@section('stylesheet')
    @parent
    <style type="text/css">
        .profile-img {
            width: 200px;
            height: 200px;
            border: 5px solid #ffffff;
            border-radius: 50%;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <img class="profile-img" src="/storage/{{ Auth::user()->avatar }}"> <br><br>
                        <p> Welcome {{ Auth::user()->name }}</p>
                        <p> This is your profile. Yeah, it's pretty much empty... like your brain. </p>
                        <p> According to your info, your email is {{ Auth::user()->email }} </p>
                    </div>
                </div>
            </div>
        </div>

        @if(Auth::user()->status == "admin")
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <p> CLick here if you would like to add, remove, edit your own song to the Trax
                                library. </p>

                            <div class="panel panel-default col-sm-1 col-lg-2 col-xs-3 col-md-3">
                                <a href="{{ route('songs.create') }}">
                                    <span class="glyphicon glyphicon-plus"
                                          style="color: orange; font-size: 30px; "></span>
                                </a>
                            </div>
                            <div class="panel panel-default col-sm-1 col-lg-2 col-xs-3 col-md-3">
                                <a href="{{ url('songs') }}">
                                    <span class="glyphicon glyphicon-pencil"
                                          style="color: orange; font-size: 30px; "></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection