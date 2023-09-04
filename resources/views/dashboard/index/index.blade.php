@extends('dashboard.layouts.main')
@section('contents')

<!-- Greeting Login -->
<div class="profile my-5">
    <div class="container px-3">
        <div class="d-flex justify-content-center justify-content-md-start align-items-center">
            <div class="picture rounded-circle"></div>
            <div class="login-greet mx-3 mx-lg-5">
                <h3>Morning Renova!</h3>
                <p>Supervisor</p>
            </div>
        </div>
    </div>
</div>
<!-- End Greeting Login -->

<!-- card section -->
<div class="highlight-card">
    <div class="container mb-5">
        <div class="row row-cols-md-2 row-cols-sm-1 row-cols-1 row-cols-lg-4 g-1">
            <div class="col">
                <div
                    class="card-pending-order bg-success p-4 d-flex justify-content-between align-items-center">
                    <div class="description-card text-white">
                        <p class="text-uppercase">Earnings (Monthly)</p>
                        <h3>200</h3>
                    </div>
                    <div class="logo"></div>
                </div>
            </div>
            <div class="col">
                <div
                    class="card-pending-order bg-danger p-4 d-flex justify-content-between align-items-center">
                    <div class="description-card text-white">
                        <p class="text-uppercase">Earnings (Annuals)</p>
                        <h3>19</h3>
                    </div>
                    <div class="logo"></div>
                </div>
            </div>
            <div class="col">
                <div
                    class="card-pending-order bg-primary p-4 d-flex justify-content-between align-items-center">
                    <div class="description-card text-white">
                        <p class="text-uppercase">Task</p>
                        <h3>50%</h3>
                    </div>
                    <div class="logo"></div>
                </div>
            </div>
            <div class="col">
                <div
                    class="card-pending-order bg-warning p-4 d-flex justify-content-between align-items-center">
                    <div class="description-card text-white">
                        <p class="text-uppercase">Pending Requests</p>
                        <h3>18</h3>
                    </div>
                    <div class="logo"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Card Section -->

@endsection

@section('wkwk')
     <!-- <script>
        const ctx = document.getElementById("myChart");
        const myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: "# of Votes",
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)",
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)",
                    ],
                    borderWidth: 1,
                    borderRadius: Number.MAX_VALUE,
                    borderSkipped: false,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script> 


   <script>
        const ctx2 = document.getElementById("myChart2");
        const myChart2 = new Chart(ctx2, {
            type: "bar",
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: "# of Votes",
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)",
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)",
                    ],
                    borderWidth: 1,
                    borderRadius: Number.MAX_VALUE,
                    borderSkipped: false,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script> -->
@endsection


