<script type="application/javascript" src="js/vue.js"></script>
<body>
<input type="text" v-model="first">
<input type="text" v-model="last">
<p>{{fullName}}</p>
</body>
<script type="application/javascript">
	new Vue({
		el: 'body',
		data:{
			first:'Chirag',
			last:'Prajapati',
		},
		computed:{
			fullName:function(){
				return this.first+'-'+this.last;
			}
		}
	});

</script>