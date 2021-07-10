@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EbreDic</title>

</head>
<body>
@section('content')
    <div style="margin-left: 20ch;margin-right: 20ch;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3>Esta accedint a ebredic.com</h3>
            </div>
        </div>
    </div>
        </div>


<div class="container">
    <Form method="get" action="search" class="navbar-form navbar-left" role="search">
<h3><small>Cercador de paraules</small></h3>
    <div class="input-group custom-search-form">
        <input type="text" class="form-control" name="term" placeholder="Search...">
    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"></i>
        </button>
    </span>
    </div>
    </Form>
    </div>
    <br>
@endsection

</body>
</html>

