<!DOCTYPE html>
<html>
	<head>
	  <title>Belajar Vue</title>
	  <script src="lib/vue.js"></script>
	</head>
	<body>
	  <div id="app">
	  	<form @submit="submitForm($event)" action="/addproduct" method="post">
	  		<label>Title</label>
	  		<input type="text" v-model="title"> {{ title }}
	  		
	  		<label>Description</label>
	  		<textarea v-model="description"></textarea>

	  		<label>Author</label>
	  		<input type="text" v-model="author">

	  		<label>Price</label>
	  		<input type="number" v-model.number="price">

	  		<label>Categories</label>
	  		<select v-model="categories" multiple> 
	  			<option v-for="option in options" :value="option.value" >
	  				{{ option.text }}
	  			</option>
	  		</select>

	  		<label></label>
	  		<input type="submit" value="submit">
	  	</form>
	  </div>
	  <script>
	  	var vm = new Vue({
	  		el: '#app',
	  		data: {
	  			title: '',
	  			description:'',
	  			author: '',
	  			price: 0,
	  			categories: [],
	  			options: [
	  				{ text: 'GA', value : '01' },
	  				{ text: 'BB', value : '02' },
	  				{ text: 'WW', value : '03' },
	  			]
	  		},
	  		methods: {
	  			submitForm(event) {
	  				console.log(event);

	  				// validation

	  				// send server

	  				// thanks
	  				alert("cool");

	  				// block redirect
	  				event.preventDefault();
	  			}
	  		}
	  	})
	  </script>
	</body>
</html>