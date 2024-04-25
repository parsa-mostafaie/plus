<?php
$color = '#ffaabb';
if (isset($_GET['color'])) {
    $color = '#' . $_GET['color'];
}
?>
<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg">
    <rect width="100" height="100" fill="<?php echo $color ?>" />
</svg>
<?php
header("Content-type: image/svg+xml"); ?>