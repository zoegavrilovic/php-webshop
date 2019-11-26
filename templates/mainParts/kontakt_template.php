
<div id="kontakt_div">
    <div class="container">
        <form >
            <div class="row">
                <!-- ---------- IME ---------- -->
                <div class="form-group inline-form col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <input type="text" class="form-control " id="exampleInputIme"  placeholder="Unesite ime i prezime...">
                </div>

                <div class="form-group inline-form col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unesite email...">
                </div>
                <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Unesite poruku..."></textarea>
                </div>
            </div>

            <button class="btn btn-danger" id="posalji_poruku" > Pošalji poruku </button>
        </form>

    </div>
</div>
<style>
    #kontakt_div{
        margin: 100px;
    }
    .inline-form{
        margin-left: 5%;
    }
    .form-control{
        border:none;
        border-radius: 0;
        background-color: transparent;
        border-bottom: solid 1px black;
    }
    textarea{
        margin-top: 30px;
    }
    #posalji_poruku{
        width: 40%;
        margin-left: 30%;
        margin-top: 30px;
    }

</style>