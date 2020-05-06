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
<!--    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>-->
<!--    <script src="js/vendor/modernizr.js"></script>-->

</head>
<body>

<div class="grid-container">
    <div class="grid-x">
        <div class="large-6 cell">
            <h1>Ajax Address Book</h1>
        </div>
        <div class="grid-container">
            <div class="large-6 cell">
                <a class="add-btn button float-right small " data-open="myModal">Add Contact</a>
                <div id="myModal" class="reveal" data-reveal>
                    <h2>Add Contact</h2>
                    <form>
                        <div class="grid-x grid-margin-x">
                            <div class="large-6 cell">
                                <label>First Name
                                    <input type="text" placeholder="Enter First Name">
                                </label>
                            </div>
                            <div class="large-6 cell">
                                <label>Last Name
                                    <input type="text" placeholder="Enter Last Name">
                                </label>
                            </div>
                        </div>

                        <div class="grid-x grid-margin-x">
                            <div class="large-4 cell">
                                <label>Email
                                    <input type="email" placeholder="Enter Email Address">
                                </label>
                            </div>
                            <div class="large-4 cell">
                                <label>Phone Number
                                    <input type="text" placeholder="Enter Phone Number">
                                </label>
                            </div>
                            <div class="large-4 cell">
                                <label>Contact Group
                                    <select>
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
                                    <input type="text" placeholder="Enter Address 1">
                                </label>
                            </div>
                            <div class="cell large-6 ">
                                <label>Address2
                                    <input type="text" placeholder="Enter Address 2">
                                </label>
                            </div>
                        </div>

                        <div class="grid-x grid-margin-x">
                            <div class="large-4 cell">
                                <label>City
                                    <input type="text" placeholder="Enter City">
                                </label>
                            </div>
                            <div class="large-4 cell">
                                <label>State
                                    <select>
                                        <option value="BW">Baden-Wuerttemberg</option>
                                        <option value="BY">Bavaria</option>
                                        <option value="BE">Berlin</option>
                                        <option value="BB">BrandenBurg</option>
                                        <option value="HB">Bremen</option>
                                        <option value="HH">Hamburg</option>
                                        <option value="HE">Hesse</option>
                                        <option value="NI">Lower-Saxony</option>
                                        <option value="MV">Mecklenburg Vorpommern</option>
                                        <option value="NW">North Rhine-Westphalia</option>
                                        <option value="RP">Rhineland-Palatinate</option>
                                        <option value="SL">Saarland</option>
                                        <option value="SN">Saxony</option>
                                        <option value="ST">Saxony-Anhalt</option>
                                        <option value="SH">Schleswig-Holstein</option>
                                        <option value="TH">Thuringia</option>
                                    </select>
                                </label>
                            </div>
                            <div class="large-4 cell">
                                <label>Zipcode
                                    <input type="text" placeholder="Enter Zipcode">
                                </label>
                            </div>
                        </div>

                        <div class="grid-x grid-margin-x">
                            <div class="large-12 cell">
                                <label>Notes
                                    <textarea placeholder="Enter Optional Notes"></textarea>
                                </label>
                            </div>
                        </div>

                        <input type="submit" class="add-btn button float-right small" value="Submit">
                        <!--                    <a class="close-reveal-modal">&#215;</a>-->
                        <button class="close-button" data-close aria-label="Close modal" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Loading Image -->
        <div id="loaderImage">
            <img src="img/ajax-loader.gif">
        </div>

        <!-- Main Content -->
        <div id="pageContent"></div>


        <!-- Main Content -->
        <div id="pageContent"></div>
    </div>
</div>


<script src="js/app.js"></script>
<script src="js/script.js"></script>

<!--<script src="js/vendor/jquery.js"></script>-->
<!--<script src="js/script.js"></script>-->
<!--<script src="js/foundation.min.js"></script>-->
<!--<script>-->
<!--    $(document).foundation();-->
</script>

</body>
</html>



