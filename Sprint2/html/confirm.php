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
    <title>Survey Confirmation</title>
</head>
<body>

<nav id="nav-top" class="navbar sticky-top py-0 mb-4">
    <div class="container-fluid g-0 m-0">
        <a href="home.html" class="navbar-brand ms-4 position-absolute top-0 start-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-house-fill"
                 viewBox="0 0 16 16">
                <path id="home-btn"
                      d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
            </svg>
        </a>
        <nav class="nav mx-5">
            <a class="nav-link d-none d-md-block" href="requirements.html">Requirements</a>
            <a class="nav-link d-none d-md-block" href="experience.html">Experience</a>
            <a class="nav-link d-none d-md-block" href="contact_form.html">Questions</a>
        </nav>
        <div class="navbar-brand justify-content-end me-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" data-bs-toggle="tooltip"
                 data-bs-placement="top" data-bs-title="Tool-tip" class="bi bi-lightbulb-fill off" viewBox="0 0 16 16"
                 id="darkmode-toggler">
                <path id="lightbulb-path"
                      d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <?php
        // confirm all likert scales are checked
        // if not, provide link back to survey page
        if (!validate()) {
            echo invalid();
        } else {
            // otherwise, add confirm button and go to receipt.php
            // pass hidden form field
            echo valid();
        }

        // if no data, send users back to the survey page
        function invalid(): string
        {
            return <<<HTML
        <div class="row">
            <p class="col-12">
                <!-- 
                    Image source: https://pixabay.com/vectors/sign-caution-warning-danger-safety-304093/
                    Author: Clker-Free-Vector-Images
                    License: https://pixabay.com/service/terms/
                -->
                <img class="caution" src="../images/sign-304093.svg" alt="Caution sign">
                Invalid survey results. <a href="survey.html">Click here to go back.</a>
            </p>
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
        </div>
HTML;
        }

        // function to use when post inputs validated
        function valid(): string
        {

            $clinical_map = array(
                '1' => "Strongly Disagree",
                '2' => "Disagree",
                '3' => "Ambivalent",
                '4' => "Agree",
                '5' => "Strongly Agree");

            // gather all required values to display
            $site_attended = $_POST["SiteAttended"];
            $clinical_site = $_POST["clinicalSite"];
            $clinical_staff = $_POST["clinicalStaff"];
            $learning_objective = $_POST["learningObj"];
            $preceptor = $_POST["preceptor"];
            $recommend_site = $_POST["recommend-site"];

            // get optionals
            $site_comments = $_POST["SiteComments"] ?? "";
            $instructor_comments = $_POST["InstructorComments"] ?? "";

            // make hidden
            $hidden = 1234;

            return <<<HTML
        <div class="card mx-auto col-11 col-md-12" id="confirm-div">
        <div class="row">
            <h3 class="card-title text-center">Questionnaire Summary</h3>
            <div class="col-6"><strong>Site Attended:</strong></div><div class="col-6">{$site_attended}</div>
            <hr>
            <div class="col-6"><strong>Clinical Site Score:</strong></div><div class="col-6"> {$clinical_map[$clinical_site]}</div>
            <hr>
            <div class="col-6"><strong>Clinical Staff Score:</strong></div><div class="col-6"> {$clinical_map[$clinical_staff]}</div>
            <hr>
            <div class="col-6"><strong>Learning Objective Score:</strong></div><div class="col-6"> {$clinical_map[$learning_objective]}</div>
            <hr>
            <div class="col-6"><strong>Preceptor Score:</strong></div><div class="col-6"> {$clinical_map[$preceptor]}</div>
            <hr>
            <div class="col-6"><strong>Recommendation Score:</strong></div><div class="col-6"> {$clinical_map[$recommend_site]}</div>
            <hr>
            <div class="col-6"><strong>Comments:</strong></div><div class="col-6"> {$site_comments}</div>
            <hr>
            <div class="col-6"><strong>Instructor Comments:</strong></div><div class="col-6"> {$instructor_comments}</div>
            <hr>
            <br>
            <p class="text-center">If all items are correct, hit Submit.</p>
            <form action="receipt.php" method="POST"> 
                <input type="hidden" name="SiteAttended" value="{$site_attended}">
                <input type="hidden" name="clinicalSite" value="{$clinical_site}">
                <input type="hidden" name="clinicalStaff" value="{$clinical_staff}">
                <input type="hidden" name="learningObj" value="{$learning_objective}">
                <input type="hidden" name="preceptor" value="{$preceptor}">
                <input type="hidden" name="recommend-site" value="{$recommend_site}">
                <input type="hidden" name="siteComments" value="{$site_comments}">
                <input type="hidden" name="instructorComments" value="{$instructor_comments}">
                <input type="hidden" name="validator" value="{$hidden}" 
                <div class="container ">
                    <div class="row justify-content-around g-0 d-md-none mb-2">
                            <input class="btn" type="button" name="back" id="back" value="Back" onclick="history.back()">
                            <input class="btn" type="submit" id="submit" value="Submit">
                    </div>
                    <div class="row d-none d-md-inline justify-content-start g-0">
                            <input class="btn m-2" type="button" name="back" id="back" value="Back" onclick="history.back()">
                            <input class="btn m-2" type="submit" id="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div> 
            <div class="mb-5 p-3"></div> <!--Extra space holder for the narrow mobile view to preclude the chance of bottom menu bar from being atop the buttons.-->
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
    </div>
HTML;
        }

        // validates POST input
        function validate(): bool
        {
            $problemsStr = "";

            if (is_null($_POST["SiteAttended"]) || $_POST["SiteAttended"] === "") {
                $problemsStr .= "The attended site was not filled.<br>";
            }

            foreach (array("clinicalSite", "clinicalStaff", "learningObj", "preceptor", "recommend-site") as $slider) {
                // check if there's something there
                if (is_null($_POST[$slider]) || $_POST[$slider] === "") {
                    $problemsStr .= "The {$slider} is not set.<br>";
                } elseif (!check_numeric($_POST[$slider])) {
                    $problemsStr .= "The {$slider} is invalid.<br>";
                }
            }

            // check if any problems were logged.
            return $problemsStr === "";
        }

        // makes sure the input is a valid number
        function check_numeric($str): bool
        {
            return is_numeric($str) && $str >= 1 && $str <= 5;
        }

        ?>
    </div>
    <!-- JAVASCRIPT -->
    <script src="../javascript/js.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>

</body>
</html>