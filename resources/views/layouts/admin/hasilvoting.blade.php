@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h1>Hasil Voting Paslon</h1>
        <!-- Grafik Lingkaran -->
        <div class="mt-5" style="max-width: 25%; margin: auto;">
        <canvas id="votingChart" width="600" height="600"></canvas>
    </div>
    <table class="table mt-5">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Vision & Mission</th>
                <th>Total Voting</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paslonCategories as $category)
            <tr>
                <td><img src="{{ Storage::url($category->image) }}" alt="{{ $category->name }}" style="max-width: 100px; height: auto;"></td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->vision_mission }}</td>
                <td><p><strong>{{ $category->votings_count }} Voting</strong></p></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    var ctx = document.getElementById('votingChart').getContext('2d');
    var votingChart = new Chart(ctx, {
        type: 'pie', // Tipe grafik lingkaran
        data: {
            labels: @json($chartData['labels']),
            datasets: [{
                data: @json($chartData['data']),
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 206, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)',
                    'rgb(255, 159, 64)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 206, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)',
                    'rgb(255, 159, 64)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Total Voting Paslon'
                }
            }
        }
    });
</script>
@endsection