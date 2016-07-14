<script type="application/javascript" src="js/vue.js"></script>
<body>
<input type="text" v-model="points">
<P>skill: {{skill}} </P>

</body>
<script type="application/javascript">
	new Vue({
		el: 'body',
		data:{
			points:10,
		},
		computed:{
			skill:function(){

				if(this.points>52){
					return 'Begginers';
				}
				return 'Advanced';
			}
		}
	});

</script>