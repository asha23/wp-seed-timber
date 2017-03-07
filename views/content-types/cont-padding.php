<?php

$page_id = $_SESSION['typeVar'];
$padding = get_sub_field('padding', $page_id)
?>

<section class="container-fluid" style="margin-top:<?php echo $padding; ?>"></section>
