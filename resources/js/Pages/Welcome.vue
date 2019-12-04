<template>
        <div>
            <navbar></navbar>
            <AddLineDoctor></AddLineDoctor>
        </div>

</template>
<script>
       import Navbar from "../Components/Navbar"
       import AddLineDoctor from "../Components/AddLineDoctor"
       export default {
          components:{Navbar,
            AddLineDoctor
          },
       }
</script>