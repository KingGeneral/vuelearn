<!DOCTYPE html>
<html>
<head>
  <title>Belajar Vue</title>
  <script src="lib/vue.js"></script>
</head>
<body>
  <div id="app">

    <!-- one way bindings -->

    <!-- v-on = @ -->
  	<input type="text" name="title" :value="title" @input="title = $event.target.value">	
  	{{ title }}

    <hr>
    
    <!-- v-model untuk two way bindings -->
    <input type="text" name="title" v-model="title" placeholder="masukan judul">
    {{title}}
    <br><br>
    <textarea name="description" v-model="description" placeholder="masukan deskripsi"></textarea>
    {{description}}

    <!-- text -->
    <!-- Modifier number digunakan untuk memastikan input data dari user bertipe numeric -->
    <input type="number" name="price" v-model.number="price">
    {{price}}
    <input type="text" name="title" v-model.trim="title" placeholder="masukan judul">
    {{title}}

    <!-- radio -->
    <br>
    Paket
    <br>
    <label for="r1">
      <input type="radio" name="bukuA" value="A" id="r1" v-model="paket">Laravel
    </label>
    
    <label for="r2">
      <input type="radio" name="bukuA" value="B" id="r2" v-model="paket">
      Vue
    </label>

    <label for="r3">
      <input type="radio" name="bukuA" value="C" id="r3" v-model="paket">
      Laravel + Vue
    </label>
    <br>
    <span>Pilihan Paket : {{paket}}</span>

    <br>
    <br>
    <!-- select -->
    <select name="category" v-model="category">
      <option disabled value="">Please Select</option>
      <option value="01">Graphic Programming</option>
      <option value="02">Mobile Development</option>
      <option value="03">Virtual AR</option>
    </select>
    <br>
    <span>Select : {{category}}</span>

    <br>
    <br>
    <!-- boolean -->
    Gender : 
    <input type="checkbox" name="checkbox" v-model="gender">
    <label for="checkbox">{{ gender }}</label>

    <!-- select -->
    <select name="gender" v-model="gender">
      <option value="false">Wanita</option>
      <option value="true">Pria</option>
    </select>

    <!-- array  data -->
    <br>
    Hobi <br>
    <input type="checkbox" name="hobby1" value="AA" v-model="hobby">
    <input type="checkbox" name="hobby1" value="BB" v-model="hobby">
    <input type="checkbox" name="hobby1" value="CC" v-model="hobby">
    <span>Pilihan hobi: {{hobby}}</span>

    <br>
    categories <br>
    <select v-model="categories" multiple>
      <option value="01">GP</option>
      <option value="02">MA</option>
      <option value="03">VR</option>
    </select>
    <span>Selected: {{ categories }}</span>

    <br>
    <br>
    <select name="categories2" v-model="categories2" multiple>
      <option v-for="option in options" :value="option.value">
        {{ option.text }}
      </option>
    </select>
    <span>Selected: {{ categories2 }}</span>

  </div>

  <script type="text/javascript">
  	var vm = new Vue({
  	  el: "#app",
  	  data: {
        // title: "Mastering ",
  	  	title: '',
        description: '',
        price: '',
        paket: '',
        category:'',
        gender: true,
        hobby:[],
        categories:[],  
        categories2:[],  
        options: [
          {text:'Graph 1',value:'01'},
          {text:'Graph 2',value:'02'},
          {text:'Graph 3',value:'03'},
        ]
  	  }

  	})
  </script>
</body>
</html>