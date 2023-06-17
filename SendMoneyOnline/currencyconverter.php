<!DOCTYPE html>
<html>

<head>
  <title>Currency Converter</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/currency_converter_style.css">
  <!-- FontAweome CDN Link for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <form id="currencyConverterForm" action="header.php">
    <div class="wrapper">
      <header>Currency Converter</header>
      <div class="amount">
        <p>Enter Amount</p>
        <input type="text" value="1">
      </div>
      <div class="drop-list">
        <div class="from">
          <p>From</p>
          <div class="select-box">
            <img src="https://flagcdn.com/48x36/us.png" alt="flag">
            <select></select>
          </div>
        </div>
        <div class="icon"><i class="fas fa-exchange-alt"></i></div>
        <div class="to">
          <p>To</p>
          <div class="select-box">
            <img src="https://flagcdn.com/48x36/np.png" alt="flag">
            <select></select>
          </div>
        </div>
      </div>
      <div class="">
        <div class="exchange-rate">Getting exchange rate...</div>
        <button type="button" name="ex_rate" class="mybtn" onclick="getExchangeRate()">Get Exchange Rate</button>
      </div>
    </div>
  </form>

  <script src="JavaScript/country-list.js"></script>
  <script src="JavaScript/script.js"></script>
</body>

</html>