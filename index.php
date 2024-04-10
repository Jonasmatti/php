<?php
include("php/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="contact.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
  <header>
    <?php
    $sel = "SELECT * FROM users";
    $query = mysqli_query($con, $sel);
    $product = mysqli_fetch_assoc($query);

    ?>
    <a href="
    " class="logo">
      <img src="NEXUS GH.png" alt="" width="160px" /></a>

    <ul class="navlist">
      <li><a href="home.php">Home</a></li>
      <li><a href="Apply.php">Apply now</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
    <div class="profile-dropdown">
      <div class="profile-dropdown-btn" onclick="toggle()">
        <div class="profile-img">

          <i class="fa-solid fa-circle"></i>
        </div>

        <span><?php echo $product['username']; ?>
          <i class="fa-solid fa-angle-down"></i>
        </span>
      </div>

      <ul class="profile-dropdown-list">
        <?php
        if (isset($row['Id'])) {
          $_SESSION['id'] = $row['Id'];
          $query = mysqli_query($con, "SELECT * FROM users WHERE Id= $id");
          while ($product = mysqli_fetch_assoc($query)) {
            $reset_Uname = $product['username'];
            $reset_Email = $product['email'];
            $reset_id = $product['password'];
          }
        }


        ?>
        <li class="profile-dropdown-list-item">

          <a href="edit.php" Id=$res_id>
            <i class="fa-regular fa-user"></i>
            Edit Profile
          </a>
        </li>

        <li class="profile-dropdown-list-item">
          <a href="#">
            <i class="fa-regular fa-envelope"></i>
            Inbox
          </a>
        </li>



        <li class="profile-dropdown-list-item">
          <a href="#">
            <i class="fa-regular fa-circle-question"></i>
            Help & Support
          </a>
        </li>
        <hr />

        <li class="profile-dropdown-list-item">
          <a href="./logout.php">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            Log out
          </a>
        </li>
      </ul>
    </div>
  </header>

  <div class="contact"></div>
  <!-- CONTACT AREA -->
  <section class="contact-us">
    <div class="row">
      <div class="contact-col">
        <div>
          <i class="bx bx-home"></i>
          <span>
            <h3>Adweso Road,ktu campus</h3>
            <p>Koforidua , Ghana</p>
          </span>
        </div>
        <div>
          <i class="bx bx-phone"></i>
          <span>
            <h3>+233 ********</h3>
            <p>Monday to Saturday, 10am - 5pm (GMT)</p>
          </span>
        </div>
        <div>
          <i class="bx bx-envelope"></i>
          <span>
            <h3>info@nexusassist.com</h3>
            <p>Email us your query</p>
          </span>
        </div>
      </div>
      <?php
      if (!empty($_POST["send"])) {

        $userName = $_POST["userName"];
        $userEmail = $_POST["userEmail"];
        $subject = $_POST["subject"];
        $userMessage = $_POST["userMessage"];
        $toEmail = "nexusghinfoassist@gmail.com";

        $mailHeaders = "Name: " . $userName .
          "\r\n Email:" . $userEmail .
          "\r\n Subject:" . $subject .
          "\r\n Message:" . $userMessage . "\r\n";

        if (mail($toEmail, $userName, $mailHeaders)) {

          $message = "Your Information is Received Successfully.";
        }
      }
      ?>
      <div class="contact-col">
        <div class="form-container">
          <form method="post" name="emailContact">
            <div class="input-row">
              <label>Name<em>*</em></label>
              <input type="text" name="userName" required />
            </div>

            <div class="input-row">
              <label>Email<em>*</em></label>
              <input type="email" name="userEmail" required />
            </div>

            <div class="input-row">
              <label>Subject<em>*</em></label>
              <input type="text" name="subject" required />
            </div>


            <div class="input-row">
              <label>Message<em>*</em></label>
              <textarea name="userMessage" cols="30" rows="10" required></textarea>
            </div>

            <div class="input-row">
              <input type="submit" name="send" value="Submit">
              <?php if (!empty($message)) { ?>
                <div class="success">
                  <strong><?php echo $message; ?></strong>
                </div>
              <?php } ?>
          </form>
        </div>
      </div>
  </section>
  <!-- FOOTER -->
  <section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.8350865023126!2d-0.2523839262759774!3d5.591373633295569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf99310db0463d%3A0x386f92b2beea41e4!2sKoforidua%20Polytechnic!5e0!3m2!1sen!2sgh!4v1711295941963!5m2!1sen!2sgh" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
  <footer>
    <div class="footer-body">
      <div class="col">
        <img src="NEXUS GH.png" class="logo" />
        <p>
          We greatly appreciate your time and trust in us. Your feedback helps
          us improve our services and better understand your needs. We're
          excited to connect with you and look forward to assisting you in any
          way we can. Thank you for choosing <strong>NEXUS</strong>. We're hereto listen,
          support, and provide you with an exceptional experience.
        </p>
      </div>
      <div class="col">
        <h2>
          Office
          <div class="underline"><span></span></div>
        </h2>
        <p>Koforidua , Ghana</p>
        <p>Adweso Road,ktu campus</p>
        <p class="email-id">nexusghinfoassist@gmail.com</p>
        <h4>+(233)-2222333444</h4>
      </div>
      <div class="col">
        <h2>
          Links
          <div class="underline"><span></span></div>
        </h2>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li>
            <a href="visit_universities.php"> visit_universities</a>
          </li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="Apply.php">Apply Now</a></li>
        </ul>
      </div>
      <div class="col">
        <h2>
          Newsletter
          <div class="underline"><span></span></div>
        </h2>
        <form>
          <i class="bx bx-envelope"></i>
          <input type="email" placeholder="Enter your email id" required />
          <button type="submit"><i class="bx bx-right-arrow-alt"></i></button>
        </form>
        <div class="social-icons">
          <i class="bx bxl-facebook"></i>
          <i class="bx bxl-whatsapp"></i>
          <i class="bx bxl-twitter"></i>
          <i class="bx bxl-linkedin"></i>
        </div>
      </div>
    </div>
    <hr />
    <p class="copyright">NEXUS GH &copy; 2024,- All Right Reserved</p>
  </footer>

  <script src="profile.js"></script>

  <script src="script.js"></script>
</body>

</html>
