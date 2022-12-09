<?php
$PageTitle="Home";
include('../templates/header.php');

error_reporting(E_ALL); ini_set('display_errors', 1);

?>
  <main>
    <div class="container-fluid">
        <br><h1>Sandbox Page</h1>
        <p>On this page, I will test new projects and hone my basic coding knowledge.</p>
        <hr>
    </div>

<!-- Upcoming New Sandbox Project Will Go Below -->

<?php

// Setting Initial Variables so we can define them on each event page, then dynamically insert them into the sql connections. Not sure if this is best way to do this or not.
$gameid = 117451;
$player1_Id = 666618;
$player2_Id = 578652;
$wpClient = "USA Boxing";



//Game Data Variables
$eventId = 11111;
$eventTitle = "The Best Fight Ever!";
$eventDescription = "This fight is for warriors. Man, they are really going to fuck each other up.";
$eventCategory = "No Fatties Allowed";
$eventStart = "12.10.22";
$eventEnd = "12.12.2022";

//Player 1 Variables
$player1_name = "Joe Condon";
$player1_Id = "06071988";
$player1_gender = "Male";
$player1_wins = 20;
$player1_losses = 0;
$player1_experience = $player1_wins + $player1_losses . " Games";

$player1_org = "Unaffiliated";
$player1_birth = "Not Provided";

$player1_age = "Not Provided";

  //Player 2 Variables
        $player2_name = "Keek Condon";
        $player2_Id = "04072013";
        $player2_gender = "Male";
        $player2_wins = 80;
        $player2_losses = 0;
        $player2_experience = $player2_wins + $player2_losses . " Games";

//Player 2 Conditional Variables
    //Player 2 Organization Name
        if (isset($row5['OtherOrgName'])) {
            $player2_org = $row5['OtherOrgName'];
        } else {
            $player2_org = "Unaffiliated";
        }

    //Player 2 Date of Birth
    if (isset($row5['BirthDate'])) {
        $player2_birth = $row5['BirthDate']->format('m/d/Y');
    } else {
        $player2_birth = "Not Provided";
    }

    //Player 2 Age
        if (isset($row5['Age'])) {
            $player2_age = $row5['Age'];
        } else {
            $player2_age = "Not Provided";
        }

?>




<!-- -------- START DISPLAYING COLLAPSIBLE TEST ECHOS --------- -->
<center>
    <br>
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
    Event Information Echos
  </a>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
    Player 1 Echos
  </a>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
    Player 2 Echos
  </a>
</p>
<div class="collapse" id="collapse1">
  <div class="card card-body">
  <?php
//Game Data Display

echo "<strong><u>Event Information</strong></u><br>";
echo "Game ID: $gameid <br>";
echo "Event ID: $eventId <br>";
echo "Event Title: $eventTitle <br>";
echo "Event Start Date: $eventStart <br>";
echo "Event End Date: $eventEnd <br>";
echo "Category: $eventCategory <br>";
echo "Event Description: $eventDescription<br><br>";

?>
  </div>
  </div>

  <div class="collapse" id="collapse2">
  <div class="card card-body">
  <?php
            //Player 1 (TEST) Data Displays

            echo "<u><strong>Player One Data</u></strong><br>";

            echo "Player 1 Name: $player1_name <br>";
            echo "Player 1 ID: $player1_Id <br>";
            echo "Player 1 Experience: $player1_experience <br>";
            echo "Player 1 Gender: $player1_gender <br>";
            echo "Player 1 DOB: $player1_birth <br>";
            echo "Player 1 Age: $player1_age <br>";
            echo "Player 1 Wins: $player1_wins <br>";
            echo "Player 1 Losses: $player1_losses <br>";
            echo "Player 1 Org: $player1_org <br>";
?>
  </div>
  </div>

  <div class="collapse" id="collapse3">
  <div class="card card-body">
  <?php
            //Player 2 (TEST) Data Displays

            echo "<strong><u>Player Two Data</u></strong><br>";

            echo "Player 2 Name: $player2_name <br>";
            echo "Player 2 ID: $player2_Id <br>";
            echo "Player 2 Experience: $player2_experience <br>";
            echo "Player 2 Gender: $player2_gender <br>";
            echo "Player 2 DOB: $player2_birth <br>";
            echo "Player 2 Age: $player2_age <br>";
            echo "Player 2 Wins: $player2_wins <br>";
            echo "Player 2 Losses: $player2_losses <br>";
            echo "Player 2 Org: $player2_org <br>";
