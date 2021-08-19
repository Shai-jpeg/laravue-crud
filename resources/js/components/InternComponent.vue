<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  
            <div class="d-flex">
                <div>
                    <div class="ml-8 d-flex align-items-center ml-4 ">
                        <label for="paginate" class="text-nowrap mr-2 mb-0">Page</label>
                        <select
                            v-model="paginate"
                            class="form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                        </select>
                
                    <div class="ml-15 col-md-4">
                <input v-model="search" type="search" class="form-control"
                placeholder="Search"/>
            </div>
            </div>

                </div> 
        </div>

<br>

            <div class=" ml-8 overflow-x-auto">
                <div class=" ml-8 bg-white shadow-md rounded ">
                    <table class="border-collapse w-full">
            <thead>
                <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">ID</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Last Name</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">First Name</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Contact Number</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Department</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Position</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Intern Start</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Intern End</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Action</th>
        </tr>
    </thead>
    <tbody>
            <tr v-for="intern in internlists.data" :key="intern.id">
                <td class="p-3 text-center">{{ intern.id }}</td>
                <td class="p-3 text-center">{{ intern.last_name }}</td>
                <td class="p-3 text-center">{{ intern.first_name }}</td>
                <td class="p-3 text-center">{{ intern.contact_number }}</td>
                <td class="p-3 text-center">{{ intern.department }}</td>
                <td class="p-3 text-center">{{ intern.position }}</td>
                <td class="p-3 text-center">{{ intern.intern_start }}</td>
                <td class="p-3 text-center">{{ intern.intern_end }}</td>
                <td class="p-3 text-center">


                    <button class="bg-gray-500 text-center m py-1 px-1 rounded hover:bg-green-400  transition">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                         </button>
                    <button class="bg-gray-500 text-center m py-1 px-1 rounded hover:bg-green-400  transition">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                         </button>
                        <button class="bg-gray-500 text-center m py-1 px-1 rounded hover:bg-green-400  transition">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                         </button>

                </td>
            </tr>
    </tbody>
            </table>
                </div>
                    </div>

                           <div class="row mt-4">
                <div class="col-sm-6 offset-5">
                        <pagination :data="internlists" @pagination-change-page="getInternlists"></pagination>
                </div>
                </div>

                    </div>
                </div>
            </div>

        

            </div>
        </div>
</template>

<script>
export default {
     data(){
         return{
                internlists: {},
                paginate: 10,
         }
     },

       watch:{
         paginate: function(){
             this.getInternlists();     
        }
       },

     methods: {
         getInternlists(page = 1){
                axios.get('/api/internlists?page=' + page + 
           'paginate=' + this.paginate)
             .then(response =>{
                this.internlists = response.data;
        });
             
         }
     },

      mounted() {
            this.getInternlists();
    }
};
   
</script>



