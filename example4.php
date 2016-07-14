<script type="application/javascript" src="js/vue.js"></script>
<div id="app">
	<form action="" @submit="handleIt">
		<button type="submit" @click="doSomething">
	   Submit Me!
		</button>

	</form>

</div>
<script type="application/javascript">
	new Vue({
		el: '#app',
		data: {
			newData: '',
			todos: []
		},
		methods: {
			handleIt: function () {
			alert('handle');
			},
			removeTodo: function (index) {
				this.todos.splice(index, 1)
			}
		}

	});

</script>