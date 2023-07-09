<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulaire d'inscription</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/testc.css') }}">
</head>


<body class="forms">
    @can('create', App\Models\User::class)
    <form method="POST" class="form" action="{{ route('register') }}">
        @csrf
        <div class="barre">
        			<h2>INSCRIPTION</h2>
        </div>
        <!-- Name -->
        <div class="laire">
            <div class=di1>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="col long" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="di3">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="col long" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="di4">

                <x-input-label for="password"  :value="__('Password')" />

                <x-text-input id="password"
                                class="col"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="di5">
                <x-input-label for="password_confirmation" :value="__('Confirm')" />

                <x-text-input id="password_confirmation" class="col"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="already underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Déjà inscrit ?') }}
            </a>
        </div>
        <div class="enr">
            <button type="submit" class="hm">S'inscrire</button>

        </div>

    </form>
    @endcan

</body>
