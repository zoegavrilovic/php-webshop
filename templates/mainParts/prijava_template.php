
<div id="registracija_div">
    <div class="container " id="container_registracija">
        <h1 class="registracija_heading">Prijavite se </h1>
        <div class="container" id="container_registracija_main" >
            <form>

                <!-- ---------- EMAIL ---------- -->
                <div class="form-group row">
                    <label class="input_label col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" for="exampleInputEmail1">E-mail</label>
                    <input type="email" class="form-control .col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unesite email...">
                </div>

                <!-- ---------- LOZINKA ---------- -->
                <div class="form-group row">
                    <label class="input_label col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" for="exampleInputLozinka">Lozinka</label>
                    <input type="password" class="form-control .col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5" id="exampleInputLozinka"  placeholder="Unesite lozinku...">
                </div>



                <button type="submit" class="btn btn-primary" id="btn_prijavi_se">Prijavi se</button>
                    <a href="zaboravljena_lozinka.php" id="zaboravljena_lozinka">Zaboravili ste lozinku?</a>
            </form>
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
    #container_registracija_main{
        border:solid 1px #dadada;
        background-color:#efefef;
        padding: 50px;
        margin-top: 20px;
    }
    .form-group{
        margin-top: 20px;
    }
    .input_label{
        text-align: right;
        padding-top: 5px;
        font-weight: 600;
    }
    .form-control{
        background-color:transparent;
        color: black;
        border:none;
        border-bottom: solid 1px black;
        border-radius: 0;
    }
    #btn_prijavi_se{
        background-color: #dc3545;
        color: white;
        border: none;
        width: 20%;
        margin-left: 40%;
        margin-top: 20px;
    }

    #zaboravljena_lozinka{
        float: right;
        color: #dc3545;
        font-size: 15px;
        
    }


</style>
