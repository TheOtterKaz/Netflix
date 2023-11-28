@extends('layouts.app')

@section('title', 'Page accueil Netflix')

@section('contenu')
<form method="post" action="{{ route('usagers.login') }}" class="h-100 w-100">

    <div class="row h-100 w-100 d-flex justify-content-center align-items-center">
        <div class="card h-25 w-25 p-0 m-0">
        
            <div class="card-header text-center bg-info">
                <h4 class="p-0 m-0 text-warning">Formulaire de connexion</h4>
            </div>
        
            <div class="card-body d-flex flex-column justify-content-evenly align-items-center bg-danger p-0 m-0">
            @csrf
                            
                <div class="form-group h-100 d-flex justify-content-evenly flex-column">    
                            
                    <!-- Usager -->
                    <div>
                        <input type="email" name="email" id="emailUser" class="form-control border border-1 border-info bg-success text-white" placeholder="Courriel">
                    </div>
                    
                    <!-- Paüss woürd -->
                    <div>
                        <input type="password" name="password" id="password" class="form-control border border-1 border-info bg-success text-white" placeholder="Mot de passe">
                    </div>                       
        
                </div>
            </div>
                
            <div class="card-footer d-flex justify-content-evenly align-items-center bg-warning ">
                    <button type="submit" class="btn btn-primary border border-3 border-success w-50">Se connecter</button>
                    <button type="reset" class="btn btn-primary border border-3 border-success w-25">Annuler</button>
            </div>
        </div>
    </div>
</form>     
@endsection