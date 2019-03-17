<!DOCTYPE html>
<html>
<head>
  <title>Belajar Vue</title>
  <script src="lib/vue.js"></script>
</head>
<body>
  <div id="app">
    <h1 v-once>called once - {{ message }}</h1> <!-- called once -->
    <h1>can be change forever - {{ message }}</h1>
    <h1>{{ url_message }}</h1>
    <h1 v-html="url_message"></h1> <!-- open html data -->
    <h1>{{ 'Pesan - ' + message }}</h1>
    <p>{{ teks }}</p>
    <hr>
    <h1 v-bind:class="class_h1">{{ message_h1 }}</h1> <!-- class dynamic -->
    <hr>
    <p>{{ 'Total Price : ' + total_price }}</p>
    <p>{{ 'Diskon : ' + (total_price * 0.1) }}</p>
    <p>{{ 'Gender : ' + (gender ? 'male' : 'female') }}</p>
    <p>{{ (gender) ? 'yes' : 'no'}}</p>
    <p><a v-bind:href="'product-' + index">data</a></p>
    {{ a = 1 }}
    <p>{{ a }}</p>
  </div>
  <!-- app2 -->
  <hr><hr>
  <hr><hr>
  <hr><hr>
  <div id="app2"></div>

  <!-- start script -->
  <script type="text/javascript">
  // app
	  var vm = new Vue({
	  	el: '#app',
	  	data:{
	  		message : 'Hello, Ini VUE',
	  		url_message : "<span style='color:red'>Hello World!</span>",
	  		teks 	: "selamat pagi indonesia",
	  		age 	: 33, // int
	  		gender 	: true, // male
	  		hobby 	: ['coding','sleep'], // array
	  		children: {1:'Amm',2:'Faq',3:'Sya'}, //object 
	  		message_h1: 'hello with dynamic class',
	  		class_h1: 'title',
	  		total_price:10000,
	  		index: 1
	  	},
	  	beforeCreate() {
	  		// beforeCreate yaitu hook sesaat setelah objek Vue dan komponennya diinisialisasi. Properti data belum dapat diakses atau digunakan pada hook ini.
	  		console.log("before "+this.message);
	  		// alert("sdddd");
	  		// confirm('memulai VUE');
	  	},
	  	created() {
	  		// created yaitu hook ketika objek Vue telah selesai diciptakan. Pada hook ini, sifat reactivity pada properti data juga sudah didefinisikan sehingga kita sudah diizinkan untuk mengakses dan memanipulasi data. Properti computed yang digunakan untuk memonitor perubahan data juga sudah berjalan. Jika aplikasi membutuhkan request data dari server maka hook ini adalah hook yang tepat untuk melakukannya.
	  		console.log("created "+this.message);
	  	},
	  	/*
	  	created : () => {
	  		// ga guna , ga cocok sama vue
	  		console.log(this);
	  	},*/
	  	beforeUpdate() {
	  		console.log('beforeUpdate');
	  		console.log('beforeUpdate: '+
			  	'el = ' + this.$el.textContent);
				// vm.message = "Wow reaktif ya"; // active this to update vue
	  	},
	  	updated() {
	  		// this.$el.textContent = 'Content Updated';
		    console.log('update: '+
			 		'el = ' + this.$el.textContent);
			},
			beforeDestroy() {
				console.log('beforeDestroy');
			},
			Destroyed(){
				console.log('Destroyed');
			}
	  });

	  // init
	  // untuk mengarahkan mount point Vue pada saat runtime.
	  // vm.$mount('#app');

	  // test watcher
	  vm.$watch('message',function(newValue, oldValue) {
	  	console.log('Watcher : Var Message changed from '+
	  		oldValue + ' into ' + newValue
	  	);
	  });

	  // call vue
		vm.message = "Wow reaktif ya";

	  // console.log(vm.$data);
	  // console.log(vm.$data.message);
	  // console.log(vm.message);

  </script>
  <script type="text/javascript">
	  // app2
	  var vm2 = new Vue({
	  	// el: '#app2',
	  	data:{
	  		message: 'hohoho ini app2',
	  	},
	  	// jika properti template dan render dua-duanya ada maka properti template akan diabaikan.
	  	// template: "<h1>{{ message }}</h1>"
	  	render(createElement) {
	  		return createElement('h1', this.message);
	  	}
	  })
	  vm2.$mount('#app2');

  </script>
  <!-- end script -->
</body>
</html>