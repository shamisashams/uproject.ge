<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav
            class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
            <div class="nav-wrapper">
                <ul class="navbar-list right">
                    <li class="dropdown-language"><a class="waves-effect waves-block waves-light translation-button"
                                                     href="#" data-target="translation-dropdown"><span
                                class="flag-icon flag-icon-gb"></span></a></li>
                    <li class="hide-on-med-and-down"><a
                            class="waves-effect waves-block waves-light toggle-fullscreen"
                            href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                    <li class="hide-on-large-only search-input-wrapper"><a
                            class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i
                                class="material-icons">search</i></a></li>

                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                           data-target="profile-dropdown"><span class="avatar-status avatar-online"><img
                                    src="/admin/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a>
                    </li>
                                         <li><a class="lang {{ app()->getLocale() == 'en' ? 'on': '' }}" href="{{ route('adminBlogIndex','en') }}">ENG</a></li>
                    <li><a class="lang {{ app()->getLocale() == 'ru' ? 'on': '' }}" href="{{ route('adminBlogIndex','ru') }}">RUS</a>
                    </li>
                    <li> <a class="lang {{ app()->getLocale() == 'ge' ? 'on': '' }}" href="{{ route('adminBlogIndex','ge') }}">GEO</a></li>

            </div>

            </ul>
            <!-- translation-button-->
            <ul class="dropdown-content" id="translation-dropdown">
                <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="en"><i
                            class="flag-icon flag-icon-gb"></i> English</a></li>
                <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="fr"><i
                            class="flag-icon flag-icon-fr"></i> French</a></li>
                <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="pt"><i
                            class="flag-icon flag-icon-pt"></i> Portuguese</a></li>
                <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="de"><i
                            class="flag-icon flag-icon-de"></i> German</a></li>
            </ul>
            <ul class="dropdown-content" id="profile-dropdown">
                <li><a class="grey-text text-darken-1" href="{{route('logout',app()->getLocale())}}"><i
                            class="material-icons">keyboard_tab</i>
                        Logout</a></li>
            </ul>

    </div>

    <nav class="display-none search-sm">
        <div class="nav-wrapper">
            <form id="navbarForm">
                <div class="input-field search-input-sm">
                    <input class="search-box-sm mb-0" type="search" required="" id="search"
                           placeholder="Explore Materialize" data-search="template-list">
                    <label class="label-icon" for="search"><i
                            class="material-icons search-sm-icon">search</i></label><i
                        class="material-icons search-sm-close">close</i>
                    <ul class="search-list collection search-list-sm display-none"></ul>
                </div>
            </form>
        </div>
    </nav>
</nav>
</div>
</header>
