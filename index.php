<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>iDisucss</title>
</head>

<body>
    <?php include 'partials/header.php'; ?>
    <?php include 'partials/carousel.php'; ?>
    <?php include 'partials/db.php'; ?>
    <!-- cateogry container start here -->
    <div class="container my-4">
        <h2 class="text-center my-4">iDiscuss- Browse Categories</h2>
        <div class="row">
        <!-- Fetching all cateogries -->
        <?php 
             $sql = "SELECT * FROM `categories`";
             $result = mysqli_query($conn,$sql);
             $row = mysqli_num_rows($result);
          while($row= mysqli_fetch_assoc($result)){
           $id = $row['categories_id'];
           $cat = $row['categories_name'];
           $desc = $row['categories_description'];
               echo '<div class="col-md-3 my-2">
                   <div class="card" style="width: 18rem;">
                       <img src="https://source.unsplash.com/1600x900/?coding,pyhton" class="card-img-top" alt="...">
                       <div class="card-body">
                           <h5 class="card-title"> <a href = "partials/threadlist.php? catid='.$id.'">'.$cat.' </a></h5>
                           <p class="card-text">'.substr($desc,0,90).'...</p>
                           <a href="partials/threadlist.php? catid='.$id.' " class="btn btn-primary">View Threads</a>
                       </div>
                   </div>
               </div>';
        }
        ?>
        <!-- using for loop to iterate ctaeogry -->



    <?php include 'partials/footer.php';?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>