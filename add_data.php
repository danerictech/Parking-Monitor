<!--  This file is part of Parking Monitor.

    Parking Monitor is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Parking Monitor is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Parking Monitor.  If not, see <http://www.gnu.org/licenses/>. -->



<?php
    // Connect to MySQL
    include("../includes/dbconnect.php");

    // Prepare the SQL statement
    $SQL = "INSERT INTO parking_monitor.garage (sensor ,distance) VALUES ('".$_GET["serial"]."', '".$_GET["distance"]."')";     

    // Execute SQL statement
    mysql_query($SQL);

    // Go to the review_data.php (optional)
    header("Location: map.html");
?>
