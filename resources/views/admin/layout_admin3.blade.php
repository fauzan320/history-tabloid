
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>admin page</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!----CSS link----->
    @yield('link_css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets_admin/layout3.css"> 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }
        body{
        min-height: 100vh;
        background: #fff;
        }
        .navigation {
        position: fixed;
        top: 20px;
        left: 20px;
        bottom: 20px;
        width: 70px;
        border-radius: 10px;
        box-sizing: initial;
        border-left: 5px solid #ff5e14;
        background: #ff5e14;
        transition: width 0.5s;
        overflow-x: hidden;
        }
        .navigation.active{
        width: 200px;
        }
        .navigation ul{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        padding-left: 5px;
        padding-top: 0px;
        }
        .navigation ul li {
        position: relative;
        list-style: none;
        width: 100%;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
        }

        .navigation ul li.active {
        background: #fff;
        }
        .navigation ul li b:nth-child(1) {
        position: absolute;
        top: -20px;
        height: 20px;
        width: 100%;
        background: #fff;
        display: none;
        }
        .navigation ul li b:nth-child(1)::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-bottom-right-radius: 20px;
        background: #ff5e14;
        }
        .navigation ul li b:nth-child(2) {
        position: absolute;
        bottom: -20px;
        height: 20px;
        width: 100%;
        background: #fff;
        display: none;
        }
        .navigation ul li b:nth-child(2)::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-top-right-radius: 20px;
        background: #ff5e14;
        }
        .navigation ul li.active b:nth-child(1),
        .navigation ul li.active b:nth-child(2) {
        display: block;
        }
        .navigation ul li a {
        position: relative;
        display: block;
        width: 100%;
        display: flex;
        text-decoration: none;
        color: #fff;
        }
        .navigation ul li.active a{
        color: #333;
        }
        .navigation ul li a .icon{
        position: relative;
        display: block;
        min-width: 60px;
        height: 60px;
        line-height: 70px;
        text-align: center;
        }
        .navigation ul li a .icon ion-icon{
        font-size: 1.5em;
        }
        .navigation ul li a .title{
        position: relative;
        display: block;
        padding-left: 10px;
        height: 60px;
        line-height: 60px;
        white-space: normal;
        }
        .toggle{
        background: #ff5e14;
        margin-left: 25px;
        margin-bottom: 45px;
        position: relative;
        top: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: ##ff5e14;
        border-radius: 10px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        }
        .toggle.active{
        background: #ff5e14;
        }
        .toggle ion-icon{
        position: absolute;
        color: #fff;
        font-size: 34px;
        display:none;
        }
        .toggle ion-icon.open,
        .toggle.active ion-icon.close{
        display:block;
        }
        .toggle ion-icon.close,
        .toggle.active ion-icon.open{
        display:none;
        }
    </style>
</head>
<body>
    {{-- <script>
        swal({
        title: "HELLO!",
        text: "selamat datang admin",
        icon: "success",
        button: "go",
        });
    </script> --}}
    <div class="container" style="margin-left: 110px; margin-top: 25px">
      <div class="logo float-left">
          <h1  class="text-light"><a style="-webkit-text-fill-color: #ff5e14" href="/"><span>E-HISTAB</span></a></h1>
          
      </div>
      <div style="margin-top: 50px">
          <br><br>
          <hr>
          @yield('conten')
      </div>
    </div>
  <div class="navigation">
    <ul>
        <div class="toggle">
            <ion-icon name="menu-outline" class="open"></ion-icon>
            <ion-icon name="close-outline" class="close"></ion-icon>
            <div style="margin-left: 130px">
                <li class="nav-item dropdown">
                    <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                </li>
            </div>
        </div>
      @yield('menu')
      <li class="list">
        <b></b>
        <b></b>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
          <span class="title">Sign Out</span>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </a>
      </li>
    </ul>
  </div>
  
  

  
  
  <!----Font Icon---->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

  <!----JS CDN Link---->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!---Custom File---->
  <script src="assets_admin/layout3.js"></script>
  <script>
    let menuToggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation')
    menuToggle.onclick = function(){
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active');
    }

    // add active class in selected list item
    let list = document.querySelectorAll('.list');
    for (let i = 0; i < list.length; i++) {
    list[i].onclick = function() {
        let j = 0;
        while(j < list.length) {
        list[j++].className = 'list';
        }
        list[i].className = 'list active';
    }
    }
    </script>
  {{-- botstrap --}}
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>