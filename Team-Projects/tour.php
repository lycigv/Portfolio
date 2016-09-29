<?php

echo "<!DOCTYPE html>\n";
echo "<html lang=\"en\">\n";
echo "<head>\n";
echo "    <meta charset=\"utf-8\">\n";
echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n";
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
echo "    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->\n";
echo "    <meta name=\"description\" content=\"\">\n";
echo "    <meta name=\"author\" content=\"\">\n";
echo "\n";
echo "    <title>Digital Tour</title>\n";
echo "	\n";
echo "		<!--  Font Awesome  -->\n";
echo "	<link href=\"fonts/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">\n";
echo "	<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\">\n";
echo "	\n";
echo "	<!--  Google Font  -->\n";
echo "	<link href=\"https://fonts.googleapis.com/css?family=Titillium+Web\" rel=\"stylesheet\" type=\"text/css\">\n";
echo "\n";
echo "    <!-- Bootstrap core CSS -->\n";
echo "    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">\n";
echo "\n";
echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"slick/slick.css\"/>\n";
echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"slick/slick-theme.css\"/>\n";
echo "    \n";
echo "    <!-- Custom CSS -->\n";
echo "    <link href=\"css/style.css\" rel=\"stylesheet\">\n";
echo "\n";
echo "\n";
echo "    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->\n";
echo "    <!--[if lt IE 9]>\n";
echo "    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>\n";
echo "    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>\n";
echo "    <![endif]-->\n";
echo "</head>\n";
echo "\n";
echo "<body class=\"text-center\">\n";
echo "\n";
echo "    <div class=\"container\">\n";
echo "\n";
echo "        <!--  The justified navigation menu is meant for single line per list item.\n";
echo "        Multiple lines will require custom code not provided by Bootstrap.  -->\n";

include 'header.php';

echo "       \n";
echo "\n";
echo "        <div class=\"row\">\n";
echo "            <h2>Digital Tour</h2>\n";
echo "            <p class=\"lead\">The Software Developer Boot Camp is available in full online and can be taken from anywhere in the world. We have online students all across America and in other countries. For example, there are students studying our program from their homes in Europe.</p>\n";
echo "            <p class=\"lead\">The Tech Academy itself is located in beautiful Portland, Oregon. All of our employees are located at our Portland office and for students who live in Oregon, the program can be done at the Portland campus. Are you in Portland? Come on down for a tour! Here are some photos of our offices:</p>\n";
echo "        </div>\n";
echo "        <div class=\"row slideanim\">\n";
echo "            \n";
echo "            <div class=\"your-class\">\n";
echo "                <div><img src=\"images/tour/Academy%201%20(2).JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Academy%2010.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Academy%2011.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Academy%202.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Academy%203.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Academy%204.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Academy%205.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Academy%206.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Academy%207.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Academy%208.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Academy%209.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Academy%20Entrance.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Conference%20room.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Exec%20Office.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Job%20Placement%20Directors.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Live%20Project%20Area%202.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Live%20Project%20Area.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Lunch%20Room%201.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Lunch%20Room%202.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Reception%201.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Reception%202.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Registration%202.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Registration%20Area%201.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Remote%20Delivery%201.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Remote%20Delivery%202.JPG\"></div>\n";
echo "                <div><img src=\"images/tour/Student%20Lounge.JPG\"></div>\n";
echo "            </div>\n";
echo "        </div>\n";
echo "        <div class=\"row\">\n";
echo "            <br />\n";
echo "            <p class=\"lead\">Are you interested in attending in-person or from home? <a href=\"contact.html\">Contact us</a> now. You can start today!</p>\n";
echo "        </div>\n";
echo "\n";
echo "        <!-- <div class=\"banner row\">\n";
echo "                <h3>15 week Software Developer Boot Camp</h3>\n";
echo "                <h2><a href=\"contact.html\">Enroll Now and START TODAY</a></h2>\n";
echo "        </div> -->\n";
echo "    \n";

