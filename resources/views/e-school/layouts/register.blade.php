@extends('e-school.layouts.master')

@section("content")
<div class="container">
    <h3>Register School</h3>

    <form method="POST" action="/register">
        @csrf

        <div class="mb-3">
            <label for="province" class="form-label">Province</label>
            <input type="text" class="form-control" id="province" name="province" required>
        </div>

        <div class="mb-3">
            <label for="district" class="form-label">District</label>
            <input type="text" class="form-control" id="district" name="district" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">School Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="code" class="form-label">School Code</label>
            <input type="text" class="form-control" id="code" name="code" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
        </div>

        <div class="mb-3">
            <label for="telephone" class="form-label">Telephone (Optional)</label>
            <input type="text" class="form-control" id="telephone_number" name="telephone">
        </div>

        <div class="mb-3">
            <label for="verification_letter_url" class="form-label">Verification Letter URL</label>
            <input type="text" class="form-control" id="verification_letter_url" name="verification_letter_url" required>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection
