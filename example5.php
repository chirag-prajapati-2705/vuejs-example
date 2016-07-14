<script type="application/javascript" src="js/vue.js"></script>
<div id="app">
	<counter subject="Likes"></counter>
	<counter subject="Dislikes"></counter>

</div>
	<template id="counter-template">
		<h1>{{subject}}</h1>
		<button @click="count+=1">{{count}}</button>
	</template>

<script type="application/javascript">
	new Vue({
		el: '#app',
		components:{
			counter:{
				template:'#counter-template',
				props:['subject'],
				data:function(){
					return {count:0};
				}
			}
		}
	});

</script>