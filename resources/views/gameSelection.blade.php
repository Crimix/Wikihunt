@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Game Selection</div>

                <div class="panel-body">
					<div class="form-group">
  
					<select class="form-control input-sm" name="cDropDown">
						@foreach($categories as $cats)
							<option value="{{$cats->id}}">{{$cats->startPage . ' -> ' . $cats->goalPage }}</option>
						@endforeach  
					</select>
					</div>
					<button type="button" onclick="window.location='{{ route("startGame/ cDropDown']") }}'">Hit Me</button>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection

