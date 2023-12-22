<?php
if (isset($_GET['success']) && $_GET['success'] == 'true') {
    $successMessage = "Form submitted successfully!"; // Customize your message
?>

<script>
    alert("<?php echo $successMessage; ?>");
</script>

<?php } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Homepage</title>
    <link rel="stylesheet" href="stail.css?v=1.0">
</head>
<body>

<header>
    <div class="breadcrumb">International | Student | Staff | Alumni</div>
</header>

<nav>
    <img src="logoUITM.jpg" alt="UITM Logo">
    <ul>
        <li><a href="jawatanForm.php">JOB VACANCY</a></li>
        <li><a href="#">ACADEMICS</a></li>
        <li><a href="#">RESEARCH</a></li>
        <li><a href="#">LIBRARY</a></li>
        <li><a href="myprofilPage.php">MY PROFIL</a></li>
    </ul>
</nav>
 
<section style="text-align: center;">
    <h1><span style="color: yellow; font-size: 5em;">Welcome to</h1><br>
    <h1><span style="color: yellow; font-size: 5em;">UiTM Perlis Branch</span></h1><br>
    <h1><span style="color: yellow; font-size: 5em;">Arau Campus</span></h1>
</section>

</body>
</html>
