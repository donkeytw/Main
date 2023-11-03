<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- STYLES -->
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Contact Form Confirmation</title>
</head>

<body class="user-select-none">
<nav id="nav-top" class="navbar sticky-top py-0 mb-4">
    <div class="container-fluid g-0 m-0">
        <a href="home.html" class="navbar-brand ms-4 position-absolute top-0 start-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-house-fill" viewBox="0 0 16 16">
                <path id="home-btn" d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
            </svg>
        </a>
        <nav class="nav mx-5">
            <a class="nav-link d-none d-md-block" href="requirements.html">Requirements</a>
            <a class="nav-link d-none d-md-block" href="experience.html">Experience</a>
            <a class="nav-link d-none d-md-block" href="contact_form.html">Questions</a>
        </nav>
        <div class="navbar-brand justify-content-end me-4" >
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tool-tip" class="bi bi-lightbulb-fill off" viewBox="0 0 16 16" id="darkmode-toggler">
                <path id="lightbulb-path" d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div>
    </div>
</nav>
<?php

$name = $_POST["name"];
$mail = strval($_POST["email"]);
$phone = $_POST["phone"];
$question = $_POST["message"];
$header = "From: nurses.nexus@donkeyteam.com";
$subject = "Nurses Nexus Question Submission Confirmation";
$recipient = "donkeytestmail@donkeytwo.greenriverdev.com";
$message =
"New Message From: \r\n".$name.
"\r\nPhone Number: \r\n".$phone.
"\r\nEmail: \r\n".$mail.
"\r\nMessage: \r\n".$question;
mail($recipient, $subject, $message, $header);
?>

<div class="card col-9 mx-auto my-5 text-center" id="receipt-div">
    <div class="card-body p-5">
        <h4 class="card-title pb-3">Thank you for your question!</h4>
        <p class="card-text">Your question has been received and will be address by phone or
            email as soon as possible.
        </p>
    </div>
</div>

<nav class="navbar fixed-bottom d-md-none" id="mobile-nav-bottom">
    <div class="container justify-content-evenly g-0">
        <a class="nav-link active text-center" aria-current="page" href="requirements.html">
            <svg width="30" height="30" fill="white" xmlns="http://www.w3.org/2000/svg" class="bi bi-card-checklist" viewBox="0 0 16 16" id="requirement-icon">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
            </svg>
            <p class="mb-0 text-light">Requirements</p>
        </a>
        <a class="nav-link text-center" href="experience.html">
            <svg width="30" height="30" fill="white" xmlns="http://www.w3.org/2000/svg" class="bi bi-clipboard-check" viewBox="0 0 16 16" id="experience-icon">
                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
            </svg>
            <p class="mb-0 text-light">Experience</p>
        </a>
        <a class="nav-link text-center" href="contact_form.html">
            <svg width="30" height="30" fill="white" xmlns="http://www.w3.org/2000/svg" class="bi bi-chat-left-dots" viewBox="0 0 16 16" id="contact-icon">
                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
            <p class="mb-0 text-light">Questions</p>
        </a>
    </div>
</nav>

<!-- JAVASCRIPT -->
<script src="../javascript/js.js"></script>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

