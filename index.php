<?php include ('core/init.php'); ?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Address Book | Welcome</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>
<body>

<div class="grid-container">
    <div class="grid-x">
        <div class="large-6 cell">
            <h1>Ajax Address Book</h1>
        </div>
        <div class="grid-container">
            <div class="large-6 cell">
                <a class="add-btn button float-right small " data-open="addModal" >Add Contact</a>
                <div id="addModal" class="reveal" data-reveal>
                    <h2>Add Contact</h2>
                    <form id="addContact" action="#" method="post">
                        <div class="grid-x grid-margin-x">
                            <div class="large-6 cell">
                                <label>First Name
                                    <input name="first_name" type="text" placeholder="Enter First Name">
                                </label>
                            </div>
                            <div class="large-6 cell">
                                <label>Last Name
                                    <input name="last_name" type="text" placeholder="Enter Last Name">
                                </label>
                            </div>
                        </div>

                        <div class="grid-x grid-margin-x">
                            <div class="large-4 cell">
                                <label>Email
                                    <input name="email" type="email" placeholder="Enter Email Address">
                                </label>
                            </div>
                            <div class="large-4 cell">
                                <label>Phone Number
                                    <input name="phone" type="text" placeholder="Enter Phone Number">
                                </label>
                            </div>
                            <div class="large-4 cell">
                                <label>Contact Group
                                    <select name="contact_group">
                                        <option value="husker">Family</option>
                                        <option value="starbuck">Friends</option>
                                        <option value="hotdog">Business</option>
                                    </select>
                                </label>
                            </div>
                        </div>

                        <div class="grid-x grid-margin-x">
                            <div class="cell large-6 ">
                                <label>Address1
                                    <input name="address1" type="text" placeholder="Enter Address 1">
                                </label>
                            </div>
                            <div class="cell large-6 ">
                                <label>Address2
                                    <input name="address2" type="text" placeholder="Enter Address 2">
                                </label>
                            </div>
                        </div>

                        <div class="grid-x grid-margin-x">
                            <div class="large-4 cell">
                                <label>City
                                    <input name="city" type="text" placeholder="Enter City">
                                </label>
                            </div>
                            <div class="large-4 cell">
                                <label>State
                                    <select name="state">
                                        <option>Select State</option>
                                        <?php foreach($states as $key => $value): ?>
                                            <option value="<?php echo $key;?>"><?php echo $value; ?></option>
                                        <?php  endforeach; ?>
                                    </select>
                                </label>
                            </div>
                            <div class="large-4 cell">
                                <label>Zipcode
                                    <input name="zipcode" type="text" placeholder="Enter Zipcode">
                                </label>
                            </div>
                        </div>

                        <div class="grid-x grid-margin-x">
                            <div class="large-12 cell">
                                <label>Notes
                                    <textarea name="notes" placeholder="Enter Optional Notes"></textarea>
                                </label>
                            </div>
                        </div>

                        <input name="submit" type="submit" class="add-btn button float-right small" value="Submit">
                        <!--                    <a class="close-reveal-modal">&#215;</a>-->
                    </form>
                    <button class="close-button" data-close aria-label="Close Accessible Modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Loading Image -->
        <div id="loaderImage">
            <img src="img/ajax-loader.gif">
        </div>

        <!-- Main Content -->
        <div id="pageContent"></div>
    </div>
</div>


<script src="js/script.js"></script>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/foundation.js"></script>
<!--<script src="js/vendor/what-input.js"></script>-->

<script>
    $(document).foundation();
</script>
</body>

</html>



