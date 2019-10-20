<template>
    <div class="container-fuild">
        <div class="row">
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        Available
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        Available
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        Available
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        Available
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card" >
                    <div class="card-body">
                        Available
                    </div>
                </div>
            </div>
            <div class="col-sm-2" style="margin-bottom:15px;">
                <div class="card">
                    <div class="card-body">
                        Available
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        Available
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top:40px;">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body"> 
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name</label>
                                    <input v-model="form.name" type="email" class="form-control" id="inputEmail4" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Phone</label>
                                    <input v-model="form.phone" type="text" class="form-control" id="inputEmail4" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nid No</label>
                                    <input v-model="form.nid" type="text" class="form-control" id="inputEmail4" placeholder="Nid No">
                                </div> 
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Location</label>
                                    <input v-model="form.location" type="text" class="form-control" id="inputAddress" placeholder="Location">
                                </div>
                            </div>
                         
                            <div class="form-group">
                                <label for="exampleTextarea1">Address</label>
                                <textarea v-model="form.address" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                            </div>
                            <div class="form-row">
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
                                        <option v-bind:value="flat.id" v-for="flat in flats" v-bind:key="flat.id">
                                        {{ flat.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Total Rent</label>
                                    <input v-model="form.rent" type="text" class="form-control" id="inputAddress" placeholder="Total Rent">
                                </div>                                
                            </div>
                            
                            <a @click="onAddBooking" type="submit" class="btn btn-primary">Sign in</a>
                        </form> 
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
                return{
                   form:{
                       "name": '',

                   },
                   buildings:[],
                   flats:[],
                }
        },
        created(){
            this.getBuilding();
        },
        methods:{
            onAddBooking(){
                fetch('api/renters', {
                    method: 'post',
                    body: JSON.stringify(this.form),
                    headers: {
                        'content-type': 'application/json'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    this.form['renters_id'] = data.data.id
                    fetch('api/booking', {
                        method: 'post',
                        body: JSON.stringify(this.form),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        this.form['status'] = 'booked';
                        fetch('api/flats/'+data.data.flats_id, {
                            method: 'put',
                            body: JSON.stringify(this.form),
                            headers: {
                                'content-type': 'application/json'
                            }
                        })
                        .then(res => res.json())
                        .then(data => {
                            window.location.href = '/rental-agreement';
                        })
                        .catch(err => console.log(err))
                        })
                    .catch(err => console.log(err))
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
                fetch('api/flats/'+event.target.value)
                .then(res => res.json())
                .then(res => {
                    this.flats = res.data;
                    console.log(this.flats);
                })
            },
        }
    }
</script>
