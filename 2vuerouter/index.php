<!DOCTYPE html>
<html>
	<head>
	  	<title>Belajar Vue</title>
	  	<script src="lib/vue.js"></script>
	  	<script src="lib/vue-router.js"></script>
	  	<style type="text/css">
	  	</style>
	</head>
	<body>
		<div id="app">
			<p>
				<router-link to="/">Home</router-link>
				<router-link to="/about">About</router-link>
			</p>
			<router-view></router-view>
		</div>
	</body>
	<script type="text/javascript">
		// definisikan konfigurasi component
		const Home = { template: '<div>Halaman Home</div>'}
		const About = { template: '<div>Halaman About</div>'}

		// mapping route path dengan componentnya
		const routes = [
			{ path: '/', component: Home, alias: '/home'},
			{ path: '/about', component: About},
			{ path: '*', redirect: '/' }
		]

		// register routes pada objek router
		const router = new VueRouter({
			// routes:routes // version long
			routes // version short 
		})

		// register objek router pada objek Vue
		var vm = new Vue({
			el: '#app',
			router,
		})

		/*
		Dengan menggunakan Vue Router ini maka seluruh routing yang pernah kita klik akan tersimpan di-history browser sehingga ketika user mengklik button back, URL akan sesuai dengan routing yang terakhir kali diakses.

		Catatan: current route bisa kita akses dalam objek Vue dengan perintah this.$route.path atau pada template dengan perintah {{ $route.path }}.
		*/

	</script>
</html>