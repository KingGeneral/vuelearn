<!DOCTYPE html>
<html>
<head>
  <title>Belajar Vue</title>
  <script src="lib/vue.js"></script>
</head>
<body>
  <div id="app">{{ counter }}
	  <button onclick="vm.increment()"> + </button>
	  <p>{{ fullName }}</p>
	  <p>{{ timeNow }}</p>
  </div>

  <!-- start script -->
  <script type="text/javascript">
  	var vm = new Vue({
  		el:'#app',
  		data:{
  			counter: 0,
  			firstName: 'Anthony',
  			lastName: 'Kal'
  		},
  		// Properti methods dapat berisi fungsi-fungsi (Javascript tentunya) yang dapat dipanggil disemua tempat pada aplikasi berbasis Vue. 
  		methods:{
  			increment(){
  				this.counter++;
  			}
  		},
  		// computed umumnya mengembalikan nilai (return value).
  		computed: {
  			fullName: function() {
  				return this.firstName + ' ' + this.lastName;
  			},
  			timeNow: function() {
  				return Date.now();
  			}
  		}
  	});

  	// auto interval
  	setInterval( () => {
  		vm.timeNow; // not changed
  		console.log("aa");
  	},1000);
  </script>
  <!-- end script -->
</body>
</html>