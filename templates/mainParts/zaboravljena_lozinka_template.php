
<div id="zaboravljenaLozinka_div">
    <div class="container " id="container_zaboravljenaLozinka">
        <h1 class="zaboravljenaLozinka_heading">Zaboravii ste lozinku? </h1>
        <p class="zaboravljenaLozinka_tekst">Dozvolite nam da Vam pomognemo. Unesite email adresu u odgovarajuće polje i dobiteće mail sa linkom za novu lozinku. </p>

        <form>
            <!-- ---------- EMAIL ---------- -->
            <div class="form-group row">
                <label class="input_label col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control .col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unesite email...">
            </div>
            <button type="submit" class="btn btn-primary" id="btn_vratiLozinku">Potvrdi</button>

        </form>
    </div>
</div>



<style>
    #container_zaboravljenaLozinka{
        border-top: solid 1px #dadada;
        padding: 20px;
        margin-top: 40px;
    }
    .zaboravljenaLozinka_heading{
        color: #dc3545;
    }
    #btn_vratiLozinku{
        background-color: #dc3545;
        color: white;
        border: none;
        width: 20%;
        margin-left: 40%;
        margin-top: 20px;
    }
    form{
        margin:100px
    }


</style>
