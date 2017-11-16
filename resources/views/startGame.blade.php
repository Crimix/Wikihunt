@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Play!</div>
                <div class="panel-body">
					<iframe id=iframe src="{{$game->startPageUrl}}" height="600" width="800" onLoad="update();">  
				</div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
function update()
{
    count++;
}
</script>