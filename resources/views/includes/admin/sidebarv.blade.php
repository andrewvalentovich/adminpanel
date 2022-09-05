<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">Admin panel</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Articles
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.articles.index') }}" class="nav-link">
                        <p>Show</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.articles.create') }}" class="nav-link">
                        <p>Create</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Users
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                        <p>Show</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.create') }}" class="nav-link">
                        <p>Create</p>
                    </a>
                </li>
            </ul>
        </li>
{{--        <li class="nav-item">--}}
{{--            <a href="pages/gallery.html" class="nav-link">--}}
{{--                <i class="nav-icon far fa-image"></i>--}}
{{--                <p>--}}
{{--                    Gallery--}}
{{--                </p>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a href="pages/kanban.html" class="nav-link">--}}
{{--                <i class="nav-icon fas fa-columns"></i>--}}
{{--                <p>--}}
{{--                    Kanban Board--}}
{{--                </p>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">--}}
{{--                <i class="nav-icon far fa-envelope"></i>--}}
{{--                <p>--}}
{{--                    Mailbox--}}
{{--                    <i class="fas fa-angle-left right"></i>--}}
{{--                </p>--}}
{{--            </a>--}}
{{--            <ul class="nav nav-treeview">--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/mailbox/mailbox.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Inbox</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/mailbox/compose.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Compose</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/mailbox/read-mail.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Read</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">--}}
{{--                <i class="nav-icon fas fa-book"></i>--}}
{{--                <p>--}}
{{--                    Pages--}}
{{--                    <i class="fas fa-angle-left right"></i>--}}
{{--                </p>--}}
{{--            </a>--}}
{{--            <ul class="nav nav-treeview">--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/invoice.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Invoice</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/profile.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Profile</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/e-commerce.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>E-commerce</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/projects.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Projects</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/project-add.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Project Add</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/project-edit.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Project Edit</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/project-detail.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Project Detail</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/contacts.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Contacts</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/faq.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>FAQ</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/contact-us.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Contact us</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">--}}
{{--                <i class="nav-icon far fa-plus-square"></i>--}}
{{--                <p>--}}
{{--                    Extras--}}
{{--                    <i class="fas fa-angle-left right"></i>--}}
{{--                </p>--}}
{{--            </a>--}}
{{--            <ul class="nav nav-treeview">--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Login & Register v1--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/login.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Login v1</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/register.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Register v1</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/forgot-password.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Forgot Password v1</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/recover-password.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Recover Password v1</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>--}}
{{--                            Login & Register v2--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/login-v2.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Login v2</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/register-v2.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Register v2</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/forgot-password-v2.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Forgot Password v2</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/recover-password-v2.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Recover Password v2</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/lockscreen.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Lockscreen</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/legacy-user-menu.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Legacy User Menu</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/language-menu.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Language Menu</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/404.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Error 404</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/500.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Error 500</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/pace.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Pace</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/examples/blank.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Blank Page</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="starter.html" class="nav-link">--}}
{{--                        <i class="far fa-circle nav-icon"></i>--}}
{{--                        <p>Starter Page</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
    </ul>
</nav>
<!-- /.sidebar-menu -->