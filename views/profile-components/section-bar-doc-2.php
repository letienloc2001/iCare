<div class="section-bar">
    <button class="section">
        <a href="./userProfile.php?profilePage=overview">Overview</a>
    </button>
    <button class="active section">
        <a href="./userProfile.php?profilePage=appointment">Appointment</a>
    </button>
    <div class="today-date-time">
        <div>
            <p class="date-title">Today's Date</p>
            <p class="today-date">
                <?php
                echo date("Y-m-d");
                ?>
            </p>
        </div>

        <img class="calendar-icon" src="./assets/img//calendar.svg" alt="">

    </div>
</div>