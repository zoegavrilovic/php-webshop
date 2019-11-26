

<div id="unos_div">
    <div class="container" id="unos_container">
        <h1 class="heading_product_row">Unos proizvoda</h1>
        <div class="row unos_main_parts">
            <button class="buttons" id="btn-laptop">Laptop</button>
            <button class="buttons" id="btn-PC">PC</button>
            <button class="buttons" id="btn-TV">TV</button>
            <button class="buttons" id="btn-mobilni">Mobilni</button>
            <div class="dropdown unos_dropdown">
                <button class="btn buttons dropdown-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oprema</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <p class="dropdown-item" id="btn-ssd">SSD</p>
                    <p class="dropdown-item"  id="btn-graficke">Grafičke kartice</p>
                    <p class="dropdown-item"  id="btn-procesor">Procesor</p>
                    <p class="dropdown-item"  id="btn-hdd">HDD</p>
                    <p class="dropdown-item"  id="btn-ram">RAM</p>
                </div>
            </div>
        </div>
    </div>

    <main class="unos_main_divs" id="laptop_unos"><?php include './administrator/kategorijeUnosa/laptop_unos.php';?> </main>
    <main class="unos_main_divs" id="pc_unos"> <?php include './administrator/kategorijeUnosa/pc_unos.php';?></main>
    <main class="unos_main_divs" id="tv_unos"> <?php include './administrator/kategorijeUnosa/tv_unos.php';?></main>
    <main class="unos_main_divs" id="mobilni_unos"> <?php include './administrator/kategorijeUnosa/mobilni_unos.php';?></main>
    <main class="unos_main_divs" id="ssd_unos"> <?php include './administrator/kategorijeUnosa/ssd_unos.php';?></main>
    <main class="unos_main_divs" id="graficke_unos"> <?php include './administrator/kategorijeUnosa/graficke_unos.php';?></main>
    <main class="unos_main_divs" id="procesor_unos"> <?php include './administrator/kategorijeUnosa/procesor_unos.php';?></main>
    <main class="unos_main_divs" id="hdd_unos"> <?php include './administrator/kategorijeUnosa/hdd_unos.php';?></main>
    <main class="unos_main_divs" id="ram_unos"> <?php include './administrator/kategorijeUnosa/ram_unos.php';?></main>

</div>


<style>
    .heading_product_row{
        margin-bottom: 30px;
        color: #dc3545;
        margin-left: 200px;
        margin-top: 30px;
    }
    .unos_main_parts{margin: 50px;}
    .buttons{
        border:solid 2px #dc3545;
        border-radius: 5px;
        height: 40px;
        width: 150px;
        color: #dc3545;
        font-size: 20px;
        font-weight: 600;
        background-color: transparent;
        margin-left: 2%;

    }
    .unos_dropdown{
        width: auto;
        display: inline-block;
        margin-left: 2%;
    }
    .dropdown-item:hover{cursor: pointer;}
    .dropdown-btn{padding-top: 2px;}

    .unos_main_divs{display: none;}

</style>

<script>

    $(document).ready(function(){
        function init(){
            $(".unos_main_divs").css("display","none");
            $(".buttons").css({"background-color":"white","color":"#dc3545"});

        }
        /* ------------------ laptop klik ------------------*/
        $("#btn-laptop").click(function(){
            init();
            $("#laptop_unos").css("display","block");
            $(this).css({"background-color":"#dc3545","color":"white"});


        });

        /* ------------------ PC klik ------------------*/
        $("#btn-PC").click(function(){
            init();
            $("#pc_unos").css("display","block");
            $(this).css({"background-color":"#dc3545","color":"white"});

        });

        /* ------------------ TV klik ------------------*/
        $("#btn-TV").click(function(){
            init();
            $("#tv_unos").css("display","block");
            $(this).css({"background-color":"#dc3545","color":"white"});

        });

        /* ------------------ MOBILNI klik ------------------*/
        $("#btn-mobilni").click(function(){
            init();
            $("#mobilni_unos").css("display","block");
            $(this).css({"background-color":"#dc3545","color":"white"});

        });

        /* ------------------ SSD klik ------------------*/
        $("#btn-ssd").click(function(){
            init();
            $("#ssd_unos").css("display","block");
            $(".dropdown-btn").css({"background-color":"#dc3545","color":"white"});

        });

        /* ------------------ GRAFICKE klik ------------------*/
        $("#btn-graficke").click(function(){
            init();
            $("#graficke_unos").css("display","block");
            $(".dropdown-btn").css({"background-color":"#dc3545","color":"white"});

        });

        /* ------------------ PROCESOR klik ------------------*/
        $("#btn-procesor").click(function(){
            init();
            $("#procesor_unos").css("display","block");
            $(".dropdown-btn").css({"background-color":"#dc3545","color":"white"});

        });


        /* ------------------ HDD klik ------------------*/
        $("#btn-hdd").click(function(){
            init();
            $("#hdd_unos").css("display","block");
            $(".dropdown-btn").css({"background-color":"#dc3545","color":"white"});

        });

        /* ------------------ RAM klik ------------------*/
        $("#btn-ram").click(function(){
            init();
            $("#ram_unos").css("display","block");
            $(".dropdown-btn").css({"background-color":"#dc3545","color":"white"});

        });







    });



</script>