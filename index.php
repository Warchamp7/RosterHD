<html>

<head>
	<title>Warchamp7 - Post Your Roster HD</title>
	
	<script type="text/javascript" src="jquery.js"></script>
	
	
	<script type="text/javascript" src="jquery.visible.min.js"></script>
	<script type="text/javascript" src="jqueryui/jquery-ui.min.js"></script>
	
	<style>
	
		html, body {
			margin: 0px;
			padding: 0px;
			height: 100%;
			width: 100%;
		}

		html {
			background: #0a0a0a;
		}

		body {
			color: white;
			font-family: Helvetica, Arial, sans-serif;
		}

		a, a:visited {
			color: #ccc;
		}

		a:hover, a:focus {
			color: #fff;
		}

		h3 {
			font-size: 42px;
			font-weight: bold;
		}

		/* Clearfix */
		.clearfix:after {
			content: "";
			display: table;
			clear: both;
		}

		#Wrapper {
			background: url('bg_tile.png') repeat;
			min-height: 100%;
			margin: 0 auto -130px;
			width: 100%;
			box-sizing: border-box;
			text-align: center;
			position: relative;
			overflow: hidden;
		}
		
		#Container {
			width: 100%;
			margin: 0px auto;
			padding: 0px 4%;
			box-sizing: border-box;
		}

		#Footer, .push {
			position: relative;
			width: 100%;
			height: 130px;
			text-align: center;
			color: white;
			font-size: 14px
			font-weight: bold;
			box-sizing: border-box;
			padding: 20px 20px 0px;
			z-index: 10;
		}

		#Header {
			padding: 20px 0px;
			text-align: center;
			margin-bottom: -20px;
		}

		#Slot_Controls {
			width: 100%;
			text-align: center;
			display: block;
			font-size: 0px;
			margin-bottom: 10px;
		}

		.slot_button {
			margin: 0px 10px 8px;
			font-size: 34px;
			padding: 4px 5%;
			font-weight: bold;
			cursor: pointer;
		}

		#Edit {
			display: none;
			width: 100%;
			height: 100%;
			position: absolute;
			z-index: 9990;
			top: 0px;
			left: 0;
			right: 0;
			margin: 0 auto;
		}

		#Blackout {
			position: fixed;
			width: 100%;
			height: 100%;
			background: rgba(0,0,0, .85);
		}

		.edit_modal {
			position: absolute;
			width: 70%;
			top: 10%;
			left: 0;
			right: 0;
			margin: auto;
			display: block;
			padding: 20px;
			border-radius: 10px;
		}

		/* Styles */	
			
		.slot {
			display: inline-block;
			font-size: 0px;
			margin: 10px;
			padding: 0px;
			position: relative;
			overflow: hidden;
			background-image: url('wide_red.png');
			transition: .2s background-image linear;
			-webkit-transition: .2s background-image linear;
			-moz-transition: .2s background-image linear;
			cursor: pointer;
			background-repeat: no-repeat;
			background-size: contain;
			box-sizing: border-box;
			border-right: 1px solid #393939;
		}

			.slot.active {
				border-right: 1px solid #fff;
			}

			.slot:hover {
				border-right: 1px solid #777;
			}

			.slot:hover .char:after {
				border: 4px solid #777;
			}

			.slot.active .char:after {
				box-shadow: inset 0px 0px 8px white;
				-webkit-box-shadow: inset 0px 0px 8px white;
				-moz-box-shadow: inset 0px 0px 8px white;
				border: 4px solid white;
			}
			
			/* Slot Colours */
			.red { background-image: url('wide_red.png'); }
			.blue { background-image: url('wide_blue.png'); }
			.yellow { background-image: url('wide_yellow.png'); }
			.green { background-image: url('wide_green.png'); }
			.orange { background-image: url('wide_orange.png'); }
			.teal { background-image: url('wide_teal.png'); }
			.pink { background-image: url('wide_pink.png'); }
			.grey { background-image: url('wide_grey.png'); }
			.purple { background-image: url('wide_purple.png'); }
			

			/* Slot Sizes */
			.wide,
			.wide .char,
			.wide .char:after {
				width: 344px;
				height: 344px;
			}
			
			.wide .char { background-position: center -40px; }
			.wide .char:after { background-size: 344px 344px; }
			
			.small,
			.small .char,
			.small .char:after {
				width: 200px;
				height: 200px;
				background-size: 220px 220px;
			}
			
			.small .char { background-position: center -22px; }
			.small .char:after { background-size: 200px 200px; }
			
			.thin,
			.thin .char,
			.thin .char:after {
				width: 200px;
				height: 344px;
				background-size: 344px 344px;
			}
			
			.slim,
			.slim .char,
			.slim .char:after {
				width: 130px;
				height: 200px;
				background-size: 210px 210px;
			}
			
			.mini,
			.mini .char,
			.mini .char:after {
				width: 120px;
				height: 120px;
				background-size: 130px 130px;
			}
			
			.mini .char { background-position: center -10px; }
			.mini .char:after { background-size: 120px 120px; }
			

		.char {
			width: 344px;
			height: 344px;
			display: block;
			background-position: center bottom;
			background-repeat: no-repeat;
			pointer-events: none;
			box-sizing: border-box;
			transition: .2s background-image linear;
			-webkit-transition: .2s background-image linear;
			-moz-transition: background-image .2s linear;
		}

			.char:after {
				position: absolute;
				display: block;
				box-sizing: border-box;
				content: "";
				border: 4px solid #393939;
				box-shadow: inset 0px 0px 6px black;
				-webkit-box-shadow: inset 0px 0px 6px black;
				-moz-box-shadow: inset 0px 0px 6px black;
				transition: .2s background-image linear;
				-webkit-transition: .2s background-image linear;
				-moz-transition: .2s background-image linear;
			}

		#IconList {
			text-align: center;
			margin-left: 354px;
		}

		.icon {
			background-color: #232E40;
			border-radius: 4px;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			width: 90px;
			height: 60px;
			display: inline-block;
			box-sizing: border-box;
			background-repeat: no-repeat;
			background-size: cover;
			cursor: pointer;
			box-shadow: inset 0px 0px 0px white;
			-webkit-box-shadow: inset 0px 0px 0px white;
			-moz-box-shadow: inset 0px 0px 0px white;
			transition: box-shadow .1s linear;
			-webkit-transition: box-shadow .1s linear;
			-moz-transition: box-shadow .1s linear;
			margin: 1px;
			
		}

			.icon:hover, .costume:hover {
				border: 2px solid rgba(255, 255, 255, .2);
			}

		.editChar,
		.editCost {
			position: fixed;
			left: -9999px;
			font-size: 0px;
			display: block;
		}

			.editChar:checked + .icon,
			.editCost:checked + .costume {
				box-shadow: inset 0px 0px 30px white;
				-webkit-box-shadow: inset 0px 0px 30px white;
				-moz-box-shadow: inset 0px 0px 30px white;
				transition: box-shadow .3s linear;
				-webkit-transition: box-shadow .3s linear;
				-moz-transition: box-shadow .3s linear;
			}

		.selectBox, .selectLabel, .changeButton {
			position: relative;
			display: inline-block;
			width: 49%;
			margin: 10px 0px 0px;
			box-sizing: border-box;
			font-size: 14px;
			color: white;
		}

			.selectLabel {
				font-weight: bold;
				font-style: italic;
				font-size: 18px;
			}

			.changeButton {
				padding: 7px 0px;
				color: black;
			}

		.selectBox {
			padding: 4px 35px 4px 4px;
			background: rgba(0, 0, 0, .9) url('arrow.png?2') no-repeat center right;
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
		}

			.leftSel {
				margin-right: 2%;
			}
			
			@media screen and (min-width:0\0) { 
				.selectBox {
					background:none;
					padding: 4px;
				}
			}

		.left_col {
			height: 100%;
			float: left;
			font-size: 0px;
			width: 344px;
		}

		#CostumeList {
			margin: 20px 0px;
			text-align: center;
			font-size: 0px;
		}

			.costume {
				background-color: #232E40;
				width: 11.5%;
				margin: 0px .5% 1%;
				height: 150px;
				display: inline-block;
				background-size: 230px 230px;
				background-position: center -50px;
				background-repeat: no-repeat;
				box-sizing: border-box;
				border: 2px solid transparent;
				border-radius: 4px;
				-webkit-border-radius: 4px;
				-moz-border-radius: 4px;
				cursor: pointer;
			}

		#EditButtons {
			text-align: center;
		}

		#CloseButton,
		#CornerButton,
		#CloseScreenshot {
			position: absolute;
			top: 10px;
			right: 20px;
			font-weight: bold;
			font-size: 40px;
			height: 60px;
			width: 60px;
			background-color: rgba(255, 255, 255, .25);
			text-align: center;
			line-height: 60px;
			cursor: pointer;
			z-index: 10;
			border-radius: 60px;
			-webkit-border-radius: 60px;
			-moz-border-radius: 60px;
		}

			#CloseButton:hover,
			#CornerButton:hover,
			#CloseScreenshot:hover {
				background-color: rgba(255, 255, 255, .25);
				text-shadow: 1px 1px 2px white;
			}

		#PreviewBox {
			text-align: center;
		}

		#Preview {
			margin: 0px;
			display: inline-block;
		}

		#Screenshot {
			height: 100%;
			width: 100%;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			background: rgba(0, 0, 0, .8);
			z-index: 9999;
			display: none;
			opacity: 0;
		}

		#ScreenshotNote {
			position: fixed;
			bottom: 0px;
			right: 0px;
			color: white;
			font-size: 14px;
			text-align: right;
			padding: 4px 8px;
		}

		/* Media Queries */
		@media(max-width: 1600px) {
			#Wrapper {
				padding: 0px 2.5%;
				margin: 0 auto -140px;
			}

			#Footer, .push {
				height: 140px;
			}

			.edit_modal {
				top: 3%;
				width: 90%;
			}
			
			.icon {
				width: 75px;
				height: 50px;
				margin: 2px;
			}
		}
		
		@media(max-width: 850px) {
			#Header img {
				width: 100%;
			}
		}

		@media(max-width: 800px) {
			#Wrapper {
				padding: 0px;
				margin: 0 auto -160px;
			}

			#Footer, .push {
				height: 160px;
			}

			.slot {
				margin: 2px;
			}

			.edit_modal {
				text-align: center;
				padding-bottom: 70px;
			}
			
			#EditButtons {
				position: fixed;
				width: 100%;
				left: 0px;
				bottom: 0px;
				padding: 20px 0px;
				background: rgba(0, 0, 0, .75);
			}

			.left_col {
				height: auto;
				float: none;
				width: auto;
				display: inline-block;
			}
			
			#IconList {
				margin-left: 0px;
				margin-top: 20px;
			}
			
			.slot_button {
				font-size: 28px;
				width: 45%;
				box-sizing: border-box;
				padding: 6px 0px;
				
			}
			
			.costume {
				width: 23%;
			}
			
			#CloseButton {
				font-size: 24px;
				height: 40px;
				width: 40px;
				line-height: 40px;
			}
		}

		/* Character Images */
		.bayonetta.color01 { background-image: url('chars/chr_11_bayonetta_01.png'); }
		.bayonetta.color02 { background-image: url('chars/chr_11_bayonetta_02.png'); }
		.bayonetta.color03 { background-image: url('chars/chr_11_bayonetta_03.png'); }
		.bayonetta.color04 { background-image: url('chars/chr_11_bayonetta_04.png'); }
		.bayonetta.color05 { background-image: url('chars/chr_11_bayonetta_05.png'); }
		.bayonetta.color06 { background-image: url('chars/chr_11_bayonetta_06.png'); }
		.bayonetta.color07 { background-image: url('chars/chr_11_bayonetta_07.png'); }
		.bayonetta.color08 { background-image: url('chars/chr_11_bayonetta_08.png'); }
		.captain.color01 { background-image: url('chars/chr_11_captain_01.png'); }
		.captain.color02 { background-image: url('chars/chr_11_captain_02.png'); }
		.captain.color03 { background-image: url('chars/chr_11_captain_03.png'); }
		.captain.color04 { background-image: url('chars/chr_11_captain_04.png'); }
		.captain.color05 { background-image: url('chars/chr_11_captain_05.png'); }
		.captain.color06 { background-image: url('chars/chr_11_captain_06.png'); }
		.captain.color07 { background-image: url('chars/chr_11_captain_07.png'); }
		.captain.color08 { background-image: url('chars/chr_11_captain_08.png'); }
		.cloud.color01 { background-image: url('chars/chr_11_cloud_01.png'); }
		.cloud.color02 { background-image: url('chars/chr_11_cloud_02.png'); }
		.cloud.color03 { background-image: url('chars/chr_11_cloud_03.png'); }
		.cloud.color04 { background-image: url('chars/chr_11_cloud_04.png'); }
		.cloud.color05 { background-image: url('chars/chr_11_cloud_05.png'); }
		.cloud.color06 { background-image: url('chars/chr_11_cloud_06.png'); }
		.cloud.color07 { background-image: url('chars/chr_11_cloud_07.png'); }
		.cloud.color08 { background-image: url('chars/chr_11_cloud_08.png'); }
		.dedede.color01 { background-image: url('chars/chr_11_dedede_01.png'); }
		.dedede.color02 { background-image: url('chars/chr_11_dedede_02.png'); }
		.dedede.color03 { background-image: url('chars/chr_11_dedede_03.png'); }
		.dedede.color04 { background-image: url('chars/chr_11_dedede_04.png'); }
		.dedede.color05 { background-image: url('chars/chr_11_dedede_05.png'); }
		.dedede.color06 { background-image: url('chars/chr_11_dedede_06.png'); }
		.dedede.color07 { background-image: url('chars/chr_11_dedede_07.png'); }
		.dedede.color08 { background-image: url('chars/chr_11_dedede_08.png'); }
		.diddy.color01 { background-image: url('chars/chr_11_diddy_01.png'); }
		.diddy.color02 { background-image: url('chars/chr_11_diddy_02.png'); }
		.diddy.color03 { background-image: url('chars/chr_11_diddy_03.png'); }
		.diddy.color04 { background-image: url('chars/chr_11_diddy_04.png'); }
		.diddy.color05 { background-image: url('chars/chr_11_diddy_05.png'); }
		.diddy.color06 { background-image: url('chars/chr_11_diddy_06.png'); }
		.diddy.color07 { background-image: url('chars/chr_11_diddy_07.png'); }
		.diddy.color08 { background-image: url('chars/chr_11_diddy_08.png'); }
		.donkey.color01 { background-image: url('chars/chr_11_donkey_01.png'); }
		.donkey.color02 { background-image: url('chars/chr_11_donkey_02.png'); }
		.donkey.color03 { background-image: url('chars/chr_11_donkey_03.png'); }
		.donkey.color04 { background-image: url('chars/chr_11_donkey_04.png'); }
		.donkey.color05 { background-image: url('chars/chr_11_donkey_05.png'); }
		.donkey.color06 { background-image: url('chars/chr_11_donkey_06.png'); }
		.donkey.color07 { background-image: url('chars/chr_11_donkey_07.png'); }
		.donkey.color08 { background-image: url('chars/chr_11_donkey_08.png'); }
		.drmario.color01 { background-image: url('chars/chr_11_drmario_01.png'); }
		.drmario.color02 { background-image: url('chars/chr_11_drmario_02.png'); }
		.drmario.color03 { background-image: url('chars/chr_11_drmario_03.png'); }
		.drmario.color04 { background-image: url('chars/chr_11_drmario_04.png'); }
		.drmario.color05 { background-image: url('chars/chr_11_drmario_05.png'); }
		.drmario.color06 { background-image: url('chars/chr_11_drmario_06.png'); }
		.drmario.color07 { background-image: url('chars/chr_11_drmario_07.png'); }
		.drmario.color08 { background-image: url('chars/chr_11_drmario_08.png'); }
		.duckhunt.color01 { background-image: url('chars/chr_11_duckhunt_01.png'); }
		.duckhunt.color02 { background-image: url('chars/chr_11_duckhunt_02.png'); }
		.duckhunt.color03 { background-image: url('chars/chr_11_duckhunt_03.png'); }
		.duckhunt.color04 { background-image: url('chars/chr_11_duckhunt_04.png'); }
		.duckhunt.color05 { background-image: url('chars/chr_11_duckhunt_05.png'); }
		.duckhunt.color06 { background-image: url('chars/chr_11_duckhunt_06.png'); }
		.duckhunt.color07 { background-image: url('chars/chr_11_duckhunt_07.png'); }
		.duckhunt.color08 { background-image: url('chars/chr_11_duckhunt_08.png'); }
		.falco.color01 { background-image: url('chars/chr_11_falco_01.png'); }
		.falco.color02 { background-image: url('chars/chr_11_falco_02.png'); }
		.falco.color03 { background-image: url('chars/chr_11_falco_03.png'); }
		.falco.color04 { background-image: url('chars/chr_11_falco_04.png'); }
		.falco.color05 { background-image: url('chars/chr_11_falco_05.png'); }
		.falco.color06 { background-image: url('chars/chr_11_falco_06.png'); }
		.falco.color07 { background-image: url('chars/chr_11_falco_07.png'); }
		.falco.color08 { background-image: url('chars/chr_11_falco_08.png'); }
		.fox.color01 { background-image: url('chars/chr_11_fox_01.png'); }
		.fox.color02 { background-image: url('chars/chr_11_fox_02.png'); }
		.fox.color03 { background-image: url('chars/chr_11_fox_03.png'); }
		.fox.color04 { background-image: url('chars/chr_11_fox_04.png'); }
		.fox.color05 { background-image: url('chars/chr_11_fox_05.png'); }
		.fox.color06 { background-image: url('chars/chr_11_fox_06.png'); }
		.fox.color07 { background-image: url('chars/chr_11_fox_07.png'); }
		.fox.color08 { background-image: url('chars/chr_11_fox_08.png'); }
		.gamewatch.color01 { background-image: url('chars/chr_11_gamewatch_01.png'); }
		.gamewatch.color02 { background-image: url('chars/chr_11_gamewatch_02.png'); }
		.gamewatch.color03 { background-image: url('chars/chr_11_gamewatch_03.png'); }
		.gamewatch.color04 { background-image: url('chars/chr_11_gamewatch_04.png'); }
		.gamewatch.color05 { background-image: url('chars/chr_11_gamewatch_05.png'); }
		.gamewatch.color06 { background-image: url('chars/chr_11_gamewatch_06.png'); }
		.gamewatch.color07 { background-image: url('chars/chr_11_gamewatch_07.png'); }
		.gamewatch.color08 { background-image: url('chars/chr_11_gamewatch_08.png'); }
		.ganon.color01 { background-image: url('chars/chr_11_ganon_01.png'); }
		.ganon.color02 { background-image: url('chars/chr_11_ganon_02.png'); }
		.ganon.color03 { background-image: url('chars/chr_11_ganon_03.png'); }
		.ganon.color04 { background-image: url('chars/chr_11_ganon_04.png'); }
		.ganon.color05 { background-image: url('chars/chr_11_ganon_05.png'); }
		.ganon.color06 { background-image: url('chars/chr_11_ganon_06.png'); }
		.ganon.color07 { background-image: url('chars/chr_11_ganon_07.png'); }
		.ganon.color08 { background-image: url('chars/chr_11_ganon_08.png'); }
		.gekkouga.color01 { background-image: url('chars/chr_11_gekkouga_01.png'); }
		.gekkouga.color02 { background-image: url('chars/chr_11_gekkouga_02.png'); }
		.gekkouga.color03 { background-image: url('chars/chr_11_gekkouga_03.png'); }
		.gekkouga.color04 { background-image: url('chars/chr_11_gekkouga_04.png'); }
		.gekkouga.color05 { background-image: url('chars/chr_11_gekkouga_05.png'); }
		.gekkouga.color06 { background-image: url('chars/chr_11_gekkouga_06.png'); }
		.gekkouga.color07 { background-image: url('chars/chr_11_gekkouga_07.png'); }
		.gekkouga.color08 { background-image: url('chars/chr_11_gekkouga_08.png'); }
		.ike.color01 { background-image: url('chars/chr_11_ike_01.png'); }
		.ike.color02 { background-image: url('chars/chr_11_ike_02.png'); }
		.ike.color03 { background-image: url('chars/chr_11_ike_03.png'); }
		.ike.color04 { background-image: url('chars/chr_11_ike_04.png'); }
		.ike.color05 { background-image: url('chars/chr_11_ike_05.png'); }
		.ike.color06 { background-image: url('chars/chr_11_ike_06.png'); }
		.ike.color07 { background-image: url('chars/chr_11_ike_07.png'); }
		.ike.color08 { background-image: url('chars/chr_11_ike_08.png'); }
		.kamui.color01 { background-image: url('chars/chr_11_kamui_01.png'); }
		.kamui.color02 { background-image: url('chars/chr_11_kamui_02.png'); }
		.kamui.color03 { background-image: url('chars/chr_11_kamui_03.png'); }
		.kamui.color04 { background-image: url('chars/chr_11_kamui_04.png'); }
		.kamui.color05 { background-image: url('chars/chr_11_kamui_05.png'); }
		.kamui.color06 { background-image: url('chars/chr_11_kamui_06.png'); }
		.kamui.color07 { background-image: url('chars/chr_11_kamui_07.png'); }
		.kamui.color08 { background-image: url('chars/chr_11_kamui_08.png'); }
		.kirby.color01 { background-image: url('chars/chr_11_kirby_01.png'); }
		.kirby.color02 { background-image: url('chars/chr_11_kirby_02.png'); }
		.kirby.color03 { background-image: url('chars/chr_11_kirby_03.png'); }
		.kirby.color04 { background-image: url('chars/chr_11_kirby_04.png'); }
		.kirby.color05 { background-image: url('chars/chr_11_kirby_05.png'); }
		.kirby.color06 { background-image: url('chars/chr_11_kirby_06.png'); }
		.kirby.color07 { background-image: url('chars/chr_11_kirby_07.png'); }
		.kirby.color08 { background-image: url('chars/chr_11_kirby_08.png'); }
		.koopa.color01 { background-image: url('chars/chr_11_koopa_01.png'); }
		.koopa.color02 { background-image: url('chars/chr_11_koopa_02.png'); }
		.koopa.color03 { background-image: url('chars/chr_11_koopa_03.png'); }
		.koopa.color04 { background-image: url('chars/chr_11_koopa_04.png'); }
		.koopa.color05 { background-image: url('chars/chr_11_koopa_05.png'); }
		.koopa.color06 { background-image: url('chars/chr_11_koopa_06.png'); }
		.koopa.color07 { background-image: url('chars/chr_11_koopa_07.png'); }
		.koopa.color08 { background-image: url('chars/chr_11_koopa_08.png'); }
		.koopajr.color01 { background-image: url('chars/chr_11_koopajr_01.png'); }
		.koopajr.color02 { background-image: url('chars/chr_11_koopajr_02.png'); }
		.koopajr.color03 { background-image: url('chars/chr_11_koopajr_03.png'); }
		.koopajr.color04 { background-image: url('chars/chr_11_koopajr_04.png'); }
		.koopajr.color05 { background-image: url('chars/chr_11_koopajr_05.png'); }
		.koopajr.color06 { background-image: url('chars/chr_11_koopajr_06.png'); }
		.koopajr.color07 { background-image: url('chars/chr_11_koopajr_07.png'); }
		.koopajr.color08 { background-image: url('chars/chr_11_koopajr_08.png'); }
		.link.color01 { background-image: url('chars/chr_11_link_01.png'); }
		.link.color02 { background-image: url('chars/chr_11_link_02.png'); }
		.link.color03 { background-image: url('chars/chr_11_link_03.png'); }
		.link.color04 { background-image: url('chars/chr_11_link_04.png'); }
		.link.color05 { background-image: url('chars/chr_11_link_05.png'); }
		.link.color06 { background-image: url('chars/chr_11_link_06.png'); }
		.link.color07 { background-image: url('chars/chr_11_link_07.png'); }
		.link.color08 { background-image: url('chars/chr_11_link_08.png'); }
		.littlemac.color01 { background-image: url('chars/chr_11_littlemac_01.png'); }
		.littlemac.color02 { background-image: url('chars/chr_11_littlemac_02.png'); }
		.littlemac.color03 { background-image: url('chars/chr_11_littlemac_03.png'); }
		.littlemac.color04 { background-image: url('chars/chr_11_littlemac_04.png'); }
		.littlemac.color05 { background-image: url('chars/chr_11_littlemac_05.png'); }
		.littlemac.color06 { background-image: url('chars/chr_11_littlemac_06.png'); }
		.littlemac.color07 { background-image: url('chars/chr_11_littlemac_07.png'); }
		.littlemac.color08 { background-image: url('chars/chr_11_littlemac_08.png'); }
		.littlemac.color09 { background-image: url('chars/chr_11_littlemac_09.png'); }
		.littlemac.color10 { background-image: url('chars/chr_11_littlemac_10.png'); }
		.littlemac.color11 { background-image: url('chars/chr_11_littlemac_11.png'); }
		.littlemac.color12 { background-image: url('chars/chr_11_littlemac_12.png'); }
		.littlemac.color13 { background-image: url('chars/chr_11_littlemac_13.png'); }
		.littlemac.color14 { background-image: url('chars/chr_11_littlemac_14.png'); }
		.littlemac.color15 { background-image: url('chars/chr_11_littlemac_15.png'); }
		.littlemac.color16 { background-image: url('chars/chr_11_littlemac_16.png'); }
		.lizardon.color01 { background-image: url('chars/chr_11_lizardon_01.png'); }
		.lizardon.color02 { background-image: url('chars/chr_11_lizardon_02.png'); }
		.lizardon.color03 { background-image: url('chars/chr_11_lizardon_03.png'); }
		.lizardon.color04 { background-image: url('chars/chr_11_lizardon_04.png'); }
		.lizardon.color05 { background-image: url('chars/chr_11_lizardon_05.png'); }
		.lizardon.color06 { background-image: url('chars/chr_11_lizardon_06.png'); }
		.lizardon.color07 { background-image: url('chars/chr_11_lizardon_07.png'); }
		.lizardon.color08 { background-image: url('chars/chr_11_lizardon_08.png'); }
		.lucario.color01 { background-image: url('chars/chr_11_lucario_01.png'); }
		.lucario.color02 { background-image: url('chars/chr_11_lucario_02.png'); }
		.lucario.color03 { background-image: url('chars/chr_11_lucario_03.png'); }
		.lucario.color04 { background-image: url('chars/chr_11_lucario_04.png'); }
		.lucario.color05 { background-image: url('chars/chr_11_lucario_05.png'); }
		.lucario.color06 { background-image: url('chars/chr_11_lucario_06.png'); }
		.lucario.color07 { background-image: url('chars/chr_11_lucario_07.png'); }
		.lucario.color08 { background-image: url('chars/chr_11_lucario_08.png'); }
		.lucas.color01 { background-image: url('chars/chr_11_lucas_01.png'); }
		.lucas.color02 { background-image: url('chars/chr_11_lucas_02.png'); }
		.lucas.color03 { background-image: url('chars/chr_11_lucas_03.png'); }
		.lucas.color04 { background-image: url('chars/chr_11_lucas_04.png'); }
		.lucas.color05 { background-image: url('chars/chr_11_lucas_05.png'); }
		.lucas.color06 { background-image: url('chars/chr_11_lucas_06.png'); }
		.lucas.color07 { background-image: url('chars/chr_11_lucas_07.png'); }
		.lucas.color08 { background-image: url('chars/chr_11_lucas_08.png'); }
		.lucina.color01 { background-image: url('chars/chr_11_lucina_01.png'); }
		.lucina.color02 { background-image: url('chars/chr_11_lucina_02.png'); }
		.lucina.color03 { background-image: url('chars/chr_11_lucina_03.png'); }
		.lucina.color04 { background-image: url('chars/chr_11_lucina_04.png'); }
		.lucina.color05 { background-image: url('chars/chr_11_lucina_05.png'); }
		.lucina.color06 { background-image: url('chars/chr_11_lucina_06.png'); }
		.lucina.color07 { background-image: url('chars/chr_11_lucina_07.png'); }
		.lucina.color08 { background-image: url('chars/chr_11_lucina_08.png'); }
		.luigi.color01 { background-image: url('chars/chr_11_luigi_01.png'); }
		.luigi.color02 { background-image: url('chars/chr_11_luigi_02.png'); }
		.luigi.color03 { background-image: url('chars/chr_11_luigi_03.png'); }
		.luigi.color04 { background-image: url('chars/chr_11_luigi_04.png'); }
		.luigi.color05 { background-image: url('chars/chr_11_luigi_05.png'); }
		.luigi.color06 { background-image: url('chars/chr_11_luigi_06.png'); }
		.luigi.color07 { background-image: url('chars/chr_11_luigi_07.png'); }
		.luigi.color08 { background-image: url('chars/chr_11_luigi_08.png'); }
		.mario.color01 { background-image: url('chars/chr_11_mario_01.png'); }
		.mario.color02 { background-image: url('chars/chr_11_mario_02.png'); }
		.mario.color03 { background-image: url('chars/chr_11_mario_03.png'); }
		.mario.color04 { background-image: url('chars/chr_11_mario_04.png'); }
		.mario.color05 { background-image: url('chars/chr_11_mario_05.png'); }
		.mario.color06 { background-image: url('chars/chr_11_mario_06.png'); }
		.mario.color07 { background-image: url('chars/chr_11_mario_07.png'); }
		.mario.color08 { background-image: url('chars/chr_11_mario_08.png'); }
		.marth.color01 { background-image: url('chars/chr_11_marth_01.png'); }
		.marth.color02 { background-image: url('chars/chr_11_marth_02.png'); }
		.marth.color03 { background-image: url('chars/chr_11_marth_03.png'); }
		.marth.color04 { background-image: url('chars/chr_11_marth_04.png'); }
		.marth.color05 { background-image: url('chars/chr_11_marth_05.png'); }
		.marth.color06 { background-image: url('chars/chr_11_marth_06.png'); }
		.marth.color07 { background-image: url('chars/chr_11_marth_07.png'); }
		.marth.color08 { background-image: url('chars/chr_11_marth_08.png'); }
		.metaknight.color01 { background-image: url('chars/chr_11_metaknight_01.png'); }
		.metaknight.color02 { background-image: url('chars/chr_11_metaknight_02.png'); }
		.metaknight.color03 { background-image: url('chars/chr_11_metaknight_03.png'); }
		.metaknight.color04 { background-image: url('chars/chr_11_metaknight_04.png'); }
		.metaknight.color05 { background-image: url('chars/chr_11_metaknight_05.png'); }
		.metaknight.color06 { background-image: url('chars/chr_11_metaknight_06.png'); }
		.metaknight.color07 { background-image: url('chars/chr_11_metaknight_07.png'); }
		.metaknight.color08 { background-image: url('chars/chr_11_metaknight_08.png'); }
		.mewtwo.color01 { background-image: url('chars/chr_11_mewtwo_01.png'); }
		.mewtwo.color02 { background-image: url('chars/chr_11_mewtwo_02.png'); }
		.mewtwo.color03 { background-image: url('chars/chr_11_mewtwo_03.png'); }
		.mewtwo.color04 { background-image: url('chars/chr_11_mewtwo_04.png'); }
		.mewtwo.color05 { background-image: url('chars/chr_11_mewtwo_05.png'); }
		.mewtwo.color06 { background-image: url('chars/chr_11_mewtwo_06.png'); }
		.mewtwo.color07 { background-image: url('chars/chr_11_mewtwo_07.png'); }
		.mewtwo.color08 { background-image: url('chars/chr_11_mewtwo_08.png'); }
		.miifighter.color01 { background-image: url('chars/chr_11_miifighter_01.png'); }
		.miifighter.color02 { background-image: url('chars/chr_11_miifighter_02.png'); }
		.miifighter.color03 { background-image: url('chars/chr_11_miifighter_03.png'); }
		.miifighter.color04 { background-image: url('chars/chr_11_miifighter_04.png'); }
		.miifighter.color05 { background-image: url('chars/chr_11_miifighter_05.png'); }
		.miifighter.color06 { background-image: url('chars/chr_11_miifighter_06.png'); }
		.miifighter.color07 { background-image: url('chars/chr_11_miifighter_07.png'); }
		.miifighter.color08 { background-image: url('chars/chr_11_miifighter_08.png'); }
		.miigunner.color01 { background-image: url('chars/chr_11_miigunner_01.png'); }
		.miigunner.color02 { background-image: url('chars/chr_11_miigunner_02.png'); }
		.miigunner.color03 { background-image: url('chars/chr_11_miigunner_03.png'); }
		.miigunner.color04 { background-image: url('chars/chr_11_miigunner_04.png'); }
		.miigunner.color05 { background-image: url('chars/chr_11_miigunner_05.png'); }
		.miigunner.color06 { background-image: url('chars/chr_11_miigunner_06.png'); }
		.miigunner.color07 { background-image: url('chars/chr_11_miigunner_07.png'); }
		.miigunner.color08 { background-image: url('chars/chr_11_miigunner_08.png'); }
		.miiswords.color01 { background-image: url('chars/chr_11_miiswordsman_01.png'); }
		.miiswords.color02 { background-image: url('chars/chr_11_miiswordsman_02.png'); }
		.miiswords.color03 { background-image: url('chars/chr_11_miiswordsman_03.png'); }
		.miiswords.color04 { background-image: url('chars/chr_11_miiswordsman_04.png'); }
		.miiswords.color05 { background-image: url('chars/chr_11_miiswordsman_05.png'); }
		.miiswords.color06 { background-image: url('chars/chr_11_miiswordsman_06.png'); }
		.miiswords.color07 { background-image: url('chars/chr_11_miiswordsman_07.png'); }
		.miiswords.color08 { background-image: url('chars/chr_11_miiswordsman_08.png'); }
		.murabito.color01 { background-image: url('chars/chr_11_murabito_01.png'); }
		.murabito.color02 { background-image: url('chars/chr_11_murabito_02.png'); }
		.murabito.color03 { background-image: url('chars/chr_11_murabito_03.png'); }
		.murabito.color04 { background-image: url('chars/chr_11_murabito_04.png'); }
		.murabito.color05 { background-image: url('chars/chr_11_murabito_05.png'); }
		.murabito.color06 { background-image: url('chars/chr_11_murabito_06.png'); }
		.murabito.color07 { background-image: url('chars/chr_11_murabito_07.png'); }
		.murabito.color08 { background-image: url('chars/chr_11_murabito_08.png'); }
		.ness.color01 { background-image: url('chars/chr_11_ness_01.png'); }
		.ness.color02 { background-image: url('chars/chr_11_ness_02.png'); }
		.ness.color03 { background-image: url('chars/chr_11_ness_03.png'); }
		.ness.color04 { background-image: url('chars/chr_11_ness_04.png'); }
		.ness.color05 { background-image: url('chars/chr_11_ness_05.png'); }
		.ness.color06 { background-image: url('chars/chr_11_ness_06.png'); }
		.ness.color07 { background-image: url('chars/chr_11_ness_07.png'); }
		.ness.color08 { background-image: url('chars/chr_11_ness_08.png'); }
		.omakase.color01 { background-image: url('chars/chr_11_omakase_01.png'); }
		.pacman.color01 { background-image: url('chars/chr_11_pacman_01.png'); }
		.pacman.color02 { background-image: url('chars/chr_11_pacman_02.png'); }
		.pacman.color03 { background-image: url('chars/chr_11_pacman_03.png'); }
		.pacman.color04 { background-image: url('chars/chr_11_pacman_04.png'); }
		.pacman.color05 { background-image: url('chars/chr_11_pacman_05.png'); }
		.pacman.color06 { background-image: url('chars/chr_11_pacman_06.png'); }
		.pacman.color07 { background-image: url('chars/chr_11_pacman_07.png'); }
		.pacman.color08 { background-image: url('chars/chr_11_pacman_08.png'); }
		.palutena.color01 { background-image: url('chars/chr_11_palutena_01.png'); }
		.palutena.color02 { background-image: url('chars/chr_11_palutena_02.png'); }
		.palutena.color03 { background-image: url('chars/chr_11_palutena_03.png'); }
		.palutena.color04 { background-image: url('chars/chr_11_palutena_04.png'); }
		.palutena.color05 { background-image: url('chars/chr_11_palutena_05.png'); }
		.palutena.color06 { background-image: url('chars/chr_11_palutena_06.png'); }
		.palutena.color07 { background-image: url('chars/chr_11_palutena_07.png'); }
		.palutena.color08 { background-image: url('chars/chr_11_palutena_08.png'); }
		.peach.color01 { background-image: url('chars/chr_11_peach_01.png'); }
		.peach.color02 { background-image: url('chars/chr_11_peach_02.png'); }
		.peach.color03 { background-image: url('chars/chr_11_peach_03.png'); }
		.peach.color04 { background-image: url('chars/chr_11_peach_04.png'); }
		.peach.color05 { background-image: url('chars/chr_11_peach_05.png'); }
		.peach.color06 { background-image: url('chars/chr_11_peach_06.png'); }
		.peach.color07 { background-image: url('chars/chr_11_peach_07.png'); }
		.peach.color08 { background-image: url('chars/chr_11_peach_08.png'); }
		.pikachu.color01 { background-image: url('chars/chr_11_pikachu_01.png'); }
		.pikachu.color02 { background-image: url('chars/chr_11_pikachu_02.png'); }
		.pikachu.color03 { background-image: url('chars/chr_11_pikachu_03.png'); }
		.pikachu.color04 { background-image: url('chars/chr_11_pikachu_04.png'); }
		.pikachu.color05 { background-image: url('chars/chr_11_pikachu_05.png'); }
		.pikachu.color06 { background-image: url('chars/chr_11_pikachu_06.png'); }
		.pikachu.color07 { background-image: url('chars/chr_11_pikachu_07.png'); }
		.pikachu.color08 { background-image: url('chars/chr_11_pikachu_08.png'); }
		.pikmin.color01 { background-image: url('chars/chr_11_pikmin_01.png'); }
		.pikmin.color02 { background-image: url('chars/chr_11_pikmin_02.png'); }
		.pikmin.color03 { background-image: url('chars/chr_11_pikmin_03.png'); }
		.pikmin.color04 { background-image: url('chars/chr_11_pikmin_04.png'); }
		.pikmin.color05 { background-image: url('chars/chr_11_pikmin_05.png'); }
		.pikmin.color06 { background-image: url('chars/chr_11_pikmin_06.png'); }
		.pikmin.color07 { background-image: url('chars/chr_11_pikmin_07.png'); }
		.pikmin.color08 { background-image: url('chars/chr_11_pikmin_08.png'); }
		.pit.color01 { background-image: url('chars/chr_11_pit_01.png'); }
		.pit.color02 { background-image: url('chars/chr_11_pit_02.png'); }
		.pit.color03 { background-image: url('chars/chr_11_pit_03.png'); }
		.pit.color04 { background-image: url('chars/chr_11_pit_04.png'); }
		.pit.color05 { background-image: url('chars/chr_11_pit_05.png'); }
		.pit.color06 { background-image: url('chars/chr_11_pit_06.png'); }
		.pit.color07 { background-image: url('chars/chr_11_pit_07.png'); }
		.pit.color08 { background-image: url('chars/chr_11_pit_08.png'); }
		.pitb.color01 { background-image: url('chars/chr_11_pitb_01.png'); }
		.pitb.color02 { background-image: url('chars/chr_11_pitb_02.png'); }
		.pitb.color03 { background-image: url('chars/chr_11_pitb_03.png'); }
		.pitb.color04 { background-image: url('chars/chr_11_pitb_04.png'); }
		.pitb.color05 { background-image: url('chars/chr_11_pitb_05.png'); }
		.pitb.color06 { background-image: url('chars/chr_11_pitb_06.png'); }
		.pitb.color07 { background-image: url('chars/chr_11_pitb_07.png'); }
		.pitb.color08 { background-image: url('chars/chr_11_pitb_08.png'); }
		.purin.color01 { background-image: url('chars/chr_11_purin_01.png'); }
		.purin.color02 { background-image: url('chars/chr_11_purin_02.png'); }
		.purin.color03 { background-image: url('chars/chr_11_purin_03.png'); }
		.purin.color04 { background-image: url('chars/chr_11_purin_04.png'); }
		.purin.color05 { background-image: url('chars/chr_11_purin_05.png'); }
		.purin.color06 { background-image: url('chars/chr_11_purin_06.png'); }
		.purin.color07 { background-image: url('chars/chr_11_purin_07.png'); }
		.purin.color08 { background-image: url('chars/chr_11_purin_08.png'); }
		.reflet.color01 { background-image: url('chars/chr_11_reflet_01.png'); }
		.reflet.color02 { background-image: url('chars/chr_11_reflet_02.png'); }
		.reflet.color03 { background-image: url('chars/chr_11_reflet_03.png'); }
		.reflet.color04 { background-image: url('chars/chr_11_reflet_04.png'); }
		.reflet.color05 { background-image: url('chars/chr_11_reflet_05.png'); }
		.reflet.color06 { background-image: url('chars/chr_11_reflet_06.png'); }
		.reflet.color07 { background-image: url('chars/chr_11_reflet_07.png'); }
		.reflet.color08 { background-image: url('chars/chr_11_reflet_08.png'); }
		.robot.color01 { background-image: url('chars/chr_11_robot_01.png'); }
		.robot.color02 { background-image: url('chars/chr_11_robot_02.png'); }
		.robot.color03 { background-image: url('chars/chr_11_robot_03.png'); }
		.robot.color04 { background-image: url('chars/chr_11_robot_04.png'); }
		.robot.color05 { background-image: url('chars/chr_11_robot_05.png'); }
		.robot.color06 { background-image: url('chars/chr_11_robot_06.png'); }
		.robot.color07 { background-image: url('chars/chr_11_robot_07.png'); }
		.robot.color08 { background-image: url('chars/chr_11_robot_08.png'); }
		.rockman.color01 { background-image: url('chars/chr_11_rockman_01.png'); }
		.rockman.color02 { background-image: url('chars/chr_11_rockman_02.png'); }
		.rockman.color03 { background-image: url('chars/chr_11_rockman_03.png'); }
		.rockman.color04 { background-image: url('chars/chr_11_rockman_04.png'); }
		.rockman.color05 { background-image: url('chars/chr_11_rockman_05.png'); }
		.rockman.color06 { background-image: url('chars/chr_11_rockman_06.png'); }
		.rockman.color07 { background-image: url('chars/chr_11_rockman_07.png'); }
		.rockman.color08 { background-image: url('chars/chr_11_rockman_08.png'); }
		.rosetta.color01 { background-image: url('chars/chr_11_rosetta_01.png'); }
		.rosetta.color02 { background-image: url('chars/chr_11_rosetta_02.png'); }
		.rosetta.color03 { background-image: url('chars/chr_11_rosetta_03.png'); }
		.rosetta.color04 { background-image: url('chars/chr_11_rosetta_04.png'); }
		.rosetta.color05 { background-image: url('chars/chr_11_rosetta_05.png'); }
		.rosetta.color06 { background-image: url('chars/chr_11_rosetta_06.png'); }
		.rosetta.color07 { background-image: url('chars/chr_11_rosetta_07.png'); }
		.rosetta.color08 { background-image: url('chars/chr_11_rosetta_08.png'); }
		.roy.color01 { background-image: url('chars/chr_11_roy_01.png'); }
		.roy.color02 { background-image: url('chars/chr_11_roy_02.png'); }
		.roy.color03 { background-image: url('chars/chr_11_roy_03.png'); }
		.roy.color04 { background-image: url('chars/chr_11_roy_04.png'); }
		.roy.color05 { background-image: url('chars/chr_11_roy_05.png'); }
		.roy.color06 { background-image: url('chars/chr_11_roy_06.png'); }
		.roy.color07 { background-image: url('chars/chr_11_roy_07.png'); }
		.roy.color08 { background-image: url('chars/chr_11_roy_08.png'); }
		.ryu.color01 { background-image: url('chars/chr_11_ryu_01.png'); }
		.ryu.color02 { background-image: url('chars/chr_11_ryu_02.png'); }
		.ryu.color03 { background-image: url('chars/chr_11_ryu_03.png'); }
		.ryu.color04 { background-image: url('chars/chr_11_ryu_04.png'); }
		.ryu.color05 { background-image: url('chars/chr_11_ryu_05.png'); }
		.ryu.color06 { background-image: url('chars/chr_11_ryu_06.png'); }
		.ryu.color07 { background-image: url('chars/chr_11_ryu_07.png'); }
		.ryu.color08 { background-image: url('chars/chr_11_ryu_08.png'); }
		.samus.color01 { background-image: url('chars/chr_11_samus_01.png'); }
		.samus.color02 { background-image: url('chars/chr_11_samus_02.png'); }
		.samus.color03 { background-image: url('chars/chr_11_samus_03.png'); }
		.samus.color04 { background-image: url('chars/chr_11_samus_04.png'); }
		.samus.color05 { background-image: url('chars/chr_11_samus_05.png'); }
		.samus.color06 { background-image: url('chars/chr_11_samus_06.png'); }
		.samus.color07 { background-image: url('chars/chr_11_samus_07.png'); }
		.samus.color08 { background-image: url('chars/chr_11_samus_08.png'); }
		.sheik.color01 { background-image: url('chars/chr_11_sheik_01.png'); }
		.sheik.color02 { background-image: url('chars/chr_11_sheik_02.png'); }
		.sheik.color03 { background-image: url('chars/chr_11_sheik_03.png'); }
		.sheik.color04 { background-image: url('chars/chr_11_sheik_04.png'); }
		.sheik.color05 { background-image: url('chars/chr_11_sheik_05.png'); }
		.sheik.color06 { background-image: url('chars/chr_11_sheik_06.png'); }
		.sheik.color07 { background-image: url('chars/chr_11_sheik_07.png'); }
		.sheik.color08 { background-image: url('chars/chr_11_sheik_08.png'); }
		.shulk.color01 { background-image: url('chars/chr_11_shulk_01.png'); }
		.shulk.color02 { background-image: url('chars/chr_11_shulk_02.png'); }
		.shulk.color03 { background-image: url('chars/chr_11_shulk_03.png'); }
		.shulk.color04 { background-image: url('chars/chr_11_shulk_04.png'); }
		.shulk.color05 { background-image: url('chars/chr_11_shulk_05.png'); }
		.shulk.color06 { background-image: url('chars/chr_11_shulk_06.png'); }
		.shulk.color07 { background-image: url('chars/chr_11_shulk_07.png'); }
		.shulk.color08 { background-image: url('chars/chr_11_shulk_08.png'); }
		.sonic.color01 { background-image: url('chars/chr_11_sonic_01.png'); }
		.sonic.color02 { background-image: url('chars/chr_11_sonic_02.png'); }
		.sonic.color03 { background-image: url('chars/chr_11_sonic_03.png'); }
		.sonic.color04 { background-image: url('chars/chr_11_sonic_04.png'); }
		.sonic.color05 { background-image: url('chars/chr_11_sonic_05.png'); }
		.sonic.color06 { background-image: url('chars/chr_11_sonic_06.png'); }
		.sonic.color07 { background-image: url('chars/chr_11_sonic_07.png'); }
		.sonic.color08 { background-image: url('chars/chr_11_sonic_08.png'); }
		.szerosuit.color01 { background-image: url('chars/chr_11_szerosuit_01.png'); }
		.szerosuit.color02 { background-image: url('chars/chr_11_szerosuit_02.png'); }
		.szerosuit.color03 { background-image: url('chars/chr_11_szerosuit_03.png'); }
		.szerosuit.color04 { background-image: url('chars/chr_11_szerosuit_04.png'); }
		.szerosuit.color05 { background-image: url('chars/chr_11_szerosuit_05.png'); }
		.szerosuit.color06 { background-image: url('chars/chr_11_szerosuit_06.png'); }
		.szerosuit.color07 { background-image: url('chars/chr_11_szerosuit_07.png'); }
		.szerosuit.color08 { background-image: url('chars/chr_11_szerosuit_08.png'); }
		.toonlink.color01 { background-image: url('chars/chr_11_toonlink_01.png'); }
		.toonlink.color02 { background-image: url('chars/chr_11_toonlink_02.png'); }
		.toonlink.color03 { background-image: url('chars/chr_11_toonlink_03.png'); }
		.toonlink.color04 { background-image: url('chars/chr_11_toonlink_04.png'); }
		.toonlink.color05 { background-image: url('chars/chr_11_toonlink_05.png'); }
		.toonlink.color06 { background-image: url('chars/chr_11_toonlink_06.png'); }
		.toonlink.color07 { background-image: url('chars/chr_11_toonlink_07.png'); }
		.toonlink.color08 { background-image: url('chars/chr_11_toonlink_08.png'); }
		.wario.color01 { background-image: url('chars/chr_11_wario_01.png'); }
		.wario.color02 { background-image: url('chars/chr_11_wario_02.png'); }
		.wario.color03 { background-image: url('chars/chr_11_wario_03.png'); }
		.wario.color04 { background-image: url('chars/chr_11_wario_04.png'); }
		.wario.color05 { background-image: url('chars/chr_11_wario_05.png'); }
		.wario.color06 { background-image: url('chars/chr_11_wario_06.png'); }
		.wario.color07 { background-image: url('chars/chr_11_wario_07.png'); }
		.wario.color08 { background-image: url('chars/chr_11_wario_08.png'); }
		.wiifit.color01 { background-image: url('chars/chr_11_wiifit_01.png'); }
		.wiifit.color02 { background-image: url('chars/chr_11_wiifit_02.png'); }
		.wiifit.color03 { background-image: url('chars/chr_11_wiifit_03.png'); }
		.wiifit.color04 { background-image: url('chars/chr_11_wiifit_04.png'); }
		.wiifit.color05 { background-image: url('chars/chr_11_wiifit_05.png'); }
		.wiifit.color06 { background-image: url('chars/chr_11_wiifit_06.png'); }
		.wiifit.color07 { background-image: url('chars/chr_11_wiifit_07.png'); }
		.wiifit.color08 { background-image: url('chars/chr_11_wiifit_08.png'); }
		.yoshi.color01 { background-image: url('chars/chr_11_yoshi_01.png'); }
		.yoshi.color02 { background-image: url('chars/chr_11_yoshi_02.png'); }
		.yoshi.color03 { background-image: url('chars/chr_11_yoshi_03.png'); }
		.yoshi.color04 { background-image: url('chars/chr_11_yoshi_04.png'); }
		.yoshi.color05 { background-image: url('chars/chr_11_yoshi_05.png'); }
		.yoshi.color06 { background-image: url('chars/chr_11_yoshi_06.png'); }
		.yoshi.color07 { background-image: url('chars/chr_11_yoshi_07.png'); }
		.yoshi.color08 { background-image: url('chars/chr_11_yoshi_08.png'); }
		.zelda.color01 { background-image: url('chars/chr_11_zelda_01.png'); }
		.zelda.color02 { background-image: url('chars/chr_11_zelda_02.png'); }
		.zelda.color03 { background-image: url('chars/chr_11_zelda_03.png'); }
		.zelda.color04 { background-image: url('chars/chr_11_zelda_04.png'); }
		.zelda.color05 { background-image: url('chars/chr_11_zelda_05.png'); }
		.zelda.color06 { background-image: url('chars/chr_11_zelda_06.png'); }
		.zelda.color07 { background-image: url('chars/chr_11_zelda_07.png'); }
		.zelda.color08 { background-image: url('chars/chr_11_zelda_08.png'); }

		/* Character Icons */
		.bayonetta.icon { background-image: url('icons/chr_10_bayonetta_01.png'); }
		.captain.icon { background-image: url('icons/chr_10_captain_01.png'); }
		.cloud.icon { background-image: url('icons/chr_10_cloud_01.png'); }
		.dedede.icon { background-image: url('icons/chr_10_dedede_01.png'); }
		.diddy.icon { background-image: url('icons/chr_10_diddy_01.png'); }
		.donkey.icon { background-image: url('icons/chr_10_donkey_01.png'); }
		.drmario.icon { background-image: url('icons/chr_10_drmario_01.png'); }
		.duckhunt.icon { background-image: url('icons/chr_10_duckhunt_01.png'); }
		.falco.icon { background-image: url('icons/chr_10_falco_01.png'); }
		.fox.icon { background-image: url('icons/chr_10_fox_01.png'); }
		.gamewatch.icon { background-image: url('icons/chr_10_gamewatch_01.png'); }
		.ganon.icon { background-image: url('icons/chr_10_ganon_01.png'); }
		.gekkouga.icon { background-image: url('icons/chr_10_gekkouga_01.png'); }
		.ike.icon { background-image: url('icons/chr_10_ike_01.png'); }
		.kamui.icon { background-image: url('icons/chr_10_kamui_01.png'); }
		.kirby.icon { background-image: url('icons/chr_10_kirby_01.png'); }
		.koopa.icon { background-image: url('icons/chr_10_koopa_01.png'); }
		.koopajr.icon { background-image: url('icons/chr_10_koopajr_01.png'); }
		.link.icon { background-image: url('icons/chr_10_link_01.png'); }
		.littlemac.icon { background-image: url('icons/chr_10_littlemac_01.png'); }
		.lizardon.icon { background-image: url('icons/chr_10_lizardon_01.png'); }
		.lucario.icon { background-image: url('icons/chr_10_lucario_01.png'); }
		.lucas.icon { background-image: url('icons/chr_10_lucas_01.png'); }
		.lucina.icon { background-image: url('icons/chr_10_lucina_01.png'); }
		.luigi.icon { background-image: url('icons/chr_10_luigi_01.png'); }
		.mario.icon { background-image: url('icons/chr_10_mario_01.png'); }
		.marth.icon { background-image: url('icons/chr_10_marth_01.png'); }
		.metaknight.icon { background-image: url('icons/chr_10_metaknight_01.png'); }
		.mewtwo.icon { background-image: url('icons/chr_10_mewtwo_01.png'); }
		.miifighter.icon { background-image: url('icons/chr_10_miifighter_01.png'); }
		.miigunner.icon { background-image: url('icons/chr_10_miigunner_01.png'); }
		.miiswords.icon { background-image: url('icons/chr_10_miiswordsman_01.png'); }
		.murabito.icon { background-image: url('icons/chr_10_murabito_01.png'); }
		.ness.icon { background-image: url('icons/chr_10_ness_01.png'); }
		.omakase.icon { background-image: url('icons/chr_10_omakase_01.png'); }
		.pacman.icon { background-image: url('icons/chr_10_pacman_01.png'); }
		.palutena.icon { background-image: url('icons/chr_10_palutena_01.png'); }
		.peach.icon { background-image: url('icons/chr_10_peach_01.png'); }
		.pikachu.icon { background-image: url('icons/chr_10_pikachu_01.png'); }
		.pikmin.icon { background-image: url('icons/chr_10_pikmin_01.png'); }
		.pit.icon { background-image: url('icons/chr_10_pit_01.png'); }
		.pitb.icon { background-image: url('icons/chr_10_pitb_01.png'); }
		.purin.icon { background-image: url('icons/chr_10_purin_01.png'); }
		.reflet.icon { background-image: url('icons/chr_10_reflet_01.png'); }
		.robot.icon { background-image: url('icons/chr_10_robot_01.png'); }
		.rockman.icon { background-image: url('icons/chr_10_rockman_01.png'); }
		.rosetta.icon { background-image: url('icons/chr_10_rosetta_01.png'); }
		.roy.icon { background-image: url('icons/chr_10_roy_01.png'); }
		.ryu.icon { background-image: url('icons/chr_10_ryu_01.png'); }
		.samus.icon { background-image: url('icons/chr_10_samus_01.png'); }
		.sheik.icon { background-image: url('icons/chr_10_sheik_01.png'); }
		.shulk.icon { background-image: url('icons/chr_10_shulk_01.png'); }
		.sonic.icon { background-image: url('icons/chr_10_sonic_01.png'); }
		.szerosuit.icon { background-image: url('icons/chr_10_szerosuit_01.png'); }
		.toonlink.icon { background-image: url('icons/chr_10_toonlink_01.png'); }
		.wario.icon { background-image: url('icons/chr_10_wario_01.png'); }
		.wiifit.icon { background-image: url('icons/chr_10_wiifit_01.png'); }
		.yoshi.icon { background-image: url('icons/chr_10_yoshi_01.png'); }
		.zelda.icon { background-image: url('icons/chr_10_zelda_01.png'); }

		/* Character Names */
		.char.bayonetta:after { background-image: url('names/bayonetta.png') }
		.char.captain:after { background-image: url('names/captain.png') }
		.char.cloud:after { background-image: url('names/cloud.png') }
		.char.dedede:after { background-image: url('names/dedede.png') }
		.char.diddy:after { background-image: url('names/diddy.png') }
		.char.donkey:after { background-image: url('names/donkey.png') }
		.char.drmario:after { background-image: url('names/drmario.png') }
		.char.duckhunt:after { background-image: url('names/duckhunt.png') }
		.char.falco:after { background-image: url('names/falco.png') }
		.char.fox:after { background-image: url('names/fox.png') }
		.char.gamewatch:after { background-image: url('names/gamewatch.png') }
		.char.ganon:after { background-image: url('names/ganon.png') }
		.char.gekkouga:after { background-image: url('names/gekkouga.png') }
		.char.ike:after { background-image: url('names/ike.png') }
		.char.kamui:after { background-image: url('names/kamui.png') }
		.char.kirby:after { background-image: url('names/kirby.png') }
		.char.koopa:after { background-image: url('names/koopa.png') }
		.char.koopajr:after { background-image: url('names/koopajr.png') }

		.char.koopajr.color02:after { background-image: url('names/larry.png') }
		.char.koopajr.color03:after { background-image: url('names/roy.png') }
		.char.koopajr.color04:after { background-image: url('names/wendy.png') }
		.char.koopajr.color05:after { background-image: url('names/iggy.png') }
		.char.koopajr.color06:after { background-image: url('names/morton.png') }
		.char.koopajr.color07:after { background-image: url('names/lemmy.png') }
		.char.koopajr.color08:after { background-image: url('names/ludwig.png') }

		.char.link:after { background-image: url('names/link.png') }
		.char.littlemac:after { background-image: url('names/littlemac.png') }
		.char.lizardon:after { background-image: url('names/lizardon.png') }
		.char.lucario:after { background-image: url('names/lucario.png') }
		.char.lucas:after { background-image: url('names/lucas.png') }
		.char.lucina:after { background-image: url('names/lucina.png') }
		.char.luigi:after { background-image: url('names/luigi.png') }
		.char.mario:after { background-image: url('names/mario.png') }
		.char.marth:after { background-image: url('names/marth.png') }
		.char.metaknight:after { background-image: url('names/metaknight.png') }
		.char.mewtwo:after { background-image: url('names/mewtwo.png') }
		.char.miifighter:after { background-image: url('names/mii.png') }
		.char.miigunner:after { background-image: url('names/mii.png') }
		.char.miiswords:after { background-image: url('names/mii.png') }
		.char.murabito:after { background-image: url('names/murabito.png') }
		.char.ness:after { background-image: url('names/ness.png') }
		.char.omakase:after { background-image: url('names/omakase.png') }
		.char.pacman:after { background-image: url('names/pacman.png') }
		.char.palutena:after { background-image: url('names/palutena.png') }
		.char.peach:after { background-image: url('names/peach.png') }
		.char.pikachu:after { background-image: url('names/pikachu.png') }
		.char.pikmin:after { background-image: url('names/pikmin.png') }

		.char.pikmin.color05:after,
		.char.pikmin.color06:after,
		.char.pikmin.color07:after,
		.char.pikmin.color08:after { background-image: url('names/alph.png') }

		.char.pit:after { background-image: url('names/pit.png') }
		.char.pitb:after { background-image: url('names/pitb.png') }
		.char.purin:after { background-image: url('names/purin.png') }
		.char.reflet:after { background-image: url('names/reflet.png') }
		.char.robot:after { background-image: url('names/robot.png') }
		.char.rockman:after { background-image: url('names/rockman.png') }
		.char.rosetta:after { background-image: url('names/rosetta.png') }
		.char.roy:after { background-image: url('names/roy.png') }
		.char.ryu:after { background-image: url('names/ryu.png') }
		.char.samus:after { background-image: url('names/samus.png') }
		.char.sheik:after { background-image: url('names/sheik.png') }
		.char.shulk:after { background-image: url('names/shulk.png') }
		.char.sonic:after { background-image: url('names/sonic.png') }
		.char.szerosuit:after { background-image: url('names/szerosuit.png') }
		.char.toonlink:after { background-image: url('names/toonlink.png') }
		.char.wario:after { background-image: url('names/wario.png') }
		.char.wiifit:after { background-image: url('names/wiifit.png') }
		.char.yoshi:after { background-image: url('names/yoshi.png') }
		.char.zelda:after { background-image: url('names/zelda.png') }

		.slot.thin .char:after { background-image: none; }
		.slot.slim .char:after { background-image: none; }
		
		/* Sorting stuff */
		.sort-highlight {
			display: inline-block;
			width: 344px;
			height: 344px;
			background: rgba(255, 255, 255, .4);
			margin: 10px;
		}
			/* Placeholder Sizes */
			.placeholder_wide .sort-highlight {
				width: 344px;
				height: 344px;
			}
			
			.placeholder_small .sort-highlight {
				width: 200px;
				height: 200px;
			}
			
			.placeholder_thin .sort-highlight {
				width: 200px;
				height: 344px;
			}
			
			.placeholder_slim .sort-highlight {
				width: 130px;
				height: 200px;
			}
			
			.placeholder_mini .sort-highlight {
				width: 120px;
				height: 120px;
			}
		
		.sorting-handle {
			opacity: 0;
			background: url('drag-icon.png');
		    position: absolute;
			top: 10px;
			right: 10px;
			display: block;
			background-size: 30px 30px;
			width: 30px;
			height: 30px;
			cursor: move;
		}
		
			.slot:hover .sorting-handle { opacity: 1; }
		
			
	
	</style>
	
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
		
		<div class="DButton">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHFgYJKoZIhvcNAQcEoIIHBzCCBwMCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYAnMgHJUgnXmqG/Rk5NdSz9MenSRYmZZWDdhMijPS65aanISbkTOLpnYClNlgK+V18tsuhIF16gIMIX6hkSkXKLdewtURoy2Y8+NQMhQqJpYEeR6LLVlZdio787tCQ0+CcDuQShC2tveuBKJx7cJIPf+7aH0hdhxKm8+J9FlScRcjELMAkGBSsOAwIaBQAwgZMGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQISgxmeUsW5eOAcODQlqyfSYfCOSrZ4B9XISGPI79bL8kF0+3haci+z6Xt8YUfbhl0acTwJas0tbYKQieUZbqcC/pNhZZGSrLAsC0CyEMbiJSPV/lvoH9HbyAe9kfg1Ds7FtBGo0XV2aB+r0SvCPgtdlpJ1vp3JnSeyCGgggOHMIIDgzCCAuygAwIBAgIBADANBgkqhkiG9w0BAQUFADCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wHhcNMDQwMjEzMTAxMzE1WhcNMzUwMjEzMTAxMzE1WjCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMFHTt38RMxLXJyO2SmS+Ndl72T7oKJ4u4uw+6awntALWh03PewmIJuzbALScsTS4sZoS1fKciBGoh11gIfHzylvkdNe/hJl66/RGqrj5rFb08sAABNTzDTiqqNpJeBsYs/c2aiGozptX2RlnBktH+SUNpAajW724Nv2Wvhif6sFAgMBAAGjge4wgeswHQYDVR0OBBYEFJaffLvGbxe9WT9S1wob7BDWZJRrMIG7BgNVHSMEgbMwgbCAFJaffLvGbxe9WT9S1wob7BDWZJRroYGUpIGRMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbYIBADAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4GBAIFfOlaagFrl71+jq6OKidbWFSE+Q4FqROvdgIONth+8kSK//Y/4ihuE4Ymvzn5ceE3S/iBSQQMjyvb+s2TWbQYDwcp129OPIbD9epdr4tJOUNiSojw7BHwYRiPh58S1xGlFgHFXwrEBb3dgNbMUa+u4qectsMAXpVHnD9wIyfmHMYIBmjCCAZYCAQEwgZQwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tAgEAMAkGBSsOAwIaBQCgXTAYBgkqhkiG9w0BCQMxCwYJKoZIhvcNAQcBMBwGCSqGSIb3DQEJBTEPFw0xNjA0MjUwMTQ4NTBaMCMGCSqGSIb3DQEJBDEWBBQT7i48qOIG1bYJocuVAYb5dUK9qTANBgkqhkiG9w0BAQEFAASBgEWDELx/QcUavcIf3HN68oJRVrNKsZk1b/tJeBeG7qi4tjQdZ7cxWurcuwJVSFpvXh0raw0w7MslqBSitL3lxf1gF2cHvpQCN+2frPMWFLZrL06fLks4Px8cCQ1UvA/1AutzzfjC0ftSFX+P2DCKxg3DHvBKfamUlSFh4WsQnebG-----END PKCS7-----
				">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>

		</div>
	
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