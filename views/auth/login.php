<h1 class="page-name">login</h1>
<p class="page-description">Accses to Admin controller</p>

<form class="login__form" method="POST" action="/login">
    <div class="login__field">
        <label for="email">Email</label>
        <input
        type="email"
        id="email"
        placeholder="Your email"
        name="email"
        />
    </div>
    <div class="login__field">
        <label for="password">Password</label>
        <input
        type="password"
        id="password"
        placeholder="Your password"
        name="password"
        />
    </div>
    <input type="submit" class="button" value="Login">
</form>

<div class="actions">
    <a href="/create-account">Register</a>
    <a href="/forgot">Forget your password</a>
</div>
