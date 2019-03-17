<!DOCTYPE html>
<html>
	<head>
	  	<title>Belajar Vue</title>
	  	<script src="lib/vue.js"></script>
	  	<style type="text/css">
		  	.card {
			    background: #efefef;
			    border:1px solid #ddd;
			    margin-right:5px;
			    padding:5px;
			    width: 200px;
			    float:left;
			}

			h3{
			    min-height: 45px;
			}
	  	</style>
	</head>
	<body>
		<div id="app">
			<h1>Selected: {{ selectedBook }}</h1>
			<book 
		        v-for="book in books"
		        :key="book.id"
		        :book="book"
		        @selected="selectedBook = $event"
		    >
		    </book>
		    <information>
		    	<p>added - Hati-hati lantai licin!</p>
		    </information>
		    <!-- <book
				v-for 	= "book in books"
				:key 	= "book.id"
				:title 	= "book.title"
				:description = "book.description"
				:image 	= "book.image"
			>
			</book> -->
		</div>
	</body>
	<script type="text/javascript">
		var Information = {
			template: `
				<div class="card">
					<strong>Informasi</strong>
					<hr>
					<slot></slot>
					<p>this is paragraph</p>
				</div>
			`
		}
		var BookComponent = {
			data() {
				return {
					classCard: 'card',
					books: [],
				}
			},
			props: ['book'],
			template: `
				<div :class="classCard">
					<h3>{{ book.title }}</h3>
					<img :src="'img/books/'+book.image" style="width:100%">
					<p v-html="book.description"></p>
					<button @click="$emit('selected', book.title)"> Select </button>
				</div>
			`
			// template:`
			// 	<div :class="classCard">
			// 		<h3>{{ title }}</h3>
			// 		<img :src="'img/books/'+image" style="width:100%"></img>
			// 		<p v-html="description"></p>
			// 	</div>
			// `
		}

		var vm = new Vue({
			el: '#app',
			components: {
				'book': BookComponent,
				'information': Information,
			},
			data: {
				selectedBook: '',
				books : [
					{
		                id: 99,
		                title: 'C++ High Performance',
		                description: 'Write code that scales across CPU registers, multi-core, and machine clusters',
		                authors: 'Viktor Sehr, Björn Andrist',
		                publish_year: 2018,
		                price: 100000,
		                image: 'book1.png'
		            },
		            {
		                id: 100,
		                title: 'Mastering Linux Security and Hardening',
		                description: 'A comprehensive guide to mastering the art of preventing your Linux system from getting compromised',
		                authors: 'Donald A. Tevault',
		                publish_year: 2018,
		                price: 125000,
		                image: 'book2.png'
		            },
		            {
		                id: 101,
		                title: 'Mastering PostgreSQL 10',
		                description: 'Master the capabilities of PostgreSQL 10 to efficiently manage and maintain your database',
		                authors: 'Hans-Jürgen Schönig',
		                publish_year: 2016,
		                price: 90000,
		                image: 'book3.png'
		            },
		            {
		                id: 102,
		                title: 'Python Programming Blueprints',
		                description: 'How to build useful, real-world applications in the Python programming language',
		                authors: 'Daniel Furtado, Marcus Pennington',
		                publish_year: 2017,
		                price: 75000,
		                image: 'book4.png'
		            },
				]
			}
		})
	</script>
</html>