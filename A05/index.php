<?php
session_start();
include("connection.php");

$sql = "SELECT islandOfPersonalityID, image, content, color FROM islandcontents";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Store the data grouped by `islandOfPersonalityID`
    $islands = [];
    while ($row = $result->fetch_assoc()) {
        $islands[$row['islandOfPersonalityID']][] = $row;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <a href="#home" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>ISLANDS</p>
  </a>
  <a href="#gaming" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>GAMING</p>
  </a>
  <a href="#story" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>STORY</p>
  </a>
  <a href="#journalist" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>JOURNALIST</p>
  </a>
  <a href="#webdev" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>WEB DEV</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#home" class="w3-bar-item w3-button" style="width:25% !important">ISLANDS</a>
    <a href="#gaming" class="w3-bar-item w3-button" style="width:25% !important">GAMING</a>
    <a href="#story" class="w3-bar-item w3-button" style="width:25% !important">STORY</a>
    <a href="#journalist" class="w3-bar-item w3-button" style="width:25% !important">JOURNALIST</a>
    <a href="#webdev" class="w3-bar-item w3-button" style="width:25% !important">WEB DEV</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Glace's Core Memories</h1>
  </header>

  <div class="w3-container" id="gaming">
    <h2>Gaming Island</h2>
    <div class="orb-container">
        <?php if (!empty($islands[1])): ?>
            <?php foreach ($islands[1] as $orb): ?>
                <div class="orb" 
                     style="--orb-color: <?= $orb['color']; ?>; 
                            <?= $orb['image'] ? "background-image: url('{$orb['image']}');" : ""; ?>" 
                     data-content="<?= htmlspecialchars($orb['content']); ?>">
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No items to display for Gaming Island.</p>
        <?php endif; ?>
    </div>
</div>

<div class="w3-container" id="story">
    <h2>Story Island</h2>
    <div class="orb-container">
        <?php if (!empty($islands[2])): ?>
            <?php foreach ($islands[2] as $orb): ?>
                <div class="orb" 
                     style="--orb-color: <?= $orb['color']; ?>; 
                            <?= $orb['image'] ? "background-image: url('{$orb['image']}');" : ""; ?>" 
                     data-content="<?= htmlspecialchars($orb['content']); ?>">
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No items to display for Story Island.</p>
        <?php endif; ?>
    </div>
</div>

<div class="w3-container" id="journalist">
    <h2>Student Journalist Island</h2>
    <div class="orb-container">
        <?php if (!empty($islands[3])): ?>
            <?php foreach ($islands[3] as $orb): ?>
                <div class="orb" 
                     style="--orb-color: <?= $orb['color']; ?>; 
                            <?= $orb['image'] ? "background-image: url('{$orb['image']}');" : ""; ?>" 
                     data-content="<?= htmlspecialchars($orb['content']); ?>">
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No items to display for Journalist Island.</p>
        <?php endif; ?>
    </div>
</div>

<div class="w3-container" id="webdev">
    <h2>Student Web Developer Island</h2>
    <div class="orb-container">
        <?php if (!empty($islands[4])): ?>
            <?php foreach ($islands[4] as $orb): ?>
                <div class="orb" 
                     style="--orb-color: <?= $orb['color']; ?>; 
                            <?= $orb['image'] ? "background-image: url('{$orb['image']}');" : ""; ?>" 
                     data-content="<?= htmlspecialchars($orb['content']); ?>">
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No items to display for Journalist Island.</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>