@extends('admin.layout.app', ['title' => 'Dashboard'])

@section('breadcrumb')
    {{ Breadcrumbs::render('admin.dashboard.index') }}
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/chart.js/Chart.min.js') }}">
@endpush
@section('content')
    <div class="container">
        <div class="row mx-auto">

            <div class="col-md-4 col-6 bg-">
                <x-card-count-dashboard title="Usuários" value="{{ $data['users'] }}" color="cyan"
                    route="{{ route('admin.administration.users.index') }}" icon="user" />
            </div>

            <div class="col-md-4 col-6">
                <x-card-count-dashboard title="Grupos" value="{{ $data['groups'] }}" color="primary"
                    route="{{ route('admin.administration.groups.index') }}" icon="users" />
            </div>

            <div class="col-md-4 col-6">
                <x-card-count-dashboard title="Planos" value="{{ $data['plans'] }}" color="secondary"
                    route="{{ route('admin.administration.plans.index') }}" icon="list" />
            </div>

        </div>

        <div class="row mx-auto">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light ui-sortable-handle">
                        <h2 class="card-title"><i class="fas fa-chart-line"></i> Acessos ao site</h2>
                    </div>
                    <div class="card-body">
                        <canvas id="accessChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- ChartJs -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <script>
        var ctx = document.getElementById('accessChart').getContext('2d');
        var accessLogs = @json($data['accessLogs']);

        function formatDate(dateString) {
            var date = new Date(dateString);
            var day = String(date.getDate()).padStart(2, '0');
            var month = String(date.getMonth() + 1).padStart(2, '0');
            var year = date.getFullYear();
            return `${day}/${month}/${year}`;
        }

        var dates = accessLogs.map(log => formatDate(log.date));
        var counts = accessLogs.map(log => log.count);

        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: dates,
                datasets: [{
                    label: 'Acessos',
                    data: counts,
                    borderColor: '#1564A9',
                    borderWidth: 2,
                    pointRadius: 5,
                    pointBackgroundColor: '#1564A9',
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1,
                            callback: function(value) {
                                return Number.isInteger(value) ? value : null;
                            }
                        }
                    },
                    x: {
                        ticks: {
                            autoSkip: false,
                            beginAtZero: true
                        }
                    }
                },
                responsive: true,
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return `Acessos: ${tooltipItem.raw}`;
                            }
                        }
                    }
                }
            }
        });
    </script>
@endpush
