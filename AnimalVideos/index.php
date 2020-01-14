<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->

<style>
	placeholder
	{
  		color: white;
  	}
  	h2
  	{
  		font-weight: bolder;	
  		color:rgb(100,200,250);
  	}
</style>
  
</head>
<body style="background-image: url('15.jpg'); background-size: cover">
	<div class="well" style="background-image: url('12.jpg'); background-size: cover;padding-top: 0px" >
		<div class="row"  style="padding-top: 0px">
			<div>
			<table style="width: 120%;padding-top: 0px">
				<tr>
					<td><img src="logo1.jpg" style="width:200px;height:100px"></td>
					<td><h1 style="font-family:">Welcome to Animal Planet</h1></td>
				</tr>
			</table>
		</div>
			<!--<div style="font-size: 25pt;color: white"><img src="logo1.jpg" style="width:150px;height:100px">Welcome to Animal Planet</div>-->
		
			<div style="float:right;">
			<form class="form-inline" method="post" action="LoginCheck.php">
				<div class="form-group" >
					<label for="uid">User ID</label>
					<input type="text" id="uid" name="uid" class="form-control" placeholder="User ID" required />
				</div>
				<div class="form-group">
					<label for="pwd">Password</label>
					<input type="Password" id="pwd" name="pwd" placeholder="Password" class="form-control" required />
				</div>
					<input type="submit" name="sb" value="User Login" class="btn btn-warning form-control"/>
					<input type="submit" name="sb1" value="Admin Login" class="btn btn-danger form-control"  />
					<!-- Trigger the modal with a button -->
 					<button type="button" class="btn btn-success form-control" data-toggle="modal" data-target="#myModal">REGISTER</button>
 					<h6 style="padding-left: 50%;padding-top: 0px;padding-bottom: 0px"><a href="#" data-toggle="modal" data-target="#forgotpassword"><u>Forgot Password</u></a></h6>
			</form>
			</div>
			
		</div>
	</div>
	<div class="container-fluid" >
  		
		<div id="mycarousel" style="width: 100%;" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
				<li data-target="#mycarousel" data-slide-to="1"></li>
				<li data-target="#mycarousel" data-slide-to="2"></li>
				<li data-target="#mycarousel" data-slide-to="3"></li>
				<li data-target="#mycarousel" data-slide-to="4"></li>
				<li data-target="#mycarousel" data-slide-to="5"></li>
				<li data-target="#mycarousel" data-slide-to="6"></li>
				<li data-target="#mycarousel" data-slide-to="7"></li>
			</ol>
			<div class="carousel-inner" style="height: 400px">
				<div class="item active">
					<img src="1.jpg" style="width:100%;height: 400px" />
				</div>
				<div class="item">	
					<img src="2.jpg" style="width:100%;height: 400px" />
				</div>
				<div class="item">	
					<img src="3.jpg" style="width:100%;height: 400px" />
				</div>
				<div class="item">
					<img src="4.jpg" style="width:100%;height: 400px" />
				</div>
				<div class="item">	
					<img src="5.jpg" style="width:100%;height: 400px" />
				</div>
				<div class="item">	
					<img src="6.jpg" style="width:100%;height: 400px" />
				</div>
				<div class="item">	
					<img src="7.jpg" style="width:100%;height: 400px" />
				</div>
				<div class="item">	
					<img src="8.jpg" style="width:100%;height: 400px" /> 
				</div>
			</div>
				<a class="left carousel-control" href="#mycarousel" data-slide="prev">
      				<span class="glyphicon glyphicon-chevron-left"></span>
      				<span class="sr-only">Previous</span>
    			</a>
    			<a class="right carousel-control" href="#mycarousel" data-slide="next">
      				<span class="glyphicon glyphicon-chevron-right"></span>
      				<span class="sr-only">Next</span>
    			</a>
		</div>
	</div>
	<hr>

	<center><div style="padding-left: 5%;padding-right: 5%"><h1 class="bg-success" style="width:300px;color:rgb(0,0,250);"><u>INTRODUCTION</u></h1><br><p style="line-height: 2; font-size: 15pt">Animals are multicellular eukaryotic organisms that form the biological kingdom Animalia. With few exceptions, animals consume organic material, breathe oxygen, are able to move, can reproduce sexually, and grow from a hollow sphere of cells, the blastula, during embryonic development. Over 1.5 million living animal species have been described—of which around 1 million are insects—but it has been estimated there are over 7 million animal species in total. Animals range in length from 8.5 millionths of a metre to 33.6 metres (110 ft) and have complex interactions with each other and their environments, forming intricate food webs. The category includes humans, but in colloquial use the term animal often refers only to non-human animals. The study of non-human animals is known as zoology.</p>
	<p style="font-size: 15pt;line-height: 2">Most living animal species are in the Bilateria, a clade whose members have a bilaterally symmetric body plan. The Bilateria include the protostomes—in which many groups of invertebrates are found, such as nematodes, arthropods, and molluscs—and the deuterostomes, containing the echinoderms and chordates (including the vertebrates). Life forms interpreted as early animals were present in the Ediacaran biota of the late Precambrian. Many modern animal phyla became clearly established in the fossil record as marine species during the Cambrian explosion which began around 542 million years ago. 6,331 groups of genes common to all living animals have been identified; these may have arisen from a single common ancestor that lived 650 million years ago.</p></div></center>	

