<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Penampungan Duplikat</title>
  </head>
  <body>
        <div class="container mt-3">
            <h1 class="text-center">Penampungan Duplikat Exemplar</h1>
            <form method="post" action="/listex">
                <div class="row d-flex align-items-center">
                    <div class="col-8">
                        <div class="form-group">
                            <label for="name">Tambah nama buku</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama buku" name="name">
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary" name="insert">Tambah</button>
                    </div>
                </div> 
            </form>
            <form method="POST">
                <div class="row d-flex align-items-center">
                    <div class="col-8">
                        <div class="form-group">
                        <label for="search">Cari buku</label>
                        <input type="text" class="form-control" id="search" placeholder="Masukkan pencarian">
                    </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </div> 
            </form>
            <div class="card mt-3">
                <div class="card-body">
                    <p>hei</p>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "list_exemplar";

    // Create connection
    // $conn = new mysqli($servername, $username, $password, $db_name);

    // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // $getName = $_POST['name'];

    if(isset($_POST['insert'])){
        alert("Hello World");
    }


    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }

    // $sql = "INSERT INTO $db_name ('name') VALUES ($getName)";

    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
?>