
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas2.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Customer</label>
                    <input type="text" name="customer" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio1" value="tv">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio2" value="kulkas">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio3" value="mesin cuci" disabled>
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="text" name="total_item" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for=""></label>
                    <input type="date" name="kurir" value="" class="form-control">
                </div>

                <label for="">Courier Type</label>
                <select class="form-select form-control" class="form-control">
                    <option selected>Choose Courier Type :</option>
                    <option value="">Tiki</option>
                    <option value="">Si Cepat</option>
                    <option value="">Pos</option>
                    <option value="">Grab</option>
                    <option value="">Gojek</option>
                </select>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Courier Cost</label>
                    <input type="text" name="biaya_kurir" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Assurance Cost</label>
                    <input type="text" name="jaminan" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-success btn-sm btn-block">

            </form>
            <?php
                $_customer = $_POST['customer'];
                $_item = $_POST['item'];
                $_total_item = $_POST['total_item'];
                $_kurir = $_POST['kurir'];
                $_alamat = $_POST['alamat'];
                $_biaya_kurir = $_POST['biaya_kurir'];
                $_jaminan = $_POST['jaminan'];
                $_simpan = $_POST ['simpan'];
                $_total_biaya = ($_biaya_kurir + $_jaminan);
            
                
                
            
            ?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer :<?= $_customer?> </li>
                    <li class="list-group-item">Item : <?= $_item?> </li>
                    <li class="list-group-item">Date Shipping : <?= $_total_item?> </li>
                    <li class="list-group-item">Courier Type :<?= $_kurir?> </li>
                    <li class="list-group-item">Shipping Address : <?= $_alamat?> </li>
                    <li class="list-group-item">Courier Cost : <?= $_biaya_kurir?> </li>
                    <li class="list-group-item">Assurance Cost : <?= $_jaminan?> </li>
                    <li class="list-group-item">Total Cost :<?= $_total_biaya?> </li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3000.000</li>
                    <li class="list-group-item">Refrigator : Rp.6000.000</li>
                    <li class="list-group-item">Washing Machine : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>
