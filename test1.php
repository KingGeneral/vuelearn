<!DOCTYPE html>
<html>
<head>
  <title>Belajar Vue</title>
  <script src="lib/vue.js"></script>
</head>
<body>
  <div id="app">
    <h1>{{ message }}</h1>
    <h1>{{ 'Pesan - ' + message }}</h1>
  </div>

  <!-- start script -->
  <script type="text/javascript">
	  var vm = new Vue({
	  	el: '#app',
	  	data:{
	  		message: 'Hello, Ini vue'
	  	}
	  });

	  // init
	  vm.$mount('#app');
	  console.log(vm.$data);
	  console.log(vm.$data.message);
	  console.log(vm.message);
		vm.message = "Wow reaktif ya"

  </script>
  <!-- end script -->
</body>
</html>