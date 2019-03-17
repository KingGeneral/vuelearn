<!DOCTYPE html>
<html>
	<head>
	  	<title>Belajar Vue</title>
	  	<script src="lib/vue.js"></script>
	</head>
	<body>
		<div id="app"></div>
	</body>
	<script type="text/javascript">
		var MixinHello = {
			created: function() {
				this.hello()
			},
			methods: {
				hello: function() {
					console.log('hehehehe mixins');
					alert('mixins');
				}
			}
		}

		var vm = new Vue({
			el: '#app',
			mixins: [
				MixinHello
			]
		})

		/*
		// inject a handler for `text` custom option
			Vue.mixin({
			  created: function () {
			    let text = this.$options.text
			    if (text) {
			      console.log(text)
			    }
			  }
			})

			new Vue({
			  text: 'hello!'
			})
			// => "hello!"
		*/
	</script>
</html>