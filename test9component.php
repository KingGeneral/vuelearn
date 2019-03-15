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
			<book
				title="C++ oyee"
				description="aaaa bbbb cccc dddd eeee"
				image="book1.png"
			>
			</book>
		</div>
	</body>
	<script type="text/javascript">
		var BookComponent = {
			data() {
				return {
					classCard: 'card'
				}
			},
			// props : mekanisme untuk mengirimkan atau mengeset suatu data pada component 
			props: ['title','description','image'],
			template:`
				<div :class="classCard">
					<h3>{{ title }}</h3>
					<img :src="'img/books/'+image" style="width:100%"></img>
					<p v-html="description"></p>
				</div>
			`
		};

		new Vue({
			el:'#app',
			components: {
				'book': BookComponent
			}
		});
	</script>
</html>