<hr>

<div class="container-fluid" >
  		<h2 style="text-align:center;text-decoration:underline;color:rgb(0,0,250)">ANIMAL CATEGORIES</h2>
  		<div class="media container-fluid" >
  <div class="media-left">
    <img src="amphibians.gif" class="media-object img-thumbnail" style="width:260px;height:280px">
    </div>
    <div class="media-body">
      <h2>Amphibians</h2>
      <p style="font-size:18px;line-height: 1.7">Amphibians are ectothermic, tetrapod vertebrates of the class Amphibia. Modern amphibians are all Lissamphibia. They inhabit a wide variety of habitats, with most species living within terrestrial, fossorial, arboreal or freshwater aquatic ecosystems. Thus amphibians typically start out as larvae living in water, but some species have developed behavioural adaptations to bypass this. The young generally undergo metamorphosis from larva with gills to an adult air-breathing form with lungs. Amphibians use their skin as a secondary respiratory surface and some small terrestrial salamanders and frogs lack lungs and rely entirely on their skin. They are superficially similar to lizards but, along with mammals and birds, reptiles are amniotes and do not require water bodies in which to breed. With their complex reproductive needs and permeable skins, amphibians are often ecological indicators; in recent decades there has been a dramatic decline in amphibian populations for many species around the globe.</p>      
    </div>
  
</div>
	
			<div class="media container-fluid" >
  <div class="media-left">
    <img src="arthropods/arthropods.jfif" class="media-object img-thumbnail" style="width:260px;height:280px">
    </div>
    <div class="media-body">
      <h2>Arthropods</h2>
      <p style="font-size:18px;line-height: 1.7">An arthropod (/ˈɑːrθrəpɒd/, from Greek ἄρθρον arthron, "joint" and πούς pous, "foot" (gen. ποδός)) is an invertebrate animal having an exoskeleton (external skeleton), a segmented body, and paired jointed appendages. Arthropods form the phylum Euarthropoda,[1][3] which includes insects, arachnids, myriapods, and crustaceans. The term Arthropoda as originally proposed refers to a proposed grouping of Euarthropods and the phylum Onychophora. Arthropods are characterized by their jointed limbs and cuticle made of chitin, often mineralised with calcium carbonate. The arthropod body plan consists of segments, each with a pair of appendages. The rigid cuticle inhibits growth, so arthropods replace it periodically by moulting. Arthropods are bilaterally symmetrical and their body possesses an external skeleton. Some species have wings.Their versatility has enabled them to become the most species-rich members of all ecological guilds in most environments. </p>      
    </div>
  
</div>

