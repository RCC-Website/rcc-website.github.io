<!DOCTYPE html>
<html>
<head>
		<title>Members List</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <style>
            table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
            }
            th {
            background-color: #588c7e;
            color: white;
            }
            tr:nth-child(even) {background-color: #f2f2f2
            }
        </style>
	</head>
	<body class="subpage">

			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"></a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="memberslist.php">Members</a>
						<a href="aboutus.html">About Us</a>
						<a href="joinus.html">Join Us</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

	<body class="subpage">

			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"></a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="memberslist.php">Members</a>
						<a href="aboutus.html">About Us</a>
						<a href="joinus.html">Join Us</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Our Members</h2>
					</header>
					<body>
                    <table>
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        </tr>
                            <?php
                            $servername = "localhost"; 
                            $username = "id15386584_tamuc"; 
                            $password = "Munknown11#1"; 
                            $dbname = "id15386584_projectwebsite"; 
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if (!$conn){
                                echo "ERROR: Could not connect to database. Please try again later.";
                                exit;
                            }
                            else{
                                echo " ";
                            };
                            
                            $query = "SELECT studentID, studentName FROM students";
                            $result = $conn->query($query);
                            
                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) { echo "<tr><td>" . $row["studentID"]. "</td><td>" . $row["studentName"] . "</td><td>";
                            }
                            echo "</table>";
                            } else { echo "0 results"; }
                            $conn->close();
                            ?>
                        </div>
                    </section>

                    <section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Our Supervisors</h2>
					</header>
					<body>
                    <table>
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        </tr>
                            <?php
                            $servername = "localhost"; 
                            $username = "id15386584_tamuc"; 
                            $password = "Munknown11#1"; 
                            $dbname = "id15386584_projectwebsite"; 
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if (!$conn){
                                echo "ERROR: Could not connect to database. Please try again later.";
                                exit;
                            }
                            else{
                                echo " ";
                            };
                            
                            $query = "SELECT supervisorID, supervisorName, supervisorEmail FROM supervisor";
                            $result = $conn->query($query);
                            
                            if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) { echo "<tr><td>" . $row["supervisorID"]. "</td><td>" . $row["supervisorName"] . "</td><td>" . $row["supervisorEmail"] . "</td><td>";
                            }
                            echo "</table>";
                            } else { echo "0 results"; }
                            $conn->close();
                            ?>
                        </div>
                    </section>

        </body>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</html>