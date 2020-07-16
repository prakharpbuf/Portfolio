function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive"; 
    } else {
        x.className = "topnav";
    }
}
function HamburgerEnlarge(){  //not used
    var x = document.getElementById("Hamburger");
    if (x.className = "fa fa-bars") {
        x.className = "fa fa-bars fa-2x";
    } 
}
function HamburgerDelarge(){  //not used
    var x=document.getElementById("Hamburger");
    if(x.className="fa fa-bars fa-2x")
    {
        x.className="fa fa-bars";
    } 
}
function sendEmail(){ //not used
    return window.open("https://mail.google.com/mail/?view=cm&fs=1&to=prakhar.paw08@gmail.com");
}
function showMoreSkills() {
    var container = document.getElementById("moreSkillsContainer");
    var btn = document.getElementById("moreSkills");
    if (container.style.display == 'block') {
        container.style.display = 'none';
        btn.innerHTML = "View More &darr;";
    }
    else {
        container.style.display = 'block';
        btn.innerHTML = 'View Less &uarr;';
    }
}