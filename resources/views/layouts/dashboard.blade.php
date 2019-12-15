<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layouts.head')
    @section('title','Dashboard')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
</head>
<body>
    <!-- The sidebar -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="active" href="profileadmin">Home Profile</a>
        <a href="usersetting">User Settings</a>
        <a href="moviesetting">Movie Database</a>
    </div>
    <!-- Page content -->
    <div id="main">
        <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" onclick="openNav()">Dashboard</a>
        <form class="form-inline">
            <button class="btn btn-outline-success my-2 my-sm-0 mx-1" type="button">Hai, {{Session::get('nama')}}</button>
            <a class="btn btn-outline-success my-2 my-sm-0 mx-1" type="button" href="logout">Logout</a>
        </form>
        </nav>
        <div class="content">
            @yield('content')
        </div>
    </div> 
</body>
</html>