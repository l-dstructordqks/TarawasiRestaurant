<h1 class="page-name">Recover account</h1>
<p class="page-description">Write your new password</p>

<form class="login__form" method="POST" action="/recover">
    <div class="login__field">
        <label for="password">Password</label>
        <input
        type="password"
        id="password"
        placeholder="Your password"
        name="password"
        />
    </div>
    <div class="login__field">
        <label for="password">Confirm your password</label>
        <input
        type="password"
        id="password2"
        placeholder="Repeat your password"
        name="password2"
        />
    </div>
    <input type="submit" class="button" value="Reestablecer password">
</form>

<div class="actions">
    <a href="/create-account">Register</a>
    <a href="/login">Login</a>
</div>
