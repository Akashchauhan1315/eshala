<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="{{ asset('css/dashboard.css')}}" rel="stylesheet">
   </head>
    <body>
        <x-sidebar/>
        
        <section class="home-section">
            <nav>
                <div class="sidebar-button">
                    <i class='bx bx-menu sidebarBtn'></i>
                    <span class="dashboard">{{ \Request::route()->getName() }}</span>
                </div>
                <div class="profile-details">
                    <span class="admin_name">{{Session::get('user')['username']}}</span>
                </div>
            </nav>
            @yield('content')
        </section>
        
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/common.js') }}" ></script>
</html>