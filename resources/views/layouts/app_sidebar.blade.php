<div class="sidebar-menu">

    <div class="sidebar-menu-inner">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="/">
                    <h4><img src="/assets/images/logo-light@2x.png"
                            width="50" alt="" /> <b>Biz Inventory</b></h4>
                </a>
            </div>

            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon">
                    <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation">
                    <!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

        </header>

        <div class="sidebar-user-info">

            <div class="sui-normal">
                <a href="#" class="user-link">
                    <img src="/assets/images/avatar.png" width="55" alt="" class="img-circle" />

                    <span>Welcome,</span>
                    <strong>Art Ramadani</strong>
                </a>
            </div>

            <div class="sui-hover inline-links animate-in">
                <!-- You can remove "inline-links" class to make links appear vertically, class "animate-in" will make A elements animateable when click on user profile -->
                <a href="#">
                    <i class="entypo-pencil"></i>
                    New Page
                </a>

                <a href="mailbox.html">
                    <i class="entypo-mail"></i>
                    Inbox
                </a>

                <a href="extra-lockscreen.html">
                    <i class="entypo-lock"></i>
                    Log Off
                </a>

                <span class="close-sui-popup">&times;</span><!-- this is mandatory -->
            </div>
        </div>


        <ul id="main-menu" class="main-menu">


            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <li class="opened active">
                <router-link to="/">
                    <i class="entypo-home"></i>
                    <span class="title">Dashboard</span>

                </router-link>
            </li>

            <li class="has-sub">
                <router-link to="/category">
                    <i class="entypo-list-add"></i>
                    <span class="title">Category & Generic</span>
                </router-link>
                <ul>
                    <li class="opened">
                        <router-link to="/category">
                            <i class="entypo-layout"></i>
                            <span class="title">Category</span>
                        </router-link>
                    </li>
                    <li class="opened">
                        <router-link to="/generic">
                            <i class="entypo-tag"></i>
                            <span class="title">Generic</span>
                        </router-link>
                    </li>
                </ul>
            </li>
           

            <li class="has-sub">
                <router-link to="/medicine">
                    <i class="fas fa-pills"></i>
                    <span class="title">Medicine</span>
                </router-link>
                <ul>
                    <li>
                        <router-link to="/medicine">
                            <i class="entypo-doc-text"></i>
                            <span class="title">Medicine List</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/medicine/create">
                            <i class="entypo-plus-circled"></i>
                            <span class="title">Add Medicine</span>
                        </router-link>
                    </li>
                    <li class="opened">
                        <router-link to="/unit">
                            <i class="fa fa-balance-scale"></i>
                            <span class="title">Unit</span>
                        </router-link>
                    </li>
                    <li class="opened">
                        <router-link to="/type">
                            <i class="entypo-menu"></i>
                            <span class="title">Type</span>
                        </router-link>
                    </li>
                </ul>
            </li>
           
            <li class="has-sub">
                <router-link to="/stock/create">
                    <i class="fas fa-cart-arrow-down"></i>
                    <span class="title">Stock</span>
                </router-link>
                <ul>
                    <li>
                        <router-link to="/stock">
                            <i class="entypo-doc-text"></i>
                            <span class="title">Stock List</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/stock/create">
                            <i class="entypo-plus-circled"></i>
                            <span class="title">Add Stock</span>
                        </router-link>
                    </li>
                    <li class="has-sub">
                        <router-link to="/manufacturer">
                            <i class="entypo-cog"></i>
                            <span class="title">Manufacturer</span>
                        </router-link>
                        <ul>
                            <li>
                                <router-link to="/manufacturer">
                                    <i class="entypo-doc-text"></i>
                                    <span class="title">Manufacturers List</span>
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/manufacturer/create">
                                    <i class="entypo-plus-circled"></i>
                                    <span class="title">Add Manufacturer</span>
                                </router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="opened">
                        <router-link to="/supplier">
                            <i class="fas fa-truck"></i>
                            <span class="title">Supplier</span>
                        </router-link>
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <router-link to="/sale/create">
                    <i class="fas fa-coins"></i>
                    <span class="title">Sale</span>
                </router-link>
                <ul>
                    <li>
                        <router-link to="/sale">
                            <i class="entypo-doc-text"></i>
                            <span class="title">Sale List</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/sale/create">
                            <i class="entypo-plus-circled"></i>
                            <span class="title">Add Sale</span>
                        </router-link>
                    </li>
                    <li class="opened">
                        <router-link to="/customer">
                            <i class="entypo-user-add"></i>
                            <span class="title">Customer</span>
                        </router-link>
                    </li>
                </ul>
            </li>

          

            <li class="has-sub">
                <router-link to="/sale_stock_report">
                    <i class="fas fa-receipt"></i>
                    <span class="title">Report</span>
                </router-link>
                <ul>
                    <li>
                        <router-link to="/sale_stock_report">
                            <i class="fas fa-th-list"></i>
                            <span class="title">Sale Stock Report</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/sale_report">
                            <i class="entypo-doc-text"></i>
                            <span class="title">Sale Report</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/stock_report">
                            <i class="entypo-doc-text"></i>
                            <span class="title">Stock Report</span>
                        </router-link>
                    </li>
                </ul>
            </li>

            <li class="has-sub">
                <router-link to="/expired_medicine">
                    <i class="entypo-attention"></i>
                    <span class="title">Alert</span>
                </router-link>
                <ul>
                    <li>
                        <router-link to="/expired_medicine">
                            <i class="fas fa-th-list"></i>
                            <span class="title">Expired Medicine</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/out_of_stock">
                            <i class="fas fa-th-list"></i>
                            <span class="title">Out Of Stock</span>
                        </router-link>
                    </li>
                </ul>
            </li>

            <li class="has-sub">
                <router-link to="/user">
                    <i class="fas fa-user-cog"></i>
                    <span class="title">RBAC</span>
                </router-link>
                <ul>
                    <li class="has-sub">
                        <router-link to="/user">
                            <i class="fas fa-user-friends"></i>
                            <span class="title">User</span>
                        </router-link>
                        <ul>
                            <li>
                                <router-link to="/user/create">
                                    <i class="entypo-doc-text"></i>
                                    <span class="title">User Create</span>
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/user">
                                    <i class="entypo-doc-text"></i>
                                    <span class="title">User List</span>
                                </router-link>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <router-link to="/role">
                            <i class="entypo-doc-text"></i>
                            <span class="title">Role</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/user_access">
                            <i class="entypo-doc-text"></i>
                            <span class="title">User Access</span>
                        </router-link>
                    </li>
                </ul>
            </li>

        </ul>

    </div>

</div>