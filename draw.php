<?php
// header("Content-type: image/png");
$page_title = '点线传媒';
require_once 'header.php';

// error_reporting(0); // Turn off all error reporting
?>
<!-- Begin Page Content -->
<div class="container">
    <form class="needs-validation" novalidate method="get">

        <div class="form-row">
            <div class="col-md-12 mb-12">
                <label for="validationCustom01">标题</label>
                <input type="text" name="title" class="form-control" id="validationCustom01" placeholder=""
                    value="<?php echo (empty($_GET['title']) ? '' : $_GET['title']) ?>" required>
                <div class="invalid-feedback">
                    必填项
                </div>
            </div>
        </div>


        <div class="form-row">
            <div class="col-md-3 mb-3">
                <label for="validationCustom01">玻璃宽度</label>
                <input type="text" name="total_glass_width" class="form-control" id="validationCustom01"
                    placeholder="cm"
                    value="<?php echo (empty($_GET['total_glass_width']) ? '' : $_GET['total_glass_width']) ?>" required>
                <div class="invalid-feedback">
                    必填项
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom02">玻璃高度</label>
                <input type="text" name="glass_height" class="form-control" id="validationCustom02" placeholder="cm"
                    value="<?php echo (empty($_GET['glass_height']) ? '' : $_GET['glass_height']) ?>" required>
                <div class="invalid-feedback">
                    必填项
                </div>
            </div>



            <div class="col-md-3 mb-3">
                <label for="validationCustom03">缩放比例</label>
                <input type="text" name="zoom" class="form-control" id="validationCustom03" placeholder=""
                    value="<?php echo (empty($_GET['zoom']) ? '' : $_GET['zoom']) ?>" required>
                <div class="invalid-feedback">
                    必填项
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-2 mb-2">
                <label for="validationCustom03">前面留空</label>
                <input type="text" name="start_space" class="form-control" id="validationCustom03" placeholder="cm"
                    value="<?php echo (empty($_GET['start_space']) ? '0' : $_GET['start_space']) ?>" required>
                <div class="invalid-feedback">
                    必填项
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label for="validationCustom03">后面留空</label>
                <input type="text" name="end_space" class="form-control" id="validationCustom03" placeholder="cm"
                    value="<?php echo (empty($_GET['end_space']) ? '0' : $_GET['end_space']) ?>" required>
                <div class="invalid-feedback">
                    必填项
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <label for="validationCustom03">玻璃X轴起点</label>
                <input type="text" name="glass_startX" class="form-control" id="validationCustom03" placeholder=""
                    value="<?php echo (empty($_GET['glass_startX']) ? '' : $_GET['glass_startX']) ?>" required>
                <div class="invalid-feedback">
                    必填项
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label for="validationCustom03">玻璃Y轴起点</label>
                <input type="text" name="glass_startY" class="form-control" id="validationCustom03" placeholder=""
                    value="<?php echo (empty($_GET['glass_startY']) ? '' : $_GET['glass_startY']) ?>" required>
                <div class="invalid-feedback">
                    必填项
                </div>
            </div>

        </div>

        <div class="form-row">
            <div class="col-md-12 mb-12">
                <label for="validationCustom04">各屏幕位置</label>
                <input type="text" name="position_of_screen" class="form-control" id="validationCustom04"
                    placeholder="cm,多个屏幕用半角句号分隔"
                    value="<?php echo (empty($_GET['position_of_screen']) ? '' : $_GET['position_of_screen']) ?>" required>
                <div class="invalid-feedback">
                    必填项
                </div>
            </div>
        </div>


        <div class="form-row">



            <div class="col-md-2 mb-3">
                <label for="validationCustom03">屏幕宽度</label>
                <input type="text" name="screen_width" class="form-control" id="validationCustom03" placeholder=""
                    value="<?php echo (empty($_GET['screen_width']) ? '' : $_GET['screen_width']) ?>" required>
                <div class="invalid-feedback">
                    必填项
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label for="validationCustom03">屏幕高度</label>
                <input type="text" name="screen_height" class="form-control" id="validationCustom03" placeholder=""
                    value="<?php echo (empty($_GET['screen_height']) ? '' : $_GET['screen_height']) ?>" required>
                <div class="invalid-feedback">
                    必填项
                </div>
            </div>



            <div class="col-md-2 mb-3">
                <label for="validationCustom05">屏幕上边距</label>
                <input type="text" name="screen_upon" class="form-control" id="validationCustom05" placeholder="cm"
                    value="<?php echo (empty($_GET['screen_upon']) ? '' : $_GET['screen_upon']) ?>" required>
                <div class="invalid-feedback">
                    必填项
                </div>
            </div>

        </div>

        <button class="btn btn-primary" type="submit" name="submit">提 交</button>
    </form>

    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>

    <?php

