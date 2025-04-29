<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link <?php echo (uri_string() == 'admin') ? "" : "collapsed" ?>" href="admin">
      <i class="bi bi-grid"></i>
      <span>Orang Tua</span>
    </a>
  </li><!-- End admin Nav -->

  <li class="nav-item">
    <a class="nav-link <?php echo (uri_string() == 'kakak') ? "" : "collapsed" ?>" href="kakak">
      <i class="bi bi-grid"></i>
      <span>kakak</span>
    </a>
  </li><!-- End kakak Nav -->
  <?php
        if (session()->get('role') == 'admin') {
  ?>

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'adik') ? "" : "collapsed" ?>" href="adik">
        <i class="bi bi-grid"></i>
        <span>adik</span>
      </a>
    </li><!-- End adik Nav -->

  <?php
    }
  ?>

</ul>

</aside><!-- End Sidebar-->