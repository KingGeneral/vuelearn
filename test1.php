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
    <p>{{ teks }}</p>
  </div>

  <!-- start script -->
  <script type="text/javascript">
	  var vm = new Vue({
	  	el: '#app',
	  	data:{
	  		message : 'Hello, Ini VUE',
	  		teks 	: "selamat pagi indonesia",
	  		age 	: 33, // int
	  		gender 	: true, // male
	  		hobby 	: ['coding','sleep'], // array
	  		children: {1:'Amm',2:'Faq',3:'Sya'} //object 
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
			  'el = ' + this.$el.textContent)
				// vm.message = "Wow reaktif ya"; // active this to update vue
	  	},
	  	updated() {
	  		// this.$el.textContent = 'Content Updated';
		    console.log('update: '+
			  'el = ' + this.$el.textContent)
			},
	  });

	  // init
	  // untuk mengarahkan mount point Vue pada saat runtime.
	  vm.$mount('#app');

	  // test
	  

	  // call vue
		// vm.message = "Wow reaktif ya";

	  // console.log(vm.$data);
	  // console.log(vm.$data.message);
	  // console.log(vm.message);

  </script>
  <!-- end script -->
</body>
</html>