<!DOCTYPE html>
<html>
	<head>
	  <title>Belajar Vue</title>
	  <script src="lib/vue.js"></script>
	  <style>
			form {
			    border: 1px solid #ddd;
			    padding:5px;
			    width:225px;
			    background: #efefef;
			}
			label{
			    display: block;
			    margin-top: 5px;
			}

			input, textarea, select, option {
			    min-width: 200px;
			}
		</style>
	</head>
	<body>
	  <div id="app">
  		<form ref="formBook" @submit.prevent="submitForm($event)" action="/add-product" method="post">

	  		<p v-if="errors.length">
	  			<b>Error terdaftar : </b>
	  			<ul>
	  				<li v-for="error in errors">{{ error }}</li>
	  			</ul>
	  		</p>

	  		<label>Title</label>
	  		<input type="text" v-model="title" ref="title"> {{ title }}
	  		
	  		<label>Description</label>
	  		<textarea v-model="description" ref="description"></textarea>

	  		<label>Author</label>
	  		<input type="text" v-model="author" ref="author">

	  		<label>Price</label>
	  		<input type="number" v-model.number="price" ref="price">

	  		<label>Categories</label>
	  		<select v-model="categories" multiple ref="categories"> 
	  			<option v-for="option in options" :value="option.value" >
	  				{{ option.text }}
	  			</option>
	  		</select>

	  		<label>Cover:</label>
	  		<input type="file" ref="cover" name="cover">

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
	  			],
	  			errors:[]
	  		},
	  		methods: {
	  			submitForm(event) {

	  				// - - - - - internal 
	  				this.errors = [];

	  				// - - - - - init 
	  				// let error = 0;

	  				// - - - - - validation

	  				if(this.title.length < 3){
	  					// error++;
	  					this.$refs.title.focus(); // directive ref
	  					// this.$refs.title.select(); // directive ref
	  					// alert('Title minimal 3 Karakter');
	  					this.errors.push('Title minimal 3 Karakter');
	  				}else if(this.description.length <= 0 || this.description.length > 500){
	  					// error++;
	  					this.$refs.description.focus(); // directive ref
	  					// alert('Description maximal 500 karakter!');
	  					this.errors.push('Description maximal 500 karakter!');
	  				}else if(this.author.length < 3){
	  					// error++;
	  					this.$refs.author.focus(); // directive ref
	  					// alert('Authors minimal 3 karakter!');
	  					this.errors.push('Authors minimal 3 karakter!');
	  				}else if(this.price <= 0){
	  					// error++;
	  					this.$refs.price.focus(); // directive ref
	  					// alert('Price tidak boleh minus!');
	  					this.errors.push('Price tidak boleh minus!');
	  				}else if(this.categories.length === 0){
	  					// error++;
	  					this.$refs.categories.focus(); // directive ref
	  					// alert('Pilih minimal 1 category!');
	  					this.errors.push('Pilih minimal 1 category!');
	  				}
	  				// console.log(event);
	  				
	  				// - - - - - thanks
	  				/*
	  				if(error === 0){
		  				alert("cool");
	  				}
					*/
					if(this.errors.length === 0 ){
		  				// alert("cool");
						// - - - - - preparing data
		  				let formData = new FormData();
		  				let cover = this.$refs.cover.files[0];

		  				formData.append('title',this.title);
		  				formData.append('description',this.description);
		  				formData.append('author',this.author);
		  				formData.append('price',this.price);
		  				formData.append('categories',this.categories);
		  				formData.append('cover',cover);

		  				// let formBook = this.$refs.formBook;
		  				// formData = new FormData(formBook);

	  					// - - - - - send server
	  					let xhttp = new XMLHttpRequest(); // create objek XMLHttp

	  					xhttp.onreadystatechange = function() {
	  						// state ini menunjukkan data terkirim dan diterima server dengan baik
					        if (this.readyState == 4 && this.status == 200) {
					        	console.log(this.responseText)
					        }
	  					}

	  					// sesuaikan dengan lokasi file index.php di lokasi komputer kamu
					    // xhttp.open("POST", "http://localhost/vuelearn/addproduct.php", true);
					    xhttp.open("POST", "addproduct.php", true);

					    // kirim objek formData
					    xhttp.send(formData);
					}

	  				// block redirect
	  				// event.preventDefault();
	  				// sudah digantikan dengan @submit.prevent
	  			}
	  		}
	  	})
	  </script>
	</body>
</html>