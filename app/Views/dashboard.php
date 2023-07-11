<canvas id="myChart"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Sales',
                data: [12, 19, 3, 5, 2, 3, 10],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<table>
    <thead>
        <tr>
            <th>Month</th>
            <th>Sales</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($salesData as $data): ?>
            <tr>
                <td><?php echo $data['month']; ?></td>
                <td><?php echo $data['sales']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
