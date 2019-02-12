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
    <hr>
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

    <hr>
    <hr>
    <hr>

    list of data collection
    <table border="1">

      <!-- version 1 -->
      <tr v-for="book of booksinlist">
        <td>
          <!-- :src adalah v-bind:src -->
          <img width=100 :src="'images/books/' + book.image" />
        </td>
        <td>
          title       : {{book.title}}<br>
          description : {{book.description}}<br>
          authors     : {{book.authors}}<br>
          price       : {{book.price}}
        </td>
      </tr>

      <tr></tr>
      <tr></tr>
      <tr></tr>
      <!-- or you can try use template -->
      <template v-for="book of booksinlist">
        <tr>
          <td>
            <!-- :src adalah v-bind:src -->
            <img width=100 :src="'images/books/' + book.image" />
          </td>
          <td>
            title       : {{book.title}}<br>
            description : {{book.description}}<br>
            authors     : {{book.authors}}<br>
            price       : {{book.price}}
          </td>
        </tr>
      </template>

      <tr></tr>
      <tr></tr>
      <tr></tr>
      
      <template v-for="(value,key) of booksinlist">
        <tr>
          <td>{{key+1}}</td>
          <td>
            <!-- :src adalah v-bind:src -->
            <img width=100 :src="'images/books/' + value.image" />
          </td>
          <td>
            title       : {{value.title}}<br>
            description : {{value.description}}<br>
            authors     : {{value.authors}}<br>
            price       : {{value.price}}
          </td>
        </tr>
      </template>

    </table>

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
        },
        booksinlist : [
          {
              id: 99,
              title: 'C++ High Performance',
              description: 'Write code that scales across CPU registers, multi-core, and machine clusters',
              authors: 'Viktor Sehr, Björn Andrist',
              publish_year: 2018,
              price: 100000,
              image: 'c++-high-performance.png'
          },
          {
              id: 100,
              title: 'Mastering Linux Security and Hardening',
              description: 'A comprehensive guide to mastering the art of preventing your Linux system from getting compromised',
              authors: 'Donald A. Tevault',
              publish_year: 2018,
              price: 125000,
              image: 'mastering-linux-security-and-hardening.png'
          },
          {
              id: 101,
              title: 'Mastering PostgreSQL 10',
              description: 'Master the capabilities of PostgreSQL 10 to efficiently manage and maintain your database',
              authors: 'Hans-Jürgen Schönig',
              publish_year: 2016,
              price: 90000,
              image: 'mastering-postgresql-10.png'
          },
          {
              id: 102,
              title: 'Python Programming Blueprints',
              description: 'How to build useful, real-world applications in the Python programming language',
              authors: 'Daniel Furtado, Marcus Pennington',
              publish_year: 2017,
              price: 75000,
              image: 'python-programming-blueprints.png'
          },
        ]
  		}
  	});
  </script>
</body>