<?php
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
?>
<h1>backend index view</h1>
<p>Hello: <?= $user->name ?></p>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-primary btn-block">logout</button>
</form>