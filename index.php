<?php 
$presentTime = new DateTime;

/*echo $presentTime->format('M d Y A H:i');*/

$destinationTime = new DateTime('Oct 30 2010 10:30');

/*echo $destinationTime->format('M d Y A H:i');*/

$timeUntilDestination = $destinationTime->diff($presentTime);

/*echo $timeUntilDestination->format('%M months %d days %Y years %h hours %i minutes');*/

$difference = $presentTime->diff($destinationTime);
$numberOfDays = $difference->days;
$numberOfHours =$difference->h;
$numberOMinutes = $difference->i;
$timeUntilDestinationInMinutes= ($numberOfDays * 24 * 60) + ($numberOfHours * 60) + ($numberOMinutes);
/*echo $timeUntilDestinationInMinutes;*/

$amountOfGasolineRequired = round($timeUntilDestinationInMinutes / 1000);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1> Retour vers le futur </h1>

    <div class ="block">
        <div class="destination">
            <div>
                <h2>Month</h2>
                <p><?= $destinationTime->format('M') ?></p>
            </div>

            <div>
                <h2>Day</h2>
                <p><?= $destinationTime->format('d') ?></p>
            </div>

            <div>
                <h2>Year</h2>
                <p><?= $destinationTime->format('Y') ?></p>
            </div>

            <div class="check">
                <input type="checkbox" id="scales" name="scales"
                        <?php if ($destinationTime->format('A') == 'PM'): echo 'checked'; endif ?>>
                <label for="scales">PM</label>

                <input type="checkbox" id="scales" name="scales"
                        <?php if ($destinationTime->format('A') == 'AM'): echo 'checked'; endif ?>>
                <label for="scales" >AM</label>
            </div>

            <div>
                <h2>Hour</h2>
                <p><?= $destinationTime->format('H') ?></p>
            </div>
            <div>
                <h2>Min</h2>
                <p><?= $destinationTime->format('i') ?></p>
            </div>
           
        </div>
        <p class="destination-time">Destination time</p>
    </div>

    <div class ="block">
        <div class="destination">
            <div>
                <h2>Month</h2>
                <p><?= $presentTime->format('M') ?></p>
            </div>

            <div>
                <h2>Day</h2>
                <p><?= $presentTime->format('d') ?></p>
            </div>

            <div>
                <h2>Year</h2>
                <p><?= $presentTime->format('Y') ?></p>
            </div>

            <div class="check">
                <input type="checkbox" id="scales" name="scales"
                        <?php if ($presentTime->format('A') == 'PM'): echo 'checked'; endif ?>>
                <label for="scales">PM</label>

                <input type="checkbox" id="scales" name="scales"
                        <?php if ($presentTime->format('A') == 'AM'): echo 'checked'; endif ?>>
                <label for="scales" >AM</label>
            </div>

            <div>
                <h2>Hour</h2>
                <p><?= $presentTime->format('H') ?></p>
            </div>
            <div>
                <h2>Min</h2>
                <p><?= $presentTime->format('i') ?></p>
            </div>
           
        </div>
        <p class="destination-time">Present time</p>
    </div>

    <div class ="block">
        <div class="destination">
            <div>
                <h2>Months</h2>
                <p><?= $timeUntilDestination->format('%M') ?></p>
            </div>

            <div>
                <h2>Days</h2>
                <p><?= $timeUntilDestination->format('%d') ?></p>
            </div>

            <div>
                <h2>Years</h2>
                <p><?= $timeUntilDestination->format('%Y') ?></p>
            </div>

            <div>
                <h2>Hour</h2>
                <p><?= $timeUntilDestination->format('%h') ?></p>
            </div>
            <div>
                <h2>Min</h2>
                <p><?= $timeUntilDestination->format('%i') ?></p>
            </div>
           
        </div>
        <p class="destination-time">Travel time</p>
    </div>

    <div class ="block">
        <div class="destination">
            <div>
                <h2>Also in minutes</h2>
                <p><?= $timeUntilDestinationInMinutes ?></p>
            </div>

            <div>
                <h2>Liters of Gas needed</h2>
                <p><?= $amountOfGasolineRequired ?></p>
            </div>           
        </div>
        <p class="destination-time">Details</p>
    </div>
    
</body>
</html>