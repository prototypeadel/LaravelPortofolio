@extends('adminlte::page')

@section('title', 'Projets')

@section('content_header')
    <h1> Mes Projets</h1>
@stop

@section('content')
    <p> Projets </p>

    <div>
            <a href="{{route('projets.create')}}" class="btn btn-success"> ajouter un post</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">titre</th>
                <th scope="col"> contenu</th>
                <th scope="col">auteur</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                {{-- sa sest compact --}}
                @foreach($projets as $element)
              <tr>
                <td scope="row">{{$loop->iteration}} </td>
                
                <td>{{$element->titre}}</td>
                <td> {{$element->contenu}}</td>
              <td></td>
              
                <td><a href="{{route('projets.show', [ 'projet'=>$element->id ] )}}" class="btn btn-success"> show</a></td>
                {{-- //                    projets= url dans web.php resource et show sest la fonction --}}
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@stop