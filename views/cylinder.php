<!-- Form for calculating area -->
<div class="row">
    <div class="col-md-6">
    <h2>Area:</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="hidden" name="shape" value="<?php echo $shape ?>">
        <input type="text" name="value1" placeholder="π (pi)">
        <input type="text" name="value2" placeholder="Radius">
        <button name="areaButton" type="submit" class="btn btn-success">Calculate</button>
    </form>
        <!-- Displaying the result of area -->
        <h2>Area is: <?php 
        if(isset($_POST['areaButton']) && is_numeric($_POST['value1']) && is_numeric($_POST['value2'])) {
            $value1 = $_POST['value1'];
            $value2 = $_POST['value2'];

            $performStrategy = new PerformStrategy;
            $result = $performStrategy->performArea(new Cylinder, $value1, $value2);
            echo $result;
        }
        ?>
        </h2>
    </div>

    <div class="col-md-2">
        <h3>Area of a cylinder:</h3>
        <h4>π - pi (3.14)</h4>
        <h4>r - radius</h4>
        <h4>a - area</h4>
        <h4><strong>a = π * r^2</strong></h4>
    </div>
    <div class="col-md-2">
        <img src="<?php echo ROOT; ?>assets/images/cylinder-area.png" alt="cylinder-area">
    </div>
</div>

<div class="major-margin-top"></div>

<!-- Form for calculating volume -->
<div class="row">
    <div class="col-md-6">
    <h2>Volume:</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="hidden" name="shape" value="<?php echo $shape ?>">
        <input type="text" name="area" placeholder="Area">
        <input type="text" name="height" placeholder="Height">
        <button name="volumeButton" type="submit" class="btn btn-success">Calculate</button>
    </form>
        <!-- Displaying the result of volume -->
        <h2>Volume is: <?php 
        if(isset($_POST['volumeButton']) && is_numeric($_POST['area']) && is_numeric($_POST['height'])) {
            $area = $_POST['area'];
            $height = $_POST['height'];

            $performStrategy = new PerformStrategy;
            $result = $performStrategy->performVolume(new Cylinder, $area, $height);
            echo $result;
        }
        ?>
        </h2>
    </div>

    <div class="col-md-2">
        <h3>Volume of a cube:</h3>
        <h4>h - height</h4>
        <h4>a - area</h4>
        <h4>v - volume</h4>
        <h4><strong>v = a * h</strong></h4>
    </div>
    <div class="col-md-2">
        <img src="<?php echo ROOT; ?>assets/images/cylinder-volume.png" alt="cylinder-area">
    </div>
</div>

























