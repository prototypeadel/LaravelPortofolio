@extends('adminlte::page')

@section('title', 'Projets')

@section('content_header')
    <h1> Mon Projet</h1>
@stop

@section('content')
    <p> editer projet </p>



    <div class="row">
            <div class="col-md-8">
                <div class="box">
    
                    <div class="box-body">
    
                        <form action="{{route('projets.update',['projet'=>$projet->id])}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="titre">Titre</label>
                            
                          @if($errors->has('titre'))
                          <div class="text-danger">Le champs titre est obligatoire</div>
                          @endif

                        <input type="text" name="titre" id="titre" class="form-control {{ $errors->has('titre')?'border-danger':''}}" value="{{old('titre',$projet->titre) }}" >
                        
                        </div>
                        <div class="form-group">
                          <label for="contenu">Contenu du post</label>
                          @if($errors->has('contenu'))
                          <div class="text-danger">Le champs contenu est obligatoire</div>
                          @endif
                          <textarea class="form-control {{ $errors->has('contenu')?'border-danger':''}}" name="contenu" id="contenu" rows="3">{{old('contenu',$projet->contenu)}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Enregistrer</button>
                        </form>

                    </div>
                </div>
            </div>
    
    
        </div>
@stop