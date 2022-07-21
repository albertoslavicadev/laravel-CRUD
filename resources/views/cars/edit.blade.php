@extends('layouts.app') @section('content') @include('alerts') @include('errors')
    <form action="{{ route('cars.update', $car) }}" method="POST"> @method('PUT') 
        @csrf 
        <input type="text" name="brand"
            value="{{ $car->brand }}"> 
        <input type="text" name="model" value="{{ $car->model }}"> <button
            type="submit">Submit</button> 
        </form>
@endsection
