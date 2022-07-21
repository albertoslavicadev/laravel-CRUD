@extends('layouts.app') @section('content') @include('alerts')
    <table class="table car">
        <thead>
            <th>Brand</th>
            <th>Model</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $car->brand }}</td>
                <td> {{ $car->model }}</td>
                <td class="buttons">
                    <form class="buttons-form" action="{{ route('cars.edit', $car) }}" method="POST"> @csrf @method('GET') <button
                        type="submit" class="btn btn-primary">Edit</button> </form>
                    <form class="buttons-form" action="{{ route('cars.destroy', $car) }}" method="POST"> @csrf @method('DELETE') <button
                    type="submit" class="btn btn-danger">Delete</button> </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
