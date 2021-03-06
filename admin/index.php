<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <title>註冊頁面</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="107暑期環島註冊頁面">
    <meta name="keywords" content="環島,107,暑假,暑期,islandRounding,IslandRounding">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
</head>

<body>
    <div id = "signup_page">
        <h1>
            Welcome to sign up page 
        </h1>
    </div>
    <div class="container">
        <form>
            <div class="row">
                <div class="col-25">
                    <label for="account">Account<span class = "must-fill"> *</span></label>
                </div>
                <div class="col-75">
                    <input type="text" id="account" name="account" placeholder="Your account" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="passwd">Password<span class = "must-fill"> *</span></label>
                </div>
                <div class="col-75">
                    <input type="password" id="passwd" name="passwd" placeholder="Your password" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="passwd2">Type password again<span class = "must-fill"> *</span></label>
                </div>
                <div class="col-75">
                    <input type="password" id="passwd2" name="passwd2" placeholder="Type password again" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="nickname">Nickname<span class = "must-fill"> *</span></label>
                </div>
                <div class="col-75">
                    <input type="text" id="nickname" name="nickname" placeholder="Your nickname" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email<span class = "must-fill"> *</span></label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Your email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="something">Write something</label>
                </div>
                <div class="col-75">
                    <textarea id="something" name="something" placeholder="Write something !" style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input id="signup" value="Submit" type="button">
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="./javascript/signup.js" type="text/javascript"></script>
</body>
</html>