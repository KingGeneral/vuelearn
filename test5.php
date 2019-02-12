<!DOCTYPE html>
<html>
<head>
  <title>Belajar Vue</title>
  <script src="lib/vue.js"></script>
</head>
<body>
  <div id="app">
  	<input type="text" name="title">	
  	{{ title }}
  </div>

  <script type="text/javascript">
  	var vm = new Vue({
  	  el: "#app",
  	  data: {
  	  	title: "Mastering "
  	  }

  	})
  </script>
</body>
</html>