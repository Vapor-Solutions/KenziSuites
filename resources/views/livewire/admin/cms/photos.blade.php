<div>
    <x-slot name="header">
        <h5>
            Site Photos
        </h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body file-manager">
                <h4 class="mb-3">All Photos</h4>
                <h6 class="mt-5">Slider Photos</h6>
                <div class="row">
                    <div class="col-md-4 col-6">
                        <img src="/frontend/images/slide01.jpg" class="img-thumbnail" alt="">
                        <button class="m-5 btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#slider1">Change</button>

                        <!-- Modal -->
                        <div class="modal fade" id="slider1" tabindex="-1" role="dialog"
                            aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Change Slider 01</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form action="{{ route('change.slider1') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="slider1" class="form-label">Slider 1</label>
                                                    <input type="file" class="form-control" name="slider1"
                                                        id="slider1" aria-describedby="slider1" placeholder="">
                                                    <small id="slider1" class="form-text text-muted">Choose an image
                                                        of .JPG or .JPEG formats</small>
                                                </div>

                                                <input type="submit" class="btn btn-primary">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <img src="/frontend/images/slide02.jpg" class="img-thumbnail" alt="">
                        <button class="m-5 btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#slider2">Change</button>

                        <!-- Modal -->
                        <div class="modal fade" id="slider2" tabindex="-1" role="dialog"
                            aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Change Slider 01</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form action="{{ route('change.slider2') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="slider2" class="form-label">Slider 1</label>
                                                    <input type="file" class="form-control" name="slider2"
                                                        id="slider2" aria-describedby="slider2" placeholder="">
                                                    <small id="slider2" class="form-text text-muted">Choose an image
                                                        of .JPG or .JPEG formats</small>
                                                </div>

                                                <input type="submit" class="btn btn-primary">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <img src="/frontend/images/slide03.jpg" class="img-thumbnail" alt="">
                        <button class="m-5 btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#slider3">Change</button>

                        <!-- Modal -->
                        <div class="modal fade" id="slider3" tabindex="-1" role="dialog"
                            aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Change Slider 01</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form action="{{ route('change.slider3') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="slider3" class="form-label">Slider 1</label>
                                                    <input type="file" class="form-control" name="slider3"
                                                        id="slider3" aria-describedby="slider3" placeholder="">
                                                    <small id="slider3" class="form-text text-muted">Choose an image
                                                        of .JPG or .JPEG formats</small>
                                                </div>

                                                <input type="submit" class="btn btn-primary">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                <h6 class="mt-5">Section Background Photos</h6>
                <div class="row">
                    <div class="col-md-4 col-6">
                        <img src="/frontend/images/section-bg01.jpg" class="img-thumbnail" alt="">
                        <button class="m-5 btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#sectionbg1">Change</button>

                        <!-- Modal -->
                        <div class="modal fade" id="sectionbg1" tabindex="-1" role="dialog"
                            aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Change Section Background 1</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form action="{{ route('change.sectionbg1') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="sectionbg1" class="form-label">Section Background 1</label>
                                                    <input type="file" class="form-control" name="sectionbg1"
                                                        id="sectionbg1" aria-describedby="sectionbg1" placeholder="">
                                                    <small id="sectionbg1" class="form-text text-muted">Choose an
                                                        image of .JPG or .JPEG formats</small>
                                                </div>

                                                <input type="submit" class="btn btn-primary">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <img src="/frontend/images/section-bg02.jpg" class="img-thumbnail" alt="">
                        <button class="m-5 btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#sectionbg2">Change</button>

                        <!-- Modal -->
                        <div class="modal fade" id="sectionbg2" tabindex="-1" role="dialog"
                            aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Change Section Background 2</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form action="{{ route('change.sectionbg2') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="sectionbg2" class="form-label">Section Background 2</label>
                                                    <input type="file" class="form-control" name="sectionbg2"
                                                        id="sectionbg2" aria-describedby="sectionbg2" placeholder="">
                                                    <small id="sectionbg2" class="form-text text-muted">Choose an
                                                        image of .JPG or .JPEG formats</small>
                                                </div>

                                                <input type="submit" class="btn btn-primary">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="mt-5">Content Photos</h6>

                    <div class="row">
                        <div class="col-md-4 col-6">
                            <img src="/frontend/images/content-image01.jpg" class="img-thumbnail" alt="">
                            <button class="m-5 btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#contentImage1">Change</button>

                            <!-- Modal -->
                            <div class="modal fade" id="contentImage1" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Change Content Image</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <form action="{{ route('change.contentImage1') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="contentImage1" class="form-label">Content Image 1</label>
                                                        <input type="file" class="form-control"
                                                            name="contentImage1" id="contentImage1"
                                                            aria-describedby="contentImage1" placeholder="">
                                                        <small id="contentImage1" class="form-text text-muted">Choose
                                                            an
                                                            image pf .JPG or .JPEG formats</small>
                                                    </div>

                                                    <input type="submit" class="btn btn-primary">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="mt-5">Side Photos</h6>

                    <div class="row">
                        <div class="col-md-4 col-6">
                            <img src="/frontend/images/side-image01.jpg" class="img-thumbnail" alt="">
                            <button class="m-5 btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#side1">Change</button>

                            <!-- Modal -->
                            <div class="modal fade" id="side1" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Change Side Image 01</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <form action="{{ route('change.side1') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="side1" class="form-label">Side Image 01</label>
                                                        <input type="file" class="form-control" name="side1"
                                                            id="side1" aria-describedby="side1" placeholder="">
                                                        <small id="side1" class="form-text text-muted">Choose an
                                                            image of .JPG or .JPEG formats</small>
                                                    </div>

                                                    <input type="submit" class="btn btn-primary">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="/frontend/images/side-image02.jpg" class="img-thumbnail" alt="">
                            <button class="m-5 btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#side2">Change</button>

                            <!-- Modal -->
                            <div class="modal fade" id="side2" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Change Side Image 02</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <form action="{{ route('change.side2') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="side2" class="form-label">Side Image 02</label>
                                                        <input type="file" class="form-control" name="side2"
                                                            id="side2" aria-describedby="side2" placeholder="">
                                                        <small id="side2" class="form-text text-muted">Choose an
                                                            image of .JPG or .JPEG formats</small>
                                                    </div>

                                                    <input type="submit" class="btn btn-primary">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="/frontend/images/side-image03.jpg" class="img-thumbnail" alt="">
                            <button class="m-5 btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#side3">Change</button>

                            <!-- Modal -->
                            <div class="modal fade" id="side3" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Change Side Image 03</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <form action="{{ route('change.side3') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="side3" class="form-label">Side Image 03</label>
                                                        <input type="file" class="form-control" name="side3"
                                                            id="side3" aria-describedby="side3" placeholder="">
                                                        <small id="side3" class="form-text text-muted">Choose an
                                                            image of .JPG or .JPEG formats</small>
                                                    </div>

                                                    <input type="submit" class="btn btn-primary">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="/frontend/images/side-image04.jpg" class="img-thumbnail" alt="">
                            <button class="m-5 btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#side4">Change</button>

                            <!-- Modal -->
                            <div class="modal fade" id="side4" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Change Side Image 04</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <form action="{{ route('change.side4') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="side4" class="form-label">Side Image 04</label>
                                                        <input type="file" class="form-control" name="side4"
                                                            id="side4" aria-describedby="side4" placeholder="">
                                                        <small id="side4" class="form-text text-muted">Choose an
                                                            image of .JPG or .JPEG formats</small>
                                                    </div>

                                                    <input type="submit" class="btn btn-primary">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="/frontend/images/side-image05.jpg" class="img-thumbnail" alt="">
                            <button class="m-5 btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#side5">Change</button>

                            <!-- Modal -->
                            <div class="modal fade" id="side5" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Change Side Image 05</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <form action="{{ route('change.side5') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="side5" class="form-label">Side Image 05</label>
                                                        <input type="file" class="form-control" name="side5"
                                                            id="side5" aria-describedby="side5" placeholder="">
                                                        <small id="side5" class="form-text text-muted">Choose an
                                                            image of .JPG or .JPEG formats</small>
                                                    </div>

                                                    <input type="submit" class="btn btn-primary">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="/frontend/images/side-image06.jpg" class="img-thumbnail" alt="">
                            <button class="m-5 btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#side6">Change</button>

                            <!-- Modal -->
                            <div class="modal fade" id="side6" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Change Slider 01</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <form action="{{ route('change.side6') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="side6" class="form-label">Slider 1</label>
                                                        <input type="file" class="form-control" name="side6"
                                                            id="side6" aria-describedby="side6" placeholder="">
                                                        <small id="side6" class="form-text text-muted">Choose an
                                                            image of .JPG or .JPEG formats</small>
                                                    </div>

                                                    <input type="submit" class="btn btn-primary">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('css')
    <meta http-equiv="Cache-control" content="no-cache">
@endpush
