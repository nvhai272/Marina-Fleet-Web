
<title>Comment</title>
<?php
if (isset($_POST['submit'])) {
  $c = mysqli_connect('localhost', 'root', '', 'marina_fleet');
  $name = $_POST['name'];
  $image = $_POST['image'];
  $service = $_POST['service'];
  $comment = $_POST['comment'];
  $sql = "INSERT INTO assess (name,service,img,comment)
    VALUES ('$name','$service' ,'$image', '$comment')";
  $result = $c->query($sql);
  if ($result == TRUE) {
    function function_alert($message)
    {
      // Display the alert box 
      echo "<script>alert('$message');</script>";
    }
    // Function call
    function_alert("Đã đánh giá thành công!");
  } else {
    echo "Error:" . $sql . "<br>" . $c->error;
  }
  $c->close();
}
?>
<style>
  body {
    background:url('img/ocean.webp');background-repeat:no-repeat; background-size:cover;
  }
  form {
    width: 400px;
    margin: 10% auto;
    padding: 20px;
    background-color:antiquewhite;
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
    background-color:cornflowerblue;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }

  button[name="submit"]:hover,a:hover {
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
    margin-left:110px;
  }
</style>
  <form method="POST">
    
      <h2>Your Assess</h2>
      Name:<br>
      <input type="text" name="name" required>
      <br>
      Service:<br>
      <select name="service">
        <option class="op" name="service">Ăn tối - Đặt tiệc</option>
        <option class="op" name="service">Thuê tàu - Du thuyền</option>
        <option class="op" name="service">Tour Du Lịch</option>
      </select>
      <br>
      Image:<br>
      <input type="file" name="image" required accept="image/*">
      <br><br>
      Comment:<br>
      <textarea name="comment" required></textarea>
      <br><br>
      <button name="submit">Comment</button><a href="index.php">Go Back Home Page</a>
    
  </form>