@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Play!</div>

                <div class="panel-body">
					<iframe id=iframe src="https://da.wikipedia.org/wiki/Adolf_Hitler?printable=yes" height="600" width="800" onLoad="alert('document.referrer');">  
				</div>
            </div>
        </div>
    </div>
</div>
@endsection