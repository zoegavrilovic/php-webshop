
<div id="registracija_div">
    <div class="container " id="container_registracija">
        <h1 class="registracija_heading">Usluge </h1>
        <div class="container" id="container_service_main" >
            <div class="row service_row">
                <div class="service  col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <h3 class="service_heading">Isporuka</h3>
                    <img class="service_image" src="./slike/isporuka.svg">
                </div>
                <div class="service  col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <h3 class="service_heading">Garancija</h3>
                    <img class="service_image" src="./slike/garancija.png">
                </div>
            </div>

            <div class="row service_row">
                <div class="service  col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <h3 class="service_heading">Popravka</h3>
                    <img class="service_image" src="./slike/popravka.png">
                </div>
                <div class="service  col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <h3 class="service_heading">Garancija</h3>
                    <img class="service_image" src="./slike/povratak.png">
                </div>
            </div>
        </div>

    </div>
</div>



<style>
    #container_registracija{
        border-top: solid 1px #dadada;
        padding: 20px;
        margin-top: 40px;
    }
    .registracija_heading{
        color: #dc3545;
    }
    #container_service_main{
        padding-bottom: 30px;
        margin-top: 20px;

    }
        .service{
            color: white;
            background-color: #dc3545;
            text-align: center;
            margin-left: 8%;
            transition-duration: .4s;
        }
        .service:hover{
            cursor: pointer;
            transform: scale(1.1);
        }
        .service_heading{
            font-size: 50px;
            margin: 20px;

        }
    .service_image{
        width: 40%;
        padding-bottom: 40px;
    }
    .service_row{
        margin-top: 40px;
    }



</style>
