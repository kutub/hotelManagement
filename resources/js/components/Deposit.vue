<template>
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                            <p class="text-primary mb-0 hover-cursor">Analytics</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-end flex-wrap">
                        <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                            <i class="mdi mdi-download text-muted"></i>
                        </button>
                        <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                            <i class="mdi mdi-clock-outline text-muted"></i>
                        </button>
                        <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                            <i class="mdi mdi-plus text-muted"></i>
                        </button>
                        <button class="btn btn-primary mt-2 mt-xl-0">Download report</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body"> 
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Name</label>
                                    <input v-model="form.name" type="email" class="form-control" id="inputEmail4" placeholder="Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Building</label>
                                    <select v-model="form.buildings_id" @change="getFlatByBuilding($event)" id="inputState" class="form-control">
                                        <option disabled selected value="">Select Building</option>
                                        <option v-bind:value="building.id" v-for="building in buildings" v-bind:key="building.id">
                                        {{ building.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Flat</label>
                                    <select v-model="form.flats_id" id="inputState" class="form-control">
                                        <option disabled selected value="">Select Flat</option>
                                        <option v-bind:value="flat.id" v-for="flat in flatsList" v-bind:key="flat.id">
                                        {{ flat.name }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Total Rent</label>
                                    <input v-model="form.rent" type="text" class="form-control" id="inputAddress" placeholder="Total Rent">
                                </div>   
                                <div class="form-group col-md-4">
                                    <label for="inputState">Pay By</label>
                                    <select v-model="form.pay_by" id="inputState" class="form-control">
                                        <option disabled selected value="">Pay By</option>
                                        <option>Cash</option>
                                        <option>Cheque</option>
                                        <option>Bkash</option>
                                    </select>
                                </div>   
                                <div class="form-group col-md-4" style="padding-top:29px;">
                                    <a @click="onAddDeposit" type="button" style="color:#fff; font-size:20px; padding:12px" class="btn btn-success btn-lg btn-block">Save</a>
                                </div>                                
                            </div>
                            
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Building List</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>User</th>
                                    <th>First name</th>
                                    <th>Progress</th>
                                    <th>Amount</th>
                                    <th>Deadline</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-1">
                                            <img :src="'images/faces/face1.jpg'" alt="image"/>
                                        </td>
                                        <td>
                                            Herman Beck
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            $ 77.99
                                        </td>
                                        <td>
                                            May 15, 2015
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
</template>

<script>
    export default {
        data(){
            return{
                flatsList:[],
                form:{},
                buildings:[],
            }
        },
        created(){
            this.getBuilding();
        },
        methods:{
            onAddDeposit(){
                fetch('api/deposit', {
                    method: 'post',
                    body: JSON.stringify(this.form),
                    headers: {
                        'content-type': 'application/json'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    window.location.href = '/rent-receipt';
                })
                .catch(err => console.log(err))
            },
            getBuilding(){
                fetch('/api/buildings')
                .then(res => res.json())
                .then(res => {
                    this.buildings = res.data;
                    console.log(this.buildings);
                })
            },
            getFlatByBuilding(event){
                fetch('api/'+event.target.value+'/flats/')
                .then(res => res.json())
                .then(res => {
                    this.flatsList = res.data;
                    console.log(this.flatsList);
                })
            },
        }
    }
</script>
