@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container">

    <div class="w-auto p-3" style="background-color: rgb(210, 210, 210);">
        <canvas id="myChart"></canvas>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const citas = '{{ $citas }}';
        const citasEnero = '{{ $citasEnero }}';
        const citasFebrero = '{{ $citasFebrero }}';
        const citasMarzo = '{{ $citasMarzo }}';
        const citasAbril = '{{ $citasAbril }}';
        const citasMayo = '{{ $citasMayo }}';
        const citasJunio = '{{ $citasJunio }}';
        const citasJulio = '{{ $citasJulio }}';
        const citasAgosto = '{{ $citasAgosto }}';
        const citasSeptimbre = '{{ $citasSeptiembre }}';
        const citasOctubre = '{{ $citasOctubre }}';
        const citasNoviembre = '{{ $citasNoviembre }}';
        const citasDiciembre = '{{ $citasDiciembre }}';
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
                'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                datasets: [{
                    label: 'Cantidad servicios Programados en el mes ',
                    data: [citasEnero, citasFebrero, citasMarzo, citasAbril, citasMayo, citasJunio,citasJulio,
                    citasAgosto,citasSeptimbre,citasOctubre,citasNoviembre,citasDiciembre],
                    backgroundColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                    ],
                    borderWidth: 3

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
</div>
@stop

