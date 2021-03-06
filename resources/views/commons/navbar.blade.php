<header>
    <nav class="navbar navbar-original navbar-static-top navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-left" href="/"><img src="{{ secure_asset("images/logo2.jpg") }}" alt="onoshin" class='nav_hover'></a>
            </div>
            <div class="collapse navbar-collapse navbar_original" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())

                        <!--<li>-->
                        <!--    <a href= "{{ route('users.index')}}" class="jet">-->
                        <!--    Users-->
                        <!--    </a>-->
                        <!--</li>-->
                        <li class="dropdown">
                            <a class="dropdown-toggle jet" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                                Goals (Review&Create)

                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('goals.review') }}" class="jet">
                                    <span aria-hidden="true"></span>
                                    Review
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('goals.create') }}" class="jet">
                                    <span aria-hidden="true"></span>

                                    Create

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href= "{{ route('goals.search')}}" class="jet">
                                <span class = "glyphicon glyphicon-search" area-hidden="true"></span>
                                Search
                            </a>
                        </li>
                        <li>
                            <a href= "{{route('users.howto')}}" class="jet">
                                 <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                                HowToUse
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle jet" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>{!! link_to_route('users.show', 'My Status', ['id' => Auth::id()]) !!}</li>
                                <li>{!! link_to_route('ranking.good', 'Manage Your Keeps') !!}</li>
                                <li role="separator" class="divider"></li>
                                <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('signup.get') }}"  class="jet">sign up</a></li>
                        <li><a href="{{ route('login') }}" class="jet">login</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>