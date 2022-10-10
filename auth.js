var xhttp = new XMLHttpRequest();

function signupSubmit(e){
    var data = $("#signupForm").serialize();
    //"?first_name=Chris%20Ray&last_name=Belarmino&email=cbelarmino@usc.edu.ph&password=123456&confirm_password=123456"
    $.ajax({
        type : 'POST',
        url : 'signup_action.php',
        data : data,
        success : function(response) {
            var res = JSON.parse(response);
            alert(res["message"]);
            if(res["status"] == 200){
                $('#signupForm')[0].reset();
            }
        }
    });
    e.preventDefault();
}

function signinSubmit(e){
    var url = "signin_action.php";
    var data = $("#signinForm").serialize();
    var urlData = url+"?"+data;
    xhttp.open("GET", urlData, true);
    xhttp.send();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var res = JSON.parse(this.responseText);
            if(res["status"] == 200){
                $('#signinForm')[0].reset();
                window.location.replace('home.php'); //replaces the current location
                //window.location = '../public/home.php'; //navigates to another location
            }else{
                alert(res["message"]);
            }
        }
    };
    e.preventDefault();
}

function signoutClick(e){
    var url = "signout_action.php";
    xhttp.open("GET", url, true);
    xhttp.send();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var res = JSON.parse(this.responseText);
            if(res["status"] == 200){
                window.location.replace('index2.php'); //replaces the current location
                //window.location = '../public/index.php'; //navigates to another location
            }
        }
    };
}