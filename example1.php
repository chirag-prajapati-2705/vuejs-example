<script type="application/javascript" src="js/vue.js"></script>
<div id="app">
	{{ message }}
	{ message }

	<div>{{{ raw_html }}}</div>
	<span>This will never change: {{* message }}</span><br/>
	<input type="text" v-model="message">
	<div id="user-list">
		<div v-for="todo in users">
			{{ todo.name }}
		</div>
	</div>
	<div>
		<button v-on:click="alertMethod">Alert</button>
	</div>
	<br/>
	<div>
		<input v-model="newData">
		<button v-on:click="addData">Add Data</button>
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
	var vm=new Vue({
		el: '#app',
		data: {
			message: 'Hello Vue.js!',
			raw_html:"<html><head></head><body><div class=''>Helllolll</div></body></html>",
			users: [
				{name: 'User1'},
				{name: 'User2'},
				{name: 'User3'}
			],
			newData: '',
			todos: [
				{ text: 'Add some todos' }
			]
		},
		methods: {
			alertMethod:function(){
				alert("hello Chirag");
			},
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

	//	new Vue({
	//		el: '#user-list',
	//		data: {
	//			todos: [
	//				{ text: 'Learn JavaScript' },
	//				{ text: 'Learn Vue.js' },
	//				{ text: 'Build Something Awesome' }
	//			]
	//		}
	//	})
</script>