<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Train Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php echo $map->render(); ?>

<div class="admin-panel">
    <h2>Train Game Map</h2>
    <p>Transform node to:</p>
    <select class="terrain-select">
        <option selected value="normal" data-type="0">Normal</option>
        <option value="water" data-type="1">Water</option>
        <option value="forest" data-type="2">Forest</option>
        <option value="mountain" data-type="3">Mountain</option>
        <option value="desert" data-type="4">Desert</option>
        <option value="magic" data-type="5">Magic</option>
        <option value="bigmountain" data-type="6">Big Mountain</option>
        <option value="volcano" data-type="7">Volcano</option>
    </select>

    <br>
    <button class="save">Save board</button>
    <div class="message"></div>
</div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="app.js"></script>
</body>
</html>

