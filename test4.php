<!DOCTYPE html>
<html>
<head>
  <title>Belajar Vue</title>
  <script src="lib/vue.js"></script>
</head>
<body>
  <div id="app"></div>
  <script type="text/javascript">
  	var vm = new Vue({
  		el: '#app',
  		data: {
  			book: [
  				'C++ High Performance', 
            	'Mastering Linux Security and Hardening', 
            	'Python Programming Blueprints', 
            	'Mastering PostgreSQL 10'
            ]
  		}
  	});
  </script>
</body>