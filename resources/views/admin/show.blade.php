@extends('adminlte::page')

@section('title', 'show')

@section('content_header')
    <h1> Mes Projets</h1>
@stop

@section('content')
    <p> Projet numéro </p>

   <div>

            <p></p>
   <p>{{$projet-> id}})</p>
            <h3>{{ $projet->titre }}</h3>
            <h4>{{$projet->contenu}}</h4>
                                            {{-- id dans l url,, parametre --}}

            <a href="{{route('projets.edit',['projet'=>$projet->id])}}" class="btn btn-warning text-white"> editer </a>

<form action="{{route('projets.destroy', [ 'projet'=> $projet->id])}}" method="post">
        @csrf
        @method('DELETE')
            <button type='submit' class="btn btn-success"> supprimer </button>

</form>
            
       
   </div>
@stop