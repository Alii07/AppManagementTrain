<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulaire de connexion</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/testc.css') }}">
</head>


<body class="forms">

<nav>
	<ul class="liste marge">
		<li class="bout">
			<div class="radius whi"><a href="#" class='deco'>Agriculteur</a></div>
		</li>
		<li class="bout">
			<div class="radius whi2"><a href="#" class='deco'>Administrateur</a></div>
		</li>
	</ul>
</nav>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="form2">
        @csrf
        <div class="barre">
			<h2>CONNEXION</h2>
		</div>
        <!-- Email Address -->
        <ul class="laire2 liste">
        <li>
            <x-input-label for="email" :value="__('Email :')" />
            <x-text-input id="email" class="col wi" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

        </li>
        <!-- Password -->
        <li>
            <x-input-label for="password" :value="__('Mot de passe :')" />

            <x-text-input id="password" class="col wi"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </li>

        </ul>

    <div class="proche">

        <div class="marr block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Se souvenir de moi') }}</span>
            </label>
        </div>

        <br>

        <div>
            @if (Route::has('password.request'))
                <a class="questionnaire" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié?') }}
                </a>
            @endif
        </div>
        <br>
        <br>
        <br>

        <div class='co'>

             <button type="submit" class="hm">Se connecter</button>
        </div>
    </div>
    </form>


</body>
