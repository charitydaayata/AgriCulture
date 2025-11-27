<?php
$pageTitle = 'Services - AgriCulture';
$bodyClass = 'services-page'; 
include __DIR__ . '/partials/header.php';

$services = [
    [
    'number' => '01',
    'title' => 'Planting',
    'desc' => 'We provide professional planting services such as soil prep, transplanting and crop establishment for healthy growth.',
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width:4rem; height:4rem; display:block;" aria-hidden="true" focusable="false"><path d="M2 20s2-4 6-4 6 2 8 4" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 13v-4" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 8c1-1 3-1 3 0c0 1-1 2-3 3" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 8c-1-1-3-1-3 0c0 1 1 2 3 3" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>'
    ]
,
    [
        'number' => '02',
        'title' => 'Mulching',
        'desc' => 'Mulching services to conserve moisture, suppress weeds and improve soil health using organic materials.',
        'icon' => '<i class="bi bi-tree" style="font-size:4rem"></i>'
    ],
    [
        'number' => '03',
        'title' => 'Plowing',
        'desc' => 'Deep tillage and plowing services to prepare fields, incorporate residues and improve soil structure.',
        'icon' => '<i class="bi bi-funnel" style="font-size:4rem"></i>'
    ],
    [
        'number' => '04',
        'title' => 'Mowing',
        'desc' => 'Regular mowing and grass management to keep areas neat and support pasture health.',
        'icon' => '<i class="bi bi-scissors" style="font-size:4rem"></i>'
    ],
    [
        'number' => '05',
        'title' => 'Seeding',
        'desc' => 'Seeding services including seed selection, precise sowing and germination support for best yields.',
        'icon' => '<i class="bi bi-box-seam" style="font-size:4rem"></i>'
    ],
    [
        'number' => '06',
        'title' => 'Fresh Vegetables',
        'desc' => 'Supply of fresh, locally-grown vegetables harvested and delivered daily for peak freshness.',
        'icon' => '<i class="bi bi-basket" style="font-size:4rem"></i>'
    ],
    [
        'number' => '07',
        'title' => 'Watering',
        'desc' => 'Irrigation and watering plans tailored to crop needs — automated or manual schedules available.',
        'icon' => '<i class="bi bi-droplet" style="font-size:4rem"></i>'
    ],
    [
        'number' => '08',
        'title' => 'Vegetable Selling',
        'desc' => 'Wholesale and retail vegetable selling with quality control and flexible delivery options.',
        'icon' => '<i class="bi bi-cart" style="font-size:4rem"></i>'
    ]
];
?>

<main class="main">
  <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
    <div class="container position-relative">
      <h1>Services</h1>
      <nav class="breadcrumbs"><ol><li><a href="index.html">Home</a></li><li class="current">Services</li></ol></nav>
    </div>
  </div>

  <section id="services" class="services section">
    <div class="container section-title" data-aos="fade-up">
      <h2>SERVICES</h2>
      <p>Providing Fresh Produce Every Single Day</p>
    </div>

    <div class="content">
      <div class="container">
        <div class="row g-4">
          <?php foreach ($services as $service): ?>
            <?php include __DIR__ . '/partials/service-item.php'; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Single reusable modal -->
  <div class="modal fade" id="serviceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="serviceModalTitle">Service</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="serviceModalBody"><p></p></div>
        <div class="modal-footer">
          <a id="serviceModalRequest" class="btn btn-success" href="contact.html?service=">Request Service</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>

<script>
  var serviceModal = document.getElementById('serviceModal');
  serviceModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var title = button.getAttribute('data-title');
    var desc = button.getAttribute('data-desc');

    serviceModal.querySelector('#serviceModalTitle').textContent = title;
    serviceModal.querySelector('#serviceModalBody').innerHTML = '<p>' + desc + '</p>';
  });
</script>
