
@extends('layouts.myapp')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<h1 class="display-3 pb-4" style="text-align: center;">My Reservation</h1>
<table class="table" style="width: 80%; margin:auto;">
<tr>
<th >Reservation Id</th>
    <th>Nom d'hebergement </th>
    <th>Type d'hebergement </th>
    <th>Check In </th>
    <th>Check Out</th>
    <th>Prix/Person</th>
    <th style="text-align: center;">Show/Cancel</th>
</tr>

@foreach($booking as $booking)
    @if($booking->user_id == Auth::user()->id)
    <td>{{ $booking->id }}</td>
    <td>{{ $booking->hebergement->title }}</td>
    <td style="text-align: center;">{{ $booking->hebergement->type }}</td>
    <td>{{ $booking->date_a }}</td>
    <td>{{ $booking->date_de }}</td>
    <td>{{ $booking->hebergement->prix }}</td>

    

  
    <td style="text-align: center;">
   
    <a class="btn btn-outline-info btn-sm" href="/articles/{{$booking->hebergement->id}}" style="margin-right: 15px;" >
        <i class="fas fa-th-large"></i> More info</a>
        {!! Form::open(['method' => 'DELETE','route' => ['booking.destroy', $booking->id],'style'=>'display:inline']) !!}
        <button type="submit" style="display: inline;" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i> Anuler</button>
        {!! Form::close() !!}
    </td>
</tr>
    @endif
@endforeach


@endsection

