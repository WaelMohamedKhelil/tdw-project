<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link type="text/css" rel="stylesheet" href="./static/css/style.css" id="#main-style" />
    <?php
    echo "<title>","Comparer","</title>";
    ?>
    <script type="text/javascript" src="./static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./static/js/popper.min.js"></script>
    <script type="text/javascript" src="./static/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./static/js/lib.js"></script>
    <script type="text/javascript" src="./static/js/auth.js"></script>

</head>

<body>
<div class="container-fluid">
    <?php
    require_once("title.php");

    require_once("carousel.php");
    ?>
    <div class="row" id="sidebar-content-container">

        <?php
        require_once("sidebar.php");
        ?>
        <div class="container col-md-auto" id="content">
<!--        --><?php
//        require_once("comparator.php");
//        ?>
<div class="row">
<div class="col">

<h6>Type d'école</h6>
<select class="custom-select" id="school-type-select">
<?php
    $table = DB::getSchoolTypes();
    foreach ($table as $row){
        echo "<option value=\"{$row[0]}\">{$row[1]}</option>";
    }
?>
</select>
<h6>Première école</h6>
<select class="custom-select school-name-select" >
</select>
<h6>Deuxième école</h6>
<select class="custom-select school-name-select" >
</select>
<table class="table table-hover table-sm">
    <thead>
    <tr>
        <th scope="col">First</th>
        <th scope="col">Second</th>
    </tr>
    </thead>
    <tbody id="tbody-compare">
    <tr>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    </tbody>
</table>
</div>
</div>
        </div>

    </div>
<!--    <div class="map-container">-->
<!--        <div class="gmap_canvas">-->
                <!-- <iframe id="gmap_canvas"
                        src="https://maps.google.com/maps?q=50%20Rue%20des%20martyrs%20oran&t=k&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe> -->
<!--        </div>-->
<!--    </div>-->

    <?php
    require_once("footer.php");
    ?>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
