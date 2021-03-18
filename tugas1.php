<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas1.php" method="GET" class="mt-3">
            
            <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="nama" value="" class="form-control">
                </div>

                
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>
                <label for="">Lesson</label>
                <select class="form-select form-control" class="form-control">
                    <option selected>Choose Lesson :</option>
                    <option value="">Web Programming</option>
                    <option value="">Database</option>
                    <option value="">Statiska</option>
                    <option value="">PKN</option>
                    <option value="">UI/UX</option>
                </select>
                <div class="form-group">
                    <label for=""> UTS Value</label>
                    <input type="text" name="nilai_uts" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">UAS Value</label>
                    <input type="text" name="nilai_uas" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Assignment Value</label>
                    <input type="text" name="nilai_tugas" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">

            </form>

            <?php
            $_nama = $_GET['nama'];
            $_nim= $_GET['nim'];
            $_nilai_tugas = $_GET['nilai_tugas'];
            $_nilai_uas = $_GET['nilai_uas'];
            $_nilai_uts = $_GET['nilai_uts'];
            $_proses = $_GET['proses'];
            $_total_nilai = ($_nilai_tugas + $_nilai_uas + $_nilai_uts);
            if ($_total_nilai >= 80 and $_total_nilai <= 100) {
                $_grade_nilai = "A";
                }elseif ($_total_nilai >= 70 and < 80) {
                    $_grade_nilai = "B";
                }elseif ($_total_nilai >= 60 and < 70) {
                    $_grade_nilai = "C";
                }elseif ($_total_nilai >= 50 and < 60) {
                    $_grade_nilai = "D"
                }elseif ($_total_nilai < 50) {
                    $_grade_nilai = "E"
                }
            }
            ?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name :<?= $_nama?> </li>
                    <li class="list-group-item">Nim : <?= $_nim?></li>
                    <li class="list-group-item">Lesson:<?= $_nilai_tugas?></li>
                    <li class="list-group-item"> UTS Value : <?= $_nilai_uts?></li>
                    <li class="list-group-item">UAS Value: <?= $_nilai_uas?></li>
                    <li class="list-group-item">Assignment Value <?= $_nilai_tugas?> </li>
                    <li class="list-group-item">Value Total: <?= $_total_nilai?>  </li>
                    <li class="list-group-item">Value in Alphabet: <?= $_grade_nilai?></li>
                    
                    
                </ul>
                </div>

            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">C : Less than 40 </li>
                    
                    
                </ul>
                </div>

        </div>
        
    </div>
</body>
</html>
