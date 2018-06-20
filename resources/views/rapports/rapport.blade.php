@extends('layouts.base')


@section('content')
    <table>
        <thead>
        <tr>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Prix</th>
        </tr>
        </thead>
        <tbody>
    @foreach($listeReservations as $reservation)
            <tr>
                <td style="width:30%;margin:1em;">
                    {{$reservation->date_debut_location}}
                </td>
                <td style="width:30%;margin:1em;">
                    {{$reservation->date_fin_location}}
                </td>
                <td style="width:30%;margin:1em;">
                    {{$reservation->prix_total}}
                </td>
                <td><button><a href="{{ url('/'.$user->id.'/generatePDF') }}">Générer une facture au format PDF</a></button></td>
            </tr>
    @endforeach
        </tbody>
    </table>
@endsection