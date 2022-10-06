@if ($role == 'super_admin')
    <span class="badge rounded-pill bg-primary text-white">Super Admin</span>
@elseif ($role == 'admin')
    <span class="badge rounded-pill bg-info text-white">Admin</span>
@elseif ($role == 'omnibusman')
    <span class="badge rounded-pill bg-danger text-white">Omnibusman</span>
@elseif ($role == 'rounder')
    <span class="badge rounded-pill bg-warning text-white">Pelapor</span>
@endif