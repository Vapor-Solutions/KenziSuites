    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="hotel-search">
                    <h6>ROOM SEARCH</h6>
                    <form id="booking-request-form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" name="email" placeholder="Enter your Email" />
                            <small id="emailErrorMsg" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label>Date Check-In </label>
                            <input type="text" placeholder="Check-In" name="check_in" data-toggle="datepicker"
                                class="date" />
                            <i class="lni lni-calendar"></i>
                            <small id="checkInErrorMsg" class="text-danger"></small>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label>Date Check-Out</label>
                            <input type="text" placeholder="Check-Out" name="check_out" data-toggle="datepicker"
                                class="date" />
                            <i class="lni lni-calendar"></i>
                            <small id="checkOutErrorMsg" class="text-danger"></small>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label>Person </label>
                            <input type="number" name="pax" value="1" />
                            <small id="paxErrorMsg" class="text-danger"></small>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label>&nbsp; </label>
                            <input type="submit" class="custom-button light" data-swiper-parallax="200"
                                value="BOOK NOW !" />

                        </div>
                        <!-- end form-group -->
                    </form>
                </div>
                <!-- end hotel-search -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>


    @push('scripts')
        <script>
            $('#booking-request-form').on('submit', e => {
                e.preventDefault();
                var _self = $('#booking-request-form');
                $('#emailErrorMsg').text(null);
                $('#checkInErrorMsg').text(null);
                $('#checkOutErrorMsg').text(null);
                $('#paxErrorMsg').text(null);
                var __selector = _self.closest('input,textarea');
                _self.closest('div').find('input,textarea').removeAttr('style');
                _self.find('.error-msg').remove();
                _self.closest('div').find('input[type="submit"]').attr('disabled', 'disabled');
                var data = $('#booking-request-form').serialize()
                // console.log(data)
                $.ajax({
                    url: '/book',
                    type: "post",
                    dataType: 'json',
                    data: data,
                    success: function(data) {
                        _self.closest('div').find('input[type="submit"]').removeAttr('disabled');
                        Toast.fire({
                            icon: data.success ? 'success' : 'warning',
                            text: data.success
                        })

                        $('form#booking-request-form').trigger("reset")
                    },
                    error: function(response) {
                        if (response.responseJSON.errors.email) Toast.fire({
                            icon: 'error',
                            text: response.responseJSON.errors.email
                        })
                        if (response.responseJSON.errors.check_in) Toast.fire({
                            icon: 'error',
                            text: response.responseJSON.errors.check_in
                        })
                        if (response.responseJSON.errors.check_out) Toast.fire({
                            icon: 'error',
                            text: response.responseJSON.errors.check_out
                        })
                        if (response.responseJSON.errors.pax) Toast.fire({
                            icon: 'error',
                            text: response.responseJSON.errors.pax
                        })
                        _self.closest('div').find('input[type="submit"]').attr('disabled', false);
                    }
                });
            })
        </script>
    @endpush
