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
        <form class="booking__form" method="POST" action="/reservation">
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

                <input 
                type="hidden" 
                id="diners"
                name="diners" 
                value="<?php echo s($reservation->diners);?>">

                <!--div class="booking__service">
                    <div class="booking__service-title">
                        <p class="booking__section">Time</p>
                        <hr class="small-line">
                    </div>
                    
                    <div class="booking__service-buttons">
                        <a class="button-service">12:00</a>
                        <a class="button-service">15:00</a>
                    </div>
                </div>

                <input type="hidden" name="hours" value="<?php// echo $reservation->date;?>">
                -->
            </div>

            <div class="booking__calendar" id="calendar">
            <?php
                include_once __DIR__ . '/../../classes/Calendar.php';
            ?>
            
            
            <input 
            type="hidden" 
            id="date"
            name="date" 
            value="">
        
            </div> 

                <div class="booking__personal">
                <div class="booking__service-title">
                    <p class="booking__section">Contact Information</p>
                    <hr class="smaller-line">
                </div>

                <div class="booking__personal-inputs">

                <div class="booking__personal-input booking__personal-input-name">
                <input 
                type="text"
                id="name" 
                name="name"
                class="personal__input personal__input-name" 
                placeholder=""
                value="<?php echo s($customer->name); ?>"
                />    
                <label for="name" class="personal__label">Contact person</label>
                    
                </div>
                
                <div class="booking__personal-input booking__personal-input-prefix">
                <input
                type="number"
                id="prefix"
                name="prefix"
                class="personal__input personal__input-prefix" 
                placeholder=" " 
                />    
                <label for="prefix" class="personal__label">Prefix</label>
                    
                </div>

                <div class="booking__personal-input booking__personal-input-phone">
                <input
                type="number" 
                id="phone"
                name="phone"
                class="personal__input personal__input-phone" 
                placeholder=" " 
                value="<?php echo s($customer->phone); ?>"
                />    
                <label for="phone" class="personal__label">Phone number</label>
                </div>

                <div class="booking__personal-input booking__personal-input-email">
                <input
                type="email" 
                id="email" 
                name="email" 
                class="personal__input personal__input-email" 
                placeholder=" "
                value="<?php echo s($customer->email); ?>"
                />    
                <label for="email" class="personal__label">E-mail</label>
                    
                </div>
                <div class="booking__personal-input booking__personal-input-info">
                <textarea 
                id="extrainfo"
                name="extrainfo"
                class="personal__input personal__input-info" 
                placeholder=" " 
                ><?php echo s($customer->extrainfo); ?></textarea>    
                <label for="extrainfo" class="personal__label">Extra Information</label>
                    
                </div>
                </div>
            </div>

            <div class="container-booking">
                <input type="submit" class="button-book" value="Book">
                <!--a class="button-book" href="/next-step">Book</a-->
            </div>
        </form>
    </div>
   
    