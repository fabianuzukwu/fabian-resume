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
        <form id="myForm" action="contactform.php" method="post">
            <input type="text" name="subject" id="subject" required placeholder="Subject">
            <br>
            <input type="text" name="name" id="name" required placeholder="Full Name" minlength="4" <br>
            <input type="email" name="email" id="email" required placeholder="Your email">
            <br>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" minlength="20"></textarea>
            <br>
            <button type="submit" value="Submit" onclick="sendEmail()">Send Mail</button>
    </div>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
</body>
</html>