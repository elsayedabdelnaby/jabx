<!--begin::Aside-->
<div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto " id="kt_brand">
        <!--begin::Logo-->
        <a href="{{ route('admin.dashboard') }}" class="brand-logo">
            <img alt="Logo" class="w-65px" src="{{ asset('assets/admin/media/logos/logo-letter-13.png') }}" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->

    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

        <!--begin::Menu Container-->

        <div id="kt_aside_menu" class="aside-menu my-4 " data-menu-vertical="1" data-menu-scroll="1"
            data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav ">
                <li class="menu-item  menu-item-active" aria-haspopup="true">
                    <a href="{{ route('admin.dashboard') }}" class="menu-link ">
                        <i class="menu-icon flaticon2-architecture-and-city"></i>
                        <span class="menu-text">Home</span>
                    </a>
                </li>
                <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-telegram-logo"></i>
                        <span class="menu-text">Actions</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">Actions</span>
                                </span>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="#" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Reports</span>
                                </a>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="#" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Messages</span>
                                </a>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="#" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-line"><span></span></i>
                                    <span class="menu-text">Notes</span>
                                </a>
                            </li>
                            <li class="menu-item " aria-haspopup="true"><a href="#" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-line"><span></span></i>
                                    <span class="menu-text">Remarks</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-laptop"></i>
                        <span class="menu-text">Modules</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">Modules</span>
                                </span>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="{{ route('admin.sponsors.index') }}" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Sponsors</span>
                                </a>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="#" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Apps</span>
                                </a>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="#" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Downloads</span>
                                </a>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="#" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Tasks</span>
                                </a>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="#" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Events</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-browser-2"></i>
                        <span class="menu-text">Reports</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <i class="menu-arrow">
                        </i>
                        <ul class="menu-subnav">
                            <li class="menu-item  menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">Reports</span>
                                </span>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="#" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Cases</span>
                                </a>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="#" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Messages</span>
                                </a>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="#" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Reports</span>
                                </a>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="#" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">Calendar</span>
                                </a>
                            </li>
                            <li class="menu-item " aria-haspopup="true"><a href="#" class="menu-link "><i
                                        class="menu-bullet menu-bullet-dot"><span></span></i><span
                                        class="menu-text">FAQ</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-console"></i>
                        <span class="menu-text">@lang( 'admin.settings' )</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu ">
                        <i class="menu-arrow">
                        </i>
                        <ul class="menu-subnav">
                            <li class="menu-item " aria-haspopup="true">
                                <a href="{{ route('admin.users.index') }}" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">@lang( 'admin.users' )</span>
                                </a>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="{{ route('admin.roles.index') }}" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">@lang( 'admin.roles' )</span>
                                </a>
                            </li>
                            <li class="menu-item " aria-haspopup="true">
                                <a href="{{ route('admin.sitesettings.edit', 1) }}" class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                    <span class="menu-text">@lang( 'admin.site_settings' )</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item " aria-haspopup="true">
                    <a href="#" class="menu-link ">
                        <i class="menu-icon flaticon2-graph-1"></i><span class="menu-text">Logs</span>
                    </a>
                </li>
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside-->
