<?php if (isset($message)) : ?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
<?php endif ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleContact.css"/>
    <title>Finance Budget App</title>
</head>
<body>
    <header class="block" style="justify-content: left;">
                <div id="sideMenu">
                    <div style="align-self: flex-start;">
                        <a href="../home.html"
                        ><div class="block sideMenuItem">
                            <img src="https://www.svgrepo.com/show/14443/home.svg"
                            class="sideMenuIcon"
                            />Home
                        </div></a>
                        <a href="../budget.html"
                        ><div class="block sideMenuItem">
                        <img
                            src="https://www.svgrepo.com/show/17167/pie-chart.svg"
                            class="sideMenuIcon"
                        />Budget
                        </div></a
                    >
                    <a href="../budget-planner.html"
                        ><div class="block sideMenuItem">
                        <img
                            src="https://www.svgrepo.com/show/11983/from-a-to-z.svg"
                            class="sideMenuIcon"
                        />Budget planner
                        </div></a
                    >
                    <a href="../achievements.html"
                        ><div class="block sideMenuItem">
                        <img
                            src="https://www.svgrepo.com/show/84275/trophy.svg"
                            class="sideMenuIcon"
                        />Achievements
                        </div></a
                    >
                    </div>
                    <div style="align-self: flex-end; margin-bottom: 40px;">
                    <a href="../profile.html"
                        ><div class="block sideMenuItem">
                        <img
                            src="https://www.svgrepo.com/show/7025/user.svg"
                            class="sideMenuIcon"
                        />Profile
                        </div></a
                    >
                    <a href="../settings.html"
                        ><div class="block sideMenuItem">
                        <img
                            src="https://www.svgrepo.com/show/198090/gear.svg"
                            class="sideMenuIcon"
                        />Settings
                        </div></a
                    >
                    <a href="../faq.html"
                        ><div class="block sideMenuItem">
                        <img
                            src="https://www.svgrepo.com/show/348371/help.svg"
                            class="sideMenuIcon"
                        />Help
                        </div></a
                    >
                    <a href="../index.html"
                        ><div class="block sideMenuItem">
                        <img
                            src="https://www.svgrepo.com/show/334066/log-out-circle.svg"
                            class="sideMenuIcon"
                        />Log out
                        </div></a
                    >
                    </div>
                </div>
            
                <img
                    id="menuClosed"
                    class="headerLogo"
                    src="https://www.svgrepo.com/show/336031/hamburger-button.svg"
                    style="position: fixed;"
                />

                <img
                    src="../Pictures/logo_header.png"
                    alt="logo_header"
                    class="finance-logo"
                />

                <a href="../profile.php" style="margin-top: 2%; margin-right: 1%;position: absolute; right: 0">
                <img
                    src="../Pictures/profile_photo.jpg"
                    alt="profile_photo"
                    class="profile-logo"
                />
                </a>
    </header>
    <main>

    <form action="index.php" method="post">
        <header2>
            <h1>Contact Us</h1>
        </header2>

        <div>
            <label for="name">Name:<br></label>
            <input type="text" value="<?= $inputs['name'] ?? '' ?>" name="name" id="name" placeholder="Full name*">
            <small><?= $errors['name'] ?? '' ?></small>
        </div>

        <div>
            <label for="email">Email:<br></label>
            <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>" placeholder="Email address*">
            <small><?= $errors['email'] ?? '' ?></small>
        </div>

        <div>
            <label for="subject">Subject:<br></label>
            <input type="subject" name="subject" id="subject" value="<?= $inputs['subject'] ?? '' ?>" placeholder="Enter a subject*">
            <small><?= $errors['subject'] ?? '' ?></small>
        </div>

        <div>
            <label for="message">Message:<br></label>
            <textarea id="message" name="message" rows="5"><?= $inputs['message'] ?? '' ?></textarea>
            <small><?= $errors['message'] ?? '' ?></small>
        </div>

        <label for="nickname" aria-hidden="true" class="user-cannot-see"> Nickname
            <input type="text" name="nickname" id="nickname" class="user-cannot-see" tabindex="-1" autocomplete="off">
        </label>

        <button type="submit">Send Message</button>
    </form>
    </main>
        <footer>
                <ul>
                    <li>
                        <a href="../index.html">Home</a>
                    </li>
                    <li>
                        <a href="../faq.html">FAQ</a>
                    </li>
                    <li>
                        <a href="../about.html">About</a>
                    </li>
                    <li>
                        <a href="index.php">Contact</a>
                    </li>
                </ul>
                <p>&copy; 2021 Finance Budget App AS</p>
            </footer>

            <script src="main.js"></script>
    </body>
</html>