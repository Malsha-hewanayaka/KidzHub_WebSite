<nav>
					<ul>
						<li><a href="home.php">Hello</a></li>
						<li><a href="how_works.php">How It Works</a></li>
						<li><a href="teachers.php">Our Teachers</a></li>
						<li><a href="courses.php">Our Courses</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						
						<?php if (!isset($_SESSION['user_id'])) { ?>

							<li><a href="login.php" class="btn button" >Login</a></li>
							<li><a href="signup.php" class="btn button" >SignUp</a></li>

						<?php } else { ?>
							<li class="text-white">Logged as <a href="server/logout.php" style="color: white; text-transform: none; font-size:medium; margin:  0; display: inline-block; font-family: 'Times New Roman', Times, serif;"><?php echo $_SESSION['name']; ?></a></li>
						<?php } ?>
					</ul>
		</nav>