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
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Building List</h4>
                        <a data-toggle="modal" @click="testClick" data-target="#newStock" class="btn btn-primary" style="color:#fff"><i class="mdi mdi-plus text-muted"></i> Add Building</a>
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
        
        <!-- Modal -->
        <div id="newStock" class="modal fade" role="dialog">

            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="background: #3c8dbc; color: #fff">
    
                        <span><button style="padding:0;margin:0;float:left" type="button" class="close" data-dismiss="modal">&times;</button></span>
                        <h4 class="modal-title">Add Building</h4>
                    </div>
                   <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add New Buildings</h4>
                                    <form  @submit.prevent="AddData">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input v-model="form.name" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                                        </div>
                                        <!-- <div class="form-group">
                                        <label>File upload</label>
                                        <input type="file" name="img[]" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                            <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span>
                                        </div>
                                        </div> -->
                                            <div class="form-group">
                                            <label for="exampleInputCity1">Landmark</label>
                                            <input v-model="form.landmark" type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                                        </div>
                                            <div class="form-group">
                                            <label for="exampleInputCity1">Total Flat</label>
                                            <input v-model="form.totalFlat" type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Total Floor</label>
                                            <input v-model="form.totalFloor" type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Gatekeeper</label>
                                            <input v-model="form.gatekeeper" type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Gatekeeper</label>
                                            <input v-model="form.gatekeeper" type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Contact</label>
                                            <input v-model="form.mobile" type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Address</label>
                                            <textarea v-model="form.address" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                        </div>
                                        <a class="btn btn-primary mr-2" @click="AddData">Submit</a>
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
                               
            </div>
            
        </div>
      <!--====  End of module add Product  ====-->
</div>
</template>

<script>
    import exampleForm from "./ExampleForm.vue";
    export default {
        components: {

            exampleForm
        },
        data(){
           return {
               form:{}
           }
        },
        created(){
        },
        methods:{
            formSubmit(data){
                console.log(data);
            },
            AddData(data){
                fetch('api/buildings', {
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
        }
    }
</script>