if (isset($_GET['submit'])) {

//show size

    $encode = mb_detect_encoding($_GET['title'], array("ASCII", "UTF-8", "GB2312", "GBK", "BIG5"));
// echo $encode;

// $font='yahei.ttf';

// imagettftext($im, 20, 0, 11, 21, $grey, $font, '');

    $glass_startX = $_GET['glass_startX'];
    $glass_startY = $_GET['glass_startY'];
    $glass_endX = $_GET['glass_width'];
    $glass_endY = $_GET['glass_height'];

    $screen_upon = $_GET['screen_upon'];
    $screen_width = $_GET['screen_width'];
    $screen_height = $_GET['screen_height'];

    $total_glass_width = $_GET['total_glass_width'] - $_GET['start_space'] - $_GET['end_space'];

    $glass_height = $_GET['glass_height'];

    $zoom = $_GET['zoom'];

    $positions = explode('+', $_GET['position_of_screen']);
    foreach ($positions as $pkey => $pvalue) {
        if ($pvalue != 0) {
            $positions[$pkey] = $pvalue - $_GET['start_space'];
        }
    }

    $glass_width = array();
    $glass_no = 0;

    $screen_positions = $positions;
    $screens_of_each_glass = array();
    $screen_count = 0;

    foreach ($screen_positions as $skey => $svalue) {
        if ($svalue != 0) {
            $screens_of_each_glass[$screen_count][] = $svalue;
        } else if ($svalue == 0) {
            $screen_count++;
        }
    }

    echo '<hr>';
    for ($i = 0; $i <= count($positions); $i++) {
        if ($positions[$i] == '0' && $glass_no == 0) {
            $glass_width[$glass_no] = ($positions[$i + 1] - $positions[$i - 1]) / 2 + $positions[$i - 1];

            $im = @imagecreate(1000, 707) or die("Cannot Initialize new GD image stream");
            $background_color = imagecolorallocate($im, 255, 255, 255);
            $screen_color = imagecolorallocate($im, 255, 255, 0);
            $glass_color = imagecolorallocate($im, 150, 150, 150);
            $font_black = imagecolorallocate($im, 0, 0, 0);
            $font_blue = imagecolorallocate($im, 0, 0, 255);

            //glass
            imagefilledrectangle($im, $glass_startX, $glass_startY, $glass_startX + $glass_width[$glass_no] * $zoom, $glass_startY + $glass_height * $zoom, $glass_color);

            //screens
            foreach ($screens_of_each_glass[$glass_no] as $key => $value) {

                imagefilledrectangle($im, $glass_startX + ($value - $screen_width / 2) * $zoom, $glass_startY + $screen_upon * $zoom, $glass_startX + ($value + $screen_width / 2) * $zoom, $glass_startY + ($screen_upon + $screen_height) * $zoom, $screen_color);
                imagestring($im, $zoom, $glass_startX + $value * $zoom, $glass_startY + ($screen_upon) * $zoom, $screen_width, $font_black);
                imagestringup($im, $zoom, $glass_startX + ($value - $screen_width / 2) * $zoom, $glass_startY + ($screen_upon + $screen_height / 2 + 3) * $zoom, $screen_height, $font_black);

                if ($key == 0) {
                    imagestring($im, $zoom, $glass_startX + ($value - $screen_width / 2 - 10) * $zoom, $glass_startY + $screen_upon * $zoom, $value - $screen_width / 2, $font_blue);
                    imagestringup($im, $zoom, $glass_startX + $value * $zoom, $glass_startY + $glass_height * $zoom, $glass_height - $screen_height - $screen_upon, $font_blue);
                    imagestringup($im, $zoom, $glass_startX + $value * $zoom, $glass_startY + $screen_upon / 2 * $zoom, $screen_upon, $font_blue);
                } else {
                    imagestring($im, $zoom, $glass_startX + ($value - $screen_width / 2 - 10) * $zoom, $glass_startY + $screen_upon * $zoom, ($value - $screens_of_each_glass[$glass_no][$key - 1] - $screen_width), $font_blue);
                }
            }

            imagestring($im, $zoom, $glass_startX + ($glass_width[$glass_no] - 5) * $zoom, $glass_startY + $screen_upon * $zoom, $glass_width[$glass_no] - end($screens_of_each_glass[$glass_no]) - $screen_width / 2, $font_blue);

            imagestring($im, $zoom, $glass_startX + $glass_width[$glass_no] / 2 * $zoom, $glass_startY, '<-' . $glass_width[$glass_no] . '->', $font_black);
            imagestringup($im, $zoom, $glass_startX, $glass_startY + $glass_height / 2 * $zoom, '<-' . $glass_height . '->', $font_black);

            //title
            imagestring($im, $zoom * 20, 60, 40, mb_convert_encoding($_GET['title'], "ASCII", "auto") . '-' . ($glass_no + 1), $font_black);
            // imagettftext($im, 20, 0, 10, 20,  $font_black, $font, '汉字');

            imagepng($im, "img/" . $_GET['title'] . '-' . ($glass_no + 1) . ".png");
            imagedestroy($im);
            print "<img src=img/" . $_GET['title'] . '-' . ($glass_no + 1) . ".png?" . date("U") . "  class='img-fluid' alt='Responsive image'>";

            $glass_width_sum += $glass_width[$glass_no];
            $glass_no++;
            echo '<hr>';
        } else if ($positions[$i] == '0') {
            $glass_width[$glass_no] = $positions[$i - 1] - array_sum($glass_width) + ($positions[$i + 1] - $positions[$i - 1]) / 2;

            $im = @imagecreate(1000, 707) or die("Cannot Initialize new GD image stream");
            $background_color = imagecolorallocate($im, 255, 255, 255);
            $screen_color = imagecolorallocate($im, 255, 255, 0);
            $glass_color = imagecolorallocate($im, 150, 150, 150);
            $font_black = imagecolorallocate($im, 0, 0, 0);
            $font_blue = imagecolorallocate($im, 0, 0, 255);

            //glass
            imagefilledrectangle($im, $glass_startX, $glass_startY, $glass_startX + $glass_width[$glass_no] * $zoom, $glass_startY + $glass_height * $zoom, $glass_color);

            //screens
            foreach ($screens_of_each_glass[$glass_no] as $key => $value) {
                $original_value = $value;

                $value = $value - $glass_width_sum;
                imagefilledrectangle($im, $glass_startX + ($value - $screen_width / 2) * $zoom, $glass_startY + $screen_upon * $zoom, $glass_startX + ($value + $screen_width / 2) * $zoom, $glass_startY + ($screen_upon + $screen_height) * $zoom, $screen_color);
                imagestring($im, $zoom, $glass_startX + $value * $zoom, $glass_startY + ($screen_upon) * $zoom, $screen_width, $font_black);
                imagestringup($im, $zoom, $glass_startX + ($value - $screen_width / 2) * $zoom, $glass_startY + ($screen_upon + $screen_height / 2 + 3) * $zoom, $screen_height, $font_black);

                if ($key == 0) {
                    $left_distance = $value - $screen_width / 2;
                    imagestring($im, $zoom, $glass_startX + ($value - $screen_width / 2 - 10) * $zoom, $glass_startY + $screen_upon * $zoom, $left_distance, $font_blue);
                    imagestringup($im, $zoom, $glass_startX + $value * $zoom, $glass_startY + $glass_height * $zoom, $glass_height - $screen_height - $screen_upon, $font_blue);
                    imagestringup($im, $zoom, $glass_startX + $value * $zoom, $glass_startY + $screen_upon / 2 * $zoom, $screen_upon, $font_blue);
                } else {
                    imagestring($im, $zoom, $glass_startX + ($value - $screen_width / 2 - 10) * $zoom, $glass_startY + $screen_upon * $zoom, ($original_value - $screens_of_each_glass[$glass_no][$key - 1] - $screen_width), $font_blue);
                }
            }
            // $glass_width[$glass_no]-end($screens_of_each_glass[$glass_no])-$screen_width/2;
            imagestring($im, $zoom, $glass_startX + ($glass_width[$glass_no] - 5) * $zoom, $glass_startY + $screen_upon * $zoom, $glass_width[$glass_no] - end($screens_of_each_glass[$glass_no]) - $screen_width / 2 + $glass_width_sum, $font_blue);

            imagestring($im, $zoom, $glass_startX + $glass_width[$glass_no] / 2 * $zoom, $glass_startY, '<-' . $glass_width[$glass_no] . '->', $font_black);
            imagestringup($im, $zoom, $glass_startX, $glass_startY + $glass_height / 2 * $zoom, '<-' . $glass_height . '->', $font_black);

            //title
            imagestring($im, $zoom * 20, 60, 40, mb_convert_encoding($_GET['title'], "ASCII", "auto") . '-' . ($glass_no + 1), $font_black);

            imagepng($im, "img/" . $_GET['title'] . '-' . ($glass_no + 1) . ".png");
            imagedestroy($im);
            print "<img src=img/" . $_GET['title'] . '-' . ($glass_no + 1) . ".png?" . date("U") . "  class='img-fluid' alt='Responsive image'>";

            $glass_width_sum += $glass_width[$glass_no];
            echo '<hr>';
            $glass_no++;
        } else if ($i == count($positions)) {
            $glass_width[$glass_no] = $total_glass_width - array_sum($glass_width);

            $im = @imagecreate(1000, 707) or die("Cannot Initialize new GD image stream");
            $background_color = imagecolorallocate($im, 255, 255, 255);
            $screen_color = imagecolorallocate($im, 255, 255, 0);
            $glass_color = imagecolorallocate($im, 150, 150, 150);
            $font_black = imagecolorallocate($im, 0, 0, 0);
            $font_blue = imagecolorallocate($im, 0, 0, 255);

            //glass
            imagefilledrectangle($im, $glass_startX, $glass_startY, $glass_startX + $glass_width[$glass_no] * $zoom, $glass_startY + $glass_height * $zoom, $glass_color);

            //screens
            foreach ($screens_of_each_glass[$glass_no] as $key => $value) {
                $original_value = $value;
                $value = $value - $glass_width_sum;
                imagefilledrectangle($im, $glass_startX + ($value - $screen_width / 2) * $zoom, $glass_startY + $screen_upon * $zoom, $glass_startX + ($value + $screen_width / 2) * $zoom, $glass_startY + ($screen_upon + $screen_height) * $zoom, $screen_color);
                imagestring($im, $zoom, $glass_startX + $value * $zoom, $glass_startY + ($screen_upon) * $zoom, $screen_width, $font_black);
                imagestringup($im, $zoom, $glass_startX + ($value - $screen_width / 2) * $zoom, $glass_startY + ($screen_upon + $screen_height / 2 + 3) * $zoom, $screen_height, $font_black);

                if ($key == 0) {
                    $left_distance = $value - $screen_width / 2;
                    imagestring($im, $zoom, $glass_startX + ($value - $screen_width / 2 - 10) * $zoom, $glass_startY + $screen_upon * $zoom, $left_distance, $font_blue);
                    imagestringup($im, $zoom, $glass_startX + $value * $zoom, $glass_startY + $glass_height * $zoom, $glass_height - $screen_height - $screen_upon, $font_blue);
                    imagestringup($im, $zoom, $glass_startX + $value * $zoom, $glass_startY + $screen_upon / 2 * $zoom, $screen_upon, $font_blue);
                } else {
                    imagestring($im, $zoom, $glass_startX + ($value - $screen_width / 2 - 10) * $zoom, $glass_startY + $screen_upon * $zoom, ($original_value - $screens_of_each_glass[$glass_no][$key - 1] - $screen_width), $font_blue);
                }
            }
            if ($screen_upon != '-') {
                imagestring($im, $zoom, $glass_startX + ($glass_width[$glass_no] - 5) * $zoom, $glass_startY + $screen_upon * $zoom, $total_glass_width - end($positions) - $screen_width / 2, $font_blue);
            }

            imagestring($im, $zoom, $glass_startX + $glass_width[$glass_no] / 2 * $zoom, $glass_startY, '<-' . $glass_width[$glass_no] . '->', $font_black);
            imagestringup($im, $zoom, $glass_startX, $glass_startY + $glass_height / 2 * $zoom, '<-' . $glass_height . '->', $font_black);

            //title
            imagestring($im, $zoom * 20, 60, 40, mb_convert_encoding($_GET['title'], "ASCII", "auto") . '-' . ($glass_no + 1), $font_black);

            imagepng($im, "img/" . $_GET['title'] . '-' . ($glass_no + 1) . ".png");
            imagedestroy($im);
            print "<img src=img/" . $_GET['title'] . '-' . ($glass_no + 1) . ".png?" . date("U") . "  class='img-fluid' alt='Responsive image'>";

            echo '<hr>';
        }
    }

}
?>
</div>
<?php
require_once 'footer.php';
?>
