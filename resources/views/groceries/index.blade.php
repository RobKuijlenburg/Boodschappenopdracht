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


    @foreach ($groceries as $grocery)
    <tr>
            <td> {{$grocery->name}} </td>
            <td class='productPrice'> {{$grocery->price}} </td>
            <td class='productQuantity'>  {{$grocery->number}}  </td>
            <td class='productTotalCost'> {{$grocery->price * $grocery->number}} </td>
            <td><form action="{{route('groceries.edit', $grocery->id)}}" method="get">
                @csrf
            <button type="submit">Edit</button>
            </form>
            </td>
            <td><form action="{{route('groceries.destroy', $grocery->id)}}" method="post">
                @csrf
                @method('DELETE')
            <button type="submit">Delete</button>
            </form></td>
        </tr>
    @endforeach


</table>
@endsection