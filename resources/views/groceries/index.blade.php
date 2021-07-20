@extends ('layout/app')

@section('content')
    <table>
        <tr class='header'>
            <td>Product</td>
            <td>Prijs</td>
            <td>Aantal</td>
            <td>Subtotaal</td>
    </tr>

   <!-- needs foreach -->
    @foreach ($grocery as $grocery)
    <tr>
            <td> {{$grocery->name}} </td>
            <td class='productPrice'> {{$grocery->price}} </td>
            <td class='productQuantity'>  {{$grocery->number}}  </td>
            <td class='productTotalCost'> {{$grocery->price * $grocery->number}} </td>
        </tr>
    @endforeach

    <tr>
            <td class='totaal' colspan=3>Totaal</td>
            <td class='totalCost'></td>
    </tr>
</table>
@endsection