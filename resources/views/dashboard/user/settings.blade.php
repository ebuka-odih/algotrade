@extends('dashboard.layout.app')
@section('content')

<div class="content-body" style="min-height: 996px;">
    <!-- row -->
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card card-setting">
                    <div class="card-header pb-2 d-flex flex-wrap justify-content-between border-0 align-items-center">
                        <h4 class="d-flex align-items-center heading mb-0"><i class="bi bi-gear icon-title me-2"></i> Account ID</h4>
                    </div>
                    <div class="card-body pt-2 d-flex align-items-end">
                        <p class="mb-0 me-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a data-bs-toggle="modal" data-bs-target="#switchAccountSettings" class="btn btn-primary" href="#">
                            <div class="fas fa-pencil-alt me-1"></div>
                            Edit
                        </a>
                    </div>
                    <i class="flaticon-settings bg-icon"></i>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card card-setting">
                    <div class="card-header pb-2 d-flex flex-wrap justify-content-between border-0 align-items-center">
                        <h4 class="d-flex align-items-center heading mb-0"><i class="bi bi-envelope icon-title me-2"></i> Change Email</h4>
                    </div>
                    <div class="card-body pt-2 d-flex align-items-end">
                        <p class="mb-0 me-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a data-bs-toggle="modal" data-bs-target="#modalNewEmailAddress" class="btn btn-primary" href="#">
                            <div class="fas fa-pencil-alt me-1"></div>
                            Edit
                        </a>
                    </div>
                    <i class="flaticon-email bg-icon"></i>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card card-setting">
                    <div class="card-header pb-2 d-flex flex-wrap justify-content-between border-0 align-items-center">
                        <h4 class="d-flex align-items-center heading mb-0"><i class="bi bi-lock icon-title me-2"></i> Change Password</h4>
                    </div>
                    <div class="card-body pt-2 d-flex align-items-end">
                        <p class="mb-0 me-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a data-bs-toggle="modal" data-bs-target="#changePassword" class="btn btn-primary" href="#">
                            <div class="fas fa-pencil-alt me-1"></div>
                            Edit
                        </a>
                    </div>
                    <i class="flaticon-lock bg-icon"></i>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card card-setting">
                    <div class="card-header pb-2 d-flex flex-wrap justify-content-between border-0 align-items-center">
                        <h4 class="d-flex align-items-center heading mb-0">
                            <i class="bi bi-telephone icon-title me-2"></i> Contact
                        </h4>
                    </div>
                    <div class="card-body pt-2 d-flex align-items-end">
                        <p class="mb-0 me-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a data-bs-toggle="modal" data-bs-target="#switchSettingsContact" class="btn btn-primary" href="#">
                            <div class="fas fa-pencil-alt me-1"></div>
                            Edit
                        </a>
                    </div>
                    <i class="flaticon-phone-call bg-icon"></i>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card card-setting">
                    <div class="card-header pb-2 d-flex flex-wrap justify-content-between border-0 align-items-center">
                        <h4 class="d-flex align-items-center heading mb-0"><i class="bi bi-box-arrow-in-right icon-title me-2"></i> Login Activity</h4>
                    </div>
                    <div class="card-body pt-2 d-flex align-items-end">
                        <p class="mb-0 me-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a data-bs-toggle="modal" data-bs-target="#switchLoginActivity" class="btn btn-primary" href="#">
                            <div class="fas fa-pencil-alt me-1"></div>
                            Edit
                        </a>
                    </div>
                    <i class="flaticon-user bg-icon"></i>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card card-setting">
                    <div class="card-header pb-2 d-flex flex-wrap justify-content-between border-0 align-items-center">
                        <h4 class="d-flex align-items-center heading mb-0"><i class="bi bi-code-slash icon-title me-2"></i> Anti Phishing</h4>
                    </div>
                    <div class="card-body pt-2 d-flex align-items-end">
                        <p class="mb-0 me-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a class="btn btn-primary" href="#">
                            <div class="fas fa-pencil-alt me-1"></div>
                            Edit
                        </a>
                    </div>
                    <i class="flaticon-coding-1 bg-icon"></i>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card card-setting">
                    <div class="card-header pb-2 d-flex flex-wrap justify-content-between border-0 align-items-center">
                        <h4 class="d-flex align-items-center heading mb-0">
                            <i class="bi bi-google icon-title me-2"></i> Google Authenticator
                        </h4>
                    </div>
                    <div class="card-body pt-2 d-flex align-items-end">
                        <p class="mb-0 me-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox">
                        </div>
                    </div>
                    <i class="flaticon-search bg-icon"></i>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card card-setting">
                    <div class="card-header pb-2 d-flex flex-wrap justify-content-between border-0 align-items-center">
                        <h4 class="d-flex align-items-center heading mb-0">
                            <i class="bi bi-card-text icon-title me-2">
                            </i> Text Message (SMS)
                        </h4>
                    </div>
                    <div class="card-body pt-2 d-flex align-items-end">
                        <p class="mb-0 me-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="form-check form-switch"><input class="form-check-input" type="checkbox"></div>
                    </div>
                    <i class="flaticon-conversation bg-icon"></i>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