<div class="media container-fluid" >
  <div class="media-left">
    <img src="birds/birds.png" class="media-object img-thumbnail" style="width:260px;height:280px">
    </div>
    <div class="media-body">
      <h2>Birds</h2>
      <p style="font-size:18px;line-height: 1.7">Birds, also known as Aves or avian dinosaurs, are a group of endothermic vertebrates, characterised by feathers, toothless beaked jaws, the laying of hard-shelled eggs, a high metabolic rate, a four-chambered heart, and a strong yet lightweight skeleton. Birds live worldwide and range in size from the 5 cm (2 in) bee hummingbird to the 2.75 m (9 ft) ostrich. They rank as the world's most numerically-successful class of tetrapods, with approximately ten thousand living species, more than half of these being passerines, sometimes known as perching birds. Birds have wings which are more or less developed depending on the species; the only known groups without wings are the extinct moa and elephant birds. Wings, which evolved from forelimbs, gave birds the ability to fly, although further evolution has led to the loss of flight in flightless birds, including ratites, penguins, and diverse endemic island species of birds. The digestive and respiratory systems of birds are also uniquely adapted for flight.  </p>      
    </div>
  
</div>
	

	<div class="media container-fluid" >
  <div class="media-left">
    <img src="fish/fish.jpg" class="media-object img-thumbnail" style="width:260px;height:280px">
    </div>
    <div class="media-body">
      <h2>Fishes</h2>
      <p style="font-size:18px;line-height: 1.7">Fish are gill-bearing aquatic craniate animals that lack limbs with digits. They form a sister group to the tunicates, together forming the olfactores. Included in this definition are the living hagfish, lampreys, and cartilaginous and bony fish as well as various extinct related groups. Tetrapods emerged within lobe-finned fishes, so cladistically they are fish as well. However, traditionally fish are rendered paraphyletic by excluding the tetrapods (i.e., the amphibians, reptiles, birds and mammals which all descended from within the same ancestry). Because in this manner the term "fish" is defined negatively as a paraphyletic group, it is not considered a formal taxonomic grouping in systematic biology, unless it is used in the cladistic sense, including tetrapods. The traditional term pisces (also ichthyes) is considered a typological, but not a phylogenetic classification.The earliest organisms that can be classified as fish were soft-bodied chordates that first appeared during the Cambrian period. </p>      
    </div>
  
</div>
		

	<div class="media container-fluid" >
  <div class="media-left">
    <img src="mammals/mammals.jpg" class="media-object img-thumbnail" style="width:260px;height:280px">
    </div>
    <div class="media-body">
      <h2>Mammals</h2>
      <p style="font-size:18px;line-height: 1.7">Mammals (from Latin mamma "breast") are vertebrate animals constituting the class Mammalia (/məˈmeɪliə/), and characterized by the presence of mammary glands which in females produce milk for feeding (nursing) their young, a neocortex (a region of the brain), fur or hair, and three middle ear bones. These characteristics distinguish them from reptiles and birds, from which they diverged in the late Triassic, 201–227 million years ago. There are around 5,450 species of mammals. The largest orders are the rodents, bats and Soricomorpha (shrews and others). The next three are the Primates (apes, monkeys, and others), the Cetartiodactyla (cetaceans and even-toed ungulates), and the Carnivora (cats, dogs, seals, and others).In cladistics, which reflect evolution, mammals—along with dinosaurs, and by extension, birds—are classified as endothermic amniotes. This trait evolved separately in both cases and is an example of convergent evolution. </p>      
    </div>
  
</div>	
		

	<div class="media container-fluid" >
  <div class="media-left">
    <img src="reptiles/reptile.jpg" class="media-object img-thumbnail" style="width:260px;height:280px">
    </div>
    <div class="media-body">
      <h2>Reptiles</h2>
      <p style="font-size:18px;line-height: 1.7">Reptiles are tetrapod animals in the class Reptilia, comprising today's turtles, crocodilians, snakes, amphisbaenians, lizards, tuatara, and their extinct relatives. The study of these traditional reptile orders, historically combined with that of modern amphibians, is called herpetology.Because some reptiles are more closely related to birds than they are to other reptiles (e.g., crocodiles are more closely related to birds than they are to lizards), the traditional groups of "reptiles" listed above do not together constitute a monophyletic grouping or clade (consisting of all descendants of a common ancestor). For this reason, many modern scientists prefer to consider the birds part of Reptilia as well, thereby making Reptilia a monophyletic class, including all living Diapsids. </p>      
    </div>
  
