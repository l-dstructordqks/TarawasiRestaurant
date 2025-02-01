<?php
    //require '/includes/functions.php';
?>
    <?php //includeTemplate('header', $inicio = true);?>
    
    <div class="options-bar">
    <?php // revisar https://www.udemy.com/course/desarrollo-web-completo-con-html5-css3-js-php-y-mysql/learn/lecture/24168330#overview ?>
        <div></div>
    <div class="right">
        <img class="dark-mode-button" src="src/img/dark_mode.svg">
    </div>
    </div>
    
    <div class="booking-info">
        <h1 class="title text-center">Book a Table</h1>
        <p class="general-paragph text-center text-container">Select via date below for availability of all menu options
        or call our reservations team on 01628 580333.</p>
    </div>
    <div class="booking__container text-container">
        <form action="" method="POST">
        <div class="booking__firststep">
            <div class="booking__people">
                <div class="booking__service-title">
                    <p class="booking__section">People</p>
                    <hr class="small-line">
                </div>

                <div class="diner-container">
                    <div class="diners">
                        <p><span class="diner-value">1</span> diners</p>
                    </div>
                    <div class="people__counter-container">
                        <div class="counter-button" id="decrement">
                            <span class="counter-button-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M200-440v-80h560v80H200Z"/></svg>
                            </span>
                        </div>
                        <span class="counter-value" id="counterValue">1</span>
                        <div class="counter-button" id="increment">
                            <span class="counter-button-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" name="customers" value="<?php// por si ya habiamos escrito antes y recargamos la pagina echo $evento->dia_id;?>">

            <div class="booking__service">
                <div class="booking__service-title">
                    <p class="booking__section">Time</p>
                    <hr class="small-line">
                </div>
                
                <div class="booking__service-buttons">
                    <a class="button-service">12:00</a>
                    <a class="button-service">15:00</a>
                </div>
            </div>

            <input type="hidden" name="hours" value="<?php// por si ya habiamos escrito antes y recargamos la pagina echo $evento->dia_id;?>">

        </div>
        <div class="booking__calendar" id="calendar">
        <?php
            include_once __DIR__ . '/../../classes/Calendar.php';
        ?>
        </div> 

            <div class="booking__personal">
            <div class="booking__service-title">
                <p class="booking__section">Contact Information</p>
                <hr class="smaller-line">
            </div>

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
        </form>
    </div>
    <div class="container-booking">
                <a class="button-book" href="/next-step">Book</a>
        </div>
    