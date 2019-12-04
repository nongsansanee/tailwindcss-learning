<template>
        <div>
            <navbar></navbar>
            <Login></Login>
        </div>

</template>
<script>
       import Navbar from "../Components/Navbar"
       import Login from "../Components/Login"
       export default {
          components:{
              Navbar,
              Login
          },
       }
</script>