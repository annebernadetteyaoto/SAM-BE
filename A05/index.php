<?php
session_start();
include("connection.php");

$sql = "SELECT islandOfPersonalityID, image, content, color FROM islandcontents";
$result = $con->query($sql);

$islands = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $islands[$row['islandOfPersonalityID']][] = $row;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Glace's Core Memories</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://github.com/annebernadetteyaoto/Random-Images/blob/main/insideout.jpg?raw=true" type="image/x-icon">
    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: "Montserrat", sans-serif;
        }

        .w3-row-padding img {
            margin-bottom: 12px;
        }

        .w3-sidebar {
            width: 120px;
            background: #222;
        }

        #main {
            margin-left: 120px;
        }

        .orb-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            align-items: flex-start;
        }

        .orb-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 120px;
            text-align: center;
        }

        .orb {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
            background-color: var(--orb-color);
            box-shadow: 0 0 25px var(--orb-color);
            transition: all 0.3s ease;
        }

        .orb:hover {
            box-shadow: 0 0 50px var(--orb-color);
        }

        .orb-content {
            margin-top: 10px;
            font-size: 14px;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        @media only screen and (max-width: 600px) {
            #main {
                margin-left: 0;
            }
        }
    </style>
</head>

<body class="w3-black">

    <!-- Sidebar -->
    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
        <a href="#home" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>ISLANDS</p>
        </a>
        <a href="#gaming" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-gamepad w3-xxlarge"></i>
            <p>GAMING</p>
        </a>
        <a href="#story" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-book w3-xxlarge"></i>
            <p>STORY</p>
        </a>
        <a href="#journalist" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-pencil w3-xxlarge"></i>
            <p>JOURNALIST</p>
        </a>
        <a href="#webdev" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-code w3-xxlarge"></i>
            <p>WEB DEV</p>
        </a>
    </nav>

    <!-- Navbar for small screens -->
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
        <!-- Header -->
        <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
            <h1 class="w3-jumbo"><span class="w3-hide-small">Glace's Core Memories</h1>
        </header>

        <?php 
        $islandNames = [
            1 => "Gaming Island", 
            2 => "Story Island", 
            3 => "Student Journalist Island", 
            4 => "Student Web Developer Island"
        ];

        $idNames = ["gaming", "story", "journalist", "webdev"];

        foreach ($islandNames as $id => $name):
            $idName = $idNames[$id - 1];
        ?>
            <div class="w3-container" id="<?= $idName; ?>">
                <h2><?= $name ?></h2>
                <div class="orb-container">
                    <?php if (!empty($islands[$id])): ?>
                        <?php foreach ($islands[$id] as $orb): ?>
                            <div class="orb-card">
                                <div class="orb" style="--orb-color: <?= $orb['color']; ?>; 
                                    <?= $orb['image'] ? "background-image: url('{$orb['image']}');" : "background-color: {$orb['color']};" ?>">
                                </div>
                                <div class="orb-content"><?= htmlspecialchars($orb['content']); ?></div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No items to display for <?= $name ?>.</p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
        
    </div>

</body>

</html>
