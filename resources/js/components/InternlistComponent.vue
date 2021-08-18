<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  
            <div class="d-flex">
                <div>
                    <div class="d-flex align-items-center ml-4 ">
                        <label for="paginate" class="text-nowrap mr-2 mb-0"
                            >Per Page</label
                        >
                        <select
                            v-model="paginate"
                            class="form-control form-control-sm"
                        >
                            <option value="1">1</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                        </select>
                    </div>
                </div>
               <div class="ml-8 pt-2 relative mx-auto text-gray-600">
        <input v-model.lazy="search" class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
          type="search" name="search" placeholder="Search">
               
            </div>
            <div class="ml-8 overflow-x-auto">
                <div class="ml-8 bg-white shadow-md rounded ">
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
            <tr v-for="item in internList" :key="item.id">
                <td class="p-3 text-center">{{ item.last_name}}</td>
                <td class="p-3 text-center">{{ item.first_name}}</td>
                <td class="p-3 text-center">{{ item.contact_number}}</td>
                <td class="p-3 text-center">{{ item.department}}</td>
                <td class="p-3 text-center">{{ item.position}}</td>
                <td class="p-3 text-center">{{ item.intern_start}}</td>
                <td class="p-3 text-center">{{ item.intern_end}}</td>
                <td class="p-3 text-center">{{ item.required_hours}}</td>
                <td class="p-3 text-center">

                    <button class="bg-gray-500 text-center m py-2 px-2 rounded hover:bg-green-400  transition">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                         </button>
                        <button class="bg-gray-500 text-center m py-2 px-2 rounded hover:bg-green-400  transition">
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
    props: ('internlists'),
     data(){
         return{
             internlistList: this.internlist,
             form:{
                 last_name: null,
                 first_name: null,
                 date_of_birth: null,
                 contact_number: null,
                 email_address: null,
                 address: null,
                 department: null,
                 position: null,
                 intern_start: null,
                 intern_end: null,
                 required_hours: null

             }
         }
     },
     methods:{
         submit(){
             const vm= this;
             axios.post('/internlist', this.form)
             .then(function (response){
                 vm.internList.push(response.data.data);
                 vm.form.last_name = null
                 vm.form.first_name = null
                 vm.form.date_of_birth = null
                 vm.form.contact_number= null
                 vm.form.email_address = null
                 vm.form.address = null
                 vm.form.department =null
                 vm.form.position = null
                 vm.form.intern_start = null
                 vm.form.intern_end = null
                 vm.form.required_hours = null
             })
             .catch(function (error){
                 alert('Something went wrong')
             });
         }
     }
}
</script>