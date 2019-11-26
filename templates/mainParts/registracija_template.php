
<div id="registracija_div">
    <div class="container " id="container_registracija">
        <h1 class="registracija_heading">Registrujte se </h1>
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

                <!-- ---------- PONOVITE LOZINKU ---------- -->
                <div class="form-group row">
                    <label class="input_label col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" for="exampleInputPonoviteLozinka">Ponovite lozinku</label>
                    <input type="password" class="form-control .col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5" id="exampleInputPonoviteLozinka"  placeholder="Ponovite lozinku...">
                </div>

                <!-- ---------- IME ---------- -->
                <div class="form-group row">
                    <label class="input_label col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" for="exampleInputIme">Ime</label>
                    <input type="text" class="form-control .col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5" id="exampleInputIme"  placeholder="Unesite ime...">
                </div>

                <!-- ---------- JMBG ---------- -->
                <div class="form-group row">
                    <label class="input_label col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" for="exampleInputJMBG">JMBG</label>
                    <input type="number" class="form-control .col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5" id="exampleInputJMBG"  placeholder="Unesite JMBG...">
                </div>

                <!-- ---------- ADRESA ---------- -->
                <div class="form-group row">
                    <label class="input_label col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" for="exampleInputAdresa">Adresa</label>
                    <input type="text" class="form-control .col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5" id="exampleInputAdresa"  placeholder="Unesite adresu...">
                </div>

                <!-- ---------- MAILING LISTA ---------- -->
             <div class="checkboxs">
                <div class="form-check checkbox_part" id="checkbox_part1">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                    <label class="form-check-label" for="checkbox1">
                     Prijavi me na mailing listu
                    </label>
                </div>
                <div class="form-check checkbox_part" id="checkbox_part2">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                    <label class="form-check-label" for="checkbox2">
                        <a href="#">  Prihvatam uslove korišćenja</a>
                    </label>
                </div>
             </div>


                <button type="submit" class="btn btn-primary" id="btn_registruj">Registruj se</button>

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
            padding-bottom: 30px;
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
    #btn_registruj{
        background-color: #dc3545;
        color: white;
        border: none;
        width: 20%;
        margin-left: 40%;
        margin-top: 20px;
    }

    .checkboxs{
        width: 50%;
        margin-left: 25%;
    }
    .checkboxs:hover{
        cursor: pointer;
        
    }
    #checkbox_part1{
        float: left;
    }
    #checkbox_part2{
        float: right;
    }

</style>
