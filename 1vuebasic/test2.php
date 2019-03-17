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
	  <p>{{ fullName | upper }}</p> <!-- filter -->
	  <p>{{ message | upper }}</p> <!-- filter -->
	  <p>{{ message | upperouter }}</p> <!-- filter -->
	  <p>{{ message | upper | reverse }}</p>
	  <p> {{ price | formatCurrency('USD') }} </p>
		<p> {{ price | formatCurrency('IDR') }} </p>
  </div>

  <!-- start script -->
  <script type="text/javascript">

  	Vue.filter('upperouter', function (value) {
		  return value.toUpperCase()
		});

  	var vm = new Vue({
  		el:'#app',
  		data:{
  			counter: 0,
  			firstName: 'Anthony',
  			lastName: 'Kal',
  			message: 'Hello World',
  			price: 500000
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
  		},
  		// properti filters yang dapat berisi fungsi untuk digunakan memanipulasi tampilan atau format 
  		filters: {
  			upper(text) {
  				return text.toUpperCase();
  			},
  			reverse(text) {
  				return text.split('').reverse().join('');
  			},
  			formatCurrency(value, currency) {
  				var formatter = new Intl.NumberFormat('id-ID',{
  					style: 'currency',
  					currency: currency,
  					minimumFractionDigits: 2.
  				});
					return formatter.format(value);  				
  			}
  		}
  	});

  	/*
		<!-- filters -->
			<h1>Filters: {{ message | upper }}</h1>
		<!-- methods -->
			<h1>Methods: {{ upper(message) }}</h1>
		<!-- computed -->
			<h1>Computed: {{ messageUpperCase }}</h1>
  	*/

  	// auto interval
  	setInterval( () => {
  		vm.timeNow; // not changed
  		console.log("aa");
  	},1000);
  </script>
  <!-- end script -->
</body>
</html>