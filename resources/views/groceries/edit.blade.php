@extends ('layout/app')

@section('content')

<form action="/groceries/{{$grocery->id}}" method="post">
@csrf
@method('PUT')
<div>
    <label for="name">Naam</label>
    <input type="text" name="name" id="name" value="{{$grocery->name}}" required>
</div>
<div>
    <label for="number">Aantal</label>
    <input type="text" name="number" id="number" value="{{$grocery->number}}" required>
</div>
<div>
    <label for="price">Prijs</label>
    <input type="text" name="price" id="price" value="{{$grocery->price}}" required>
</div>
<button type="submit">Submit</button>
</form>

@endsection