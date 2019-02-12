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

    <hr>

    <!-- array in value -->
    <!-- array in value -->

    <ul>
      <li v-for="value of books2">{{value}}</li>
    </ul>
    
    <ul>
      <li v-for="(value, key) of books2">
        {{ key }} : {{ value }}
      </li>  
    </ul>
    
    <ul>
      <li v-for="(value,key,index) of books2">
        {{ index+1 }}, {{key}} : {{value}}
      </li>  
    </ul>

    <!-- end of app -->
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
        ],
        books2:{
          id            : 99,
          title         : 'C++ High Performance',
          description   : 'Write code that scales across CPU registers, multi-core, and machine clusters',
          authors       : 'ztm',
          publish_year  : 2018,
          price         : 150000
        }
  		}
  	});
  </script>
</body>