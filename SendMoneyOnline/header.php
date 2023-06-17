<?php include "addUser.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jellyfish | Send Money Online</title>
  <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit/css/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit/css/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&family=Jost:ital,wght@0,100;0,400;0,700;1,300&family=Oswald:wght@200&family=Poppins:wght@200&display=swap">
  <link rel="stylesheet" href="css/currency_converter_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="css/log_style.css">
  <link rel="stylesheet" href="css/reg_style.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/toggle_mode.css">
  <link rel="stylesheet" href="css/converter_container_style.css">
  <link rel="stylesheet" href="css/info_guide_style.css">
  <script src="JavaScript/main.js"></script>
  <script src="particles/jquery.min.js"></script>
  <script src="particles/particles.js"></script>
  <script src="particles/app.js"></script>
</head>

<body id="body" class="">
  <nav class="navbar navbar-expand-lg navbar-light"> <!-- Navbar -->
    <li class="nav-item">
      <a href="logout.php">Log Out</a>
    </li>
    <div class="container"> <!-- Container wrapper -->
      <a class="navbar-brand me-2" href="#"> <!-- Navbar brand -->
        <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="16" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
      </a>
      <div class="collapse navbar-collapse" id="navbarButtonsExample"> <!-- Collapsible wrapper -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"> <!-- Left links -->
          <li class="nav-item">
            <a class="nav-link" href="header.php" style="color: #fff;">Personal</a>
          </li>
          <li>
            <a class="nav-link" style="color: #fff;"> | </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: #fff;">Business
              <span class="first">This option is </br> currently in progress.</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0"><!-- Centered links -->
          <li class="nav-item">
            <a class="nav-link mr-4" href="#ex1-tabs-1" style="color: #fff; " onclick="openTab(event, 'ex1-tabs-1')">Converter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ml-4" href="#ex1-tabs-2" style="color: #fff; " onclick="openTab(event, 'ex1-tabs-2')">Send Money</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ml-4" href="#guide" style="color: #fff;">Guide</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ml-4" href="#" style="color: #fff;"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link ml-4" href="#" style="color: #fff;"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link ml-4" href="#" style="color: #fff;"></a>
          </li>
        </ul>
        <div class="d-flex align-items-center"> <!-- Left links -->
          <button type="button" class="btn btn-link px-3 me-2" onclick="openForm()">Login</button>
          <?php include "login.php"; ?>
          <button type="button" class="btn btn-primary me-3" onclick="openRegForm()">Register</button>
          <?php include "register.php"; ?>
          <input type="checkbox" class="checkbox" id="checkbox">
          <label for="checkbox" class="label">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="ball"></div>
          </label>
        </div>
      </div> <!-- Collapsible wrapper -->
    </div><!-- Container wrapper -->
  </nav><!-- Navbar -->
  <div class="headerOfPage"><!-- Set Particles-js -->
    <div id="particles-js"></div>
  </div>
  <section class="section_mode">
    <div class="welcome-container">
      <?php if (isset($_SESSION['name'])) : ?>
        <?php include "profilecard.php"; ?>
      <?php else : ?>
        <!-- <h6 class="welcome-message" style="color: #fff; font-size: 18px; font-family: 'Alegreya Sans SC', sans-serif; margin-left: 100px; margin-top: -1150px; opacity: 0.2; text-align: left;">
        Guest
         </h6> -->
      <?php endif; ?>
    </div>
    <div>
      <!--   <?php include "notification.php"; ?> -->
    </div>
    <div class="container">
      <h1 class="title">
        Trusted Global Currency Exchange & Money Transfer Solutions
      </h1>
      <p class="subtitle">
        Best source for currency conversion, and sending money online
      </p>
    </div>
  </section>
  <section class="action" id="action"> <!-- Converter | Send Money -->
    <!--<main class="action-table"></main> -->
    <div class="justify-content-center position-relative">
      <div class="container-fluid">
        <ul class="nav nav-tabs mb-3" id="ex1" role="tablist"><!-- Tabs navs -->
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">Convert</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">Send Money Online</a>
          </li>
        </ul><!-- Tabs navs -->
        <div class="tab-content" id="ex1-content"><!-- Tabs content -->
          <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
            <?php include "currencyconverter.php"; ?> <!-- Content for the Convert tab -->
          </div>
          <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
            <?php if (isset($_SESSION['name'])) : ?>
              <?php include "sendmoney.php"; ?><!-- Content for logged-in users -->
            <?php else : ?>
              <?php include "infocard.php"; ?><!-- Content for guests -->
            <?php endif; ?>
          </div>
        </div><!-- Tabs content -->
      </div>
    </div>
    <!--</main>-->
  </section>
  <main class="cards" id="guide">
    <section class="card account">
      <div class="icon">
        <img src="img/r.jpg" alt="Create account">
      </div>
      <h3 class="cardTxt">1. Create account</h3>
      <span class="second">It takes just a few minutes, and all you need is an email address</span>
    </section>
    <section class="card details">
      <div class="icon">
        <img src="img/e.jpg" alt="Enter details">
      </div>
      <h3 class="cardTxt">2. Enter details</h3>
      <span class="second">Add recipient (you'll need their address, bank account/IBAN, swift/BIC) and payment information</span>
    </section>
    <section class="card Confirm">
      <div class="icon">
        <img src="img/c.jpg" alt="Confirm and send">
      </div>
      <h3 class="cardTxt">3. Confirm and send</h3>
      <span class="second">Check the currencies and amount are correct, get the expected delivery date, and send your money transfer.</span>
    </section>
  </main>
  <div class="footer">
    <p style="text-align: center;">Copyright &copy; Jellyfish | Send Money Online 2023</p>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mdb-ui-kit/js/mdb.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mdb-ui-kit/js/mdb.min.js"></script>
  <script src="particles/jquery.min.js"></script>
  <script src="particles/particles.js"></script>
  <script src="particles/app.js"></script>
  <!-------- Link to JS---->
  <script type="text/javascript" src="JavaScript/main.js"></script>
  <!-- <script src="JavaScript/country-list.js"></script>
  <script src="JavaScript/script.js"></script> -->
</body>

</html><!-- * Author: Denalda Bali --><!-- * Date: May 2, 2023 --><!-- *  -->