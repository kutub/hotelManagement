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
                                    <label for="inputEmail4">Name of Expenses</label>
                                    <input v-model="form.expensesName" type="email" class="form-control" id="inputEmail4" placeholder="Name of Expenses">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Created By</label>
                                    <input v-model="form.name" type="email" class="form-control" id="inputEmail4" placeholder="Created By">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Total Ammount</label>
                                    <input v-model="form.total" type="email" class="form-control" id="inputEmail4" placeholder="Total Ammount">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-10">
                                    <label for="exampleTextarea1">Remarks</label>
                                    <textarea v-model="form.comment" class="form-control" id="exampleTextarea1" rows="2" placeholder="Remarks"></textarea>
                                </div>
                                <div class="form-group col-md-2" style="padding-top:39px;">
                                    <a @click="onSaveExpenses" type="button" style="color:#fff; font-size:20px; padding:12px" class="btn btn-success btn-lg btn-block">Save</a>
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
                form:{},
            }
        },
        created(){
            // this.getBuilding();
        },
        methods:{
            onSaveExpenses(){
                console.log(this.form);
                fetch('api/expenses', {
                    method: 'post',
                    body: JSON.stringify(this.form),
                    headers: {
                        'content-type': 'application/json'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    window.location.reload();
                })
                .catch(err => console.log(err))
            },
            // getBuilding(){
            //     fetch('/api/buildings')
            //     .then(res => res.json())
            //     .then(res => {
            //         this.buildings = res.data;
            //         console.log(this.buildings);
            //     })
            // },
        }
    }
</script>
