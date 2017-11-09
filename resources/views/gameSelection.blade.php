@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Dropdown</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
                <div style="float:left;width:45%;" class="panel-heading">Game Selection</div>
                <div style="float:right;width:45%;" class="panel-heading">Game Selection</div>
            </div>
        </div>
    </div>
</div>
@endsection

