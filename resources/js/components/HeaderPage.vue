<template>
	<div>
		  <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">phone book</a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <router-link to="/api/phonebook" class="nav-link">home</router-link>
                </li>
             
                <li class="nav-item">
                 <router-link to="/api/phonebook/about" class="nav-link">about</router-link>
                </li>
              </ul>
            </div>
          </div>
          </nav>
          <router-view ></router-view>
	</div>
</template>
<script>

	export default{
   components:{
    
   }
	};
</script>
<style scoped>
  nav{
    background-color: #0a97b0;
  }
  .nav-link{
   color: #b52b65 !important;
   font-style: italic;
   font-weight: bold;
   font-size: 1.4rem;
  }
  .navbar-brand{
  color: #b52b65;
   font-style: italic;
   font-weight: bold;
   font-size: 1.6rem;
  }
  .navbar-brand:hover{
    color: #b52b65;
  }
</style>