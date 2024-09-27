@extends('layouts.layout')
@section("title", "welcome")


@section('content')
<style>
    body{
        background-image: url('https://www.letsjive.io/images/marketing/home-shapes-mobile.svg')
    }
</style>
<div class="landing-page text-center">
    <h1>Employee Managment System</h1>
    <p>The super admin only who have access to the employees data, this website have secured information</p>
    <div class="btns">
        <a href="/sign-up"><button class="signup">SignUp</button></a>
        <a href="/log-in"><button class="login" >LogIn</button></a>
    </div>
</div>
@endsection
