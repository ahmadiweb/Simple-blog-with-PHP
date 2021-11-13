
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-82">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <title>Ali blog | Create a new post</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <form action="logic.php" method="POST">
            <div class="form-group mt-5">
              <label class="mb-3">Title</label>
              <input type="text" class="form-control" name="title" aria-describedby="helpId" placeholder="Title">
              <div class="form-group mt-5">
                <label class="mb-3">Content</label>
                <textarea class="form-control" name="content" rows="3"></textarea>
              </div>
              <button class="btn btn-primary mt-5" name="new_psot">Add post</button>
            </div>
        </form>   
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>