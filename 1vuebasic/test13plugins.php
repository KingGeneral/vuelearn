<!DOCTYPE html>
<html>
	<head>
	  	<title>Belajar Vue</title>
	  	<script src="lib/vue.js"></script>
	</head>
	<body>
		<!-- Masih error -->
		<div id="app"></div>
	</body>
	<script type="text/javascript">
		MyPlugin.install = function (Vue, options) {
		  // 1. add global method or property
		  Vue.myGlobalMethod = function () {
		    // something logic ...
		    alert('called plugins');
		  }

		  // 2. add a global asset
		  Vue.directive('my-directive', {
		    bind (el, binding, vnode, oldVnode) {
		      // something logic ...
		    }
		    // ...
		  })

		  // 3. inject some component options
		  Vue.mixin({
		    created: function () {
		      // something logic ...
		    }
		    // ...
		  })

		  // 4. add an instance method
		  Vue.prototype.$myMethod = function (methodOptions) {
		    // something logic ...
		  }
		}

		// cara pakai 
		Vue.use(MyPlugin)

		// jika ada option
		// Vue.use(MyPlugin, { someOption: true })
	</script>
</html>