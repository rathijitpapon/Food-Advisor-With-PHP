<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food Kingdom</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <style>
        #googleMaps {
        height: 50%;
        width: 50%;
        position:absolute;
        top: 20%;
        left: 20%;
        z-index: 0; /* Set z-index to 0 as it will be on a layer below the contact form */
    }
    </style>
</head>
<body>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="maps.js"> </script>
    <div class = "container-fluid" id="googleMaps"></div>
</body>
</html>