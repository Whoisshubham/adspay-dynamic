<!-- edit user -->
<div class="modal fade add_model" tabindex="-1" id="viewblog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Card Details</h4>
                <button type="button" class="close cancel-model" data-bs-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body">

                <div class="d-flex justify-content-between">
                    @php
                        $cardDataArray=json_decode($cardData->card_details,true);
                    @endphp
                   <div>
                    <div>
                        <h6>Card Number:- <span style="letter-spacing: 3px">{{ $cardDataArray['cardNumber']}}</span></h6>
                    </div>
                    <div>
                        <h6>Cvv:- {{ $cardDataArray['cvv']}}</h6>
                    </div>
                    <div>
                        <h6>Expiry Date:- {{ $cardDataArray['expdt']}}</h6>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
