<template v-if="father">
	<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">update information {{editd.name}}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="form-group">
      	<label>name</label>
      	<input type="text" name="name" placeholder="name"  class="form-control" v-model="editd.name" >
      </div>
       <div class="form-group">
      	<label> phone </label>
      	<input type="text" name="phone" placeholder="phone"  class="form-control" v-model="editd.phone" >
      </div>
       <div class="form-group">
      	<label> email </label>
      	<input type="email" name="email" placeholder="email" class="form-control" v-model="editd.email" 
       
        >
      </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      	<button  class="btn btn-success" @click="update(editd.id)">update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</template>
<script>
	export default{
    props:["father","editd"],

	data(){
		return{
      
    }
	},
 
	methods:{
		update(phonebook){
      axios.put(`/api/phonebook/${phonebook}`,this.editd).
     then((response) => location.reload())
    .catch((error) => console.log(error));

    }
	}
	};
</script>