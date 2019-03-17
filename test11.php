<!DOCTYPE html>
<html>
	<head>
	  	<title>Belajar Vue</title>
	  	<script src="lib/vue.js"></script>
	  	<style type="text/css">
		  	.card {
			    background: #efefef;
			    border:1px solid #ddd;
			    margin-right:5px;
			    padding:5px;
			    width: 200px;
			    float:left;
			}

			h3{
			    min-height: 45px;
			}
			.fade-enter-active, .fade-leave-active {
			  	transition: opacity .5s;
			}
			.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
			  	opacity: 0;
			}
	  	</style>
	</head>
	<body>
		<div id="app">
			<!-- <list></list>
			<detail></detail> -->
			<button @click="currentComponent = 'list'">List</button>
			<button @click="currentComponent = 'detail'">Detail</button>
			<transition name="fade" mode="out-in">
				<component :is="currentComponent"></component>
			</transition>
		</div>
	</body>
	<script type="text/javascript">
		var list = {
		    template: `
		    <div class="card">
		        <strong>Bahasa Pemrograman</strong>
		        <ul>
		            <li>Javascript</li>
		            <li>PHP</li>
		            <li>Java</li>
		        </ul>
		    </div>
		    `
		}

		var detail = {
		    template: `
		    <div class="card">
		        <strong>PHP</strong>
		        <p> 
		            PHP adalah singkatan dari PHP Hypertext Preprocessor.
		        </p>
		    </div>
		    `
		}

		var vm = new Vue({
			el: '#app',
			data: {
				currentComponent: 'list'
			},
			components: {
				'list' : list,
				'detail' : detail
			}
		})
	</script>
</html>