<!DOCTYPE html>
<html>
<head>
  <title>Belajar Vue</title>
  <script src="lib/vue.js"></script>
</head>
<body>
  <div id="app">
  	<!-- call message -->
  	<p>{{ message }}</p>
  	<p v-text="message"></p>

  	<!-- static called once -->
  	<p v-once>{{message}}</p> 

  	<!-- toggle display -->
  	<p v-show="displayMessage">{{message}}</p>

  	<p v-if="renderTitle">{{title}}</p>

  	<!-- with div -->
  	<div v-if="contentShow">
  		<h1>Title</h1>
		  <p>Paragraph 1</p>
		  <p>Paragraph 2</p>
  	</div>

  	<hr>
  	
  	<!-- without div -->
  	<template v-if="contentShow">
		  <h1>Title</h1>
		  <p>Paragraph 1</p>
		  <p>Paragraph 2</p>
		</template>

		<h1 v-if="thisShow">shown</h1>
		<h1 v-else>Untitled</h1>

  	<hr>

		<!-- elseif -->
		<div v-if="nilai === 'A'">Awesome</div>
		<div v-else-if="nilai === 'B'">Bagus</div>
		<div v-else-if="nilai === 'C'">Cukup</div>
		<div v-else>Kurang</div>

  	<hr>

		<!-- event listener pada elemen HTML/komponen Vue.  -->
		<button v-on:click="info('halo')">Informasi Alert</button>

  	<hr>

		<!-- button counter -->
		<!-- <button v-on:click="counter ++"> -->
		<button v-on:click="counter += 1">
			Counter
		</button>
		<p>Button di atas telah diklik sebanyak {{ counter }} kali.</p>

  	<hr>

  	<a href="www.google.com" v-on:click="confirmInfo($event)">click to google</a>

  	<button v-on:click.once="confirmInfo($event)">
		    Informasi 1 kali klik
		</button>

		<!-- end app -->
  </div>

  <!-- start script -->
  <script type="text/javascript">
  	var vm = new Vue({
  		el:'#app',
  		data:{
  			message: 'hello',
  			displayMessage: true,
  			renderTitle:false,
  			contentShow:true,
  			thisShow:false,
  			nilai:'B',
  			counter:0,
  		},
  		methods: {
  			info(infoMessage){
  				alert(infoMessage);
  			},
  			confirmInfo(event){
  				alert("Press a button!");
				  event.preventDefault();
  			}
  		}
  	});
  </script>
  <!-- end script -->
</body>
</html>