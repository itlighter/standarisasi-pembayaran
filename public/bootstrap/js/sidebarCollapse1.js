$(function() {
  // Initialize Bootstrap tooltips
  $('[data-bs-toggle="tooltip"]').each(function() {
    new bootstrap.Tooltip(this);
  });

  // Initialize Bootstrap popovers
  $('[data-bs-toggle="popover"]').each(function() {
    new bootstrap.Popover(this);
  });
});