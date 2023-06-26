<?php $metaTitle = "accueil";
$metaDescription = "voici ma page accueil";
// le compteur de vue ***************************

if (!isset($_SESSION['countViewPage'])){
    $_SESSION['countViewPage'] = 1;
  } else {
    $_SESSION['countViewPage']++;
  }
  $count = $_SESSION['countViewPage'];
?>


<?php
require 'header.php';
?>



<body>

<p> cv </p
<p> cv </p
<p> cv </p
<p> cv </p

</body>
<?php
include 'footer.php';
?>
