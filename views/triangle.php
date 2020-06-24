
<!-- Form for calculating area -->
<div class="row">
    <div class="col-md-6">
    <h2>Area:</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="hidden" name="shape" value="<?php echo $shape ?>">
        <input type="text" name="value1" placeholder="Base">
        <input type="text" name="value2" placeholder="Height">
        <button name="areaButton" type="submit" class="btn btn-success">Calculate</button>
    </form>
        <!-- Displaying the result of area -->
        <h2>Area is: <?php 
        if(isset($_POST['areaButton']) && is_numeric($_POST['value1']) && is_numeric($_POST['value2'])) {
            $value1 = $_POST['value1'];
            $value2 = $_POST['value2'];

            $performStrategy = new PerformStrategy;
            $result = $performStrategy->performArea(new Triangle, $value1, $value2);
            echo $result;
        }
        ?>
        </h2>
    </div>

    <div class="col-md-2">
        <h3>Area of a Triangle:</h3>
        <h4>b - base</h4>
        <h4>h - height</h4>
        <h4>a - area</h4>
        <h4><strong>a = 1/2 (b * h)</strong></h4>
    </div>
    <div class="col-md-2">
    <img src="<?php echo ROOT; ?>assets/images/triangle.png" alt="triangle">
    </div>
</div>


















