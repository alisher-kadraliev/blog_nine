<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.home') }}"
                       class="nav-link  {{Route::currentRouteName() == 'admin.home' ? 'active-sidebar-link' : ''}}">
                        <i class="fas fa-sliders-h"></i>
                        <p>
Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}"
                       class="nav-link  {{Route::currentRouteName() == 'admin.category.index' ? 'active-sidebar-link' : ''}}">
                        <i class="nav-icon fas fa-stream"></i>
                        <p>
                            Category
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.tag.index') }}"
                       class="nav-link  {{Route::currentRouteName() == 'admin.tag.index' ? 'active-sidebar-link' : ''}}">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>
                            Tag
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.post.index') }}"
                       class="nav-link  {{Route::currentRouteName() == 'admin.post.index' ? 'active-sidebar-link' : ''}}">
                        <i class="nav-icon fas fa-poo-storm"></i>
                        <p>
                            Post
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.user.index') }}"
                       class="nav-link  {{Route::currentRouteName() == 'admin.user.index' ? 'active-sidebar-link' : ''}}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                {{--                <li class="nav-item">--}}
                {{--                    <a href="{{ route('admin.main') }}"--}}
                {{--                       class="nav-link  {{Route::currentRouteName() == 'admin.main' ? 'active-sidebar-link' : ''}}">--}}
                {{--                        <i class="fas fa-sliders-h"></i>                        <p>--}}
                {{--                            Main--}}
                {{--                        </p>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item pl-1">--}}
                {{--                    <a href="{{ route('admin.user.index') }}"--}}
                {{--                       class="nav-link  {{Route::currentRouteName() == 'admin.user.index' ? 'active-sidebar-link' : ''}}">--}}
                {{--                        <i class="fas fa-user-circle"></i>--}}
                {{--                        <p>--}}
                {{--                            Users--}}
                {{--                        </p>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a href="{{ route('admin.category.index') }}"--}}
                {{--                       class="nav-link {{Route::currentRouteName() == 'admin.category.index' ? 'active-sidebar-link' : ''}}">--}}
                {{--                        <i class="nav-icon fas fa-stream"></i>--}}
                {{--                        Category--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a href="{{ route('admin.tag.index') }}"--}}
                {{--                       class="nav-link {{Route::currentRouteName() == 'admin.tag.index' ? 'active-sidebar-link' : ''}}">--}}
                {{--                        <i class="nav-icon fas fa-tags"></i>--}}
                {{--                        Tag--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a href="{{ route('admin.post.index') }}"--}}
                {{--                       class="nav-link  {{Route::currentRouteName() == 'admin.post.index' ? 'active-sidebar-link' : ''}}">--}}
                {{--                        <i class="nav-icon fas fa-save"></i>--}}
                {{--                        <p>--}}
                {{--                            Post--}}
                {{--                        </p>--}}
                {{--                    </a>--}}
                {{--                </li>--}}


            </ul>
        </nav>
    </div>

    <!-- /.sidebar -->
</aside>
<style>
    .active-sidebar-link {
        background: white !important;
        color: #343a40 !important;
    }

    .active-sidebar-link:hover {
        background: #c4c4c4 !important;
    }
</style>
