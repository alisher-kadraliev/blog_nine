{{-- its not working because at the first time navbar blade is not render by client-side you have to use include method or you have to use yield/section on home blade file like --}}
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>


        </ul>
        <div class="nav-item ml-auto">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <input type="submit"  class="btn btn-danger" value="Logout">
            </form>
        </div>
        <div class="nav-item mx-3">
            <a href="{{route('front.index')}}" class="btn btn-success">Main Page</a>
        </div>


        <!-- Right navbar links -->
    </nav>
