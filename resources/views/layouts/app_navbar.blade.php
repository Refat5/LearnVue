<div class="row">

    <!-- Profile Info and Notifications -->
    <div class="col-md-6 col-sm-8 clearfix">

        <ul class="user-info pull-left pull-none-xsm">


            <ul class="user-info pull-left pull-right-xs pull-none-xsm">

                <!-- Expired Notifications -->
                {{-- <li class="notifications dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                        data-close-others="true">
                        <i class="entypo-attention"></i>
                        <span class="badge badge-warning expiry_count"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <ul class="dropdown-menu-list scroller" id="expired">

                            </ul>
                        </li>

                        <li class="external">
                            <router-link to="/expired_medicine">View all notifications</router-link>
                        </li>
                    </ul>

                </li> --}}

                {{-- Out Of Stock Notification --}}
                {{-- <li class="notifications dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                        data-close-others="true">
                        <i class="entypo-attention"></i>
                        <span class="badge badge-warning outOfStock"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <ul class="dropdown-menu-list scroller" id="outOfStock">

                            </ul>
                        </li>

                        <li class="external">
                            <router-link to="/out_of_stock">View all notifications</router-link>
                        </li>
                    </ul>

                </li> --}}
            </ul>

    </div>


    <!-- Raw Links -->
    <div class="col-md-6 col-sm-4 clearfix hidden-xs">

        <ul class="list-inline links-list pull-right">
            <li>
                <router-link to="/settings">
                    Settings <i class="entypo-tools right"></i>
                </router-link>
            </li>

            <li class="sep"></li>

            <li>
                {{-- <form method="POST" action="{{ route('logout') }}">
                    @csrf --}}
                    {{-- <a href="{{ route('logout') }}" onclick="event.preventDefault();
						this.closest('form').submit();">
                        Log Out <i class="entypo-logout right"></i>
                    </a> --}}
                {{-- </form> --}}

            </li>
        </ul>

    </div>

</div>
<hr />
