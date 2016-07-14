<script type="application/javascript" src="js/vue.js"></script>
<div id="app">
	<div>
		<input v-model="newData">
		<button v-on:click="addData">Add Data</button>
		<!--<input v-model="newData" v-on:keyup.enter="addData">-->
		<ul>
			<li v-for="todo in todos">
				<span>{{ todo.text }}</span>
				<button v-on:click="removeTodo($index)">X</button>
			</li>
		</ul>
	</div>

	<p v-if="greeting">Hello!</p>

</div>

<script type="application/javascript">
	new Vue({
		el: '#app',
		data: {
			newData: '',
			todos: []
		},
		methods: {
			addData: function () {
				var text = this.newData.trim()
				if (text) {
					this.todos.push({ text: text })
					this.newData = ''
				}
			},
			removeTodo: function (index) {
				this.todos.splice(index, 1)
			}
		}

	});

</script>