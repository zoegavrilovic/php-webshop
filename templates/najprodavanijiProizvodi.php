
<div id="najprodavaniji_proizvodi">

    <h1 class="heading_product_row">Najprodavaniji proizvodi</h1>
    <div class="">
        <div class="row product_row">

            <!-- --------------------- PRVI PROIZVOD --------------------- -->
            <div class="product product_first_in_row services_div col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="product_top">
                    <img class="product_image" src="./slike/proizvod.png">
                    <p class="product_price">20,000.-</p>
                    <a href="" class="product_name">USB Flash 128GB 3.0 Kingston DT100G3</a>
                </div>
                <div class="product_bottom">
                    <p class="product_description">Kingstonov DataTraveler® 100 G3 (DT100G3) USB fleš disk je usklađen sa USB 3.0 specifikacijama da bi iskoristio tehnologiju u novijim notebook računarima, desktop računarima i digitalnim uređajima</p>
                </div>
                <div class="addToCard">
                    <p class="addToCard_text">Dodaj u korpu</p>
                    <i class="fa fa-shopping-bag addToCard_icon" ></i>
                </div>
            </div>

            <!-- --------------------- DRUGI PROIZVOD --------------------- -->
            <div class="product services_div col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="product_top">
                    <img class="product_image" src="./slike/proizvod.png">
                    <p class="product_price">20,000.-</p>
                    <a href="" class="product_name">USB Flash 128GB 3.0 Kingston DT100G3</a>
                </div>
                <div class="product_bottom">
                    <p class="product_description">Kingstonov DataTraveler® 100 G3 (DT100G3) USB fleš disk je usklađen sa USB 3.0 specifikacijama da bi iskoristio tehnologiju u novijim notebook računarima, desktop računarima i digitalnim uređajima</p>
                </div>
                <div class="addToCard">
                    <p class="addToCard_text">Dodaj u korpu</p>
                    <i class="fa fa-shopping-bag addToCard_icon" ></i>
                </div>
            </div>

            <!-- --------------------- TRECI PROIZVOD --------------------- -->
            <div class="product services_div col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="product_top">
                    <img class="product_image" src="./slike/proizvod.png">
                    <p class="product_price">20,000.-</p>
                    <a href="" class="product_name">USB Flash 128GB 3.0 Kingston DT100G3</a>
                </div>
                <div class="product_bottom">
                    <p class="product_description">Kingstonov DataTraveler® 100 G3 (DT100G3) USB fleš disk je usklađen sa USB 3.0 specifikacijama da bi iskoristio tehnologiju u novijim notebook računarima, desktop računarima i digitalnim uređajima</p>
                </div>
                <div class="addToCard">
                    <p class="addToCard_text">Dodaj u korpu</p>
                    <i class="fa fa-shopping-bag addToCard_icon" ></i>
                </div>
            </div>

            <!-- --------------------- CETVRTI PROIZVOD --------------------- -->
            <div class="product services_div col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="product_top">
                    <img class="product_image" src="./slike/proizvod.png">
                    <p class="product_price">20,000.-</p>
                    <a href="" class="product_name">USB Flash 128GB 3.0 Kingston DT100G3</a>
                </div>
                <div class="product_bottom">
                    <p class="product_description">Kingstonov DataTraveler® 100 G3 (DT100G3) USB fleš disk je usklađen sa USB 3.0 specifikacijama da bi iskoristio tehnologiju u novijim notebook računarima, desktop računarima i digitalnim uređajima</p>
                </div>
                <div class="addToCard">
                    <p class="addToCard_text">Dodaj u korpu</p>
                    <i class="fa fa-shopping-bag addToCard_icon" ></i>
                </div>
            </div>



        </div>
    </div>
</div>



<style>
    #najprodavaniji_proizvodi{
        margin:30px;
        margin-top: 100px;


    }
    .heading_product_row{
        margin-bottom: 30px;
        color: #dc3545;
        margin-left: 200px;
        margin-top: 30px;


    }
    .product_row{
        padding:10px 15%;

        margin: 5px;
        padd


    }
    .product{
        display: flex;
        flex-direction: column;
        height:AUTO;
        border: solid 1px #dadada;
    }



    .product_top{
        flex:3
    }
        .product_price{
            color: #dc3545;
            font-size: 40px;
            margin-left: 15px;
            font-weight: 700;
        }
        .product_name{
            font-weight: 400;
            color: black;
            font-size: 18px;
            width: 80%;
            margin-left: 5%;
            margin-top: -10px;
            margin-bottom: 20px;
        }
    .product_image{
        width: 100%;
    }
    .product_bottom{
        flex:1;
    }
        .product_description{
            font-size: 13px;
            font-weight: 400;
            margin:5%;
            width: 90%;
        }


.addToCard{
    height: 55px;
    text-align: center;
    margin-bottom: 10px;
    background-color:#dc3545;
    transition-duration:.5s
}
.addToCard:hover{
    cursor: pointer;
    transform:scale(0.98);
}
    .addToCard_text,.addToCard_icon{
        display:inline-block;
        font-size: 20px;
        padding-top: 10px;
        color: white;

    }



</style>