?>
  </div>
  </div>

</div>
</div>
    </center><br>
<!-- -------- END OF TEST ECHOS --------- -->

<hr><br>

<center>
<strong>Multiple Card View. <br>
        The card will center if only one is present. Will shrink on smaller screens.<br></strong>
<br><br></center>

<!-- Start of Card Grid -->
<div class="row row-cols-1 row-cols-lg-2 g-4 mx-2 px-0 justify-content-center">

<!-- Start of First Card -->
<div class="col">
    <div class="shadow p-0 mb-5 bg-white rounded">
                <div class="card text-center">

                <div id="event-header" class="card-header event"><strong><?php echo $eventTitle; ?></strong></div>
                    <div class="card-body">
                    <?php echo "Event ID: $eventId"; ?>
                    <p class="card-description">
                    <?php echo "Dates: $eventStart - $eventEnd<br>
                    $eventCategory<br>
                    $eventDescription"; ?>
                    <hr>
                    </p>
    <div class="table-responsive">
                <table class="table table-striped table-sm">
                <h5 class="card-title">Event Roster</h5><br>
                <thead class="table-dark">
                <tr>

        <!-- Example Code -->

        <svg class="bd-placeholder-img rounded float-start" width="70" height="70" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 70x70" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
          <rect width="100%" height="100%" fill="#868e96"></rect></svg>

        <svg class="bd-placeholder-img rounded float-end" width="70" height="70" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 70x270" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
          <rect width="100%" height="100%" fill="#868e96"></rect></svg>


      <!-- End Example Code -->
                    <th scope="col-sm-6"> <img id="player-thumbnail" src="/media/keek.JPG" class="img-fluid"</img></th>
                    <th scope="col" id="event-table-head" class="text-white" data-bs-toggle="modal" data-bs-target="#PlayerInfoModal"><a href="#PlayerInfoModal"><?php echo $player1_name;?></a></th>
                    <td scope="col" id="event-table-head" class="text-white">vs.</i></th>
                    <th scope="col" id="event-table-head" class="text-white"><?php echo $player2_name; ?></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                    <td scope="col"><?php echo $player1_gender; ?></td>
                    <th scope="col">Gender</th>
                    <td scope="col"><?php echo $player2_gender; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_birth; ?></td>
                    <th scope="col">Birthday</th>
                    <td scope="col"><?php echo $player2_birth; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_age; ?></td>
                    <th scope="col">Age</th>
                    <td scope="col"><?php echo $player2_age; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_experience; ?></td>
                    <th scope="col">Experience</th>
                    <td scope="col"><?php echo $player2_experience; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_wins; ?></td>
                    <th scope="col">Wins</th>
                    <td scope="col"><?php echo $player2_wins; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_losses; ?></td>
                    <th scope="col">Losses</th>
                    <td scope="col"><?php echo $player2_losses; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_org; ?></td>
                    <th scope="col">Organization</th>
                    <td scope="col"><?php echo $player2_org; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_Id; ?></td>
                    <th scope="col"><?php echo "$wpClient #";?></th>
                    <td scope="col"><?php echo $player2_Id; ?></td>
                    </tr>
                </tbody>
                </table>
                </div>

                </div>
                </div>
            </div>
        </div>



<!-- Start of Second Card -->

