<div id="korpa_div">

    <div class="container">
        <div class="row">
            <div class="korpa_artikli col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">

                <?php include './templates/korpa/korpa_tabela.php';?>
            </div>


            <div class="korpa_placanje col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                <?php include './templates/korpa/korpa_porucivanje.php';?>


            </div>
        </div>
    </div>
</div>


<style>
    #korpa_div{
        margin-top: 60px;
        margin-bottom: 60px;

    }
    .korpa_artikli,.korpa_placanje{
        padding: 2%;
    }
    .korpa_artikli{
        border-right: solid 1px #dadada;
    }
    .artikal_slika{
        width: 30%;
    }
    thead{
        background-color: #dc3545;
        color: white;
    }
    th{
        border: solid 1px #dadada;
    }
    tr{
        border: solid 1px #dadada;
        text-align: center;
    }
    td{
        width: 25%;
        border: solid 1px #dadada;

    }
    .table_cena{
        font-size: 25px;
        color: #dc3545;
        font-weight: 600;
        background-color: white;
    }

    .btn-decrease,.btn-increase,.value-number{
        display: inline-block;
        width: 30%;
        text-align: center;
        background-color: transparent;
        border: none;
        font-size: 30px;
        }

    .btn-decrease{
       color: #dc3545;
    }
    .btn-increase{
        color: green;
    }


    .korpa_placanje_parts{
        margin-bottom: 40px;
    }
    .placanje_heading{
        background-color: #dc3545;
        color: white;
        padding: 2% 5%;
        border-radius: 2px;
    }
    .btn-group-toggle{
        width: 100%;
    }
    .btn:hover{
        cursor: pointer;
        
    }

    .btn-poruci{
        width: 100%;
        font-size: 25px;
        font-weight: 600;
    }
    .final_cena{
        font-size: 50px;
        text-align: right;
        padding: 0;
        margin: 0;
    }


</style>

<script>
    $(function() {
        $('[data-decrease]').click(decrease);
        $('[data-increase]').click(increase);
        $('[data-value]').change(valueChange);
    });

    function decrease() {
        var value = $(this).parent().find('[data-value]').val();
        if(value > 1) {
            value--;
            $(this).parent().find('[data-value]').val(value);
        }
    }

    function increase() {
        var value = $(this).parent().find('[data-value]').val();
        if(value < 100) {
            value++;
            $(this).parent().find('[data-value]').val(value);
        }
    }

    function valueChange() {
        var value = $(this).val();
        if(value == undefined || isNaN(value) == true || value <= 0) {
            $(this).val(1);
        } else if(value >= 101) {
            $(this).val(100);
        }
    }
</script>