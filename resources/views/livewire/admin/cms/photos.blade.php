<div>
    <x-slot name="header">
        <h5>
            Site Photos
        </h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body file-manager">
                <h5 class="mb-3">All Photos</h5>
                <h6>Homepage Photos</h6>

                <div class="row">
                    <div class="col-md-4 col-6">
                        <img src="/frontend/images/slide01.jpg" class="img-thumbnail" alt="">
                        <button class="m-5 btn btn-primary" data-bs-toggle="modal" data-bs-target="#slider1">Change</button>

                        <!-- Modal -->
                        <div class="modal fade" id="slider1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title">Change Slider 01</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form action="{{ route('change.slider1') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                  <label for="slider1" class="form-label">Slider 1</label>
                                                  <input type="file"
                                                    class="form-control" name="slider1" id="slider1" aria-describedby="slider1" placeholder="">
                                                  <small id="slider1" class="form-text text-muted">Choose an image pf .JPG or .JPEG formats</small>
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
                        <button class="m-5 btn btn-primary" data-bs-toggle="modal" data-bs-target="#slider2">Change</button>

                        <!-- Modal -->
                        <div class="modal fade" id="slider2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title">Change Slider 01</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form action="{{ route('change.slider2') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                  <label for="slider2" class="form-label">Slider 1</label>
                                                  <input type="file"
                                                    class="form-control" name="slider2" id="slider2" aria-describedby="slider2" placeholder="">
                                                  <small id="slider2" class="form-text text-muted">Choose an image pf .JPG or .JPEG formats</small>
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
                        <button class="m-5 btn btn-primary" data-bs-toggle="modal" data-bs-target="#slider3">Change</button>

                        <!-- Modal -->
                        <div class="modal fade" id="slider3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title">Change Slider 01</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form action="{{ route('change.slider3') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                  <label for="slider3" class="form-label">Slider 1</label>
                                                  <input type="file"
                                                    class="form-control" name="slider3" id="slider3" aria-describedby="slider3" placeholder="">
                                                  <small id="slider3" class="form-text text-muted">Choose an image pf .JPG or .JPEG formats</small>
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
