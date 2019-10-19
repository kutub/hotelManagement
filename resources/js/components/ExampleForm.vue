<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic form elements</h4>
                        <form class="forms-sample" @submit.prevent="AddData">
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
</template>

<script>
    export default {
        data(){
           return {
               form:{},
           }
        },
        methods:{
            AddData(){
                console.log(this.form);
            }
        }
    }
</script>
