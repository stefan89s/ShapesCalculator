<?php

require '../../config.php';
require '../../init.php';
require '../includes/head.php';
require '../includes/navigation.php';

//If shape is selected set in as a value
if(isset($_POST['shape'])) {
    $shape = $_POST['shape'];
}


echo '<div class="container main-space">';

if(isset($_POST['shape'])) {
    echo '<h2>Calculate: ' . $shape . '</h2>';

    echo '<div class="row">';

    echo '<div class="col-md-12">';

    //If a shape is selected require the page with a shape
    require '../' . $shape . '.php';

    echo '</div></div>';
} else {
?>
    <!-- If shape is not selected show the options in the main layout -->
    <div class="col-md-6">
    <h2>Options:</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-group">
        <select class="form-control" name="shape" id="">
            <option value="triangle">Triangle</option>
            <option value="cube">Cube</option>
            <option value="rectangle">Rectangle</option>
            <option value="cylinder">Cylinder</option>
            <option value="cuboid">Cuboid</option>
        </select>
        <button class="btn btn-success btn-block minor-margin-top" type="submit">Calculate</button>
    </form>
    </div>
<?php
}

echo '</div>';

require '../includes/footer.php';








