<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <title>Fabian Uzukwu Resume</title>
</head>

<body>
    <div class="first header">
        <img src="https://res.cloudinary.com/fabianuzukwu/image/upload/v1566555460/l4oa3l4xh1nxlbaifwi4.jpg" alt="Fabian Uzukwu" height="150px" width="150px" style="float: right;">
        <h1>Uzukwu Ifechukwu Fabian</h1>
        <h3> Contact Details</h2>
            <p><strong>Phone No:</strong> +2347033726470, +2348153885852
                <br>
                <strong>Email:</strong> Mayorogbanna@gmail.com
                <br>
                <strong>Address:</strong> 33 Omeagana street Odoakpu, Onitsha Anambra State.
            </p>

    </div>
    <div class="objective second">
        <h3>Career Objective</h3>
        <p>
            To expand my skills, knowledge and experience to the point of being Excellent and precise, carefully and
            systematically putting my knowledge to
            use along with others to achieve organizational goal.

        </p>

    </div>
    <div class="skills first">
        <h3>Skills</h3>
        <ul>
            <li>Active Listener</li>
            <li> Good Inerpersonal relationship </li>
            <li>Integrity and transparency</li>
            <li>Effective team player</li>
            <li>Good Communication skills</li>
            <li>Typing</li>

        </ul>

    </div>
    <div class="education second">
        <h3>Education Qualifications</h3>
        <dl>
            <dt><strong>2008-2014</strong></dt>
            <dd>Infant Jesus Secondary School, Onitsha , Anambra State. (WAEC)</dd>
            <dt><strong>2002-2008</strong></dt>
            <dd>Infant Jesus Primary School, Onitsha, Anambra State. (FSLC)</dd>
        </dl>

    </div>
    <div class="programming first">
        <h3>Programming Skills</h3>
        <ul>
            <li>HTML5 (Intermediate)</li>
            <li>CSS3 (Intermediate)</li>
            <li>Bootstrap (Beginner)</li>
            <li>Python (Beginner)</li>
            <li>Java (Beginner)</li>
        </ul>

    </div>
    <div class="hobbies second">
        <h3>Hobbies</h3>
        <ul>
            <li>Reading</li>
            <li>Coding</li>
            <li>Traveling</li>
            <li>Playing Games</li>
        </ul>
    </div>
    <div class="first">
        <h3 class="sent-notification"></h3>
        <h2>Contact Form</h2>
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
    </script>
</body>
</html>