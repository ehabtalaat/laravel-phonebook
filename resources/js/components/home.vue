<template>
	<div class="container">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">
					<h3 class="float-left">phone book</h3>
					<input type="button" class="btn btn-success float-right" value="add New"  data-toggle="modal" data-target="#myModal">
				</div>
				<div class="card-body">
				<input type="search" placeholder="search..." class="form-control" v-model="searchQuery">
				</div>

				<div class="card-footer" v-for="(all,index) in temp">
					{{all.name}}
			<show :showd="showd" :child="child"></show>
			<update :editd="editd" :father="father"></update>
        <div class="float-right">
     <i class="fa fa-eye pl-10"  data-toggle="modal" data-target="#exampleModal" @click="showdata(all.id)"></i><i class="fa fa-edit mr-10" data-toggle="modal" data-target="#myModal2" @click="editdata(all.id)"></i> 
     <i class="fa fa-trash-alt" @click="deleted(all.id)"></i>
					</div>			
				</div>
			</div>

		</div>
		 <add />
	</div>

</template>
<script>
import add from './add.vue'
import show from './show.vue'
import update from './update.vue'
	export default{
		data(){
			return{
				child:false,
				father:false,
				data:{
				},
				showd:[],
				editd:[],
				temp:{},
				searchQuery:""
			};
		},
		components:{
			add,show,update
		},
		created(){
			axios.post('/api/phonebook/getdata')
			.then((response)=> this.data = this.temp= response.data
				);
		},
	methods:{
		showdata(index){
			axios.post(`/api/phonebook/get/${index}`).
			then((response) =>{ this.showd = response.data;
				this.child = true;
			})
			.catch((error) => console.log(error))
		},
		editdata(phonebook){
		axios.get(`/api/phonebook/${phonebook}/edit`).
		then((response) =>{ this.editd = response.data;
		this.father = true;
			})
		.catch((error) => console.log(error))
		},
	  deleted(index){
	  	if(confirm('are you sure?')){
	  	axios.delete(`/api/phonebook/${index}`).
	  	then((response) => location.reload())
	  	.catch((error)=> {console.log(error)})
	  }
	}
	},
	watch:{
		searchQuery(){
		if(this.searchQuery.length > 0){
		 this.temp = this.data.filter((item)=>{
				return item.name.toLowerCase().indexOf(this.searchQuery.toLowerCase())>-1
			});
		}
		else{
			this.temp = this.data;
			}
		}
	}
	};
</script>
<style>
.fa{
	margin-left: 40px;
	font-size: 15px;
	cursor: pointer; 
}
.card-header{
	background-color: #0a97b0;
	color: #b52b65;
	font-style: italic;
	font-weight: bold;
	font-size: 1.6rem !important;
}
.btn{
	background-color: #006a71 !important;
	border: none;
	border-radius: 0px;
	outline: none;
	color: #fff;
	font-style: italic;
	font-size: 1.2rem;
	font-weight: bold;
}
.modal-header{
	background-color: #0a97b0 !important;
	color: #b52b65;
}
label{
	color: #b52b65;
	font-size: 1.1rem;
}
input{
	border: none;
	border-radius: 0px;
}
p{
	color: #b52b65;
	font-size: 1.2rem;
	font-style: italic;
}
b{
	font-weight: bold;
	font-size: 1.2rem;
	font-style: italic;
}
 input[type=search]{
 	border: 2px solid #0a97b0;
 	border-radius: 0px;
    color: #0a97b0;
 }
  input[type=search]:hover{
 	border: 2px solid #0a97b0;
 	border-radius: 0px;
    outline: none;
 }
.card-footer{
	background-color: #006a71 !important;
	color: #fff;
	font-style: italic;
	font-weight: bold;
	font-size: 1.5rem;
}
</style>