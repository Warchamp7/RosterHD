<html>

<head>
	<title>Warchamp7 - Post Your Roster HD</title>
	
	<script type="text/javascript" src="jquery.js"></script>
	
	
	<script type="text/javascript" src="jquery.visible.min.js"></script>
	<script type="text/javascript" src="jqueryui/jquery-ui.min.js"></script>
	
	<link href="main.css" rel="stylesheet">
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-54938105-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>


<body>

<?php
		
		$sizes = array("Wide", "Thin", "Small", "Slim", "Mini");
		$colors = array("Red", "Blue", "Yellow", "Green", "Orange", "Teal", "Pink", "Grey", "Purple");
		$chars = array( "bayonetta", "captain", "cloud", "kamui", "dedede", "diddy", "donkey", "drmario", "duckhunt", "falco", "fox", "gamewatch", "ganon", "gekkouga", "ike", "kirby", "koopa", "koopajr", "link", "littlemac", "lizardon", "lucario", "lucas", "lucina", "luigi", "mario", "marth", "metaknight", "mewtwo", "miifighter", "miigunner", "miiswords", "murabito", "ness", "pacman", "palutena", "peach", "pikachu", "pikmin", "pit", "pitb", "purin", "reflet", "robot", "rockman", "rosetta", "roy", "ryu", "samus", "sheik", "shulk", "sonic", "szerosuit", "toonlink", "wario", "wiifit", "yoshi", "zelda", "omakase");
		
		
		$info = array();
		
		$i = 1;
		foreach($chars as $char) {
			$info[$i]['raw'] = $char;
			$info[$i]['id'] = sprintf("%02d", $i);
			$i++;
		}
		
		$info[1]['name'] =  "Bayonetta";
		$info[2]['name'] =  "Captain Falcon";
		$info[3]['name'] =  "Cloud";
		$info[4]['name'] =	"Corrin";
		$info[5]['name'] =  "Dedede";
		$info[6]['name'] =  "Diddy Kong";
		$info[7]['name'] =  "Donkey Kong";
		$info[8]['name'] =  "Dr. Mario";
		$info[9]['name'] =  "Duck Hunt";
		$info[10]['name'] =  "Falco";
		$info[11]['name'] =  "Fox";
		$info[12]['name'] =  "Mr. Game & Watch";
		$info[13]['name'] =  "Ganondorf";
		$info[14]['name'] =  "Greninja";
		$info[15]['name'] =  "Ike";
		$info[16]['name'] =  "Kirby";
		$info[17]['name'] =  "Bowser";
		$info[18]['name'] =  "Bowser Jr.";
		$info[19]['name'] =  "Link";
		$info[20]['name'] =  "Little Mac";
		$info[21]['name'] =  "Lizardon";
		$info[22]['name'] =  "Lucario";
		$info[23]['name'] =  "Lucas";
		$info[24]['name'] =  "Lucina";
		$info[25]['name'] =  "Luigi";
		$info[26]['name'] =  "Mario";
		$info[27]['name'] =  "Marth";
		$info[28]['name'] =  "Metaknight";
		$info[29]['name'] =  "Mewtwo";
		$info[30]['name'] =  "Mii Brawler";
		$info[31]['name'] =  "Mii Gunner";
		$info[32]['name'] =  "Mii Swordfighter";
		$info[33]['name'] =  "Villager";
		$info[34]['name'] =  "Ness";
		$info[35]['name'] =  "Pac-Man";
		$info[36]['name'] =  "Palutena";
		$info[37]['name'] =  "Peach";
		$info[38]['name'] =  "Pikachu";
		$info[39]['name'] =  "Pikmin & Olimar";
		$info[40]['name'] =  "Pit";
		$info[41]['name'] =  "Dark Pit";
		$info[42]['name'] =  "Jigglypuff";
		$info[43]['name'] =  "Robin";
		$info[44]['name'] =  "R.O.B.";
		$info[45]['name'] =  "Mega Man";
		$info[46]['name'] =  "Rosalina & Luma";
		$info[47]['name'] =  "Roy";
		$info[48]['name'] =  "Ryu";
		$info[49]['name'] =  "Samus";
		$info[50]['name'] =  "Sheik";
		$info[51]['name'] =  "Shulk";
		$info[52]['name'] =  "Sonic";
		$info[53]['name'] =  "Zero Suit Samus";
		$info[54]['name'] =  "Toon Link";
		$info[55]['name'] =  "Wario";
		$info[56]['name'] =  "Wii Fit Trainer";
		$info[57]['name'] =  "Yoshi";
		$info[58]['name'] =  "Zelda";
		$info[59]['name'] =  "Random";
		
		// Debug
		echo "<!--";
			
		echo "-->";
		
		function nameSort($a, $b) {
			if ($a['name'] == $b['name']) {
				return 0;
			}
			
			return ($a['name'] < $b['name']) ? -1 : 1;
		}
