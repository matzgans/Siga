
@extends('admin')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <!-- resources/views/auth/change-password.blade.php -->
            <form method="POST" action="{{ route('change.pass') }}" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="current_password">Password Baru</label>
                    <input type="password" name="current_password" id="current_password" required>
                </div>

                <div>
                    <label for="new_password">New Password</label>
                    <input type="password" name="new_password" id="new_password" required>
                </div>

                <div>
                    <label for="new_password_confirmation">Confirm New Password</label>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation" required>
                </div>

                <button type="submit">Ubah Password</button>
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

