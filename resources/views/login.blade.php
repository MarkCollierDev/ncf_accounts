@extends('layouts\clean')

@section("css")

@endSection

@section('content')

<h3 id="site-message">Site under Development</h3>
<div class="col-md-10" id="login-message">
    <img src="img/logo.png">
    <p>This site is for autherised users only. public information of our accounts are on the charity commisions 
        <a 
        href="https://apps.charitycommission.gov.uk/Showcharity/RegisterOfCharities/CharityWithoutPartB.aspx?RegisteredCharityNumber=1052560&SubsidiaryNumber=0">
        website</a> or why not check out our main <a href="http://www.ncfchurch.org.uk">site</a> </p>
</div>


<div class="col-md-2" id="login-login">
    <h2>Login</h2>
    <form action="">
        <input placeholder="User Name" type="text" name="username">
        <input placeholder="Password" type="password" name="passowrd">
        <input type="submit" value="Log In">
    </form>
</div>
@endsection


@section("js")
@endSection