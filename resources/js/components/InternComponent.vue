<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  
            <div class="d-flex">
                <div>
                    <div class="d-flex align-items-center ml-4 ">
                        <label for="paginate" class="text-nowrap mr-2 mb-0">Per Page</label>
                        <select
                            v-model="paginate"
                            class="form-control form-control-sm">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                        </select>
                    </div>
                </div>
               
            <div class=" overflow-x-auto">
                <div class="bg-white shadow-md rounded ">
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
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Required OJT Hours</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Action</th>
        </tr>
    </thead>
    <tbody>
            <tr v-for="item in internlist" :key="item.id">
                <td class="p-3 text-center">{{ item.last_name }}</td>
                <td class="p-3 text-center">{{ item.first_name }}</td>
                <td class="p-3 text-center">{{ item.contact_number }}</td>
                <td class="p-3 text-center">{{ item.department }}</td>
                <td class="p-3 text-center">{{ item.position }}</td>
                <td class="p-3 text-center">{{ item.intern_start }}</td>
                <td class="p-3 text-center">{{ item.intern_end }}</td>
                <td class="p-3 text-center">{{ item.required_hours }}</td>
                <td class="p-3 text-center">

                    <button class="bg-gray-500 text-center m py-1 px-1 rounded hover:bg-green-400  transition">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                         </button>
                        <button class="bg-gray-500 text-center m py-1 px-1 rounded hover:bg-green-400  transition">
                            <i class="fa fa-edit" aria-hidden="true"></i>
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
    props: ('internlist'),
     data(){
         return{
             internlistList: this.internlist,
             form:{
                 last_name: null,
                 first_name: null,
                 contact_number: null,
                 department: null,
                 position: null,
                 intern_start: null,
                 intern_end: null,
                 required_hours: null

             }
         }
     },
      mounted() {
        this.getResults();
    },
    methods: {
        getResults(page = 1) {
            axios.get("/tabledata?page=" + page).then(response => {
                this.internlist = response.data;
            });
        }
    }
};
</script>



