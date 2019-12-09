<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layouts.head')
</head>
<body>
    <!-- The sidebar -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>
    <!-- Page content -->
    <div id="main">
        <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" onclick="openNav()">Dashboard</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 mr-3" type="submit">Search</button>
            <button class="btn btn-outline-success my-2 my-sm-0 mx-1" type="button">Profile</button>
            <button class="btn btn-outline-success my-2 my-sm-0 mx-1" type="button">Logout</button>
        </form>
        </nav>
        <div class="content">
            @yield('content')
        </div>
    </div> 
</body>
</html>