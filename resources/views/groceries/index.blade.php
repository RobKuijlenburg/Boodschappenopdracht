@extends ('layout/app')

@section('content')
    <table>
        <tr class='header'>
            <td>Product</td>
            <td>Prijs</td>
            <td>Aantal</td>
            <td>Subtotaal</td>
            <td>Edit</td>
    </tr>

   <!-- needs foreach -->
    @foreach ($groceries as $grocery)
    <tr>
            <td> {{$grocery->name}} </td>
            <td class='productPrice'> {{$grocery->price}} </td>
            <td class='productQuantity'>  {{$grocery->number}}  </td>
            <td class='productTotalCost'> {{$grocery->price * $grocery->number}} </td>
            <!-- edit form maken voor button vormgeving -->
            <td><a href="/groceries/{{$grocery->id}}/edit">Edit</a></td>
            <td><form action="/groceries/{{$grocery->id}}" method="post">
                @csrf
                @method('DELETE')
            <button type="submit">Delete</button>
            </form></td>
        </tr>
    @endforeach

    <tr>
            <td class='totaal' colspan=3>Totaal</td>
            <td class='totalCost'></td>
    </tr>
</table>
@endsection