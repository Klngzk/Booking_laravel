 <style>
     .card{
         margin: 20px;
     }
</style>
@extends('layouts.myapp')
@section('content')



<div class="searchf">


    {!! Form::open(['route' => 'search.index' , 'method' => 'GET']) !!}
    <div class="form-group">
        <label for="city"> City</label>
        <select class='form-select' name="city" id="city">

            @foreach($city as $city)
            <option value="{{$city}}">{{$city}}</option>
            @endforeach

        </select>
        <br>

        <label for="type">Type</label>
        <select class='form-select' name="type" id="type">
            @foreach($type as $type)
            <option value="{{$type}}">{{$type}}</option>
            @endforeach

        </select>
        <br>
    {{ Form::Submit('submit', ['class' => 'btn btn-primary'])}}
    </div> 
    <br>

<div class="row">
    @forelse($hebergement as $post)


    <div class="card col-md-5 " >
    <img class="card-img-top" src="storage/{{$post->photo3}}" alt="Card image cap">
        <div class="card-body">
            @if($post->available == 'yes')
                <h6 class="card-subtitle mb-2 " style="color: green;">Available</h6>
            @else
                <h6 class="card-subtitle mb-2 "style="color: red;">Not Available</h6>
            @endif
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <a href="{{route('articles.show',$post->id)}}" class="btn btn-primary">Check it out</a>
        </div>
    </div>



    @empty
    No search
    @endforelse
    
</div>
</div>
@endsection