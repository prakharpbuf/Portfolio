<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://kit.fontawesome.com/26b935012c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src="myJS.js"></script>
    <link rel="stylesheet" href="baseCSS.css">
    <link rel="stylesheet" href="expCSS.css">
    <title>Prakhar Paw</title>
</head>
<body>


<?php
$email=$emailErr=null;
if($_SERVER['REQUEST_METHOD']=="POST"){
    $email=test_input($_POST['email']);
if(empty($_POST["email"])){
    $emailErr="Email is required";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
}
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data); 
    return $data;
}
?>


    <header>
        <div class="topnav" id="myTopnav">
            <span id="NameContainer"><span id="myName"><strong>Prakhar</strong></span></span>
            <a href="mailto:prakhar.paw08@gmail.com" class="active">Email</a>
            <a href="#Projects">Projects</a>
            <a href="#Skills" style="margin-right:-2%">Skills</a>
            <a href="#Certificates">Certificates</a>
            <a href="#Profile">Home</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i id="Hamburger" class="fa fa-bars"></i>
            </a>
        </div>
    </header>


    <div class="sectionHeading">
        Projects and Experiences
    </div>


    <div class="grid-container">
        <div class='blue'>
            &nbsp;
        </div>
        <div class="grid-item" id="LaSagesse">
            <div class="flex-container">
                <div class="image">
                    <img src="LaSagesse.png" alt="pro School Photo">
                </div>
                <div class="para">
                    <div class="subsectionHeading">
                        La Sagesse School, Indore
                    </div>
                    <div class="text">
                        • Improved network performance and security by installing switches, USPs, and Repeaters. Surprisingly, one of the least
                        Wi-Fi accessible areas was their chairman’s office <br>
                        • Software patches updated on 50+ hosts by Windows delivery optimization <br>
                        • Programmed VoIP telephones in office rooms on each floor for the whole campus using Analog Telephone Adapter (ATA) and
                        configuring router’s QoS <br>
                        • Held a 1-week session on modern networking and security concepts for 40 enthusiastic students and guided them on a
                        path to IT career. 3-day training session for employees on cybersecurity best practices <br>
                        • Hardened the systems present on the network to reduce vulnerabilities by stopping unnecessary services, closing unused
                        ports, and installing antiviruses on hosts using Windows Remote Desktop (RDP) <br>
                        • Assisted in the development and documentation of security procedures and incident responses
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="grid-container">
            <div class='yellow'>
                &nbsp;
            </div>
            <div class="grid-item" id="SDOOP">
                <div class="flex-container">
                    <div class="image">
                        <img src="SDOOP.jpg" alt="pro SDOOP">
                    </div>
                    <div class="para">
                        <div class="subsectionHeading">
                            <br>
                            SDOOP and DBMS
                        </div>
                        <br> 
                        <div class="text">
                            • Listed out the functional requirements of features provided by the application software using object-oriented
                            methodology <br>
                            • Used StarUML to create a class diagram, object diagram, component diagram, deployment diagram, use case diagram,
                            sequence diagram, activity diagram, collaboration diagram, state chart diagram, and package diagram in hierarchal order <br>
                            • Documented the created diagrams based on the structural view, behavioral view, implementation view, environmental
                            view, and user view <br>
                            • Developed the pseudo-code for this application software in C++ <br>
                            • Modeled the data through ER diagrams using the DIA diagram editor <br>
                            • Outlined relational tables along with test data including primary keys, foreign keys, etc. 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    <footer id="Contact">
        <h1 class="sectionHeading contact"><strong>Get in touch...</strong></h1>
        <div id="contactLeft">
            <div id="desktop"> Click <a href="mailto:prakhar.paw08@gmail.com" class='clickHere'>here</a> to email me, or
                submit your email in the textbox on the right and I will email you, or drop me a text at LinkedIn, Facebook,
                or Instagram.</div>
            <div id="mobile">Click <a href="mailto:prakhar.paw08@gmail.com" class='clickHere'>here</a> to email me, or
                submit your email in the textbox below and I will email you, or drop me a text at LinkedIn, Facebook, or
                Instagram.</div>
        </div>
        <div id="contactRight">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <span>Enter your email address: </span>
                <br> <br>
                <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" required>
                <input type="submit" name="submit" value="Submit" id="submit" style="cursor:pointer;">
            </form>
            <br>
            <?php if($emailErr!=null){
                    echo $emailErr;
                } 
                if($email!=null && $emailErr==null){
                    echo "Thankyou for submitting your email";
                    $myFile= fopen("emails.txt",'a') or die("Error, please contact admin!");
                    $email.="\n";
                    fwrite($myFile,$email);
                    fclose($myFile);
                }
                ?>
        </div>
        <div id="social">
            <br>
            <span id="LinkedIn">
                <a href=""><i class="fab fa-linkedin-in"></i></a>
            </span>
            <span id="FB">
                <a href="https://www.facebook.com/prakhar.paw.37"><i class="fab fa-facebook-f"></i></a>
            </span>
            <span id="Instagram">
                <a href="https://www.instagram.com/prakhar.paw/"><i class="fab fa-instagram-square"></i></a>
            </span>
        </div>
        <div id="copyright">
            Prakhar Paw (I'm the best)
        </div>
    </footer>
</body>
</html>