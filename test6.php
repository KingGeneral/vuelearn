<!DOCTYPE html>
<html>
	<head>
	  <title>Belajar Vue</title>
	  <script src="lib/vue.js"></script>
	</head>
	<body>
	  <div id="app">
	  	<input type="text" v-model="keyword" name="keyword" placeholder="ketikan kata kunci">
	  	<ul>
	  		<li v-for="(book, index) of filterBooks" :key="index">
	  			{{ book }}
	  		</li>
	  	</ul>
	  </div>
	  <script type="text/javascript">
	  	var vm = new Vue({
	  		el: '#app',
	  		data: {
	  			keyword : '',
	  			books : [
	  				'Mastering A',
	  				'Python Programming Blueprints B',
	  				'Mastering PostgreSQL A',
	  				'C++ High Performance'
	  			]
	  		},
	  		computed: {
	  			filterBooks() {
	  				return this.books.filter((book)=>{
	  					return book.toLowerCase().includes(this.keyword);
	  				})
	  			}
	  		} 
	  	})
	  </script>
	</body>
</html>