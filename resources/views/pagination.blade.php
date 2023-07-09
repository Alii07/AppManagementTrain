<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="{{ asset('css/testc.css') }}">
</head>

@foreach($user as $users)
<tr>
<td>{{$users->name}}</td>
<td>{{$users->email}}</td>
</tr>
@endforeach


<div class="defileur">
@if (! $user->onFirstPage())
    <!-- Afficher uniquement le lien "Next" -->

    <!-- Afficher uniquement le lien "Previous" -->
    <a href="{{ $user->previousPageUrl() }}" rel="prev" class="defil de1">Précédent</a>
@endif
<div class="espace">
<p>  </p>
</div>
@if ($user->hasMorePages())
        <a href="{{ $user->nextPageUrl() }}" rel="next" class="defil de2">Suivant</a>
@endif
</div>



