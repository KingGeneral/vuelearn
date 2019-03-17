export const BookNew = {
	data () {
		return {
			classCard: 'card',
		}
	},
	props: ['book'],
	template: `
				<div :class="classCard">
					<h3>{{ book.title }}</h3>
					<img :src="'img/books/'+book.image" style="width:100%">
					<p v-html="book.description"></p>
					<button @click="$emit('selected', book.title)"> Select </button>
				</div>
			`
}