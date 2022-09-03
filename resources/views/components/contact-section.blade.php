<section class="content-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-title">
                    <h6>DON'T HESITATE PLEASE</h6>
                    <h2>Contact us for your idea or your new projects</h2>
                </div>
                <!-- end section-title -->
                <form class="contact-form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" />
                        <small class="text-danger" id="nameErrorMsg"></small>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your E-mail" />
                        <small class="text-danger" id="emailErrorMsg"></small>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Phone Number" />
                        <small class="text-danger" id="phoneErrorMsg"></small>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message"></textarea>
                        <small class="text-danger" id="messageErrorMsg"></small>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <input type="submit" value="SEND MESSAGE" />
                    </div>
                    <!-- end form-group -->
                </form>
                <!-- end contact-form -->
            </div>
            <!-- end col-4 -->
            <div class="col-xl-4 offset-xl-1 col-lg-5">
                <div class="contact-box">
                    <h6>KISII</h6>
                    <address>
                        Menyinkwa, Kisii-Kilgoris Rd

                        <strong>Kisii, Kenya</strong>
                    </address>
                </div>
            </div>
            <!-- end col-7 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>



@push('scripts')
    <script>
        $('.contact-form').on('submit', e => {
            e.preventDefault();
            var _self = $('.contact-form');
            $('#nameErrorMsg').text(null);
            $('#emailErrorMsg').text(null);
            $('#phoneErrorMsg').text(null);
            $('#messageErrorMsg').text(null);
            var __selector = _self.closest('input,textarea');
            _self.closest('div').find('input,textarea').removeAttr('style');
            _self.find('.error-msg').remove();
            _self.closest('div').find('input[type="submit"]').attr('disabled', 'disabled');
            var data = $('.contact-form').serialize()
            // console.log(data)
            $.ajax({
                url: '/contact',
                type: "post",
                dataType: 'json',
                data: data,
                success: function(data) {
                    _self.closest('div').find('input[type="submit"]').removeAttr('disabled');
                    Toast.fire({
                        icon: data.success ? 'success' : 'warning',
                        text: data.success
                    })

                    $('form.contact-form').trigger("reset")
                },
                error: function(response) {
                    // if (response.responseJSON.errors.name) Toast.fire({
                    //     icon: 'error',
                    //     text: response.responseJSON.errors.name
                    // })
                    // if (response.responseJSON.errors.email) Toast.fire({
                    //     icon: 'error',
                    //     text: response.responseJSON.errors.email
                    // })
                    // if (response.responseJSON.errors.phone) Toast.fire({
                    //     icon: 'error',
                    //     text: response.responseJSON.errors.phone
                    // })
                    // if (response.responseJSON.errors.message) Toast.fire({
                    //     icon: 'error',
                    //     text: response.responseJSON.errors.message
                    // })

                    for (const [key, value] of Object.entries(response.responseJSON.errors)) {
                        Toast.fire({
                            icon: 'error',
                            text: value
                        })
                    }
                    _self.closest('div').find('input[type="submit"]').attr('disabled', false);
                }
            });
        })
    </script>
@endpush
