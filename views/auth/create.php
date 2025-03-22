
<h1 class="page-name">Register</h1>
<p class="page-description">Fill this form to create a new admin account</p>

<form class="login__form" method="POST" action="/create-account">
    <div class="login__field">
        <label for="name">Name</label>
        <input
        type="text"
        id="name"
        placeholder="Your name"
        name="name"
        value="<?php echo s($user->name); ?>"
        />
    </div>
    <div class="login__field">
        <label for="surname">Surame</label>
        <input
        type="text"
        id="surname"
        placeholder="Your surname"
        name="surname"
        value="<?php echo s($user->surname); ?>"
        />
    </div>
    <div class="login__field">
        <label for="phone">Phone</label>
        <input
        type="tel"
        id="phone"
        placeholder="Your phone"
        name="phone"
        value="<?php echo s($user->phone); ?>"
        />
    </div>

    <div class="login__field">
        <label for="email">E-mail</label>
        <input
        type="email"
        id="email"
        placeholder="Your email"
        name="email"
        value="<?php echo s($user->email); ?>"
        />
    </div>
    <div class="login__field">
        <label for="password">Password</label>
        <input
        type="password"
        id="password"
        placeholder="Your password"
        name="password"
        value="<?php echo s($user->nombre); ?>"
        />
    </div>
    <input type="submit" class="button" value="Create account">
</form>

<div class="actions">
    <a href="/login">Login</a>
    <a href="/forgot">Forget your password</a>
</div>
