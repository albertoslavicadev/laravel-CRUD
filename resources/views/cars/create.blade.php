@include('alerts') @include('errors')

<form action="{{ route('cars.store') }}" method="POST"> 
    @csrf 
    <input type="text" name="brand" placeholder="Brand">
    <input type="text" name="model" placeholder="model"> 
    <button type="submit">Submit</button> 
</form>
