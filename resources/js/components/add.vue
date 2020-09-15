<template>
	<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">add new one</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="form-group">
      	<label> name </label>
      	<input type="text" name="name" placeholder="name" v-model="list.name" class="form-control">
      	<div v-if="errors.name" class="alert alert-danger mt-1">{{errors.name[0]}}</div>
      </div>
       <div class="form-group">
      	<label> phone </label>
      	<input type="text" name="phone" placeholder="phone" v-model="list.phone" class="form-control">
      	<div v-if="errors.phone" class="alert alert-danger mt-1">{{errors.phone[0]}}</div>
      </div>
       <div class="form-group">
      	<label> email </label>
      	<input type="email" name="email" placeholder="email" v-model="list.email" class="form-control">
      	<div v-if="errors.email" class="alert alert-danger mt-1">{{errors.email[0]}}</div>
      </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      	<button @click="save" class="btn btn-success">save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</template>
<script>
	export default{
	data(){
		return{
			list:{
				name:"",
				phone:"",
				email:""
			},
			errors:{

			}
		};
	},
	methods:{
		save(){
			axios.post('/api/phonebook',this.list)
			.then((response)=> location.reload())
			.catch((error)=>this.errors = error.response.data.errors);
		}
	}
	};
</script>