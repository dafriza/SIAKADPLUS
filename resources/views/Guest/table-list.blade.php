{{-- <?php
session_start();
include '../template/header.php'; ?> --}}
@extends('Guest.template.masterfile')
@section('content')
    <!-- Content Section -->
    <div class="section-content">
        <h3>Table List</h3>
        <label for="">Course</label>
        <input type="text" id="courseVal">
        <label for="">Course Rate</label>
        <input type="text" id="rateVal">
        <button id="addNode">Add Data</button>

        <br>

        <label for="">Search</label>
        <input type="text" id="search">

        <table class="tableData" id="tableData">
        </table>
    </div>
    <!-- End Of Content Section -->
@endsection
{{-- <?php include '../template/footer.php'; ?> --}}
