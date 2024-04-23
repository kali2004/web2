<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    

<?php
include "nav.php";
?>

    <h1>Kontaktujte nás</h1>

    <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $name = $_POST['name'];
              $message = $_POST['message'];
              $cookie_name = "email";
              $cookie_value = "$name: $message";
              setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
          } else {
              
          }
    ?>

    <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6 spin">
      <div class="card">
        <div class="card-header">
          kontaktní formulář
        </div>
        <div class="card-body">
          <form method="post" action="">
            <div class="form-group">
              <label for="email">Jméno</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Jméno" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<br><br>

<?php
include "footer.php";
?>
</body>
</html>