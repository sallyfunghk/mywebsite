/* Detect active link on navbar */
const currentLocation = location.href;
const menuItem = document.querySelectorAll('a');
const menuLenght = menuItem.length;
for(let i = 0; i < menuLenght; i++) {
    if(menuItem[i].href === currentLocation) {
        menuItem[i].className = "active";
    }
}

/* Change index page navigation bar to transparent */
if(currentLocation === "https://sallyfunghk.com/") {
    $("nav.navbar").attr('id', 'navbarTransparent');
}
else {
    $("nav.navbar").removeAttr('id', 'navbarTransparent');
}

$(document).ready(function(){

    /* Sidebar button */
    var sidebarButtonLength = $(".sidebarButton button").length;
    for(let i = 1; i <= sidebarButtonLength; i++) {
        $("#portfolio-section").on('click', ".sidebarButton p:nth-child(" + i + ") button", function(event) {
            window.scrollTo({top: ($('#resume .resumeContent:nth-child(' + (i+1) + ')').offset().top)-60, behavior: 'smooth' });
        });        
    }

    /* Scroll to top when refresh */
    window.scrollTo({ top: 0, behavior: 'smooth' });

    /* Handle fade in animation */
    $(".fadeIn").addClass("loaded");

    /* Submit form when clicked confirm */
    $("#contactForm").on('click', 'input[type="submit"]', function(e){
        
        if(confirm("Are you sure you want to submit form data?")){
            var name = $("#name").val();
            var email = $("#email").val();
            var message = $("#message").val();

            if (formSubmitIsValid(name, email, message)) {
                $.ajax({
                    url:'dbConnect.php',
                    method:'POST',
                    data:{
                        name:name,
                        email:email,
                        message:message
                    },
                    success:function(data){
                        alert(data);
                    }
                });
            }
        }
        else{
         e.preventDefault();
         window.location="#";
        }
    });

    /* Reset form when clicked confirm */
    $("#contactForm").on('click', 'input[type="reset"]', function(e){
        if(confirm("Are you sure you want to reset form data?")){}
        else{
         e.preventDefault();
         window.location="#";
        }
    });

});

function formSubmitIsValid(name, email, message) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (name == "") {
        alert("Name is required.");
        return false;
    }
    else if (email == "") {
        alert("Email is required.");
        return false;
    }
    else if (!regex.test(email)) {
        alert("Not a valid email.");
        return false;
    }
    else if (message == "") {
        alert("Message is required.");
        return false;
    }
    return true;
}