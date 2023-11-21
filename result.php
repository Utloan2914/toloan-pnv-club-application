<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Result</title>
</head>
<style>
      body{
            align-items: center;
      }
      p {
            text-align: center;
      }

      h1 {
            text-align: center;
      }

      img {
            margin-left: 18%;
      }

      .table {
            width: 500px;
            height: 500px;
            border: 2px dashed red;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 30%;
      }
</style>

<body>
      <div class="table">
            <div>
                  <?php
                  $name = $_POST['name'];
                  $club = $_POST['club'];
                  $time = $_POST['time'];
                  $skills = $_POST['skills'];

                  // Xử lý dữ liệu
                  $skills_string = implode(' and ', $skills);
                  // Hiển thị kết quả
                  echo '<img src="https://png.pngtree.com/element_our/20190603/ourlarge/pngtree-honored-golden-medal-illustration-image_1432303.jpg"
      alt="Your Image" style="width: 200px; height: 200px; object-fit: cover;">';

                  echo '<h1>Thank you ' . $name . '!!</h1>';
                  echo '<p>We received your application for the ' . $club . '</p>';
                  echo '<p>You are ' . $skills_string . '</p>';
                  echo '<p>You will be available on ' . $time . '</p>';
                  ?>
            </div>
      </div>
</body>

</html>