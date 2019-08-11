<!DOCTYPE html>
<html lang="en">
    <head>
        @include('site.layouts.head')
    </head>
    <body>
        <div class="main-page-wrapper">
            <!-- Header Section-->
            @include('site.layouts.header')

            <!-- Header Section-->
            @include('site.layouts.banner')

            <!-- Main Content -->
            @yield('content')
            
            
            <!-- Footer Section-->
            @include('site.layouts.footer')
            
            <!-- Script Section-->
            @include('site.layouts.script')
        </div> <!-- /.main-page-wrapper -->
    </body>
</html>