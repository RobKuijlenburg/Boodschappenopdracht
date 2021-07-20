@extends ('layout/app')

@section('content')

<form action="/groceries" method="post">
@csrf
<div>
    <label for="name">Naam</label>
    <input type="text" name="name" id="name" required>
    @if ($errors->has('name'))
    <p class="help is-danger">{{ $errors->first('name') }}</p>
    @endif
</div>
<div>
    <label for="number">Aantal</label>
    <input type="text" name="number" id="number" required>
    @if ($errors->has('number'))
    <p class="help is-danger">{{ $errors->first('number') }}</p>
    @endif
</div>
<div>
    <label for="price">Prijs</label>
    <input type="text" name="price" id="price" required>
    @if ($errors->has('price'))
    <p class="help is-danger">{{ $errors->first('price') }}</p>
    @endif
</div>
<button type="submit">Submit</button>
</form>

@endsection