@extends('layouts.base')

@section('title', 'Utilisateurs')

@section('content')
<div class="panel panel-default">
  <table class="table table-hover">
      <thead>
      <tr>
          <th>Nom</th>
          <th>Email</th>
          <th>Admin</th>
          <th>Supprimer</th>
          <th>Droit</th>
      </tr>
      </thead>
      @foreach ($users as $user)
          <tbody>
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            @if($user->is_admin)
              <td>Oui</td>
            @else
              <td>Non</td>
            @endif
            <td><a href="{{url('user' . "/" . $user->id ."/delete")}}" class="button btn btn-light">Supprimer</a></td>
            <td><a href="{{url('user' . "/" . $user->id ."/toggleactive")}}" class="button btn btn-light">Changer</a></td></tr>
          </tbody>
      @endforeach
  </table>
</div>
@endsection
