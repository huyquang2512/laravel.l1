@extends('pages.layout_main.index')
@section('a')
<div class="container">
<div class="row">
    <div class="jumbotron">
        <div class="container">
     <h1>Hello, Welcome to my Blog</h1>
     <p class="lead">Thankyou for being a part of my test blog</p>
     <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
    </div>
    </div>
</div><!-- end row -->
<div class="row">
 <div class="col-md-8">
@foreach ($dbb as $db)
<div class="post">
    <h3>{{$db->Title}}</h3>
    <p>{{$db->Content}}</p>
    <a href="#" class="btn btn-primary">Read more</a>
</div>
@endforeach
     
     <hr/>
 </div>
 <div class="col-md-3 col-md-offset-1">
     <h2>Sidebar</h2>
 </div>
</div>
</div>
<hr/><br/>
@endsection
