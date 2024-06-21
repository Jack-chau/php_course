<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<?php
function printSideBar() {
?>
 <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
            <i class="bi bi-house"></i>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addNewStaff.php">
            <i class="bi bi-person-plus"></i>
              Add new staff
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="staff.php">
            <i class="bi bi-people"></i>
              Staff
            </a>
          </li>
          
        </ul>

      
    </nav>

<?php
}
?>