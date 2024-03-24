<title>Add News</title>
<?php
if (isset($_POST['submit'])) {
  $c = mysqli_connect('localhost', 'root', '', 'marina_fleet');
  $title = $_POST['title'];
  $image = $_POST['image'];
  $content = $_POST['content'];
  $sql = "INSERT INTO news (title, image, content)
    VALUES ('$title','$image','$content')";
  $result = $c->query($sql);
  if ($result == TRUE) {
    function function_alert($message)
    {
      // Display the alert box 
      echo "<script>alert('$message');</script>";
    }
    // Function call
    function_alert("Đã thêm tin tức mới!");
  } else {
    echo "Error:" . $sql . "<br>" . $c->error;
  }
  $c->close();
}
?>
<!DOCTYPE html>
<html>
<style>
  form {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  h2 {
    display: flex;
    justify-content: center;
    /* Căn giữa ngang */
    font-size: 18px;
    margin: 0;
  }

  input[type="text"],
  select,
  textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
    font-size: 14px;
  }

  textarea {
    height: 100px;
  }

  button[name="submit"],a {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }

  button[name="submit"]:hover {
    background-color: #45a049;
  }

  select[name="service"] option {
    font-size: 14px;
    color: #333;
    background-color: #fff;
  }

  select[name="service"] option:hover {
    background-color: #f2f2f2;
  }
  a {
    margin-left:100px;
  }
</style>
<body>
  <h2>Create News</h2>
  <form method="POST">
    <fieldset>
      <legend>News:</legend>
      Title:<br>
      <input type="text" name="title" required>
      <br>
      Image:<br>
      <input type="file" name="image" required accept="image/*">
      <br><br>
      Content:<br>
      <textarea name="content" required></textarea>
      <br><br>
      <button name="submit">Create</button><a href="admin.php">Go Back Admin Page</a>
    </fieldset>
  </form>
</body>

</html>