<div class="col">
    <div class="shadow p-0 mb-5 bg-white rounded">
                <div class="card text-center">

                <div id="event-header" class="card-header event"><strong><?php echo $eventTitle; ?></strong></div>
                    <div class="card-body">
                    <?php echo "Event ID: $eventId"; ?>
                    <p class="card-description">
                    <?php echo "Dates: $eventStart - $eventEnd<br>
                    $eventCategory<br>
                    $eventDescription"; ?>
                    <hr>
                    </p>
    <div class="table-responsive">
                <table class="table table-striped table-sm">
                <h5 class="card-title">Event Roster</h5><br>
                <thead class="table-dark">
                <tr>
                    <th scope="col" id="event-table-head" class="text-white" data-bs-toggle="modal" data-bs-target="#PlayerInfoModal"><a href="#PlayerInfoModal"><?php echo $player1_name;?></a></th>
                    <td scope="col" id="event-table-head" class="text-white">vs.</i></th>
                    <th scope="col" id="event-table-head" class="text-white"><?php echo $player2_name; ?></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                    <td scope="col"><?php echo $player1_gender; ?></td>
                    <th scope="col">Gender</th>
                    <td scope="col"><?php echo $player2_gender; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_birth; ?></td>
                    <th scope="col">Birthday</th>
                    <td scope="col"><?php echo $player2_birth; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_age; ?></td>
                    <th scope="col">Age</th>
                    <td scope="col"><?php echo $player2_age; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_experience; ?></td>
                    <th scope="col">Experience</th>
                    <td scope="col"><?php echo $player2_experience; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_wins; ?></td>
                    <th scope="col">Wins</th>
                    <td scope="col"><?php echo $player2_wins; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_losses; ?></td>
                    <th scope="col">Losses</th>
                    <td scope="col"><?php echo $player2_losses; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_org; ?></td>
                    <th scope="col">Organization</th>
                    <td scope="col"><?php echo $player2_org; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_Id; ?></td>
                    <th scope="col"><?php echo "$wpClient #";?></th>
                    <td scope="col"><?php echo $player2_Id; ?></td>
                    </tr>
                </tbody>
                </table>
                </div>

                </div>
                </div>
            </div>
        </div>


<!-- Start of Third Card -->

<div class="col">
    <div class="shadow p-0 mb-5 bg-white rounded">
                <div class="card text-center">

                <div id="event-header" class="card-header event"><strong><?php echo $eventTitle; ?></strong></div>
                    <div class="card-body">
                    <?php echo "Event ID: $eventId"; ?>
                    <p class="card-description">
                    <?php echo "Dates: $eventStart - $eventEnd<br>
                    $eventCategory<br>
                    $eventDescription"; ?>
                    <hr>
                    </p>
    <div class="table-responsive">
                <table class="table table-striped table-sm">
                <h5 class="card-title">Event Roster</h5><br>
                <thead class="table-dark">
                <tr>
                    <th scope="col" id="event-table-head" class="text-white" data-bs-toggle="modal" data-bs-target="#PlayerInfoModal"><a href="#PlayerInfoModal"><?php echo $player1_name;?></a></th>
                    <td scope="col" id="event-table-head" class="text-white">vs.</i></th>
                    <th scope="col" id="event-table-head" class="text-white"><?php echo $player2_name; ?></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                    <td scope="col"><?php echo $player1_gender; ?></td>
                    <th scope="col">Gender</th>
                    <td scope="col"><?php echo $player2_gender; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_birth; ?></td>
                    <th scope="col">Birthday</th>
                    <td scope="col"><?php echo $player2_birth; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_age; ?></td>
                    <th scope="col">Age</th>
                    <td scope="col"><?php echo $player2_age; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_experience; ?></td>
                    <th scope="col">Experience</th>
                    <td scope="col"><?php echo $player2_experience; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_wins; ?></td>
                    <th scope="col">Wins</th>
                    <td scope="col"><?php echo $player2_wins; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_losses; ?></td>
                    <th scope="col">Losses</th>
                    <td scope="col"><?php echo $player2_losses; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_org; ?></td>
                    <th scope="col">Organization</th>
                    <td scope="col"><?php echo $player2_org; ?></td>
                    </tr>

                    <tr>
                    <td scope="col"><?php echo $player1_Id; ?></td>
                    <th scope="col"><?php echo "$wpClient #";?></th>
                    <td scope="col"><?php echo $player2_Id; ?></td>
                    </tr>
                </tbody>
                </table>
                </div>

                </div>
                </div>
            </div>
        </div>


<!-- End Of All Cards -->

<!-- Final Div to Close Out Grid -->
    </div>
<!-- END OF CARD GRID -->

<div class="modal fade" id="PlayerInfoModal" tabindex="-1" aria-labelledby="PlayerInfoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="PlayerInfoLabel">Additional Player Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>I need to figure out how to dynamically insert player data into this modal</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- END OF Modal -->


<br><br>
    </body>
    <footer>

    </footer>
    </html>


</main>
  <footer>
<!--  Any necessary scripts go below here --------------------------->

    <?php
      include('../templates/footer.php');
    ?>
  </footer>
</body>
</html>
