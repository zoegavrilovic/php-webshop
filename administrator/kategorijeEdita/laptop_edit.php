<div class="unos_main_parts">
    <div class="container">
        <h1 class="oprema_heading"> Laptop edit</h1>
    </div>
    <table class="table" id="table_edit_laptop">
        <thead>
        <tr>
            <th class="redni_broj">Redni broj</th>
            <th>Slika</th>
            <th>Naziv proizvoda</th>
            <th>Količina</th>
            <th>Uredi</th>
            <th>Obriši</th>

        </tr>
        </thead>
        <tbody id="table_tbody_edit_laptop">
        <tr>
            <th scope="row">1</th>
            <td><img class="product_image" src="./slike/telefoni.jpg"></td>
            <td>Huawei p20 lite 64gb</td>
            <td>@mdo
            <td>@mdo</td>
            <td>@mdo</td>

        </tr>
        <tr>

        </tbody>
    </table>

</div>

<style>
    .table{
        width: 90%;
        margin-left: 5%;
        border:solid 1px #dc3545;
        margin-top: 30px;
        text-align: center;
    }
    thead{
        background-color:#dc3545;
        color: white;
        text-align: center;
    }
    th,td{
        border:solid 1px #dadada;
    }
    .redni_broj{
        width: 10%;
    }
    .product_image{
        width: 30%;
        transition-duration:.5s
    }
    .product_image:hover{
        transform:scale(5);
        cursor: pointer;
    }
    td{
        width: 20%;}
</style>

