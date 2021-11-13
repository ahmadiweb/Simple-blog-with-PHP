<?php
include 'logic.php';
?>
<!DOCTYPE html>
<html>
<head dir="rtl" lang="en"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ali Blog</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
                if (isset($_GET['new_post'])) {
                    if ($_GET['new_post'] == 'added') {
                        echo '<h3 class="container bg-success text-center fw-100 text-light p-5 mt-5">new post added</h3>';
                    }
                }
            ?>
            <div class="col-12 text-center mt-5">
                <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
            </div>
            <div class="row">
                 <?php foreach ($query as $q) { ?>
                    <div class="col-4 d-flex justify-conent-center align-items-center">
                        <div class="card text-white bg-dark mt-5">
                            <div class="card-body" style="width:18rem;">
                                <h5 class="card-title"><?php echo $q->title ?></h5>
                                <p class="card-text"><?php echo $q->content ?></p>
                                <a href=" <?php echo '?id=' . $q->id ?>" class="btn btn-light">Read more</a>
                            </div>
                        </div>
                    </div>
                <?php } ?> 
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>