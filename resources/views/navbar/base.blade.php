<header class="d-flex mb-3">

    <h1 class="p-3 mt-2" style="font-family: 'Aclonica', sans-serif;">Music Bar</h1>

    @auth

    <div class="d-inline-flex ms-auto mt-3" style="margin-right: 20px"></div>
    <div class="me-5 d-flex mt-4">
        <div class="me-5 mt-2">
            <a href="/" class="btn text-white"><h6>Home</h6> </a>
        </div>
        <div class="me-5 mt-2">
            <a href="/dashboard" class="btn text-white"><h6>Dashboard</h6> </a>
        </div>


    </div>

        <div class="dropdown">
            <a class="d-block" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">

                @if(auth()->check())
                <img class="rounded-circle mt-2" width="75" height="75" src="{{ asset((auth()->user()->image ? 'uploads/image_uploads/' . auth()->user()->image : 'default_images/blank-profile.jpg')) }}" alt="" style="object-fit: cover; margin-right: 20px;">
                @endif
                </a>

                <ul class="dropdown-menu dropdown-menu-end mt-3 me-3" aria-labelledby="dropdownMenuLink" style="width: 300px; background-color: rgba(25, 25, 25, 0.645); -webkit-backdrop-filter: blur(15px); backdrop-filter: blur(15px);">
                    @if(auth()->check())
                    <h5 style="text-align: center; margin-top: -8px; margin-bottom: -17px; background-image: url('{{  asset((auth()->user()->image ? 'uploads/image_uploads/' . auth()->user()->image : 'default_images/blank-profile.jpg')) }}')" class="p-3 text-white">{{auth()->user()->username}}</h5>
                    @endif
                <li >
                    <hr>

                    {{-- <form action="{{ route('setting') }}" method="GET">
                        @csrf
                        <button type="submit" class="dropdown-item" style="text-align: center;"> <i class="fa-solid fa-gear"></i> Settings</button>
                    </form> --}}

                    <a href="/profile" class="account btn dropdown-item" style="text-align: center"> <i class="fa-solid fa-gear"></i> Setting</a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="account dropdown-item" style="text-align: center;"> <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    @endauth

    @guest

        <div class="buttons d-inline-flex ms-auto mt-3">
            <a class="btn me-5 mt-2 fs-5 text-white" href="/login" role="button">Login</a>
            <a class="btn me-5 mt-2  fs-5 text-white" href="/register" role="button">Register</a>
        </div>
    @endguest
</header>



<style>

    .account{
        border-radius: 20px;
        margin-bottom: 10px;
        margin-top: 10px;

        color: rgb(255, 255, 255);
    }
    .page{
        cursor: pointer;
        transition: 0.5s;
        padding: 10px;
    }
    .page:hover{
        background-color: white;
        box-shadow: 0px 10px 0px 0px rgb(118, 118, 118);
        color: black;
        transform: translateY(-10px);
    }
</style>