include 'footer.php';
echo "\n";
echo "    \n";
echo "\n";
echo "<div id=\"myModalPopUp\" class=\"modal fade\" role=\"dialog\"> <!-- modal dialog box -->\n";
echo "	    <div class=\"modal-dialog\">\n";
echo "		    <!-- Modal content-->\n";
echo "		    <div class=\"modal-content\">\n";
echo "			    <div class=\"modal-header\">\n";
echo "				    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>\n";
echo "				    <h3 class=\"modal-title\">Hi there!</h3>\n";
echo "			    </div>\n";
echo "			    <div class=\"modal-body\">\n";
echo "				    <p>Would you like to learn more about The Tech Academy?</p>\n";
echo "			    </div>\n";
echo "			    <div class=\"modal-footer\">\n";
echo "                    <a class=\"btn modal-button-yes\" href=\"contact.html\">Yes</a>\n";
echo "                    <a class=\"btn\" data-dismiss=\"modal\">No</a>\n";
echo "			    </div>\n";
echo "		    </div>\n";
echo "	    </div>\n";
echo "    </div>\n";
echo "	\n";
echo "	<!-- Start Alexa Certify Javascript -->\n";
echo "<script type=\"text/javascript\">\n";
echo "_atrk_opts = { atrk_acct:\"jT90m1a8FRh2cN\", domain:\"learncodinganywhere.com\",dynamic: true};\n";
echo "(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = \"https://d31qbv1cthcecs.cloudfront.net/atrk.js\"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();\n";
echo "</script>\n";
echo "<noscript><img src=\"https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=jT90m1a8FRh2cN\" style=\"display:none\" height=\"1\" width=\"1\" alt=\"\" /></noscript>\n";
echo "<!-- End Alexa Certify Javascript -->  \n";
echo "\n";
echo "    <script src=\"https://code.jquery.com/jquery-2.1.4.min.js\"></script>\n";
echo "    <script src=\"js/bootstrap.min.js\"></script>\n";
echo "    <script src=\"js/npm.js\"></script>\n";
echo "    <script type=\"text/javascript\" src=\"slick/slick.min.js\"></script>\n";
echo "    \n";
echo "    <script>\n";
echo "        $(document).ready(function(){\n";
echo "            $('.your-class').slick({\n";
echo "                dots: true,\n";
echo "                infinite: true,\n";
echo "                speed: 500,\n";
echo "                fade: true,\n";
echo "                cssEase: 'linear',\n";
echo "                adaptiveHeight: true,\n";
echo "                autoplay: true,\n";
echo "                autoplaySpeed: 5000,\n";
echo "            });\n";
echo "            function waitThenDoSomething(waitTimeInMS, myAction) {\n";
echo "                setTimeout(function () {\n";
echo "                    if (myAction == \"displayPopup\") {\n";
echo "                        $('#myModalPopUp').modal('show');\n";
echo "                    }\n";
echo "                }, waitTimeInMS); //time in ms to wait before modal dialog box shows up.\n";
echo "            }\n";
echo "            if (document.referrer == \"http://learncodinganywhere.com/index.html\" || document.referrer == \"http://learncodinganywhere.com/\") {\n";
echo "                waitThenDoSomething(0, \"displayPopup\"); //this function waits 0 milliseconds before displaying a popup.\n";
echo "                //I left the wait function here so that if you change your mind and decide you want to wait before showing \n";
echo "                //the modal dialog box, it's as easy as changing the 0 above to a different number, rather than recoding \n";
echo "                //all of it again.\n";
echo "            }\n";
echo "            $(window).ready(function () { $(window).scroll() });\n";
echo "            $(window).scroll(function () {\n";
echo "                $(\".slideanim\").each(function () {\n";
echo "                    var pos = $(this).offset().top;\n";
echo "\n";
echo "                    var winTop = $(window).scrollTop();\n";
echo "                    if (pos < winTop + $(window).height()) {\n";
echo "                        $(this).addClass(\"slide\");\n";
echo "                    }\n";
echo "                });\n";
echo "            });\n";
echo "        });\n";
echo "\n";
echo "    </script>\n";
echo "</body>\n";
echo "</html>\n";

?>
