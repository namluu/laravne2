login form
<form method="POST" action="{{ route('login.auth') }}">
    @csrf
    <input type="email" class="form-control" placeholder="Email" name="email">
    <input type="password" class="form-control" placeholder="Password" name="password">
    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
</form>
