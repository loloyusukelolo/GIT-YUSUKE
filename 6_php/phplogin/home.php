<?php 
// - load db connect
include 'db_connect.php';

// - assuming that this is the user ID I got after logging in.
// - this is wrong
$_SESSION["user_id"] = 2;

// - if the button was pressed, upload image
if (isset($_POST["new_image_upload"])) {
  // - prepare the variables
  $description = $_POST["new_image_description"];
  $file = $_FILES["new_image"];
  $user_id = $_SESSION["user_id"];
  $is_valid_extension = false;

  // - get extension
  $extension = getFileExtension($file["name"]);

  // - valid extensions, show error if false
  if ($extension == "jpg" || $extension == "jpeg") {
    $is_valid_extension = true;

  }

  // - if the user uploaded a valid image
  if ($is_valid_extension == true) {
    // - prepare the sql
    $sql = "
    insert into images 
    (id, status, user_id, image_url, description)

    values
    (null, 1, '$user_id', '$extension', '$description')
    ";

    // - insert new image
    $query = mysqli_query($CONNECTION, $sql);

    // - get last inserted ID
    $last_insert_id = mysqli_insert_id($CONNECTION);

    // - transfer the file to another directory
    move_uploaded_file(
      $file["tmp_name"], 
      "./assets/" . $last_insert_id . "." . $extension
    );

    echo "An image was uploaded!";
    header("Location: home.php");
    return false;

  } else {    
    echo "An error occurred while uploading an image!";
  }
}


$sql = "
  select 
    * 
  from 
    images 
  order by id desc;
";

$result = mysqli_query($CONNECTION, $sql);

var_dump($sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Album example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/album/album.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Album</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Gallery example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="javascript:void(0);" class="btn btn-primary my-2" onclick='$("#modal_create_new_image").modal("show");'>Upload new image!</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <?php $i = 0; ?>
            <?php while($row = mysqli_fetch_assoc($result)){?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo "./assets/" . $row["id"] . "." . $row["image_url"]; ?>" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><?php echo $row["description"]; ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Remove</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">2019-10-03</small>
                  </div>
                </div>
              </div>
            </div>
            <?php $i++; ?>
            <?php } ?>
          </div>
          <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <!-- HTMLのページネーション -->
                      <?php 

                 $results_per_page =3;

// find out the number of result in the database
$sql = "SELECT * FROM images";
$result = mysqli_query($CONNECTION,$sql);

$number_of_results = mysqli_num_rows($result);

// var_dump($number_of_results);

// while ($row = mysqli_fetch_array($result)){
//  echo $row['id'].' '. $row['status'].' '.
//  $row['user_id'].' '.$row['image_url'].''.$row[$description].'<br>';
// }
 $number_of_pages = ceil($number_of_results/$results_per_page);



//determine which page number visiter is currently on
 if(!isset($_GET['page'])){
  $page =1;
 }else{
  $page= $_GET['page'];
 }

 $this_page_first_result =($page-1)*$results_per_page;
 
 $sql = "SELECT * FROM images LIMIT " . $this_page_first_result .','.$results_per_page;
 $result =mysqli_query($CONNECTION,$sql);

 while ($row = mysqli_fetch_array($result)){
  echo $row['id'].' '. $row['status'].' '.
  $row['user_id'].' '.$row['image_url'].''.$row['description'].'<br>';
}

//display the links to the pages
  for ($page=1;$page<=$number_of_pages;$page++ ) { 
  echo '<a href="home.php?page=' .$page.'">' .$page.'</a>';
  }
 ?>





                      <a href="home.php"></a>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>

                    </ul>
                </nav>
            </div>
          </div>        
        </div>
      </div>
    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
            <a href="login.php?logout=ture">Back to top</a>
        </p>
      </div>
    </footer>

    <!-- modal for uploading image --> 
    <div class="modal" tabindex="-1" role="dialog" id="modal_create_new_image">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Upload new image!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" enctype='multipart/form-data'>
                <div class="form-group">
                    <label for="exampleFormControlFile1">SELECT FILE:</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="new_image">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">DESCRIPTION</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="new_image_description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="new_image_upload">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
  </body>
</html>