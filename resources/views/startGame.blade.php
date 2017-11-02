@extends('layouts.app')

@section('content')
<div class="container">
<p> There no page </p>

<div id=test>
<iframe id=iframe src="https://da.wikipedia.org/wiki/Adolf_Hitler?printable=yes" height="600" width="800" onLoad="alert('document.referrer');">
</div>
</div>
@endsection