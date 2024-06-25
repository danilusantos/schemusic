<!-- Main Footer -->
<footer class="main-footer bg-light">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        <p id="time"></p>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2024-2024 <a href="https://schemusic.com.br">Schemusic</a>.</strong>
</footer>

@push('scripts')
    <script>
        let timeDisplay = document.getElementById("time");

        function refreshTime() {
            let dateString = new Date().toLocaleString("pt-BR", {
                timeZone: "America/Sao_Paulo",
            });
            let formattedString = dateString.replace(", ", " - ");
            timeDisplay.innerHTML = formattedString;
        }

        setInterval(refreshTime, 1000);
    </script>
@endpush
