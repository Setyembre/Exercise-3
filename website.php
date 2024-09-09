


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="body.css">
    <title>Team Profile</title>
</head>
<body>
    
    <header>
        <h1>Our Team</h1>
    </header>

    <section class="team">
    <?php
$members = [
    ['name' => 'Ehares, Johnfel Vincent B.', 'role' => 'Project Manager', 'image' => 'pics/IMG_20240819_145102_960.jpg', 'studentid' => '22142843', 'age'=> '21',  'address' => 'Cupang Muntinlupa City'
, 'email' => 'eharesjohnfelvincent_bsit@plmun.edu.ph', 'facebook' => 'https://www.facebook.com/johnfel.dinamarupok22/'],
    ['name' => 'Dimas Lawrence Manuel P.', 'role' => 'Lead Developer', 'image' => 'pics/lorins.jfif', 'studentid' => '22143625', 'age'=> '20',  'address' => 'Biñan Laguna', 'email' => 'dimaslawrencemanuel_bsit@plmun.edu.ph',
    'facebook' => 'https://www.facebook.com/lawrence.dimas.12'],
    ['name' => 'Legaspi Genny Lannae', 'role' => 'Assistant Developer', 'image' => 'pics/genny.jfif', 'studentid' => '22143974', 'age'=> '20',  'address' => 'San Pedro Laguna', 'email' => 'legaspigennylannae_bsit@plmun.edu.ph',
      'facebook' => 'https://www.facebook.com/gennylannae'],
    ['name' => 'Junio Abegail', 'role' => 'Information Gatherer', 'image' => 'pics/abby.jfif', 'studentid' => '22146917', 'age'=> '20',  'address' => 'Bayanan Muntinlupa City', 'email' => 'junioabegail_bsit@plmun.edu.ph',
      'facebook' => 'https://www.facebook.com/Abbeng19'],
    ['name' => 'Brutas Macky', 'role' => 'Moral Support', 'image' => 'pics/macky.jfif', 'studentid' => '0000000', 'age'=> '22',  'address' => 'Sucat Muntinlupa City', 'email' => 'eharesjohnfelvincent_bsit@plmun.edu.ph',
      'facebook' => 'https://www.facebook.com/mac.datay']
    // Add more members as needed
];

   


foreach ($members as $member) {
    echo '<div class="member" onclick="showDetails(\'' . $member['name'] . '\n' .  $member['studentid'] .'\n'. $member['age'] . '\n'. $member['address']. '\n'. $member['email'].'\')">';
    echo '<img src="' . $member['image'] . '" alt="' . $member['name'] . '">';
    echo '<h2>' . $member['name'] . '</h2>';
    echo '<p>' . $member['role'] . '</p>';
    echo '<button id="facebookButton" onclick="redirectToFacebook(\'' . $member['facebook']. '\')">Visit ' . $member['name']. '\'s Facebook Profile</button>';
    echo '</div>';
}


?>



      
        <!-- Add more team members as needed -->
    </section>

    <footer>
        <p>&copy; 2024 Team Profile. All rights reserved.</p>
    </footer>

    <script src="script.js">

    </script>


</body>
</html>
