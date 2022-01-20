<?php
$message = \App\Http\Controllers\Admin\HomeController::getmessage();
?>
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
    <?php
    $i = 0;

    foreach ($message as $msg) {
        if ($msg->status == 'False') {
            $i++;
        }
    }

    ?>
    <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger badge-counter">{{$i}}</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                    Message Center
                </h6>
                @foreach($message as $msg)
                    @if($msg->status!='Read')
                        <a class="dropdown-item d-flex align-items-center"
                           href="{{route('admin_message_edit',['id'=>$msg->id])}}"
                           onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('adminassets')}}/img/undraw_profile_2.svg"
                                     alt="...">
                                <div class="status-indicator bg-success"></div>
                            </div>

                            <div class="font-weight-bold">
                                <div class="text-truncate text-black-opacity-05">{{$msg->message}}</div>
                                <div class="small text-gray-700">{{$msg->name}}</div>
                            </div>
                        </a>
                    @endif
                @endforeach
                @if($i==0)
                    <div class="font-weight-bold dropdown-item d-flex align-items-center">
                        <br>
                        <div class="text-truncate text-black-opacity-05">No More Message.</div>
                        <br>
                    </div>
                @endif
                <div class="small text-gray-700">
                    <a class="dropdown-item text-center small text-gray-500" href="{{route('admin_messages')}}">Read More Messages</a>
                </div>
            </div>
        </li>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                @if(\Illuminate\Support\Facades\Auth::user()->profile_photo_path)
                    <img class="img-profile rounded-circle"
                         src="{{\Illuminate\Support\Facades\Storage::url(\Illuminate\Support\Facades\Auth::user()->profile_photo_path)}}">
                @endif
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                 aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="{{route('admin_setting')}}">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                @auth
                    <a class="dropdown-item" href="{{route('admin_logout')}}">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                @endauth
                <div class="dropdown-divider"></div>
            </div>
        </li>
    </ul>
</nav>
<!-- End of Topbar -->
