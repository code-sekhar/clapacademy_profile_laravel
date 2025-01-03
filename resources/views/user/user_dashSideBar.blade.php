<div class="dashboard__left">
    <div class="dash__menu">
        <ul>
            <li class="nav-item">
                <a href="/user/dashboard" class="nav-link active">
                    <i class='fab fa-microsoft'></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="employer-dash-profile.html">
                    <i class='fas fa-user-alt' style='font-size:18px'></i>
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-suitcase" aria-hidden="true" style='font-size:18px'></i>
                    My Portfolio
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-suitcase" aria-hidden="true" style='font-size:18px'></i>
                    Create Portfolio
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-snowflake" aria-hidden="true" style='font-size:18px'></i>
                    Skills
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa fa-graduation-cap" aria-hidden="true" style='font-size:18px'></i>
                    Education
                </a>
            </li>

            <li class="nav-item">
                <a href="employer-dash-passwordchange.html" class="nav-link">
                    <i class="fa-light fa-lock icon"></i>
                    Change Password </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-trash-alt" aria-hidden="true" style='font-size:18px'></i>
                    Delete Account
                </a>
            </li>
        </ul>
    </div>
    {{-- <div class="dash__logout">
        <figure class="logout__image">
            <img src="{{asset('assets/img/dashboard/logout.png')}}" alt="">
        </figure>

        <a class="logout__btn" href="{{route('logout')}}"
            onclick="event.preventDefault(); document.getElementById('logout-userForm').submit();"><i
                class="rt-login"></i> Logout</a>
        <form method="POST" id="logout-userForm" action="{{route('logout')}}">
            @csrf
        </form>
    </div> --}}
</div>
