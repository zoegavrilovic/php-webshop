
<div class="header">
    <div class="container  .col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">



        <div  class="row header_middle">

            <!-- LOGO PART -->
            <div class="logo_div .col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
             <a href="index.php"><img class="logo_img" src="./slike/logo.jpg"></a>
            </div>

            <!-- SEARCH PART -->
            <div  class="search_div .col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 ">
                <div class="input-group mb-3 search_part">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Pretraži</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Macbook pro 15...">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- ACCOUNT -->
            <div  class="account_part .col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle btn-profile" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"> </i> Moj profil
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<!--
                        <a class="dropdown-item" href="#" style="display:none">Prijavi se</a>

                        <a class="dropdown-item" href="#">Pavle Pavlovic</a>  -->

                        <div class="account_part_main">
                                <a href="prijava.php" class="dropdown-item" id="user_name">Prijavite se</a>
                        </div>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="registracija.php">Registracija</a>
                        <a class="dropdown-item" href="kontakt.php">Kontakt</a>
                        <a class="dropdown-item" href="korpa.php">Korpa</a>
                    </div>
                </div>
            </div>

            <!-- BAG -->
            <div class="bag_part .col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
              <a href="korpa.php" class="fa-korpa"><i class="fa fa-shopping-bag" ></i></a>
                <p class="broj_proizvoda_indikator">2</p>
                <a href="korpa.php" class="fa_text korpa_text">Kupi odmah</a>
            </div>

        </div>

        <div class="row header_bottom">
            <div  class="categories_div .col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 ">

                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle btn-categorie "  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kategorije
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Mobilni telefoni</a>
                        <a class="dropdown-item" href="#">Laptopovi</a>
                        <a class="dropdown-item" href="#">Računari</a>
                        <a class="dropdown-item" href="#">Televizori</a>
                        <li class="dropdown-submenu">
                            <a class="test dropdown-item" tabindex="-1" href="#"> Računarska oprema <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" tabindex="-1" href="#">Grafičke kartice</a></li>
                                <li><a class="dropdown-item" tabindex="-1" href="#">Procesori</a></li>
                                <li><a class="dropdown-item" tabindex="-1" href="#">RAM memorije</a></li>
                                <li><a class="dropdown-item" tabindex="-1" href="#">Ostalo</a></li>
                                <li class="dropdown-submenu">
                                    <a class="test dropdown-item" tabindex="-1" href="#"> Uredjaji za memorisanje <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" tabindex="-1" href="#">HDD</a></li>
                                        <li><a class="dropdown-item" tabindex="-1" href="#">SSD</a></li>

                                    </ul>
                                </li>
                            </ul>

                        </li>
                    </div>
                </div>
            </div>

            <div class="services_div .col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 ">
                <h1 class="header_bottom_headings"> <a href="usluge.php">Usluge </a> </h1>
            </div>

            <div class="action_div .col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 ">
                <h1 class="header_bottom_headings"> <a href="akcije.php">Akcije </a> </h1>
            </div>

            <div class="news_div .col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 ">
                <h1 class="header_bottom_headings"> <a href="">Novosti </a> </h1>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>

<style>
    .header{
        padding-bottom: 30px;
        background-image: linear-gradient(to bottom , white, white, #f7f7f7);
    }
    a{
        color: black;

    }
    a:hover{
        text-decoration: none;
        color: #dc3545;
    }


    /* ---------------------------------- HEADER TOP ---------------------------------- */

    .fa{
        font-size: 1.3em;
        display:inline-block;
    }
    .fa_text,.fa-korpa,.broj_proizvoda_indikator{
        display:inline-block;
        margin-left: 10px;
        font-size: 15px;
        color: white;

    }

    .fa_text:hover{
        cursor:pointer;
    }
    .fa-user{
        margin-right: 10px;
    }
    .korpa_text:hover,.fa-korpa:hover{color:white}
    .broj_proizvoda_indikator{
        font-size: 10px;
        position: absolute;
        margin-left: -2px;
        margin-top: -4px;
        font-weight: 500;
    }

    /* ---------------------------------- HEADER MIDDLE ---------------------------------- */
    .header_middle{
        margin-top: 10px;
    }
    .logo_img{
        width:400px;
    }

    .bag_part,.account_part,.search_part{
        margin-top: 20px;
    }

    .bag_part{
    background-color: green;
        color:white;
        border-radius: 10px;
        height: 40px;
        padding: 7px;

    }


    .fa-shopping-bag{
        font-size: 1.3em;
        margin-left: 10px;
    }
    .dropdown{
        display:inline-block;
        margin-left: 20px;
        width: 70%;
    }

    .account_part_main{
        padding: 10px;
        padding-bottom: 0;
    }


    /* ---------------------------------- HEADER BOTTOM ---------------------------------- */

    .header_bottom{
        margin-top: 25px;
    }

        .header_bottom_headings{
            font-size: 20px;
            padding-top: 10px;
        }
    .btn-categorie{
        width: 250px;
        font-size: 20px;
    }
    .btn-profile{
        width: 150px;
        color: white;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }

    .important{
        color: #dc3545;
        font-weight: 900;
        font-size: 18px;
    }
</style>