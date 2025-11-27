<?php
?>
<div class="col-lg-3 col-md-6">
  <div class="service-item">
    <span class="number"><?= htmlspecialchars($service['number']) ?></span>
    <div class="service-item-icon">
      <?= $service['icon'] ?? '<i class="bi bi-gear" style="font-size:4rem"></i>' ?>
    </div>
    <div class="service-item-content">
      <h3 class="service-heading"><?= htmlspecialchars($service['title']) ?></h3>
      <p><?= htmlspecialchars($service['desc']) ?></p>
      <a href="#" 
         class="btn btn-success btn-sm mt-3 service-open"
         data-bs-toggle="modal"
         data-bs-target="#serviceModal"
         data-service="<?= htmlspecialchars($service['title']) ?>"
         data-desc="<?= htmlspecialchars($service['desc']) ?>">Learn More</a>
    </div>
  </div>
</div>