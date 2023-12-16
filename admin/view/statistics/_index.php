<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link rel="shortcut icon" href="../../public/img/logo/123.png" type="image/x-icon">
    <link href="../../public/admin/css/style.css" rel="stylesheet" />
    <script src="../../public/admin/js/all.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="sb-nav-fixed">
    <?php include_once '../view/inc/_navbar.php' ?>
    <div id="layoutSidenav">
        <?php include_once '../view/inc/_sideleft.php' ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div
                                class=" text-white d-flex flex-column align-items-center justify-content-center border-end">
                                <i class='bx bxs-user fs-3 text-success'></i>
                                <div class="text-black fw-Bolder fs-2 m-0 lh-1">
                                    <?php echo $userQuantity ?>
                                </div>
                                <div class="fs-10 fw-Bolder text-secondary">New User</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div
                                class=" text-white d-flex flex-column align-items-center justify-content-center border-end">
                                <i class='bx bxs-cart fs-3 text-primary'></i>
                                <div class="text-black fw-Bolder fs-2 m-0 lh-1">
                                    <?php echo $orderQuantity ?>
                                </div>
                                <div class="fs-10 fw-Bolder text-secondary">New Order</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div
                                class=" text-white d-flex flex-column align-items-center justify-content-center border-end">
                                <i class='bx bxs-cube fs-3 text-warning'></i>
                                <div class="text-black fw-Bolder fs-2 m-0 lh-1">
                                    <?php echo $productQuantity ?>
                                </div>
                                <div class="fs-10 fw-Bolder text-secondary">Inventory</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class=" text-white d-flex flex-column align-items-center justify-content-center">
                                <i class='bx bx-search fs-3 text-danger fw-bold'></i>
                                <div class="text-black fw-Bolder fs-2 m-0 lh-1">---</div>
                                <div class="fs-10 fw-Bolder text-secondary">Page Views</div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Area Chart
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Bar Chart
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="200"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <form action="../statistics/index.php" method="post" class="row mt-2">
                        <div class="col-xl-2">
                            <label for="">From:</label>
                            <div class="card d-flex mb-4">
                                <?php
                                $currentDateTime = new DateTime(); // Lấy thời gian hiện tại
                                $formattedDate = $currentDateTime->format('Y-m-d');
                                $currentDateTime->modify('-10 days'); // Trừ đi 10 ngày
                                $tenDaysAgo = $currentDateTime->format('Y-m-d'); // Định dạng thành chuỗi "Y-m-d"
                                if (isset($_SESSION['dateFrom']) && isset($_SESSION['dateArrive'])) {
                                    $tenDaysAgo = $_SESSION['dateFrom'];
                                    $formattedDate = $_SESSION['dateArrive'];
                                }
                                ?>
                                <input name="from" type="date" value="<?php echo $tenDaysAgo; ?>">

                            </div>
                        </div>
                        <div class="col-xl-2">
                            <label for="">Arrive:</label>
                            <div class="card d-flex mb-4">
                                <input name="arrive" type="date" value="<?php echo $formattedDate ?>">
                            </div>
                        </div>
                        <div class="col-xl-1">
                            <label for=""></label>
                            <div class="card d-flex mb-4">
                                <button class="border-0 btnOrderDate">Search</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Order statistics
                                </div>
                                <div class="card-body">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Code</th>
                                                <th>Status</th>
                                                <th>User_is</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>STT</th>
                                                <th>Code</th>
                                                <th>Status</th>
                                                <th>User_is</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Date</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php $index = 0; ?>
                                            <?php foreach ($_SESSION['orderStatistical'] as $order) { ?>
                                                <tr>
                                                    <td>
                                                        <?php echo ++$index; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $order['code']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $order['status']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $order['users_id']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $order['address']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $order['phone']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $order['date']; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="../../public/admin/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../public/admin/js/scripts.js"></script>
    <script src="../../public/admin/js/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="../../public/admin/js/simple-datatables@latest.js" crossorigin="anonymous"></script>
    <script src="../../public/admin/js/datatables-simple-demo.js"></script>
    <script>

        // Dữ liệu mẫu (số lượng bán theo thời gian)
        var salesData = {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            datasets: [{
                label: 'Sell ​​number',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                data: [500, 600, 700, 450, 800, 900, 300, 1100, 1200, 324, 1461, 1400],
            }]
        };

        // Cấu hình biểu đồ
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    type: 'category',
                    labels: salesData.labels,
                },
                y: {
                    beginAtZero: true
                }
            }
        };

        // Lấy thẻ canvas và vẽ biểu đồ
        var ctx = document.getElementById('myAreaChart').getContext('2d');
        var myAreaChart = new Chart(ctx, {
            type: 'line',
            data: salesData,
            options: chartOptions
        });
    </script>
    <script>
        // Dữ liệu mẫu (doanh thu theo các tháng)

        var revenueData = {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            datasets: [{
                label: 'Revenue',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                data: [5000, 6000, 7000, 4500, 8000, 9000, 5000, 11000, 12000, 5240, 14610, 15000],
            }]
        };

        // Cấu hình biểu đồ
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    type: 'category',
                    labels: revenueData.labels,
                },
                y: {
                    beginAtZero: true
                }
            }
        };

        // Lấy thẻ canvas và vẽ biểu đồ cột
        var ctx = document.getElementById('myBarChart').getContext('2d');
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: revenueData,
            options: chartOptions
        });
    </script>
</body>

</html>