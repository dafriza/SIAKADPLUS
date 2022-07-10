{{-- <?php
session_start();
include '../template/header.php'; ?> --}}
@extends('Guest.template.masterfile')
@section('content')
                <!-- Content Section -->
                <div class="section-content">
                    <h3 style="text-align: center; margin-bottom:20px;">Calculator</h3>
                    <div class="calc">
                        <div class="field"></div>
                        <div class="tombol">
                            <span>C</span>
                            <span>-</span>
                            <span>0</span>
                            <span>=</span>
                            <span>&nbsp</span>

                        </div>
                        <div class="tombol">
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                            <span>/</span>
                            <span>&nbsp</span>

                        </div>
                        <div class="tombol">
                            <span>4</span>
                            <span>5</span>
                            <span>6</span>
                            <span>X</span>
                            <span>&nbsp</span>
                        </div>
                        <div class="tombol">
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>+</span>
                            <span>%</span>
                        </div>
                    </div>
                </div>
                <!-- End Of Content Section -->
                @endsection
{{-- <?php include '../template/footer.php'; ?> --}}
