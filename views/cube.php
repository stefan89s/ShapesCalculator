
<!-- Form for calculating area -->
<div class="row">
    <div class="col-md-6">
    <h2>Area:</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="hidden" name="shape" value="<?php echo $shape ?>">
        <input type="text" name="value1" placeholder="Side">
        <input type="hidden" name="value2" value = "<?php echo null; ?>">
        <button name="areaButton" type="submit" class="btn btn-success">Calculate</button>
    </form>
        <!-- Displaying the result of area -->
        <h2>Area is: <?php 
        if(isset($_POST['areaButton']) && is_numeric($_POST['value1'])) {
            $value1 = $_POST['value1'];
            $value2 = $_POST['value2'];

            $performStrategy = new PerformStrategy;
            $result = $performStrategy->performArea(new Cube, $value1, $value2);
            echo $result;
        }
        ?>
        </h2>
    </div>

    <div class="col-md-2">
        <h3>Area of a cube:</h3>
        <h4>s - side</h4>
        <h4>a - area</h4>
        <h4><strong>a = s^2</strong></h4>
    </div>
    <div class="col-md-2">
    <img src="<?php echo ROOT; ?>assets/images/cube-area.png" alt="cube-area">
    </div>
</div>

<div class="major-margin-top"></div>

<!-- Form for calculating volume -->
<div class="row">
    <div class="col-md-6">
    <h2>Volume:</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="hidden" name="shape" value="<?php echo $shape ?>">
        <input type="text" name="side1" placeholder="Side">
        <input type="hidden" name="side2" value="<?php echo null; ?>">
        <button name="volumeButton" type="submit" class="btn btn-success">Calculate</button>
    </form>
        <!-- Displaying the result of volume -->
        <h2>Volume is: <?php 
        if(isset($_POST['volumeButton']) && is_numeric($_POST['side1'])) {
            $side1 = $_POST['side1'];
            $side2 = $_POST['side2'];

            $performStrategy = new PerformStrategy;
            $result = $performStrategy->performVolume(new Cube, $side1, $side2);
            echo $result;
        }
        ?>
        </h2>
    </div>
    
    <div class="col-md-2">
        <h3>Volume of a cube:</h3>
        <h4>s - side</h4>
        <h4>v - volume</h4>
        <h4><strong>v = s^3</strong></h4>
    </div>
    <div class="col-md-2">
    <img src="<?php echo ROOT; ?>assets/images/cube-volume.png" alt="cube-volume">
    </div>
</div>


















