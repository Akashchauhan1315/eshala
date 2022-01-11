<form method="post" action="{{ route('user.auth')}}">
    @csrf
    <img class="mb-4 form-floating" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal form-floating">Please sign in</h1>
            @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="username" placeholder="name@example.com">
            <label for="floatingInput">Username</label>
            @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-field form-floating">
            <button class="bg" type="submit">Sign in</button>
        </div>
        <p class="mt-5 mb-3 text-muted form-floating">&copy; 2017–2021</p>
</form>

    
