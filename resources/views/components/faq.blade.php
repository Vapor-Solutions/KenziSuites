<section class="content-section">
    <div class="container">
        <div class="section-title">
            <h6>Frequently Asked Questions</h6>
            <h2>What would you like to know?</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="accordion" role="tablist">
                    @foreach (App\Models\Question::all() as $faq)
                        <div class="card">
                            <div class="card-header" role="tab" id="heading{{ $faq->id }}">
                                <a data-toggle="collapse" href="#collapseOne{{ $faq->id }}"
                                    aria-controls="collapseOne{{ $faq->id }}">{{ $faq->question }}</a>
                            </div>
                            <div id="collapseOne{{ $faq->id }}" class="collapse" role="tabpanel"
                                aria-labelledby="heading{{ $faq->id }}" data-parent="#accordion">
                                <div class="card-body">
                                    {{ $faq->answer }}
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                    @endforeach
                    <!-- end card -->
                </div>
            </div>
        </div>
    </div>
</section>
