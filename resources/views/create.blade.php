<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="{{ asset('css/testc.css') }}">
</head>

@foreach ($user as $users)
    <ul>
         <li>{{ $users->name }}</li>
         <li>{{ $users->email }}</li>
    </ul>
@endforeach
<nav>
    <ul class="pagination my-pagination-class">
        {{-- Liens de pagination --}}
        {!! $user->links() !!}
    </ul>
</nav>