</div>	



	     <!------------   MODAL START    ------------->

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      	<div class="modal-content" style="background-image: url('14.jpg'); background-size: cover; color:
      	green;font-weight: bold;font-size: 14pt; ">
      		<div class="modal-header">
      			<button type="button" class="close" data-dismiss="modal" style="color: red">&times;</button>
      			<h3 class="modal-title" style="color:black;background-color:yellow;text-align:center;">REGISTER HERE</h3>
      		</div>
      		<div class="modal-body">
      			<form method="POST" enctype="Multipart/form-data" action="UserSave.php">
					<div class="form-group">
								<label for="uid">User ID</label>
								<input type="text" id="uid" name="uid" class="form-control" placeholder="User ID" style="background-color: inherit;" />
					</div>
					<div class="form-group">
								<label for="uid">User Name</label>
								<input type="text" id="username" name="username" class="form-control" placeholder="User Name" style="background-color: inherit;" />
					</div>
					<div class="form-group">
								<label for="pwd">Password</label>
								<input type="Password" id="pwd" name="pwd" placeholder="Password" class="form-control" style="background-color: inherit;" />
					</div>
					<div class="form-group">
								<label for="cpwd">Confirm Password</label>
								<input type="text" id="cpwd" name="cpwd" class="form-control" placeholder="Confirm Password" style="background-color: inherit;" />
					</div>
					<div class="form-group">
								<label for="eid">EmailId</label>
								<input type="text" id="eid" name="eid" placeholder="EmailId" class="form-control" style="background-color: inherit;" />
					</div>
					<div class="form-group">
								<label for="gn">Gender</label>
								<select id="gn" name="gn" class="form-control" style="background-color: inherit;">
									<option>Male</option>
									<option>Female</option>
								</select>
					</div>
					<div class="form-group">
								<label for="pic">Profile Pic</label>
								<input type="file" id="pic" name="pic" class="form-control" style="background-color: inherit;" />
					</div>
					<div class="form-group">
								<label for="eid">Security Question</label>
								<input type="text" id="sque" name="sque" placeholder="Security Question" class="form-control" style="background-color: inherit;" />
					</div>
					<div class="form-group">
								<label for="eid">Security Answere</label>
								<input type="text" id="sans" name="sans" placeholder="Security Answere" class="form-control" style="background-color: inherit;" />
					</div>
							<button type="submit" class="form-control" name="sb" style="background-color:yellow;color:black">Submit</button>  
			</form>

        				<div class="modal-footer">
          				<button type="button" class="btn btn-success" data-dismiss="modal" style="background-color:yellow;color:black">Close</button>
						</div>
     			 </div>
      
   			 </div>
 

</div>
</div>
<div class="modal fade" id="forgotpassword" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      	<div class="modal-content" style="background-image: url('14.jpg'); background-size: cover; color:
      	green;font-weight: bold;font-size: 14pt; ">
      		<div class="modal-header">
      			<button type="button" class="close" data-dismiss="modal" style="color: red">&times;</button>
      			<h3 class="modal-title" style="color:black;background-color:yellow;text-align:center;">FORGOT PASSWORD</h3>
      		</div>
      		<div class="modal-body">
      			<form method="POST" enctype="Multipart/form-data" action="ForgotPassword.php">
					<div class="form-group">
								<label for="uid">User ID</label>
								<input type="text" id="uid" name="uid" class="form-control" placeholder="User ID" style="background-color: inherit;" />
					</div>
					<div class="form-group">
								<label for="eid">EmailId</label>
								<input type="text" id="eid" name="eid" placeholder="EmailId" class="form-control" style="background-color: inherit;" />
					</div>
					<div class="form-group">
								<label for="eid">Security Question</label>
								<input type="text" id="sque" name="sque" placeholder="Security Question" class="form-control" style="background-color: inherit;" />
					</div>
					<div class="form-group">
								<label for="eid">Security Answer</label>
								<input type="text" id="sans" name="sans" placeholder="Security Answere" class="form-control" style="background-color: inherit;" />
					</div>
							<button type="submit" class="form-control" name="sb2" style="background-color:yellow;color:black">Submit</button>  
			</form>

        				<div class="modal-footer">
          				<button type="button" class="btn btn-success" data-dismiss="modal" style="background-color:yellow;color:black">Close</button>
						</div>
     			 </div>
      
   			 </div>
 

</div>
</div>

</body>
</html>