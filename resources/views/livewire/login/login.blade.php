<div style="display: grid; place-content: center; margin-top: 150px">
    <div class="card text-white" style="width: 500px; background-color: rgba(25, 25, 25, 0.645); -webkit-backdrop-filter: blur(15px); backdrop-filter: blur(15px);">
        @if (session()->has('message'))
            <div class="alert ">
                {{ session('message') }}
            </div>
        @endif

        @if (session()->has('errorMsg'))
            <div class="alert">
                {{ session('errorMsg') }}
            </div>
        @endif
        <div class="card-header">

            <h2>Login</h2>
        </div>
        <form wire:submit.prevent='login'>
            <div class="card-body">


                <div class="mb-1">

                    <label for="email" style="transform: translateY(27px); margin-left: 75px;"><b>Email</b></label>
                    <div class="d-flex">

                        <label for="email" class="p-3  text-center rounded" style="width: 75px"> <i class="fa fa-envelope"></i> </label>

                        <div class="border_buttom">
                            <input type="email" name="" id="email" class="pt-4 custom-input text-white" wire:model="email">

                        </div>

                    </div>

                    @error('email')
                    <span class="text-danger text-lg" style="margin-left: 75px;">{{$message}}</span>
                    @enderror

                </div>

                <div class="mb-1">

                    <label for="password" style="transform: translateY(27px); margin-left: 75px;"><b>Password</b></label>
                    <div class="d-flex">

                        <label for="password" class="p-3  text-center rounded" style="width: 75px"> <i class="fa fa-key"></i> </label>
                        <div class="border_buttom">
                        <input type="password" name="" id="password" class="pt-4 custom-input text-white" wire:model='password'>
                    </div>
                    </div>

                    @error('password')
                    <span class="text-danger text-lg" style="margin-left: 75px;">{{$message}}</span>
                    @enderror

                </div>




                <div class="mb-3 mt-5 d-flex">
                    <a href="/register" class="w-100"><button class="btn btn-outline-light border-1 border-secondary p-3" type="button">Don't have an account?</button></a>
                    <button class="btn btn-outline-light border-1 border-secondary p-3" style="margin-left: 163px; width: 120px;" type="submit">Login</button>
                </div>

            </div>
        </form>
    </div>
</div>
<style>



.custom-input {
  background-color: transparent;
  border-radius: 0;
  border: none;
  outline: none !important;
  width: 350px;
  transition: 0.5s;
  transform: translateY(3px);
  border-bottom: 2px solid white;


}

.custom-input:focus {
background-color: transparent;
  border: none;
  border-bottom: 2px solid white;
  outline: none !important;
  transform: translateY(9px);
  transition: 0.5s;

}
</style>
