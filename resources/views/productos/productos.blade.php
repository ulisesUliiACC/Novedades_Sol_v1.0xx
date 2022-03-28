<div class="row">
    @foreach
    <div class="col-lg-4 col-md-6 col-sm col-12">
        <div class="card card-profile">
            <div class="card-header justify-content-end pb-0">
                <div class="dropdown">
                    <button class="btn btn-link" type="button" data-toggle="dropdown">
                        <span class="dropdown-dots fs--1"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right border py-0">
                        <div class="py-2">
                            <a  class="dropdown-item" href="javascript:void(0)">Editar</a>
                            <a class="dropdown-item text-danger" href="javascript:void(0)">delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body pt-2">
                <div class="text-center">
                    <div class="profile-foto">
                        <img src="images/profile/small/pic2.jpg" width="100" class="img-fluid rounded-circle" alt="Profile">
                    </div>
                    <h3 class="mt-4 mb-1"></h3>
                </div>
            </div>

        </div>
    </div>
    @endforeach
</div>