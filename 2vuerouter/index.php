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
				<router-link to="/books">Books</router-link> 
			</p>
			<router-view></router-view>
		</div>
	</body>
  	<!-- <script src="js/BooksComponent.js"></script> -->
	<!-- <script type="module">
		import { BooksComponent } from './js/BooksComponent.js';
	</script> -->
	<script type="text/javascript">
		// definisikan konfigurasi component
		const Home = { template: '<div>Halaman Home</div>' }
		const About = { template: '<div>Halaman About</div>' }
		const BooksComponent = {
		    data () {
		        return {
		            books: [
		                {
		                    id: 99,
		                    title: 'C++ High Performance',
		                    description: 'Write code that scales across CPU registers, multi-core, and machine clusters',
		                    authors: 'Viktor Sehr, Björn Andrist',
		                    publish_year: 2018,
		                    price: 100000,
		                    image: 'c++-high-performance.png'
		                },
		                {
		                    id: 100,
		                    title: 'Mastering Linux Security and Hardening',
		                    description: 'A comprehensive guide to mastering the art of preventing your Linux system from getting compromised',
		                    authors: 'Donald A. Tevault',
		                    publish_year: 2018,
		                    price: 125000,
		                    image: 'mastering-linux-security-and-hardening.png'
		                },
		                {
		                    id: 101,
		                    title: 'Mastering PostgreSQL 10',
		                    description: 'Master the capabilities of PostgreSQL 10 to efficiently manage and maintain your database',
		                    authors: 'Hans-Jürgen Schönig',
		                    publish_year: 2016,
		                    price: 90000,
		                    image: 'mastering-postgresql-10.png'
		                },
		                {
		                    id: 102,
		                    title: 'Python Programming Blueprints',
		                    description: 'How to build useful, real-world applications in the Python programming language',
		                    authors: 'Daniel Furtado, Marcus Pennington',
		                    publish_year: 2017,
		                    price: 75000,
		                    image: 'python-programming-blueprints.png'
		                },
		            ]
		        }
		    },
		    template: `
		        <div>
		            <h1>Daftar Buku</h1>
		            <ul>
		                <li v-for="book of books">
		                    <router-link :to="'/book/'+book.id"> 
		                        {{ book.title }} 
		                    </router-link>
		                </li>
		            </ul>
		        </div>
		    ` 
		}
		const BookComponent = {
		    data () {
		        return {
		            books: [
		                {
		                    id: 99,
		                    title: 'C++ High Performance',
		                    description: 'Write code that scales across CPU registers, multi-core, and machine clusters',
		                    authors: 'Viktor Sehr, Björn Andrist',
		                    publish_year: 2018,
		                    price: 100000,
		                    image: 'c++-high-performance.png'
		                },
		                {
		                    id: 100,
		                    title: 'Mastering Linux Security and Hardening',
		                    description: 'A comprehensive guide to mastering the art of preventing your Linux system from getting compromised',
		                    authors: 'Donald A. Tevault',
		                    publish_year: 2018,
		                    price: 125000,
		                    image: 'mastering-linux-security-and-hardening.png'
		                },
		                {
		                    id: 101,
		                    title: 'Mastering PostgreSQL 10',
		                    description: 'Master the capabilities of PostgreSQL 10 to efficiently manage and maintain your database',
		                    authors: 'Hans-Jürgen Schönig',
		                    publish_year: 2016,
		                    price: 90000,
		                    image: 'mastering-postgresql-10.png'
		                },
		                {
		                    id: 102,
		                    title: 'Python Programming Blueprints',
		                    description: 'How to build useful, real-world applications in the Python programming language',
		                    authors: 'Daniel Furtado, Marcus Pennington',
		                    publish_year: 2017,
		                    price: 75000,
		                    image: 'python-programming-blueprints.png'
		                },
		            ],
		        }
		    },
		    computed: {
		        book() {
		            return this.books.filter((book)=>{
		                return book.id === parseInt(this.$route.params.id)                
		            })[0]
		        }
		    },
		    template: `
		        <div v-if="book">
		            <h1>Buku {{ book.title }}</h1>
		            <ul>
		                <li v-for="(num, value) of book">
		                    {{ num +' : '+ value }} <br>
		                </li>
		            </ul>
		        </div>
		    ` 
		}

		// mapping route path dengan componentnya
		const routes = [
			{ path: '/', component: Home, alias: '/home'},
			{ path: '/about', component: About},
			// { path: '/book/:id', component: Book },
			// { path: '/books', component: BooksComponent },
			{ path: '/books', component: BooksComponent },
			{ path: '/book/:id', component: BookComponent },
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