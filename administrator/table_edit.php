<div class="edit_main_parts">
    <div class="container">
        <h1 class="oprema_heading"> Laptop edit</h1>
    </div>
    <table class="table table-bordered" id="table_edit_laptop">
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
            <td>
                <div class="container table_kolicina">
                    <button data-decrease class="btn-decrease">-</button>
                    <input data-value type="text" value="1" disabled class="value-number" />
                    <button data-increase class="btn-increase">+</button>
                </div>
            </td>
            <td ><button class="btn btn-success edit-btn">Edit</button></td>
            <td><button class="btn btn-danger delete-btn">Delete</button></td>

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
        font-size: 20px;
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
    td,th{
        width: 20%;}

    .edit-btn,.delete-btn{
        width: 120px;
    }

    .table_kolicina{
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