?>

<div id="Edit">
	<div id="Blackout"></div>
	<div class="edit_modal">
		
		<div class="left_col">

			<div id="PreviewBox">
				<div id="Preview" class="slot wide red">
					<div class="char koopa color01"></div>
				</div>
			</div>
			
			<label for="box_size" class="selectLabel leftSel">Size</label>
			<label for="box_color" class="selectLabel">Background</label>
			
			
			<select name="box_size" id="box_size" class="selectBox leftSel">
				<?php
					foreach($sizes as $size) {
						echo "<option class='editSize' value='".strtolower($size)."'>".$size."</option>";
					}
				?>
			</select>
			
			<select name="box_color" id="box_color" class="selectBox">
				<?php
					foreach($colors as $color) {
						echo "<option class='editColor' value='".strtolower($color)."'>".$color."</option>";
					}
				?>
			</select>
			
			<input id="changeSizes" type="button" class="changeButton leftSel" value="Change All Slot Sizes" />
			
			<input id="changeColors" type="button" class="changeButton" value="Change All Slot Colors" />
			
		</div>
		
		<div id="IconList" class="clearfix">
			<?php
				usort($info, "nameSort");
				array_multisort($chars, $info);
				
				foreach($info as $char) {
					if($char['raw'] != "omakase") {
						echo "<input type='radio' name='charSel' class='editChar' id='sel_".$char['raw']."' value='".$char['raw']."'></input>";
						echo "<label class='icon ".$char['raw']."' for='sel_".$char['raw']."' value='".$char['name']."'></label>";
					}
				}
				
				echo "<input type='radio' name='charSel' class='editChar' id='sel_omakase' value='omakase'></input>";
				echo "<label class='icon omakase' for='sel_omakase' value='Random'></label>";
			?>
		</div>
		
		<div id="CostumeList">
		
		</div>
		
		<div id="EditButtons">
			<input id="editSave" class="slot_button" type="button" value="Save Changes" />
			<input id="editDiscard" class="slot_button" type="button" value="Discard Changes" />
		</div>
		
		
		
	</div>
	
	<div id="CloseButton">X</div>
</div>

	<div id="Wrapper">

		<div id="Header">
			<img src="logo.png" alt="#PostYourRosterHD" />
		</div>
		
		<div id="Slot_Controls">
			<input type="button" value="Add Slot" class="slot_button" onclick="addSlot()" />
			<input type="button" value="Delete Slot" class="slot_button" onclick="removeSlot()" />
		</div>
	
		<div id="Container">
			
		</div>

		<div class="push"></div>
		
	</div>


	<div id="Footer">
	
		Done creating your roster? Take a screenshot and upload it to Twitter or an image host like Imgur to share with the world!
		<br /><br />
		
		Follow me on Twitter <a href="http://twitter.com/Warchamp7" target="_blank">@Warchamp7</a>!
		<br />
		<br />
			
	</div>

