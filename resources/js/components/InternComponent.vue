<template>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  
            <div>
                <div>
                    <div class="d-flex align-items-center ml-4 col-span-3 py-1 px-2 ">
                        <label for="paginate" class="px-2 mt-2">Page</label>
                        <select
                            v-model="paginate"
                            class="form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                        </select>
                    </div>
                <div class="col-span-2"></div>

                    <div class="d-flex align-items-center ml-4 col-span-3 py-1 px-2">
                     <i class="fa fa-search"></i>
                <input v-model="search" type="text" name="search"
                class="rounded p-1 w-full bg-white"
                         placeholder="Search">
                          </div>
            </div>

                </div> 
        </div>
<br>
            <div class=" overflow-x-auto">
                <div class=" bg-white shadow-md rounded ">
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

                    <button @click="edit(intern)"
                    class="bg-gray-500 text-center m py-1 px-1 rounded hover:bg-green-400  transition">
                            <i class="fa fa-edit" aria-hdden="true"></i>
                         </button>

                        <button  @click="remove(intern.id)"
                        class="bg-gray-500 text-center m py-1 px-1 rounded hover:bg-green-400  transition">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                         </button>
                </td>
            </tr>
    </tbody>
            </table>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

<div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-black text-light font-semibold">Last Name</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
         type="text" name="last_name" v-model="form.last_name" />
      </div>
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-black text-light font-semibold">First Name</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
        type="text" name="first_name" v-model="form.first_name"/>
      </div>
    </div>
         <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-black text-light font-semibold">Date of Birth</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
         type="date" name="date_of_birth" v-model="form.date_of_birth"/>
      </div>
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-black text-light font-semibold">Contact Number</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
        type="text" name="contact_number" v-model="form.contact_number" />
      </div>
    </div>

   <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-black text-light font-semibold">Email Address</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
         type="email" name="email_address" v-model="form.email_address"/>
      </div>
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-black text-light font-semibold">Department</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
        type="text" name="department" v-model="form.department"/>
      </div>
    </div>

   <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-black text-light font-semibold">Required OJT Hours</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
         type="text" name="required_hours" v-model="form.required_hours" />
      </div>
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-black text-light font-semibold">Position</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
        type="text" name="position" v-model="form.position"/>
      </div>
    </div>

 <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-black text-light font-semibold">Address</label>
      <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
      type="text" name="address" v-model="form.address"/>
    </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-black text-light font-semibold">Intern Start</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
         type="date" name="intern_start" v-model="form.intern_start"/>
      </div>
      <div class="grid grid-cols-1">
        <label class="uppercase md:text-sm text-xs text-black text-light font-semibold">Intern End</label>
        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" 
        type="date" name="intern_end" v-model="form.intern_end" />
      </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  </div>
          </div>
          </div>
          </div>

                           <div class="row mt-4">
                <div class="col-sm-6 offset-5">
                        <pagination :data="internlists" @pagination-change-page="getInternlists"></pagination>
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
                search: "",
                form:{
                    last_name: null,
                    first_name: null,
                    date_of_birth: null,
                    contact_number: null,
                    email_address: null,
                    address: null,
                    department: null,
                    position:null,
                    intern_start: null,
                    intern_end: null,
                    required_hours: null
                },
                selectedId: null
         };
     },

       watch:{
         paginate: function(){
             this.getInternlists();     
        },
        search: function(){
            this.getInternlists();
        }

       },

     methods: {
         getInternlists(page = 1){
                axios.get('/api/internlists?page=' + page + 
           '&paginate=' + this.paginate +
           '&search=' + this.search) 
          .then(response =>{
                this.internlists = response.data;
        });
         
     },
            remove(internlistId){
              axios.delete('/api/internlists/' + internlistId)
              .then(response =>{
                alert("Deleted Successfully");
                this.getInternlists();
              });
            },

            edit(intern){
             
              this.form.last_name = intern.last_name;
              this.form.first_name = intern.first_name;
              this.form.date_of_birth = intern.date_of_birth;
              this.form.contact_number = intern.contact_number;
              this.form.email_address = intern.email_address;
              this.form.address = intern.address;
              this.form.department = intern.department;
              this.form.position = intern.position;
              this.form.intern_start = intern.intern_start;
              this.form.intern_end = intern.intern_end;
              this.form.required_hours = intern.required_hours;
              this.selectedId = intern.id;
               $('#editModal').modal('show');
            },

            save(){
              const vm = this;
              axios.put(`internlists/${vm.selectedId}`,{
                  last_name: this.form.last_name,
                  first_name: this.form.first_name,
                  date_of_birth: this.form.date_of_birth,
                  contact_number: this.form.contact_number,
                  email_address: this.form.email_address,
                  address: this.form.address,
                  department: this.form.department,
                  position: this.form.position,
                  intern_start: this.form.intern_start,
                  intern_end: this.form.intern_end,
                  required_hours: this.form.required_hours
              })
              .then(function(response) {
                alert("Updated Successfully");
                $('#editModal').modal('hide');
                vm.getInternlists();
              })
              .catch(function(error){
                console.log(error);
              });
            }
        
    }, 
      mounted() {
    this.getInternlists();
    }
};

</script>



