<div class="form-group">
    <label for="name">Nombre del usuario</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
        placeholder="Nombre" value="{{ old('name', $usuario->name) }}">
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email del usuario</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
        placeholder="Email" value="{{ old('email', $usuario->email) }}">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="role">Rol del usuario</label>
    <select class="form-control" type="text" id="role" name="role" value="{{ old('role', $usuario->role) }}">
        <option value="">Seleccionar rol del sistema</option>
        <option {{ old('role', $usuario->role)=="Administrador" ? 'selected' :''}} value="Administrador">Administrador</option>
        <option {{ old('role', $usuario->role)=="Usuario" ? 'selected' :''}} value="Usuario">Usuario</option>
    </select>
</div>
<div class="form-group">
    <label for="password">Contraseña del usuario</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
        placeholder="Contraseña">
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="password-confirm">Confirmar contraseña del usuario</label>
    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
        id="password-confirm" name="password_confirmation" placeholder="Confirmar contraseña">
    @error('password_confirmation')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
