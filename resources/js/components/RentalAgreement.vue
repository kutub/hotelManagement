<template>
    <div class="container">
        <div class="row">
             <div class="col-sm-10 offset-sm-1" style="text-align:center; background-color:#FF992C;color:#fff;padding:20px;">
                <h2>HOUSE RENTAL AGREEMENT</h2>
             </div>   
        </div>
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="row">
                    <div class="col-sm-6" style="margin-right:0;padding-right:0">
                        <div class="card">
                            <div class="card-header" style="background-color:#252C41;color:#fff;">
                                <h4>Landlord Information</h4>
                            </div>
                            <div class="card-body">
                                <ul style="padding:0">
                                    <li style="list-style:none">
                                        <h4>Name</h4>
                                        <p>Saif Ali</p>
                                    </li>
                                    <li style="list-style:none">
                                        <h4>Address</h4>
                                        <p>1 Trailsway Road, 34 Southridge Pass Miami,</p>
                                    </li>
                                    <li style="list-style:none">
                                        <h4>Phone Number</h4>
                                        <P>0174357897</P>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6" style="margin-left:0;padding-left:0;border-left:none">
                        <div class="card">
                            <div class="card-header" style="background-color:#252C41;color:#fff;">
                                <h4>Tenant Information</h4>
                            </div>
                            <div class="card-body">
                                <ul  style="padding:0">
                                    <li style="list-style:none">
                                        <h4>Name</h4>
                                        <p>Saif Ali</p>
                                    </li>
                                    <li style="list-style:none">
                                        <h4>Phone Number</h4>
                                        <P>0174357897</P>
                                    </li>
                                    <li style="list-style:none">
                                        <h4>Number of Occupants</h4>
                                        <p>9</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header" style="background-color:#252C41;color:#fff;">
                                <h4>House Rental Information</h4>
                            </div>
                            <div class="card-body row">
                                <ul class="col-sm-6"  style="padding:0">
                                    <li style="list-style:none">
                                        <h4>House Rental Address</h4>
                                        <p>1 Trailsway Road, 34 Southridge Pass Miami, Florida, 33129 United States</p>
                                    </li>
                                    <li style="list-style:none">
                                        <h4>Start Date of Agreement</h4>
                                        <P>June 22, 2005</P>
                                    </li>
                                    <li style="list-style:none">
                                        <h4>End Date of Agreement</h4>
                                        <p>June 22, 2005</p>
                                    </li>
                                </ul>
                                <ul class="col-sm-6"  style="padding:0">
                                    <li style="list-style:none">
                                        <h4>Rent Amount per Month</h4>
                                        <p>10000</p>
                                    </li>
                                    <li style="list-style:none">
                                        <h4>Security Deposit</h4>
                                        <P>20000</P>
                                    </li>
                                    <li style="list-style:none">
                                        <h4>Late Charges</h4>
                                        <p>0</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header" style="background-color:#F1404B;color:#fff;text-align:center">
                                <h4>Terms and Conditions</h4>
                            </div>
                            <div class="card-body">
                                <p>This House Rental Agreement made this <strong>Wednesday, June 22, 2005</strong> is between <strong>Stesha Dengel</strong>
                                (Landlord) and the <strong>Stesha Dengel</strong> (Tenant).</p>
                                <h5>I. ACKNOWLEDGMENT</h5>
                                <p>The Landlord agrees to rent the house in its present condition located at (Address below) to the Tenant under this
                                terms.</p>
                                <h5>II. AGREEMENT TERM</h5>
                                <p>This House Rental Agreement will begin on Wednesday, June 22, 2005 and end on Wednesday, June 22, 2005 . After this, a renewal agreement will be created for the new term.</p>                       
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
        data() {
                return{
                   form:{},
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
                            window.location.reload();
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
