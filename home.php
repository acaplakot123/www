<?php
ob_start();
?>

<style>
.hero {
    background: linear-gradient(135deg, #0d6efd 0%, #052c65 100%);
    border-radius: .75rem;
}
.hero i.hero-icon {
    font-size: 7rem;
    opacity: .85;
    display: inline-block;
    animation: float 3s ease-in-out infinite;
}
@keyframes float {
    0%, 100% { transform: translateY(0); }
    50%      { transform: translateY(-14px); }
}
.menu-card { transition: transform .2s, box-shadow .2s; }
.menu-card:hover { transform: translateY(-6px); box-shadow: 0 .75rem 1.5rem rgba(0,0,0,.2) !important; }
.carousel-item img { height: 320px; object-fit: cover; }
</style>

<!-- Hero / Welcome -->
<div class="hero text-white p-4 p-md-5 mb-4 shadow">
    <div class="row align-items-center">
        <div class="col-md-8">
            <p class="text-uppercase mb-1 opacity-75">Welcome to</p>
            <h1 class="display-5 fw-bold mb-2">Bolder</h1>
            <p class="lead mb-4">Secure phone holders for every ride. Manage your products, customers, staff and orders — all in one place.</p>
            <a href="orders.php" class="btn btn-light btn-lg me-2"><i class="bi bi-cart-plus me-1"></i>New Order</a>
            <a href="products.php" class="btn btn-outline-light btn-lg"><i class="bi bi-box-seam me-1"></i>Shop Phone Holders</a>
        </div>
        <div class="col-md-4 text-center d-none d-md-block">
            <i class="bi bi-phone hero-icon"></i>
        </div>
    </div>
</div>

<!-- Quick links -->
<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-3">
        <a href="products.php" class="text-decoration-none">
            <div class="card menu-card shadow-sm h-100 border-0 border-top border-4 border-primary">
                <div class="card-body text-center">
                    <i class="bi bi-box-seam-fill text-primary display-4"></i>
                    <h5 class="mt-2 text-dark">Products</h5>
                    <p class="text-muted mb-0">Manage your inventory</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-xl-3">
        <a href="customers.php" class="text-decoration-none">
            <div class="card menu-card shadow-sm h-100 border-0 border-top border-4 border-success">
                <div class="card-body text-center">
                    <i class="bi bi-people-fill text-success display-4"></i>
                    <h5 class="mt-2 text-dark">Customers</h5>
                    <p class="text-muted mb-0">Track your customers</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-xl-3">
        <a href="staff.php" class="text-decoration-none">
            <div class="card menu-card shadow-sm h-100 border-0 border-top border-4 border-warning">
                <div class="card-body text-center">
                    <i class="bi bi-person-badge-fill text-warning display-4"></i>
                    <h5 class="mt-2 text-dark">Staffs</h5>
                    <p class="text-muted mb-0">Manage your team</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-xl-3">
        <a href="orders.php" class="text-decoration-none">
            <div class="card menu-card shadow-sm h-100 border-0 border-top border-4 border-danger">
                <div class="card-body text-center">
                    <i class="bi bi-cart-fill text-danger display-4"></i>
                    <h5 class="mt-2 text-dark">Orders</h5>
                    <p class="text-muted mb-0">Create and view orders</p>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- Featured products carousel -->
<div class="card shadow-sm">
    <div class="card-body">
        <h5 class="mb-3"><i class="bi bi-stars text-primary me-2"></i>Featured Products</h5>
        <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img src="images/product01.jpg" class="d-block w-100" alt="Handlebar Phone Holder">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                        <h5>Handlebar Phone Holder</h5>
                        <p>Keep your phone secure and in view on every ride.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/product02.jpg" class="d-block w-100" alt="Stem Phone Mount">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                        <h5>Stem Phone Mount</h5>
                        <p>Stable, low-profile mounting for rough roads and trails.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/product03.jpg" class="d-block w-100" alt="Waterproof Phone Holder">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                        <h5>Waterproof Phone Holder</h5>
                        <p>Navigate rain or shine without worrying about your phone.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>