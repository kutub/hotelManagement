<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align:center">
                        <h2>Rent Receipt</h2>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <p>Month: <span>January</span></p>
                            </div>
                            <div class="col-sm-4">
                                <p>Receipt #: <span>046809</span></p>
                                <p>Date: <span>12/12/2019</span></p>
                            </div>
                        </div>
                        <div class="row" style="padding:0 12px;">
                            <div class="col-sm-12" style="border-width:1px;border-style:dashed;padding:20px">
                                <p style="line-height:2em">Rent Receipt From <strong>_______________</strong> of <strong>__________tk</strong> for 
                                <strong>_________________</strong> against the settlement of amount agreed by 
                                <strong>____________________________</strong>. This amount is referring to the confirmation of
                                compliance of rental agreement.
                                </p>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-sm-12">
                                <table class="table table-bordered">
                                    <tbody style="text-align:right"> 
                                        <tr>
                                            <td style="padding: 0.55rem !important;">Total Amount te be Received</td>
                                            <td style="padding: 0.55rem !important;">1000</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0.55rem !important;">Amount Received</td>
                                            <td style="padding: 0.55rem !important;"></td>
                                        </tr>
                                         <tr>
                                            <td style="padding: 0.55rem !important;"> Balance Due</td>
                                            <td style="padding: 0.55rem !important;"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row" style="margin-top:40px;">
                            <div class="col-sm-6" style="text-align:center;padding:0 40px;">
                               <p style="border-top:1px solid #000">Signed By Tenent</p>
                            </div>
                            <div class="col-sm-6" style="text-align:center;padding:0 40px;">
                                <p style="border-top:1px solid #000">Signed By Owner</p>
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
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
