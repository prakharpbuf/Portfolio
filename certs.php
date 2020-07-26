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
    <link rel="stylesheet" href="certsCSS.css">
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
        <a href="index.php#Projects">Projects</a>
        <a href="index.php#Skills" style="margin-right:-2%">Skills</a>
        <a href="index.php#Certificates">Certificates</a>
        <a href="index.php#Profile">Home</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i id="Hamburger" class="fa fa-bars"></i>
        </a>
    </div>
</header>


<div class="sectionHeading">
    My Certificates
</div>


<div class="grid-container">
    <div class='blue'>
        &nbsp;
    </div>
    <div class="grid-item certificate">
        <img src="IntroToCySecForBusiness.png" alt="Intro to Cyber Security For Business">
    </div>
    <div class="grid-item text">
        <div class="subsectionHeading">Introduction to Cybersecurity for Business</div> <br><br>
        <div>Course 1: Practical computer security, CIA triad, accessing risk, attack surfaces.</div>
    </div>
</div>

<div class="grid-container">
    <div class="grid-item text">
        <div class="subsectionHeading">Cyber Threats And Attack Vectors</div> <br><br>
        <div>Course 2: Network and system-based attacks, Cloud security, Common vulnerabilities, Data breaches.</div>
    </div>
    <div class="grid-item certificate">
        <img src="CyberThreatsAndAttackVectors.png" alt="Cyber Threats And Attack Vectors">
    </div>
    <div class=" yellow">
        &nbsp;
    </div>
</div>

<div id="temp">
    <br> <br>
    <div class="sectionHeading">
        All certificates
    </div>
    <div class="subsectionHeading" style="padding-top: 4%;">
        Formatting comming soon!
    </div>
    <pre>


    SQL for Data Science, University of California, Davis 
    - DDL, DML, Filtering, Sorting and Calculating data, Subqueries and Joins, Modifying and Analyzing data

    Cybersecurity for Business, University of Colorado, Colorado Springs (Specialization)
    - Introduction to Cybersecurity for Business
    - Cyber threats and attack vectors
    - Detecting and mitigation cyber threats and attack vectors
    - Proactive computer security
    
    Certified White Hat Hacker Level 1, Cybersecurity and Privacy Foundation
    - Information gathering, password cracking techniques, session hijacking and sniffing, web search hacking, sandboxing
    and virtual machines, web application hacking techniques, social engineering, windows hacking, Steganography
    
    Certified White Hat Hacker Level 1 Advanced, Cybersecurity and Privacy Foundation
    - Web pen testing tools, port scan, Nessus, Metasploit, Ophcrack, automated SQL injection, Canvas
    
    Certified White Hat Hacker Level 2, Cybersecurity and Privacy Foundation
    - Log analysis, nmap and Nessus, OS hardening, malware analysis
    
    Certified APT Defender, Cybersecurity and Privacy Foundation
    - DDOS, APT attack, analysis and, defense, POS attack, analysis, and defense, Shellshock vulnerability, Android
    exploitation
    
    CompTIA Network+
    - Networking concepts, Infrastructure, Network operations, Network Security, Network troubleshooting and tools
    
    (Ongoing) CompTIA Security+
    - Threats, attacks and vulnerabilities, Technologies and tools, Architecture and design, Identity and access management,
    Risk management, Cryptography and PKI
    
    Web design for everybody, University of Michigan (Specialization)
    - HTML5
    - CSS3
    - Interactivity with JavaScript
    - Advanced styling and responsive design
    - Capstone
    
    Web application for everybody, University of Michigan (Specialization)
    - Building web applications in PHP
    - Intro to SQL
    - Building database applications in PHP
    - JavaScript, jQuery, and JSON
    
    Python for Everybody, University of Michigan (Specialization)
    - Python for everybody
    - Python data structures
    - Using python to access web data
    - Using databases with python
    - Capstone: Retrieving, Processing, and Visualizing data in python
    
    Python 3 Programming, University of Michigan (Specialization)
    - Python Basics
    - Python functions, files and dictionaries
    - Data collection and processing with python
    - Python classes and inheritance
    - Python project: pillow, tesseract and OpenCV
    
    Google IT Automation with Python, Google (Specialization)
    - Crash course on Python
    - Using python to interact with the operating system
    - Introduction to Git and GitHub
    - Troubleshooting and debugging techniques
    - Configuration management and the cloud
    - Automating real world tasks with python
    </pre>
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