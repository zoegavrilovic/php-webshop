

<div id="edit_div">
    <div class="container" id="edit_container">
        <h1 class="heading_product_row">Edit proizvoda</h1>
        <div class="row edit_main_parts">
            <button class="buttons" id="btn-laptop">Laptop</button>
            <button class="buttons" id="btn-PC">PC</button>
            <button class="buttons" id="btn-TV">TV</button>
            <button class="buttons" id="btn-mobilni">Mobilni</button>
            <div class="dropdown edit_dropdown">
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
<!--
    <main class="edit_main_divs" id="laptop_edit"><?php include './administrator/kategorijeEdita/laptop_edit.php';?> </main>
    <main class="edit_main_divs" id="pc_edit"> <?php include './administrator/kategorijeEdita/pc_edit.php';?></main>
    <main class="edit_main_divs" id="tv_edit"> <?php include './administrator/kategorijeEdita/tv_edit.php';?></main>
    <main class="edit_main_divs" id="mobilni_edit"> <?php include './administrator/kategorijeEdita/mobilni_edit.php';?></main>
    <main class="edit_main_divs" id="ssd_edit"> <?php include './administrator/kategorijeEdita/ssd_edit.php';?></main>
    <main class="edit_main_divs" id="graficke_edit"> <?php include './administrator/kategorijeEdita/graficke_edit.php';?></main>
    <main class="edit_main_divs" id="procesor_edit"> <?php include './administrator/kategorijeEdita/procesor_edit.php';?></main>
    <main class="edit_main_divs" id="hdd_edit"> <?php include './administrator/kategorijeEdita/hdd_edit.php';?></main>
    <main class="edit_main_divs" id="ram_edit"> <?php include './administrator/kategorijeEdita/ram_edit.php';?></main> -->

</div>

<?php include './administrator/table_edit.php';?>
<style>
    .heading_product_row{
        margin-bottom: 30px;
        color: #dc3545;
        margin-left: 200px;
        margin-top: 30px;
    }
    .edit_main_parts{margin: 50px;}
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
    .edit_dropdown{
        width: auto;
        display: inline-block;
        margin-left: 2%;
    }
    .dropdown-item:hover{cursor: pointer;}
    .dropdown-btn{padding-top: 2px;}

    .edit_main_divs{display: none;}


</style>

<script>

    $(document).ready(function(){
        function init(){
            $(".edit_main_divs").css("display","none");
            $(".buttons").css({"background-color":"white","color":"#dc3545"});


        }
        /* ------------------ laptop klik ------------------*/
        $("#btn-laptop").click(function(){
            init();
            $(this).css({"background-color":"#dc3545","color":"white"});


        });

        /* ------------------ PC klik ------------------*/
        $("#btn-PC").click(function(){
            init();
            $(this).css({"background-color":"#dc3545","color":"white"});

        });

        /* ------------------ TV klik ------------------*/
        $("#btn-TV").click(function(){
            init();
            $(this).css({"background-color":"#dc3545","color":"white"});

        });

        /* ------------------ MOBILNI klik ------------------*/
        $("#btn-mobilni").click(function(){
            init();
            $(this).css({"background-color":"#dc3545","color":"white"});

        });

        /* ------------------ SSD klik ------------------*/
        $("#btn-ssd").click(function(){
            init();
            $(".dropdown-btn").css({"background-color":"#dc3545","color":"white"});

        });

        /* ------------------ GRAFICKE klik ------------------*/
        $("#btn-graficke").click(function(){
            init();
            $(".dropdown-btn").css({"background-color":"#dc3545","color":"white"});

        });

        /* ------------------ PROCESOR klik ------------------*/
        $("#btn-procesor").click(function(){
            init();
            $(".dropdown-btn").css({"background-color":"#dc3545","color":"white"});

        });


        /* ------------------ HDD klik ------------------*/
        $("#btn-hdd").click(function(){
            init();
            $(".dropdown-btn").css({"background-color":"#dc3545","color":"white"});

        });

        /* ------------------ RAM klik ------------------*/
        $("#btn-ram").click(function(){
            init();
            $(".dropdown-btn").css({"background-color":"#dc3545","color":"white"});

        });

    });
</script>