<script type="text/javascript">

	// Initialize
	var slots = 0;
	var startSlots = 4;
	var slotData = new Array();
	var preview = new Array();
	
	// Sorting Stuff
	var sorting = false;
	var oldSlotData = new Array();
	var placeholderClass = "placeholder_wide";
	
	var editSlot = 1;
	
	var minSlots = 1;
	var maxSlots = 60;
	
	var i = 1;
	while(i <= maxSlots) {
		slotData[i] = new Array();
		i++;
	}
	
	preview['size'] = "wide";
	preview['color'] = "red";
	preview['character'] = "omakase";
	preview['costume'] = "01";
	
	/* Start up */
	$( document ).ready(function() {
		initialize();
		
		// Bind Edit Functions
			// Update Preview Character
			$('.editChar').change(function() {
				
				//alert($(this).attr("value"));
				
				updatePreview(preview['size'], preview['color'], $(this).attr("value"), "01");
				updateCostumes();
				
				if(!$('#CostumeList').visible(true)) {
					
					$('html, body').animate({
						scrollTop: $("#CostumeList").offset().top - 80
					}, 300);
					
				}
			});
			
			// Update Preview Size
			$('#box_size').change(function() {
				
				//alert($(this).find(":selected").attr('value'));
				updatePreview($(this).find(":selected").attr('value'), preview['color'], preview['character'], preview['costume']);
			});
			
			// Update Preview Color
			$('#box_color').change(function() {
				
				//alert($(this).find(":selected").attr('value'));
				updatePreview(preview['size'], $(this).find(":selected").attr('value'), preview['character'], preview['costume']);
			});
			
			// Change All Sizes
			$('#changeSizes').click(function(event) {
				changeAllSizes();
			});
			
			// Change All Colors
			$('#changeColors').click(function(event) {
				changeAllColors();
			});
		
		// Bind Save Function
		$('#editSave').click(function(event) {
			saveSlot();
		});
		
		// Bind Close Functions
		$('#Blackout').click(function(event) {
			event.stopPropagation();
			if($(event.target).attr('id') == "Blackout") {
				$('#Edit').fadeOut(250);
			}
		});
		$('#CloseButton').click(function(event) {
			event.stopPropagation();
			$('#Edit').fadeOut(250);
		});
		$('#editDiscard').click(function(event) {
			event.stopPropagation();
			$('#Edit').fadeOut(250);
		});
		
	});
	
	/* Dynamic Content */
	function refreshListeners() {
		$( ".slot" ).off("click", selectSlot());
		$( ".slot" ).on("click", function(event) {
			event.stopPropagation();
			if( sorting == false ) {
				selectSlot($(this));
			}
		});
		
		
		$( "#Container" ).sortable({
			placeholder: 'sort-highlight',
			handle: '.sorting-handle',
			cursor: 'move',
			revert: 40,
			scroll: false,
			start: function(event, ui) {
				sorting = true;				
				placeholderClass = "placeholder_" + ui.item[0]['classList'][1];
				
				$('#Container').addClass(placeholderClass);
				
				// Store old slot data
				$.extend( true, oldSlotData, slotData );
			},
			update: function(event, ui) {
				
				// Update all the IDs
				$.each($('#Container .slot'), function(i, v) {
					var oldSlotID = this.id;
					oldSlotID = oldSlotID.substr(5);
					
					i += 1;
					
					if ( oldSlotID != i ) {
					
						slotData[i]['size'] = oldSlotData[oldSlotID]['size'];
						slotData[i]['color'] = oldSlotData[oldSlotID]['color'];
						slotData[i]['character'] = oldSlotData[oldSlotID]['character'];
						slotData[i]['costume'] = oldSlotData[oldSlotID]['costume'];
						
					}
					
					this.id = "slot_" + i;
				});
			},
			stop: function(event, ui) {
				sorting = false;
				$('#Container').removeClass(placeholderClass);
			}
		});
		$('#Container').sortable('refresh');
		
		
		$( ".editCost" ).off("click", selectSlot());
		$( ".editCost" ).on("click", function(event) {
			event.stopPropagation();
			//alert($(this).attr("value"));
			updatePreview(preview['size'], preview['color'], preview['character'], $(this).attr("value"));
		});
	}
	
	
	/* Functions */
	
	function initialize() {
		while(slots < startSlots) {
			addSlot('wide', 'red', 'omakase', '01');
		}
		
		//console.log("Initialized with " + startSlots + " slots.");
		//console.log(slotData[slots]['size'] + slotData[slots]['color'] + slotData[slots]['character'] + slotData[slots]['costume']);
	}
	
	function addSlot(size, color, character, costume) {
		if(slots < maxSlots) {
			slots += 1;
			
			size = typeof size !== 'undefined' ? size : 'wide';
			color = typeof color !== 'undefined' ? color : 'red';
			character = typeof character !== 'undefined' ? character : 'omakase';
			costume = typeof costume !== 'undefined' ? costume : '01';
			
			slotData[slots]['size'] = size;
			slotData[slots]['color'] = color;
			slotData[slots]['character'] = character;
			slotData[slots]['costume'] = costume;
			
			var newSlot = "<div id='slot_" + slots + "' class='slot " + slotData[slots]['size'] + " " + slotData[slots]['color'] + "'><div class='sorting-handle'></div><div class='char " + slotData[slots]['character'] + " color" + slotData[slots]['costume'] + "'></div></div>";
			$('#Container').append(newSlot);
			
			//console.log("Added slot #" + slots);
			
			refreshListeners();
		} else {
			//console.log("Already at maximum slots.");
		}
	}
	
	function removeSlot() {
		if(slots > minSlots) {
			$('#slot_'+slots).remove();
			slots -= 1;
			//console.log("Removed slot " +  (slots + 1) +". Down to " + slots + " slots.");
			
			refreshListeners();
		} else {
			//console.log("Already at minimum slots.");
		}
	}
	
	function selectSlot(clickedSlot) {
		if($( clickedSlot ).attr('id') && $( clickedSlot ).attr('id') != "Preview") {
			var clickedID = $( clickedSlot ).attr('id');
			clickedID = clickedID.split("_");
			clickedID = clickedID[1];
			//console.log("Clicked slot " + clickedID);
			$(".slot").removeClass('active');
			$(clickedSlot).addClass('active');
			
			editSlot = clickedID;
			
			//console.log(slotData[editSlot]['size'] + slotData[editSlot]['color'] + slotData[editSlot]['character'] + slotData[editSlot]['costume']);
			
			updatePreview(slotData[editSlot]['size'], slotData[editSlot]['color'], slotData[editSlot]['character'], slotData[editSlot]['costume']);
			
			$("#box_color").val(slotData[editSlot]['color']);
			$("#box_size").val(slotData[editSlot]['size']);
			$("#sel_"+slotData[editSlot]['character']).prop('checked', true);
			
			updateCostumes();
			
			$("#Edit").fadeIn(250);
		}
	}
	
	function updatePreview(size, color, character, costume) {
		
		size = typeof size !== 'undefined' ? size : 'wide';
		color = typeof color !== 'undefined' ? color : 'red';
		character = typeof character !== 'undefined' ? character : 'omakase';
		costume = typeof costume !== 'undefined' ? costume : '01';

		oldCharacter = character;
		
		preview['size'] = size;
		preview['color'] = color;
		preview['character'] = character;
		preview['costume'] = costume;
		
		$('#Preview').removeClass().addClass("slot").addClass(preview['size']).addClass(preview['color']);
		
		$('#Preview').find('.char').removeClass().addClass('char').addClass(preview['character']).addClass("color"+preview['costume']);
	}
	
	function updateSlot(size, color, character, costume) {
		
		size = typeof size !== 'undefined' ? size : slotData[editSlot]['size'];
		color = typeof color !== 'undefined' ? color : slotData[editSlot]['color'];
		character = typeof character !== 'undefined' ? character : slotData[editSlot]['character'];
		costume = typeof costume !== 'undefined' ? costume : slotData[editSlot]['costume'];
		
		slotData[editSlot]['size'] = size;
		slotData[editSlot]['color'] = color;
		slotData[editSlot]['character'] = character;
		slotData[editSlot]['costume'] = costume;
		
		// Update slot data
		$('#slot_'+editSlot).removeClass().addClass("slot").addClass(slotData[editSlot]['size']).addClass(slotData[editSlot]['color']);
		
		// Update char data
		$('#slot_'+editSlot).find('.char').removeClass().addClass('char').addClass(slotData[editSlot]['character']).addClass("color"+slotData[editSlot]['costume']);
	}
	
	function updateCostumes() {
	
		$('#CostumeList').html("");
	
		var i = 1;
		var total = 8;
		if(preview['character'] == "littlemac") {
			total = 16;
		} else if(preview['character'] == "miifighter" || preview['character'] == "miigunner" || preview['character'] == "miiswords" || preview['character'] == "omakase") {
			total = 1;
		}
		
		while(i <= total) {
			
			costID = i;
			costID = ("0" + String(costID)).slice(-2);
			
			/*
				<input type="radio" name="costSel" class="editCost" id="sel_01" value="01">
				<label class="costume " + preview['character'] + " color"+costID+"" for="sel_koopa" value="Bowser"></label>
			
			*/
			$('#CostumeList').append('<input type="radio" name="costSel" class="editCost" id="sel_'+costID+'" value="'+costID+'">');
			$('#CostumeList').append('<label class="costume ' + preview['character'] + ' color'+costID+'" for="sel_'+costID+'" value="'+costID+'"></label>');
			i += 1;
		}
		
		refreshListeners();
	
	}
	
	function saveSlot(size, color, character, costume) {
		size = typeof size !== 'undefined' ? slotData[editSlot]['size'] : preview['size'];
		color = typeof color !== 'undefined' ? slotData[editSlot]['color'] : preview['color'];
		character = typeof character !== 'undefined' ? slotData[editSlot]['character'] : preview['character'];
		costume = typeof costume !== 'undefined' ? slotData[editSlot]['costume'] : preview['costume'];
		
		updateSlot(size, color, character, costume);
		$('#Edit').fadeOut(250);
		
	}
	
	function changeAllSizes() {
		var preserveEditSlot = editSlot;
		var i = 1;
		while(i <= maxSlots) {
			slotData[i]['size'] = preview['size'];
			editSlot = i;
			updateSlot();
			i++;
		}
		editSlot = preserveEditSlot;
	}
	
	function changeAllColors() {
		var preserveEditSlot = editSlot;
		var i = 1;
		while(i <= maxSlots) {
			slotData[i]['color'] = preview['color'];
			editSlot = i;
			updateSlot();
			i++;
		}
		editSlot = preserveEditSlot;
	}
	
	/* Preload */
	function preload(arrayOfImages) {
		$(arrayOfImages).each(function(){
			$('<img/>')[0].src = this;
		});
	}
	
	preload([
		<?php 
			foreach($chars as $char) {
				if($char=="miiswords") {
					echo "'chars/chr_11_miiswordsman_01.png',";
				} else {
					echo "'chars/chr_11_".$char."_01.png',";
				}
			}
			foreach($chars as $char) {
				if($char=="miigunner" || $char="miiswords") {
					
				} else {
					echo "'icons/".$char.".png',";
				}
			}
		?>
	]);
	
	

</script>

</body>
</html>