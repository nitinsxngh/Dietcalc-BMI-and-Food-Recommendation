<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Diet Calculator</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <audio id="vibrationSound" src="assets/wrong.mp3"></audio>
    <audio id="chooseSound" src="assets/choose.mp3"></audio>
    <input id="hiddenEmail" type="hidden" name="" value="">
    <div id="outer-con-1" class="outer-con-1" style="">
        <!-- -------------1------------ -->
        <div id="con-1" class="con-1" style=""></div>
        <!-- --------------2------------ -->
        <div id="con-2" class="con-2" style="">
            <div style="height: 100%; width: 100%; display: block; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <div style="height: 120px; width: 100%; background-color: ; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <span id="con-2-data"></span>
                </div>
                <div style="height: 60px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
                    <img src="assets/dietcalc-400+1200.png" style="height: 60px;">
                </div>
                <div style="height: 100px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
                    <input id="email" class="email" type="text" name="email" placeholder="Email"
                        style="text-align: center; font-size: 18px;">
                </div>
                <div style="height: 120px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
                    <button id="next-2" class="next-1">Next</button>
                </div>
            </div>
        </div>
        <!-- --------------3------------ -->
        <div id="con-3" class="con-3" style="">
            <div style="height: 100%; width: 100%; display: block; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <div style="height: 180px; width: 100%; display: flex; justify-content: center; align-items: center; text-align: center; background-color: ; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <span id="con-3-data"></span>
                    <h2 style="color: #656565;">Choose gender</h2>
                </div>
                <div style="height: 140px; width: 60%; margin: auto; background-color: ; display: flex; justify-content: center; align-items: center;">
                    <div style="height: 140px; width: 50%; float: left; background-color: ; display: flex; justify-content: center; align-items: center;">
                        <img id="male" class="gender" gender-extract="male" src="assets/avatar-1.png"
                            style="cursor: pointer;">
                    </div>
                    <div style="height: 140px; width: 50%; float: right; background-color: ; display: flex; justify-content: center; align-items: center;">
                        <img id="female" class="gender" gender-extract="female" src="assets/avatar-2.png"
                            style="cursor: pointer;">
                    </div>
                </div>
                <div style="height: 200px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
                    <button id="next-3" class="next-3" style="">Next</button>
                </div>
            </div>
        </div>
        <!-- --------------4------------ -->
        <div id="con-4" class="con-4" style="">
            <div class="container">
                <div class="header">
                    <span id="con-4-data">Your Data</span>
                </div>
                <div class="form-container">
                    <input id="height" class="height" type="number" name="" placeholder="Height (5.8)">
                    <br>
                    <input id="weight" class="weight" type="number" name="" placeholder="Weight (65)">
                    <br>
                    <input id="age" class="age" type="number" name="" placeholder="Age (20)">
                    <br>
                    <button id="next-4" class="next-4">Next</button>
                </div>
            </div>
        </div>
        <!-- --------------5------------ -->
        <div id="con-5" class="con-5" style="">
            <div class="con-5-1" style="height: 100%; width: 100%; display: block; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <div class="con-5-1-1" style="height: 120px; width: 100%; background-color: ; border-top-left-radius: 10px; border-top-right-radius: 10px;"></div>
                <div class="con-5-1-2" style="">
                    <div style="height: 240px; width: 50%; float: left; background-color: ;">
                        <div style="height: 120px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
                            <div class="food-category" id="vegetarian" extract-food-category="vegetarian"
                                style="cursor: pointer;">
                                <p class="food-category-name">Vegetarian</p>
                            </div>
                        </div>
                        <div style="height: 120px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
                            <div class="food-category" id="non-vegetarian" extract-food-category="non-vegetarian"
                                style="cursor: pointer;">
                                <p class="food-category-name">Non Vegetarian</p>
                            </div>
                        </div>
                    </div>
                    <div style="height: 240px; width: 50%; float: right; background-color: ;">
                        <div style="height: 120px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
                            <div class="food-category" id="eggetarian" extract-food-category="eggetarian"
                                style="cursor: pointer;">
                                <p class="food-category-name">Eggetarian</p>
                            </div>
                        </div>
                        <div style="height: 120px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
                            <div class="food-category" id="vegan" extract-food-category="vegan" style="cursor: pointer;">
                                <p class="food-category-name">Vegan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="height: 120px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
                    <button id="next-5" class="next-5"
                        style="height: 40px; width: 240px; display: none; padding: 10px; border-radius: 20px; cursor: pointer;">Done</button>
                </div>
            </div>
        </div>
        <!-- --------------6------------ -->
        <div id="con-6" class="con-6" style="">
            <div style="height: 100%; width: 100%; display: block; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <div style="height: 120px; width: 100%; background-color: ; border-top-left-radius: 10px; border-top-right-radius: 10px;"></div>
                <div style="height: 240px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
                    <span id="finalResult"></span>
                </div>
                <div style="height: 120px; width: 100%; background-color: ; display: flex; justify-content: center; align-items: center;">
                    <p class="loading">Wait :) We are finding a perfect meal for you</p>
                </div>
            </div>
        </div>
    </div>

    <div id="outer-con-2" class="outer-con-2" style="width:  100%; margin: auto;">
        <div id="dataResult" class="dataResult"></div>
    </div>

    <div id="dataReceipe" class="dataReceipe" style="">
        <button id="createReceipe"
            style="padding: 10px 15px; cursor: pointer; margin: 30px; border: 1px solid grey; border-radius: 20px;">Find
            Receipes</button>
    </div>

    <div class="overlay" id="overlay"></div>
    <div id="popup" class="popup">
        <div class="popup-content">
            <!-- Add content for your full-page popup here -->
            <h2>Result</h2>
            <p>Here are the meal you can prefer to have with this much of ingridients</p>
            <button class="closePopup" id="closePopup">Close</button>
        </div>
    </div>

</body>

</html>

<script src="script.js"></script>
