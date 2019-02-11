<!DOCTYPE html>
<html>
<head>
  <title>Belajar Vue</title>
  <script src="lib/vue.js"></script>
</head>
<body>
  <div id="app">
  	<ul>
  		<li v-for="book in books">
  			{{ book }}
  		</li>
  	</ul>

  	<hr>

  	<ul>
  		<template v-for="book in books">
	  		<li>{{ book }}</li>
  		</template>
  	</ul>

  	<hr>

  	<ul>
  		<template v-for="book of books">
	  		<li>{{ book }}</li>
  		</template>
  	</ul>

  	<hr>

  	<ul>
  		<li v-for="(book, index) in books" >
  			{{ index + 1 }}, {{ book }}
  		</li>
  	</ul>
  </div>

  <script type="text/javascript">
  	var vm = new Vue({
  		el: '#app',
  		data: {
  			books: [
  				'C++ High Performance', 
            	'Mastering Linux Security and Hardening', 
            	'Python Programming Blueprints', 
            	'Mastering PostgreSQL 10'
            ]
  		}
  	});
  </script>
</body>