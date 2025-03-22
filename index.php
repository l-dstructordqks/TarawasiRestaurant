<?php
    require 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=remove" />
    <link rel="stylesheet" href="public/build/css/app.css"/>
    <title>title</title>
</head>
<body>
    <?php includeTemplate('header', $inicio = true);?>
    
    <div class="options-bar">
    <?php // revisar https://www.udemy.com/course/desarrollo-web-completo-con-html5-css3-js-php-y-mysql/learn/lecture/24168330#overview ?>
        <div></div>
    <div class="right">
        <img class="dark-mode-button" src="src/img/dark_mode.svg">
    </div>
    </div>
    
    <div class="booking__container">
        <div class="booking__firststep">
            <div class="booking__people">
                <h2 class="field__heading">People</h2>

                <div class="">
                    <div class="diners">
                        <p><span class="diner-value">1</span> diners</p>
                    </div>
                    <div class="people__counter-container">
                        <button class="counter-button" id="decrement">
                            <span class="counter-button-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M200-440v-80h560v80H200Z"/></svg>
                            </span>
                        </button>
                        <span class="counter-value" id="counterValue">1</span>
                        <button class="counter-button" id="increment">
                            <span class="counter-button-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <!--div class="booking__service">
                <h2 class="field__heading">Time</h2>
                <div class="booking__service-buttons">
                    <a class="button-service">12:00</a>
                    <a class="button-service">15:00</a>
                </div>
            </div-->
        </div>
        <div class="booking__calendar" id="calendar">
        <?php
            include 'classes/Calendar.php';
        ?>
        </div> 

            <div class="booking__personal">
            <h2 class="field__heading">Contact Information</h2>

            <div class="booking__personal-inputs">

            <div class="booking__personal-input booking__personal-input-name">
            <input id="reservation-name" class="personal__input personal__input-name" type="text" name="name" placeholder=" " required/>    
            <label for="reservation-name" class="personal__label">Contact person</label>
                
            </div>
            
            <div class="booking__personal-input booking__personal-input-prefix">
            <input id="reservation-prefix" class="personal__input personal__input-prefix" type="number" name="prefix" placeholder=" " required />    
            <label for="reservation-prefix" class="personal__label">Prefix</label>
                
            </div>

            <div class="booking__personal-input booking__personal-input-phone">
            <input id="reservation-phone" class="personal__input personal__input-phone" type="number" name="phone" placeholder=" " required />    
            <label for="reservation-phone" class="personal__label">Phone number</label>
                
            </div>
            <div class="booking__personal-input booking__personal-input-email">
            <input id="reservation-email" class="personal__input personal__input-email" type="email" name="text" placeholder=" " required />    
            <label for="reservation-email" class="personal__label">E-mail</label>
                
            </div>
            <div class="booking__personal-input booking__personal-input-info">
            <textarea id="reservation-text" class="personal__input personal__input-info" placeholder=" " required ></textarea>    
            <label for="reservation-text" class="personal__label">Extra Information</label>
                
            </div>

            </div>
        </div>
    </div>
    <script src="public/build/js/main.min.js"></script>
</body>
</html>