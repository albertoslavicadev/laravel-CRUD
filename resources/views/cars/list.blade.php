@extends('layouts.app') @include('alerts')
@section('content')
    <table class="table car">
        <thead>
            <th>Brand</th>
            <th>Model</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td class="buttons"> 
                        <form class="buttons-form" action="{{ route('cars.edit', $car) }}" method="POST"> @csrf @method('GET') <button
                                type="submit" class="btn btn-primary">Edit</button> </form>
                        <form class="buttons-form" action="{{ route('cars.show', $car) }}" method="POST"> @csrf @method('GET') <button
                            type="submit" class="btn btn-primary">Show</button> </form>
                        <form class="buttons-form" action="{{ route('cars.destroy', $car) }}" method="POST"> @csrf @method('DELETE') <button
                            type="submit" class="btn btn-danger">Delete</button> </form>
                    </td>
                    </form>


                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
