<?php include 'setting/system.php'; ?>
<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>AGROGENIE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include 'theme/sidebar.php'; ?>
    <center><h1 style="font-family: 'Sacramento', cursive;font-size:45px;">Weather Tracker</h1>
    <hr style="border:0.5px solid grey;width: 75%;"></center>
    <div class="app-main" style="font-family: 'Quicksand', sans-serif;">
        <div class="searchInputBox">
            <input type="text" id="input-box" class="input-box" placeholder="Enter city name..." autocomplete="off">
        </div>
        <div class="weather-body">
            <div class="location-details">
                <div class="city" id="city"></div>
                <div class="date" id="date"></div>
            </div>

            <div class="weather-status">
                <div class="temp" id="temp">&deg;</div>
                <div class="min-max" id="min-max">&deg;&deg;</div>
                <div class="weather" id="weather"></div>
                <div id="img"></div>
            </div>
        </div>
    </div>
    <script src="wapp.js"></script>
</body>
</html>