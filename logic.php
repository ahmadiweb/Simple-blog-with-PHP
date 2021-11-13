<?php
    session_start();

    // CONNECTION DATABASE
    
    $host =  'localhost:3307';
    $user = 'root';
    $password = '';
    $dbname = 'blog1';
    $dsn = 'mysql:host='. $host .';dbname='. $dbname;

    try {
        $pdo = new PDO($dsn, $user, $password);
    } catch (PDOException $exception) {
        echo $exception->getMessage();
    }

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    // GET DATA FROM REQUEST

    if (isset($_POST['new_psot'])) {
      $title = $_POST['title'];
      $content = $_POST['contente'];

      // INSERT DATA TO DATABASE

      $sql = 'INSERT INTO data (title, content) VALUES(:title, :content)';
      $stmt = $pdo->prepare($sql);
      $stmt->execute(['title' => $title, 'content' => $content]);
      header('location: index.php?new_post=added');
    }
    

    // SELECT POSTS
    
    $sql = 'SELECT * FROM data';
    $stmt= $pdo->query($sql);
    $query = $stmt->fetchAll();
 