


    $(function() {
    	var pull 		= $('#pull');
    		menu 		= $('nav ul');
    		menuHeight	= menu.height();
    	$(pull).on('click', function(e) {
    		e.preventDefault();
    		menu.slideToggle();
    	});
    	$(window).resize(function() {
    		var w = $(window).width();
    		if(w > 320 && menu.is(':hidden')) {
    			menu.removeAttr('style');
    		}
    	});
    });


    "use strict";
    function initMap() {


      let leicester = {lat: 51.510805, lng: -0.129599};
      let mapDemo = document.getElementById("map");


      let map = new google.maps.Map(mapDemo, {
        zoom: 10,
        center: leicester
      });


      let markerBIGBEN = new google.maps.Marker({
        position: bigben,
        map: map,
        title: 'Icon'
      });
      let markerleics = new google.maps.Marker({
        position: leics,
        map: map,
        title: 'Movie Central'
      });
    }



    function checkPass()
    {
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('pass1');
        var pass2 = document.getElementById('pass2');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field
        //and the confirmation field
        if(pass1.value == pass2.value){
            //The passwords match.
            //Set the color to the good color and inform
            //the user that they have entered the correct password
            pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Passwords Match"
        }else{
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Passwords Do Not Match!"
        }
    }
    function validatephone(phone)
    {
        var maintainplus = '';
        var numval = phone.value
        if ( numval.charAt(0)=='+' )
        {
            var maintainplus = '';
        }
        curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
        phone.value = maintainplus + curphonevar;
        var maintainplus = '';
        phone.focus;
    }
    // validates text only
    function Validate(txt) {
        txt.value = txt.value.replace(/[^a-zA-Z-'\n\r.]+/g, '');
    }
    // validate email
    function email_validate(email)
    {
    var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

        if(regMail.test(email) == false)
        {
        document.getElementById("status").innerHTML    = "<span class='warning'>Email address is not valid yet.</span>";
        }
        else
        {
        document.getElementById("status").innerHTML	= "<span class='valid'>Thanks, you have entered a valid Email address!</span>";
        }
    }
    // validate date of birth

    // validate address
    function add_validate(address)
    {
    var regAdd = /^(?=.*\d)[a-zA-Z\s\d\/]+$/;

        if(regAdd.test(address) == false)
        {
        document.getElementById("statusAdd").innerHTML	= "<span class='warning'>Address is not valid yet.</span>";
        }
        else
        {
        document.getElementById("statusAdd").innerHTML	= "<span class='valid'>Thanks, Address looks valid!</span>";
        }
    }
