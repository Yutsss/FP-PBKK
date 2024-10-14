<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Login</h1>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 custom-bg" wire:submit.prevent="login">
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" wire:model="email">
                    <label for="email">Email</label>
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control" wire:model="password">
                    <label for="password">Password</label>
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <button class="w-100 btn btn-lg custom-btn" type="submit">Sign In</button>
                <div class="mt-3 text-center">
                    <a href="#" class="custom-link">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>
</div>
