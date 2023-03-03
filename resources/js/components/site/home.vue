<template>
    <div class="container" id="">
        
         
        <div class="heading">
                    <h5 class="h2 mb-5 bg-light text-center text-dark">We Event It / HOME</h5> 
                </div>
      
               </div>
   
</template>

<script>
   
export default {
    
    data: () => ({
    category:{},
    catIds:[],
    emptyCat:false
    }),
    methods:{
     getCats:function(){
     let t = this; 
    const response = axios.get('http://localhost/laravel_projects/Vue_eCommerce/public/admin/manage-product').then(function(response){
    console.log(response.data);
    t.allcategory=response.data.data;
   
    });
    
  },
  
  
  removePro(id){

  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
  axios.get('http://localhost/laravel_projects/Vue_eCommerce/public/delpro/'+id).then( (data) =>{
  console.log(data)
   toastr.success(data.data.message)
              }).catch( (error) =>{})
   this.$store.dispatch("fetchpro")
  }
})

 

  }
  },
  

     mounted() { 
    // this.getCats(),
     return this.$store.dispatch("fetchpro")
      },

     computed:{ 
      allpro(){  return this.$store.getters.getpro }
     }

     

    }
</script>
