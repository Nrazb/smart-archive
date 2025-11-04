<h1>Login</h1>
<h4>Silakan Masuk Menggunakan Akun Anda</h4>
<form action="#" method="POST">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Masukan email anda" required>
    </div>
    <div>
        <label for="password">Paswword</label>
        <input type="password" name="password" placeholder="Masukan password">
    </div>
    <button type="submit">Login</button>
</form>
