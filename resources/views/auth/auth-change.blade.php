
@extends('admin')
@section('content')
<div class="col-sm-12 col-lg-6">
    <div class="card">
        <div class="card-body">
            <!-- resources/views/auth/change-password.blade.php -->
            <form method="POST" action="{{ route('change.pass') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="row">
                        <div class="col-md-12 col-12 mb-2">
                            <label for="current_password" class="form-label">Password Lama</label>
                            <input type="password" name="current_password" id="current_password" class="form-control" required>
                        </div>
                        <div class="col-md-12 col-12 mb-2">
                            <label for="new_password" class="form-label">Password Baru</label>
                            <input type="password" name="new_password" id="new_password" class="form-control" required>
                        </div>
                        <div class="col-md-12 col-12 mb-2">
                            <label for="new_password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 ms-auto me-0">
                            <button type="submit" class="btn btn-primary float-end">Ubah Password</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
    
@endsection
@section('scripts')
<script>
        $(document).ready(function () {
            $(".floatNumberField").change(function() {
                $(this).val(parseFloat($(this).val()).toFixed(2));
            });
        });
</script>

@endsection

