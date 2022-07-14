<?php
$title = 'PHP Even or Odd Check';
include_once '../inc/head.php';
$res = '';
$res1 = '';
$res2 = '';
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    if (isEven($number)) {
        $res = "{$number} is a Even Number";
    } else {
        $res = "{$number} is a Odd Number";
    }
}

if (isset($_POST['submit1'])) {
    $number = $_POST['number1'];
    $res1 = " Factorial of {$number} is " . factorial($number);
}

if (isset($_POST['foo_sub'])) {
    $foodName = $_POST['foodName'];
    $item = $_POST['item'];
    $res2 = serve($foodName, $item);
}

?>

<div class="container" style="margin-top: 100px;">
    <div class="grid">
        <div>
            <h2 style="text-align: center;">Even or Odd Checker</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <label for="number">
                    Enter Number
                    <input type="number" id="number" name="number" placeholder="Number" required>
                </label>
                <button type="submit" name="submit">Submit</button>

            </form>
            <h4>
                <?php if ($res) {
                    echo $res;
                } ?>
            </h4>
        </div>
        <div>
            <h2 style="text-align: center;">Factorial Checker</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <label for="number1">
                    Enter Number
                    <input type="number" id="number1" name="number1" placeholder="Number" required>
                </label>
                <button type="submit" name="submit1">Submit</button>

            </form>
            <h4>
                <?php if ($res1) {
                    echo $res1;
                } ?>
            </h4>
        </div>
        <div>
            <h2 style="text-align: center;">Food Serve Robot</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <label for="foodName">
                    Food Name
                    <input type="text" id="foodName" name="foodName" placeholder="Food Name" required>
                </label>
                <label for="item">
                    Total Number of Item
                    <input type="text" id="item" name="item" placeholder="Number of Item" required>
                </label>
                <button type="submit" name="foo_sub">Submit</button>

            </form>
            <h4>
                <?php if ($res2) {
                    echo $res2;
                } ?>
            </h4>
        </div>
    </div>
</div>

<?php
include_once '../inc/footer.php';
