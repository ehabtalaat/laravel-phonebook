<template v-if="child">
		<div class="modal" id="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">informaion about {{showd[0].name}}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <div>
         <p><b>name:</b>  {{showd[0].name}}</p>
         <p><b>phone:</b> {{showd[0].phone}}</p>
         <p><b>email:</b>  {{showd[0].email}}</p>
       </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</template>
<script>
	export default{
		name:"show",
    props:["showd","child"]
	};
</script>