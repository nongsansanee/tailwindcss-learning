<template>

<nav class="flex items-center justify-between flex-wrap bg-pink-500 p-6">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
   <svg class="fill-current  inline-block h-10 w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
     <path d="M16 2h4v15a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V0h16v2zm0 2v13a1 1 0 0 0 1 1 1 1 0 0 0 1-1V4h-2zM2 2v15a1 1 0 0 0 1 1h11.17a2.98 2.98 0 0 1-.17-1V2H2zm2 8h8v2H4v-2zm0 4h8v2H4v-2zM4 4h8v4H4V4z"/>
    </svg>
    <span class="font-semibold text-xl tracking-tight">ProgressNote</span>
  </div>

  <!-- menu button  ถ้า หน้าจอเป็นขนาด  lg คือ 1024  จะซ่อน block  -->
  <!-- div class=" flex block  lg:hidden">
    <button 
            class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white"
            @click="showDropDownMenu = !showDropDownMenu"
            >
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div -->

  <div class="block ">
    <button 
            class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white"
            >
      <svg class="fill-current h-5 w-5" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>logout</title><path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"/></svg>
    </button>
  </div>


  <!-- menu content -->
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto lg:show" v-show="showDropDownMenu" >
    <div class="text-sm lg:flex-grow">
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
        Docs
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
        Examples
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
        Blog
      </a>
    </div>
    <div>
      <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>
    </div>
  </div>
</nav>
 
    
</template>
<script>
export default {
    data(){
     return{ 
         showDropDownMenu:false,
     }

    }
}
</script>