@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Game Selection</div>

                <div class="panel-body">
					<div class="form-group">
					{{ Form::open(array('route' => 'startGame')) }}
					<select class="form-control input-sm" name="drop_down">
						@foreach($categories as $cats)
							<option value="{{$cats->id}}">{{$cats->startPage . ' -> ' . $cats->goalPage }}</option>
						@endforeach  
					</select>
					{{ Form::submit('Play!') }}
					{{ Form::close() }}
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection

<script>
function switch(var id)
{	
	alert(id);
}
</script>

