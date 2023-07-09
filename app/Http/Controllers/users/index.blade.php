@foreach ($users as $user)
    <p>Nom d'utilisateur : {{ $user->username }}</p>
    <p>Email : {{ $user->email }}</p>
    <!-- Autres informations d'utilisateur à afficher -->
@endforeach
