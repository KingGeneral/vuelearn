<!DOCTYPE html>
<html>
	<head>
	  <title>Belajar Vue</title>
	  <script src="lib/vue.js"></script>
	</head>
	<body>
		<div id="app">
		    <hello-world></hello-world>
		    <component-a></component-a>
		    <component-b></component-b>
		</div>
		<hr>
		<div id="app2">
		    <component-a></component-a>
		    <component-b></component-b>
		</div>
		<hr>
		<div id="app3">aaa
			<comp-a></comp-a>
			<comp-b></comp-b>
		</div>
	</body>
	<script type="text/javascript">
		// penamaan component pada vue
		// kebab-case - my-component-name
		// PascalCase - MyComponentName

		Vue.component('hello-world', {
		    data () {
		        return {
		            message: 'Hello world!',
		            aja: 'sdddd'
		        }
		    },
		    template: '<h1> {{ message }} {{aja}}</h1>'
		});

		Vue.component('component-a',{
			template: `<p>hahaha</p>`
		})

		Vue.component('component-b',{
			template: `<p>bababa</p>`
		})
		Vue.component('component-c', { 
		    template: `<p>Component C</p>`
		})

		// var vm = new Vue({
		//     el: '#app'
		// });  
		new Vue({ el: '#app'})
		new Vue({ el: '#app2'})

		/* - - - - - - - - - - - - - - - - */

		var ComponentA = {
			template: `<p>hahaha</p>`
		}
		var ComponentB = {
			template: `<p>hahaha2</p>`
		}

		new Vue({
			el: '#app3',
			components: {
				'comp-a': ComponentA,
				'comp-b': ComponentB,
			}
		})

	</script>
</html>