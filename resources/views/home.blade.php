@extends('layouts.app')
<!DOCTYPE html>
<html>
      <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootsrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <title>Laravel</title>
      </head>
@section('content')
<body>

<div class="container">
<div class="row justify-content-left">
    
     <div class ="col-md-9">

          @foreach ($articole as $object)
          
          @if($object->status=='PUBLISHED')
          <div class="card">
              <div class="card-header">
                {{$object->status}}
                {{$object->date}}
               </div>

     <div class="card-body">
                <h5 class="card-title">{{$object->title}}</h5>
                <p class="card-text">{{$object->concent}}</p>
     </div>
     <br>
     @endif
     @endforeach
</div>
    <div class="col-md-3">
    <h3>tags</h3>
    @foreach($tags as $object)
          <button class="btn btm-primary" type ="submit">{{$object->name}}</button>
           @endforeach
          </div>
    </div>
    </body>
    </html>

    @endsection

