

<?php require('header.php'); ?>

<main class="container">

<div class = "row">
	<!-- nav bar here -->


	<div id="header1" class=" col-md-12">
		<h1 class="well aligntleft">ArmandoToledo.com</h1>	
		<!-- social media here -->
		<div class="alignright">
			<a href="https://www.hackerrank.com/mandy1339"> <img class="toledo-icon" src="./images/hackerrank.png" alt="hackerrank"></a>
			<a href="https://github.com/mandy1339"> <img class="toledo-icon" src="./images/github3.png" alt="github"></a>
			<a href="https://leetcode.com/mandy1339/"> <img class="toledo-icon" src="./images/leetcode.png" alt="leetcode"></a>
			<a href= "https://www.linkedin.com/in/armando-toledo-8885a593/"> <img class="toledo-icon" src="./images/linkedin.png" alt="linkedin"></a>
		</div>
	</div>
</div>

<br>
<br>

<div class="row" >
	<div class="BlackPanel col-md-12" >
		<h4>Web Applications</h4>
		<br>
		<table class="darkTable table-hover">
			<thead>
				<tr>
				<th scope="col">Name</th>
				<th scope="col">Link</th>
				<th scope="col">Description</th>
				</tr>
			</thead>
			<tbody>

				<tr >
					<td><b>CryptoAlerts</b></td>
					<td><a href="http://www.cryptoalert.armandotoledo.com/"><strong>click here</strong></a></td>
					<td><button type="button" data-toggle="modal" data-target="#modalCrypto" class="btn btn-info">Info</button></td>
				</tr>

				<tr >
					<td><b>Portfolio</b></td>
					<td><a href="http://www.armandotoledo.com/"><strong>click here</strong></a></td>
					<td><button type="button" data-toggle="modal" data-target="#modalPortfolio" class="btn btn-info">Info</button></td>
				</tr>

				<tr >
					<td><b>Blog</b></td>
					<td><a href="http://blog.armandotoledo.com/"><strong>click here</strong></a></td>
					<td><button type="button" data-toggle="modal" data-target="#modalBlog" class="btn btn-info">Info</button></td>
				</tr>

				<tr >
					<td><b>Armadoro</b></td>
					<td><a href="http://www.armadoro.com/"><strong>click here</strong></a></td>
					<td><button type="button" data-toggle="modal" data-target="#modalArmadoro" class="btn btn-info">Info</button></td>
				</tr>

				<tr >
					<td><b>Animal Guesser</b></td>
					<td><a href="https://animal-game.herokuapp.com/"><strong>click here</strong></a></td>
					<td><button type="button" data-toggle="modal" data-target="#modalAnimal" class="btn btn-info">Info</button></td>
				</tr>

			</tbody>
		</table> 
	</div>
</div>


<br>
<br>



<!-- MODAL CRYPPTO -->
<!-- Modal -->
<div class="modal fade" id="modalCrypto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCryptoTitle">Cryptoalerts</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		My first ever full stack web application. Currently not fully functional due to loss of the db instance. <br> 
		Technologies used:
		<ul>
		<li>Node.js</li>
		<li>MySQL</li>
		<li>Apache2</li>
		<li>Bootstrap</li>
		<li>CSS</li>
		<li>HTML</li>
		<li>Javascript</li>
		<li>Express js</li>
		<li>Passport js</li>
		</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- MODAL Portfolio -->
<!-- Modal -->
<div class="modal fade" id="modalPortfolio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalPortfolioTitle">Portfolio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		This is the page that you are currently visiting. It is my portfolio for showcasing some of my projects and displaying information about myself. At the top you can find links to my hackerrank, leetcode, github, and linkedin.
		<ul>
		<li>PHP</li>
		<li>HTML</li>
		<li>CSS</li>
		<li>AWS</li>
		<li>Apache2</li>
		<li>Bootstrap</li>
		
		</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- MODAL Blog -->


<!-- Modal -->
<div class="modal fade" id="modalBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalBlogTitle">Blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		This is my personal blog where I occasionally post about mostly Linux topics.
		<ul>
		<li>Wordpress</li>
		<li>AWS</li>
		</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- MODAL Armadoro -->
<!-- Modal -->
<div class="modal fade" id="modalArmadoro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalArmadoroTitle">Armadoro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		Collaborated with Adora Smith for this project. Armadoro is a web application to help manage projects in an agile fashion. It uses a complex database with procedures and triggers.
		<ul>
		<li>PHP</li>
		<li>Javascript</li>
		<li>HTML</li>
		<li>AWS</li>
		<li>MySQL</li>
		<li>Bootstrap</li>
		</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- MODAL Animal Guesser -->
<!-- Modal -->
<div class="modal fade" id="modalAnimal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAnimalTitle">Animal Guessing Game</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		This game is designed to guess your animal. If it fails it will learn from the user and will have learned that animal for the first round.
		It uses a binary tree database structure from firebase that keeps growing.
		<ul>
		<li>Heroku</li>
		<li>FireBase</li>
		<li>HTML</li>
		<li>CSS</li>
		</ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- <div class="row" >
	<div class="BlackPanel col-md-12" >
	</div>
</div> -->

</main>



<?php require('footer.php'); ?>

</html>

