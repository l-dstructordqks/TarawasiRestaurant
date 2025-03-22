<h1 class="page-name">Recover your password</h1>
<p class="page-description">Confirm syour identity to recover your password</p>

<form class="login__form" method="POST" action="/forgot">
    <div class="login__field">
        <label for="email">Email</label>
        <input
        type="email"
        id="email"
        placeholder="Your email"
        name="email"
        />
    </div>
    
    <input type="submit" class="button" value="Send instructions">
</form>

<div class="actions">
    <a href="/create-account">Register</a>
    <a href="/login">Login</a>
</div>
