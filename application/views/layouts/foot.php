 <!-- Footer -->
 <footer class="bg-dark text-light text-center fixed-bottom">
     <p class="m-0 p-1">&copy; Dinas Perhubungan Kabupaten Kotawaringin Barat.</p>
 </footer>

 <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
     AOS.init();
 </script>
 <!-- Add Bootstrap JS from a CDN (Optional) -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
 <script>
     new DataTable('#example');
     new DataTable('#tabel2');
     new DataTable('#tabeldetail');
 </script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <script src="<?= base_url('assets/js/grafik.js') ?>"></script>
 <script src="<?= base_url('assets/js/grafikTiang.js') ?>"></script>
 <script src="<?= base_url('assets/js/os.js') ?>"></script>
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script>
     $(document).ready(function() {
         $('.slc1').select2();
         $('.slc2').select2();
         $('.slc3').select2();
     });
 </script>