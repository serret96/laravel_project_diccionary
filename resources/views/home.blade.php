
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="/src/css/jquery-jvectormap-1.2.2.css">
@extends('master')
@section('content')
    <section class="content-header">
        <h1>
            Dashboard <small></small>
        </h1>

            {{--<h1>--}}
            {{--Page Header here        <small></small>--}}
            {{--</h1>--}}

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>
    <section class="content">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>      <?php

                            session_start();
                            $counter_name = "counter.txt";
                            // Check if a text file exists. If not create one and initialize it to zero.
                            if (!file_exists($counter_name)) {
                                $f = fopen($counter_name, "w");
                                fwrite($f,"0");
                                fclose($f);
                            }
                            // Read the current value of our counter file
                            $f = fopen($counter_name,"r");
                            $counterVal = fread($f, filesize($counter_name));
                            fclose($f);
                            // Has visitor been counted in this session?
                            // If not, increase counter value by one
                            if(!isset($_SESSION['hasVisited'])){
                                $_SESSION['hasVisited']="yes";
                                $counterVal++;
                                $f = fopen($counter_name, "w");
                                fwrite($f, $counterVal);
                                fclose($f);
                            }

                            echo $counterVal;
                            ?></h3>

                        <p>Usuaris corrents</p>
                    </div>
                    <div class="icon" style="padding-top: 10px">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{$result = \App\User::count()}}</h3>

                        <p>Usuaris Registrats</p>
                    </div>
                    <div class="icon" style="padding-top: 10px">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{$result = \App\Dictionary::count()}}</h3>

                        <p>Paraules</p>
                    </div>
                    <div class="icon" style="padding-top: 10px">
                        <i class="ion ion-bookmark"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{$result = \App\Translation::count()}}</h3>

                        <p>Traduccions</p>
                    </div>
                    <div class="icon" style="padding-top: 10px">
                        <i class="ion ion-android-textsms"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>


    </section>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
        integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>



