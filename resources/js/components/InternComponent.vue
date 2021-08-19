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
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                <input v-model.lazy="search" type="search" class="form-control"/>
            </div>

                </div>
               
        </div>



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
            <tr v-for="item in internlist" :key="item.id">
                <td class="p-3 text-center">{{ item.id }}</td>
                <td class="p-3 text-center">{{ item.last_name }}</td>
                <td class="p-3 text-center">{{ item.first_name }}</td>
                <td class="p-3 text-center">{{ item.contact_number }}</td>
                <td class="p-3 text-center">{{ item.department }}</td>
                <td class="p-3 text-center">{{ item.position }}</td>
                <td class="p-3 text-center">{{ item.intern_start }}</td>
                <td class="p-3 text-center">{{ item.intern_end }}</td>
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
                internlist: {},
                
         }
     },

      mounted() {
          axios.get('/api/internlists')
             .then(response =>{
                this.internlist = response.data.data;
        });
    }
};
   
</script>



