<html lang="en" class=" desktop">
<style>
html, body {
    margin:0;
    padding:0;
}
</style>
<body>
	<center>
<canvas id="turbulenz_game_engine_object" moz-opaque="true" tabindex="1" width="905" height="638" style="cursor: url(&quot;https://d1f50kogf3q8v6.cloudfront.net/UkAT4oBEptbV9WSJ/1/xoFH2rA5i121BVVu5AFYYGUp6jDZNDF70TGFijmG5Y9ef.png&quot;), auto;"></canvas>

<script>
function displayWindowSize() {
var cf = document.getElementById("turbulenz_game_engine_object");
var myWidth = window.innerWidth, myHeight = window.innerHeight;
    // your size calculation code here
    //document.getElementById("turbulenz_game_engine_object").innerHTML = myWidth + "x" + myHeight;
	//window.windowWidth = myWidth;
	//window.windowHeight = myHeight;
	console.log(document.getElementById("turbulenz_game_engine_object").parentElement.clientWidth);
	console.log(window);
};

window.TurbulenzEngine = window.TurbulenzEngine || {};


		window.gameSlug = "denkiblocks";

</script>

<script type="text/javascript" src="game.js"></script>

<script>


var c = window.TurbulenzEngine.onload,
e = window.TurbulenzEngine.onunload;
c && (window.TurbulenzEngine = window.WebGLTurbulenzEngine.create({
                canvas: document.getElementById("turbulenz_game_engine_object")
            }), window.TurbulenzEngine && (window.TurbulenzEngine.onload = c, window.TurbulenzEngine.onunload = e, c()))
</script>

</body>

</html>