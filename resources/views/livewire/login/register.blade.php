<div style="display: grid; place-content: center; margin-top: 100px" >
    <div class="card text-white" style="width: 500px; background-color: rgba(25, 25, 25, 0.645); -webkit-backdrop-filter: blur(15px); backdrop-filter: blur(15px);">
        <div class="card-header">
            <h2>Register</h2>
        </div>
        <form wire:submit.prevent='register'>
            <div class="card-body">

                {{-- <div class="image-upload position-relative shadow">
                    <input type="file" class="custom-input position-absolute top-0 start-0 opacity-0" wire:model="image" id="image" name="image">
                    <label for="image" class="upload-label d-flex align-items-center justify-content-center">
                      <img src="{{ $image ? $image->temporaryUrl() : '/placeholder.png' }}" alt="Profile Image" class="preview-image rounded-circle bg-dark">
                      <span class="upload-icon"><i class="fa fa-camera"></i></span>
                    </label>

                  </div> --}}

                  <br>
                  @error('image')
                    <span class="text-danger text-lg">{{$message}}</span>
                    @enderror

                <div class="mb-1">


                    <label for="name" style="transform: translateY(27px); margin-left: 81px;"><b>Name</b></label>
                    <div class="d-flex">

                        <label for="name" class="p-3  text-center rounded" style="width: 75px"> <i class="fa-solid fa-file-signature"></i> </label>
                        <div class="border_buttom">
                        <input type="text" name="" id="name" class="custom-input text-white pt-4" wire:model='name'>
                        </div>
                    </div>

                    @error('name')
                    <span class="text-danger text-lg" style="margin-left: 75px;">{{$message}}</span>
                    @enderror

                </div>

                <div class="mb-1">


                    <label for="username" style="transform: translateY(27px); margin-left: 81px;"><b>User Name</b></label>
                    <div class="d-flex">

                        <label for="username" class="p-3  text-center rounded" style="width: 75px"> <i class="fa fa-user"></i> </label>
                        <div class="border_buttom">
                        <input type="text" name="" id="username" class="custom-input text-white pt-4" wire:model='username'>
                        </div>
                    </div>

                    @error('username')
                    <span class="text-danger text-lg" style="margin-left: 75px;">{{$message}}</span>
                    @enderror

                </div>


                <div class="mb-1">

                    <label for="email" style="transform: translateY(27px); margin-left: 81px;"><b>Email</b></label>
                    <div class="d-flex">

                        <label for="email" class="p-3 text-center rounded" style="width: 75px"> <i class="fa fa-envelope"></i> </label>
                        <div class="border_buttom">
                        <input type="email" name="" id="email" class="custom-input text-white pt-4" wire:model='email'>
                        </div>
                    </div>

                    @error('email')
                    <span class="text-danger text-lg" style="margin-left: 75px;">{{$message}}</span>
                    @enderror

                </div>


                {{-- <div class="mb-1">

                    <label for="Location" style="transform: translateY(27px); margin-left: 81px;"><b>Location</b></label>
                    <div class="d-flex">

                        <label for="Location" class="p-3 bg-success text-center rounded" style="width: 75px"> <i class="fa-solid fa-location-dot"></i></label>
                        <input type="Location" name="" id="Location" class="custom-input text-white pt-4" wire:model='location'>

                    </div>

                    @error('Location')
                    <span class="text-danger text-lg" style="margin-left: 75px;">{{$message}}</span>
                    @enderror

                </div> --}}






                <div class="mb-1">

                    <label for="password" style="transform: translateY(27px); margin-left: 81px;"><b>Password</b></label>
                    <div class="d-flex">

                        <label for="password" class="p-3 text-center rounded" style="width: 75px"> <i class="fa fa-key"></i> </label>
                        <div class="border_buttom">
                        <input type="password" name="" id="password" class="custom-input text-white pt-4" wire:model='password'>
                        </div>
                    </div>

                    @error('password')
                    <span class="text-danger text-lg" style="margin-left: 75px;">{{$message}}</span>
                    @enderror

                </div>

                @if(!empty($password))
                <div class="mb-1">
                    <label for="confirmPassword" style="transform: translateY(27px); margin-left: 81px;"><b>Confirm Password</b></label>
                    <div class="d-flex">
                        <label for="confirmPassword" class="p-3 text-center rounded" style="width: 75px"> <i class="fa-solid fa-unlock-keyhole"></i> </label>
                        <div class="border_buttom">
                        <input type="password" name="password_confirmation" id="confirmPassword" class="custom-input text-white pt-4" wire:model='password_confirmation'>
                        </div>
                    </div>
                    @error('password_confirmation')
                        <span class="text-danger text-lg" style="margin-left: 75px;">{{$message}}</span>
                    @enderror
                </div>
                @endif
{{--
                <div class="mb-1 mt-4">


                    <div class="d-flex">

                        <textarea name="" id="description" class="custom-input" placeholder="Description" wire:model='description'></textarea>

                    </div>

                    @error('description')
                    <span class="text-danger text-lg">{{$message}}</span>
                    @enderror

                </div> --}}


                <div class="mb-3 mt-5 d-flex w-100">
                    <a href="/login" class="w-100"> <button type="button" class="btn btn-outline-light border-1 border-secondary p-3">Already have an account?</button> </a>
                    <button class="btn btn-outline-light border-1 border-secondary p-3" style="margin-left: 123px" type="submit"> Register</button>
                </div>

            </div>
        </form>
    </div>
</div>

<style>
    .image-upload {
  position: relative;
  display: inline-block;
  border-radius: 50%;
  overflow: hidden;
  width: 150px;
  height: 150px;
}

.upload-label {
  display: block;
  width: 100%;
  height: 100%;
  cursor: pointer;
}

.preview-image {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.upload-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 2rem;
  color: #fff;
  opacity: 0.8;
  transition: opacity 0.2s ease-in-out;
}

.upload-icon:hover {
  opacity: 1;
}


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
