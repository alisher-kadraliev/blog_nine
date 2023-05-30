<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('personal.home') }}"
                       class="nav-link  {{Route::currentRouteName() == 'admin.home' ? 'active-sidebar-link' : ''}}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('personal.like.index') }}"
                       class="nav-link  {{Route::currentRouteName() == 'admin.category.index' ? 'active-sidebar-link' : ''}}">
                        <i class="nav-icon fas fa-heart"></i>
                        <p>
                            Liked Post
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('personal.comment.index') }}"
                       class="nav-link  {{Route::currentRouteName() == 'admin.tag.index' ? 'active-sidebar-link' : ''}}">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>
                            Comment
                        </p>
                    </a>
                </li>

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
