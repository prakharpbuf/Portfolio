<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/26b935012c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="myCSS.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
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
    <section id="photo">
        <div id='photoYellow'></div>
        <div id='photoBlue'></div>
        <img src="photo.jpg" alt="Prakhar's photo">
    </section>
    <div id="gap"><br><br><br><br></div>
    <section id="Profile">
        <h1>
            <strong style="line-height:53px; font-weight:500">Hi, I'm Prakhar Paw...</strong>
        </h1>
        <span class="para">
An extremely enthusiastic student, currently enrolled at SUNY at Buffalo class of '21. Having a very strong base in Computer Science, I am looking for a job in IT/Cybersecurity while I work towards achieving more and more relevant skills and certifications.
A ridiculously quick learner who is always looking to learn and master new skills. 

        </span> <br>
        <button id="knowMore">Download resume</button>
    </section>
    </header>
    <section id="Certificates">
        <br>
        <h1 class="sectionHeading"><strong>My Certificates</strong></h1>&nbsp;
        <button id='certificatesBtn'>See All</button>
        <br>
        <br>
        <br>
        <br>
    </section>
    <script>
        function expand(sec){
            var btn=document.getElementById(sec.id);
            num=/\d+/.exec(sec.id);
            var dots=document.getElementById("dots_"+num);
            var moreText=document.getElementById("more_"+num);
            if(dots.style.display=='none'){
                dots.style.display="inline";
                btn.innerHTML="Read More &darr;";
                moreText.style.display="none";
            }
            else{
                dots.style.display="none";
                btn.innerHTML="Read Less &uarr;";
                moreText.style.display="inline";
            }
        }
    </script>
    <section id="Skills"> 
    <h1 class="sectionHeading headingSkills"><strong>My Skills</strong></h1>
    <div class="Skill firstSkill"><i class="icon fas fa-network-wired fa-2x"></i> <span class="Description"><strong>Modern Networking </strong><br>Designing and implementing functional networks. Confi<span id='dots_1'>....</span> <span id='more_1'>guring, managing, and maintaining essential network devices. Using devices such as switches and routers to segment network traffic and create resilient networks. Identifying the benifits and drawbacks of existing network configurations. Implementing network security, standards and protocols. Troubleshooting network problems. Supporting the creation of virtualized networks.</span></span><br><button onclick="expand(this)" id='button_1' class='btnSkill'>Read More &darr;</button></div>
    <div class="Skill"><i class="icon fas fa-lock fa-2x"></i><span class="Description"> <strong>Cybersecurity </strong><br>Hands-on network security. Risk management. Threat<span id='dots_2'>....</span> <span id='more_2'> intelligence. Data and host security. Identity management. Cryptography and public key infrastructure (PKI). Common tools like nmap, BurpSuite, etc. Cybersecurity best practices. System hardening.</span></span><br><button onclick="expand(this)" id='button_2' class='btnSkill'>Read More &darr;</button></div>
    <div class="Skill"><i class="icon fab fa-python fa-2x"></i><span class="Description"><strong>Python</strong> <br>Language syntax, Data structures in python. Using python to<span id='dots_3'>....</span> <span id='more_3'> access web data. Retrieving, Processing and Visualizing data in Python. Using databases (SQLite3) with python. pillow, tesseract, and openCV. Web crawling and web scraping. RegExes. Troubleshooting, interacting with and automating tasks with python </span></span> <br><button onclick="expand(this)" id='button_3' class='btnSkill'>Read More &darr;</button></div>
    <div class="Skill"><i class="icon fab fa-python fa-2x"></i><span class="Description"><strong>C </strong><br> Language syntax, data types, preprocessor operations, functi<span id='dots_4'>....</span><span id='more_4'>ons, dynamic memory allocation and deallocation, pointers, file handling and multithreading and mutex using pthread library</span></span><br><button onclick="expand(this)" id='button_4' class='btnSkill'>Read More &darr;</button></div>
    <div id='moreSkillsContainer'>
    <div class="Skill"><i class="icon fas fa-code fa-2x"></i><span class="Description"><strong>C++</strong> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut tellus ac ligula<span id='dots_5'>....</span> <span id='more_5'>mattis rutrum vel et massa. Class aptent
    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span></span> <br><button onclick="expand(this)" id='button_5' class='btnSkill'>Read More &darr;</button></div>
    <div class="Skill"><i class="icon fas fa-code fa-2x"></i><span class="Description"><strong>Full stack web development</strong> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut tellus ac ligula<span id='dots_6'>....</span> <span id='more_6'>mattis rutrum vel et massa. Class aptent
    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span></span> <br><button onclick="expand(this)" id='button_6' class='btnSkill'>Read More &darr;</button></div>
    <div class="Skill"><i class="icon fas fa-code fa-2x"></i><span class="Description"><strong>Git and GitHub</strong> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut tellus ac ligula<span id='dots_7'>....</span> <span id='more_7'>mattis rutrum vel et massa. Class aptent
    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span></span> <br><button onclick="expand(this)" id='button_7' class='btnSkill'>Read More &darr;</button></div>
    <div class="Skill"><i class="icon fas fa-code fa-2x"></i><span class="Description"><strong>MS Office</strong> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut tellus ac ligula<span id='dots_8'>....</span> <span id='more_8'>mattis rutrum vel et massa. Class aptent
    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span></span> <br><button onclick="expand(this)" id='button_8' class='btnSkill'>Read More &darr;</button></div>
    <div class="Skill"><i class="icon fas fa-code fa-2x"></i><span class="Description"><strong>Java</strong> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut tellus ac ligula<span id='dots_9'>....</span> <span id='more_9'>mattis rutrum vel et massa. Class aptent
    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span></span> <br><button onclick="expand(this)" id='button_9' class='btnSkill'>Read More &darr;</button></div>
    <div class="Skill"><i class="icon fas fa-code fa-2x"></i><span class="Description"><strong>JavaScript</strong> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut tellus ac ligula<span id='dots_10'>....</span> <span id='more_10'>mattis rutrum vel et massa. Class aptent
    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span></span> <br><button onclick="expand(this)" id='button_10' class='btnSkill'>Read More &darr;</button></div>
    <div class="Skill"><i class="icon fas fa-code fa-2x"></i><span class="Description"><strong>System Hardening</strong> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut tellus ac ligula<span id='dots_11'>....</span> <span id='more_11'>mattis rutrum vel et massa. Class aptent
    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span></span> <br><button onclick="expand(this)" id='button_11' class='btnSkill'>Read More &darr;</button></div>
    <div class="Skill"><i class="icon fas fa-code fa-2x"></i><span class="Description"><strong>Structured Query Language</strong> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut tellus ac ligula<span id='dots_12'>....</span> <span id='more_12'>mattis rutrum vel et massa. Class aptent
    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span></span> <br><button onclick="expand(this)" id='button_12' class='btnSkill'>Read More &darr;</button></div>
    </div>
    <button id='moreSkills' class='viewWork' onclick='showMoreSkills()'>View More &darr;</button>

    <script src="myJS.js"></script>

    </section>
    <br><br> <br><br>
    <section id="Projects">
        <h1 class="sectionHeading Projects"><strong>Projects and Experiences</strong></h1>
        <br><br>
        <div class="project" id="project1">
            <h3 class="subsectionHeading">La Sagesse School, Indore</h3>
            <span class="Description">
           Assisted in building and upgrading the network system in the school campus, led a session on beginner networking concepts for students and cybersecurity best practices for employees, and assisted in the implementation of security systems.
            <br> <br>
            <a href=""><strong>READ MORE&nbsp;</strong> <i class="fas fa-arrow-right"></i></a>
            <br> 
            </span>
        </div>
        <div class="project" id="project2">
            <h3 class="subsectionHeading">Python: pillow, tesseract and openCV</h3>
            <span class="Description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut tellus ac ligula mattis rutrum vel et massa. Class aptent
                taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis fermentum dui at quam varius, nec
                accumsan nisi faucibus.
                <br> <br>
                <a href=""><strong>READ MORE&nbsp;</strong> <i class="fas fa-arrow-right"></i></a>
                <br>
            </span>
        </div>
        <div class="img">
           
        </div>
            <div class="project" id="project3">
                <h3 class="subsectionHeading">HTML and JS games</h3>
                <span class="Description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut tellus ac ligula mattis rutrum vel et massa. Class aptent
                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis fermentum dui at quam varius, nec
                    accumsan nisi faucibus.
                    <br> <br>
                    <a href=""><strong>READ MORE&nbsp;</strong> <i class="fas fa-arrow-right"></i></a>
                    <br>
                </span>
            </div>
            <div class="img">
            
            </div>
        <div class="project" id="project4">
            <h3 class="subsectionHeading">SDOOP and DBMS</h3>
            <span class="Description">
                Outlined a graphics editor application with create, edit, save, select, zoom, group, and clipboard functionality using OOP for logic and StarUML for design and made this application interactive using SQL and C++ to manage data.
                <br> <br> <br> 
                <a href=""><strong>READ MORE&nbsp;</strong> <i class="fas fa-arrow-right"></i></a>
                <br>
            </span>
        </div>
        <button class="viewWork" onclick="window.location.href=''">View work &rarr;</button>
    </section>
    <footer id="Contact">
        <h1 class="sectionHeading contact"><strong>Get in touch...</strong></h1>
        <div id="contactLeft">
           <div id="desktop"> Click <a href="mailto:prakhar.paw08@gmail.com" class='clickHere'>here</a> to email me, or submit your email in the textbox on the right and I will email you, or drop me a text at LinkedIn, Facebook, or Instagram.</div>
           <div id="mobile">Click <a href="mailto:prakhar.paw08@gmail.com" class='clickHere'>here</a> to email me, or submit your email in the textbox below and I will email you, or drop me a text at LinkedIn, Facebook, or Instagram.</div>
        </div>
        <div id="contactRight">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <span>Enter your email address: </span>
            <br> <br>
            <input type="email" name="email" id="email" value= "<?php echo htmlspecialchars($email); ?>" required>
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